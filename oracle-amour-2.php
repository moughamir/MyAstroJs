<?php
/* 
    -------------------------------------------
    --   oracle-amour-2 = REFLEX CACHE   --
    -------------------------------------------

    Created on : 25 mai 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
$form = 'oracle-amour-2';
include('include/init-affilbase.php');
$cards_dir = 'tarot/cartes/cartes-oracle-amour/';
$button ="Je veux savoir";
$questions = array(
    'celibataire' => ['code'=>'oa_question_1', 'subject'=>'sentimental', 'text'=>'Oracle de lʼamour : Célibataire'],
    'encouple' => ['code'=>'oa_question_2', 'subject'=>'sentimental', 'text'=>'Oracle de lʼamour : En couple', 'conjoint' => true],
);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>My Astro - Que va vous révéler l’Oracle de l’amour ?</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />

        <link rel="stylesheet" type="text/css" href="css/oracle-amour-2-v2.min.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- pour la retro-compatibilité de l'effet "poker" -->
        <script src="js/modernizr.custom.79639.js"></script>

    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <h1 class="PageLogo"><span>Oracle de l’amour</span></h1>
            </div>
        </header>

        <!-- -------------------------------------- TEXTES STEP1  -------------------------------------- -->
        <section class=" PageWrapper600 step1">
            <header class="ContentBand-ColumnHeader titrage">
                <h2>Que va vous révéler l’Oracle de l’amour ?</h2>
            </header>
            <article class="DescText">
                <div class="DescText-Content">
                    <p>Les messages de l’Oracle résonnent comme des conseils et des indications à suivre pour marcher vers une vie amoureuse épanouie et heureuse. Pensez à ce qui vous tient à cœur, et tirez vos cinq cartes. Chacune d’entre elles est un pas de plus vers la vie sentimentale que vous désirez.</p>
                </div>
            </article>
        </section>

        <!-- -------------------------------------- TIRAGE DU TAROT -------------------------------------- -->
        <section class="WidgetTarot" id="cards-container">
            <header id="titreTarot" class="WidgetTarotHeader titrage"><h2>Tirez les cartes</h2></header>
                <div id="baraja-el" class="WidgetTarot-Draw oracleTarot baraja-container step1">
                    <?php for($i=1;$i<=22;$i++){ ?>
                    <div class="WidgetTarot-Card notFlipped baraja-card" data-card="<?= $i ?>">
                        <div class="WidgetTarot-Card-Face front "></div>
                        <div class="WidgetTarot-Card-Face back"></div>
                    </div>
                    <?php } ?>
                </div>
            <div class="WidgetTarot-Result" id="cards-result">
                <?php for($i=1;$i<=5;$i++){ ?>
                <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                <?php } ?>
            </div>
        </section>

        <!-- -------------------------------------- FORMULAIRE -------------------------------------- -->
        <div class="overlay" id="form-overlay"></div>

        <section class="ContentBand Form Principal PageWrapper600 step2" id="form-container" style="display:none">
            <article class="FormContainer">
                <div class="FormContainer overlay" id="form-overlay"></div>
                <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre interprétation&nbsp;:</h2>
                <div class="FormContainer-Fields">
                    <p class="alert alert-danger" style="display: none"></p>
                    <form id="form1" class="ajax">
                        <!-- ########## identification formulaire ########## -->
                        <input type="hidden" name="source" value="<?= $url;?>" />
                        <input type="hidden" name="regurl" value="<?= $form;?>" />
                        <input type="hidden" name="method" value="general-suscribe" />
                        <input type="hidden" name="support" value="tarot" />
                        <input type="hidden" name="site" value="myastro.fr" />
                        <input type="hidden" name="affiliation" value="<?= $source;?>" />
                        <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                        <input type="hidden" name="dri" value="oracle-amour-2-tel" />
                        <!-- ########## autres champs pré-remplis ######### -->
                        <input type="hidden" name="cguv" value="1" />
                        <input type="hidden" name="partenaires" value="1" />
                        <!-- ############################################### -->
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
                            <label for="name" class="FormField-Label">Prénom</label>
                            <input type="text" placeholder="Votre prénom" id="name" name="prenom" class="FormField-Input" required />
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
                            <label class="FormField-Label">Votre situation</label>
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
                            <input type="text" placeholder="Son prénom" id="son_prenom" class="FormField-Input" name="conjoint" />
                        </div>
                        
                        <div class="FormField">
                            <label for="email" class="FormField-Label">E-mail</label>
                            <input id="email" placeholder="Votre email" type="email" name="email" class="FormField-Input" required />
                            <span class="FormField-Info">Une étude personnalisée vous sera envoyée à cette adresse</span>
                        </div>

                        <button class="FormContainer-Submit" type="submit" name="valider"><?= $button ?></button>
                    </form>
                </div>
            </article>
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
        <script src="js/jquery.baraja.js"></script>
        <script>
            $(function() {
                //largeur de l'écran
                var screenWidth = $( window ).width();
                // l'animation "poker" du jeu de carte ne fonctionne
                // que pour les écrans supérieurs à 680px
                if(screenWidth > 730){
                    var $el = $( '#baraja-el' ),
                    baraja = $el.baraja();
                    baraja.fan( {
                        speed : 500,
                        easing : 'ease-in-out',
                        range : -110,
                        direction : 'right',
                        origin : { x : 50, y : 200 },
                        //origin : { minX : 0, maxX : 0, y : 200 },
                        center : true,
                    });
                }
            });
        </script>
        <script src="js/oracle-amour-2.js"></script>     
        <script>/* Configuration du tirage de tarot */
            cardsPath = '<?= $cards_dir; ?>';
            alwaysDraw = [4, 5, 13, 14, 19];
        </script>
        <script src="js/formValidator.js"></script>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300|Ubuntu+Condensed|Arya|Parisienne" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />