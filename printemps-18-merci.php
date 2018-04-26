<?php
session_start();
$prenom = isset($_SESSION['prenom'])? $_SESSION['prenom'] : '';
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$kgestion_id = isset($_SESSION['kgestion_id'])? $_SESSION['kgestion_id'] : '';

$url = 'https://voyance-en-direct.tv/love-myastro/offre-gratuite?id='.$kgestion_id;
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Prévision, 2018, zodiaques, horoscope, astrologie" />
  <link rel="shortcut icon" href="images_landing/printemps-18/favicon.ico">
  <title>Printemps des Amours - Tchat | MyAstro</title>
  <link href="//fonts.googleapis.com/css?family=Tangerine|Lobster|Open+Sans|Oswald:300,400" rel="stylesheet">
  <link rel="stylesheet" href="css/printemps-18.css">
  <link rel="shortcut icon" href="images_landing/printemps-18/favicon.ico">
  <!--[if lt IE 9]>
  <script src="//cdn.jsdelivr.me/g/html5shiv@3.7.3,respond@1.4.2"></script>
  <![endif]-->
</head>

<body class="dri-c">
<header class="site-header grid-3-small-1">
        <div class="one-third"></div>
        <div class="one-third">
          <a href="/" class="logo">
            <img src="images_landing/printemps-18/logo.svg" alt="MyAstro" class="site-logo">
          </a>
        </div>
        <div class="one-third"></div>
        <h1 class="hidden">Printemps des Amours 2018</h1>
      </header>
    <section class="site site-v2 tchat-site">


      <main class="site-content v2">
        <section class="view flex-container-v">
          <article class="dri ">

            <article class="FormContainer center">
               <h1 class="form-title sign-name">Merci, vous allez recevoir la suite de vos prévisions AMOUREUSES par EMAIL</h1>
              <p class="message">Si vous ne souhaitez pas attendre d’avantage, notre équipe est à votre disposition et peut vous rappeller <span class="highlight">gratuitement</span>, il vous suffit d’inscrire votre numéro de téléphone dans le formulaire ci-dessous :</p>
              <div class="img-center">
                <img src="images_landing/printemps-18/tchat.png" alt="5 minutes de tchat gratuites" class="10-free">
              </div>
                    <form action="" method="post" class="Primary-Form">
                        <input type="hidden" name="prenom" value="<?= $prenom;?>" />
                        <a href="<?= $url;?>" class="btn cta-call FormContainer-Submit btn-tchat">Tchat gratuit</a>
                    </form>
                </article>
          </article>
        </section>
      </main>
    </section>
    <div class="PageWrapper">
      <footer class="SiteFooter">
        <div class="FooterWrapper">
          <ul class="ReassuranceList">
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img star"></span>
              <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img lock"></span>
              <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img chat"></span>
              <span class="ReassuranceList-Item-Txt">Interprétation<br/><strong>immédiate</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img trophy"></span>
              <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
            </li>
            <li class="ReassuranceList-Item">
              <span class="ReassuranceList-Item-Img card"></span>
              <span class="ReassuranceList-Item-Txt">Paiement <br/><strong>sécurisé par CB</strong></span>
            </li>
          </ul>
        </div>
      </footer>
      <p class="SiteCopyright">
        <?php include('include/footer_copyright.php'); ?>
      </p>
    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <!-- #### REMARKETINGS #### -->
  <?php include('include/remarketing/adwords.php');
        include('include/remarketing/analytics.php');
        include('include/remarketing/facebook.php');?>

</body>
</html>