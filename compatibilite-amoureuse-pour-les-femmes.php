<?php
    $source = 'compatibilite-amoureuse-pf';
    $ipg_title = 'Numérologie gratuite';
    $ipg_pubs = ['astrologie-gratuite', 'compatibilite-amoureuse-feminine', 
                 'horoscope-de-la-semaine', 'horoscope-annee',
                 'tarot-quotidien', 'tarot-hebdomadaire',
                 'tarot-mensuel', 'tarot-de-couple' ];
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Compatibilité amoureuse numérologie : chiffres et amour | Myastro</title>
    
    <meta name="description" content="Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens." />
    
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
    <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />  
    <style>
        .widget .form-part {
            background-color:#eb2692;
        }
        .widget #form-w .btn_button {
            background-color: #1871b9;
        }
    </style>
    
    <?php include('include/header_inc.php'); ?>
    
    <div class="container-fluid" itemscope >
        <!-- Main Content -->
        <div class="row-fluid">
            <div class="article-content">
                <header>
                    <h1 itemprop="headline">Etudiez votre comptabilité amoureuse en numérologie avec MyAstro</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                            <h5 itemprop="headline">Avec Myastro, étudiez au moyen de la numérologie la compatibilité amoureuse avec votre partenaire et sachez si vous avez choisi le bon en fonction de vos chiffres et des siens. Que ce soit la numerologie compatibilité ou compatibilite numerologie amoureuse, ou encore la compatibilité amoureuse numérologie, toutes ces numerologies sont entièrement fiables. Vous pourrez enfin entrevoir une numerologie amour sans que votre compatibilité numérologique soit touchée. l'essentiel est ou tout ce trouve la numerologie compatibilité amoureuse.</h5>
                        </div>
                    </div>
                </header>
                <span class="clearfix"></span>
                <!--  ************************ ici ****************************  -->
                <div class="row-fluid">
                    <!-- Right sidebar -->
                    <?php include('include/bloc-droit-secondaire-2.php'); ?>
                    <!-- Main content -->
                    <div class="span6 main-content">
                        <aside class="widget w-adv">
                            <div class="widget-title">
                                <h4>MA DATE DE NAISSANCE</h4>
                            </div>
                            <form method="POST" action="numero.php?cat=compatibilite-amoureuse-pour-les-femmes">
                                <div class="widget-content clearfix">
                                    <select style="width: 20%;" name="date_naissance_j" >
                                        <option selected="selected" value="Jour">Jour</option>
                                        <?php for($i=1;$i<=31;$i++){ ?>
                                        <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                        <?php } ?>
                                    </select>
                                    <select style="width: 20%;" name="date_naissance_m">
                                        <option selected="selected" value="Mois">Mois</option>
                                        <option value="1">Janvier</option>
                                        <option value="2">Février</option>
                                        <option value="3">Mars</option>
                                        <option value="4">Avril</option>
                                        <option value="5">Mai</option>
                                        <option value="6">Juin</option>
                                        <option value="7">Juillet</option>
                                        <option value="8">Août</option>
                                        <option value="9">Septembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Décembre</option>
                                    </select>
                                    <select style="width: 30%;" name="date_naissance_a">
                                        <option selected="selected" value="Année">Année</option>
                                        <?php for($i=date('Y')-18;$i>=1910;$i--){ ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                    <div style="margin-top:0px;text-align:center;height:80px;">
                                        <input type="submit" value="Ma numérologie" name="valider" class="button"/>
                                    </div>
                                </div>
                            </form>
                        </aside>
                        <aside class="widget w-pictures">
                            <div class="widget-title">
                                <h4>QUEL EST VOTRE CHIFFRE PRÉFÉRÉ ?</h4>
                            </div>
                            <div class="widget-content clearfix thumbnails">
                                <ul class="posts-in-images clearfix">
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="1" title="1">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-1">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/1.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="2" title="2">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-2">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/2.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="3" title="3">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-3">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/3.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="4" title="4">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-4">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/4.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="5" title="5">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-5">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/5.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="6" title="6">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-6">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/6.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="7" title="7">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-7">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/7.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="8" title="8">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-8">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/8.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                    <li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="9" title="9">
                                        <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes-9">
                                            <div class="thumb-effect">
                                                <div class="mask"></div>
                                                <img src="images_voyance/chiffres/9.jpg" />
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </aside>
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

<?php include('include/footer_inc_compatibilite_amoureuse_femmes.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
