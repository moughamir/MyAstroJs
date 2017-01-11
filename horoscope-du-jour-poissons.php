<?php
    $source = 'horoscope-du-jour-poissons';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_poissons.xml');
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
        <title>Horoscope du jour Poissons : Comment appréhender votre journée ? | Myastro</title>
	<meta name="description" content="Signe Poissons : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 
        <style>
            .widget .form-part { background-color:#eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Entrevoyez votre futur avec l’horoscope du jour Poissons</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Vous qui n’aimez pas l’incertitude et qui avez besoin de réponses à vos nombreuses questions sur votre vie, l’horoscope du jour Poissons homme et femme vous guidera dans vos futures grandes décisions.</p>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Poissons</h4>
                                    <img src="images_voyance/signes/poissons.png" class="signe" title="Symbole astrologique Poissons" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope du jour Poisson gratuit élaboré par de grands voyants</h2>
                                    <p>L’année prochaine sera-t-elle une grande année pour vous ? Réussirez-vous à accomplir tous les objectifs que vous vous êtes fixé ? Avec l’horoscope du jour Poisson, vous allez pouvoir vous appuyer sur des voyants de grande valeur pour mieux cerner les contours de votre avenir. Par téléphone, par sms ou tout simplement en ligne, aucun détail ne vous sera caché pour votre plus grand bonheur.</p><br/>
                                    <p>L’horoscope du jour poissons femme et homme est une formidable méthode pour lever le voile sur tous les domaines qui vous tiennent à coeur. Quelle que soit votre situation personnelle et professionnelle, il existe forcément des points que vous souhaitez voir préciser dans le futur et mon horoscope du jour poisson remplira cette tâche au delà de vos espérances. Prendre connaissance de votre horoscope Poisson quotidiennement lèvera beaucoup de doutes sur votre futur.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>L’horoscope du jour Poisson : pour vivre mieux</h2>
                                    <p>Découvrir votre horoscope du jour Poisson homme n’est pas la seule prestation que nous vous offrons. Sans avoir à utiliser votre carte bancaire, vous avez l’occasion de vous inscrire très facilement et rapidement pour bénéficier notamment de séances de tarot. Ces dernières peuvent être réalisées tous les jours, toutes les semaines ou tous les mois selon vos désirs et vos préoccupations du moment. Vous pourrez même profiter d’un tarot de couple qui vous fournira des indices précieux sur votre vie sentimentale et sa trajectoire future.</p><br/>
                                    <p>L’horoscope du jour Poisson femme et homme fournit une pléiade d’informations non seulement sur votre avenir mais également sur votre personnalité selon votre signe astrologique. Grâce aux dons de nos médiums qui disposent d’une longue expérience dans l’univers des arts divinatoires, vous allez pouvoir en seulement quelques instants dissiper ce brouillard qui obstrue votre avenir. Le futur a toujours effrayé de nombreuses personnes. Quelles sont les décisions que vous devez prendre sur le plan professionnel ? Allez-vous rencontrer l’amour de votre vie prochainement ? Votre couple est-il amené à durer dans le temps ? Amour, travail, santé, argent sans oublier la fameuse citation du jour... L’horoscope du jour pour vous qui êtes du signe du poissons sera un véritable rayon de soleil qui ne vous fera plus jamais craindre les jours prochains. Nos prestations sont donc à utiliser sans la moindre modération.</p>     
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
   

