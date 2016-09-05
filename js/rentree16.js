$(document).ready(function(){
    
    $("#questionnaire").css({
        opacity:0,
    });  
    
    //définition des paramètres globaux du slider
    slider = $('.bxslider').bxSlider({
        hideControlOnEnd:true,
        infiniteLoop: false,
        adaptiveHeight: true,
        slideMargin: 10
    });

    //démarrer le questionnaire
    $(".startQuizz").click(function(){
        $("#intro").fadeOut(function() {
            // Animation complete.
            $("#questionnaire").css({
                opacity:1,
            }); 
        });
          
        $(".PageLogo").addClass('bgHeader');
    });
    
    // actualiser le titre "Question X"
    function actualiser(){
        var indexQ = slider.getCurrentSlide();
        var current = indexQ + 1;
        $("#numQuestion").text ( "Question " + current );
    }
    actualiser();
    
    $(".bx-prev").click(function() {
        actualiser();
    });
    
    $(".bx-next").click(function() {
        actualiser();
    });
    
    // pour le fil d'ariane, je récup l'index de la prochaine question concernée
    $('.bx-pager-link').click(function() {
        index = $(this).attr('data-slide-index');
        index++;
        $("#numQuestion").text ( "Question " + index );
    });
    $('.bx-controls').prepend( "<span class='bg-bx-pager'></span>" );
    
    // avancer vers la question suivante 
    // quand on clique sur une réponse bouton "radio"
    $('input[type=radio]').change(function(){
        //console.log("RADIO");
        slider.goToNextSlide();
        actualiser();
    })
    
    var result = null;
    function zeResults(){
        var score = 0;
        // Calcul du pallier
        var scoreMin = 0; // min value par défaut à 0
        var scoreMax = quizz_rep_max_value * quizz_nb_q;
        var scoreIntervalle = scoreMax - scoreMin;
        var pallier = scoreIntervalle / quizz_nb_r;
        // Calcul du score
        $('.questionnaire input[type=radio]:checked').each( function () {
            score += parseInt($(this).val(), 10);   
        });
        // récupération du résultat selon le score.
        var indice = 0;
        do {
            score = score - pallier;
            indice = indice + 1;
        } while(score > 0);
        result = quizz_result[indice];
    };
    
    /* AFFICHER LE FORMULAIRE CLIENT AVEC LE DERNIER BTN RADIO */
    $('input[name="q6"]').change(function(){
        zeResults();
        
        // ajouter un input invisible contenant la valeur "pallier"
        var result_value = JSON.stringify(result).replace(/"/g, "'");
        var newInput = '<input type="hidden" name="question_code" value="'+ result_value +'" />';
        $("#form-container").append(newInput);
        
        $('.questionnaire').fadeOut( function(){
            $('.formulaire').css("display" ,"block");
        });
    });
});