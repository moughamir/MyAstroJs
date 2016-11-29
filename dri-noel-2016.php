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
    <link rel="stylesheet" href="css/dri-noel-2016.css">
    <link rel="shortcut icon" type="image/x-icon" href="images_landing/dri-noel-2016/cards.png">
    <title>Tarot Noel 2016 - DRI | MyAstro</title>
</head>
<body itemscope itemtype="http://schema.org/WebPage">
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
                        précédente?<br/> Profitez du TAROT DE NOël pour avoir toutes vos réponses, tirez les cartes
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
                <button class="btn cta-read">Voir mon intérprétation</button>
            </section>
            <section class="signUp hidden">
                <header class="section-header">
                    <img src="images_landing/dri-noel-2016/aside-2.png" alt="Tarot de noel">
                </header>
                <ul class="result-cards-mini">

                </ul>
                <article class="Form-Container">
                    <from class="Primary-Form">
                        <input type="text" id="name" name="prenom" class="FormField-Input" value="<?= $prenom ?>"
                               placehodler="Mon prénom" required/>
                        <input type="email" id="email" name="email" class="FormField-Input" value="<?= $prenom ?>"
                               placeholder="Mon email" required/>
                        <div class="Fields-Table-Row">
                            <label for="pays" class="FormField-Label">Votre pays</label>
                            <div class="FormField">
                                <select name="pays" id="pays" class="FormField-Input" required>
                                    <option value="" selected>Votre Pays</option>
                                    <option value="BE">Belgique</option>
                                    <option value="CA">Canada</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="CH">Suisse</option>
                                    <option value="FR" selected>France Métropolitaine</option>
                                    <optgroup label="DOM-TOM">
                                        <option value="MQ">Martinique</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GF">Guyane</option>
                                        <option value="RE">La Réunion</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="PM">St Pierre et Miquelon</option>
                                        <option value="BL">St Barthélémy</option>
                                        <option value="SM">St Martin</option>
                                        <option value="WF">Wallis et Futunua</option>
                                        <option value="PF">Polynésie Française</option>
                                        <option value="NC">Nouvelle Calédonie</option>
                                    </optgroup>
                                    <option value="ZZ">Autre</option>
                                </select>
                            </div>
                        </div>
                    </from>
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
<script src="https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js"></script>
<script src="js/snow-ball.js"></script>
<script src="js/dri-noel-2016.js"></script>
</body>
</html>