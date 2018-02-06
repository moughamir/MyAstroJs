<?php
/**
 * nouvel-an-chinois-tchat = AFFIL BASE
 * ---------------------------------
 * Created on : abderrahime.sanadi@gmail.com
 */
session_start();
function secure_formdata($n){
    return htmlentities(strip_tags($n));
}
$get = array_map('secure_formdata', $_GET);
$_SESSION['ab_email'] = isset($get['email']) ? $get['email'] : null;
$_SESSION['ab_idkgestion'] = isset($get['id']) ? $get['id'] : null;
$_SESSION['ab_request_url'] = $_SERVER['REQUEST_URI'];

$reassurance_items = [ 'voyant-serieux', 'discretion', 'mail-24h', 'leader' ];
$_SESSION['reflexcash_transactionid'] = isset($_GET['t1']) ? $_GET['t1'] : '';
$_SESSION['reflexcash_affiliateid'] = isset($_GET['t2']) ? $_GET['t2'] : '';
$_SESSION['reflexcash_source'] = isset($_GET['t3']) ? $_GET['t3'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>2018 L’année du chien !</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

        <link rel="stylesheet" type="text/css" href="css/nouvel-an-chinois-18-tchat.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <section class="ContentBand Form Wheel">
            <!-- Logo -->
            <div class="SiteLogo">
                 <?php include('include/myastro-logo-svg.php');?>
            </div>
            <div class="PageWrapper">
                <!-- Signes Astros -->
                <div class="Wheel-Item n01 Signe-Rat-Txt"></div>
                <div class="Wheel-Item n02 Signe-Serpent-Txt"></div>
                <div class="Wheel-Item n03 Signe-Tigre-Txt"></div>
                <div class="Wheel-Item n04 Signe-Lapin-Txt"></div>
                <div class="Wheel-Item n05 Signe-Cochon-Txt"></div>
                <div class="Wheel-Item n06 Signe-Cheval-Txt"></div>
                <div class="Wheel-Item n07 Signe-Dragon-Txt"></div>
                <div class="Wheel-Item n08 Signe-Chien-Txt"></div>
                <div class="Wheel-Item n09 Signe-Singe-Txt"></div>
                <div class="Wheel-Item n10 Signe-Chevre-Txt"></div>
                <div class="Wheel-Item n11 Signe-Coq-Txt"></div>
                <div class="Wheel-Item n12 Signe-Boeuf-Txt"></div>
                <!-- Fin Signes astro -->
                <h1 class="PageTitle">2018 année du <strong>CHIEN</strong></h1>
                <article class="FormContainer Wheel-Core" id="vm-anchor">
                    <div class="FormContainer overlay Wheel-Core" id="form-overlay"></div>
                    <form id="form-container" class="ajax">
                        <header class="Wheel-Core-Title FormSign-Title">
                            <span class="FormSign-Title-c1">Quel est votre signe<br>astrologique</span>
                            <span class="FormSign-Title-c2">Chinois ?</span>
                        </header>
                        <div class="DescText-Content">
                            Les natifs de l’année du Chien sont trés courageux, talentueux, travailleurs et débrouillards. Ce sont des personnes honnêtes et loyales, elles aiment se montrer sous leur meilleur jour. Perfectionnistes, elles excellent en…
                        </div>
                        <div class="FormContainer-Fields">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="method" value="signe-astro-chinois" />
                            <input type="hidden" name="dri" value="nouvel-an-chinois-18-tel-tchat-rc" />
                            <input type="hidden" name="redirect_method" value="reload_form" />
                            <!-- ############################################### -->
                            <div class="Fields-Table">
                                <div class="Fields-Table-Row Free">
                                    <label for="name" class="FormField-Label">Mon prénom</label>
                                    <div class="FormField">
                                        <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                    </div>
                                </div>
                            </div>
                            <div class="FormField">
                                <label class="FormField-Label">Ma Date de naissance</label>
                                <div class="FormField-TableInputContainer">
                                    <div class="FormField-TableInputContainer-Cell">
                                        <select  class="FormField-Input" name="jour" required>
                                            <option selected="selected" value="">Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                            <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="FormField-TableInputContainer-Cell">
                                        <select class="FormField-Input" name="mois" required>
                                            <option value="" selected="selected">Mois</option>
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
                                            <option selected="selected" value="">Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                            <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="FormContainer-Submit" type="submit" name="valider">Découvrir</button>
                    </form>
                </article>
            </div>
        </section>

        <?php include('include/footer_reassurance.php'); ?>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script>
            $(document).ready(function(){
                $('html,body').animate({scrollTop: $('#vm-anchor').offset().top}, 1000);
            });
            $(document).on('ajax_success', function(e){
                $('body').addClass('Step2');
            });
        </script>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>

    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Oxygen|Kaushan+Script|Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />