<?php
    $source = 'horoscope-gratuit';
    $ipg_title = 'HOROSCOPE GRATUIT';
    $ipg_pubs = [
        'compatibilite-amoureuse-pour-les-femmes-horoscope', 'compatibilite-amoureuse-pour-les-hommes-horoscope',
        'votre-personnalite-astrologique', 'portrait-astrologique-feminin',
        'tarot-quotidien-horoscope', 'tarot-hebdomadaire-horoscope'
    ];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Horoscope gratuit en ligne : consultation en ligne | Myastro.fr</title>
	<meta name="description" content="Myastro vous permet de consulter un horoscope fiable de manière gratuite. Anticipez votre journée, votre mois ou votre année grâce à ce service." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-4.css" />
        
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Consultez votre horoscope gratuit en ligne</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Si vous devez prendre une décision éclairée sur l'un des aspects de votre vie, sachez que vous pouvez accéder aux conseils de l'astrologie et du tarot gratuitement en ligne.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-principale-2.php'); ?>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <!-- Slider -->
                            <script type="text/javascript"> $('.carousel').carousel() </script>
                            <div id="carousel-homepage" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-homepage" data-slide-to="1"></li>
                                    <li data-target="#carousel-homepage" data-slide-to="2"></li>
                                    <li data-target="#carousel-homepage" data-slide-to="3"></li>
                                    <li data-target="#carousel-homepage" data-slide-to="4"></li>
                                </ol>
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <a href="http://<?= ROOT_URL ?>/horoscope-2016">
                                            <img src="images/bannieres/horoscopes/horoscope-2015.png" alt="horoscope-2016" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://<?= ROOT_URL ?>/horoscope-du-jour">
                                            <img src="images/bannieres/horoscopes/horoscope-du-jour.jpg" alt="horoscope-du-jour" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine">
                                            <img src="images/bannieres/horoscopes/horoscope-de-la-semaine.jpg" alt="horoscope-de-la-semaine" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://<?= ROOT_URL ?>/horoscope-du-mois">
                                            <img src="images/bannieres/horoscopes/horoscope-du-mois.jpg" alt="horoscope-du-mois" />
                                        </a>
                                    </div>
                                    <div class="item">
                                        <a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour">
                                            <img src="images/bannieres/horoscopes/horoscope-de-l-amour.jpg" alt="horoscope-de-l-amour" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Votre horoscope gratuit en ligne</h2>
                                    <p>Sur le site MyAstro.fr, vous pouvez consulter votre horoscope en ligne de manière quotidienne, hebdomadaire et mensuelle, sans frais. Depuis des siècles, des personnages importants de l’histoire ont eu recours à l’astrologie pour être mieux guidés dans leurs décisions.  Encore aujourd’hui, de nombreuses personnes apprécient les conseils dont ils peuvent bénéficier en consultant un astrologue. Sur ce site généreux en ressources, vous profiterez gratuitement des avantages de l’astrologie. </p><br/>
                                    <p>En prime, hommes et femmes peuvent y découvrir quelles sont leurs compatibilités amoureuses selon leur signe et avoir accès au profil complet de leur personnalité astrologique. Idéal lorsqu’on désire trouver la personne qui nous convient le mieux ou que l’on s’interroge sur une relation amoureuse que l’on entretient déjà. Grâce à cet horoscope gratuit, vous apprendrez à mieux connaître votre signe et à adapter vos réactions aux événements avec plus de facilité. La connaissance de soi et des autres constitue la base des relations réussies, qu’il s’agisse d’amour, de travail ou d’argent.  </p>
                                </div>
                                <div class="text-justify">
                                    <h2>Des ressources précieuses de plus</h2>
                                    <p>Si vous ne connaissez pas déjà les secrets de ces cartes remplies de symboles éclairants, vous pourrez vous y initier sur MyAstro. Obtenez ainsi des conseils judicieux pour vous aider à bien gérer différents aspects de votre vie : amour, travail, argent. En consultant votre horoscope gratuit, pourquoi ne pas profiter de l’occasion pour jeter un coup d’œil sur votre tarot du jour, de la semaine ou du mois ? La consultation régulière du tarot, associée à tout ce que peut vous apporter votre horoscope au quotidien, constitue une option à privilégier pour vivre en harmonie. </p><br/>
                                    <p>En cliquant sur l’option « Tarot du couple », un service gratuit, vous bénéficiez de conseils avisés pour mieux comprendre votre relation et, par le fait même, l’améliorer ou faire d’autres choix.  Le tarot mensuel, en particulier, est l’un des moyens de recevoir des réponses concernant votre passé, votre présent ou votre avenir, sur le plan personnel ou de celui de votre couple. Chaque partenaire peut avoir recours aux conseils de l’horoscope et du tarot, mais partager le plaisir d’aller ensemble sur le site MyAstro constitue une expérience enrichissante à tenter. Les personnes qui nécessitent un suivi encore plus personnalisé seront intéressées d’apprendre que des services de voyance entièrement gratuits sont également proposés sur ce site.</p>
                                </div>
                            </div><br/>
                            
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php'); ?>
                            </section>
                        </div><!-- fin main-content -->
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-principale-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_horoscope_gratuit.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   