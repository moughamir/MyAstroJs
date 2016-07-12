<?php
session_start();
session_unset();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Tarot quotidien : votre programme de la journée dévoilé</title>
    <meta name="description" content="Myastro vous permet, grâce à un tirage de cartes de Tarot quotidien, de pouvoir aborder vos journées sans inquiétudes. Les cartes vous aideront à prendre les bonnes décisions." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
    <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />

    <?php include('include/header_sans_nav_inc.php'); ?>

    <div class="container-fluid relative-container" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

            <div class="article-content">
                <header>
                    <div class="cat-widget-title">
                        <h1 itemprop="headline">Tarot du jour en amour : la tendance de la journée</h1>
                    </div>

                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>

                        <div class="share-icons">
                            <p itemprop="headline">Myastro vous permet, grâce à un tirage de cartes de Tarot quotidien, de pouvoir aborder vos journées sans inquiétudes. Les cartes vous aideront à prendre les bonnes décisions.</p>
                        </div>

                    </div>
                </br>                         
                </header>

                <span class="clearfix"></span>

                <div class="row-fluid">
                     <!-- Right sidebar -->
                     <?php include('include/bloc-droit-secondaire-2.php'); ?>	

                     <!-- main content -->
                    <div class="span6 main-content">

                        <!-- Slider -->
                        <section class="pic-slider">
                            <h2 class="hidden">Slider images</h2>

                            <div class="wrapper">
                                <section class="cat-widget h-cat-1"> <div class="cat-widget-title">
                                    <h2 class="h4">CONSULTER VOTRE TAROT QUOTIDIEN GRATUIT</h2>
                                </section>
                            </div>
                            <!-- Début Iframe tirage tarot -->

                            <script language="javascript"><!--
                                function check_prenom() {
                                     if (document.tarot.prenom.value == '')
                                     {
                                      alert("Veuillez entrer votre prénom.")
                                      document.tarot.prenom.focus();
                                      return false;
                                      }
                                  }
                                    //-->
                            </script>
                            <form name="tarot" action="afficher_tarot_quotidien.php" method="post" onsubmit="return check_prenom()">
                                <br>
                                <label for="date">Votre prénom&nbsp;</label>
                                <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40><br>
                                <!--<label for="date">Votre signe &nbsp;</label>
                                <select name="signe">
                                    <option    value="1">Bélier
                                    <option    value="2">Taureau
                                    <option    value="3">Gémeaux
                                    <option    value="4">Cancer
                                    <option    value="5">Lion
                                    <option    value="6">Vierge
                                    <option    value="7">Balance
                                    <option    value="8">Scorpion
                                    <option    value="9">Sagittaire
                                    <option   value="10">Capricorne
                                    <option   value="11">Verseau
                                    <option   value="12">Poissons
                                </select>-->

                                <div style="margin-top:10px;text-align:center;height:60px;">
                                    <input type="submit" value="Commencer mon Tarot" name="Valider" class="button">
                                </div>
                            </form>

                            <script language="javascript"><!--
                                document.tarot.prenom.focus();
                                //-->
                            </script>
                            <!-- fin Iframe tirage tarot -->    
                        </section>
                        
                        <hr/>

                        <!-- texte -->
                        <div>
                            <div class="text-justify">
                                <p>Le tarot du jour est le support divinatoire qui permet de se faire une idée de la tendance d'une journée. Il apporte de précieuses informations sur les principaux événements de votre avenir proche. La consultation du tarot du jour amour vous aidera à lever le doute sur certains aspects de votre vie sentimentale.   </p>
                                <h2>Le tarot quotidien vous guide jour après jour</h2>
                                <p>Simple, rapide et efficace, le tirage du tarot du jour gratuit permet de se faire une idée précise des faits marquants de la journée. Présenté sous la forme d'un jeu de cartes, ce tirage se réalise en quelques clics via internet. Son but : prédire l'évolution d'une journée sur divers plans. Consulter via une séance de tarot permet de découvrir ce que Cupidon vous réserve dans la journée. A travers cette consultation, nos cartomanciens vous prodigueront de précieux conseils qui vous aideront sur le plan décisionnel. </p>
                                <br/><p>Dans le cadre d'une consultation du tarot du jour en ligne, le consultant a le choix entre le tirage de trois cartes et le tirage de cinq cartes. Le tirage de trois cartes est idéal pour étudier les principaux secteurs de votre vie : amour, état d'esprit du jour et travail. Par contre, le tirage de cinq cartes ou tirage en croix permet d'obtenir la réponse à une question précise ou de solutionner un problème. Si vous optez pour un tel tirage, les cinq cartes que vous choisirez indiqueront respectivement le positif, le négatif, la vibration, la direction et la synthèse. </p>
                            </div>
                            <div class="text-justify">
                              <h2>Le tarot du jour met fin aux journées stressantes et difficiles</h2>
                              <p>Le tarot est le meilleur support divinatoire qui vous donnera des prédictions à l'échelle d'une journée. Les révélations de ce tarot apportent un grand soulagement et aident à mieux planifier sa journée de travail. Grâce au savoir-faire de nos cartomanciens, il est même possible d'aller au-delà des prédictions. L'analyse approfondie des cartes permettra à nos cartomanciens de vous prodiguer de merveilleux conseils. Grâce au tarot du jour travail, vous pourrez ainsi mieux gérer votre journée mais aussi à prendre des décisions justes. </p><br/>
                              <p>Pour obtenir des conseils immédiats ou des prédictions sans attendre, il suffit de se tourner vers le tirage du tarot du jour en ligne. Cette option de consultation, basée sur internet, vous permet de réaliser votre tirage dans le calme et la discrétion. Chaque jour, au moment de la pause-café du matin ou pendant la pause-détente de l'après-midi, vous n'aurez qu'à consulter le tarot du jour gratuit pour obtenir des réponses précises à vos questions sentimentales ou professionnelles. Loin d'être une consultation anodine, le tirage des cartes révèle des informations capitales à votre réussite : rencontre, augmentation, promotion, rupture...</p>     
                          </div>
                        </div>

                        <br/>

                        <!-- Horizontal Categories -->
                        <section class="cat-widget h-cat-1">
                            <div class="cat-widget-title">
                                <h3>Tarot quotidien</h3>
                            </div>

                            <div class="cat-widget-content">
                                <div class="row-fluid cat-horiz">
                                    <div class="cat-horiz-divider">
                                    </div>
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
                                                                                <h5 class="title">Astrologie gratuite</h5>
                                                                                <br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Anticipez l'avenir proche avec l’astrologie gratuite MyAstro et découvrez ce que les planètes et le système solaire ont prévu pour vous : argent, rencontre, rupture, conflit, mariage, projets… Prenez connaissance de votre destin et avancez l'esprit tranquille.</h6>

                                                                            </div>

                                                                            <a href="http://<?= ROOT_URL ?>/astrologie-gratuite" class="more" title=""></a>
                                                                        </div>
                                                                    </article>
                                                                </div>

                                                                <div class="span6">
                                                                    <article class="fold-item span12">
                                                                        <div class="clearfix">
                                                                            <img src="images_voyance/banniere/compatibilite-amoureuse-feminine.jpg"  class="post-img" />

                                                                            <div class="description visible-part">
                                                                                <h5 class="title">Compatibilité amoureuse féminine</h5>

                                                                                <br>
                                                                                <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Un homme est entré dans votre vie, mais cette relation est-elle vouée à évoluer vers le parfait amour? Votre signe astrologique et celui de votre conquête peuvent s’accorder harmonieusement ou au contraire ne pas concorder du tout… Envie de savoir? Consultez la compatibilité amoureuse gratuite MyAstro!</h6>                                                                       
                                                                            </div>

                                                                            <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-feminine" class="more" title=""></a>
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
                    </div>

                    <!-- Left sidebar -->
                    <?php 
                        $tracking = 'tarotquotidien';
                        include('include/bloc-gauche-secondaire-tarot.php'); 
                    ?>
                </div>
            </div>
        </div>
        <div class="absolute-top-section">
            <div class="row-fluid">
                <?php include('include/nav_inc.php'); ?>
            </div>
            <div class="row-fluid">
                <div itemscope >
                    <ul class="breadcrumb" itemprop="breadcrumb">
                        <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li><li><a href="http://<?= ROOT_URL ?>/tarot-gratuit">Tarot gratuit</a></li><i class="icon-caret-right icon-fixed-width"></i>
                        <li>Tarot quotidien</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_tarot.php'); ?>

<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>