<?php
    include('lib.php');

    $xml1 = read_numerologie('6', 1 ,'h');
    $ac_result = $xml1['desc'];

    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-masculine', 
                 'horoscope-de-la-semaine#3', 'horoscope-annee#2' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Votre Compatibilité amoureuse pour les hommes : Chiffre 6 | Myastro</title>
	<meta name="description" content="Chiffre 6 : Calculez votre compatibilité amoureuse avec votre compagne grâce aux expertises de Myastro et sachez si votre relation peut être durable ou non." />

        <?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Compatibilité amoureuse pour les hommes : Chiffre 6</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Chiffre 6 : Calculez votre compatibilité amoureuse avec votre compagne grâce aux expertises de Myastro et sachez si votre relation peut être durable ou non.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-secondaire.php'); ?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <img src="images_voyance/chiffres/1.jpg" class="signe" alt="Chiffre 6" />
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
            
        <?php include('include/footer_inc_compatibilite_amoureuse_hommes.php');?>