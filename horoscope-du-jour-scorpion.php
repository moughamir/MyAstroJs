<?php
    $source = 'horoscope-du-jour-scorpion';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('https://www.asiaflash.com/horoscope/rss_horojour_scorpion.xml');
    $ac_result = array();
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($s_cle === 'clin_d\'oeil'){
            $s_cle = 'clin_d’oeil';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope du jour Scorpion gratuit | Myastro.fr</title>
	<meta name="description" content="Signe Scorpion : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope du jour Scorpion : que vous annonce-t-il ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">L’astrologie est un outil pratique au quotidien qui permet de diriger sa vie de manière plus consciente. Elle accompagne les personnes à travers les différentes épreuves sans jamais s’imposer. Vous êtes Scorpion ? Découvrez ce que votre vie amoureuse et professionnelle vous réserve aujourd’hui. Votre horoscope du jour Scorpion se fera comme un petit guide qui mène au bonheur.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>

                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Scorpion</h4>
                                    <img src="images_voyance/signes/scorpion.png" class="signe" title="Symbole astrologie Scorpion" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>L’horoscope Scorpion pour une vie sentimentale épanouie</h2>
                                    <p>Vais-je enfin rencontrer l’amour de ma vie ? Comment gérer mes différences avec mon partenaire ? Ma relation amoureuse me convient-elle ? Mon horoscope du jour Scorpion est là pour vous donner des pistes sur la marche à suivre. Il vous guidera à travers les rencontres, les événements heureux et malheureux et les disputes et vous aidera à trouver la voie du bonheur. La vie sentimentale fait partie des préoccupations les plus importantes dans la vie. L’astrologie vous permettra de passer les différentes étapes qui vous aideront à trouver l’amour et à vivre une relation saine basée sur la confiance et le respect. Mesdames, vous rêvez d’annoncer un heureux événement à votre mari et à vos proches ? L’horoscope du jour Scorpion pour femme vous est entièrement consacrée.</p><br/>
                                    <p>L’astrologie est également un bon moyen pour les messieurs de mieux comprendre les femmes. L’horoscope du jour Scorpion pour homme prend en compte la position des planètes pour vous indiquer vers quel signe féminin vous tourner. En ce qui concerne l’amitié, l’horoscope quotidien est là pour vous rappeler de prendre soin des personnes chères à vos yeux. L’horoscope du jour Scorpion gratuit s’apparente à un ange gardien qui veille sur vous en toute occasion.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope du jour Scorpion pour faire avancer ma carrière</h2>
                                    <p>L’horoscope du jour Scorpion pour homme est un véritable guide de carrière. Il vous donnera les pistes qui vous permettront d’évoluer au sein de votre entreprise et d’atteindre vos objectifs professionnels. Quant à l’horoscope du jour Scorpion pour femme, il permettra à ces dernières de renforcer leurs relations tout en imposant leurs idées. La vie professionnelle tient une place de plus en plus importante dans la vie, et contribue largement au bonheur. Mettez les planètes de votre côté et boostez votre carrière !</p><br/>
                                    <p>Si l’argent ne fait pas le bonheur, il y contribue pourtant ! Votre horoscope du jour Scorpion gratuit est là pour vous aider à appréhender les arrivées et pertes d’argent éventuelles. Il vous permettra de mieux gérer votre budget au quotidien afin d'éviter les mauvaises surprises et de profiter au maximum des bonnes nouvelles.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    
        <?php include('include/footer_inc_horoscope_jour.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   

