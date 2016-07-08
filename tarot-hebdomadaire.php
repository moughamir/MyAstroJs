<?php
session_start();
session_unset();

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Tarot hebdomadaire : le tirage de la semaine sur myastro.fr</title>
    <meta name="description" content="Avec Myastro, bénéficiez d'un tirage de Tarot toutes les semaines afin de les aborder sereinement et sans préoccupations." />
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

                    <h1 itemprop="headline">Le tarot hebdomadaire, un allié précieux</h1>

                </div>

                <div class="row-fluid social-share-footer">
                    <span class="share-icon icon-caret-right"></span>

                    <div class="share-icons">
                        <p itemprop="headline">Le quotidien et l'avenir sont bien souvent sources de questionnements. Amour ou  travail, vous vous posez des questions et avez besoin d'aide pour avancer.  Le tarot est une méthode de prédiction connue depuis des millénaires. Ce jeu divinatoire est une aide pour vous guider au jour le jour et vous permettre de vivre sereinement. A partir d'un simple tirage en quelques minutes, découvrez votre semaine. </p>
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
                                    <h3>CONSULTER VOTRE TAROT HEBDOMADAIRE GRATUIT</h3>
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

                                <form name="tarot" action="afficher_tarot_hebdomadaire.php" method="post" onsubmit="return check_prenom()">
                                    <br>
                                    <label for="date">Votre prénom&nbsp;</label>
                                    <input style="width:97%;" type="text" name="prenom" size=20 maxlength=40><br>

                                    <label for="date">Votre signe &nbsp;</label>
                                    <select name="signe">
                                        <option    value="1">Bélier</option>
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
                                    </select><br>

                                    <div style="margin-top:10px;text-align:center;height:60px;">
                                      <input type="submit" value="Commencer mon tirage" name="Valider" class="button">
                                  </div>
                                </form>

                                <script language="javascript"><!--
                                    document.tarot.prenom.focus();
                                //-->
                                </script>
                            <!-- fin Iframe tirage tarot -->
                            </section>    
                        </div>
                    </section>

                    <!-- texte -->
                    <div>
                        <div class="text-justify">
                            <h2>Le tarot de la semaine, un outil de prédiction qui a fait ses preuves</h2>
                            <p>Le tarot de Marseille est apparu en France au XVIème siècle après avoir été crée en Italie.  Il est composé de 78 cartes, que l'on nomme  arcanes.  Pour un tirage de tarot précis, les 22 arcanes majeures sont utilisées. Chaque arcane possède une signification précise que nos tarologues vous font découvrir. Depuis des siècles, les hommes ont reçu des conseils grâce au tirage du tarot. Pour une simple demande ou pour être aidé plus régulièrement, le tarot vous permet de réussir dans votre vie. Les plus grands ne s'y sont pas trompés et ont eu recours à cet art divinatoire.</p>
                            <br/><p>Il existe plusieurs types de tirage du tarot. Du plus simple au plus complexe, ils offrent tous des prédictions précises. Le tirage le plus rapide et le plus utilisé est le tirage en croix qui utilise 5 cartes. Il suffit de se concentrer et de choisir. Le Mat, l'Impératrice, le Fou ou encore la Roue de la fortune peuvent répondre à tous les types de questions. Pour en savoir plus sur votre avenir, le tarot hebdomadaire est une solution simple et rapide qui ne vous décevra pas. </p>
                        </div>
                        <div class="text-justify">
                            <h2>Un tirage de tarot hebdomadaire pour trouver de l'aide</h2>
                            <p>Le tarot de la semaine gratuit, a chaque domaine correspond une interprétation précise. Vous aurez une réponse que vous hésitiez dans votre travail ou votre vie sociale et bien sûr dans le domaine de l'amour. Vous n'avez qu'a sélectionner les cartes, entrer votre prénom et indiquer votre signe astrologique. L'interprétation se fera suivant les cartes que vous avez choisies, mais également votre signe astral. Amour, forme, travail, santé, argent, vie sociale, vous aurez un tour d'horizon complet de votre avenir proche.  </p>
                            <br/><p>Votre augmentation va-t-elle être acceptée cette semaine ?  Serez-vous en meilleure condition physique ? Allez-vous vous réconcilier avec un proche ? Va-t-il enfin vous demander en mariage ? Toutes ces questions trouveront une réponse grâce au tarot hebdomadaire. En outre, vous pouvez compléter le tirage par un horoscope complet ou votre compatibilité amoureuse. Vous pourrez avancer avec plus de sûreté durant la semaine qui arrive. Le tarot semaine deviendra votre allié pour un quotidien sans souci. Pour un tarot semaine prochaine, consultez cette page dans une semaine.</p>
                        </div>
                    </div>

                    <br/>

                    <!-- Horizontal Categories -->
                    <section class="cat-widget h-cat-1">
                        <div class="cat-widget-title">
                            <h3>TAROT HEBDOMADAIRE</h3>
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
                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Les astres sont riches pour des prédictions de qualité pour un tirage tarot semaine. Chaque astre du système solaire a ses messages propres votre astrologie gratuite quotidienne vous révèle l'influence de l'un ou l'autre.</h6>

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

                                                                            <br><h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La compatibilité amoureuse féminine peut être vérifiée à long ou à court terme. Demandez-nous MyAstro saura vous répondre.</h6>

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
                    <li>Tarot hebdomadaire</span></li>
                </ul>
            </div>
        </div>
    </div>
</div>



<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_tarot.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>