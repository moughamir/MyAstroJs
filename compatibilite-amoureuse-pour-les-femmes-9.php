<?php
include('lib.php');

$xml1 = read_numerologie('9', 1 ,'f');
$xml1['description']=utf8_encode_array($xml1['description']);
$f = array();

foreach($xml1['description'] as $s_cle => $s_value){
    if($s_cle === 'Femme 9 - Homme 1'){
        $f['1'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 2'){
        $f['2'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 3'){
        $f['3'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 4'){
        $f['4'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 5'){
        $f['5'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 6'){
        $f['6'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 7'){
        $f['7'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 8'){
        $f['8'] = $s_value;
    } elseif($s_cle === 'Femme 9 - Homme 9'){
        $f['9'] = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
    }
}

$ipg_title = 'Numérologie gratuite';
$ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
             'votre-personnalite-astrologique', 'portrait-astrologique-feminin',
             'tarot-quotidien', 'tarot-hebdomadaire',
             'tarot-mensuel', 'tarot-de-couple'];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Votre Compatibilité amoureuse pour les femmes chiffre 9 | Myastro</title>
    <meta name="description" content="Chiffre 9 : Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens." />

    <?php include('include/header_inc.php'); ?>

    <div class="container-fluid" itemscope>
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <!--div itemscope >
                        <ul class="breadcrumb" itemprop="breadcrumb">
                            <li><h4 class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></h4></li>
                            <li><a href="http://<?= ROOT_URL ?>/numerologie-gratuite">Numérologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i></li>
                            <li><a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" >Compatibilité amoureuse pour les femmes</a></li><i class="icon-caret-right icon-fixed-width"></i></li>
                        <li>Compatibilité amoureuse pour les femmes chiffre 9</h4></li>
                        </ul>
                    </div-->
                    <h1 itemprop="headline">Compatibilité amoureuse pour les femmes chiffre 9</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                            <h5 itemprop="headline">Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens.</h5>
                        </div>
                    </div>
                </header>
                <span class="clearfix"></span>
                
                <!--  ************************ contenu ****************************  -->
                <div class="row-fluid">
                    <!-- Right sidebar -->
                    <?php include('include/bloc-droit-secondaire.php'); ?>
                    
                    <!-- main content -->
                    <div class="span6 main-content widget">
                        <div class="widget-title">
                            <img src="images_voyance/chiffres/9.jpg" />
                        </div>
                        <div class="widget-content clearfix">
                            <div class="modern-accordion-container">
                                <div class="accordion" id="accordion1">
                                    <?php for($i=1;$i<=9;$i++){ ?>
                                    <div class="accordion-group">
                                        <div class="accordion-heading">
                                            <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1" href="#collapse<?= $i ?>">
                                                Femme 9 - Homme <?= $i ?>
                                                <i class="icon-angle-down pull-right"></i>
                                            </a>
                                        </div>
                                        <div id="collapse<?= $i ?>" class="accordion-body collapse">
                                            <div class="accordion-inner">
                                                <p><?= $f[$i] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <?php include('include/content-article-social-share.php'); ?>
                        </div>

                        <!-- Horizontal Categories -->
                        <section class="cat-widget h-cat-1">
                            <?php include('include/content-internal-pub-grid.php'); ?>
                        </section>
                    </div>
                    
                    <!-- Left sidebar -->
                    <?php include('include/bloc-gauche-secondaire.php'); ?>
                </div>
            </div><!-- end .article-content -->
        </div>
    </div>
    
    <?php include('include/footer_inc_compatibilite_amoureuse_femmes.php'); ?>