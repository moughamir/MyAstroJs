<?php
    include('lib.php');

    $xml1 = read_numerologie('3', 3 ,'f');
    $ac_result = $xml1['desc'];
    
    foreach( $xml1['desc'] as $s_cle => $s_value ){
        $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
        $ac_result[$s_cle] = $s_value;
    }

    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite#6', 'compatibilite-amoureuse-feminine#6', 
                 'horoscope-de-la-semaine#4', 'horoscope-annee#7',
                 'tarot-quotidien#8', 'tarot-de-couple#7' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Vos étapes de la vie, Chiffre 3 | Myastro</title>
	<meta name="description" content="Chiffre 3 : Grâce aux conseils de Myastro, vous pourrez facilement surmonter toutes les étapes de votre vie au moyen des conseils qui vous sont donnés après une étude de votre numérologie." />

        <?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Étapes de la vie : Chiffre 3</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Chiffre 3 : Grâce aux conseils de Myastro, vous pourrez facilement surmonter toutes les étapes de votre vie au moyen des conseils qui vous sont donnés après une étude de votre numérologie.</p>
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
                                    <h4>Votre Étapes de la vie gratuite : Chiffre 3</h4>
                                </div>
                                <img src="images_voyance/chiffres/3.jpg" class="signe" alt="Chiffre 3" />
                                <!-- Résultat compatibilité -->
                                <?php include('include/content-result-accordion.php');?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php');?>
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

        <?php include('include/footer_inc_etapes_vie.php');?>