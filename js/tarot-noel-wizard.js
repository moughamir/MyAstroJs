/*
    --------------------------------------------------
    --     Scénario de formulaire tarot de noël     --
    --------------------------------------------------

    Created on : 12 décembre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
$(document).ready(function(){

    var home = $('#scn-home');
    var cta_home = $('#cta-scn-home');
    var text = $('#scn-text');
    var cta_text = $('#cta-scn-text');
    var tarot = $('#scn-tarot');
    var tarot_title = $('#scn-tarot-title');
    var cta_shuffle = $('#cards-shuffle');
    var cta_tarot = $('#cta-scn-tarot');
    var result = $('#scn-result');
    var form = $('#scn-form');

    // ETAPE1 - ACCUEIL
    text.hide();
    tarot.hide();
    result.hide();
    form.hide();

    // ETAPE2 - TEXTE
    cta_home.click(function(){
        home.addClass('scaleUp').delay(500).queue(function(){
            $(this).hide().dequeue();
            text.addClass('scaleEnter').show();
        });
    });

    // ETAPE3 - MÉLANGE
    cta_text.click(function(){
        text.removeClass('scaleEnter').addClass("moveToLeft").delay(500).queue(function(){
            $(this).hide().dequeue();
            tarot.addClass('moveFromRight').show();
        });
    });

    // ETAPE4 - TIRAGE
    if ($(window).width() <= trt_minSize){
        cta_shuffle.hide();
        tarot_title.text("Choisissez 5 cartes");
    } else {
        cta_shuffle.click(function(){
            $(this).addClass("scaleDown");
        });
        $(document).on('trt_shuffled_event', function(){
            tarot_title.text("Choisissez 5 cartes");
        });
    }
    
    // ETAPE5 - RÉSULTAT
    $(document).on('trt_completed_event', function(){
        tarot.removeClass('moveFromRight').addClass("moveToLeft").delay(500).queue(function(){
            $(this).hide().dequeue();
            result.addClass('moveFromRight').show();
        });
    });
    
    // ETAPE6 - FORMULAIRE
    cta_tarot.click(function(){
        result.removeClass("moveFromRight").addClass("moveToLeft").delay(500).queue(function(){
            $(this).hide().dequeue();
            form.addClass("moveFromRight").show();
        });
    });
});
