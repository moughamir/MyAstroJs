<?php
include('include/process-dri.php');
$assets = 'images_landing/sv/18/';
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Compatibilité des Prénoms - MyAstro</title>
  <meta name="robots" content="noindex,nofollow" />
  <link rel="icon" type="image/png" href="<?= $assets;?>favicon.png" />
  <link href="//fonts.googleapis.com/css?family=Great+Vibes|Open+Sans|Fjalla+One" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="css/saint-valentin-18.css" type="text/css" />
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

  <header class="SiteHeader">
    <div class="PageWrapper">
      <div class="SiteLogo">
      <?php include('include/myastro-logo-svg.php');?>
      </div>
      <div class="PageLogo">
        <h1><sup>Saint</sup>Valentin</h1>
      </div>
      <div class="spacer"></div>
    </div>
  </header>

  <section class="ContentBand">
    <div class="PageWrapper">
      <div class="ContentBand-Column Form" id="form-container">
        <article class="FormContainer" id="vm-anchor">
          <h2 class="FormContainer-Header">Testez la compatibilité de vos prénoms :</h2>
          
          <div class="FormContainer-Fields">
            <div class="lovers"></div>
            <p class="alert alert-danger" style="display: none"></p>
            
            <form method="post">
              <section class="step-1">
                <div class="question">Vous êtes :</div>
                <div class="question-container">
                  <article id="question-1">
                    <div class="FormField radio">
                    <div class="FormField-TableInputContainer fixed-2-col gender">
                      <div class="FormField-TableInputContainer-Cell">
                        <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                        <label for="sexe-f" class="FormField-Label "><span class="ico-woman"><?php include($assets."venus.svg"); ?></span>une femme</label>
                        
                      </div>
                      <div class="FormField-TableInputContainer-Cell">
                         <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input"/>
                        <label for="sexe-h" class="FormField-Label"><span class="ico-man"><?php include($assets."mars.svg"); ?></span>un homme</label>
                      </div>
                    </div>
                  </div>
                  </article>
                  <article id="question-2" class="hidden">
                    <div class="FormField radio">
                    <div class="FormField-TableInputContainer fixed-2-col gender">
                      <div class="FormField-TableInputContainer-Cell">
                        <input type="radio" name="status" value="couple" id="status-c" class="FormField-Input"  />
                        <label for="status-c" class="FormField-Label "><span class="ico-couple"><?php include($assets."couple.svg"); ?></span>Déja en couple</label>
                        
                      </div>
                      <div class="FormField-TableInputContainer-Cell">
                         <input type="radio" name="status" value="single" id="status-s" class="FormField-Input"/>
                        <label for="status-s" class="FormField-Label"><span class="ico-single"><?php include($assets."single.svg"); ?></span>Célibataire</label>
                      </div>
                    </div>
                  </div>
                  </article>
                  <article id="question-3" class="hidden">
                    <div class="FormField">
                      <label for="mon-prenom" class="FormField-Label hidden">Votre prénom</label>
                      <input class="name FormField-Input" type="text" name="prenom" placeholder="Votre prénom" value="<?= $prenom;?>" />
                    </div>
                    <div class="FormField">
                      <label for="mon-prenom" class="FormField-Label hidden">Prénom de l’être aimé</label>
                      <input class="name FormField-Input" type="text" name="conjoint" placeholder="Prénom de l’être aimé" />
                    </div>
                  </article>
                </div>
                <button class="FormContainer-Submit btn-submit next"/>Suivant <span class="arrow"></span></button>
                <button class="FormContainer-Submit btn-submit result-cta hidden" />voir le résultat</button>
              </section>
              <section class="result hidden">
                <div class="cols-x2">
                  <div class="lovers-b"></div>
                </div>
                <div class="cols-x2">
                  <h2 class="names"><span class="person-a"></span><br/>&<br/><span class="person-b"></span></h2>
                  <div class="loveOmeter">0</div>
                  <div class="Fields-Table-Row">
                    <label for="email" class="FormField-Label hidden">Votre email</label>
                    <div class="FormField">
                      <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" required />
                    </div>
                  </div>
                  <button class="FormContainer-Submit" type="submit" name="valider">Recevoir l’interpretation par email</button>
                </div>
                
              </section>
            </form>
            </div>
            </article>
            </div>
            </div>
            </section>
<p class="SiteCopyright">
<?php include('include/footer_copyright.php');?> </p>
<!-- #### SCRIPTS #### -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/sv-nameCompa.js"></script>
<!-- #### REMARKETINGS #### -->
<?php include('include/remarketing/adwords.php');
include('include/remarketing/analytics.php');
include('include/remarketing/facebook.php');?>

</body>

</html>
