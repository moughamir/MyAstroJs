<?php
$form = $url = "pdt-rdv";
$support = "voyance";
$site = "myastro.fr";
include('include/init-affilbase.php');
require_once(realpath('rdv_web/planning.php'));

$assets = 'images_landing/pouvoir-des-trois';
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';

?>
  <!DOCTYPE html>
  <html lang="fr">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow" />
    <title>Pouvoir Des Trois - Prenez en main votre Avenir</title>
    <link rel="icon" type="image/png" href="<?= $assets;?>/favicon.png" />
    <link rel="stylesheet" href="css/pouvoir-des-trois.css" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans" rel="stylesheet" />
    <!--[if lt IE 9]>
  <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
  <![endif]-->
  </head>

  <body class="main">
    <div class="overlay" id="form-overlay"></div>
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
        <span class="tri hidden"></span>
      </div>
      <div class="PageWrapper">
        <section class="section post-test hidden">
          <p>
            Prenez en main votre Avenir !
            <br> Grâce au Pouvoir des trois et ses supports divinatoires ancestraux : le pendule, la boule de cristal et le tarot
            nous allons pouvoir répondre à toutes vos interrogations.
            <br> Réalisez ce test simple et rapide qui nous permettra de mieux vous connaître.
            <br> Inscrivez votre prénom ci-dessous pour commencer :
          </p>
          <div class="form">
            <input type="text" name="js-name" class="FormField-Input" placeholder="Votre prénom" value="<?= $prenom;?>" required />
            <button class="btn start">Commencer</button>
          </div>
        </section>
        <section class="section content hidden">
          <h2 class="question">QUESTION</h2>
          <ul id="choices">
            <li class="choice">PLACEHOLDER</li>
            <li class="choice">PLACEHOLDER</li>
            <li class="choice">PLACEHOLDER</li>
          </ul>
        </section>
        <section class="rdv section hidden">
          <article class="FormContainer rdv-c">
            <h3 class="form-header">Je prends mon rendez-vous en ligne !</h3>
            <aside id="main_container" class="widget">
              <div id="form_pdt">
                <div class="main-content">
                  <div>
                    <img class="img-euro" src="<?= $assets;?>/euroffre.png">
                    <ul class="icon-liste">
                      <li class="icon-cray">
                        <span>Je remplis le formulaire</span>
                      </li>
                      <li class="icon-hand">
                        <span>Je choisis mon RDV</span>
                      </li>
                      <li class="icon-screen">
                        <span>Je réserve en ligne</span>
                      </li>
                      <li class="icon-payment">
                        <span> Le paiement est sécurisé</span>
                      </li>
                    </ul>
                  </div>
                  <div class="appForm">
                    <form class="ajax">
                      <fieldset>
                        <h2 class="fs-title"> Informations personnelles!</h2>
                        <input type="hidden" name="site" value="MyAstro" />
                        <input type="hidden" name="source" value="<?= $url;?>" />
                        <input type="hidden" name="method" value="client_web" />
                        <input type="hidden" name="support" value="rdv-web" />
                        <input type="hidden" name="affiliation" value="<?= $source;?>" />
                        <input type="hidden" name="dri" value="consultation_web" />
                        <input type="hidden" name="redirect_method" value="reload_form" />
                        <input type="hidden" name="tel_needed" value="1" />
                        <input type="hidden" name="cguv" value="1" />
                        <input type="hidden" name="partenaires" value="1" />
                        <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                        <input type="hidden" name="pays" value="FR" />
                        <input type="hidden" name="question_code" value="rdv_web" />
                        <div class="FormField radio">
                          <div class="FormField-TableInputContainer fixed-2-col gender">
                            <div class="FormField-TableInputContainer-Cell">
                              <label for="sexe-f" class="FormField-Label ">
                                <span class="ico-woman"></span>
                                une femme</label>
                              <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" /> </div>
                            <div class="FormField-TableInputContainer-Cell">
                              <label for="sexe-h" class="FormField-Label">
                                <span class="ico-man"></span>
                                un homme</label>
                              <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" /> </div>
                          </div>
                        </div>
                        <div class="FormField FormField-mg">
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="name" class="FormField-Label">Prénom</label>
                            <input type="text" id="name" name="prenom" class="FormField-Input" required placeholder="Prénom" /> </div>
                          <div class="FormField-TableInputContainer-Cell">
                            <label class="FormField-Label">Date de naissance</label>
                            <div class="FormField-TableInputContainer">
                              <div class="FormField-TableInputContainer-Cell">
                                <select class="FormField-Input" name="jour">
                                  <option value="" selected disabled>JJ</option>
                                  <?php for ($i = 1; $i <= 31; $i++) { ?>
                                  <option value="<?= $i ?>">
                                    <?= sprintf('%02d', $i) ?>
                                  </option>
                                  <?php } ?>
                                </select>
                              </div>
                              <div class="FormField-TableInputContainer-Cell">
                                <select class="FormField-Input" name="mois">
                                  <option value="" selected disabled>MM</option>
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
                                <select class="FormField-Input" name="annee">
                                  <option selected="selected" value="" disabled>AAAA</option>
                                  <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                  <option value="<?= $i ?>">
                                    <?= $i ?>
                                  </option>
                                  <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="FormField FormField-mg">
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="email" class="FormField-Label">E-mail</label>
                            <input id="email" type="email" name="email" class="FormField-Input" required placeholder="E-mail" /> </div>
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="tel" class="FormField-Label">Téléphone</label>
                            <input type="tel" id="tel" name="tel" placeholder="Mon téléphone" class="FormField-Input" required/> </div>
                        </div>
                        <button name="next" class="submit action-button" value="Next" type="submit">
                          Suivant
                        </button>
                        <button name="next" class="next action-button" value="Next" type="button" style="display: none">
                          Suivant
                        </button>
                      </fieldset>
                    </form>
                    <form class="ajax" id="rdv_form">
                      <fieldset style="display: none" class="planning" id="planning">
                        <h2 class="fs-title">Je choisis mon RDV</h2>
                        <input type="hidden" name="method" value="consultation_web" />
                        <input type="hidden" name="client_id" id="client_id" value="0" />
                        <div id="planning_selection">
                          <?= $vue ?>
                        </div>
                        <input type="button" name="previous" class="previous action-button" value="Précédent" />
                        <input type="button" name="next" class="nextSecond action-button" value="Suivant"> </fieldset>
                      <fieldset id="form_cb" style="display: none">
                        <strong class="euro-min">1€ les 10 premières minutes</strong>
                        <h2 class="fs-title">Coordonnées bancaires</h2>
                        <h3 class="fs-subtitle"></h3>
                        <label for="name" class="FormField-Label carte_name">Nom du propriétaire de la carte
                        </label>
                        <div class="FormField-TableInputContainer FormField-mg">
                          <div class="FormField-TableInputContainer-Cell">
                            <input type="text" id="carte_prenom" name="carte_prenom" class="FormField-Input" required placeholder="Prenom" /> </div>
                          <div class="FormField-TableInputContainer-Cell">
                            <input type="text" id="carte_nom" name="carte_nom" class="FormField-Input" required placeholder="Nom" /> </div>
                        </div>
                        <div class="FormField-TableInputContainer FormField-mg">
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="name" class="FormField-Label">Numéro de la carte</label>
                            <input type="text" id="carte_num" name="carte_num" class="FormField-Input js-check-luhn" required placeholder="Numéro de la carte"
                            /> </div>
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="name" class="FormField-Label">Expire Le :</label>
                            <div class="FormField-TableInputContainer-Cell">
                              <select class="FormField-Input" name="expiration_mois">
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
                              <select class="FormField-Input" name="expiration_annee">
                                <option value="" selected disabled>Année</option>
                                <?php for ($i = 2017; $i <= 2027; $i++) { ?>
                                <option value="<?= $i ?>">
                                  <?= $i ?>
                                </option>
                                <?php } ?>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="FormField-TableInputContainer FormField-mg ">
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="name" class="FormField-Label">Cryptogramme de sécurité </label>
                            <input type="text" id="crypto" name="crypto" class="FormField-Input" required/>
                            <img class="img-crypto" src="../images_landing/rdv/crypto.png"> </div>
                          <div class="FormField-TableInputContainer-Cell">
                            <label for="name" class="FormField-Label"> &nbsp;&nbsp;</label>
                            <div class="secureImages">
                              <img src="../images/mastercard-visa.png" alt="Mastercard &amp; Visa">
                              <img src="../images/hipay-secure.png" alt="Hipay"> </div>
                          </div>
                        </div>
                        <input type="button" name="previous" class="previousSecond action-button" value="Précédent" />
                        <input type="submit" name="submit" id="valider" class="submit action-button" value="Valider" /> </fieldset>
                    </form>
                  </div>
                </div>
                  <h4 class="custmer-service" >SERVICE CLIENT : 04.82.53.71.59</h4>
              </div>
            </aside>
          </article>
        </section>
      </div>
    </main>
    <footer>
      <p class="SiteCopyright">
        <?php include('include/footer_copyright.php');?> </p>
    </footer>
    <!-- #### SCRIPTS #### -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/i18n/datepicker-fr.js"></script>
    <script src="//cdn.jsdelivr.net/g/lodash@4.17.4"></script>
    <script type="text/javascript" src="js/pouvoir-des-trois.js"></script>
    <script src="js/formValidator.js"></script>
    <!-- #### REMARKETINGS #### -->
    <?php include('include/remarketing/adwords.php');
        include('include/remarketing/analytics.php');
        include('include/remarketing/facebook.php');?> </body>

  </html>