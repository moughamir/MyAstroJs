<?php
    $source = 'compatibilite-amoureuse-pf';
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
                                        <?php for($i=1;$i<=12;$i++){ ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
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
                            <div class="cat-widget-title">
                                <h3><?= str_replace('-', ' ', $path);?></h3>
                            </div>
                            <div class="cat-widget-content">
                                <div class="row-fluid cat-horiz">
                                    <div class="cat-horiz-divider"></div>
                                    <div class="related-posts clearfix">
                                        <div class="row-fluid modern-items-list">
                                            <div id="h_cat_slider1" class="flexslider">
                                                <ul class="slides">
                                                    <li>
                                                        <ul class="items left clearfix">
                                                            <li class="row-fluid">
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/astrologie-gratuite.jpg" class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Astrologie gratuite</h5><br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'astrologie gratuite serait pour vous un moyen fiable et durable pour vous procurer des informations susceptibles d'influencer votre avenir. Sachez ce que vous réservent les astres pour votre futur et prenez votre vie en main.</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/astrologie-gratuite" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <div class="span6"><article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/compatibilite-amoureuse-feminine.jpg"  class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Compatibilité amoureuse féminine</h5><br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Est-ce que l'avenir avec l'homme que vous convoitez est possible et couronné de succès ou est- un échec prévu d'avance? Grâce à Myastro, bénéficiez de toutes les informations dont vous avez besoin pour savoir si l'investissement émotionnel est nécessaire pour cette relation</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-feminine" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </li>
                                                            <li class="row-fluid">
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/horoscope-de-la-semaine.jpg"  class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Découvrez votre horoscope de la semaine</h5><br>
                                                                                    <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Votre horoscope de la semaine gratuit vous permet d'éviter toutes les surprises, et surtout les obstacles, que la vie vous réserve Faites appel à de réels professionnels et ne vous laissez pas guider par le hasard.</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/horoscope-2015.png" class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Votre horoscope 2016</h5><br>
                                                                                    <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Votre horoscope 2014 gratuit vous permettra de terminer l'année en beauté. Anticipez les obstacles, prenez les bonnes décisions et faites les bons choix grâce aux recommandations fournies par votre horoscope 2013</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/horoscope-2016" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </li>
                                                            <li class="row-fluid">
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/tarot-quotidien.jpg" class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">TAROT QUOTIDIEN</h5><br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Aucune journée ne se ressemble et c'est la raison pour laquelle Myastro vous propose une lecture de votre horoscope quotidien gratuitement rapide et efficace. Afin pour vous fournir toutes les réponses dont vous avez besoin problèmes dont vous avez besoin de manière instantannée.</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/tarot-quotidien" class="more" ></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/tarot-hebdomadaire.jpg"  class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">TAROT HEBDOMADAIRE</h5><br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Depuis quelques mois, vous n'arrivez pas à trouver de réponses à vos questions Vous souhaitez savoir ce qui se profile dans votre avenir et ne savez oas dans quelle direction vous tourner. Faites confiance à Myastro et bénéficiez de solutions durables</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/tarot-hebdomadaire" class="more" ></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </li>
                                                            <li class="row-fluid">
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/tarot-mensuel.jpg"  class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">TAROT MENSUEL</h5><br>
                                                                                    <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Les mois n'ont rien à voir les uns avec les autres. S'il vous est indispensable de savoir comment se prépare le votre, n'hésitez pas à faire appel à Myastro pour obtenir toutes les réponses à vos questions et appréhender votre mois dans les meilleures conditions.</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/tarot-mensuel" class="more" ></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/tarot-couple.jpg" class="post-img" />
                                                                            <div class="description visible-part">
                                                                                <h5 class="title">TAROT COUPLE</h5><br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Le tarot de couple gratuit vous donnera la possibilité de vous postionner afin de savoir si celui que vous convoitez est fait pour vous ou s'il est indispensable d'arrêter des investissements dans cette relation de manière immédiate.</h6>
                                                                            </div>
                                                                            <a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" class="more" ></a>
                                                                        </div>
                                                                    </article>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php');?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('include/footer_inc_compatibilite_amoureuse_femmes.php'); ?>

<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
