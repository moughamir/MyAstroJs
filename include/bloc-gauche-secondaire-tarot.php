<?php 
    /*Titre et source du formulaire en fonction de la page*/
    $url = $_SERVER['PHP_SELF'];
    $title = 'question gratuite';
    if($url == "/tarot-de-l-amour.php"){
        $title = "Compatibilité amoureuse";
        $source = "tarot-amour";
    }if($url == "/tarot-de-couple.php"){
        $title = "Testez votre couple";
        $source = "tarot-couple";
    }else if($url == "/tarot-quotidien.php"){
        $title = "Tirage tarot du jour";
        $source = "tarot-quotidien";
    }else if($url == "/tarot-hebdomadaire.php"){
        $title = "Vos prévisions hebdo";
        $source = "tarot-hebdomadaire";
    }else if($url == "/tarot-mensuel.php"){
        $title = "Tirage tarot du mois";
        $source = "tarot-mensuel";
    }    
    
    $fw_title = isset($fw_title) ? $fw_title : 'Voyance Gratuite';
    $form_submit_text = isset($form_submit_text) ? $form_submit_text : 'Recevoir mon étude';
?>
<section class="span300">
    <!-- form widget-->
    <aside class="widget w-adv">
        <div class="widget-title">
            <h4><?php echo $fw_title;?></h4>
        </div>
        <div id="form-w" class="widget-content clearfix" style="background-image:none;">
            <div class="description visible-part form-part">
                <div class="alert alert-danger" style="display:none"></div>
                <?php include('forms/question_cachee.php');?>
            </div>
        </div>
    </aside>	

    <!-- Banner voyance gratuite par voyant -->
    <?php include('visual_modules/psychic_ad.php');?>
    
    <!-- Social Counter -->
    <?php include('visual_modules/social_counter.php'); ?>
</section>
						