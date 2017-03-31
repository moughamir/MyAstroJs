<?php
    $source = 'portrait-astrologique-m';
    $cs_url = 'portrait-astrologique-masculin';
    
    $ipg_title = 'Portrait astrologique masculin';
    $ipg_pubs = [
        'compatibilite-amoureuse-pour-les-femmes-portraitm', 'compatibilite-amoureuse-pour-les-hommes-portraitm',
        'horoscope-de-la-semaine-portraitm', 'horoscope-annee-portraitm',
        'tarot-quotidien-portrait-masculin', 'tarot-hebdomadaire-portrait-masculin',
        'tarot-mensuel-portrait-feminin', 'tarot-de-couple-portrait-feminin'
    ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portrait astrologique masculin : Faites le point avec Myastro</title>
        <meta name="description" content="Grâce à Myastro, définissez avec précision votre profil astrologique et tirez-en les conclusions qui s'imposent. Prenez ensuite les bonnes décisions en toute tranquilité." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Portrait astrologique masculin</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Grâce à Myastro et votre horoscope au masculin, définissez avec précision votre profil astrologique et tirez-en les conclusions qui s’imposent. Prenez ensuite les bonnes décisions en toute tranquilité.</p>
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
                            <!-- choix signe astro -->
                            <?php include('include/content-choix-signe.php'); ?>
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
            
        <?php include('include/footer_inc_portrait_astrologique_masculin.php'); ?>
    
  <script src="js/formValidator.js"></script>
  <script src="js/infoBulle.js"></script>


