<?php
/*
    ----------------------------------
    --   tarot-direct-rdv-a = ADWORDS   --
    ----------------------------------

    Created on : 25 December 2017
    Author     : Abderrahime SANADI <abdo.sanadi@gmail.com>
*/
// Paramètres design
include('include/visual_modules/tarot-direct/design-load.php');
require_once(realpath('include/tools.php'));
require_once(realpath('rdv_web/planning.php'));

// Paramètre formulaire
include('include/questions/tarot-direct.php');
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Tarot Direct - Interprétation en live !</title>

    <meta name="robots" content="noindex,nofollow"/>

    <link rel="icon" type="image/png" href="images_landing/tarot-direct/favicon.png"/>
   <!-- <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">-->
    <link rel="stylesheet" href="rdv_web/css/bootstrap.min.css">
    <!--------------------assets  for displaying planning ----------------------------------------->

    <link href="rdv_web/css/datepicker_5.css" type="text/css" rel="stylesheet"/>
    <link href="rdv_web/css/bootstrap-datetimepicker.min_13.css" type="text/css"
          rel="stylesheet"/>
    <link href="rdv_web/css/additionnals_1.css" type="text/css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/tarot-direct-rdv.css"/>


    <!-----------------------end assets --------------------------------------------------------------------->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="consultation-en-ligne">
<header class="ContentBand ThreeCols SiteHeader">
    <div class="PageWrapper ContentBand-Table">
        <div class="ContentBand-Column SiteHeader-Slogan1">
            Tirage de tarot gratuit<br>
            avec interprétation en live !
        </div>
        <div class="ContentBand-Column">
            <div class="SiteHeader-Logo"></div>
        </div>
        <div class="ContentBand-Column SiteHeader-Slogan2">
            Votre tirage <strong>en direct</strong><br>
            en 2 minutes chrono !
        </div>
    </div>
</header>
<form id="form-container" class="ajax">
    <!-- -------------------------------------- CHOIX DU VOYANT -------------------------------------- -->
    <section class="ContentBand TwoCols PsychicChoice Principal" id="scn-psychic">
        <header class="ContentBand-ColumnHeader Title">- Choisissez votre <strong>voyante</strong> -</header>
        <div class="PageWrapper">
            <?php include('include/visual_modules/tarot-direct/psychic-choice.php'); ?>
        </div>
    </section>
    <!-- -------------------------------------- CHOIX DE LA QUESTION -------------------------------------- -->
    <section class="ContentBand ThemeChoice Principal" id="scn-theme" style="display:none">
        <header class="ContentBand-ColumnHeader Title">- Choisissez votre <strong>Thème</strong> -</header>
        <div class="PageWrapper">
            <article class="ThemeChoice-List">
                <?php foreach ($questions as $optgroup => $options) { ?>
                    <?php foreach ($options as $theme => $question) { ?>
                        <input type="radio" name="question_code"
                               value="<?= str_replace('"', "'", json_encode($question)) ?>" id="theme_<?= $theme ?>"
                               class="ThemeChoice-ListItem-Input theme_id"
                               required <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : '' ?> />
                        <label for="theme_<?= $theme ?>" class="ThemeChoice-ListItem">
                            <span class="ThemeChoice-ListItem-Icon <?= $optgroup ?>"></span>
                            <span class="ThemeChoice-ListItem-Label"><?= $question['text'] ?></span>
                        </label>
                    <?php } ?>
                <?php } ?>
            </article>
        </div>
    </section>
    <!-- -------------------------------------- FORMULAIRE -------------------------------------- -->
    <article class="ContentBand Form Principal" id="scn-form" style="display:none">
        <header class="ContentBand-ColumnHeader Title"><img class="time-calendar" src="images_landing/rdv/tarot/time.png"> - Je prends mon
            rendez-vous <strong>en ligne!</strong> -
        </header>
        <div class="PageWrapper ContentBand-Table">
            <article class="FormContainer">
                <div class="Pop Pop-Voyant getFormValue" data-ref-form="voyant" data-method="class"><span
                            class="Pop-Voyant-Photo"></span></div>
                <aside id="main_container" class="widget">
                    <div class="content" id="form_tarot">
                        <div class="main-content" >
                            <div >
                                <img class="img-euro" src="images_landing/rdv/tarot/euro.png">
                                <ul class="icon-liste">
                                    <li class="icone-cray">
                                        <span>Je remplis le formulaire</span>
                                    </li>
                                    <li class="icone-hand">
                                        <span>Je choisis mon RDV</span>
                                    </li>
                                    <li class="icone-screen">
                                        <span>Je réserve en ligne</span>
                                    </li>
                                    <li class="icone-payment">
                                        <span> Le paiement est sécurisé</span>
                                    </li>
                                </ul>
                            </div>
                            <div >
                                <form class="ajax" >
                                    <fieldset style="margin-top: 40px;">

                                        <h2 class="fs-title"> Informations personnelles!</h2>
                                        <input type="hidden" name="site" value="MyAstro"/>
                                        <input type="hidden" name="source" value="tarot-direct-rdv-a"/>
                                        <input type="hidden" name="method" value="client_web"/>
                                        <input type="hidden" name="support" value="rdv-web"/>
                                        <input type="hidden" name="affiliation" value="Adwords"/>
                                        <input type="hidden" name="dri" value="consultation_web"/>
                                        <input type="hidden" name="redirect_method" value="reload_form"/>
                                        <input type="hidden" name="cguv" value="1"/>
                                        <input type="hidden" name="convertir" value="1" />
                                        <input type="hidden" name="tel_needed" value="1" />
                                        <input type="hidden" name="partenaires" value="1" />
                                        <input type="hidden" name="pays" value="FR"/>
                                        <input type="hidden" name="question_code" value=""/>
                                        <input type="hidden" name="gclid" value="<?= $gclid;?>" />



                                        <div class="FormField radio">
                                            <div class="FormField-TableInputContainer fixed-2-col gender">
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <label for="sexe-f" class="FormField-Label "><span
                                                                class="ico-woman fa fa-venus"></span>
                                                        une femme</label>
                                                    <input type="radio" name="sexe" value="femme" id="sexe-f"
                                                           class="FormField-Input"/>
                                                </div>
                                                <div class="FormField-TableInputContainer-Cell">
                                                    <label for="sexe-h" class="FormField-Label"><span
                                                                class="ico-man fa fa-mars"></span>
                                                        un homme</label>
                                                    <input type="radio" name="sexe" value="homme" id="sexe-h"
                                                           class="FormField-Input"/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="FormField FormField-mg">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="name" class="FormField-Label">Prénom</label>
                                                <input type="text" id="name" name="prenom" class="FormField-Input"
                                                       required
                                                       placeholder="Prénom"/>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label class="FormField-Label">Date de naissance</label>
                                                <div class="FormField-TableInputContainer">
                                                    <div class="FormField-TableInputContainer-Cell">
                                                        <select class="FormField-Input" name="jour">
                                                            <option value="" selected disabled></option>
                                                            <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                                <option value="<?= $i ?>"> <?= sprintf('%02d',
                                                                        $i) ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="FormField-TableInputContainer-Cell">
                                                        <select class="FormField-Input" name="mois">
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
                                                        </select>
                                                    </div>
                                                    <div class="FormField-TableInputContainer-Cell">
                                                        <select class="FormField-Input" name="annee">
                                                            <option selected="selected" value=""></option>
                                                            <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                                                <option value="<?= $i ?>"><?= $i ?></option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="FormField FormField-mg">
                                            <div class="FormField-TableInputContainer-Cell">

                                                <label for="email" class="FormField-Label">E-mail</label>
                                                <input id="email" type="email" name="email" class="FormField-Input"
                                                       required
                                                       placeholder="E-mail"/>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="tel" class="FormField-Label">Téléphone</label>
                                                <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone"
                                                       class="FormField-Input"
                                                       required/>
                                            </div>
                                        </div>
                                        <button name="next" class="submit action-button" value="Next" type="submit">
                                            Suivant
                                        </button>
                                        <button name="next" class="next action-button" value="Next" type="button"
                                                style="display: none">
                                            Suivant
                                        </button>

                                    </fieldset>
                                </form>
                                <form class="ajax" id="rdv_form">
                                    <fieldset style="display: none" class="planning" id="planning">
                                        <h2 class="fs-title">Je choisis mon RDV</h2>
                                        <input type="hidden" name="method" value="consultation_web"/>
                                        <input type="hidden" name="client_id" id="client_id" value="0"/>
                                        <div id="planning_selection">
                                            <?= $vue ?>
                                        </div>

                                        <input type="button" name="previous" class="previous action-button"
                                               value="Précédent"/>
                                        <input type="button" name="next" class="nextSecond action-button"
                                               value="Suivant">
                                    </fieldset>
                                    <fieldset id="form_cb" style="display: none">
                                        <strong class="euro-min">1€ les 10 premières minutes</strong>
                                        <h2 class="fs-title">Coordonnées bancaires</h2>
                                        <h3 class="fs-subtitle"></h3>
                                        <label for="name" class="FormField-Label carte_name">Nom du propriétaire de la
                                            carte</label>
                                        <div class="FormField-TableInputContainer FormField-mg">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <input type="text" id="carte_prenom" name="carte_prenom"
                                                       class="FormField-Input" required
                                                       placeholder="Prenom"/>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <input type="text" id="carte_nom" name="carte_nom"
                                                       class="FormField-Input"
                                                       required
                                                       placeholder="Nom"/>
                                            </div>
                                        </div>
                                        <div class="FormField-TableInputContainer FormField-mg">
                                            <div class="FormField-TableInputContainer-Cell">

                                                <label for="name" class="FormField-Label">Numéro de la carte</label>
                                                <input type="text" id="carte_num" name="carte_num"
                                                       class="FormField-Input js-check-luhn"
                                                       required placeholder="Numéro de la carte"/>
                                            </div>
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
                                                            <option value="<?= $i ?>"> <?= $i ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="FormField-TableInputContainer FormField-mg ">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="name" class="FormField-Label">Cryptogramme de
                                                    sécurité </label>
                                                <input type="text" id="crypto" name="crypto" class="FormField-Input"
                                                       required/>
                                                <img class="img-crypto" src="../images_landing/rdv/crypto.png">

                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="name" class="FormField-Label"> &nbsp;&nbsp;</label>

                                                <div class="secureImages">
                                                    <img src="../images/mastercard-visa.png"
                                                         alt="Mastercard &amp; Visa">
                                                    <img src="../images/hipay-secure.png" alt="Hipay">
                                                </div>
                                            </div>
                                        </div>
                                        <input type="button" name="previous" class="previousSecond action-button"
                                               value="Précédent"/>
                                        <input type="button" name="submit" id="valider" class="submit action-button"
                                               value="Valider"/>

                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
        </div>

        </aside>
    </article>
    </div>
    </div>

    </section>
</form>
<!-- -------------------------------------- TIRAGE DU TAROT -------------------------------------- -->
<div class="WidgetTarot">
    <section class="ContentBand Tarot Arrowed" id="scn-tarot-draw">
        <header class="ContentBand-ColumnHeader Title">- Tirez <strong>5 cartes</strong> -</header>
        <div class="PageWrapper ContentBand-Table">
            <div id="cards-container" class="ContentBand-Column">
                <div class="WidgetTarot-Draw">
                    <?php for ($i = 1; $i <= 20; $i++) { ?>
                        <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                            <div class="WidgetTarot-Card-Face front "></div>
                            <div class="WidgetTarot-Card-Face back"></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <section class="ContentBand Tarot-Result Arrowed" id="scn-tarot-result">
        <div class="PageWrapper ContentBand-Table">
            <div id="cards-result" class="ContentBand-Column">
                <div class="WidgetTarot-Result">
                    <div class="WidgetTarot-ResultMsg">Votre tirage transmis à <span class="getFormValue"
                                                                                     data-method="html"
                                                                                     data-ref-form="voyant"></span>
                    </div>
                    <div class="WidgetTarot-Result">
                        <?php for ($i = 1; $i <= 5; $i++) { ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

<!-- #### SCRIPTS #### -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/tarot-draw.js"></script>
<script>/* Configuration du tirage de tarot */
    cardsPath = '<?= $cards_dir;?>';
    trt_deckNbCards = 20;
    trt_forceDrawFirst = false;
    trt_scrollOnComplete = false;
    trt_minSize = 600;
</script>
<script src="js/formValidator.js"></script>
<script src="js/tarot-direct-wizard.js"></script>

<!-- jQuery easing plugin -->
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/tarot-direct-rdv.js"></script>

<!-- js scripts kgestion for displaying planning -->
<script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
<script type="text/javascript" src="rdv_web/js/moment_9.js"></script>
<script type="text/javascript" src="rdv_web/js/bootstrap-datepicker.min_12.js"></script>
<script type="text/javascript"
        src="rdv_web/js/bootstrap-datepicker.translatefr_13.js"></script>
<!-- #### REMARKETINGS #### -->
<?php include('include/remarketing/adwords.php');
include('include/remarketing/analytics.php');
include('include/remarketing/facebook.php'); ?>
</body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css"/>
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>