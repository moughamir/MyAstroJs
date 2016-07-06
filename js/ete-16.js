/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
    
    slider = $('.bxslider').bxSlider({
        adaptiveHeight: false,
        controls:true,
        pager:false,
        startText: 'Lancer le quiz',
        startSelector: '#slider-start',
        nextSelector: '#slider-next',
        prevSelector: '#slider-prev',
        nextText: '<i class="fa fa-arrow-right" aria-hidden="true"></i><span>Suivant</span>',
        prevText: '<i class="fa fa-arrow-left" aria-hidden="true"></i><span>Précédent</span>',
        infiniteLoop: false,
        touchEnabled: false,
        hideControlOnEnd:true,
        autoControls:false,

        onSliderLoad: function() {
          $(".bxslider li:not([class='bx-clone'])").eq(0).addClass('current');
        },

        onSliderLoad: function(){
            //console.log('Chargé ! ');
            $('#illustr-bouee').addClass('anim-bouee');
            //cacher next
            $('.bx-next').addClass('hidden');
            $('#slider-start').click(function() {
               slider.goToSlide(1);
            });
            

        },

        onSlideBefore: function() {
          $(".bxslider li").removeClass('current');
          
          current = slider.getCurrentSlide();
          //console.log("current : " + current);
          $(".bxslider li:not([class='bx-clone'])").eq(current).addClass('current');

          switch (current) {

            case 0:
            //console.log('depart : ');
            
            
            //$('.outside').css('opacity','0');
            $(radio).click(function() {
                //alert("demarrage ");
            });    
            break;

            case 1:
            //console.log('1ere slide : ');
            $('#slider-start').css('display','none');
            $('.outside').css('opacity','1');
            $('.bx-next').removeClass('hidden');
            $('.bx-next').addClass('flex-compa');
            $('#illustr-hipo').addClass('anim-hipo');

            //si le prénom est vide



            break;

            case 2:
            console.log('2ème slide : ');
            //$('.outside').css('opacity','0');
            $('#slider-start').css('display','none');
            $('.outside').css('opacity','1');
            $('#illustr-hipo').removeClass('anim-hipo');
            $('#illustr-fish').addClass('anim-fish');
            $('input[name=sexe]').change(function() {
                slider.goToSlide(3);
            });
            $('input[name=sexe]').click(function() {
                slider.goToSlide(3);
            });
            break;

            case 3:
            console.log('3ème slide : ');
            $('#slider-start').css('display','none');
            $('.outside').css('opacity','1');
            $('#bx-prev').css('display','flex');
            $('#illustr-fish').removeClass('anim-fish');
            $('#illustr-lunettes').addClass('anim-lunettes');
            break;

            case 4:
            console.log('4ème slide : ');
            $('#slider-start').css('display','none');
            $('#bx-prev').css('display','flex');
            $('.outside').css('opacity','1');
            $('#illustr-lunettes').removeClass('anim-lunettes');
            $('#illustr-shell').addClass('anim-shell');
            break;

            case 5:
            console.log('5ème slide : ');
            $('#slider-start').css('display','none');
            $('#bx-prev').css('display','flex');
            $('.outside').css('opacity','1');
            $('#illustr-shell').removeClass('anim-shell');
            $('#illustr-cocktail').addClass('anim-cocktail');
            //$('.outside').css('opacity','0');


            break;

            case 6:
            console.log('6ème slide : ');
            $('#slider-start').css('display','none');
            $('#bx-prev').css('display','flex');
            $('#illustr-cocktail').removeClass('anim-cocktail');
            $('#illustr-parasol').addClass('anim-parasol');
            $('.outside').css('opacity','0');
            $('input[name=destination]').change(function() {
                slider.goToSlide(7);
            });
            $('input[name=destination]').click(function() {
                slider.goToSlide(7);
            });
            break;

            case 7:
            console.log('7ème slide : ');
            $('#slider-start').css('display','none');
            $('.outside').css('opacity','0');
            $('#illustr-parasol').removeClass('anim-parasol');
            $('#illustr-chaise').addClass('anim-chaise');

            break;
            }/* fin de switch */

            $( '#form-overlay' ).click(function() {
                //alert( "revenir au départ" );
                $('.outside').addClass('flex-compa2');
                 $('.outside').css('opacity','1');
                $('.bx-next').css('opacity','1');
                $('.bx-prev').css('opacity','1');
                
                
                slider.goToSlide(1);
            });

        }/* fin de onSlideBefore */
    });/* fin de $('.bxslider').bxSlider */
    /*$(document).keyup(function(touche){ // on écoute l'évènement keyup()

        var appui = touche.which || touche.keyCode; // le code est compatible tous navigateurs grâce à ces deux propriétés

        if(appui == 13){ // si le code de la touche est égal à 13 (Entrée)
            alert('Vous venez d\'appuyer sur la touche Entrée !'); // on affiche une alerte            
        }
    });*/
    
    /* LABEL DES BOUTONS RADIO*/
    $('input[name=theme_id]').change(function() {
        if (this.value == 'ete16_question_2') {
            //console.log("celib");
            $('#son_prenom').css('opacity','0');
            $('#son_prenom').removeClass('anim-input');
            $('#son_prenom').prop('required',false);
        }
        else if (this.value == 'ete16_question_24') {
            //console.log("en couple");
            $('#son_prenom').css('opacity','1');
            $('#son_prenom').addClass('anim-input');
            $('#son_prenom').prop('required',true);
        }
    }); 
    
    var situation = 'input[name=theme_id]';
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
   $('input[name=dep-mois]').click(function(){
        $('#form-container').submit();
   });

});



