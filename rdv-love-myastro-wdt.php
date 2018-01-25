<?php
require_once(realpath('include/tools.php'));
require_once(realpath('rdv_web/planning.php'));

$pageName = "rdv-love-myastro-wdt";
$support = "voyance";
$site = "myastro.fr";
$source = "weedoit";

$assets = 'images_landing/love-tchat';

session_start();
$_SESSION['weedoitreqid'] = isset($_GET['reqid']) ? $_GET['reqid'] : '';
?>
<?php include('include/affiliate-tracker.php');?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex, nofollow" />
        <title>Love MyAstro | Découvrez votre avenir amoureux</title>
        <link rel="icon" type="image/png" href="<?= $assets;?>/favicon.png" />
        <!-- <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">-->
        <link rel="stylesheet" href="rdv_web/css/bootstrap.min.css">
        <!--------------------assets  for displaying planning ----------------------------------------->

        <link href="rdv_web/css/datepicker_5.css" type="text/css" rel="stylesheet"/>
        <link href="rdv_web/css/bootstrap-datetimepicker.min_13.css" type="text/css"
              rel="stylesheet"/>
        <link href="rdv_web/css/additionnals_1.css" type="text/css" rel="stylesheet"/>
        <!-----------------------end assets --------------------------------------------------------------------->

        <link rel="stylesheet" href="css/rdv-love-myastro.css" type="text/css" />

        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Open+Sans:400,600" rel="stylesheet">
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
            <h1>Allez-vous être heureux en AMOUR ?</h1>
        </div>
        <main class="ContentBand">
            <div class="PageWrapper">
                <section class="section post-test">

                        <p>
                        <span class="animate animate-ltr">Quand l'amour avec un grand A va-t-il<br/>se décider à pointer le bout de son nez?<br>
                    </span>
                    <span class="animate animate-rtl">
                        <span class="highlight-primary curved">Découvrez votre avenir amoureux</span><br/>
                    </span>
                    <span class="animate animate-ltr animate-delayed-a">
                        <span class="highlight-primary">3 min</span> pour savoir<br>
                    </span>
                    <span class="animate animate-rtl animate-delayed-a">
                        <span class="highlight-secondary">et c'est gratuit !</span>
                    </span>
                    </p>
                    <div class="form">
                        <div class="helper"></div>
                        <span class="animate animate-ltr animate-delayed-b">
                            <input type="text" name="js-name" class="FormField-Input" placeholder="Votre prénom" required />
                        </span>
                        <span class="animate animate-rtl animate-delayed-b">
                            <button class="btn start">Commencer</button>
                        </span>
                    </div>
                    <div class="circlet-container">
                        <div class="circlet animate-ltr animate-delayed-c"><img src="<?= $assets?>/venus.svg"/></div>
                        <div class="circlet animate-rtl animate-delayed-c"><img src="<?= $assets?>/mars.svg"/></div>
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
                <section class="section hidden">

                    <article class="FormContainer">
                        <h3 class="form-header"> <img class="time-calendar" src="images_landing/rdv/love-tchat/time.png"><strong> Je prends mon
                            rendez-vous en ligne!</strong></h3>
                        <aside id="main_container" class="widget">
                            <aside  id="form_love">
                        <div class="main-content" >

                            <div >
                                <img class="img-euro" src="images_landing/rdv/love-tchat/euro.png">
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
                                    <fieldset >

                                        <h2 class="fs-title"> Informations personnelles!</h2>
                                        <input type="hidden" name="site" value="MyAstro"/>
                                        <input type="hidden" name="source" value="<?= $pageName;?>"/>
                                        <input type="hidden" name="method" value="client_web"/>
                                        <input type="hidden" name="support" value="rdv-web"/>
                                        <input type="hidden" name="affiliation" value="<?= $source;?>"/>
                                        <input type="hidden" name="dri" value="consultation_web"/>
                                        <input type="hidden" name="redirect_method" value="reload_form"/>
                                        <input type="hidden" name="convertir" value="1" />
                                        <input type="hidden" name="tel_needed" value="1" />
                                        <input type="hidden" name="cguv" value="1" />
                                        <input type="hidden" name="partenaires" value="1" />
                                        <input type="hidden" name="pays" value="FR"/>
                                        <input type="hidden" name="question_code" value="rdv_web"/>


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
                                                <input type="tel" id="tel" name="tel" placeholder="Mon téléphone"
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
                                        <input type="submit" name="submit" id="valider" class="submit action-button"
                                               value="Valider"/>

                                    </fieldset>
                                </form>
                             </div>
                            </div>
                            </aside>
                        </div>
                    </article>
                </section>
            </div>
        </main>
        <footer>
            <p class="SiteCopyright">
                <?php include('include/footer_copyright.php');?>
            </p>
        </footer>
        <!-- #### SCRIPTS #### -->
        <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
        <script type="text/javascript" src="js/love-tchat.js"></script>
        <script src="js/formValidator.js"></script>

        <!-- jQuery easing plugin -->
        <script src="js/jquery.easing.min.js" type="text/javascript"></script>
        <script src="js/rdv-love-myastro.js"></script>

        <!-- js scripts kgestion for displaying planning -->
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script>
        <script type="text/javascript" src="rdv_web/js/moment_9.js"></script>
        <script type="text/javascript" src="rdv_web/js/bootstrap-datepicker.min_12.js"></script>
        <script type="text/javascript"
                src="rdv_web/js/bootstrap-datepicker.translatefr_13.js"></script>
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
        <!-- #### REMARKETINGS #### -->
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>