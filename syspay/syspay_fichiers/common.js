String.prototype.trim = function(){
    return (this || "").replace( /^(\s|\u00A0)+|(\s|\u00A0)+$/g, "" );
};

/* permet d'uniformiser l'appel de clé entre navigateurs selon l'évènement : doit fonctionner sans jquery normalement */
KeyCleaner = {
    /**
    * Retourne la valeur de la clé si l'élément supporte le code ou false dans le cas contraire
    */
    call: function(e){
        var intKey = e.which || e.keyCode;

        if( e.type == 'keypress' )
            return this.keypress(intKey);
        else if( e.type == 'keydown' )
            return this.keydown(intKey);

        return false;
    },
    keypress: function(intKey){
        // to prevent problem with opera, see here : http://jimblackler.net/blog/?p=20
        if ( intKey == 8 )
            return false;

        return (
            ( intKey > 41 && intKey < 45) ||
            ( intKey > 46 && intKey < 91 ) ||
            ( intKey > 91 && intKey < 107 ) ||
            ( intKey == 108 ) ||
            ( intKey > 109 && intKey < 256 ) ||
            intKey == 13 // event 13 (enter) move here to prevent opera problem
        ) ? intKey : false;
    },
    keydown: function(intKey){ // Les clés ici ne doivent pas être possibles dans le keypress (on doit ainsi éviter les doubles évènements) - Note : pour keydown, les clés supèrieurs à 32 varient trop pour avoir une vrai signification utilisable, ce qui explique l'utilisation de 2 évènements pour tous gérer
        var arrCall = [8, 9, 27, 32, 33, 34, 35, 36, 37, 38, 39, 40, 46, 107, 109]; // 8 : backspace ; 9 : tabulation ; 27 : echap ; 46 : delete ; 45 : insert ; 91 : windows key (only for windows), 107 (touche +), 109 (touche -)

        for(var z in arrCall)
            if ( intKey == arrCall[z] )
                return intKey;
        return false;
    }
};

Modal = function(objSetting){
    this.setting = this.setSetting(objSetting);
    this.modal = this.init();
};
Modal.prototype = {
    getSettingDefault : {
        backgroundColor: '#000',
        opacity: 75,
        id: 'jsModal',
        close: '.close',
        closeOnBkd: true,
        closeOnEsc: true,
        content: '',
        positionX: 0.5,
        positionY: 0.5
    },
    getSetting: function(){
        return this.setting;
    },
    setSetting: function(objSetting){
        return $.extend(true, {}, this.getSettingDefault, objSetting);
    },
    init: function(){
        var setting = this.getSetting(), blkModal = this.getModal();

        if( blkModal.length == 0 ){
            var blkModal = $([
                '<div style="position:fixed;left:0;top:0;width:100%;display:none;overflow:hidden;z-index:1001;" id="', setting.id, '" class="jsModal">',
                    '<div style="position:absolute;z-index:1000;left:0;top:0;background-color:', setting.backgroundColor, ';width:100%;', this.opacityCss(setting.opacity), '" class="aBkd"></div>',
                    '<div style="position:absolute;left:0;top:0;z-index:1001;" class="aContent"></div>',
                '</div>'
            ].join(''));

            blkModal.appendTo('body');

            var cur = this;

            $(window).bind('resize.modal scroll.modal', function(){
                if( $(cur.getModal()).is(':visible') )
                    cur.refreshModal();
            });

            if( setting.closeOnBkd ){
                $('.aBkd', blkModal).click(function(){
                    cur.close();
                });
            }

            if( setting.close ){
                $(setting.close, blkModal).click(function(){
                    cur.close();
                });
            }

            $(document).bind('keypress.modal keydown.modal', function(e){
                var intKey = KeyCleaner.call(e);
                if( intKey ){
                    if( setting.closeOnEsc && intKey == 27 ){
                        cur.close();
                    }
                }
            });

            this.refreshContent();
        }

        return this;
    },
    show: function(){
        var blkModal = this.getModal();
        blkModal.show();

        if( this.isIpad )
            $('body').animate({scrollTop: 0}, 1000);

        this.refreshModal();

        return this;
    },
    getModal: function(){
        return $('#' + this.getSetting().id);
    },
    refreshModal: function(){
        var setting = this.getSetting(),
            blkModal = this.getModal();

        var docS = this.getSizeDocument(),
            winS = this.getSizeWindow(),
            blkBkd = $('.aBkd', blkModal),
            blkContent = $('.aContent', blkModal),
            blkInContent = $('> *:eq(0)', blkContent);

        if( this.isIE6() ){
            blkModalCss = {
                position: 'absolute',
                left: 0,
                top: 0,
                width: winS.width + 'px',
                height: docS.height + 'px'
            };
            blkBkdCss = {
                width: '100%',
                height: '100%'
            };
            blkContentCss = {
                marginLeft: typeof setting.positionX == 'string' ? setting.positionX : this.calcul(winS.width, blkInContent.outerWidth(), setting.positionX),
                marginTop: typeof setting.positionY == 'string' ? setting.positionY : (this.calcul(winS.height, blkInContent.outerHeight(), setting.positionY)) + $(window).scrollTop()
            };
        }
        else{
            blkModalCss = {
                height: docS.height + 'px'
            };
            blkBkdCss = {
                height: docS.height + 'px'
            };
            blkContentCss = {
                marginLeft: typeof setting.positionX == 'string' ? setting.positionX : this.calcul(winS.width, blkInContent.outerWidth(), setting.positionX),
                marginTop: typeof setting.positionY == 'string' ? setting.positionY : this.calcul(winS.height, blkInContent.outerHeight(), setting.positionY)
            };
        }

        blkModal.css(blkModalCss);
        blkBkd.css(blkBkdCss);
        blkContent.css(blkContentCss);

        return this;
    },
    setContent: function(content){
        if( typeof content == 'string' )
            content = $(content);
        else if( typeof content != 'object' )
            content = $('');

        this.getSetting().content = content;

        this.refreshContent();

        return this;
    },
    refreshContent: function(){
        var setting = this.getSetting();

        if( typeof setting.content != 'object' )
            setting.content = $('');

        $('.aContent', this.getModal()).append(setting.content);

        this.refreshModal();

        return this;
    },
    close: function(){
        this.getModal().hide();

        return this;
    },
    opacityCss: function(intOpacity){
        return [
            'opacity:.', intOpacity, ';',
            'filter:alpha(opacity=', intOpacity, ')', ';',
            '-ms-filter:progid:DXImageTransform.Microsoft.Alpha(Opacity=', intOpacity, ')', ';',
            '-moz-opacity:.', intOpacity
        ].join('');
    },
    calcul: function(intBlkOut, intBlkIn, position){
        var x = Math.floor( (intBlkOut - intBlkIn) * position);
        return x >= 0 ? x : 0;
    },
    getSizeWindow: function(){
        var win = $(window);
        return {width: win.width(), height: win.height()};
    },
    getSizeDocument: function(){
        var doc = $(document);
        return {width: doc.width(), height: doc.height()};
    },
    isIE6: function(){
        return /MSIE 6/.test(navigator.userAgent);
    },
    isIpad: function(){
        return /iPad/.test(navigator.userAgent);
    }
};

/* integrated */
//$(document).ready(function(){
if( top != self ){
    try {
        if(typeof parent.testIframe == 'function') {
            if(!window.document.getElementById("iframeIntegrated")){
                if(parent.testIframe()) {
                    window.top.location = window.location;
                    window.stop();
                    document.execCommand('Stop');
                }
            }
        }
    } catch(e) {

    }
}
//});