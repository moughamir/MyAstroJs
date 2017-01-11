<?php
    $source = 'personnalite-numerologique';
    $cn_url = 'personnalite-numerologique';

    $ipg_title = 'Personnalité numérologique';
    $ipg_pubs = [
        'astrologie-gratuite-personnalite', 'compatibilite-amoureuse-feminine-personnalite',
        'horoscope-du-mois-personnalite', 'horoscope-annee-numerologie',
        'tarot-quotidien', 'tarot-hebdomadaire',
        'tarot-mensuel', 'tarot-de-couple'
    ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
	<title>Personnalité Numérologique : Apprenez à vous connaître</title>
	<meta name="description" content="Myastro vous permet de dresser, en fonction de chiffres et de lettres qui vous sont propres, votre profil numérologique. Ceci vous permet de mieux vous connaitre pour appréhender les situations de la vie." />

	<link rel="stylesheet" href="css/infobulle.css" />
	<link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

	<?php include('include/header_inc.php');?>

	<div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Personnalité Numérologique</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Myastro vous permet de dresser, en fonction de chiffres et de lettres qui vous sont propres, votre profil numérologique. Ceci vous permet de mieux vous connaitre pour appréhender les situations de la vie.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php');?>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <!-- Choix numéro -->
                            <?php include('include/content-choix-numero.php');?>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php');?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php');?>
                    </div>
                </div>
            </div>
        </div>

    <?php include('include/footer_inc_personnalite_numerologique.php');?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>