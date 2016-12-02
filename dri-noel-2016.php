<?php

$cards_dir = 'tarot/cartes/original-grand/';
$ext = '.png';

// Form Vars
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Tirage et interprétation de tarot gratuit spécial Noël 2016 sur MyAstro.fr">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/dri-noel-2016.css">
    <link rel="shortcut icon" type="image/x-icon" href="images_landing/dri-noel-2016/favicon.png">
    <title>Tarot Noel 2016 - DRI | MyAstro</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
<!-- Post Form Modal-->
<div class="FormContainer overlay" id="form-overlay"></div>
<article class="modal hidden">
    <div class="modal-container">
        <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
        <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
        <button class="btn modal-btn">Fermer</button>
    </div>
</article>
<!-- End Of Modal-->
<section class="container" role="main">
    <header class="Site-Header" role="banner">
        <div class="site-logo"><img src="images_landing/dri-noel-2016/logo.png" alt="MyAstro"></div>
        <div class="page-banner"><img src="images_landing/dri-noel-2016/xmass.png" alt="Joyeux Noël"></div>
    </header>
    <article class="Site-MainContent">
        <div class="da-container">
            <section class="snow-ball">
                <button class="btn cta shake">Je Commence</button>

                <canvas id="snow" class="snow"></canvas>
            </section>
            <section class="explication hidden">
                <aside class="left">
                    <img src="images_landing/dri-noel-2016/aside.png" alt="Tarot de noel">
                </aside>
                <article class="right">
                    <p class="explication-text" role="contentinfo" itemprop="description">Noel… La fête, des cadeaux, la
                        convivialité…<br/> Noel, c’est surtout le mois de Décembre, le dernier mois
                        de 2016, le mois qui clôture votre année !<br/> Plus que quelques jours, quelques heures, une
                        ultime
                        occasion qui s’offre à vous pour donner à 2016 la saveur que vous souhaitez. <br/> Que vont vous
                        réserver les derniers instants de 2016 ? Que va-t- il se passer pour vous en cette fin d’année ?
                        Comment bien débuter 2017 ? Que faire pour que cette nouvelle année soit meilleure que la
                        précédente?<br/> Profitez du <span class="Cap">Tarot de Noël</span> pour avoir toutes vos réponses, tirez les cartes
                        ci-dessous</p>
                    <button class="btn cta-draw">Je tire les cartes</button>
                </article>
            </section>
            <section class="drawCards hidden">
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
                            <!-- Picked Card gonna be here-->
                        </ul>
                    </article>
                </article>
                <button class="btn cta-spread">Mélanger</button>
            </section>
            <section class="result hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <article class="Cards-Container">
                    <ul class="cards result-cards">
                        <!-- Picked Card gonna be here-->
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
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="tarot-dri-noel-2016"/>
                            <input type="hidden" name="method" value="general-suscribe"/>
                            <input type="hidden" name="support" value="tarot"/>
                            <input type="hidden" name="site" value="myastro.fr"/>
                            <input type="hidden" name="affiliation" value="adwords"/>
                            <input type="hidden" name="dri" value="dri-noel-2016-merci"/>
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="tel_needed" value="1"/>
                            <input type="hidden" name="gclid"
                                   value="<?php isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                            <input type="hidden" name="cguv" value="1"/>
                            <input type="hidden" name="partenaires" value="1"/>
                            <!-- ############################################### -->
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
                        <button class="btn FormContainer-Submit" type="submit" name="valider">Recevoir mon intérprétation</button>
                    </form>
                </article>
            </section>
        </div>
    </article>
    <footer class="Site-Footer">
        <div class="subfooter">
            <ul class="footer-menu">
                <li class="first"><img src="images_landing/dri-noel-2016/star.png" alt=""><strong>Voyants sérieux
                        reconnus<br/> pour leur savoir faire</strong></li>
                <li class="second"><img src="images_landing/dri-noel-2016/luck.png" alt=""><strong>Consultations 100%
                        <br/>discrètes & anonymes</strong></li>
                <li class="third"><img src="images_landing/dri-noel-2016/chat.png" alt=""><strong>Interprétation<br/>immédiate</strong>
                </li>
                <li class="fourth"><img src="images_landing/dri-noel-2016/award.png" alt=""><strong>My Astro leader
                        <br/>depuis 2007</strong></li>
                <li class="fifth"><img src="images_landing/dri-noel-2016/card.png" alt=""><strong>Paiement <br/>sécurisé
                        par CB</strong></li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="footer">
            <?php include('include/footer_copyright.php'); ?>
        </div>
    </footer>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ajaxify/6.5.6/ajaxify.min.js"></script>
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="js/snow-ball.js"></script>
<script src="js/dri-noel-2016.js"></script>
<!--<script src="js/formValidator.js"></script>-->
<!--
TODO: For Google analytics, add : ga('send', 'pageview');
-->
</body>
</html>