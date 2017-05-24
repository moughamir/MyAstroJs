<?php
/**
 * jour-du-soleil-17 == AFFIL BASE
 * -------------------------------
 * Created on : 26 avril 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
$form = 'jour-du-soleil-17';
include('include/init-affilbase.php');
$url = $form;
$method = 'general-suscribe';
$website = 'myastro.fr';
$dri = 'jour-du-soleil-17-tel';
$question = ['code'=>'jds17_question', 'subject'=>'evenement', 'text'=>"Jour du soleil 2017"];
$assets = 'images_landing/jour-du-soleil-17/';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Journée Mondiale du Soleil</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="<?= $assets;?>favicon.png" />

        <link rel="stylesheet" type="text/css" href="css/jour-du-soleil-17.css" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <div class="SiteLogo"></div>
                <div class="PageLogo"></div>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column Column-Tarot"> 
                    <header class="ContentBand-ColumnHeader">
                        <h1 class="DescText-Title">Effectuez votre tirage en cliquant sur les cartes</h1>
                    </header>
                    <article class="WidgetTarot">
                        <div class="WidgetTarot-Draw" id="cards-container">
                            <?php for($i=1;$i<=22;$i++){ ?>
                            <div class="WidgetTarot-Card notFlipped" data-card="<?= $i;?>">
                                <div class="WidgetTarot-Card-Face front "></div>
                                <div class="WidgetTarot-Card-Face back"></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="WidgetTarot-Result" id="cards-result">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i;?>"></div>
                            <?php } ?>
                        </div>
                        <div class="js-trt-AlwaysDraw" style="display: none;">
                            <h1 class="DescText-DrawSuccess">Vous venez de tirer la carte du Soleil !</h1>
                        </div>
                    </article>
                    <article class="DescText">
                        <p class="DescText-Title-Legend">
                            ALINE,<br />
                            Consultante en tarologie solaire<br />
                            répondra à toutes vos questions
                        </p>
                        <div class="DescText-Content">
                            <p>Astre magnifique et rayonnant autour duquel tourne notre système, le soleil est un élément considérable dans l’Art de la cartomancie et de la voyance. 19ème arcane du célèbre tarot de Marseille, la carte du soleil est la plus positive de tout le jeu.</p>
                            <p>Entre bonheur, joie, succès et réussite, la lame du soleil change le visage de n’importe lequel des tirages du tarot. Retrouver la carte du soleil dans son tirage est synonyme de signe positif et d’un avenir radieux.</p>
                            <p>Laissez-vous tenter par un tirage du tarot, il pourrait vous réserver bien des belles surprises.</p>
                        </div>
                    </article>
                </div>
                
                <div class="ContentBand-Column Column-Form">
                    <article class="FormContainer">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h2 class="FormContainer-Header">Je remplis vite le formulaire <br class="hidebloc"/> et je reçois mon étude personnalisée !</h2>
                        <div class="FormContainer-Fields">
                            <form id="form-container" class="ajax">
                                <p class="alert alert-danger" style="display: none"></p>
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $url;?>" />
                                <input type="hidden" name="method" value="<?= $method;?>" />
                                <input type="hidden" name="site" value="<?= $website;?>" />
                                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                                <input type="hidden" name="dri" value="<?= $dri;?>" />
                                <input type="hidden" name="support" value="tarot" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
                                <!-- ############################################### -->
                                <div class="FormField">
                                    <label for="name" class="FormField-Label">Prénom</label>
                                    <input type="text" id="name" name="prenom" class="FormField-Input" required />
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
                                            <select  class="FormField-Input" name="jour" required>
                                                <option selected="selected" value="">Jour</option>
                                                <?php for($i=1;$i<=31;$i++){ ?>
                                                <option value="<?= $i;?>"><?= sprintf('%02d', $i);?></option>
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
                                                <option value="<?= $i;?>"><?= $i;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField">
                                    <label for="email" class="FormField-Label">E-mail</label>
                                    <input id="email" type="email" name="email" class="FormField-Input" required />
                                    <span class="FormField-InfoPop">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                <button class="FormContainer-Submit" type="submit" name="valider">Je veux savoir</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
        <?php include('include/footer_reassurance.php');?>
                
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/tarot-draw.js"></script>
        <script src="js/formValidator.js"></script>
        <script>/* Configuration du tirage de tarot */
            cardsPath = 'tarot/cartes/jour-du-soleil-17/';
            alwaysDraw = 7;
            $(document).ready(function(){
                $(document).on('trt_alwaysDraw', function(e){
                    $('.js-trt-AlwaysDraw').slideDown();
                });
            });
        </script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300|Ubuntu+Condensed|Courgette" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />