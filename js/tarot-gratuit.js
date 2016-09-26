$(document).ready(function(){
    var cards = new Array("1.png","2.png","3.png","4.png","5.png","6.png","7.png","8.png","9.png","10.png","11.png","12.png","13.png","14.png","15.png","16.png","17.png","18.png","19.png","20.png");
    var shuffled = shuffle(cards);
    var alreadyPicked = 0;
    var w = $(window).width();
    var c_positionModifier = (typeof positionModifier == "number") ? positionModifier : 0;

    if(w > 480){
        $('.paquet img')
            .mouseenter(function(){ // on descend la carte
                if(!$(this).data('hasBeenClicked')){
                    $(this).animate({top: "+=20px"}, 150);
                }
            }).mouseleave(function(){ // On remonte la carte à sa position de départ
                if(!$(this).data('hasBeenClicked')){
                    $(this).animate({top: $(this).data('pos')}, 150);
                }
            });
    } else {
        $('.paquet img')
            .mouseenter(function(){ // On descend la carte
                if(!$(this).data('hasBeenClicked')){
                    $(this).animate({top: "+=5px"}, 150);
                }
            }).mouseleave(function(){ // On remonte la carte à sa position de départ
                if(!$(this).data('hasBeenClicked')){
                    $(this).animate({top: "="+$(this).data('pos')}, 150);
                }
            });
    }
    
    $('.paquet img').on('click',function(){
        var w = $(window).width();
        if(!$(this).data('hasBeenClicked') && alreadyPicked < 5){
            $(this).animate({width:"0px"}, 150);

            var picked = shuffled.shift();

            $('form').append('<input type="hidden" name="cards[]" value="'+ picked +'" />');

            $(this).attr('src', '/tarot/cartes/original-grand/'+ picked);
            $(this).animate({width: "91px"}, 200);

            var Itemposition     = $(this).position();
            var Relativeposition = $('.relative').position();
            var Finalposition    = $('.donneHandler').children().eq(alreadyPicked).offset();

            $(this).css({'webkit-transform': 'rotate(0deg)', '-ms-transform': 'rotate(0deg)', 'transform': 'rotate(0deg)'});

            if(w >= 480){
                if(w > 979){
                    $(this).animate({top: '323', left: (Finalposition.left - Relativeposition.left - 135 + c_positionModifier)}, 800);
                } else if(w >= 800 ){
                    $(this).animate({top: '323', left: (Finalposition.left - Relativeposition.left - 136 + c_positionModifier)}, 800);	
                } else {
                    $(this).animate({top: '323', left: (Finalposition.left - Relativeposition.left - 53 + c_positionModifier)}, 800);
                }
            } else {
                $(this).animate({width: "70px", height: "125", top: '0', left: Itemposition.left}, 800);
            }

            $(this).data('hasBeenClicked','true');
            alreadyPicked += 1;
        }
        if(alreadyPicked == 5){
            if(w > 480){
                $('form.hidden').removeClass('hidden');
                $('#img-first').addClass('hidden');
                $('input').removeAttr('disabled');
            } else {
                $('form.hidden').removeClass('hidden');
                $('#img-first').addClass('hidden');
                $('input').removeAttr('disabled');
            }
        }
    });

    $('input').click(function(){
        if(alreadyPicked < 5){
            alert('Veuillez d’abord tirer vos cartes');
        }
    });

    $('select').click(function(){
        if(alreadyPicked < 5){
            alert('Veuillez d’abord tirer vos cartes');
        }
    });
});

// - Tools
function shuffle(o){ //v1.0
    for(var j, x, i = o.length; i; j = Math.floor(Math.random() * i), x = o[--i], o[i] = o[j], o[j] = x);
    return o;
};