<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_lion.xml');
    $ac_result = array();
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        if ($s_cle === 'mes_conseils_pour_l\'année'){
            $s_titre = 'Mes conseils pour lʼannée';
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
        <title>Horoscope <?= $annee;?> Lion : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Lion : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Mon horoscope <?= $annee;?> Lion</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Lʼastrologie est un excellent moyen de choisir le meilleur chemin de vie possible. Elle aide à surmonter les épreuves sans jamais imposer une seule interprétation. Vous êtes lion ? Apprenez-en plus sur la vie amoureuse, la carrière et toutes les bonnes choses qui vous attendent pour lʼannée <?= $annee;?>. Lʼhoroscope <?= $annee;?> lion gratuit vous permettra de faire évoluer votre vie dans le bon sens et dʼaméliorer vos contacts avec les autres.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Lion</h4>
                                </div>
                                <img src="images_voyance/signes/lion.png" class="signe" alt="Signe Lion" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Horoscope <?= $annee;?> lion côté sentimental</h2>
                                    <p>Vais-je tomber amoureux ou amoureuse en <?= $annee;?> ? Suis-je avec la bonne personne ? Comment faire avancer ma vie amoureuse dans le bon sens ? Mon horoscope <?= $annee;?> lion est là pour vous guider dans votre vie sentimentale. Les rencontres, les bouleversements, les grands événements comme le mariage ou une naissance prochaine… Toutes ces choses peuvent être sues à lʼavance grâce à lʼhoroscope <?= $annee;?> lion. Mais lʼastrologie nʼest pas uniquement là pour vous annoncer des bonnes nouvelles. Les ruptures, les disputes et autres bouleversements font également partie de la vie sentimentale de tout le monde. Heureusement, votre horoscope <?= $annee;?> lion sera là pour vous guider sur le chemin du bonheur et vous aider à prendre les bonnes décisions.</p><br/>
                                    <p>Lʼhoroscope <?= $annee;?> lion pour homme permettra aux messieurs de mieux comprendre leur partenaire grâce à des explications claires et précises. Côté amitié, lʼastrologie joue également un rôle primordial puisquʼelle vous aidera à prendre soin des êtres qui vous sont chers. Et pour vous, mesdames, lʼhoroscope <?= $annee;?> lion pour femme sera comme un ange gardien qui veille sur vos relations affectives, quʼelles soient amicales ou amoureuses.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> lion : un guide pour la carrière et les finances</h2>
                                    <p>Lʼhoroscope <?= $annee;?> lion pour homme vous permettra de booster votre carrière et dʼatteindre vos objectifs. Prenez-le comme un guide vers lʼépanouissement de votre vie professionnelle et appliquez les conseils positifs qui vous sont prodigués. Lʼhoroscope <?= $annee;?> lion pour femme aidera ces dernières à améliorer leurs relations professionnelles grâce à quelques exercices de développement personnel. La carrière fait partie intégrante de la réussite, mieux vaut donc vous accompagner du pouvoir des planètes pour atteindre vos objectifs.</p><br/>
                                    <p>Côté argent, lʼhoroscope <?= $annee;?> lion gratuit vous permettra de rester à flot et de prévoir à lʼavance les éventuelles pertes et rentrées dʼargent. Lʼastrologie prodigue dʼexcellents conseils financiers idéals pour appréhender le futur. Que les nouvelles soient bonnes ou mauvaises, profitez de les connaître à lʼavance pour préparer votre contre-attaque. Dans tous les cas, laissez faire le pouvoir des planètes et suivez leurs conseils afin de mieux vivre au quotidien.</p>
                               </div>
                            </div>
                        </div>
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_annee.php');?>