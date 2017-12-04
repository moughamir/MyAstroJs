<?php
    include('lib.php');

    $xml1 = read_numerologie('1', 1 ,'f');
    $ac_result = $xml1['desc'];

    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
                 'votre-personnalite-astrologique', 'portrait-astrologique-feminin'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Votre Compatibilité amoureuse pour les femmes : Chiffre 1 | Myastro</title>
        <meta name="description" content="Chiffre 1 : Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens." />

        <?php include('include/header_inc.php');?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content"> -
                    <header>
                        <h1 itemprop="headline">Compatibilité amoureuse pour les femmes : Chiffre 1</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens.</p>
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
                                <img src="images_voyance/chiffres/1.jpg" class="signe" alt="Chiffre 1" />
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

        <?php include('include/footer_inc_compatibilite_amoureuse_femmes.php');?>