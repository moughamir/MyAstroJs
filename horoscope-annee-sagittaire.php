<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_sagittaire.xml');
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
        <title>Horoscope <?= $annee;?> Sagittaire : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Sagittaire : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope <?= $annee;?> Sagittaire : Votre avenir en un clic</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Vous êtes né entre le 22 novembre et le 22 décembre et vous souhaiteriez savoir à quoi va ressembler votre année ? Rien de plus simple en consultant sur notre site lʼhoroscope <?= $annee;?>, réalisé par nos spécialistes de lʼastrologie. Découvrez si <?= $annee;?> sera pour vous un long fleuve tranquille ou, au contraire, une année pleine de rebondissements, de surprises et dʼimprévus grâce à nos prévisions portant aussi bien sur le domaine sentimental que professionnel et financier.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>

                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Sagittaire</h4>
                                </div>
                                <img src="images_voyance/signes/sagittaire.png" class="signe" alt="Signe Sagittaire" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> et mes amours ?</h2>
                                    <p>Est-ce que la personne qui me fait craquer va faire le premier pas ? Est-ce que mon compagnon va sʼengager et me proposer que lʼon prenne un appartement ensemble ? Vais-je avoir un enfant ? Mon ex-mari va-t-il revenir vers moi ou dois-je faire le deuil de cette relation ? Vais-je rencontrer une personne qui me correspond après une longue période de célibat ? Une seule façon pour le savoir en avance, je consulte mon horoscope <?= $annee;?> Sagittaire  pour en apprendre plus dès maintenant.</p><br/>
                                    <p>Vous lʼavez sûrement déjà remarqué, rien de plus imprévisibles à première vue que les comportements amoureux. Du jour au lendemain, un changement décisif peut se produire : une nouvelle rencontre, une déclaration mais aussi, malheureusement, une rupture ou la découverte dʼune tromperie. En consultant votre horoscope, vous avez toutes les clés en main pour appréhender sereinement votre vie amoureuse.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Ma carrière dans mon horoscope <?= $annee;?> Sagittaire ? </h2>
                                    <p>Comme beaucoup de Sagittaires, vous êtes un grand optimiste et cette force vous a sûrement déjà rendu bien des services dans votre vie professionnelle. Cependant, il est parfois difficile de cerner comment un poste va évoluer ou si les relations avec des collègues ou un supérieur vont sʼaméliorer. Pour le savoir et avoir un bon aperçu du déroulement des événements, jetez un coup dʼœil à votre horoscope <?= $annee;?> Sagittaire homme ou à votre horoscope <?= $annee;?> Sagittaire femme. A coup sûr, ces prédictions vous permettront de vous rassurer et de pouvoir mieux anticiper cette nouvelle année.</p><br/>
                                    <p>En plus du domaine professionnel au sens propre, votre horoscope vous dévoile également les grandes lignes de votre avenir financier. Vous vous demandez si votre banquier va enfin vous accordez le prêt dont vous avez besoin pour vous mettre à votre compte ? Vous aimeriez savoir si lʼaugmentation tant espérée va devenir réalité après des mois dʼefforts ? Votre horoscope <?= $annee;?> Sagittaire homme ou votre horoscope <?= $annee;?> Sagittaire femme contient très certainement la réponse à cette question qui vous préoccupe ou, du moins, des éléments pour vous aider à faire avancer au mieux ce projet qui vous tient tant à cœur.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_horoscope_annee.php');?>