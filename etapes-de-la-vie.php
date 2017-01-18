<?php
    $cn_url = 'etapes-de-la-vie';

    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite#6', 'compatibilite-amoureuse-feminine#6', 
                 'horoscope-de-la-semaine#4', 'horoscope-annee#7',
                 'tarot-quotidien#8', 'tarot-hebdomadaire#7',
                 'tarot-mensuel#7', 'tarot-de-couple#7' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
	<title>Étapes de la vie : numérologie avec Myastro</title>
	<meta name="description" content="Grâce aux conseils de Myastro, vous pourrez facilement surmonter toutes les étapes de votre vie au moyen des conseils qui vous sont donnés après une étude de votre numérologie." />

	<?php include('include/header_inc.php');?>

	<div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Étapes de la vie</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Grâce aux conseils de Myastro, vous pourrez facilement surmonter toutes les étapes de votre vie au moyen des conseils qui vous sont donnés après une étude de votre numérologie.</p>
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
                            <!-- Choix numéro -->
                            <?php include('include/content-choix-numero.php');?> :
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