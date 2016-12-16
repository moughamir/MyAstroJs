/* 
    ------------------------------------
    --     Module de tirage tarot     --
    ------------------------------------

    Created on : 01 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/

function shuffle(array){
    var currentIndex = array.length, temporaryValue, randomIndex;
    // While there remain elements to shuffle...
    while (0 !== currentIndex) {
        // Pick a remaining element...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;
        // And swap it with the current element.
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }
    return array;
}
    
$(document).ready(function(){
    
    cardsPath = (typeof cardsPath !== "undefined") ? cardsPath : 'tarot/cartes/original-grand/';
    trt_deckNbCards = (typeof trt_deckNbCards !== "undefined") ? trt_deckNbCards : 12;
    nbCardsToDraw = (typeof nbCardsToDraw !== "undefined") ? nbCardsToDraw : 5;
    alwaysDraw = typeof alwaysDraw === "object" ? alwaysDraw : typeof alwaysDraw !== "undefined" ? [alwaysDraw] : [];
    trt_forceDrawFirst = (typeof trt_forceDrawFirst !== "undefined") ? trt_forceDrawFirst : true;
    trt_lock = (typeof trt_lock !== "undefined") ? trt_lock : false;
    trt_scrollOnComplete = (typeof trt_scrollOnComplete !== "undefined") ? trt_scrollOnComplete : true;
    trt_minSize = (typeof trt_minSize !== "undefined") ? trt_minSize : 610;
    
    var cardsCounter = 0;
    var alreadyPicked = [];
    alwaysDraw = shuffle(alwaysDraw);
    var alwaysDraw_event = false;
    
    /* -- animation survol des cartes verso --
    $('#cards-container .notFlipped').hover(
        function(e) {
            if (cardsCounter <= nbCardsToDraw - 1 && !trt_lock) {
                e.preventDefault();
                // Called when the mouse enters the element
                if ($(this).hasClass('notFlipped')){
                    $(this).animate({top: '20px'}, 250);
                }
                return false;
            } else {
                $(this).css({cursor:'not-allowed'});
            }
        },
        function(e) {
            if (cardsCounter <= nbCardsToDraw - 1 && !trt_lock) {
                e.preventDefault();
                // Called when the mouse leaves the element
                if ($(this).hasClass('notFlipped')) {
                    $(this).animate({top: '0px'}, 0);
                }
                return false;
            } else {
                $(this).css({cursor:'not-allowed'});
            }
        }
    );
    */
    if ($(window).width() <= trt_minSize) {
        $('.toShuffle').removeClass('toShuffle');
    } else {
        if($('#cards-container').hasClass('toShuffle')){
            trt_lock = true;
        }
        $(document).on('click', '#cards-shuffle', function(e){
            cards = $('#scn-tarot-draw .WidgetTarot-Card');
            cards.each(function(e){
                setTimeout(function(){
                    card = cards.eq(e);
                    if($(card).hasClass('toShuffle')){
                        $(card).removeClass('toShuffle');
                    } else {
                        $(card).addClass('toShuffle');
                    }
                    if(e == cards.length - 1){
                        setTimeout(function(){
                            $('#cards-container').removeClass('toShuffle');
                        }, 1000); // 1s temps transition css
                        trt_lock = false;
                        $(document).trigger('trt_shuffled_event');
                    }
                }, e * 250);
            });
        });
    }
    
    // -- sélection de carte --
    $(document).on('click', '#cards-container .notFlipped', function(e){
        if(!trt_lock){
            e.preventDefault();
            var card = $(this);

            cardsCounter++;
            var currCardCounter = cardsCounter;

            if (currCardCounter > 5) {
                // toutes les cartes ont été tirées
                return false;
            }

            // tirage
            var cardNumber = 0;
            var nbAlwaysDraw = alwaysDraw.length;
            if(nbAlwaysDraw > 0){
                if(Math.random() >= (1 - (1/nbCardsToDraw * (currCardCounter + nbAlwaysDraw - 1 )))){
                    alwaysDraw_event = true;
                    cardNumber = alwaysDraw[0];
                    alwaysDraw.splice(0, 1);
                }
            }
            if(cardNumber === 0){
                do {
                    cardNumber = Math.floor((Math.random() * trt_deckNbCards) + 1);
                } while (alreadyPicked.indexOf(cardNumber) !== -1);
            }
            alreadyPicked.push(cardNumber);

            // Mise à jour des données
            $('#cards-result .place[data-number="' + currCardCounter + '"]').data('card', cardNumber);
            card.attr('data-counter', currCardCounter);
            card.removeClass('notFlipped').addClass('Flipped');
            var place = $('#cards-result .place[data-number="' + currCardCounter + '"]');
            $('form').append('<input type="hidden" name="cards[]" value="'+ cardNumber +'.png" />');

            // chargement dos de la carte
            card.children('.back').css({'background-image': 'url('+ cardsPath + cardNumber +'.png)'});

            // animation placement
            setTimeout(function(){
                // indique le résultat quand la carte est retournée
                card.attr('data-result', cardNumber);
                // evenement alwaysDraw                    
                if(alwaysDraw_event){
                    $(document).trigger('trt_alwaysDraw');
                    alwaysDraw_event = false;
                }
                if ($(window).width() > trt_minSize) { // si version grand format
                    // fixe la position en absolute
                    var position = card.position();
                    card.css({ position:'absolute', top: position.top+'px', left: position.left+'px'});
                    // déplace la carte dans l'encart
                    var position = place.position();
                    card.animate({ margin: 0}, 250);
                    card.animate({top: position.top+'px', left: position.left+'px'}, 500);
                } else {
                    // la carte reste sur place
                    card.animate({top: '0px'}, 250);
                }
                
                setTimeout(function(){
                    // remplace l'image de la carte retournée
                    $('.WidgetTarot-Result .place[data-number="' + currCardCounter + '"]').css({'background-image': 'url('+ cardsPath + cardNumber +'.png)', 'background-color':'transparent'});
                    // Scroll vers le formulaire quand le tirage est terminé
                    if (currCardCounter === nbCardsToDraw) {
                        $(document).trigger('trt_completed_event');
                        if (trt_scrollOnComplete){
                            $('html,body').animate({scrollTop: $('#form-container').offset().top}, 1000);
                        }
                    }
                }, 1000);
                
            }, 500); // 0.5s le temps que la transition de retournement de la carte se termine
        }
        
        return false;
    });
    
    // -- Replace les cartes retournées au redimensionnement --
    $(window).resize(function() {
        if ($(window).width() > trt_minSize) {
            for (var i = 1; i <= 5; i++) {
                var position = $('#cards-container .place[data-number="'+i+'"]').position();
                if (position !== undefined){
                    $('#cards-container .Flipped[data-counter="'+i+'"]').css({position:'absolute', top: position.top+'px', left: position.left+'px'});
                }
            };
        }
    });
        
    // -- Protection formulaire --
    if(trt_forceDrawFirst){
        $('form').on('keypress focus click change', function(e){
            if (cardsCounter < nbCardsToDraw) {
                alert("Veuillez d'abord tirer vos cartes.");

                return false;
            }
        });
    }
});