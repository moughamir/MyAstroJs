<?php
/* 
    ---------------------------------
    --   RENTRÉE 2016 = AFFIL-BASE --
    ---------------------------------

    Created on : 6 septembre 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
session_start();
$result = $_SESSION['question'];
switch ($result) {
    case 'R16_POSITIF':
        $textResult= 'Il n’y a pas de doute : cette rentrée doit être votre rentrée ! Vous avez toutes les cartes en main pour réussir et relever de grands défis. Et c’est tant mieux ! Parce que cette rentrée s’annonce mouvementée et les mois qui vont suivre vont être du même niveau. Préparez-vous à une fin d’année 2016 pleine de surprises. Un seul conseil : préparez-vous bien et vous n’aurez aucun souci à vous faire…';
        break;
    case 'R16_NEUTRE':
        $textResult= 'Pour cette rentrée, c’est plutôt mi-figue, mi-raisin. La motivation est présente mais votre esprit est encore un peu en vacances. Il va falloir rapidement vous faire une raison parce que cette rentrée et tous ses rebondissements ne vont pas vous attendre. Surtout que les prochains mois vont être riches en opportunités, notamment en amour et au travail. A vous de voir si vous voulez vraiment les laisser filer…';
        break;
    case 'R16_NEGATIF':
        $textResult= 'Cette rentrée ne se présente pas sous les meilleurs auspices ! Votre moral n’est pas vraiment au top et vous avez plutôt tendance à regarder vers le passé que vers ces prochains mois qui vous tendent les bras. Une manière de penser qu’il va falloir rapidement modifier : Septembre a fait son apparition et de nombreux défis vous attendent pour cette fin d’année 2016. Votre réaction ne doit pas tarder, le temps pourrait passer bien plus vite que vous ne le pensez…';
        break;
    default :
        $textResult = '';
        break;
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - C’est la rentrée ! Venez tester votre moral</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="PageWrapper">
            <header class="SiteHeader">
                <div class="SiteLogo"><span>MyAstro</span></div>
                <h1 class="PageLogo bgHeader"><span>C’est la rentrée</span><span>Venez tester votre moral</span></h1>
                <?php include('include/bloc-socials.php'); ?>
            </header>
            
            <section class="ContentBand">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <div class="FormContainer-Fields">
                        <p class="Result-Name"><?= ucfirst($_SESSION['firstname']) ?></p>
                        <p class="Result-Text"><?= $textResult ?></p>
                        <p class="FormContainer-Slogan"><span class="ico-form"></span>Vous allez recevoir votre interprétation complète par email dès demain.</p>
                        <p class="FormContainer-Slogan2">Envie d’en savoir plus immédiatement ?</p>
                        
                        <p class="DRI-Sent" style="margin-bottom: 3rem">
                            Nos voyants sont disponibles de suite sur notre TCHAT !<br />
                            Profitez dés maintenant de notre offre à <strong>1€</strong> les 15 minutes.
                        </p>
                        
                        <a href="http://www.voyance-en-direct.tv/voyance-par-tchat/saisie-cb?email=<?= urlencode($_SESSION['email'])?>" class="FormContainer-Submit btn-send">Lancer le tchat</a>
                    </div>
                </article>  
            </section>
            
            <footer><p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p></footer>
            
        </div><!-- fin de .PageWrapper -->
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Fjalla+One" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />