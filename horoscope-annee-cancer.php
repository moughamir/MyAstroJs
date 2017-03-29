<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_'.$annee.'_cancer.xml');
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
        <title>Horoscope <?= $annee;?> Cancer : Est-ce une bonne année pour vous ? | Myastro</title>
	<meta name="description" content="Signe Cancer : Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope <?= $annee;?> Cancer</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Que vous réserve lʼannée <?= $annee;?> en terme de réussite professionnelle, de santé et dʼamour ? Pour le savoir et pouvoir ainsi devenir le maître de votre existence, la voyance est une méthode des plus efficace pour ne plus jamais craindre le futur.</p>
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
                                    <h4>Votre horoscope <?= $annee;?> Gratuit : Cancer</h4>
                                </div>
                                <img src="images_voyance/signes/cancer.png" class="signe" alt="Signe Cancer" />
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope <?= $annee;?> Cancer en quelques clics seulement</h2>
                                    <p>Pour vous donner toutes les chances de faire de lʼannée <?= $annee;?> celle de votre consécration à tous les niveaux, mieux vaut se tourner vers des experts de la voyance pour entrevoir toutes les bonnes choses qui vont arriver dans votre vie. Différents médiums aux compétences reconnues sauront vous aider à y voir plus clair et à faire les bons choix pour la suite. Très à lʼécoute et disposant de la capacité de prédire votre avenir, ils seront dʼune aide appréciable pour vous.</p><br/>
                                    <p>Pour profiter pleinement des visions des médiums du site, découvrez lʼhoroscope <?= $annee;?> cancer pour homme ou pour femme. Il sera possible, sans carte bancaire, de ne plus envisager lʼannée qui sʼannonce avec appréhension. En seulement quelques minutes, vous aurez toutes les informations quʼil vous manque pour orienter votre existence conformément à vos souhaits. Si le futur fait peur en règle générale, nos voyants sont à votre entière disposition pour lever toutes les zones dʼombre de votre vie et vous aider à prendre les bonnes décisions et ce, quelque soit le domaine abordé.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Horoscope <?= $annee;?> Cancer : Quʼest-ce qui vous attend en <?= $annee;?> ?</h2>
                                    <p>Parallèlement aux visions du médium concernant votre personne, vous pouvez également profiter dʼun horoscope <?= $annee;?> cancer gratuit. Lire lʼhoroscope <?= $annee;?> cancer pour femme et pour homme vous fournira de précieuses indications sur les démarches à entreprendre, les personnes à qui accorder votre attention, etc. Lʼhoroscope <?= $annee;?> cancer pour homme et pour femme vous donnera des conseils clairs et précis pour toute lʼannée à venir. Amour, travail, santé, etc. Pas un seul thème qui vous est cher ne sera laissé de côté et pour chaque question que vous vous posez vous aurez un éclairage salutaire. Prendre connaissance de votre horoscope <?= $annee;?> cancer pour femme et pour homme vous aidera à avancer.</p><br/>
                                    <p>Votre horoscope <?= $annee;?> pour femme ou homme répondra à toutes les questions que vous vous posez sur votre avenir. Vous êtes en quête dʼharmonie amoureuse, vous recherchez des personnes vous correspondant selon leur signe, vous êtes au bon endroit pour y voir plus clair. Vous pouvez bénéficier dʼun tarot quotidien, hebdomadaire ou mensuel et même bénéficier dʼun tarot entièrement consacré à votre couple. Il est possible également de profiter dʼune voyance par téléphone et même par sms. Avec autant de vecteurs pour entrevoir ce que lʼannée <?= $annee;?> vous réserve, vous pourrez aborder cette dernière sans la moindre inquiétude.</p>
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