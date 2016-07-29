$(document).ready(function(){
    
    $("#questionnaire").css({
        opacity:0,
    });  
    
    //définition des paramètres globaux du slider
    slider = $('.bxslider').bxSlider({
        hideControlOnEnd:true,
        infiniteLoop: false,
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
    

    
    
    // GESTION DES RESULTATS
    // 3 palliers 1-6, 7-12, 13-18
    // chacunes des questions possèdent 3 réponses
    // la valeur des réponses varie de 1 à 3
    
    // enregistrer et afficher le résultat
    
    
    function zeResults(){
        var $result = 0;
        
        $('.questionnaire input[type=radio]:checked').each( function () {
            $result+=parseInt($(this).val(),10);   
        });
        
        //console.log("$result : " + $result);
        
        var $resultTxt = "Vous avez un score de : " + $result;
        
        $('#resulQuiz').css({"background":"green", "color":"black", "width":"100%"});
        
        
        // si $result est compris entre 1 et 6
        if($result <= 6){
            $resultTxt += " premier pallier"
        } else if( $result <= 12 && $result > 6){
            $resultTxt += " deuxième pallier"
        } else if( $result <= 18 && $result > 12){
            $resultTxt += " troisième pallier"
        }
        
        $('#resulQuiz').text($resultTxt);
        //console.log("$resultTxt : " + $resultTxt);

    };
    
    /* AFFICHER LE FORMULAIRE CLIENT AVEC LE DERNIER BTN RADIO */
    $('input[name="name6"]').change(function(){
        $('.questionnaire').fadeOut( function(){
            $('.formulaire').css("display" ,"block");
            zeResults();
        });
    });
    
    //AFFICHER LE CHAMP PRENOM DU CONJOINT SI EN COUPLE
    $('input[name=theme_id]').change(function() {
        if (this.value == 'R16_question_2') {
            //console.log("celib");
            $('.sonprenom').hide();
            $('.sonprenom #son_prenom').removeClass('anim-input');
            $('.sonprenom #son_prenom').prop('required',false);
        }
        else if (this.value == 'R16_question_24') {
            //console.log("en couple");
            $('.sonprenom').show();
            $('.sonprenom #son_prenom').addClass('anim-input');
            $('.sonprenom #son_prenom').prop('required',true);
        }
    }); 
    
});