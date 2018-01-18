<?php
session_start();
$pageName = $form = "gv18-tchat";
include('include/init-affilbase.php');
$method = "general-suscribe";
$support = "voyance";
$site = "myastro.fr";

$dri = "myastro/offre-gratuite";
$targetContent = $_GET['p'];
$dri2 = "gv18-dri?p=".$targetContent;
$assets        = 'images_landing/grande-voyance/18';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>La Grande Voyance 2018 - MyAstro</title>
    <link rel="icon" type="image/png" href="<?= $assets; ?>/favicon.png"/>
    <link rel="stylesheet" href="css/grande-voyance-tel.css" type="text/css"/>
  </head>
  <body class="dri">
    <section class="PageWrapper">
      <header class="PageHeader">
        <div class="PageTitle">
          <h1 class="title">La grande voyance 2018</h1>
          <h2 class="headline">nouvelle année, nouveau départ, nouvelle vie</h2>
        </div>
      </header>
      <article class="Container">
        <section class="DRI">
          <header class="DRI-Title">
            <div class="promotion-special">Offre spéciale</div>
            <h2 class="DRI-PromoTitle">Formulaire<span class="small">pour accéder aux:</span></h2>
            <div class="promotion-fivemin"><p hidden>5 minutes OFFERTES</p></div>
          </header>
          <div class="FormContainer overlay" id="form-overlay"></div>
          <article class="FormContainer">
            <form method="post"  id="form-container" class="ajax">
              <input type="hidden" name="source" value="<?= $pageName;?>" />
              <input type="hidden" name="method" value="<?= $method;?>" />
              <input type="hidden" name="support" value="<?= $support;?>" />
              <input type="hidden" name="site" value="<?= $site;?>" />
              <input type="hidden" name="affiliation" value="<?= $source;?>" />
              <input type="hidden" name="theme_id" value="question_1" />
              <input type="hidden" name="dri" value="<?= $dri;?>" />
              <input type="hidden" name="dri2" value="<?= $dri2;?>" />
              <!-- ########## autres champs pré-remplis ########## -->
              <input type="hidden" name="convertir" value="1" />
              <input type="hidden" name="cguv" value="1" />
              <input type="hidden" name="partenaires" value="1" />

              <div class="FormContainer-Fields">
                <div class="FormField">
                  <input type="text" name="prenom" class="FormField-Input" placeholder="Votre prénom" required />
                </div>
                <div class="FormField">
                  <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" required />
                </div>
                <div class="Fields-Table-Row2">
                  <label class="FormField-Label">Votre date de naissance</label>
                </div>
                <div class="Fields-Table-Row">
                  <div class="FormField">
                    <div class="FormField-TableInputContainer">
                      <div class="FormField-TableInputContainer-Cell">
                        <select class="FormField-Input" name="jour" required>
                          <option value="" selected disabled>Jour</option>
                          <?php for ($i = 1; $i <= 31; $i++) { ?>
                            <option value="<?= $i ?>">
                              <?= sprintf('%02d', $i);?>
                            </option>
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
                          <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                            <option value="<?= $i;?>">
                              <?= $i;?>
                            </option>
                          <?php } ?>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="FormField">
                  <div class="FormField-TableInputContainer">
                    <div class="FormField-TableInputContainer-Cell">
                      <select name="pays" id="pays" class="FormField-Input" required>
                        <option value="" selected>Votre Pays</option>
                        <option value="BE">Belgique</option>
                        <option value="CA">Canada</option>
                        <option value="LU">Luxembourg</option>
                        <option value="CH">Suisse</option>
                        <option value="FR">France Métropolitaine</option>
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
                      </select>
                    </div>
                  </div>
                </div>

                <!-- SUBMIT -->
                <button class="Button" type="submit" name="demande_rappel">5 Min de tchat GRATUITES</button>
              </div>
            </form>
          </article>
        </section>
        <div class="psychic"></div>
      </article>
    </section>

    <link href="//fonts.googleapis.com/css?family=Lobster|Open+Sans|Oswald" rel="stylesheet"/>

    <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
    <script src="js/formValidator.js"></script>
  </body>
</html>
