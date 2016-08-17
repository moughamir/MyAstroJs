/* 
    ----------------------------------------------------
    --     Scénario de formulaire tarot en direct     --
    ----------------------------------------------------

    Created on : 26 mai 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
$(document).ready(function(){
    
    var psychic = $('#scn-psychic');
    var theme = $('#scn-theme');
    var form = $('#scn-form');
    var tarot_band = $('#scn-tarot .ContentBand');
    var tarot_title = $('#scn-tarot .Title');
    var tarot_draw = $('#scn-tarot-draw');
    var tarot_result = $('#scn-tarot-result');
    
    // ETAPE1 - CHOIX DU VOYANT
    theme.hide();
    form.hide();
    tarot_result.hide();
    trt_lock = true;
    
    // ETAPE2 - CHOIX DE LA QUESTION
    $(document).on('change, click', 'input[name="voyant"]', function(e){
        setTimeout(function(){
            psychic.hide();
            theme.show();
        }, 600);
    });
    
    // ETAPE3 - TIRAGE
    $(document).on('change, click', 'input[name="question_code"]', function(e){
        setTimeout(function(){
            theme.hide();
            tarot_band.addClass('Principal');
            if($(window).width() > trt_minSize){
                tarot_result.show();
            }
            trt_lock = false;
        }, 600);
    });
    
    // ETAPE4 - FORMULAIRE
    $(document).on('trt_completed_event', function(e){
        setTimeout(function(){
            tarot_title.hide();
            tarot_draw.hide();
            tarot_band.removeClass('Principal');
            tarot_result.show();
            form.show();
        }, 600);
    });
    
    $('.getFormValue').each(function(){
        var target = $(this);
        var form = $(this).data('ref-form');
        var method = $(this).data('method');
        $(document).on('change, click', '*[name='+ form +']', function(){
            if(method === 'html'){
                target.html($(this).val());
            } else{
                if (method === 'class'){
                    target.addClass($(this).val());
                }
            }
        });
    });
});