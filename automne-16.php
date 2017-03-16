<?php
/* 
    ---------------------------------
    --   automne-16 = AFFIL BASE   --
    ---------------------------------

    Created on : 21 septembre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
$questions = array(
    'celibataire' => ['code'=>'aut16_A', 'subject'=>'sentimental', 'text'=>'Equinoxe dʼautomne : Célibataire'],
    'encouple' => ['code'=>'aut16_AP2', 'subject'=>'sentimental', 'text'=>'Equinoxe dʼautomne : En couple', 'conjoint' => true],
);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>C’est l’automne | Myastro</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        <!--
        <meta property="og:title" content="Journée mondiale du soleil" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.myastro.fr/jour-du-soleil-16" />
        <meta property="og:image" content="http://www.myastro.fr/images_landing/jour-du-soleil-16/fb-ban.jpg" />
        <meta property="og:description" content="Allez-vous tirer la carte du soleil ? Jouez et recevez votre étude personnalisée !" />
        <meta property="og:locale" content="fr_FR" />
-->
        <link rel="stylesheet" type="text/css" href="css/automne-16.css" />
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <span class="PageLogo"></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column Column-Tarot"> 
                    <header class="ContentBand-ColumnHeader">
                        <h1 class="DescText-Title">Effectuez votre tirage en cliquant sur les cartes</h1>
                    </header>
                    <article class="WidgetTarot" id="cards-container">
                        <div class="WidgetTarot-Draw">
                            <?php for($i=1;$i<=22;$i++){ ?>
                            <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                <div class="WidgetTarot-Card-Face front "></div>
                                <div class="WidgetTarot-Card-Face back"></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="WidgetTarot-Result">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                            <?php } ?>
                        </div>
                    </article>
                    <div class="js-trt-AlwaysDraw" style="display: none;">
                        <h1 class="DescText-Title">Vous venez de tirer la carte de la Fortune !</h1>
                    </div>
                    <article class="DescText">
                        <p class="DescText-Title-Legend">
                            ALINE,<br />
                            Tarologue confirmée<br />
                            répondra à toutes vos questions
                        </p>
                        <div class="DescText-Content">
                            <p>La Roue de la Fortune est le dixième arcane du tarot de Marseille, mais l’un des plus importants du jeu. Sa présence dans un tirage indique que les événements de votre vie vont prendre une nouvelle tournure et qu’une décision va se présenter à vous… Couplée à l’influence de l’automne, cette carte annonce que tout va basculer bien plus vite que vous ne le pensez…</p>
                        </div>
                    </article>
                </div>
                
                <div class="ContentBand-Column Column-Form">
                    <article class="FormContainer">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container" class="ajax">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="automne-16" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="support" value="tarot" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <input type="hidden" name="dri" value="automne-16-tel" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="voyant" value="Aline" />
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
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
                                <div class="FormField radio">
                                    <div class="FormField-TableInputContainer fixed-2-col">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <input type="radio" name="question_code" id="sit-celib" value="<?= str_replace('"', "'", json_encode($questions['celibataire']))?>" class="FormField-Input theme_id" />
                                            <label for="sit-celib" class="FormField-Label">Célibataire</label>
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <input type="radio" name="question_code" id="sit-couple" value="<?= str_replace('"', "'", json_encode($questions['encouple']))?>" class="FormField-Input theme_id" required data-need-spouse="1" />
                                            <label for="sit-couple" class="FormField-Label">En couple</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField sonprenom">
                                    <label for="son_prenom" class="FormField-Label">Son prénom</label>
                                    <input type="text" id="son_prenom" class="FormField-Input" name="conjoint">
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
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/tarot-draw.js"></script>
        <script src="js/formValidator.js"></script>
        <script>/* Configuration du tirage de tarot */
            cardsPath = 'tarot/cartes/original-petit/';
            trt_deckNbCards = 22;
            alwaysDraw = 10;
            
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
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:700" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />