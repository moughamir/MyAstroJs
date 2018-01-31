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
  <link href="//fonts.googleapis.com/css?family=Great+Vibes|Open+Sans" rel="stylesheet" type="text/css" />
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
          
          <div class="lovers"></div>
          
          <div class="FormContainer-Fields">
            <p class="alert alert-danger" style="display: none"></p>
            <form method="post">
              
            <section class="step-1">
              <article id="question-1">
                <div class="question">Vous êtes :</div>
                <div class="FormField radio">
                <div class="FormField-TableInputContainer fixed-2-col gender">
                  <div class="FormField-TableInputContainer-Cell">
                    <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                    <label for="sexe-f" class="FormField-Label "><span class="ico-woman"><?php include($assets."venus.svg"); ?></span>une femme</label>
                    
                  </div>
                  <div class="FormField-TableInputContainer-Cell">
                     <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                    <label for="sexe-h" class="FormField-Label"><span class="ico-man"><?php include($assets."mars.svg"); ?></span>un homme</label>
                  </div>
                </div>
              </div>
              </article>
              <article id="question-2" class="hidden">
                <div class="question">Vous êtes :</div>
                <div class="FormField radio">
                <div class="FormField-TableInputContainer fixed-2-col gender">
                  <div class="FormField-TableInputContainer-Cell">
                    <input type="radio" name="status" value="couple" id="status-c" class="FormField-Input" />
                    <label for="status-c" class="FormField-Label "><span class="ico-couple"><?php include($assets."couple.svg"); ?></span>Déja en couple</label>
                    
                  </div>
                  <div class="FormField-TableInputContainer-Cell">
                     <input type="radio" name="status" value="single" id="status-s" class="FormField-Input" />
                    <label for="status-s" class="FormField-Label"><span class="ico-single"><?php include($assets."single.svg"); ?></span>Célibataire</label>
                  </div>
                </div>
              </div>
              </article>
              <article id="question-3" class="hidden">
                <div class="FormField">
                  <label for="mon-prenom" class="FormField-Label">Votre prénom</label>
                  <input class="name FormField-Input" type="text" name="prenom" placeholder="Votre prénom" value="<?= $prenom;?>" />
                </div>
                <div class="FormField">
                  <label for="mon-prenom" class="FormField-Label">Prénom de l’être aimé</label>
                  <input class="name FormField-Input" type="text" name="conjoint" placeholder="Prénom de l’être aimé" required />
                </div>
              </article>
              <button class="FormContainer-Submit btn-submit next" />Suivant <span class="arrow"></span></button>
              <button class="FormContainer-Submit btn-submit result hidden" />voir le résultat</button>
            </section>
            
            <section class="result hidden">
            <div class="loveOmeter">0</div>
            <div class="FormField"> <label for="tel" class="FormField-Label">Mon numéro de téléphone</label> <input id="tel " type="tel" class="FormField-Input" name="tel" required value="<?= $tel;?>" /> </div>
            <div class="Fields-Table-Row"> <label for="pays" class="FormField-Label">Votre pays</label>
            <div class="FormField"> <select name="pays" id="pays" class="FormField-Input" required>
            <option value="" selected>Votre Pays</option>
            <option value="BE">Belgique</option>
            <option value="CA">Canada</option>
            <option value="LU">Luxembourg</option>
            <option value="CH">Suisse</option>
            <option value="FR" selected>France Métropolitaine</option>
            <optgroup label="DOM-TOM">
            <option value="MQ">Martinique</option>
            <option value="GP">Guadeloupe</option>
            <option value="GF">Guyane</option>
            <option value="RE">La Réunion</option>
            <option value="YT">Mayotte</option>
            <option value="PM">St Pierre et Miquelon</option>
            <option value="BL">St Barthélémy</option>
            <option value="SM">St Martin</option>
            <option value="WF">Wallis et Futunua</option>
            <option value="PF">Polynésie Française</option>
            <option value="NC">Nouvelle Calédonie</option>
            </optgroup>
            <option value="ZZ">Autre</option>
            </select> </div>
            </div> <input type="text" name="antisp" value="" style="display: none" /> <button class="FormContainer-Submit" type="submit" name="demande_rappel">Rappel Gratuit</button> </section>
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
