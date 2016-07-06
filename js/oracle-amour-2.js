/* 
    ---------------------------------------------------
    --     Module de tirage tarot oracle-amour-2     --
    ---------------------------------------------------

    Created on : 06 juillet 2016
    Author     : Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/

$(document).ready(function(){
        
    //animation de départ
    // le titre s'anime avec la flèche
    $('.WidgetTarotHeader').addClass('animTitre');
        
    // réorienter les cartes choisies
    $('.Flipped').addClass('rotate0');
    
    $('.notFlipped').on( "click",function(){
        
        // récupérer le plus haut z-index de la page
        var maxZ = Math.max.apply(null,$.map($('.WidgetTarot-Card'), function(e,n){
           if($(e).css('position')=='relative')
                return parseInt($(e).css('z-index'))||1 ;
           })
        );
        
        
        $(this).css({
            //retablir l'orientation de la carte cliquée
            transform: 'rotate(0deg)',
            MozTransform: 'rotate(0deg)',
            WebkitTransform: 'rotate(0deg)',
            msTransform: 'rotate(0deg)',
            
            //et mettre cette carte au dessus du jeu
            "z-index" : maxZ+1
        });
        //console.log('carte cliquée');
    });
    
    // quand les 5 cartes ont été choisies
    $(this).on( "trt_completed_event", function() {
        
        //$('html,body').animate({scrollTop: $('#form-container').offset().top}, 2000);
        
        //le titre ne s'anime plus
        $('.WidgetTarotHeader').removeClass('animTitre');
        
        // les blocs de l'étape 1 disparaissent
        $('.step1').fadeOut( "slow");
        
        $('#titreTarot h2').text("Résultat de votre tirage :");
        
        // les blocs de l'étape 2 apparaissent
        $('.step2').fadeIn( "slow"); 
        
        // debug en responsiv du bloc des resultats
        $('.WidgetTarot-Result .WidgetTarotHeader ').removeClass( "visually-hidden");
        $('.WidgetTarot-Result').css( "display", 'block');
        $('input#name').focus();
        
        // debug des tailles des cartes au resultat
        $('.place').css( {
            "-webkit-background-size" : "100% 100%",
            "background-size" : "100% 100%",
        });
        
    }); 
    
    // gestion du champ ".sonprenom" du conjoint si "en couple"
    $('.son_prenom').hide();
    
    $('input[name=theme_id]').change(function() {
        
        //console.log("situation cliquée");
        
        if (this.value == 'oa_question_1') {

            $('.son_prenom').slideUp();
            $('.son_prenom').prop('required',false);
            //console.log("situation cliquée célibataire");
        }
        else if (this.value == 'oa_question_2') {

            $('.son_prenom').slideDown();
            $('.son_prenom').prop('required',true);
            //console.log("situation cliquée célibataire");
        }
    }); 

    $("#form-container").on("ajax_success", function() {  
       
        console.log('AJAX début du test');
        alert("test OK");
       /* var pResult = $('#form2-result-Tarot');
        pResult.addClass("anim-result");
        alert("click OK");*/
        //console.log('AJAX fin du test');   
    });
    
/*    $(document).ajaxSuccess(function() {
      alert( "Triggered ajaxSuccess handler." );
    });*/
    
    $(this).on("ajax_success", function() {  
        //alert( "test guigui ok." );
        /*$('#form2-result-Tarot').fadeIn( "slow", function() {
            // Animation complete
          });*/
        
        /*$('#form2-result-Tarot').addClass( "anim-fadeIn");
        
        $('#form2-form').addClass( "anim-fadeIn").delay(1000);*/
        
        $('#form2-result-Tarot').fadeIn( 1000, function() {
            $('#form2-form').fadeIn(1000);
        });
        
    });
    
});