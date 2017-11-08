/* global $*/
/* global _*/
/**
 * @Author    : Mohamed Moughamir <hello@omnizya.com>
 * @Version   : 0.2.1
 * @Licence   : GPL v3
 * @Copyright : KGcom <https://kg-com.fr/>
 */

$(document).ready(function() {
    // we can use Ajax call here and get questions from database 
    var quiz = [{
        "question": "Quel est pour vous la couleur de l'amour?",
        "choices": [{
            "rel": "rouge",
            "textColor": "#ffffff",
            "color": "#ea285f",
            "text": "Rouge<br/>la passion"
        }, {
            "rel": "blanc",
            "textColor": "#454545",
            "color": "#ffffff",
            "text": "Blanc<br/>la pureté"
        }, {
            "rel": "orange",
            "textColor": "#ffffff",
            "color": "#f08628",
            "text": "Orange<br/>le désir"
        }]
    }, {
        "question": "Coté caractère vous êtes plutôt :",
        "choices": [{
            "color": "#832fa4",
            "textColor": "#ffffff",
            "text": "dévoué(e)"
        }, {
            "color": "#ea285f",
            "textColor": "#ffffff",
            "text": "curieux(se)"
        }, {
            "color": "#19568d",
            "textColor": "#ffffff",
            "text": "jaloux(se)"
        }]
    }, {
        "question": "Ce qui vous plait le plus :",
        "choices": [{
            "color": "#19568d",
            "textColor": "#ffffff",
            "text": "l'aventure"
        }, {
            "color": "#832fa4",
            "textColor": "#ffffff",
            "text": "la passion"
        }, {
            "color": "#ea285f",
            "textColor": "#ffffff",
            "text": "la stabilité"
        }]
    }, {
        "question": "En couple vous series plutôt :",
        "choices": [{
            "color": "#ea285f",
            "textColor": "#ffffff",
            "text": "jamais l'un sans l'autre"
        }, {
            "color": "#19568d",
            "textColor": "#ffffff",
            "text": "indépendant"
        }, {
            "color": "#832fa4",
            "textColor": "#ffffff",
            "text": "complice"
        }]
    }],
    result = {
      "passion": "Brûlant, dévorant, irrésistible, l'amour passion est un sentiment unique qui bouleverse tout sur son passage.<br/>Il nous tombe dessus, un beau jour, il est très difficile à controler car c'est un sentiment qui nous envahit... ",
      "purety": "L'amour pureté est un amour profond qui vient de l’intérieur, il atteint la profondeur de votre âme, il vous connecte à l'autre. C'est Aimer l'autre entièrement, sans aucune condition, malgré tout ce qui pourrait nous déranger. Un amour complet et absolu...",
      "desire": "Mystérieux, aléatoire, et imprévisible.<br/>Le désir est plus fort que nous, c'est un sentiment qui nous échappe et que l'on associe souvent au désir physique: à l'attirance .<br/>Ce désir comble une bonne partie de vos rêves,... "
    },
    questions = {
        'passion': "{'code':'lma17_question1','subject':'Passion','text':'Love MyAstro - Passion'}",
        'purety': "{'code':'lma17_question2','subject':'Pureté','text':'Love MyAstro - Pureté'}",
        'desire': "{'code':'lma17_question3','subject':'Désir','text':'Love MyAstro - Désir'}"
    },
    choice = $('.choice'),
    holder = $('.result'),
    name, section = $('.section'),
    name_input_selector = 'input[name="js-name"]',
    question_value = "";

    var q = 0;
    /**
     * loadQuiz function
     */
    function loadQuiz() {
        // get value of input field and store it (optimized)
        name = $(name_input_selector).val();
        if(name.length > 0){
            qPrepare(q);
            section.eq(0).fadeOut(300, function(){
                section.eq(1).removeClass('hidden').addClass('fade');
                q++;
            });
        } else {
            alert('Veuillez remplir votre prénom.');
            $(name_input_selector).focus();
        }
        return false;
    }
    
    // event listen to click on button.start element
    $('.start').on('click', function(){
        loadQuiz();
    });
    
    // when user write their name and press ENTER key '13'
    $(name_input_selector).keypress(function(e){
        if (e.which == 13){
            loadQuiz();
        }
    });

    /**
     * listen to user first choice, and populate .result element with
     * corresponding value.
     * then keep calling qPrepare()
     * 
     * @see qPrepare()
     */
    choice.on('click', function(){
        var d = $(this).data();
        if (typeof d !== typeof undefined && d !== false){
            // Element has this attribute
            if ($(this).data('option') == "rouge") {
                holder.html(result.passion);
                question_value = questions.passion;
            }
            else if ($(this).data('option') == "blanc") {
                holder.html(result.purety);
                question_value = questions.purety;
            }
            else if ($(this).data('option') == "orange") {
                holder.html(result.desire);
                question_value = questions.desire;
            }
            qPrepare(q);
        } else {
            console.info('False');
            qPrepare(q);
        }
        q++;
    });

    //scroll animation
    $('.read-more').on('click', function(){
        $('html, body').animate({
            scrollTop: $('.FormContainer').offset().top
        }, 800);
        return false;
    });

    function qPrepare(q){
        var duration = 150;
        if(q <= 3){
            var question = quiz[q].question;
            var choices = quiz[q].choices;
            $('.question').fadeOut(duration, function(){
                $(this).text(question).fadeIn(duration);
            });
            choice.each(function(elmIndex){
                $(this).fadeOut(duration, function(){
                    $(this).html(choices[elmIndex].text).css({
                        'background-color': choices[elmIndex].color,
                        'color': choices[elmIndex].textColor
                    }).fadeIn(duration);
                });
                if (_.hasIn(choices[elmIndex], 'rel')){
                    $(this).data('option', choices[elmIndex].rel);
                } else {
                    $(this).data('option', null);
                }
            });

            return false;
        } else {
            section.eq(1).addClass('hidden');
            section.eq(2).removeClass('hidden').addClass('fade');
            $('#js-question').val(question_value);
            $('#js-name').val(name);

            return false;
        }
    }
});