<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Faire une voyance par sms pour obtenir des réponses rapides</title>
    <?= $tracker->getCanonical() ?>
    <meta name="description" content="Vous souhaitez bénéficier de conseils en voyance mais ne voulez pas communiquer de vive voix. Myastro vous propose la voyance par SMS." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
    
    <?php include('include/header_sans_nav_inc.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />

    <div class="container-fluid  relative-container" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

            <div class="article-content">
                <header>
                    <div class="cat-widget-title">

                      <h1 itemprop="headline">Une voyance par sms fiable avec des médiums professionnels</h1>

                    </div>

                    <div class="row-fluid social-share-footer">
                        <span class="share-icon icon-caret-right"></span>

                       <div class="share-icons">
                          <p itemprop="headline">La divination par sms est le service qui permet à chaque consultant d'avoir un contact permanent avec son voyant. Grâce aux échanges de "texto", vous pourrez poser toutes vos questions, exposer vos problèmes en temps réel ou débattre d'un sujet en rapport avec votre quotidien. </p>
                      </div>

                    </div>
                </header>
              <br>

              <span class="clearfix"></span>

              <!--  ************************ contenu ****************************  -->
              <div class="row-fluid">			
                <!-- Right sidebar -->
                <?php include('include/bloc-droit-secondaire-2.php'); ?>

                <!-- main content -->
                <div class="span6 main-content">
                    <!--ici -->
                    <aside class="widget w-adv">
                        <div class="widget-title">
                            <h2 class="h4">Fiable et confidentielle</h2>
                        </div>

                        <div class="widget-content clearfix">
                            <img src="images_voyance/voyance-par-sms.jpg" alt="VOYANCE PAR SMS">
                        </div>

                    </aside>
                    <!-- texte -->
                    <div>
                        <div class="text-justify">
                            <h2>Voyance par sms : Votre téléphone au service de votre avenir</h2>
                            <p>Le principe de la <strong>voyance par sms gratuit</strong> est très simple : Elle vous permet d’échanger avec votre médium directement par téléphone et de pouvoir garder contact avec lui. Dans le métro, au travail, en attendant votre dentiste, chaque questions que vous vous posez pourra trouver sa réponse grâce au simple envoi d’un texto à votre voyant.</p>
                        </div>
                        <div class="text-justify">
                          <h2>La voyance par sms : Une nouvelle forme de voyance qui a déjà fait ses preuves</h2>
                          <p>Tout le monde aujourd’hui possède un téléphone portable ; D’un modèle simple aux plus avancés des smartphones, la <strong>voyance gratuite par sms</strong> ne requiert d’une condition technique : Que vous soyez en mesure de recevoir et d’envoyer des textos. Pas besoin d’écran couleur ni même de 4G, la </strong>voyance par sms</strong> s’adapte à tous les modèles de téléphones sans aucune restriction, sans besoin d’investir dans un certain type d’appareil ou un forfait particulier.</p><br/>
                          <p>Les médiums qui s’occupent du service de <strong>voyance par sms</strong> sont spécialisés dans tous les types de voyance à distance. Le monde évolue, les méthodes de divination aussi. Qu’importe les questions posées, un spécialiste vous répondra directement sur votre téléphone lorsque vous lui aurez envoyé le thème de votre demande. Une fois votre sms reçu par le voyant, vous pourrez le contacter directement par ce biais.</p>     
                        </div>
                        <div class="text-justify">
                            <h2>Que puis-je attendre de la voyance par sms ?</h2>
                            <p>La <strong>voyance gratuite par sms</strong> est une offre adaptée dans le monde dans lequel on vit. Les attentes en matière de voyance ont évolué elles aussi. Simple, rapide, discrète et efficace, la <strong>voyance par sms</strong> est un moyen tout aussi fiable que la voyance par téléphone pour obtenir des réponses. Au-delà même de réponses, la <strong>voyance par sms</strong> vous permet d’obtenir des pistes sur les différentes orientations qui se présenteront à vous. Amour, travail, argent, famille, il n’y a rien que ne puisse pas traiter les experts de My Astro et cela, grâce à un simple échange de textos.</p><br/>
                            <p>La qualité d’une consultation en voyance ne dépend pas de la manière dont elle est faite mais bien du professionnalisme et de la qualité de prestation du voyant qui vous accompagnera. Les médiums qui composent l’équipe de <strong>voyance par sms</strong> de My Astro sont qualifiés pour ce type de consultations auxquelles ils sont habitués. Ils sauront trouver les mots de manière simple et concise dans l’idée de ne laisser aucun doute subsister. Le choix du support reste à l’entière disposition du consultant et n’interfère en rien dans les conseils qu’il délivre. Qu’il utilise le tarot, un oracle, une boule de cristal ou un pendule, les experts de l’équipe My Astro ont tous la capacité et les compétences d’être à votre écoute sans aucune restriction liée à la technologie ou la distance. Ils sauront vous répondre dans un délai très court et toujours de manière pertinente en toute circonstance.</p>
                         </div>
                      </div>
                      <br/>

                  <!-- Vertical Categories -->
                        <div class="row-fluid">
                            <div class="span6">
                            </div>

                            <div class="span6">
                            </div>
                        </div>
                    </div>
            <!-- Left sidebar -->
                    <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                </div>
            </div>

            <div class="absolute-top-section">
                <div class="row-fluid">
                    <?php include('include/nav_inc.php'); ?>
                </div>
                <div class="row-fluid">
                    <div itemscope >
                        <div itemscope >
                            <ul class="breadcrumb" itemprop="breadcrumb">
                                <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                <li>Voyance par sms</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>

<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_voyance.php'); ?>
