<?php
    $source = 'horoscope-du-jour-belier';

    $ipg_title = 'HOROSCOPE BÉLIER';
    $ipg_pubs = [
        'compatibilite-amoureuse-pour-les-femmes-belier', 'compatibilite-amoureuse-pour-les-hommes-belier',
        'votre-personnalite-astrologique-belier', 'portrait-astrologique-feminin-belier',
        'tarot-quotidien-belier', 'tarot-hebdomadaire',
        'tarot-mensuel-belier', 'tarot-de-couple-belier'
    ];
    
    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_belier.xml');
    $ac_result = array();
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($s_cle === 'clin_d\'oeil'){
            $s_cle = 'clin_d’oeil';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope du jour Bélier : Comment appréhender votre journée ? - Myastro</title>
	<meta name="description" content="Signe Bélier :Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope du jour Bélier</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <h5 itemprop="headline">Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée.</h5>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Bélier</h4>
                                    <img src="images_voyance/signes/belier.png" class="signe" title="Symbole astrologique Bélier" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
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
        
        <?php include('include/footer_inc_horoscope_jour.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>   

