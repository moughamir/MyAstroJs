<?php
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_scorpion.xml');
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
        <title>Découvrir l’horoscope de la semaine Scorpion avec MyAstro</title>
	<meta name="description" content="Signe Scorpion : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />

        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope de la semaine Scorpion : les tendances au jour le jour</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Signe Scorpion : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro.</p>
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
                                    <h4>Votre horoscope de la semaine gratuit : Scorpion</h4>
                                </div>
                                <img src="images_voyance/signes/scorpion.png" class="signe" alt="Signe Astrologique Scorpion" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <p>Découvrez sur notre site ce que l’avenir immédiat vous réserve avec votre horoscope. Les grandes tendances en amour, au travail, vos atouts chance et votre état de santé. Soyez averti semaine par semaine de l’évolution de votre destinée et orientez les événements importants de votre vie de façon bénéfique et épanouissante.</p>
                                    <h2>Votre astro Scorpion côté travail</h2>
                                    <p>Envie de voir vos efforts récompensés ? D’un changement de cap ? D’une promotion ? Suivez attentivement votre horoscope de la semaine Scorpion et soyez prêt les jours favorables au changement. Découvrez les tendances de votre caractère en affaire et suivez l’évolution, semaine par semaine, des opportunités à saisir afin d’augmenter vos chances de réussir. Parce que votre avenir est précieux, tenez-vous informé du langage des astres qui vous guident vers une meilleure compréhension de soi pour un plein épanouissement.</p><br/>
                                    <p>Votre situation professionnelle n’évolue plus depuis un moment ? Vous avez envie de vous réorienter mais vous n’osez pas tenter le grand saut ? Consultez en toute liberté sur notre site votre horoscope et soyez attentif aux périodes particulièrement favorables à la mise en place de vos projets. Afin de mieux préparer le terrain et pour des conseils plus personnalisés, n’hésitez pas à consulter nos astrologues professionnels qui prendront en compte les caractéristiques uniques de votre ciel de naissance et vous guideront sur la voie de la réussite.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>L’horoscope de la semaine Scorpion côté cœur</h2>
                                    <p>Vous êtes empêtré dans une histoire qui compte pour vous mais vous n’en voyez pas l’issue ? Vous êtes en couple depuis longtemps et votre histoire manque de piquant ? Vous êtes célibataire et vous aimeriez savoir si vous allez enfin rencontrer l’âme sœur ? Donnez un coup de pouce à votre destin en suivant votre horoscope de la semaine Scorpion, soyez au cœur des prédictions et orientez toutes vos chances en connaissance de cause. Le domaine affectif est trop important pour être laissé au hasard. Soyez informé semaine par semaine des tendances de votre ciel afin d’orienter votre vie amoureuse de façon positive et épanouie.</p><br/>
                                    <p>Chaque situation amoureuse est unique et votre compatibilité avec le signe zodiacal de votre partenaire compte aussi. C’est pourquoi vous pouvez bénéficier d’une consultation de votre horoscope de la semaine Scorpion approfondie et personnalisée par nos astrologues de métier, disponibles et à l’écoute sur notre site. Ils prendront en compte votre date de naissance et celle de votre conjoint pour une étude détaillée de votre compatibilité amoureuse afin de vous guider, au cours des périodes les plus favorables, vers une entente harmonieuse et durable. Ils seront à même de vous dire si votre histoire a un avenir, de quel ordre, et ils vous conseilleront efficacement sans toutefois vous imposer quoique ce soit. Vous seul pouvez influencer votre destin, vous resterez toujours libre de vos décisions.</p>     
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