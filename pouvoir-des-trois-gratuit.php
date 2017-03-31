<?php
/**
 * pouvoir-des-trois == AFFILBASE
 * 
 * Created on : Feb 13th, 2017
 * Author     : Mohamed Moughamir <hello@omnizya.com>
 */
session_start();
$assets = 'images_landing/pouvoir-des-trois';
$pageName = "pouvoir-des-trois-gratuit";
$method = "general-suscribe";
$support = "voyance";
$site = "myastro.fr";
$seo = "affilbase";
$question = ['code' => 'question1_pdt', 'subject' => 'evenement', 'text' => 'Campagne Tchat Pouvoir des trois'];
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="">
        <meta name="robots" content="noindex, nofollow" />
        <meta property="fb:app_id" content="1276526482364681" />
        <meta property="og:type" content="website" />
        <meta property="og:title" content="Pouvoir des Trois" />
        <meta property="og:url" content="http://<?= $site ?>/pouvoir-des-trois" />
        <meta property="og:image" content="http://<?= $site . '/' . $assets ?>/cover.jpg" />
        <meta property="og:image:type" content="image/jpeg" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="675" />
        <meta property="og:description" content="Prenez en main votre Avenir, Grâce au Pouvoir des trois et de ces support divinatoires ancestraux: le pendule, la boule de cristal, et le tarot; nous allons pouvoir répondre à vos intérrogations, grace à ce petit teste."/>
        <meta property="og:locale" content="fr_FR" />
        <title>Pouvoir Des Trois | MyAstro</title>
        <link rel="icon" type="image/png" href="<?= $assets ?>/favicon.png" />
        <link rel="stylesheet" href="css/pouvoir-des-trois.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans" rel="stylesheet">
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
            </div>
            <div class="PageWrapper fullview">
                
                <form id="form-container" class="ajax">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="source" value="<?= $pageName; ?>" />
                    <input type="hidden" name="method" value="<?= $method; ?>" />
                    <input type="hidden" name="support" value="<?= $support; ?>" />
                    <input type="hidden" name="site" value="<?= $site; ?>" />
                    <input type="hidden" name="affiliation" value="<?= $seo; ?>" />
                    <input type="hidden" name="dri" value="pouvoir-des-trois/offre-gratuite" />
                    <input type="hidden" name="optional_birthdate" value="true" />
                    <!-- ########## autres champs pré-remplis ######### -->
                    <input type="hidden" name="cguv" value="1" />
                    <input type="hidden" name="partenaires" value="1" />
                    <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
                    <!-- ############################################### -->
                    <section class="Merci-From">
                        <header class="Merci-From--header">
                            <h2>5 <span class="cap">minutes</span> de Tchat <span class="cap">gratuites</span></h2>
                        </header>
                        <div class="FormContainer">
                            <!---->
                            <div class="FormField radio">
                                <div class="FormField-TableInputContainer fixed-2-col gender">
                                    <div class="FormField-TableInputContainer-Cell">
                                        <label for="sexe-f" class="FormField-Label "><span class="ico ico-woman fa fa-venus"></span>Femme</label>
                                        <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                    </div>
                                    <div class="FormField-TableInputContainer-Cell">
                                        <label for="sexe-h" class="FormField-Label"><span class="ico ico-man fa fa-mars"></span>Homme</label>
                                        <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                    </div>
                                </div>
                            </div>
                            <!--Prénom-->
                            <div class="Fields-Table-Row">
                                <label for="name" class="FormField-Label hidden">Votre prénom</label>
                                <div class="FormField">
                                    <input id="name" type="text" name="prenom" class="FormField-Input" value="<?= $prenom ?>" placeholder="Votre prénom" required />
                                </div>
                            </div>
                            <!--eMail-->
                            <div class="Fields-Table-Row">
                                <label for="email" class="FormField-Label hidden">Votre email</label>
                                <div class="FormField">
                                    <input id="email" type="email" name="email" class="FormField-Input" value="<?= $email ?>" placeholder="Votre Email" required />
                                </div>
                            </div>
                            <button class="FormContainer-Submit cta-chat" type="submit" name="valider">Je tchat</button>
                        </div>
                    </section>
                </form>
            </div>
        </main>
        <footer>
            <p class="SiteCopyright">
                <?php include('include/footer_copyright.php'); ?>
            </p>
            <!-- #### SCRIPTS #### -->
            <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
            <script src="js/formValidator.js"></script>
            <!-- #### REMARKETINGS #### -->
            <?php
            include('include/remarketing/adwords.php');
            include('include/remarketing/analytics.php');
            include('include/remarketing/facebook.php');
            ?>
        </footer>
    </body>
</html>
