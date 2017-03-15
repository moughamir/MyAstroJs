<?php
    $annee = date('Y');
    
    ini_set('max_execution_time', 0);
    include('lib.php');

    $xml1 = read_numerologie('4', 0 ,'h');
    $ac_result = array();
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        if ($s_cle === 'argent'){
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
        } else {
            $s_titre = ucfirst($s_cle);
        }
        $ac_result[$s_titre] = $s_value;
    }
    
    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
                 'votre-personnalite-astrologique', 'portrait-astrologique-feminin',
                 'tarot-quotidien', 'tarot-hebdomadaire',
                 'tarot-mensuel', 'tarot-de-couple'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Votre numéroscope <?= $annee;?> Chiffre 4 | Myastro</title>
	<meta name="description" content="Chiffre 4 : Votre numéroscope pour <?= $annee;?> vous permettra de mieux cerner lʼannée et les comportements que vous devrez adopter au cours de celle-ci. Demandez le votre à Myastro." />
            
        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Numéroscope <?= $annee;?> Chiffre 4</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Chiffre 4 : Votre numéroscope pour <?= $annee;?> vous permettra de mieux cerner lʼannée et les comportements que vous devrez adopter au cours de celle-ci. Demandez le votre à Myastro.</p>
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
                                    <h4>Votre Numéroscope <?= $annee;?> gratuit : Chiffre 4</h4>
                                </div>
                                <img src="images_voyance/chiffres/4.jpg" class="signe" alt="Chiffre 4" />
                                <div class="widget-content clearfix thumbnails">
                                    <!-- Résultat horoscope -->
                                    <?php include('include/content-result-accordion.php');?>
                                    <!-- Partages -->
                                    <?php include('include/content-article-social-share.php');?>
                                </div>
                            </aside>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid_v2.php');?>
                            </section>
                        </div>
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php');?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_numeroscope.php');?>