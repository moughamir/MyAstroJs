<?php
/**
 * pouvoir-des-trois == AFFILBASE
 * 
 * Created on : Feb 13th, 2017
 * Author     : Mohamed Moughamir <hello@omnizya.com>
 */
session_start();
$assets = 'images_landing/pouvoir-des-trois';
$site = getenv('MYASTRO_ROOT_URL');
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$target = 'https://voyance-en-direct.tv/pouvoir-des-trois/offre-gratuite?email='.$email;

?>

<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow" />
    <meta property="fb:app_id" content="1276526482364681" /> 
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Pouvoir des Trois" />
    <meta property="og:url" content="http://<?= $site ?>/pouvoir-des-trois" />
    <meta property="og:image" content="http://<?= $site.'/'.$assets ?>/cover.jpg" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="675" />
    <meta property="og:description" content="Prenez en main votre Avenir, Grâce au Pouvoir des trois et de ces support divinatoires ancestraux: le pendule, la boule de cristal, et le tarot; nous allons pouvoir répondre à vos intérrogations, grace à ce petit teste." />
    <meta property="og:locale" content="fr_FR" />
    
    <title>Pouvoir Des Trois | MyAstro</title>
    <link rel="icon" type="image/png" href="<?= $assets ?>/favicon.png" />
    <link rel="stylesheet" href="css/pouvoir-des-trois.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans" rel="stylesheet">
    
    <!--[if lt IE 9]>
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
    <![endif]-->
  </head>

  <body class="main">

    <header class="SiteHeader">
      <div class="PageWrapper">
        <div class="SiteLogo"></div>
      </div>
    </header>
    
    <div class="title">
      <h1>Amour, Travail, Argent</h1>
    </div>
    <main class="ContentBand">
      <div class="preload">
      </div>
      <div class="PageWrapper">
        <section class="form-container">
          <header class="mini-form--header"><h2>5 <span class="cap">minutes</span> de Tchat <span class="cap">gratuites</span></h2></header>
        </section>
      </div>
    </main>
    
    <footer>
      <p class="SiteCopyright">
        <?php include('include/footer_copyright.php'); ?>
      </p>

      <!-- #### SCRIPTS #### -->
      <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
      <!--script type="text/javascript" src="js/pouvoir-des-trois.js"></script-->
      <script src="js/formValidator.js"></script>

      <!-- #### REMARKETINGS #### -->
      <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </footer>

  </body>

  </html>