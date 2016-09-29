<?php
    $source = 'horoscope-du-mois-taureau';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_taureau.xml');
    $ac_result = array();
    $nb_item = count($xml1['desc']);
    $i = 1;
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($i == $nb_item){ // dernier élément
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
        $i++;
    }
    
    $ipg_title = 'HOROSCOPE DU MOIS TAUREAU';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes-horoscope', 'compatibilite-amoureuse-pour-les-hommes-horoscope'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope du mois taureau : Découvrez votre avenir</title>
	<meta name="description" content="Signe Taureau : L’horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope du mois taureau : pour foncer dans la vie</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Plus que jamais, songer à l’avenir est souvent synonyme de doutes, d’inquiétudes voire de peur. Pour dissiper toutes les incertitudes qui planent sur l’existence, l’horoscope du mois taureau permettra de prendre connaissance de ce que réserve la vie et de s’y préparer au mieux.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>
							
                        <!-- main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT : Taureau</h2>
                                    <img src="images_voyance/signes/taureau.png" class="signe" alt="Symbole astrologique Taureau" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Combattre l’incertitude en découvrant votre horoscope</h2>
                                    <p>En l’espace de seulement quelques clics, il est possible de découvrir en avant-première ce que réserve le mois à venir. Découvrir son horoscope du mois taureau, c’est incontestablement s’offrir une chance supplémentaire et non des moindres de prendre le contrôle de son destin et d’influer sur ce dernier. Sans avoir à sortir sa carte bancaire, les meilleurs médiums proposent leurs services et déploieront tout leur don pour offrir les prédictions les plus précises sur l’avenir de chacun.</p><br/>
                                    <p>L’art de la divination se pratique de différentes manières avec à chaque fois une qualité de détails optimale. Par sms, par téléphone ou par internet, chaque personne du signe du taureau peut prendre connaissance de ce que lui réserve le futur dans les différents domaines de son existence. Pour mieux orienter ses décisions et faire en sorte que ses rêves deviennent réels, découvrir son horoscope du mois taureau est une mesure de bon sens et aux répercussions positives incontestables.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Horoscope du mois taureau : quand l’avenir s’illumine</h2>
                                    <p>Recherche de l’amour de sa vie, espérance de vie de son couple, réussite professionnelle, état de santé et bien-être de ses proches, etc. Les motifs d’inquiétudes ou de curiosité à l’égard de son avenir ne manquent pas. La possibilité de découvrir chaque mois son horoscope du signe du taureau est une occasion unique de prendre un train d’avance sur sa vie.  En plus de l’horoscope, la possibilité est offerte de bénéficier d’une séance de tarot, chaque jour, chaque semaine ou chaque mois. Avec une telle offre mise à la disposition de tous, il ne sera plus envisageable de voir le futur comme un grand brouillard inquiétant. Pour choisir en son âme et conscience, lire et s’imprégner de son horoscope portera ses fruits.</p><br/>
                                    <p>L’horoscope du mois des taureaux est une formidable technique pour entrevoir avec précision quels seront les grands rendez-vous de sa vie et augmenter les chances pour que les attentes les plus folles se concrétisent. Pas un seul aspect de votre vie privée et professionnelle n’échappera aux regards extralucides des voyants du site. Les personnes du signe du taureau disposent ainsi de toutes les armes nécessaires pour aborder l’avenir sans la moindre peur et de la façon la plus sereine possible.</p>     
                                </div>
                            </div>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php'); ?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_horoscope_mois.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   

