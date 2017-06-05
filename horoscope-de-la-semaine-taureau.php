<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_hebdotay_complet_taureau.xml');
    $ac_result = array();
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        if ($s_cle === 'citation_de_la_semaine'){
            $s_titre = 'Citation de la semaine';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
        } else {
            $s_titre = ucfirst($s_cle);
        }
        $ac_result[$s_titre] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope de la semaine Taureau : un signe, un caractère | MyAstro </title>
	<meta name="description" content="Signe Taureau : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Votre horoscope de la semaine Taureau : les réponses à vos questions</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Taureau : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                            <div class="widget-title">
                                <h4>Votre horoscope de la semaine gratuit : Taureau</h4>
                            </div>
                            <img src="images_voyance/signes/taureau.png" class="signe" alt="Signe astrologique Taureau" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Fonceur, entêté et sensible, le Taureau est une force de caractère qui n’hésite pas à prendre des risques, parfois inconsidérés. Impulsif, le Taureau a toujours intérêt à prendre un peu de recul avant de faire un choix important. Quoi de mieux, pour un Taureau, que d’avoir la possibilité d’avoir un aperçu de la semaine à venir ? En connaissant votre horoscope, vous êtes en mesure d’anticiper les événements à venir. Amour, travail, argent, santé, amitié, famille, et bien d’autres domaines encore : avec votre horoscope de la semaine Taureau, vous avez des pistes de réflexions et des parfums de ce qui vous attend demain !</p>
                                    <h2>Le meilleur horoscope de la semaine Taureau</h2>
                                    <p>Chaque semaine, votre horoscope répond à sa manière aux grandes questions que vous vous posez. Etes-vous réellement fait pour ce travail ? Comment votre couple va t-il évoluer ? Cette tension familiale va t-elle finir par disparaître ? Allez-vous rencontrer le grand amour ? Etes-vous véritablement faits l’un pour l’autre ? Bien sur, votre horoscope de la semaine Taureau ne vous donnera pas de réponse nette et tranchante sur ces questions. Au lieu de cela, l’horoscope prodigue des pistes de réflexion, et vous permet d’évaluer votre situation avec un nouveau regard.</p><br/>
                                    <p>En effet, l’astrologie offre un outil supplémentaire pour se confronter à la réalité. Les planètes, les étoiles, et leurs mouvements influencent ce que nous vivons, ce que nous ressentons. A partir de cette donnée, il est possible d’interpréter les forces de l’univers pour anticiper ce qui arrivera dans quelques jours. Grâce à votre horoscope hebdomadaire, vous êtes avisé, et avez en main tous les éléments importants à prendre en compte. Ainsi, avec ce maximum d’informations en tête, vous êtes prêt à prendre des décisions pondérées et réfléchies, plutôt que de réagir sur le vif, et d’être, parfois, désemparé.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Toutes les clés en main avec l’horoscope de la semaine Taureau</h2>
                                    <p>Nous vous proposons le meilleur horoscope possible, c’est-à-dire le plus complet, qui aborde tous les points importants de la vie. De plus, nous garantissons des prédictions précises et réelles. En effet, notre équipe est composée d’astrologues brillants, qui mettent leur talent à votre service, et vous livrent chaque semaine un horoscope de très grande qualité. Grâce à votre horoscope, vous êtes accompagné dans toutes vos décisions ! Et vous pouvez anticiper au mieux ce que la semaine prochaine vous réserve !</p><br/>
                                    <p>Lire son horoscope de la semaine Taureau est un petit coup de pouce agréable ! Que vous le consultiez pour vous changer les idées ou avec le plus grand sérieux, n’hésitez plus, et rendez vous sur notre rubrique d’horoscope hebdomadaire pour les Taureaux !</p>     
                                </div>
                            </div>
                        </div>
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_semaine.php');?>