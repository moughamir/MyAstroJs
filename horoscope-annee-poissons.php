<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('https://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_poissons.xml');
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
        <title>Horoscope <?= $annee;?> Poissons : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Poissons : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Que vous révèle votre horoscope <?= $annee;?> Poissons ?</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Petit guide du quotidien, votre horoscope <?= $annee;?> poissons vous accompagnera chaque jour vers le chemin du bonheur. Il est là pour vous guider dans vos décisions et dans vos choix sans jamais sʼimposer. Lʼastrologie est la science idéale pour en apprendre plus sur soi-même, sa vie amoureuse et sa vie professionnelle. Découvrez tout ce qui vous attend en <?= $annee;?> grâce à votre horoscope <?= $annee;?> poissons gratuit.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Poissons</h4>
                                </div>
                                <img src="images_voyance/signes/poissons.png" class="signe" alt="Signe Poissons" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Ce que lʼhoroscope poissons révèle sur votre vie sentimentale</h2>
                                    <p>Qui ne sʼest jamais demandé ce qui lʼattendait pour lʼannée <?= $annee;?> dʼun point de vue amoureux ? Un heureux événement, la rencontre avec le grand amour, un mariage, une rupture… Tous ces éléments peuvent être anticipés en consultant mon horoscope <?= $annee;?> poissons. La vie amoureuse fait partie des choses qui permettent de sʼépanouir au quotidien. Pourquoi ne pas vous offrir un bon coup de pouce en lisant votre horoscope ? Ce dernier se fera discret mais efficace et vous aidera à anticiper votre avenir sentimental. Vous êtes une femme et vous vous demandez si vous allez enfin tomber enceinte ? Votre horoscope <?= $annee;?> poissons pour femme vous est entièrement consacré. Ayez confiance dans les planètes, elles vous guideront pendant les moments difficiles et vous aideront à prendre les bonnes décisions.</p><br/>
                                    <p>Vous êtes un homme ? Lʼhoroscope <?= $annee;?> poissons pour homme vous aidera à mieux comprendre votre femme. Alors que certaines personnes se verront annoncer quʼelles rencontreront lʼamour en <?= $annee;?>, dʼautres trouveront le moyen dʼentretenir leur couple sainement et simplement. Votre horoscope <?= $annee;?> poissons est là pour veiller sur vos relations affectives, il se fera le garant de votre accomplissement sentimental.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> poissons pour une vie professionnelle épanouie</h2>
                                    <p>Vous êtes poissons et vous vous demandez comment faire évoluer votre carrière dans le bon sens ? Votre horoscope <?= $annee;?> poissons pour homme vous aidera à atteindre vos objectifs. Vous nʼavez quʼà appliquer les conseils prodigués à la lecture de votre horoscope pour accéder à lʼépanouissement de votre vie professionnelle. Spécialement destiné à la gente féminine, lʼhoroscope <?= $annee;?> poissons pour femme aidera lui aussi à booster votre carrière dʼun point de vue féminin. </p><br/>
                                    <p>Lʼhoroscope est aussi là pour vous accompagner dans votre vie financière. Il vous aidera à anticiper les éventuelles rentrées et pertes dʼargent. Vais-je enfin avoir une promotion ? Est-ce le moment pour moi de jouer à la loterie ? Votre horoscope <?= $annee;?> poissons gratuit vous aidera à mieux gérer vos finances et vous guidera vers les meilleures façons dʼinvestir en fonction de la position des planètes. Cʼest maintenant à vous de jouer !</p>
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