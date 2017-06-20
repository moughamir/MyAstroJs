<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_taureau.xml');
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
        <title>Horoscope <?= $annee;?> Taureau : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Taureau : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope <?= $annee;?> : Quʼest-ce que la nouvelle année réserve aux taureaux ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Une nouvelle année est souvent lʼoccasion de réfléchir et de faire le bilan des douze mois écoulés mais aussi dʼélaborer des projets dans tous les domaines pour la nouvelle période qui débute. Pour savoir ce que lʼavenir leur réserve, les personnes nées entre le 21 avril et le 20 mai peuvent consulter un horoscope <?= $annee;?> taureau. Pourquoi affronter les imprévus quand vous pouvez dʼores et déjà avoir une bonne idée des grandes lignes de votre avenir grâce à cet horoscope gratuit, établi par des professionnels compétents et confirmés ?</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Taureau</h4>
                                </div>
                                <img src="images_voyance/signes/taureau.png" class="signe" alt="Signe Taureau" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Percer les mystères de lʼamour</h2>
                                    <p>Pas toujours évident de savoir si une relation est sérieuse ou si lʼon va rencontrer quelquʼun. Sur notre site, vous trouverez aussi bien un horoscope <?= $annee;?> taureau pour homme quʼun horoscope <?= $annee;?> taureau pour femme qui vous aidera à y voir plus clair dans votre avenir amoureux. A quoi ressemblera <?= $annee;?> ? Trouverez-vous lʼamour ? Ferez-vous une rencontre inattendue ? Notre horoscope <?= $annee;?> taureau gratuit vous aide à anticiper cette nouvelle année et vous dévoile des informations précieuses sur votre avenir sentimental. Profitez de <?= $annee;?> en faisant confiance à votre horoscope <?= $annee;?> taureau.</p><br/>
                                    <p>Vous êtes marié ou dans une relation de longue durée et vous voudriez savoir si votre amour va continuer, voire même se renforcer ? Est-ce que je vais avoir un enfant ? Ma relation avec mon compagnon ou ma compagne va-t-elle devenir encore plus intense ? Allons-nous partir ensemble faire un beau voyage ? Si vous vous posez fréquemment ce genre dʼinterrogations, direction la rubrique mon horoscope <?= $annee;?> taureau sur notre site. Pour les célibataires, la question de savoir si lʼon va rencontrer quelquʼun est souvent essentielle. Apprenez si lʼannée <?= $annee;?> sera placée sous le signe de la séduction, de lʼamour, de la complicité et de la sensualité grâce à votre horoscope détaillé prédisant les grands événements de votre vie amoureuse.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Cerner les enjeux professionnels à venir avec lʼhoroscope <?= $annee;?> taureau</h2>
                                    <p>Un autre domaine qui génère bien souvent de nombreux doutes et questions est la sphère professionnelle. Pensez à consulter votre horoscope <?= $annee;?> taureau pour homme ou votre horoscope <?= $annee;?> taureau pour femme pour savoir ce que lʼavenir vous réserve. Une mutation, une augmentation ou une redéfinition de votre poste sont peut-être au programme !</p><br/>
                                    <p>Vous adorez votre travail et vous rêvez de voir évoluer votre emploi ? Votre horoscope vous aidera à savoir si votre poste va se diversifier. Vous en avez assez de votre entreprise et rêvez de travailler différemment, dans un autre lieu voire même de vous mettre à compte ? Lire votre horoscope vous aidera à anticiper les douze mois à venir, afin de toujours mener vos projets à bien.</p>
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