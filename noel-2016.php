<?php

$cards_dir = 'tarot/cartes/original-grand/';
$reassurance_items = [ 'voyant-serieux', 'discretion', 'interpretation', 'leader', 'paiement-secure' ];
$ext = '.png';

// Form Vars
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot de Noël par MyAstro</title>
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" type="image/x-icon" href="images_landing/dri-noel-2016/favicon.png">
        <link rel="stylesheet" href="css/noel-2016.css">
    </head>
    <body itemscope itemtype="http://schema.org/WebPage">
<!-- -------------------------- MODALE FORMULAIRE -------------------------- --
        <div class="FormContainer overlay" id="form-overlay"></div>
        <article class="modal hidden">
            <div class="modal-container">
                <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
                <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
                <button class="btn modal-btn">Fermer</button>
            </div>
        </article>
<!-- End Of Modal-->
        <section class="PageWrapper">
            <header class="PageHeader">
                <div class="PageLogo">
                    <?php include('include/myastro-logo-svg.php');?>
                </div>
                <div class="PageTitle"></div>
            </header>
            <article class="Container">
<!-- ------------------------------- ACCUEIL ------------------------------- --
                <section class="Home" id="scn-home">
                    <button class="Button Home-Button">Je commence</button>
                    <canvas id="snow" class="Home-SnowLayout"></canvas>
                </section>
<!-- -------------------------------- TEXTE -------------------------------- --
                <section class="Text" id="scn-text">
                    <p class="Text-Title">Noël…</p>
                    <p class="Text-Subtitle">La fête, des cadeaux, la convivialité…</p>
                    <p class="Text-Content">Noël, c’est surtout le mois de Décembre, le dernier mois de 2016, le mois qui clôture votre année ! Plus que quelques jours, quelques heures, une ultime occasion qui s’offre à vous pour donner à 2016 la saveur que vous souhaitez.</p>
                    <p class="Text-Content Italic">Que vont vous réserver les derniers instants de 2016 ? Que va-t- il se passer pour vous en cette fin d’année ? Comment bien débuter 2017 ? Que faire pour que cette nouvelle année soit meilleure que la précédente ?</p>
                    <p class="Text-Subtitle">Profitez du <strong>Tarot de Noël</strong> pour avoir toutes vos réponses, tirez les cartes ci-dessous :</p>
                    <button class="Button">Je tire les cartes</button>
                </section>
<!-- ------------------------------- TIRAGE -------------------------------- -->
                <section class="Tarot" id="scn-tarot" >
                    <header class="ContentBand-ColumnHeader Title">Mélangez les cartes</header>
                    <article class="WidgetTarot toShuffle" id="cards-container">
                        <div id="scn-tarot-draw">
                            <div class="WidgetTarot-Draw">
                                <?php for($i=1;$i<=12;$i++){ ?>
                                <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                    <div class="WidgetTarot-Card-Face front "></div>
                                    <div class="WidgetTarot-Card-Face back"></div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="scn-tarot-result">
                            <div class="WidgetTarot-Result">
                                <?php for($i=1;$i<=5;$i++){ ?>
                                <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                                <?php } ?>
                            </div>
                        </div>
                        <button class="Button Shuffle-Button" id="cards-shuffle">Mélanger</button>
                    </article>
                </section>
                <!--section class="drawCards hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                    <h2 class="section-title">Mélangez les cartes</h2>
                </header>
                <article class="Cards-Container">
                    <ul class="cards">
                        <?php
                        $deck = range(1, 20);
                        shuffle($deck);
                        foreach ($deck as $card) {
                            echo('<li class="card card-idle" data-card=' . $card . '>');
                            echo('<div class="card-back front"></div>');
                            echo('<div class="card-face back"><img src="' . $cards_dir . $card . $ext . '" alt=""></div>');
                            echo('</li>');
                        }
                        ?>

                    </ul>
                    <article class="Cards-Container">
                        <ul class="cards result-cards">
                            <!-- Picked Card gonna be here--
                        </ul>
                    </article>
                </article>
                <button class="btn cta-spread">Mélanger</button>
            </section>
            <!--section class="result hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <article class="Cards-Container">
                    <ul class="cards result-cards">
                        <!-- Picked Card gonna be here--
                    </ul>
                </article>
                <button class="btn cta-read">Voir mon interprétation</button>
            </section>
            <section class="signUp hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <ul class="result-cards-mini">

                </ul>
                <article class="FormContainer">
                    <form action="inc/process.php" method="post" class="Primary-Form ajax" id="form-container">

                        <div class="FormContainer-Fields Fields-Table">

                            <p class="alert alert-danger" style="display: none"></p>
                            <!-- ########## identification formulaire ########## --
                            <input type="hidden" name="source" value="tarot-dri-noel-2016"/>
                            <input type="hidden" name="method" value="general-suscribe"/>
                            <input type="hidden" name="support" value="tarot"/>
                            <input type="hidden" name="site" value="myastro.fr"/>
                            <input type="hidden" name="affiliation" value="adwords"/>
                            <input type="hidden" name="dri" value="dri-noel-2016-merci"/>
                            <!-- ########## autres champs pré-remplis ########## --
                            <input type="hidden" name="tel_needed" value="1"/>
                            <input type="hidden" name="gclid"
                                   value="<?php isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="cguv" value="1"/>
                            <input type="hidden" name="partenaires" value="1"/>
                            <!-- ############################################### --
                            <div class="hidden cardsPicked"></div>
                            <div class="Fields-Table-Row">
                                <label for="name" class="FormField-Label">Votre prénom</label>
                                <div class="FormField input-name">
                                    <input type="text" id="name" name="prenom" class="FormField-Input"
                                           value="<?php $prenom ?>" placeholder="Mon prénom" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <label for="email" class="FormField-Label">Votre email</label>
                                <div class="FormField input-email">
                                    <input id="email" type="email" name="email" class="FormField-Input"
                                           value="<?php $email ?>" placeholder="Mon email" required/>
                                </div>
                            </div>
                            <div class="Fields-Table-Row">
                                <span class="FormField-Info">Vous recevrez votre interprétation à cette adresse</span>
                            </div>

                        </div>
                        <button class="btn FormContainer-Submit" type="submit" name="valider">Recevoir mon
                            intérprétation
                        </button>
                    </form>-->
            </article>
            
            <?php include('include/footer_reassurance.php'); ?>
            <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
            
        </section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ajaxify/6.5.6/ajaxify.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="js/snow-ball.js"></script>
<script src="js/dri-noel-2016.js"></script>
        <script src="js/tarot-draw.js"></script>
        <script>/* Configuration du tirage de tarot */
            cardsPath = '<?= $cards_dir;?>';
            trt_deckNbCards = 20;
            trt_forceDrawFirst = false;
            trt_scrollOnComplete = false;
            trt_minSize = 600;
        </script>
<!--<script src="js/formValidator.js"></script>-->
<!--
TODO: For Google analytics, add : ga('send', 'pageview');
-->
    </body>
</html>
<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet" />