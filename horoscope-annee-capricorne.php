<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_capricorne.xml');
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
        <title>Horoscope <?= $annee;?> Capricorne : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Capricorne : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope Capricorne, que vous réserve <?= $annee;?> ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Pour connaître votre horoscope <?= $annee;?> capricorne, commencez maintenant votre consultation en ligne. Amour, activité professionnelle, amitié, famille, argent et santé, votre signe astral vous révèle toutes les tendances de lʼannée <?= $annee;?>. Lʼhoroscope <?= $annee;?> capricorne homme vous dévoile les moments les plus favorables pour faire une rencontre ou changer de travail. Lʼhoroscope <?= $annee;?> capricorne femme révèle vos points forts et vos ressources pour réaliser vos objectifs.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Capricorne</h4>
                                </div>
                                <img src="images_voyance/signes/capricorne.png" class="signe" alt="Signe Capricorne" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Amour, santé, argent, quoi de neuf dans votre horoscope <?= $annee;?> Capricorne ?</h2>
                                    <p>Quoi de neuf dans mon horoscope <?= $annee;?> capricorne ? Pour savoir ce que vous réserve votre avenir amoureux en <?= $annee;?>, les voyants consultent sans relâche les astres. Confiance, harmonie et bonheur se conjuguent pour vous faire vivre des moments très enrichissants. Quelques difficultés de communication seront les seuls nuages de votre duo. Vous vous sentez seul et cherchez lʼâme soeur ? De belles rencontres viendront parsemer lʼannée <?= $annee;?>, à vous dʼen profiter et dʼen tirer le meilleur parti.</p><br/>
                                    <p>Horoscope <?= $annee;?> capricorne gratuit : que révèlent les astres ? Quelle que soit votre demande, découvrez votre horoscope <?= $annee;?> pour connaître les grandes lignes de votre avenir. Dans le domaine financier également, les voyants vous indiquent la meilleure période de lʼannée pour réaliser des investissements, mais aussi le moment idéal pour demander une augmentation. Vous envisagez un voyage ou un achat important ? Grâce à votre horoscope <?= $annee;?> capricorne gratuit, découvrez votre avenir financier en quelques minutes. Vous saurez désormais à quoi vous attendre pour lʼensemble de lʼannée et vous pourrez ainsi programmer vos dépenses.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Quels changements se profilent dans votre vie ?</h2>
                                    <p>Vous êtes native de décembre ou janvier et vous aimeriez connaître votre horoscope <?= $annee;?> capricorne femme ? Quels changements vont intervenir cette année ? Découvrez les principales planètes ayant une influence sur votre signe en <?= $annee;?>. Amour, amitié, argent, travail, santé et famille, votre horoscope complet vous attend pour vous livrer les grandes lignes de votre avenir. Mois par mois, les voyants détaillent votre évolution pour lʼannée qui sʼannonce. Quels seront les moments-clés de cette année <?= $annee;?> ? Quels changements se profilent à lʼhorizon ? Votre horoscope capricorne vous dévoile toutes les tendances de lʼannée <?= $annee;?>. </p><br/>
                                    <p>Découvrez votre horoscope <?= $annee;?> capricorne homme pour connaître votre avenir dans le domaine sentimental, financier ou familial. Nʼattendez pas une minute, décryptez la position des planètes en rapport avec votre signe pour prendre les meilleures décisions concernant votre avenir. Un changement de travail se profile peut-être, accompagné dʼune belle augmentation. Parce quʼun homme averti en vaut deux, selon le dicton populaire, ne vous laissez pas surprendre par les événements. Découvrez les révélations des voyants sans plus attendre, votre horoscope <?= $annee;?> capricorne nʼa pas fini de vous étonner.</p>
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