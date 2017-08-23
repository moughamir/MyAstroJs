
<?php

include(realpath('include/tools.php'));
include(realpath('rdv_web/planning.php'));

$questions = array(
    'Amour' => array(
        [ 'code' => 'pla16_question_1', 'subject' => 'sentimental', 'text' => 'Vais-je rencontrer l’amour ?' ],
        [ 'code' => 'pla16_question_2', 'subject' => 'sentimental', 'text' => 'Quels sont ses sentiments pour moi ?', 'conjoint' => true ],
        [ 'code' => 'pla16_question_24', 'subject' => 'sentimental', 'text' => 'Mes sentiments sont confus, que dois-je faire ?', 'conjoint' => true],
        [ 'code' => 'pla16_question_11', 'subject' => 'sentimental', 'text' => 'Ai-je encore un avenir avec lui/elle ?', 'conjoint' => true],
    ),
    'Argent' => array(
        [ 'code' => 'pla16_question_73', 'subject' => 'financier', 'text' => 'Vais-je gagner de l’argent ?' ],
    ),
    'Travail' => array(
        [ 'code' => 'pla16_question_4', 'subject' => 'professionnel', 'text' => 'Quel sera mon avenir professionnel ?' ],
        [ 'code' => 'pla16_question_3', 'subject' => 'professionnel', 'text' => 'Quand vais-je trouver du travail ?' ],
    )
);

?>
<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>MyAstro - Consultants en astrologie <br />
            répondra à vos questions </title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        <link rel="stylesheet" type="text/css" href="css/rdv_web.css" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_1.bootstrap.min_1.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_2.font-awesome.min_2.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.chosen.min_3.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.dataTables.bootstrap_4.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.datepicker_5.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.jquery-ui-1.10.3.custom.min_6.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_4.ace_8.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_5.ace-dataTable_9.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_5.ace-fonts_10.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_5.ace-rtl.min_11.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_5.ace-skins.min_12.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_bootstrap-datetimepicker.min_13.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_prettify_15.css" type="text/css" rel="stylesheet" />
        <link href="<?= APIKGestion::BASE_URL ?>css/main_part_1_6.additionnals_1.css" type="text/css" rel="stylesheet" />
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body >

    <!-- multistep form -->
    <div id="main_container" >
        <div class="TextContent">
            <header class="ContentBand-ColumnHeader">
                <span class="SiteLogo"></span>
                <div class="FormField-TableInputContainer fixed-3-col">
                    <div class="FormField-TableInputContainer-Cell">
                        <p class="p-title" >
                            Reserver une consultation en ligne
                        </p>
                    </div>
                    <div class="FormField-TableInputContainer-Cell">
                        <img src="../images/rdv.png " height="30%" width="30%">
                    </div>
                    <div class="FormField-TableInputContainer-Cell">
                        <p class="p-title">
                            Consultants en astrologie <br />
                            répondra à vos questions
                        </p>
                    </div>
                </div>
                <br/>
            </header>
        </div>
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">informations Personnelles</li>
            <li>Horaires Consultation</li>
            <li>Coordonnées bancaires</li>
        </ul>
        <form class="ajax">

        <fieldset >
            <h2 class="fs-title" >Remplissez Vos informations Personnelles!</h2>
            <input type="hidden" name="site" value="MyAstro" />
            <input type="hidden" name="source" value="consultation-en-ligne-14" />
            <input type="hidden" name="method" value="client_web" />
            <input type="hidden" name="support" value="rdv-web" />
            <input type="hidden" name="affiliation" value="Londres" />
            <input type="hidden" name="dri" value="consultation_web" />
            <input type="hidden" name="redirect_method" value="reload_form" />
            <input type="hidden" name="cguv" value="1" />
            <input type="hidden" name="partenaires" value="1" />

            <div class="FormField">
                <label for="name" class="FormField-Label">Prénom</label>
                <input type="text" id="name" name="prenom" class="FormField-Input" required placeholder="Prénom"/>
            </div>
            <div class="FormField radio">
                <div class="FormField-TableInputContainer fixed-2-col gender">
                    <div class="FormField-TableInputContainer-Cell">
                        <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                        <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                    </div>
                    <div class="FormField-TableInputContainer-Cell">
                        <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                        <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                    </div>
                </div>
            </div>
            <div class="FormField">
                <label class="FormField-Label">Date de naissance</label>
                <div class="FormField-TableInputContainer">
                    <div class="FormField-TableInputContainer-Cell">
                        <select  class="FormField-Input" name="jour">
                            <option value="" selected disabled>Jour</option>
                            <?php for($i=1;$i<=31;$i++){ ?>
                                <option value="<?= $i ?>"> <?= sprintf('%02d', $i) ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="FormField-TableInputContainer-Cell">
                        <select class="FormField-Input" name="mois">
                            <option value="" selected disabled>Mois</option>
                            <option value="01">Janv.</option>
                            <option value="02">Fev.</option>
                            <option value="03">Mars</option>
                            <option value="04">Avr.</option>
                            <option value="05">Mai </option>
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
                            <option value="" selected disabled>Année</option>
                            <?php for($i=1900;$i<=2017;$i++){ ?>
                                <option value="<?= $i ?>"> <?=  $i ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="FormField">
                <label class="FormField-Label" for="theme_id">Votre question</label>
                <input type="hidden" name="question_code" value="" />
                <select class="FormField-Input" name="question_code" id="theme_id">
                    <option value="" selected disabled>Thème de la question</option>
                    <?php foreach($questions as $optgroup => $options){ ?>
                        <optgroup label="<?= $optgroup ?>">
                            <?php foreach($options as $question){ ?>
                                <option value="<?= str_replace('"', "'", json_encode($question)) ?>"  <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?>><?= $question['text'] ?></option>
                            <?php } ?>
                        </optgroup>
                    <?php } ?>
                </select>
            </div>
            <div class="FormField sonprenom" style="display: none;">
                <label class="FormField-Label" for="son_prenom">Son prénom</label>
                <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
            </div>
            <div class="FormField">
                <label for="email" class="FormField-Label">E-mail</label>
                <input id="email" type="email" name="email" class="FormField-Input" required placeholder="E-mail"/>
            </div>
            <div class="FormField">
                <label for="tel" class="FormField-Label">Téléphone</label>
                <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
            </div>
            <button name="next" class="submit action-button" value="Next" type="submit" >Étape suivante</button>
            <button name="next" class="next action-button" value="Next" type="button" style="display: none">Étape suivante</button>
        </fieldset>
    </form>

        <form class="ajax">
        <fieldset style="display: none">

            <h2 class="fs-title">Horaires Consultation</h2>
            <input type="hidden" name="method" value="consultation_web" />
            <input type="hidden" name="client_id" id="client_id" value="0" />
            <div id="planning_selection" >
            <?= $vue ?>
            </div>

            <input type="button" name="previous" class="previous action-button" value="Précédent" />
            <input type="button" name="next" class="nextSecond action-button" value="Étape suivante" >
        </fieldset>
        <fieldset style="display: none">

            <h2 class="fs-title">Coordonnées bancaires</h2>
            <h3 class="fs-subtitle"></h3>
            <label for="name" class="FormField-Label">Nom du propriétaire de la carte</label>
            <div class="FormField-TableInputContainer">
                <div class="FormField-TableInputContainer-Cell">
                    <input type="text" id="carte_prenom" name="carte_prenom" class="FormField-Input" required placeholder="Prenom" />
                </div>
                <div class="FormField-TableInputContainer-Cell">
                    <input type="text" id="carte_nom" name="carte_nom" class="FormField-Input" required placeholder="Nom" />
                </div>
            </div>
            <div class="FormField">
                <label for="name" class="FormField-Label">Numéro de la carte</label>
                <input type="text" id="carte_num" name="carte_num" class="FormField-Input js-check-luhn" required placeholder="Numéro de la carte" />
            </div>
            <div class="FormField">
                <label for="name" class="FormField-Label">Expiration</label>
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
                        <?php for($i=2017;$i<=2027;$i++){ ?>
                            <option value="<?= $i ?>"> <?=  $i ?></option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            <div class="FormField">
                <label for="name" class="FormField-Label">Cryptogramme de sécurité	</label>
                <input type="text" id="crypto" name="crypto" class="FormField-Input" required placeholder="Cryptogramme de sécurité"/>
            </div>
            <input type="button" name="previous" class="previousSecond action-button" value="Précédent" />
            <input type="submit" name="submit" class="submit action-button" value="Valider" />
            <div class="secureImages">
                <img src="../images/mastercard-visa.png" alt="Mastercard &amp; Visa">
                <img src="../images/secure-verified.png" alt="Site vérifié">
                <img src="../images/secure-100pc.png" alt="100% sécurisé">
                <img src="../images/hipay-secure.png" alt="Hipay">
            </div>
        </fieldset>
    </form>
    </div>
    </div>

        <footer class="SiteFooter">
            <div class="PageWrapper">
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
                        <span class="ReassuranceList-Item-Img gift"></span>
                        <span class="ReassuranceList-Item-Txt">Étude personnalisée <br/><strong>par mail sous 24h</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img trophy"></span>
                        <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
    <!-- #### REMARKETINGS #### -->
    <?php include('include/remarketing/adwords.php');
    include('include/remarketing/analytics.php');
    include('include/remarketing/facebook.php'); ?>

        <!-- #### SCRIPTS #### -->
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/formValidator.js"></script>
    <!-- jQuery easing plugin -->
    <script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
    <!-- ### Ressources CSS à charger en dernier ### -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <!-- basic scripts -->
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_2.bootstrap.min_2.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_3.jquery.maskedinput.min_3.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_4.ace-elements.min_4.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_4.ace.min_5.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_6.jquery.dataTables.min_6.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_7.dataTables.bootstrap_7.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_8.jquery-ui-1.10.3.custom.min_8.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_8.moment_9.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_9.fuelux.wizard.min_10.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_ace-elements.min_11.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.min_12.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.translatefr_13.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datetimepicker.min_14.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-wysiwyg.min_15.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_chosen.jquery.min_16.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_jquery.dataTables.datetime_17.js"></script>
    <script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_jquery.easy-pie-chart.min_18.js"></script>
    <script src="js/rdv_web.js"></script>



    </body>
</html>
