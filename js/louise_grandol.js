/* ================= [ Scénario de formulaire louise-grandol ] =================
 * 
 *  Created on : 30 janvier 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
$(document).ready(function(){
    var theme = $('#scn-theme');
    var theme_submit = 'input[name="theme_choice"]';
    var question = $('#scn-question');
    var question_title = $('#scn-question-title');
    var question_select = $('#theme_id');
    var question_submit = '#scn-question-submit';
    var form = $('#scn-form');
    var form_title = $('#scn-form-title');
    
    // ETAPE1 - CHOIX DU THÈME
    question.hide();
    form.hide();
    
    // ETAPE2 - CHOIX ET PRÉCISION DE LA QUESTION
    $(document).on('change, click', theme_submit, function(e){
        theme.hide("slow");
        
        var theme_choice = $(this).val();
        var theme_item_selector = '.ThemeChoice-Item.'+ theme_choice;
        var theme_item_code = $(theme_item_selector).addClass('hover').clone().wrap('<div></div>').parent().html();
        question_title.html(theme_item_code);
        form_title.html(theme_item_code);
        question_select.find('option').each(function(){
            var filter = $(this).data('filter-value');
            if(theme_choice !== filter){
                $(this).hide();
            } else {
                $(this).attr('selected', 'selected');
                question_select.trigger('change');
            }
        });
        
        question.fadeIn();
    });
    
    // ETAPE3 - FORMULAIRE
    $(document).on('change, click', question_submit, function(e){
        question.hide("slow");
        form.fadeIn();
        
        return false;
    });
    
    $(document).on('ajax_error', function(e){
        form.hide();
        question.show();
    });
});