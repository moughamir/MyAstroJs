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
    var name,
        section = $('.section'),
        name_input_selector = 'input[name="js-name"]',
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
        textRotation = [{
            rel: 'a',
            text: 'Les lames du tarot sont réputées pour être bavardes et votre tirage m’a permis de soulever de nombreux points concernant votre avenir sentimental.<br> J’aimerais en discuter avec vous afin de vous aider à éclaircir tous ces points qui vous tracassent et vous apporter mes réponses...'
        }, {
            rel: 'b',
            text: 'En analysant votre tirage, je ressens votre volonté d’aller de l’avant et d’enfin mettre un terme à tous vos blocages pour enfin avancer dans votre vie.<br> Je peux vous rassurer sur un point <b>{{FIRSTNAME}}</b> : les cartes vont dans le sens de votre envie et laissent présager une issue plus que favorable.<br>Il faudrait que l’on puisse en parler calmement <b>{{FIRSTNAME}}</b>, j’ai encore beaucoup de chose à vous révéler...'
        }, {
            rel: 'c',
            text: 'Les cartes montrent bien à quel point cette situation vous pèse.<br> Tout cela vous affecte et a même des conséquences sur votre vie de tous les jours.<br> Votre tirage met très clairement en avant votre difficulté à passer outre cette histoire, et à penser à autre chose, se qui occupe votre esprit une bonne partie de vos journées. Ensemble nous allons identifier toutes les réponses à vos blocages...'
        }],
        q = 0;
    /**
     * loadQuiz function
     */
    function capitalize(str) {
        return str.replace(/\w\S*/g, function(txt) {
            return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
        });
    }

    function startSession() {
        name = $(name_input_selector).val();
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
            $('#js-name').val(name);
            trt_forceDrawFirst = true;
            trt_lock = false;
            $('.WidgetTarot').removeClass('hidden-sm').detach().prependTo('.draw');
            $('.Tarot-Result').show();
            qPrepare(q);
            section.eq(0).fadeOut(300, function() {
                section.eq(1).removeClass('hidden').addClass('fade');
                q++;
            });
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

    function qPrepare() {
        var cardsDrow;
        if (cardsDrow == true) {
            section.eq(1).addClass('hidden');
            section.eq(2).removeClass('hidden').addClass('fade');
            return false;
        }
    }
    $(document).on('trt_completed_event', function() {
        let pick = _.random(0, 2);
        let re = new RegExp("{{FIRSTNAME}}", "gi");
        var result = textRotation[pick].text;
        result = result.replace(re, function() {
            return capitalize(name);
        });
        setTimeout(function() {
            $('.WidgetTarot-Result').removeClass('hidden-sm');
            $('.question').text('Votre tirage');
            $('.session-result').removeClass('hidden').html(result);
            $('.miniform').removeClass('hidden');
        }, 600);
    });
});
