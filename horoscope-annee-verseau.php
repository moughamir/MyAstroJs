<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_verseau.xml');
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
        <title>Horoscope <?= $annee;?> Verseau gratuit : l’astrologie Myastro</title>
	<meta name="description" content="Signe Verseau : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope Verseau <?= $annee;?></h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Né entre le 21 janvier et le 18 février, votre horoscope <?= $annee;?> verseau gratuit vous réserve de belles surprises. Côté cœur, vous vous engagez dans une relation constructive. Côté travail, vous gagnez en responsabilités et montez en grade. Votre santé est au beau fixe, vous trouvez votre équilibre auprès des autres. Côté argent, votre situation se stabilise. Jupiter et Saturne sont vos alliés, une très belle année en perspective !</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Verseau</h4>
                                </div>
                                <img src="images_voyance/signes/verseau.png" class="signe" alt="Signe Verseau" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2><?= $annee;?> Verseau : Ambiance générale très positive</h2>
                                    <p>Votre horoscope <?= $annee;?> verseau vous réserve de bonnes surprises et vous engage dans une année très riche dans le domaine affectif. Si vous êtes célibataire, le ciel est propice à une rencontre importante et épanouissante, vous aurez envie de vous engager dans une relation stable. Si vous êtes déjà en couple, cʼest auprès de votre partenaire que vous vous sentirez le mieux. Il se pourrait même que vous éprouviez le besoin dʼofficialiser votre liaison. Votre horoscope <?= $annee;?> verseau est donc propice à lʼépanouissement conjugal. En effet, cʼest une année clé pour ceux qui désirent sʼouvrir à lʼamour véritable.</p><br/>
                                    <p>Côté travail, vos compétences seront reconnues par vos supérieurs et vous aurez des responsabilités nouvelles à prendre. Certains se verront faire des propositions importantes qui favoriseront leur promotion. Dʼautres sauront sʼimposer, quelque soit leur entreprise. Bref, vous parviendrez à vous construire un avenir aussi stable quʼenviable. Dʼailleurs vos soucis dʼargent trouveront une issue favorable avec la signature dʼun contrat ou lʼaccès à des accords financiers. Vous ferez preuve également dʼune belle vitalité en trouvant votre bien-être auprès de vos proches.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> verseau par décan et par saison</h2>
                                    <p>Si vous êtes du 1er décan, le sextile de Saturne indique que vous avez un cap important à passer. Vous devrez redoubler dʼénergie au travail. Vos amours prendront une tournure sérieuse avec un engagement à la clé. Si vous êtes du deuxième décan, vous aurez envie de changement mais aussi de liberté. A partir de juin, vous ferez preuve dʼaudace et vos amours joueront avec le feu et les émotions fortes. Si vous êtes du troisième décan, les planètes vous aideront à vous reposer et vous prendrez le temps de préparer de nouvelles conquêtes. Vous subirez quelques contrariétés mais vous serez récompensé de tous vos efforts au 3e trimestre.</p><br/>
                                    <p>Lʼhoroscope <?= $annee;?> verseau délivre aussi ses secrets par saison. Lʼhiver sera propice aux rencontres avec une belle énergie au travail. En couple, vous envisagez des changements importants, lʼofficialisation dʼune relation ou au contraire une rupture. Au printemps, cʼest lʼheure du grand ménage, célibataires, vous dites adieu à vos vieilles habitudes et ouvrez le champ des possibles. En couple, vous aimez votre routine romantique. Lʼété sera favorable à tous côté cœur comme côté travail, vous attirez lʼattention, on vous résiste peu. En automne, les astres vous surprendront avec de nouvelles responsabilités professionnelles et une rencontre inattendue pour les célibataires. En couple, vous serez sur la même longueur dʼonde.</p>
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