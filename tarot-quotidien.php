<?php
    $source = 'tarot-quotidien';
    $support = 'tarot';
    $question = 'AMOUR-CONJOINT';

    $ipg_title = 'Tarot Quotidien';
    $ipg_pubs =  [ 'astrologie-gratuite-tarot', 'compatibilite-amoureuse-feminine-tarot-quotidien' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot quotidien : Votre programme de la journée dévoilé</title>
        <meta name="description" content="Myastro vous permet, grâce à un tirage de cartes de Tarot quotidien, de pouvoir aborder vos journées sans inquiétudes. Les cartes vous aideront à prendre les bonnes décisions." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />

        <?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tarot du jour en amour : La tendance de la journée</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Myastro vous permet, grâce à un tirage de cartes de Tarot quotidien, de pouvoir aborder vos journées sans inquiétudes. Les cartes vous aideront à prendre les bonnes décisions.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>	

                        <!-- main content -->
                        <div class="span6 main-content">
                            <section class="cat-widget h-cat-1"> 
                                <div class="cat-widget-title">
                                    <h3>CONSULTER VOTRE TAROT QUOTIDIEN GRATUIT</h3>
                                </div>
                                <form name="tarot" action="afficher_tarot_hebdomadaire.php" method="post" onsubmit="return check_prenom()">
                                    <br/><label for="date">Votre prénom&nbsp;</label>
                                    <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40 />
                                    <br/><label for="date">Votre signe &nbsp;</label>
                                    <select name="signe">
                                        <option value="1">Bélier</option>
                                        <option value="2">Taureau</option>
                                        <option value="3">Gémeaux</option>
                                        <option value="4">Cancer</option>
                                        <option value="5">Lion</option>
                                        <option value="6">Vierge</option>
                                        <option value="7">Balance</option>
                                        <option value="8">Scorpion</option>
                                        <option value="9">Sagittaire</option>
                                        <option value="10">Capricorne</option>
                                        <option value="11">Verseau</option>
                                        <option value="12">Poissons</option>
                                    </select><br/>
                                    <div style="margin-top:10px; text-align:center; height:60px;">
                                        <input type="submit" value="Commencer mon tirage" name="Valider" class="button" />
                                    </div>
                                </form>
                            </section>
                            <hr/>
                            <!-- texte -->
                            <div class="text-justify">
                                <p>Le tarot du jour est le support divinatoire qui permet de se faire une idée de la tendance d’une journée. Il apporte de précieuses informations sur les principaux événements de votre avenir proche. La consultation du tarot du jour amour vous aidera à lever le doute sur certains aspects de votre vie sentimentale.</p>
                                <h2>Le tarot quotidien vous guide jour après jour.</h2>
                                <p>Simple, rapide et efficace, le tirage du tarot du jour gratuit permet de se faire une idée précise des faits marquants de la journée. Présenté sous la forme d’un jeu de cartes, ce tirage se réalise en quelques clics via internet. Son but : prédire l’évolution d’une journée sur divers plans. Consulter via une séance de tarot permet de découvrir ce que Cupidon vous réserve dans la journée. A travers cette consultation, nos cartomanciens vous prodigueront de précieux conseils qui vous aideront sur le plan décisionnel.</p><br/>
                                <p>Dans le cadre d’une consultation du tarot du jour en ligne, le consultant a le choix entre le tirage de trois cartes et le tirage de cinq cartes. Le tirage de trois cartes est idéal pour étudier les principaux secteurs de votre vie : amour, état d’esprit du jour et travail. Par contre, le tirage de cinq cartes ou tirage en croix permet d’obtenir la réponse à une question précise ou de solutionner un problème. Si vous optez pour un tel tirage, les cinq cartes que vous choisirez indiqueront respectivement le positif, le négatif, la vibration, la direction et la synthèse.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Le tarot du jour met fin aux journées stressantes et difficiles</h2>
                                <p>Le tarot est le meilleur support divinatoire qui vous donnera des prédictions à l’échelle d’une journée. Les révélations de ce tarot apportent un grand soulagement et aident à mieux planifier sa journée de travail. Grâce au savoir-faire de nos cartomanciens, il est même possible d’aller au-delà des prédictions. L’analyse approfondie des cartes permettra à nos cartomanciens de vous prodiguer de merveilleux conseils. Grâce au tarot du jour travail, vous pourrez ainsi mieux gérer votre journée mais aussi à prendre des décisions justes. </p><br/>
                                <p>Pour obtenir des conseils immédiats ou des prédictions sans attendre, il suffit de se tourner vers le tirage du tarot du jour en ligne. Cette option de consultation, basée sur internet, vous permet de réaliser votre tirage dans le calme et la discrétion. Chaque jour, au moment de la pause-café du matin ou pendant la pause-détente de l’après-midi, vous n’aurez qu’à consulter le tarot du jour gratuit pour obtenir des réponses précises à vos questions sentimentales ou professionnelles. Loin d’être une consultation anodine, le tirage des cartes révèle des informations capitales à votre réussite : rencontre, augmentation, promotion, rupture...</p>
                            </div><br/>
                            
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php');?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-tarot.php');?>
                    </div>
                </div>
            </div>
        </div>

    <?php include('include/footer_inc_tarot.php'); ?>

<script src="js/formValidator-.js"></script>
<script src="js/infoBulle.js"></script>