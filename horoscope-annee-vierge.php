<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_vierge.xml');
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
        <title>Horoscope <?= $annee;?> Vierge : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Vierge : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope Vierge <?= $annee;?></h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Découvrez votre horoscope  <?= $annee;?> vierge gratuit sur notre site, les grandes tendances de lʼannée, les prévisions par domaine, par mois ou par décan. En prenant connaissance de ce que lʼavenir vous réserve, vous pouvez influer de façon positive sur les décisions importantes à prendre dans votre vie aux moments les plus favorables pour vous. Vous pouvez aussi faire appel à nos astrologues pour une étude plus approfondie et personnalisée de votre carte du ciel.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Vierge</h4>
                                </div>
                                <img src="images_voyance/signes/vierge.png" class="signe" alt="Signe Vierge" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> vierge côté cœur</h2>
                                    <p>Vous êtes célibataire et vous souhaitez rencontrer lʼâme sœur ? Consultez votre horoscope <?= $annee;?> vierge pour femme ou votre horoscope <?= $annee;?> vierge pour homme pour comprendre la position des astres dans votre ciel et la manière dont ils vont influer sur votre destinée amoureuse cette année. Vous saurez tout sur votre état dʼesprit, par exemple ouvert ou timide, disponible ou tourné vers le passé et sur les périodes les plus propices aux rencontres. Est-ce bien le moment de changer de vie ? De sʼengager avec une nouvelle personne ? Autant de questions qui méritent quʼon sʼy prépare et quʼil est intéressant voire prudent dʼanticiper.</p><br/>
                                    <p>Vous êtes en couple et la routine est un peu trop installée ? Vous ne comprenez pas toujours votre conjoint ? Le romantisme nʼest plus au rendez-vous ? Ou bien cʼest lʼamour fou et vous vous demandez si tout cela aura la chance de durer ? Votre horoscope <?= $annee;?> vierge gratuit vous dévoile les grandes tendances du couple,  les signes les plus compatibles, les mois les plus favorables à votre entente, les périodes où les projets à deux auront le vent en poupe. Ne restez pas dans lʼincertitude quant à lʼavenir dʼune belle histoire, en prenant connaissance de vos prédictions vous pouvez orienter de façon bénéfique votre destinée vers un épanouissement total à deux.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> vierge côté travail, argent, santé</h2>
                                    <p>Découvrez ce que votre horoscope <?= $annee;?> vierge vous réserve côté travail. Vous nʼavez pas ménagé vos efforts et vous espérez une promotion ? Vous êtes en quête dʼun nouveau job qui donne un sens profond à votre vie ? Votre ciel livre ses secrets et ses tendances quelle que soit votre situation. Les prédictions sont là pour vous aider, elles sont un appui précieux qui permettra dʼorienter votre carrière de façon positive. Pour des conseils plus pointus et plus personnalisés grâce à votre date de naissance et votre lieu de naissance, nos astrologues peuvent vous répondre et vous guider.</p><br/>
                                    <p>Côté argent, votre horoscope <?= $annee;?> vierge vous renseigne sur les périodes propices aux signatures de contrat, aux transactions et autres accords importants. Vous saurez si les astres sont favorables aux rentrées dʼargent, à quelle période ou sʼil faut patienter encore un peu. Côté santé, ne prenez pas cela à la légère et suivez les conseils de votre étude astrale de sorte à bien vous prémunir.</p>
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