/* global $*/
/* global _*/
/**
 * @Author    : Mohamed Moughamir <hello@omnizya.com>
 * @Version   : 0.3b
 * @Licence   : GPL v3
 * @Copyright : KGcom <https://kg-com.fr/>
 */
$(document).ready(function() {
    // we can use Ajax call here and get questions from database 
    var holder = $('.result'),
        name, section = $('.section'),
        name_input_selector = 'input[name="js-name"]',
        question_value = "",
        trt_deckNbCards = 20,
        trt_forceDrawFirst = false,
        trt_scrollOnComplete = false,
        nameRe = /[a-zA-Z]+(?:(?:\. |[' ])[a-zA-Z]+)*$/,
        errorMsg = '\
            <div class="alert alert-warning">\
                Les chiffres et caractères spéciaux ne sont pas autorisés pour le prénom.\
            </div>',
        requiredMsg = '\
            <div class="alert alert-warning">\
                Veuillez saisir votre prénom.\
            </div>',
        trt_minSize = 600;
    /**
     * loadQuiz function
     */
    function startSession() {
        if (!nameRe.test(name)) {
            if (name.length == 0) {
                $('.helper').html(requiredMsg).fadeIn();
            }
            else {
                $('.helper').html(errorMsg).fadeIn();
            }
            setTimeout(function() {
                $('.helper').fadeOut();
            }, 2500);
            $(name_input_selector).focus();
        }
        else {
            name = $(name_input_selector).val();
            trt_forceDrawFirst = true;
            trt_lock = false;
            $('.WidgetTarot').detach().prependTo('.draw');
            $('.Tarot-Result').show();
        }
        return false;
    }
    // event listen to click on button.start element
    $('.start').on('click', function() {
        startSession();
    });
    // when user write their name and press ENTER key '13'
    $(name_input_selector).keypress(function(e) {
        if (e.which == 13) {
            startSession();
        }
    });
    /**
     * listen to user first choice, and populate .result element with
     * corresponding value.
     * then keep calling qPrepare()
     * 
     * @see qPrepare()
     */
    //scroll animation
    $('.read-more').on('click', function() {
        $('html, body').animate({
            scrollTop: $('.FormContainer').offset().top
        }, 800);
        return false;
    });

    function qPrepare(q) {
        var cardsDrow;
        if (cardsDrow == true) {
            section.eq(1).addClass('hidden');
            section.eq(2).removeClass('hidden').addClass('fade');
            $('#js-question').val(question_value);
            $('#js-name').val(name);
            return false;
        }
    }
});
