<?php
    $source = 'tarot-gratuit';
    $support = 'tarot';
    $fw_title = "2 - Posez votre question";

    $ipg_title = 'Tarot Gratuit';
    $ipg_pubs = [ 'tarot-de-marseille', 'tarot-oui-ou-non',
                  'tarot-de-l-amour', 'tirage-tarot-gratuit' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarot gratuit : Amour et destin à chaque tirage gratuit | Myastro</title>
        <meta name="description" content="My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits." />

        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
        <noscript>
            <link rel="stylesheet" type="text/css" href="css/noscript.css" />
        </noscript>
        
        <link rel="shortcut icon" href="favicon.ico" /> 

        <!--[if IE 7]>
            <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lt IE 9]>
            <script src="framework/fix-ie/html5.js"></script>
        <![endif]-->

        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>
            
        <?php include('include/header_inc.php'); ?>

        <div class="voyance-tarot container-fluid ninesixty" itemscope>
            <div class="article-content">
                <header>
                    <h1 itemprop="headline">Tarot gratuit en ligne</h1>
                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>
                        <div class="share-icons">
                            <p itemprop="headline">Obtenez des réponses immédiates à toutes vos questions en tirant vos cartes gratuitement.</p>
                        </div>
                    </div>
                </header>
                <span class="clearfix"></span>
                
                <!-- Main Content -->
                <div class="row-fluid">
                    <!-- Right sidebar -->
                    <?php include('include/bloc-droit-principale-2.php'); ?>
                    
                    <div class="span6 main-content">
                        <div class="cat-widget-title cat-title-tarot widget-t-title first-title">
                            <h4>1 - Tirez vos cartes</h4>
                        </div>
                        <div class="widget-t w-sponsors">
                            <div class="tarot-content">
                                <div class="tarot-left" style="width:100%;">
                                    <?php include("include/content-tarot-draw.php");?>
                                </div>
                            </div>
                        </div><br/>
                        
                        <!-- texte -->
                        <div class="text-justify">
                            <p>Quel sera votre avenir amoureux ? Allez-vous rencontrer le grand amour ? Pour le savoir, procédez à votre tirage tarot et découvrez sans plus attendre votre avenir sentimental. La vie à deux est tellement plus stimulante, vous aussi vous avez droit au bonheur, cela n’arrive pas qu’aux autres. Le tarot détermine les influences importantes de votre vie. Travail, amour, famille, amitié ou santé, il y a toujours une bonne raison pour faire un tirage tarot gratuit.</p>
                            <h2>Votre avenir sentimental dévoilé par le jeu de tarot</h2>
                            <p>S’il est bien une chose au monde qui rassemble tous les hommes et toutes les femmes, c’est l’amour. Parce qu’il transcende tout, l’amour est sans aucun doute un élixir de vie incomparable. Il faut dire que la rencontre amoureuse, en plus d’apporter le bonheur et de donner des ailes, offre un sérieux coup de fouet à la vitalité et à la créativité. Grâce aux tarots gratuits, faites la rencontre de votre vie pour partager de nouvelles expériences en duo.</p><br/>
                            <p>Le tarot en ligne vous indique les périodes, les jours et les tendances favorables pour rencontrer le partenaire de vos rêves. Le jeu de tarot est connu depuis plusieurs siècles en France et en Italie entre autres, il est utilisé dans de nombreuses cultures. Grâce aux jeux de tarot gratuit, découvrez les cartes attachées à votre tirage et les symboles associés. La Tempérance, La Roue de Fortune ou encore le Soleil constituent quelques-unes des cartes maîtresses du jeu de tarot et vous indiquent la meilleure direction à suivre.</p>
                        </div>
                        <div class="text-justify">
                            <h2>Découvrez votre tarot gratuit</h2>
                            <p>Pour effectuer un tarot gratuit, pas besoin de vous rendre chez une voyante. Il existe de nos jours des solutions bien plus simples et plus rapides. Il vous suffit de procéder à votre tirage en ligne pour déterminer en un clin d’oeil les grandes lignes de votre avenir. Dans le domaine professionnel aussi, le tarot gratuit vous apporte de judicieuses informations et vous conseille pas à pas. Ne vous privez pas de cette aide appréciable pour prendre les décisions les plus favorables à votre carrière. Le tarot en ligne est votre allié le plus  précieux.</p><br/>
                            <p>Vous êtes inquiet à propos de votre santé ? Vous désirez prendre soin de vous et de votre famille dans les meilleures conditions ? Grâce à votre tarot gratuit, découvrez de précieuses informations concernant votre santé et les éléments à prendre en compte pour conserver une bonne vitalité. N’hésitez pas à réaliser votre tarot gratuit en ligne régulièrement pour prendre les bonnes décisions concernant votre bien-être et connaître les grandes lignes de votre avenir. N’attendez plus, procédez dès maintenant au tirage de vos jeux de tarot gratuit.</p>
                        </div><br/>
                        
                        <!-- Horizontal Categories -->
                        <section class="cat-widget h-cat-1">
                            <?php include('include/content-internal-pub-grid.php');?>
                        </section>
                    </div>
                        
                    <!-- Left sidebar -->
                    <?php include('include/bloc-gauche-principale-2.php'); ?>
                </div>
            </div>
        </div>

    <?php include('include/footer_inc_tarot.php'); ?>
    
<script>
    positionModifier = 35;
</script>
<script src="js/tarot-gratuit.js"></script>
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>