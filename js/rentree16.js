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
    
    var result = 0;
    var pallier = 0;
    function zeResults(){
        
        // j'additionne toutes les valeurs des réponses selectionnées
        $('.questionnaire input[type=radio]:checked').each( function () {
            result+=parseInt($(this).val(),10);   
        });        
        var resultTxt = "Vous avez un score de : " + result;
        console.log(resultTxt);
            
        // si result est compris entre 1 et 6
        if(result <= 6){
            pallier=1;
            resultTxt += " premier pallier donc " + pallier;
             
        } else if( result <= 12 && result > 6){
            pallier=2;
            resultTxt += " deuxième pallier donc " + pallier;
        } else if( result <= 18 && result > 12){
            pallier=3;
            resultTxt += " troisième pallier donc " + pallier;
        }
        
        
        console.log("Le pallier est : " + pallier);  

    };
    
    /* AFFICHER LE FORMULAIRE CLIENT AVEC LE DERNIER BTN RADIO */
    $('input[name="name6"]').change(function(){
        zeResults();
        
        // ajouter un input invisible contenant la valeur "pallier"
        // qui va déterminer l'affichage du texte sur la -tel avec une variable de session
        var newInput = "<input type='hidden' name='resultats' value='"+ pallier + "'>";
        $("#q-form").append(newInput);
        
        
        $('.questionnaire').fadeOut( function(){
            $('.formulaire').css("display" ,"block");
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