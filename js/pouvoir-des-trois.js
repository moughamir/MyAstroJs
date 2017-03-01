/* global $*/
/* global _*/
/**
 * Note for 'MEP'
 * 
 * Please use the compressed version of this file on Production
 * link to compressed version : https://bitbucket.org/snippets/kgcomdev/nex6k
 *  
 * @Author    : Mohamed Moughamir <hello@omnizya.com>
 * @Version   : 0.1b
 * @Licence   : GPL v3
 * @Copyright : KGcom <https://kg-com.fr/>
 */

$(document).ready(function() {


  // we can use Ajax call here and get questions from database 
  var quiz = [{

      "question": "Quel domaine vous préoccupe le plus?",
      "choices": [{
        "rel": "amour",
        "color": "#bc91cd",
        "text": "L'Amour"
      }, {
        "rel": "travail",
        "color": "#6c437c",
        "text": "Le Travail"
      }, {
        "rel": "argent",
        "color": "#411575",
        "text": "L'Argent"
      }]
    }, {

      "question": "Quel objet vous inspire le plus?",
      "choices": [{
        "color": "#6c437c",
        "text": "La boule de cristal"
      }, {
        "color": "#411575",
        "text": "Le pendule"
      }, {
        "color": "#bc91cd",
        "text": "Le tarot"
      }]
    }, {

      "question": "Comment voyez-vous votre avenir?",
      "choices": [{
        "color": "#411575",
        "text": "Avec des hauts et des bas"
      }, {
        "color": "#bc91cd",
        "text": "Plein de surprises"
      }, {
        "color": "#6c437c",
        "text": "Plutôt sombre"
      }]
    }, {

      "question": "Au quotidien, vous vous sentez?",
      "choices": [{
        "color": "#bc91cd",
        "text": "Seul(e)"
      }, {
        "color": "#6c437c",
        "text": "Comblé(e)"
      }, {
        "color": "#411575",
        "text": "Frustré(e)"
      }]
    }, {

      "question": "Quelle couleur vous correspond le plus?",
      "choices": [{
        "color": "#e676a3",
        "text": "Rose"
      }, {
        "color": "#b5aaad",
        "text": "Gris"
      }, {
        "color": "#518fc9",
        "text": "Bleu"
      }]
    }],
    resault = {
      "amour": "Les mois à venir vont vous réserver de bien belles surprises avec notamment une personne de votre entourage qui risque de vous surprendre. De grands changements se profilent et vous allez aborder un tournant majeur de votre vie. C’est à vous de faire en sorte que ce tournant soit positif ou négatif.<br/> Beaucoup de questions vont se présenter à vous, plus spécialement sur le comportement d’une personne à votre égard. Des doutes et des interrogations qui… ",
      "argent": "Même si toutes vos pensées concernent votre argent, sachez au fond de vous qu’après la pluie vient toujours le bon temps. Vous avez peur pour votre avenir financier et cela se comprend très bien.<br/> Un évènement important va avoir lieu dans les semaines à venir, un évènement qui concerne directement votre argent. Vous êtes effectivement proche d’atteindre votre objectif financier mais j’ai également perçu une personne malveillante qui…",
      "travail": "Un petit coup de pouce ne serait pas de refus, notamment dans votre vie professionnelle. Le travail est un domaine qui vous préoccupe assez souvent car tout n’est pas toujours facile, et vous avez aujourd’hui à cœur de vous épanouir professionnellement.<br/> Rassurez-vous, les mois à venir seront une période idéale pour lancer tous les projets que vous avez en tête et les mener à bien. Il faut que vous ayez un rôle actif dans votre avenir professionnel et que vous ne laissiez pas…"
    },
    choice = $('.choice'),
    holder = $('.resault'),
    name,
    section = $('.section');

  var q = 0;

  setTimeout(function() {
    $('.tri').fadeIn(500, function() {
      $(this).removeClass('hidden');
      $(this).addClass('rotate');
      $(".tri").bind("animationend webkitAnimationEnd oAnimationEnd MSAnimationEnd", function() {
        $(this).hide();
        $('.post-test').removeClass('hidden').addClass('fade');

      });

    });
  }, 3300);

  /**
   * loadQuiz function
   */
  function loadQuiz() {
    // get value of input field and store it (optimized)
    name = $('input[name="name"]').val();

    qPrepare(q);

    section.eq(0).fadeOut(300, function() {

      section.eq(1).removeClass('hidden').addClass('fade');
      q++;

    });
    return false;
  }

  // when user write their name and press ENTER key '13'

  $('input[name="name"]').keypress(function(e) {
    if (e.which == 13) {
      loadQuiz();
    }
  });

  // event listen to click on button.start element
  $('.start').on('click', function() {
    loadQuiz();
  });

  /**
   * listen to user first choice, and populate .resault element with
   * corresponding value.
   * then keep calling qPrepare()
   * 
   * @see qPrepare()
   */
  choice.on('click', function() {

    var d = $(this).data();

    if (typeof d !== typeof undefined && d !== false) {

      // Element has this attribute
      console.info('True');
      if ($(this).data('option') == "amour") {
        holder.html(resault.amour);
      }
      else if ($(this).data('option') == "travail") {
        holder.html(resault.travail);
      }
      else if ($(this).data('option') == "argent") {
        holder.html(resault.argent);
      }
      qPrepare(q);
    }
    else {
      console.info('False');
      qPrepare(q);
    }

    q++;
  });

  /**
   * scroll animation
   */
  $('.read-more').on('click', function() {
    $('html, body').animate({
      scrollTop: $('.FormContainer').offset().top
    }, 800);
    return false;
  });

  /**
   * easy pz to understand
   */
  function qPrepare(q) {

    let duration = 150;

    if (q <= 4) {

      var question = quiz[q].question;
      var choices = quiz[q].choices;


      $('.question').fadeOut(duration, function() {
        $(this).text(question).fadeIn(duration);
      });

      choice.each(function(elmIndex) {

        $(this).fadeOut(duration, function() {
          $(this).text(choices[elmIndex].text).css({
            'background-color': choices[elmIndex].color
          }).fadeIn(duration);
        });

        if (_.hasIn(choices[elmIndex], 'rel')) {
          $(this).data('option', choices[elmIndex].rel);

        }
        else {
          $(this).data('option', null);

        }
      });

      return false;
    }
    else {

      section.eq(1).addClass('hidden');
      section.eq(2).removeClass('hidden').addClass('fade');
      console.log(name);
      $('#name').val(name);
      return false;
    }

  }

});
