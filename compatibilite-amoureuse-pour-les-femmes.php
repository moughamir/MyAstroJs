<?php
    $source = 'compatibilite-amoureuse-pf';
    $cn_url = 'compatibilite-amoureuse-pour-les-femmes';
    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
                 'horoscope-de-la-semaine', 'horoscope-annee',
                 'tarot-quotidien', 'tarot-hebdomadaire',
                 'tarot-mensuel', 'tarot-de-couple' ];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Compatibilité Amoureuse Numérologie : Chiffres et amour | Myastro</title>
    <meta name="description" content="Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens." />

    <link rel="stylesheet" href="css/infobulle.css" />
    <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />  
    <style>
        .widget .form-part { background-color: #eb2692;}
        .widget #form-w .btn_button { background-color: #1871b9;}
    </style>

    <?php include('include/header_inc.php');?>

    <div class="container-fluid" itemscope>
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <h1 itemprop="headline">Etudiez votre comptabilité amoureuse en numérologie avec MyAstro</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                            <p itemprop="headline">Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens. Que ce soit la numérologie de compatibilité ou compatibilité numérologie amoureuse, ou encore la compatibilité amoureuse numérologie, toutes ces numérologies sont entièrement fiables. Vous pourrez enfin entrevoir une numérologie amour sans que votre compatibilité numérologique soit touchée. Lʼessentiel est où tout ce trouve la numérologie compatibilité amoureuse.</p>
                        </div>
                    </div>
                </header>
                <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                <div class="row-fluid">
                    <!-- Right sidebar -->
                    <?php include('include/bloc-droit-secondaire-2.php');?>
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
                    <?php include('include/bloc-gauche-secondaire-2.php');?>
                </div>
<!-- ----------------------------- FIN CONTENU ----------------------------- -->
            </div>
        </div>
    </div>

<?php include('include/footer_inc_compatibilite_amoureuse_femmes.php');?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>