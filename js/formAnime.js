/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    // Le code jQuery ici !
    //alert('js importé');
    /* var slider = $('.bxslider').bxSlider({
      mode: 'horizontal'
    });*/
    
    /*$(document).keyup(function(touche){ // on écoute l'évènement keyup()

        var appui = touche.which || touche.keyCode; // le code est compatible tous navigateurs grâce à ces deux propriétés

        if(appui == 13){ // si le code de la touche est égal à 13 (Entrée)
            alert('Vous venez d\'appuyer sur la touche Entrée !'); // on affiche une alerte            
        }
    });*/
    
    /* LABEL DES BOUTONS RADIO*/
    $('input[name=situation]').change(function() {
        if (this.value == 'ete16_question_2') {
            //console.log("celib");
            $('#sit-couple-prenom').css('opacity','0');
            $('#sit-couple-prenom').removeClass('anim-input');
            $('#sit-couple-prenom').prop('required',false);
        }
        else if (this.value == 'ete16_question_24') {
            //console.log("en couple");
            $('#sit-couple-prenom').css('opacity','1');
            $('#sit-couple-prenom').addClass('anim-input');
            $('#sit-couple-prenom').prop('required',true);
        }
    }); 
    
    var situation = 'input[name=situation]';
    $(situation).click(function() {
        $(situation).each(function() {
            $("#"+this.id).parent().next().css({"color": "#fff"});
        });

        $("#"+this.id).parent().next().css({"color": "#E72D4B"});
    });
    
    var radio = 'input[name=destination]';
    $(radio).click(function() {
        $(radio).each(function() {
            $("#"+this.id).parent().prev().css({"text-shadow": "0 0 0px rgba(0,0,0,0)"});
        });

        $("#"+this.id).parent().prev().css({"text-shadow": "0 0 5px #fff"});
    });
    
    /* ENVOYER LE FORMULAIRE AVEC LE DERNIER BTN RADIO */
    $('input[name=dep-mois]').change(function(){
        $('#form-container').submit();
   });
    
    
    
    /* AFFICHAGE DE LA NAVIGATION */
    $('.bx-prev').css('display','none');
    $('.bx-next').css('display','none');
    
    $('#slider-start').click(function() {
        $(this).css('display','none');
        $('.bx-prev').css('display','flex');
        $('.bx-next').css('display','flex');
    });
});



