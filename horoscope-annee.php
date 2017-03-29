<?php
    $annee = date('Y');
    $source = 'horoscope-'.$annee;
    $cs_url = 'horoscope-'.$annee;
    $ipg_title = 'Horoscope '.$annee;
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes', 'compatibilite-amoureuse-pour-les-hommes'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope <?= $annee;?> : Est-ce une bonne année pour vous ? | Myastro</title>
        <meta name="description" content="Lʼannée <?= $annee;?> est pleine de bonnes promesses et annonçait un renouveau certain. Lʼhoroscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />

        <?php include('include/header_inc.php');?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Myastro, une ressource gratuite pour découvrir votre horoscope de lʼannée</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Suivez votre horoscope en ligne et obtenez gratuitement une foule de renseignements utiles sur le site Myastro. Prenez connaissance, par exemple, des caractéristiques de votre signe et de ceux des gens qui vous entourent. Apprenez si lʼannée est favorable à lʼharmonie de votre couple et consultez les prévisions de lʼhoroscope <?= $annee;?> gratuit en ligne. Ou encore, découvrez votre profil astrologique féminin ou les compatibilités amoureuses pour les hommes.</p>
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
                            <!-- choix signe astro -->
                            <?php include('include/content-choix-signe.php');?>

                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Votre horoscope <?= $annee;?>, un guide gratuit</h2>
                                    <p>En sélectionnant votre signe ou en inscrivant en ligne votre date de naissance complète, vous obtiendrez sans frais les principales caractéristiques de votre personnalité, tant sur le plan amoureux qu’au niveau du travail, à partir de votre horoscope personnel. Ces renseignements gratuits vous permettront de prendre des décisions plus éclairées et de vous servir de vos atouts pour atteindre vos buts. Profitez de l’occasion pour connaître quels sont les points forts et les côtés plus faibles de votre conjoint ou conjointe, de vos collègues ou de votre patron, en mentionnant tout simplement leur date de naissance. En consultant l’horoscope <?= $annee;?> en ligne vous pourrez suivre les développements de votre signe et ceux de vos proches.</p><br/>
                                    <p>L’horoscope <?= $annee;?> par Myastro pourra constituer un outil précieux pour savoir si votre partenaire est vraiment le meilleur complément amoureux pour vous. En complétant le test gratuit en ligne, vous pourrez être rassuré sur vos choix ou décider si un temps de changement est venu. Avant toute chose, les explications contenues sur ce site ont pour but de vous fournir des pistes de réflexion pour mieux orienter votre chemin de vie. Plusieurs personnages influents de ce monde consultent à chaque jour leur horoscope pour y trouver des repères pour améliorer leurs pensées et leurs actions.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Combinez votre horoscope <?= $annee;?> au tarot</h2>
                                    <p>Sur Myastro, non seulement vous pouvez obtenir votre horoscope <?= $annee;?> gratuit, mais il est possible de consulter votre tarot de façon quotidienne, hebdomadaire ou mensuelle. Utilisé depuis la fin du 16e siècle, le tarot originerait d’Égypte et serait devenu populaire entre autres grâces aux gitans. Basées sur des illustrations, les cartes de ce jeu transmettent des messages d’ordre pratique, spirituel ou philosophique. Vous pouvez utiliser sans frais le tarot en ligne de ce site pour trouver réponse à une question ou faire la lumière sur un aspect particulier de votre vie. Le « tarot du couple » a été conçu pour aider les partenaires à mieux comprendre leur relation et à la faire évoluer au fil du temps.</p><br/>
                                    <p>Pour obtenir une ressource fiable quand il est question d’interpréter votre horoscope de l’année, selon votre signe zodiacal, Myastro constitue une référence de choix.</p><br />
                                </div>
                            </div>

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

        <?php include('include/footer_inc_horoscope_annee.php');?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>

