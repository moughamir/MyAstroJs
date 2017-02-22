<?php
/**
 * pouvoir-des-trois == AFFILBASE
 * 
 * Created on : Feb 13th, 2017
 * Author     : Mohamed Moughamir <hello@omnizya.com>
 */
session_start();
$assets = 'images_landing/pouvoir-des-trois';

$question = ['code'=>'CODE', 'subject'=>'', 'text'=>''];
/**
 * <section class="home">
  <img src="<?= $assets ?>/tri.png" class="rotate" />
  </section>*/

?>

<!doctype html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="">
    <meta name="robots" content="noindex, nofollow" />
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
      <!--div class="header-content"><a href="/"><img src="<?= $assets ?>/logo.png" alt="Pouvoir des trois" class="landing-logo"></a></div-->
    </header>
    
    <div class="title">
      <h1>Amour, Travail, Argent</h1>
    </div>

    <section class="section post-test">
      
      Pouvoir des trois<br> Prenez en main votre <span class="cap">a</span>venir,<br> Grâce au Pouvoir des trois et de ces support divinatoires ancestraux: le pendule, la boule de cristal, et le tarot;<br> nous allons pouvoir répondre à vos intérrogations,
      grace à ce petit teste.<br> Simple et rapida ces révélations sont étonnantes... Inscrivez votre Prénom ci-dessous. <br>
      
      <div class="form">
        <input type="text" name="name" class="FormField-Input" placeholder="Votre prénom"/>
        <button class="btn start">Commencer</button>
      </div>
      
      
    </section>
    
    <section class="section content">
      
      <h2 class="question">QUESTION</h2>
      
      <ul class="qui" id="choices">
        <li class="choice">PLACEHOLDER</li>
        <li class="choice">PLACEHOLDER</li>
        <li class="choice">PLACEHOLDER</li>
      </ul>

    </section>


    <section class="section">
      <article>
      <p class="resault"></p>
      <a href='#FormContainer' class='read-more'>Lire la suite</a>
      </article>
      <article class="FormContainer">
        <div class="promo"></div>
        <div class="Pop Pop-Voyant getFormValue" data-ref-form="voyant" data-method="class"><span class="Pop-Voyant-Photo"></span></div>
        <div class="FormContainer overlay" id="form-overlay"></div>
        
        <div class="FormContainer-Fields Fields-Table">
          
          
          <p class="alert alert-danger" style="display: none"></p>
          
          <!-- ########## identification formulaire ########## -->
          <input type="hidden" name="source" value="tarot-direct-a" />
          <input type="hidden" name="method" value="general-suscribe" />
          <input type="hidden" name="support" value="tarot" />
          <input type="hidden" name="site" value="myastro.fr" />
          <input type="hidden" name="affiliation" value="adwords" />
          <input type="hidden" name="dri" value="tarot-direct-merci" />
          <!-- ########## autres champs pré-remplis ########## -->
          <input type="hidden" name="tel_needed" value="1" />
          <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>" />
          <input type="hidden" name="cguv" value="1" />
          <input type="hidden" name="partenaires" value="1" />
          <!-- ############################################### -->
          // gender
          <div class="Fields-Table-Row gender">
            <label class="FormField-Label">Vous êtes</label>
            <div class="FormField radio">
              <div class="FormField-TableInputContainer fixed-2-col gender">
                <div class="FormField-TableInputContainer-Cell">
                  <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span>une femme</label>
                  <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                </div>
                <div class="FormField-TableInputContainer-Cell">
                  <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span>un homme</label>
                  <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                </div>
              </div>
            </div>
          </div>
          //bdd
          <div class="Fields-Table-Row">
            <label class="FormField-Label">Votre date de naissance</label>
            <div class="FormField">
              <div class="FormField-TableInputContainer">
                <div class="FormField-TableInputContainer-Cell">
                  <select class="FormField-Input" name="jour" required>
                    <option value="" selected disabled>Jour</option>
                    <?php for($i=1;$i<=31;$i++){ ?>
                    <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="FormField-TableInputContainer-Cell">
                  <select class="FormField-Input" name="mois" required>
                    <option value="" selected disabled>Mois</option>
                    <option value="01">Janv.</option>
                    <option value="02">Fev.</option>
                    <option value="03">Mars</option>
                    <option value="04">Avr.</option>
                    <option value="05">Mai</option>
                    <option value="06">Juin</option>
                    <option value="07">Juil.</option>
                    <option value="08">Aout</option>
                    <option value="09">Sept.</option>
                    <option value="10">Oct.</option>
                    <option value="11">Nov.</option>
                    <option value="12">Dec.</option>
                  </select>
                </div>
                <div class="FormField-TableInputContainer-Cell">
                  <select class="FormField-Input" name="annee" required>
                  <option value="" selected disabled>Année</option>
                  <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                  <option value="<?= $i ?>"><?= $i ?></option>
                  <?php } ?>
                  </select>
                </div>
              </div>
            </div>
          </div>
          
          // email
          <div class="Fields-Table-Row">
            <label for="email" class="FormField-Label">Votre email</label>
            <div class="FormField">
              <input id="email" type="email" name="email" class="FormField-Input" value="<?= $email ?>" placeholder="Votre Email" required />
            </div>
          </div>
          <div class="Fields-Table-Row">
            <span class="FormField-Info">Vous recevrez votre interprétation à cette adresse</span>
          </div>
          
          // tel
          <div class="Fields-Table-Row">
            <label for="tel" class="FormField-Label">Votre numéro de téléphone</label>
            <div class="FormField">
              <input id="tel" type="tel" name="tel" class="FormField-Input" required />
            </div>
          </div>
          <div class="Fields-Table-Row">
            <span class="FormField-Info">Un SMS vous sera envoyé lorsque lʼinterprétation sera prête</span>
          </div>
        </div>
        //btn
        <button class="FormContainer-Submit" type="submit" name="valider">Commencer le Tchat Gratuit</button>
        
      </article>
    </section>

    <footer>
      <p class="SiteCopyright">
        <?php include('include/footer_copyright.php'); ?>
      </p>

      <!-- #### SCRIPTS #### -->
      <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
      <script type="text/javascript" src="js/pouvoir-des-trois.js"></script>
      <script src="js/formValidator.js"></script>

      <!-- #### REMARKETINGS #### -->
      <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </footer>


  </body>

  </html>
