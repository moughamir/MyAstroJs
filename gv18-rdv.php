<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Consultaion en ligne - Grand Voyance 2018</title>
    <link rel="stylesheet" href="css/grande-voyance.css" type="text/css" /> </head>
  </head>

  <body class="rdv">
    <section class="section">
      <header class="page-header">
        <div class="title-container">
          <h1 class="title">La grande voyance 2018</h1>
          <h2 class="headline">nouvelle année, nouveau départ, nouvelle vie</h2>
        </div>
      </header>
      <main class="article-wrapper">
        <div class="main">
          <div class="left-part">
            <div class="content">
              <h1>Très simple et rapide où que vous soyez !</h1>
              <div class="FormField">
                <div class="FormField-TableInputContainer-Cell"> <img class="img-promo" src="images_landing/rdv/piece-de-monnaie.gif"> </div>
                <div class="FormField-TableInputContainer-Cell">
                  <ul class="icon-liste">
                    <li class="icone-cray"> <span>Je remplis le formulaire</span> </li>
                    <li class="icone-hand"> <span>je choisis mon RDV</span> </li>
                    <li class="icone-screen"> <span>Je reserve en ligne</span> </li>
                    <li class="icone-payment"> <span> Le paiment est sécurisé</span> </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="right-part">
            <aside id="main_container" class="widget">
              <div class="time">
                <p class="title-filled"> Je choisis mon rendez-vous quand je veux</p>
              </div>
              <form class="ajax">
                <fieldset>
                  <h2 class="fs-title"> Informations personnelles!</h2> <input type="hidden" name="site" value="MyAstro" /> <input type="hidden" name="source" value="consultation-en-ligne-1" /> <input type="hidden" name="method" value="client_web" /> <input type="hidden" name="support"
                    value="rdv-web" /> <input type="hidden" name="affiliation" value="Adwords" /> <input type="hidden" name="dri" value="consultation_web" /> <input type="hidden" name="redirect_method" value="reload_form" /> <input type="hidden" name="gclid"
                    value="<?= $gclid; ?>" /> <input type="hidden" name="cguv" value="1" /> <input type="hidden" name="pays" value="FR" /> <input type="hidden" name="question_code" value="" />
                  <div class="FormField radio">
                    <div class="FormField-TableInputContainer fixed-2-col gender">
                      <div class="FormField-TableInputContainer-Cell"> <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span>
                                    une femme</label> <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" /> </div>
                      <div class="FormField-TableInputContainer-Cell"> <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span>
                                    un homme</label> <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" /> </div>
                    </div>
                  </div>
                  <div class="FormField">
                    <div class="FormField-TableInputContainer-Cell"> <label for="name" class="FormField-Label">Prénom</label> <input type="text" id="name" name="prenom" class="FormField-Input" required placeholder="Prénom" /> </div>
                    <div class="FormField-TableInputContainer-Cell"> <label class="FormField-Label">Date de naissance</label>
                      <div class="FormField-TableInputContainer">
                        <div class="FormField-TableInputContainer-Cell"> <select class="FormField-Input" name="jour">
                                        <option value="" selected disabled></option>
                                        <?php for ($i = 1; $i <= 31; $i++) { ?>
                                            <option value="<?= $i ?>"> <?= sprintf('%02d', $i) ?></option>
                                        <?php } ?>
                                    </select> </div>
                        <div class="FormField-TableInputContainer-Cell"> <select class="FormField-Input" name="mois">
                                        <option value="" selected disabled></option>
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
                                    </select> </div>
                        <div class="FormField-TableInputContainer-Cell"> <select class="FormField-Input" name="annee">
                                        <option selected="selected" value=""></option>
                                        <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select> </div>
                      </div>
                    </div>
                  </div>
                  <div class="FormField">
                    <div class="FormField-TableInputContainer-Cell"> <label for="email" class="FormField-Label">E-mail</label> <input id="email" type="email" name="email" class="FormField-Input" required placeholder="E-mail" /> </div>
                    <div class="FormField-TableInputContainer-Cell"> <label for="tel" class="FormField-Label">Téléphone</label> <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required/> </div>
                  </div> <button name="next" class="submit action-button" value="Next" type="submit">Suivant</button> <button name="next" class="next action-button" value="Next" type="button" style="display: none">
                        Suivant
                    </button> </fieldset>
              </form>
              <form class="ajax">
                <fieldset style="display: none" class="planning" id="planning">
                  <h2 class="fs-title">Je choisis mon RDV</h2> <input type="hidden" name="method" value="consultation_web" /> <input type="hidden" name="client_id" id="client_id" value="0" />
                  <div id="planning_selection">
                    <?= $vue ?>
                  </div> <input type="button" name="previous" class="previous action-button" value="Précédent" /> <input type="button" name="next" class="nextSecond action-button" value="Suivant"> </fieldset>
                <fieldset style="display: none">
                  <p class="euro-min">1 EURO POUR 10 MINUTES</p>
                  <h2 class="fs-title">Coordonnées bancaires</h2>
                  <h3 class="fs-subtitle"></h3> <label for="name" class="FormField-Label">Nom du propriétaire de la carte</label>
                  <div class="FormField-TableInputContainer">
                    <div class="FormField-TableInputContainer-Cell"> <input type="text" id="carte_prenom" name="carte_prenom" class="FormField-Input" required placeholder="Prenom" /> </div>
                    <div class="FormField-TableInputContainer-Cell"> <input type="text" id="carte_nom" name="carte_nom" class="FormField-Input" required placeholder="Nom" /> </div>
                  </div>
                  <div class="FormField-TableInputContainer">
                    <div class="FormField-TableInputContainer-Cell"> <label for="name" class="FormField-Label">Numéro de la carte</label> <input type="text" id="carte_num" name="carte_num" class="FormField-Input js-check-luhn" required placeholder="Numéro de la carte" /> </div>
                    <div class="FormField-TableInputContainer-Cell">
                    <label for="name" class="FormField-Label">Expire Le :</label>
                      <div class="FormField-TableInputContainer-Cell"> <select class="FormField-Input" name="expiration_mois">
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
                                </select> </div>
                      <div class="FormField-TableInputContainer-Cell"> <select class="FormField-Input" name="expiration_annee">
                                    <option value="" selected disabled>Année</option>
                                    <?php for ($i = 2017; $i <= 2027; $i++) { ?>
                                        <option value="<?= $i ?>"> <?= $i ?></option>
                                    <?php } ?>
                                </select> </div>
                    </div>
                  </div>
                  <div class="FormField-TableInputContainer">
                    <div class="FormField-TableInputContainer-Cell"> <label for="name" class="FormField-Label">Cryptogramme de sécurité </label> <input type="text" id="crypto" name="crypto" class="FormField-Input" required/> <img class="img-crypto" src="../images_landing/rdv/crypto.png"> </div>
                    <div
                      class="FormField-TableInputContainer-Cell"> <label for="name" class="FormField-Label"> &nbsp;&nbsp;</label>
                      <div class="secureImages"> <img src="../images/mastercard-visa.png" alt="Mastercard &amp; Visa"> <img src="../images/hipay-secure.png" alt="Hipay"> </div>
                  </div>
          </div> <input type="button" name="previous" class="previousSecond action-button" value="Précédent" /> <input type="submit" name="submit" class="submit action-button" value="Valider" /> </fieldset>
          </form>
        </div>
        </div>
        </aside>
        </div>
        </div>
      </main>
    </section>
  </body>
  <link rel="stylesheet" type="text/css" href="css/rdv_web.css" />
  <!-- #### SCRIPTS #### -->
  <script src="js/jquery-1.11.js"></script>
  <script src="js/formValidator.js"></script>
  <!-- jQuery easing plugin -->
  <script src="js/jquery.easing.min.js" type="text/javascript"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.6.4/jquery.flexslider-min.js"></script>
  <script src="js/rdv_web.js"></script>
  <!-- js scripts kgestion for displaying planning -->
  <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
  <script type="text/javascript" src="rdv_web/js/moment_9.js"></script>
  <script type="text/javascript" src="rdv_web/js/bootstrap-datepicker.min_12.js"></script>
  <script type="text/javascript" src="rdv_web/js/bootstrap-datepicker.translatefr_13.js"></script>

</html>
