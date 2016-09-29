<?php
    $source = 'horoscope-du-mois-sagittaire';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_sagittaire.xml');
    $ac_result = array();
    $nb_item = count($xml1['desc']);
    $i = 1;
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($i == $nb_item){ // dernier élément
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
        $i++;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>L’horoscope du mois Sagittaire en toute simplicité</title>
	<meta name="description" content="Signe Sagittaire : L’horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Découvrir l’avenir avec l’horoscope du mois Sagittaire</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Sagittaire : L’horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception.</p>
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
                                    <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT : Sagittaire</h2>
                                    <img src="images_voyance/signes/sagittaire.png" class="signe" alt="Symbole astrologique Sagittaire"/>
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <p>En ces temps incertains, l’avenir paraît bien sombre. Toutes les indications utiles, comme celle de votre horoscope, peuvent contribuer à vous préparer pour les évènements à venir. Amour, argent, santé, affaires, tout le monde veut pouvoir anticiper au plus près les décisions à prendre. Myastro.fr vous guide dans vos choix, en vous proposant notamment un horoscope du mois sagittaire.</p>
                                    <h2>Connaitre son horoscope pour anticiper ses décisions</h2>
                                    <p>Le site Myastro.com est au plus près des attentes de ses utilisateurs. Les demandes de conseils sont nombreuses et très variées. A chaque personne ses problèmes et ses envies bien particulières de trouver des clefs pour les résoudre. Qu’à cela ne tienne. Ici toutes les demandes trouvent leurs réponses. De nombreux liens pointent vers toutes les réponses que vous pouvez vous poser, et ce quel que soit votre signe astrologique et votre décan. Quel que soit la nature de vos questionnements, des experts reconnus vous répondent dans les plus brefs délais.</p><br/>
                                    <p>Dès la page d’accueil du site, vous avez accès à des liens de réponses à tous vos types de préoccupation. Amour, travail, vitalité, argent, rien n’est passé sous silence. Un horoscope de la semaine est proposé gratuitement. Chaque semaine a son signe et chaque signe est évalué suivant une première et une seconde quinzaine. Vous pouvez également recourir aux conseils d’experts en ligne pour obtenir des conseils plus personnalisés. Il vous est tout aussi facile de poser une question précise grâce à un formulaire destiné à cet effet. Enfin, en vous rendant au bas de la page d’accueil, vous avez accès à des prédictions plutôt basées sur les compatibilités entre signes et sur la lecture des tarots.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Un site pour connaître son horoscope du mois sagittaire</h2>
                                    <p>Votre horoscope du mois sagittaire est établi très facilement. En sélectionnant simplement votre signe astrologique, sagittaire en l’occurrence, vous avez accès à une multitude de fonctions. Celles-ci vous permettent d’obtenir des réponses précises à vos questions. Myastro.com met à votre disposition nombre d’outils qui réduisent considérablement les doutes que vous pouvez légitimement avoir quant à votre avenir. Dès que votre horoscope du mois, pour votre signe astrologique du sagittaire, est sélectionné, vous pouvez affiner les prédictions grâce à de nombreuses options.</p><br/>
                                    <p>Afin de faciliter au maximum l’obtention de conseils sur votre avenir, Myastro.com a recours à toutes les technologies de communication les plus efficaces. En plus d’un accès direct grâce aux pages web du site, vous pouvez obtenir des prédictions par SMS sur votre smartphone. Ces mêmes ressources sont également accessibles par audiotel au moyen d’un simple numéro de téléphone. Ces conseils sont prodigués, en France comme en Belgique, sans utilisation d’une carte bancaire. En plus de votre horoscope et des fonctions d’astrologie, vous avez accès aussi facilement à des services basés sur les tarots, la numérologie et même à un service de voyance par téléphone.</p>     
                                </div>
                            </div>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php');?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_horoscope_mois.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   

