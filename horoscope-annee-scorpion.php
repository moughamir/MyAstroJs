<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_scorpion.xml');
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
        <title>Horoscope <?= $annee;?> Scorpion gratuit | Myastro.fr</title>
	<meta name="description" content="Signe Scorpion : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope <?= $annee;?> Scorpion</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Que réserve lʼannée <?= $annee;?> aux Scorpions ? Côté cœur, côté travail, côté forme, les planètes vous préparent une année pleine de rebondissements. Il est toujours bon de prendre connaissance des principales tendances. Elles vous guident et vous évitent de vous retrouver pris à dépourvu. Si vous voulez en savoir plus sur votre avenir, Myastro vous dévoile lʼhoroscope <?= $annee;?> scorpion. Un horoscope pour vous, les femmes, et vous les hommes.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Scorpion</h4>
                                </div>
                                <img src="images_voyance/signes/scorpion.png" class="signe" alt="Signe Scorpion" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> scorpion me guide dans ma carrière</h2>
                                    <p>Les questions relatives au travail font souvent partie de celles qui vous intéressent le plus. Au travers de lʼhoroscope <?= $annee;?> scorpion femme et homme, la situation ne manquera pas de devenir plus claire. Si vous avez besoin de conseils pour votre avenir professionnel, Myastro répond à vos questions. Par téléphone ou par SMS, des professionnels de la voyance lèvent le voile sur toutes vos interrogations en relation avec votre emploi.</p><br/>
                                    <p>Un nouveau poste ? Une promotion que vous attendez depuis si longtemps ? Lʼhoroscope <?= $annee;?> scorpion homme ou femme vous donne des indications quant à lʼévolution de votre situation professionnelle. Si vous voulez davantage de précisions, nʼhésitez pas à faire appel aux experts de Myastro. Vous mettez ainsi toutes les chances de votre côté pour améliorer vos conditions dʼemploi. Vous définirez quels sont les bons moments de lʼannée et vous verrez les choses évoluer de manière positive.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> scorpion gratuit me dit tout sur mes relations</h2>
                                    <p>Amour, amitié, relations familiales… Dans votre rapport aux autres, vous vous trouverez en <?= $annee;?> soumis aux interférences des planètes. Il nʼest pas toujours facile de comprendre et interpréter leurs messages et leurs influences. Grâce à lʼhoroscope <?= $annee;?> scorpion homme et femmes, facile dʼaccès, vous comprenez mieux les informations que vous transmettent les astres. Cela vous aidera à mettre de lʼordre dans votre vie sociale. Cet horoscope gratuit se complète par des tests astro. Vous dressez ainsi votre portrait astral tout en répondant à toutes vos interrogations de compatibilité amoureuse.</p><br/>
                                    <p>Ne vous laissez plus influencer par un mauvais alignement des astres. Il est dit que « Cʼest en connaissant son ennemi quʼon peut mieux le combattre ». Apprenez donc à repérer les moments de lʼannée où les planètes ne vous sont pas favorables. Vous avancerez ainsi avec confiance tout en répondant à des questions telles que : « Vais-je trouver lʼamour en <?= $annee;?> ? », « Cette personne est-elle vraiment faite pour moi ? » ou encore « Est-ce que je vais enfin sortir de mes difficultés relationnelles ». Avec Myastro et son horoscope <?= $annee;?> scorpion femme et homme, lʼannée <?= $annee;?> sʼannonce très belle pour tous les scorpions.</p>
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