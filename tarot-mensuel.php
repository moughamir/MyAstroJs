<?php
session_start();
session_unset();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Tarot du mois gratuit : votre tarot mensuel sur Myastro.fr</title>
    <meta name="description" content="Le Tarot est une technique de longue date qui permet d'interpréter des cartes tirées pour votre vie et pour répondre à vos questionnements." />
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

                        <h1 itemprop="headline">Tarot du mois : que vous réservent les 30 prochains jours ?</h1>
                        
                    </div>

                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>

                        <div class="share-icons">
                            <p itemprop="headline">Tirer les cartes du tarot pour connaître l'avenir est une pratique ancienne : on en trouve des traces écrites depuis plus de quatre siècles. Une question vous taraude ? Vous traversez une épreuve compliquée ? Vous avez un rendez-vous important, et vous aimeriez mieux le préparer avec tous les outils possibles ? Alors n'hésitez plus, et obtenez votre tarot du mois gratuit ici !</p>
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
                               <section class="cat-widget h-cat-1">
                                    <div class="cat-widget-title">
                                        <h3>CONSULTER VOTRE TAROT MENSUEL GRATUIT</h3>
                                    </div>
                                    <!---------------- Début Iframe tirage tarot ---->

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

                                    <form name="tarot" action="afficher_tarot_mensuel.php" method="post" onsubmit="return check_prenom()">
                                        <br>
                                        <label for="date">Votre prénom&nbsp;</label>
                                        <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40><br>

                                        <label for="date">Votre signe &nbsp;</label>
                                        <select name="signe">
                                            <option    value="1">Bélier </option>
                                            <option    value="2">Taureau</option>
                                            <option    value="3">Gémeaux</option>
                                            <option    value="4">Cancer</option>
                                            <option    value="5">Lion</option>
                                            <option    value="6">Vierge</option>
                                            <option    value="7">Balance</option>
                                            <option    value="8">Scorpion</option>
                                            <option    value="9">Sagittaire</option>
                                            <option   value="10">Capricorne</option>
                                            <option   value="11">Verseau</option>
                                            <option   value="12">Poissons</option>
                                        </select>

                                        <div style="margin-top:10px;text-align:center;height:60px;">
                                            <input type="submit" value="Commencer mon tirage" name="Valider" class="button">
                                        </div>
                                    </form>
                    
                                    <script language="javascript"><!--
                                    document.tarot.prenom.focus();
                                    //-->
                                    </script>
                                <!---------------- fin Iframe tirage tarot ---->
                                </section>
                            </div>
                        </section>

                        <!-- texte -->
                        <div>
                            <div class="text-justify">
                                <h2>Le tarot du mois, les cartes révélatrices</h2>
                                <p>Les soixante dix huit lames du tarot sont porteuses de symboles forts, respectés et admirés à travers les époques et les continents. Grâce à un tirage savant, le tarot révèle des pistes de prédictions, et les réponses des cartes permettent d'envisager l'avenir tout en comprenant le présent. Vous avez une question précise à poser aux cartes ? Ou vous aimeriez avoir une vue globale sur ce qui vous attend ? N'hésitez pas à venir consulter ici votre tarot mensuel.</p>
                                <br/><p>Nos tarologues sont extrêmement qualifiés, et savent interpréter les associations de lames. Avec le tarot du mois, notre équipe vous offre une fenêtre sur votre avenir : vous disposez ainsi de tous les outils nécessaires pour prendre une décision ou vous préparer à un grand changement ! Avec le tarot du mois, aucun sujet n'est tabou : quel tournant va prendre votre carrière ? Etes-vous réellement faite pour ce métier ? Allez-vous rencontrer le grand amour ? Quels sont les jours propices pour régler un conflit ? Allez-vous perdre quelqu'un dans les semaines à venir ? Le conflit qui vous mine va t-il se résoudre ? Ce contrat en perspective est-il à votre avantage ? Est-ce le bon moment de conclure un marché ? Le tarot du mois répond à vos doutes et à vos angoisses.</p>
                            </div>
                            <div class="text-justify">
                                <h2>Plus de sérénité avec le tarot mensuel</h2>
                                <p>Le tarot mensuel divinatoire vous accompagne tout au long du mois, afin d'aborder l'avenir de manière plus sereine, et de comprendre le présent avec une nouvel angle d'approche. Notre tarot du mois gratuit garantit des prédictions justes et précises. Mais en plus, faire appel à votre tarot du mois vous permet de percevoir avec un nouvel oeil ce que le présent déroule pour vous. Parfois, il est impossible de prendre le recul nécessaire à une appréhension calme d'un présent mouvementée. Rien n'est plus difficile que de savoir déterminer ce qui est positif dans un présent compliqué. A cette fin, les cartes peuvent vous aider.</p>
                                <br/><p>Nous vous offrons chaque mois le meilleur de la tarologie. Grâce à notre service de tarot, vous avez toutes les clés en main pour continuer à avancer avec une belle énergie, pleine d'espoir et de sérénité. Pourquoi vous en priver ? Il vous suffit de venir sur notre site et de consulter votre tarot mensuel ! </p>
                            </div>
                        </div>

                        <br/>

                        <!-- Horizontal Categories -->
                        <section class="cat-widget h-cat-1">
                            <div class="cat-widget-title">
                                <h3>Tarot mensuel</h3>
                            </div>

                            <div class="cat-widget-content">


                              <div class="row-fluid cat-horiz">

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
                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'astrologie gratuite est source de connaissance de soi-même. Vous pourrez grâce à MyAstro faire des tirages de tarots mensuels afin de vérifier la justesse de votre comportement de la semaine.</h6>

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
                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Il est important pour vous de cheminer avec un être compatible. La compatibilité amoureuse féminine vous est offerte par MyAstro, procédez dès maintenant à votre demande et trouvez l'âme soeur.</h6>

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
                                                                            <h5 class="title">Découvrez votre horoscope du jour</h5>
                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'horoscope du jour vous évite les faux pas, c'est un guide qui signale les tendances et les embûches potentielles. Exigez votre horoscope du jour MyAstro vous y engage.</h6>

                                                                        </div>

                                                                        <a href="http://<?= ROOT_URL ?>/horoscope-du-jour" class="more" title=""></a>
                                                                    </div>

                                                                </article>
                                                            </div>

                                                            <div class="span6">
                                                                <article class="fold-item span12">
                                                                    <div class="clearfix">
                                                                        <img src="images_voyance/banniere/horoscope-2015.png" class="post-img" />

                                                                        <div class="description visible-part">
                                                                            <h5 class="title">Votre horoscope 2016</h5>

                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Vous pourrez avoir les grandes tendances annuelles et les énergies qui meuvent votre propre vie. Demander votre horoscope 2016 avec MyAstro qui a déjà eu de grands résultats est chose facile et jusqu'à un certain point gratis. Profitez-en! </h6>                                                                       
                                                                        </div>

                                                                        <a href="http://<?= ROOT_URL ?>/horoscope-2016" class="more" title=""></a>
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
                        </section>
                    </div>
                    <!-- Left sidebar -->
                    <?php 
                        $tracking = '';
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
                        <li>Tarot mensuel</span></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_tarot.php'); ?>

<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>