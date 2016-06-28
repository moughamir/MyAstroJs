$(document).ready(function(){
    var cardsPath = 'images_landing/tarot-vps-1/cards/';
    var cardsCounter = 1;
    
    // -- animation survol des cartes verso --
    $('#cards-container .notFlipped').hover(
        function(e) {
            if (cardsCounter !== 6) {
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
            if (cardsCounter !== 6) {
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
    
    // -- sélection de carte --
    $(document).on('click', '#cards-container .notFlipped', function(e){
        e.preventDefault();
        
        if (cardsCounter == 6) {
            // toutes les cartes ont été tirées
            return false;
        }
        // fixe la position
        var position = $(this).position();
        if ($(window).width() > 490) {
            $(this).css({ position:'absolute', top: position.top+'px', left: position.left+'px'});
        }
        // tirage
        var cardNumber = $(this).attr('data-card');
        var isItAlreadyThere = $('#cards-result .flipped-card[data-card="'+cardNumber+'"]');
        var test = true;
        while (test == true) {
            if (typeof(isItAlreadyThere) != 'undefined' && isItAlreadyThere != null){
                test = true;
                cardNumber = Math.floor((Math.random() * 12) + 1);
                isItAlreadyThere = $('#cards-result .flipped-card[data-card="'+cardNumber+'"]').offset();
            } else {
                test = false;
            }
        }
        // Mise à jour des données
        $('.flipped-card[data-number="'+cardsCounter+'"]').attr('data-card', cardNumber);
        $(this).attr('data-counter', cardsCounter);
        $(this).removeClass('notFlipped').addClass('Flipped');
        
        // animation carte se retourne
        var width = $(this).css('width');
        $(this).animate({width: '0px'}, 400, function() {
            $(this).children('img').attr('src', cardsPath+cardNumber+'.png');
        });            
        $(this).animate({width: width}, 400);
        // animation placement
        if ($(window).width() > 580) { // si version grand format
            // la carte retournée va se placer dans l'encart
            var position = $('.flipped-card[data-number="'+cardsCounter+'"]').position();
            $(this).animate({top: position.top+'px', left: position.left+'px', 'margin-left': '-5px', 'margin-right':'0'}, 500);
        } else {
            // la carte reste sur place
            $(this).animate({top: '0px'}, 200);
        }
        
        cardsCounter++;
        
        return false;
    });
    
    // -- Replace les cartes retournées au redimensionnement --
    $(window).resize(function() {
        if ($(window).width() > 580) {
            for (var i = 1; i <= 5; i++) {
                var position = $('#cards-result .flipped-card[data-number="'+i+'"]').position();
                if (position !== undefined){
                    $('#cards-container .card[data-counter="'+i+'"]').css({position:'absolute', top: position.top+'px', left: position.left+'px'});
                }
            };
        }
    });
        
    // -- Protection formulaire --
    $('#form-container').on('keypress focus click change',function(e){
        if (cardsCounter < 6) {
            alert("Veuillez d'abord tirer vos cartes.");
        
            return false;
        }
    });
});