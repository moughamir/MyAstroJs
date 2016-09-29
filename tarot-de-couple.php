<?php
    $source = 'tarot-couple';
    $support = 'tarot';
    $question = 'AMOUR-CONJOINT';
    $fw_title = "Testez votre couple";

    $ipg_title = 'Tarot de couple';
    $ipg_pubs = [ 'astrologie-gratuite-couple', 'compatibilite-amoureuse-feminine-couple' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Voyance tarot couple : Votre amour dans les cartes | Myastro</title>
        <meta name="description" content="Avec Myastro, questionnez les cartes de Tarot pour savoir si votre couple est compatible et si votre relation est vouée au succès." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />

        <?php include('include/header_inc.php'); ?>

        <div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Le tarot de couple, une aide simple mais efficace pour vos relations amoureuses</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Rencontrer, faire éclore et renforcer l’Amour avec un(e) partenaire parfaitement compatible demande du temps et de nombreux efforts. Le tarot du couple gratuit vous aide dans cette démarche en répondant avec précision à toutes les questions sur votre relation. Grâce à un tirage de qualité, découvrez immédiatement ce que l’avenir vous réserve. Nos tarologues expérimentés sont là pour identifier si votre vie commune actuelle est vouée au succès et si vous prenez des décisions bénéfiques pour votre couple.</p>
                            </div>
                        </div>
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
                                    <section class="cat-widget h-cat-1 widget"> 
                                        <div class="cat-widget-title widget-title">
                                            <h2 class="h4">CONSULTER VOTRE TAROT DE COUPLE GRATUIT</h2>
                                        </div>
                                        <!---------------- Début Iframe tirage tarot ---->
                                        <script language="javascript">
                                            function check_prenom() {
                                                if (document.tarot.prenom.value == ''){
                                                    alert("Veuillez entrer votre prénom.");
                                                    document.tarot.prenom.focus();
                                                    return false;
                                                }
                                            }
                                        </script>
                                        <form name="tarot" action="afficher_tarot_couple.php" method="post" onsubmit="return check_prenom()">
                                            <br><label for="date">Votre prénom&nbsp;</label>
                                            <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40 /><br>
                                            <label for="date">Le prénom de votre partenaire :</label>
                                            <input style="width:97%;" type="text" name="prenom_partenaire" size=20 maxlength=40 />
                                            <div style="margin-top:10px;text-align:center;height:60px;">
                                                <input type="submit" value="Commencer notre tirage" name="Valider" class="button" />
                                            </div>
                                        </form>
                                        <script language="javascript">
                                            document.tarot.prenom.focus();
                                        </script>
                                    </section>
                                </div>
                            </section>
                            <!-- texte -->
                            <div>
                                <p></p>
                                <div class="text-justify">
                                    <h2>Ne pas se tromper de partenaire : un avantage du tarot de couple</h2>
                                    <p>Il est toujours difficile de savoir si le sentiment amoureux ressenti envers une autre personne se trouve vraiment partagé. L’un des principaux avantages du tarot pour couple, une forme particulière du tirage traditionnel, correspond à l’identification de la compatibilité entre un homme et une femme. Inutile de perdre du temps en approches et en rendez-vous galants : consultez nos spécialistes voyants tarologues pour savoir si vous avez vos chances avec un(e) partenaire potentiel(le). En quelques minutes, vous avez l’assurance de choisir la bonne personne ou d’éviter une relation désastreuse.</p><br/>
                                    <p>Une fois que vous avez la garantie de vous attacher à votre âme sœur, il ne vous reste plus qu’à la séduire ! Écoutez tous les conseils apportés par notre tarot de couple gratuit et créez des événements réellement romantiques qui renforceront durablement votre amour l’un en l’autre. Utilisez aussi cette voyance couple gratuite particulière pour résoudre facilement les petits soucis qui apparaissent après les premières semaines de relation commune.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Faire grandir l’amour au quotidien avec le tarot couple gratuit</h2>
                                    <p>S’aimer, c’est regarder ensemble dans la même direction et réaliser des efforts mutuels pour faire grandir votre amour malgré les embûches. Pensez à recourir au tarot destiné aux couples lorsque vous vous trouvez confronté(e) à une décision difficile : vous obtenez ainsi une vision bien plus claire des difficultés à venir, un atout bien pratique pour limiter leur impact négatif sur votre vie commune.</p><br/>
                                    <p>Face à un environnement de plus en plus stressant, au rythme épuisant, il n’est pas toujours facile de se concentrer à 100 % sur sa relation amoureuse. Incompréhensions, mauvaise humeur et soucis peuvent très vite envahir le quotidien et dégrader votre entente de couple. Ne laissez pas les choses continuer ainsi et prenez des décisions énergiques ! Pour éviter les fausses « bonnes idées », tournez-vous vers quelques tirages de tarot pour couple : vous trouverez très rapidement un tirage tarot couple avec des solutions adaptées à votre partenaire pour faire revivre la flamme de votre amour. Seul le véritable tarot couple ou encore le tarot gratuit amour couple tiré par un de nos voyant est vraiment fiable, et si vous cherchez un tarot gratuit amour avec prenom, vous etes au bon endroit.</p>
                                </div>
                            </div>

                        <!-- Horizontal Categories -->
                        <section class="cat-widget h-cat-1">
                            <?php include('include/content-internal-pub-grid.php');?>
                        </section>
                    </div>
                        
                    <!-- Left sidebar -->
                    <?php include('include/bloc-gauche-secondaire-tarot.php');?>
                </div>
            </div>
        </div>
    </div>

    <?php include('include/footer_inc_tarot.php'); ?>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>

