<?php
    $cn_url = 'compatibilite-amoureuse-pour-les-hommes';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-masculine', 
                 'horoscope-de-la-semaine#3', 'horoscope-annee#2',
                 'tarot-quotidien#7', 'tarot-hebdomadaire#6',
                 'tarot-mensuel#6', 'tarot-de-couple#6' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
	<title>Compatibilité amoureuse pour les Hommes | Myastro</title>
	<meta name="description" content="Calculez votre compatibilité amoureuse avec votre compagne grâce aux expertises de Myastro et sachez si votre relation peut être durable ou non." />

	<?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Compatibilité amoureuse pour les hommes</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Calculez votre compatibilité amoureuse avec votre compagne grâce aux expertises de Myastro et sachez si votre relation peut être durable ou non.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire.php');?>
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <!-- Choix numéro -->
                            <?php include('include/content-choix-numero.php');?>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid_v2.php');?>
                            </section>
                        </div>
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire.php'); ?>
                    </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
                </div>
            </div>
        </div>

        <?php include('include/footer_inc_compatibilite_amoureuse_hommes.php');?>