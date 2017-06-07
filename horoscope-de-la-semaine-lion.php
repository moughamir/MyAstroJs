<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_hebdotay_complet_lion.xml');
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
        <title>Obtenir des réponses avec votre horoscope de la semaine Lion</title>
	<meta name="description" content="Signe Lion : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">L’horoscope de la semaine Lion vous révèle votre avenir</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Lion : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Lion</h4>
                                </div>
                                <img src="images_voyance/signes/lion.png" class="signe" alt="Signe Astrologique Lion" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Si vous êtes né entre le 23 juillet et le 23 août, il ne fait aucun doute que vous êtes venu au monde sous le signe le plus royal du Zodiaque : Lion. Pour vivre heureux et en harmonie avec votre signe, il est donc primordial d’avoir une idée précise de votre horoscope. Il s’agit de précisions fiables qui vous aideront dans la gestion de votre semaine sur le plan de l’amour, du travail, de l’argent, de la famille et de la santé.</p>
                                    <h2>L’horoscope de la semaine Lion améliore votre vie sentimentale</h2>
                                    <p>Pour les natifs du signe Lion, l’horoscope est le meilleur moyen pour prévoir et planifier une semaine. Sur le plan sentimental, l’horoscope de la semaine Lion s’adapte à la situation amoureuse de chaque consultant. Si vous êtes en couple, vous aurez le plaisir de découvrir les changements et rénovations qui marqueront votre vie conjugale. L’horoscope hebdomadaire vous révélera l’ambiance qui régnera au sein de votre couple et ce, pendant les sept jours à venir.</p><br/>
                                    <p>Pour les célibataires, l’horoscope dévoilera les éventuelles rivalités et malentendus de la vie amoureuse. Sur la base de ces informations, vous serez en mesure de mieux vous comporter en couple et de mener les bonnes actions qui mèneront à la rencontre de l’ âme-sœur. </p>
                                </div>
                                <div class="text-justify">
                                    <h2>Consultez votre horoscope et anticipez vos décisions à venir</h2>
                                    <p>Outre les prédictions amoureuses, l’horoscope de la semaine Lion apporte de précieuses indications sur le plan professionnel. A ce sujet, l’horoscope apportera des indices sur les éventuelles occasions intéressantes qui se présenteront à vous. Par la même occasion, vous découvrirez l’attitude à adopter pour atteindre vos objectifs sur le plan du travail. Ce dernier étant conditionné par une bonne forme physique, l’horoscope met un accent particulier sur la santé des natifs de Lion. Ainsi, vous serez informé des risques de santé que vous encourez en vivant d’une certaine manière.</p><br/>
                                    <p>Pour finir, l’aspect financier et les relations familiales seront étudiées. Sur le plan financier, vous aurez le plaisir de découvrir si cette semaine sera caractérisée par des dépenses ou des gains. Dans un cas comme dans l’autre, vous aurez droit à de précieuses recommandations qui vous aideront à mieux gérer votre argent. Sur le plan de la famille, l’horoscope s’attardera sur vos rapports avec les enfants. Avec l’horoscope de la semaine Lion, vous deviendrez le véritable maître de votre destin. Vous n’aurez plus à prendre de décisions sur un coup de tête, car l’horoscope vous donnera de précieuses indications.</p>     
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