<?php
    $source = 'horoscope-de-la-semaine-poissons';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_hebdotay_complet_poissons.xml');
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
        <title>Découvrez l’horoscope de la semaine Poissons avec Myastro</title>
	<meta name="description" content="Signe Poissons : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
 
        <?php include('include/header_inc.php');?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">L’horoscope de la semaine poisson : les prédictions</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Poissons : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>Votre horoscope de la semaine gratuit : Poissons</h4>
                                </div>
                                <img src="images_voyance/signes/poissons.png" class="signe" alt="Symbole astrologique Poissons" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Désir d’être rassuré sur un rendez-vous sentimental ou envie d’évaluer l’opportunité d’une perspective professionnelle, l’horoscope de la semaine pour les natifs du poisson offre de précieuses prédictions sur de nombreuses questions. Amour, travail, santé, famille, argent, toutes les grandes préoccupations de la vie se trouvent abordées. </p>
                                    <h2>Horoscope de la semaine poisson : les qualités du signe</h2>
                                    <p>Face au doute concernant l’avenir ou à l’impatience de vivre un événement, l’horoscope de la semaine des poissons permettra d’en préciser l’atmosphère générale. Interprétation de la position des planètes dans le système solaire, l’astrologie semaine après semaine fournira au signe du poisson indications et précisions sur les événements à attendre, les écueils à éviter et les chances à saisir. Permettant de se préparer tout autant que de se prémunir, elle rappellera également à toutes les personnes nées entre le 20 février et le 20 mars les grandes caractéristiques de leur personnalité.</p><br/>
                                    <p>Douzième et dernier signe astrologique, les natifs du poisson découvriront dans leur horoscope de la semaine les affinités profondes qui les lient aux événements et aux personnes. Possédant pour planète maîtresse Neptune, le signe astrologique de la fin de l’hiver réserve à ses natifs de magnifiques qualités de sensibilité et d’intuition. D’un charme insaisissable et d’une grande inventivité, toutes les personnes nées sous les auspices de Neptune pourront découvrir à la semaine le meilleur moyen d’agir en fonction de leur nature.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>L’horoscope des poissons, pour passer à l’action chaque semaine</h2>
                                    <p>Avec leur horoscope, tous les poissons pourront lire les prédictions sur les grandes questions qui les préoccupent. En ce qui concerne la vie affective, les thèmes de l’amour et de la famille indiqueront si le moment est opportun pour se laisser aller à ses élans du cœur ou s’il vaut mieux adopter une attitude de prudence. Personne célibataire ou personne en couple, chacun pourra découvrir ce que prédit l’horoscope de la semaine poisson. Moment idéal pour faire une rencontre ou pour officialiser une union, il permettra de se préparer psychologiquement afin d’optimiser ses chances et saisir les opportunités.</p><br/>
                                    <p>Au côté du domaine affectif, les prévisions de l’horoscope de la semaine des poissons concernent également le plan plus matériel du travail, de la santé et de l’argent. Objectif à réaliser, régime à suivre, placement à faire, de nombreux conseils accompagneront les grandes décisions à prendre. Ouvrant de nouvelles perspectives en déterminant la meilleure attitude à adopter, toutes ces prévisions pourront redonner du tonus aux projets et apporter de grandes surprises.</p>     
                                </div>
                            </div>
                        </div>
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_semaine.php');?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>