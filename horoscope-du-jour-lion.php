<?php
    $source = 'horoscope-du-jour-lionu';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_lion.xml');
    $ac_result = array();
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($s_cle === 'clin_d\'oeil'){
            $s_cle = 'clin_d’oeil';
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
    }
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope du jour Lion : Comment appréhender votre journée ? | Myastro</title>
	<meta name="description" content="Signe Lion : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Découvrez votre horoscope du jour Lion</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Qui a dit que l’avenir devait nécessairement être effrayant? Pour que vous puissiez débuter cette nouvelle année 2016 sous les meilleurs auspices, l’horoscope du jour lion est à découvrir sans attendre.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!--  ************************ ici ****************************  -->
                    <div class="row-fluid">
                        <!-- Right sidebar -->
                        <?php include('include/bloc-droit-secondaire-2.php'); ?>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-pictures">
                                <div class="widget-title">
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Lion</h4>
                                    <img src="images_voyance/signes/lion.png" class="signe" title="Symbole astrologique Lion" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>  
                                <div class="text-justify">
                                    <h2>Horoscope du jour lion homme et femme : Une fenêtre sur le futur</h2>
                                    <p>Vous voulez savoir si votre couple va durer, si vous allez rencontrer votre âme-soeur, si vous allez connaître une ascension dans votre carrière professionnelle ou toutes autres questions qui vous tiennent à coeur? Nos médiums sont là pour vous donner un éclairage inédite sur votre avenir.</p><br/>
                                    <p>Sans utiliser la moindre carte bancaire, vous avez accès à différentes prestations de voyance qui seront pour vous autant de jalons pour la suite. Par téléphone, par sms, etc ... tous les moyens seront bons pour vous appuyer dans vos décisions futures. Mon horoscope du jour lion vous permet même de consulter les tarots à la fréquence que vous souhaitez, qu’il s’agisse de chaque jour, de chaque semaine ou de chaque mois. Rarement l’avenir aura été aussi enthousiasmant pour vous. Vous pourrez même bénéficier d’un tirage de tarot en commun avec votre conjoint, une excellent idée pour aborder la vie à deux en toute sérénité. </p>
                                </div>
                                <div class="text-justify">
                                    <h2>Une multitude de services pour anticiper 2016</h2>
                                    <p>L’horoscope du jour lion pour homme et femme est un véritable guide pour vous. Dans tous les domaines clés de votre vie, vous aurez de précieux conseils à disposition et ce, tous les jours. Argent, santé, travail, vie sociale sans oublier bien entendu votre vie amoureuse ... tout ce qui fait l’intérêt de la vie sera analysé méticuleusement pour vous permettre d’orienter votre existence de la meilleure façon possible. Face à la somme de décisions cruciales que vous serez certainement amené à prendre au cours de l’année 2016, mieux vaut découvrir en avant-première les grands bouleversements qui ne manqueront pas de survenir au cours de l’année prochaine.</p><br/>
                                    <p>Mon horoscope du jour lion gratuit est une mine d’informations pour vous. Vous craignez de faire les mauvais choix ? Vous souhaitez forcer le destin et mettre sur votre route les personnes qui seront bénéfiques pour votre bonheur ? Une consultation de l’horoscope du jour lion pour femme et homme doit devenir l’un de vos réflexes quotidiens. L’horoscope du jour lion femme et homme vous fournira de surcroît l’occasion d’en découvrir d’avantage sur vous-même et sur votre profil astrologique. Face à l’incertitude et à la crainte qu’inspire souvent le futur, la voyance et la possibilité de découvrir votre horoscope du jour lion constitue une chance qu’il vous fait saisir.</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
            
        <?php include('include/footer_inc_horoscope_jour.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   

