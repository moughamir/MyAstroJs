<?php
    if(preg_match('%^(/horoscope-2015)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-2015";
    }else if(preg_match('%^(/horoscope-du-mois)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-mois";
    }else if(preg_match('%^(/horoscope-de-la-semaine)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-semaine";
    }else if(preg_match('%^(/horoscope-du-jour)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-jour";
    }else if(preg_match('%^(/horoscope-de-l-amour)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-amour";
    }
    $form_data = array(
        '/numerologie-gratuite.php' => ['title'=>'Numérologie gratuite', 'source'=>'numerologie-gratuite', 'support'=>'voyance'],
        '/portrait-astrologique-feminin.php' => ['title'=>'Voyance gratuite', 'source'=>'portrait-astrologique-f', 'support'=>'voyance'],
        '/portrait-astrologique-masculin.php' => ['title'=>'Voyance gratuite', 'source'=>'portrait-astrologique-m', 'support'=>'voyance'],
        '/personnalite-numerologique.php' => ['title'=>'Numérologie gratuite', 'source'=>'personnalite-numerologique', 'support'=>'voyance'],
        '/tarot-de-marseille.php' => ['title'=>'2 - Posez votre question', 'source'=>'tarot-marseille', 'support'=>'voyance'],
        '/tarot-gratuit.php' => ['title'=>'2 - Posez votre question', 'source'=>'tarot-gratuit', 'support'=>'tarot'],
        '/tarot-oui-ou-non.php' => ['title'=>'2 - Posez votre question', 'source'=>'tarot-oui-non', 'support'=>'voyance'],
        '/tarot-persan.php' => ['title'=>'2 - Posez votre question', 'source'=>'tarot-persan', 'support'=>'voyance'],
        '/tirage-tarot-gratuit.php' => ['title'=>'2 - Posez votre question', 'source'=>'tirage-tarot-gratuit', 'support'=>'voyance'],
        '/voyance-par-sms.php' => ['title'=>'Voyance gratuite', 'source'=>'tirage-tarot-gratuit', 'support'=>'voyance-par-sms'],
    );
    
    $page = $_SERVER['PHP_SELF'];
    $flag = in_array($page, array_keys($form_data));
    $titre = $flag ? $form_data[$page]['title'] : 'Voyance gratuite';
    $source = $flag ? $form_data[$page]['source'] : 'horoscope-gratuit';
    $support = $flag ? $form_data[$page]['support'] : 'voyance';
    
    $questions = array(
        'Amour' => array(
            [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
            [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
            [ 'code' => 'question_24', 'subject' => 'sentimental', 'text' => 'Vous en aimez un(e) autre', 'conjoint' => true],
            [ 'code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
        ),
        'Argent' => array(
            [ 'code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement' ],
        ),
        'Travail' => array(
            [ 'code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel' ],
            [ 'code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi' ],
        )
    );
?>
<aside class="widget w-adv">
    <div class="widget-title" style="text-align:center;">
        <h4><?= $titre ?></h4>
    </div>
    <div id="form-w" class="widget-content clearfix" style="background-image:none;">
        <div class="visible-part form-part">
            <div class="alert alert-danger" style="display: none;"></div>
            <?php include('../forms/voyance-general.php');?>
        </div>
</aside>

