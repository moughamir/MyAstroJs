<?php
/**
 * astro-arabe == AFFILBASE
 * ------------------------
 * Created on : 10 juin 2016 By Laurène Dourdin <2aurene@gmail.com>
 * Updated on : 22 mai 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
session_start();
function secure_formdata($n){
    return htmlentities(strip_tags($n));
}
$get = array_map('secure_formdata', $_GET);
$_SESSION['ab_email'] = isset($get['email']) ? $get['email'] : false;
$_SESSION['ab_idkgestion'] = isset($get['id']) ? $get['id'] : false;
$_SESSION['ab_request_url'] = $_SERVER['REQUEST_URI'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Votre signe astrologique arabe</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <!-- Meta Facebook -->
        <meta property="og:title" content="Découvrez ce que l’avenir vous réserve avec l’astrologie arabe" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="<?= PROTOCOL.'://'.ROOT_URL ?>/astro-arabe" />
        <meta property="og:image" content="<?= PROTOCOL.'://'.ROOT_URL ?>/images_landing/astro-arabe/fb-ban.jpg" />
        <meta property="og:description" content="Entrez dans le monde de l’astrologie arabe et ses 12 signes en forme d’armes." />
        <meta property="og:locale" content="fr_FR" />
        
        <link rel="stylesheet" type="text/css" href="css/astro-arabe.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="Background">
        <section class="ContentBand Form Wheel">
            <div class="PageWrapper">
                <!-- Logo -->
                <div class="SiteLogo"></div>
                <!-- Signes Astros -->
                <div class="Wheel-Item n01 Signe-Coutelas-Txt"></div>
                <div class="Wheel-Item n02 Signe-Couteau-Txt"></div>
                <div class="Wheel-Item n03 Signe-Poignard-Txt"></div>
                <div class="Wheel-Item n04 Signe-Lance-Txt"></div>
                <div class="Wheel-Item n05 Signe-Masse-Txt"></div>
                <div class="Wheel-Item n06 Signe-Epee-Txt"></div>
                <div class="Wheel-Item n07 Signe-Hache-Txt"></div>
                <div class="Wheel-Item n08 Signe-Massue-Txt"></div>
                <div class="Wheel-Item n09 Signe-Poignardarabe-Txt"></div>
                <div class="Wheel-Item n10 Signe-Arc-Txt"></div>
                <div class="Wheel-Item n11 Signe-Fronde-Txt"></div>
                <div class="Wheel-Item n12 Signe-Chaine-Txt"></div>
                <!-- Fin Signes astro -->
                <article class="FormContainer Wheel-Core">
                    <div class="FormContainer overlay Wheel-Core" id="form-overlay"></div>
                    <form id="form-container" class="ajax">
                        <header class="Wheel-Core-Title FormSign-Title">
                            <span class="FormSign-Title-c1">Quel est votre signe<br>astrologique</span>
                            <span class="FormSign-Title-c2">Arabe</span>
                        </header>
                        <div class="DescText-Content">
                            Les 12 armes symbolisent notre comportement face aux enjeux et aux difficultés de la vie. Chaque signe est une porte qui s’ouvre sur nous même, notre entourage, notre vie, notre passé et notre destinée.
                        </div>
                        <div class="FormContainer-Fields">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="method" value="signe-astro-arabe" />
                            <input type="hidden" name="dri" value="astro-arabe-tel" />
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
        <?php include('include/footer_reassurance.php');?>
        </div><!-- FIN .Background -->
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script>
            $(document).on('form_completed_reload', function(e){
                $('body').addClass('Step2');
            });
        </script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Oxygen|Lobster|Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />