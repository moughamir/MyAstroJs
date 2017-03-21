<?php
    $cs_url = 'compatibilite-amoureuse-masculine';
    $ipg_title = 'Compatibilité amoureuse masculine';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes#10', 'compatibilite-amoureuse-pour-les-hommes#7', 
                 'horoscope-de-la-semaine#1', 'horoscope-annee#2',
                 'tarot-quotidien#10', 'tarot-hebdomadaire#4',
                 'tarot-mensuel#4', 'tarot-de-couple#4' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Compatibilité amoureuse masculine : Allez-vous bien ensemble ?</title>
        <meta name="description" content="Les astres, leur alignement et leur position pourront vous indiquer si cette personne que vous chérissez est bien faite pour vous et si la relation doit être entretenue." />
        
        <?php include('include/header_inc.php');?>
        
        <div class="container-fluid">
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Compatibilité amoureuse masculine</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Les astres, leur alignement et leur position pourront vous indiquer si cette personne que vous chérissez est bien faite pour vous et si la relation doit être entretenue.</p>
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

        <?php include('include/footer_inc_compatibilite_amoureuse_masculine.php');?>