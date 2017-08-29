<?php
require_once(realpath('include/tools.php'));
include(realpath('rdv_web/planning.php'));

$questions = array(
    'Amour' => array(
        [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
        [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
        [ 'code' => 'question_24', 'subject' => 'sentimental', 'text' => 'Vous en aimez un(e) autre', 'conjoint' => true],
        [ 'code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
    ),
    'Argent' => array(
        [ 'code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement' ],
    ),
    'Travail' => array(
        [ 'code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel' ],
        [ 'code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi' ],
    )
);

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Voyance en ligne : des médiums à votre écoute | MyAstro</title>
    <meta name="robots" content="noindex,nofollow" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/rdv_web.css" />
    <link rel="stylesheet" href="./voyance-gratuite-6_files/bootstrap.min.css">
    <?php include('include/header_inc_landing.php'); ?>

    <!--------------------assets kgestion for displaying planning ----------------------------------------->

    <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_2.font-awesome.min_2.css" type="text/css" rel="stylesheet" />
    <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_3.datepicker_5.css" type="text/css" rel="stylesheet" />
    <link href="<?= APIKGestion::BASE_URL ?>css/assets_part_1_bootstrap-datetimepicker.min_13.css" type="text/css" rel="stylesheet" />
    <link href="<?= APIKGestion::BASE_URL ?>css/main_part_1_6.additionnals_1.css" type="text/css" rel="stylesheet" />

    <!-----------------------end assets kgestion--------------------------------------------------------------------->

</head>
<body class="consultation-en-ligne">
<div class="top-nav">
    <div class="nav-content">
        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a>
    </div>
</div>
<div class="main">
    <div class="left-part">
        <div class="logo">
            <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
        </div>
        <div class="content">
            <h1>Reserver une consultation de Voyance en ligne</h1>
            <div class="txt-content">
                <p>En prenant une consultation en ligne, vous pouvez poser les questions dont les réponses comptent à des voyants reconnus et sérieux, prêts à vous aider dans votre quotidien.</p>
                <p>Que vous vous interrogiez sur demain ou l'année prochaine, nos experts dissipent vos doutes au cours d'une voyance en ligne de qualité.</p>
            </div>
        </div>

        <div class="comment-ca-marche">
            <h2>Comment ça marche ? </h2>
            <div class="cols-3 first">
                Je remplis le <br/>formulaire
            </div>
            <div class="cols-3 middle">
                Le voyant me rappelle <br/>à l'horaire choisie
            </div>
            <div class="cols-3 last">
                Je reçois une <br/>réponse par mail
            </div>
        </div>
    </div>


    <div class="right-part">

        <div class="pop">
            voyants <br/><strong>sérieux</strong> & <br/><strong>reconnus</strong>
        </div>

        <aside id="main_container" class="widget">
            <!-- multistep form -->

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
                    <input type="hidden" name="source" value="consultation-en-ligne-2" />
                    <input type="hidden" name="method" value="client_web" />
                    <input type="hidden" name="support" value="rdv-web" />
                    <input type="hidden" name="affiliation" value="Facebook Adds" />
                    <input type="hidden" name="dri" value="consultation_web" />
                    <input type="hidden" name="redirect_method" value="reload_form" />

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
                                    <option selected="selected" value="">Année</option>
                                    <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
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

                    <div class="FormField">
                        <div class="FormField-TableInputContainer-Cell">

                            <label for="pays" class="FormField-Label">Votre pays </label>
                        </div>

                        <div class="FormField-TableInputContainer-Cell">

                            <select class="FormField-Input" name="pays" id="pays" required="">
                                <option value="" selected="selected">Votre Pays</option>
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
                            </select>
                        </div>
                    </div>
                    <div class="cguv">
                        <label class="checkbox">
                            <input type="checkbox" name="cguv" required checked>J'ai lu et j'accepte les conditions générales.
                        </label>
                        <label class="checkbox">
                            <input type="checkbox" name="partenaires"  checked> J'accepte de recevoir les offres des partenaires.
                        </label>
                    </div>
                    <button name="next" class="submit action-button" value="Next" type="submit" >Étape suivante</button>
                    <button name="next" class="next action-button" value="Next" type="button" style="display: none">Étape suivante</button>
                </fieldset>
            </form>

            <form class="ajax">
                <fieldset style="display: none" class="planning">

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
</aside>

<div class="clear"></div>
</div>
</div>
<div class="clear"></div>
</div>


<div class="subfooter">
    <ul>
        <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
        <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
        <li class="third">Étude personnalisée <br/><strong>par mail sous 24h</strong></li>
        <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
        <div class="clear"></div>
    </ul>
    <div class="clear"></div>
</div>

<div class="footer">
    <?php include('include/footer_copyright.php'); ?>
</div>

<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
<!-- New Remarketing tags -->

<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1024378253;
    var google_conversion_label = "ipnICMWfg2EQjYu76AM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
    </div>
</noscript>

<!-- #### SCRIPTS #### -->
<script src="js/jquery-1.11.js"></script>
<script src="js/formValidator.js"></script>
<!-- jQuery easing plugin -->
<script src="js/jquery.easing.min.js" type="text/javascript"></script>
<script src="js/rdv_web.js"></script>

<!-- js scripts kgestion for displaying planning -->
<script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_8.moment_9.js"></script>
<script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.min_12.js"></script>
<script type="text/javascript" src="<?= APIKGestion::BASE_URL ?>js/main_part_1_bootstrap-datepicker.translatefr_13.js"></script>

</body>
</html>


