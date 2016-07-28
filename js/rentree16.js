$(document).ready(function(){
    
    $("#questionnaire").css('opacity','0');
    
    //démarrer le questionnaire
    $("#btn-start").click(function(){
        $("#intro").fadeOut();
        $("#questionnaire").css('opacity','1');
        $(".PageLogo").addClass('bgHeader');
    });
    
    //définition des paramètres globaux du slider
    slider = $('.bxslider').bxSlider({
        hideControlOnEnd:true,
        infiniteLoop: false,
        slideMargin: 10
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
    
    // avancer vers la question suivante 
    // quand on clique sur une réponse bouton "radio"
    $('input[type=radio]').change(function(){
        //console.log("RADIO");
        slider.goToNextSlide();
    })
    
});