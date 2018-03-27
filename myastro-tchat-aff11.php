<?php
/**
 * myastro-tchat-aff11 == AD380
 * ------------------------------
 * Created on : 04 avril 2017 By Mohamed Moughamir <hello@omnizya.com>
 */
session_start();

$pageName = "myastro-tchat-aff11";
$method = "general-suscribe";
$support = "voyance";
$site = "myastro.fr";
$source = "ad380";
$question = ['code' => 'tchatmyastro_1', 'subject' => 'evenement', 'text' => 'Campagne Tchat mini formulaire'];

$_SESSION['reflexcash_transactionid'] = isset($_GET['t1']) ? $_GET['t1'] : '';
$_SESSION['reflexcash_affiliateid'] = isset($_GET['t2']) ? $_GET['t2'] : '';
$_SESSION['reflexcash_source'] = isset($_GET['t3']) ? $_GET['t3'] : '';
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
        <title>Tchat MyAstro</title>
        <link rel="icon" type="image/png" href="logo_myastro_tchat_32x32.png" />
        <link rel="stylesheet" href="css/myastro-tchat.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Open+Sans" rel="stylesheet">
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
            <h1>Le Tchat</h1>
        </div>
        <main class="ContentBand">
            <div class="PageWrapper fullview">
                <form id="form-container" class="ajax">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="source" value="<?= $pageName;?>" />
                    <input type="hidden" name="method" value="<?= $method;?>" />
                    <input type="hidden" name="support" value="<?= $support;?>" />
                    <input type="hidden" name="site" value="<?= $site;?>" />
                    <input type="hidden" name="affiliation" value="<?= $source;?>" />
                    <input type="hidden" name="dri" value="myastro/offre-gratuite" />
                    <input type="hidden" name="dri2" value="myastro-tchat-dri" />
                    <!-- ########## autres champs pré-remplis ######### -->
                    <input type="hidden" name="cguv" value="1" />
                    <input type="hidden" name="partenaires" value="1" />
                    <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question));?>" />
                    <input type="hidden" name="optional_birthdate" value="true" />
                    <!-- ############################################### -->
                    <section class="Merci-Form">
                        <header class="Merci-Form-Header">
                            <h2><span class="cap">5 minutes</span> de Tchat <span class="cap">gratuites</span></h2>
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
                                    <input id="name" type="text" name="prenom" class="FormField-Input" placeholder="Votre prénom" value="<?= $prenom;?>" required />
                                </div>
                            </div>
                            <!--eMail-->
                            <div class="Fields-Table-Row">
                                <label for="email" class="FormField-Label hidden">Votre email</label>
                                <div class="FormField">
                                    <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" value="<?= $email;?>" required />
                                </div>
                            </div>
                            <button class="FormContainer-Submit cta-chat" type="submit" name="valider">Je Tchat !</button>
                        </div>
                    </section>
                </form>
            </div>
        </main>
        <footer>
            <p class="SiteCopyright">
                <?php include('include/footer_copyright.php');?>
            </p>
        </footer>
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>