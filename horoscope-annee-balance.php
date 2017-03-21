<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_balance.xml');
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
        <title>Horoscope <?= $annee;?> Balance : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Balance : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Vivre pleinement grâce à mon horoscope <?= $annee;?> balance !</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Pour certaines personnes, ne pas savoir de quoi demain sera fait nʼa que peu dʼimportance. Pour dʼautres, au contraire, il est angoissant de ne pouvoir se projeter dans lʼavenir. Si vous appartenez à la seconde catégorie et que vous êtes né entre le 23 septembre et le 22 octobre, vous devriez pouvoir trouver de précieux renseignements sur votre futur en consultant cet horoscope <?= $annee;?> balance complet. Nʼattendez plus et apprenez ce que lʼavenir vous réserve dans tous les domaines de votre vie !</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Balance</h4>
                                </div>
                                <img src="images_voyance/signes/balance.png" class="signe" alt="Signe Balance" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Découvrez votre avenir sentimental grâce à cet horoscope <?= $annee;?> balance gratuit</h2>
                                    <p>Quelquʼun dans votre vie depuis longtemps mais cette relation nʼest plus satisfaisante ? Un petit ami qu vous a quittée ? Une relation devenue moins intense ? Un ancien compagnon de retour dans votre vie ? On a souvent besoin de comprendre les raisons de ces aléas sentimentaux. Consulter un horoscope <?= $annee;?> balance femme peut vous apporter un bon nombre dʼinformations sur lʼannée à venir qui vous aideront à mieux analyser la situation présente et à faire les bons choix.</p><br/>
                                    <p>Célibataires, vous rêvez de savoir si vous allez rencontrer quelquʼun ou si cette jolie femme que vous convoitez deviendra votre compagne ? Découvrez ce que <?= $annee;?> vous réserve en vous reportant à votre horoscope <?= $annee;?> balance homme. Réalisées par des astrologues confirmés, ces prédictions vous aideront à appréhender sereinement ces douze mois à venir et à vous sentir plus confiant dans le domaine sentimental.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Un horoscope <?= $annee;?> balance pour cerner votre avenir professionnel et financier</h2>
                                    <p>Augmentation ? Mutation ? Licenciement ? Formation ? Nouvelles attributions ? La vie professionnelle est loin dʼêtre un long fleuve tranquille. Prendre quelques minutes pour lire votre horoscope <?= $annee;?> balance homme ou votre horoscope <?= $annee;?> balance femme sera très certainement idéal pour vous rassurer sur certains points concernant votre emploi pour les mois à venir. Bien conseillé, il vous sera, de plus, bien plus aisé de faire les bons choix pour votre carrière.</p><br/>
                                    <p>Bien sûr, chaque horoscope proposé sur notre site vous donne des pistes sur ce qui vous attend sur le plan sentimental et professionnel mais bien dʼautres domaines sont abordés, notamment celui de la santé et de votre situation financière. En quelques lignes sʼouvre à vous un aperçu fascinant de votre avenir en <?= $annee;?> et vous pouvez, de plus, bénéficier de conseils en fonction de votre signe astrologique. A vos claviers, amis balance, vous nʼêtes quʼà quelques clics dʼune mine dʼinformations sur votre vie sentimentale, professionnelle et financière, qui vous révèleront une partie de toutes les bonnes surprises qui animeront votre vie le long de cette année <?= $annee;?>.</p>
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