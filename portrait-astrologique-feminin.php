<?php
    $source = 'portrait-astrologique-f';
    $cs_url = 'portrait-astrologique-feminin';

    $ipg_title = 'Portrait astrologique féminin';
    $ipg_pubs = [
        'compatibilite-amoureuse-pour-les-femmes-portraitf', 'compatibilite-amoureuse-pour-les-hommes-portraitf',
        'horoscope-de-la-semaine-portraitf', 'horoscope-annee-portraitf',
        'tarot-quotidien-portrait-feminin', 'tarot-hebdomadaire-portrait-feminin',
        'tarot-mensuel-portrait-feminin', 'tarot-de-couple-portrait-feminin'
    ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portrait astrologique féminin : Thème astrologique avec Myastro</title>
        <meta name="description" content="Grâce à Myastro, définissez avec précision votre profil astrologique et tirez-en les conclusions qui s'imposent. Prenez ensuite les bonnes décisions en toute tranquilité." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
        
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Portrait astrologique féminin</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <h5 itemprop="headline">Grâce à Myastro, définissez avec précision votre profil astrologique et tirez-en les conclusions qui s’imposent. Prenez ensuite les bonnes décisions en toute tranquilité.</h5>
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
                        <?php include('include/bloc-gauche-secondaire-2.php');?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_portrait_astrologique_feminin.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>