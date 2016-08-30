$(document).ready(function(){
    // PREMIERE ETAPE
    $("input[name='theme_id']").change(function(){
        //alert("test CHOIX OK !!!");
        
        $(".form-first-step").fadeOut();
        $(".form-second-step").fadeIn();
        
        $(".FormContainer-Title").css('display','block');

        if (this.value == 'lg_1') {
            //alert("AMOUR");
            $(".FormContainer-Title").text('L\'amour');
            $(".FormContainer-Title").prepend('<span class="ico-amour"></span>');
            
            $(".sonprenom").css('display','block');
            
        }
        else if (this.value == 'lg_2') {
            //alert("TRAVAIL");
            $(".FormContainer-Title").text('Le travail');
            $(".FormContainer-Title").prepend('<span class="ico-travail"></span>');


        }
        else if (this.value == 'lg_3') {
            //alert("ARGENT");
            $(".FormContainer-Title").text('L\'argent');
            $(".FormContainer-Title").prepend('<span class="ico-argent"></span>');

        }
    });
    
    // ALLER VERS LA TROISIEME ETAPE
    $(".thirdStep").click(function(){
    
        $(".form-second-step").fadeOut();
        $(".form-third-step").fadeIn();
        
    });
    
    
    
});
