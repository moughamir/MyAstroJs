<?php
    $cs_url = 'compatibilite-amoureuse-feminine';
    $ipg_title = 'Compatibilité amoureuse féminine';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes#9', 'compatibilite-amoureuse-pour-les-hommes#9', 
                 'horoscope-de-la-semaine#5', 'horoscope-annee#8',
                 'tarot-quotidien#9', 'tarot-hebdomadaire#8',
                 'tarot-mensuel#8', 'tarot-de-couple#8' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
    <title>Compatibilité amoureuse féminine : Êtes vous faits l’un pour l’autre ?</title>
    <meta name="description" content="Myastro vous permet de savoir si cette personne que vous affectionnez tant est faite pour vous. Les astres vous le diront et vous pourrez ensuite prendre votre décision." />
    
    <?php include('include/header_inc.php');?>
    
    <div class="container-fluid" itemscope>
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <h1 itemprop="headline">Compatibilité amoureuse féminine</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                            <p itemprop="headline">Myastro vous permet de savoir si cette personne que vous affectionnez tant est faite pour vous. Les astres vous le diront et vous pourrez ensuite prendre votre décision.</p>
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
                        <!-- Choix signe astro -->
                        <?php include('include/content-choix-signe.php');?>
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

    <?php include('include/footer_inc_compatibilite_amoureuse_feminine.php');?>