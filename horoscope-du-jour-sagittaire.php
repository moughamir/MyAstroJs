<?php
    $source = 'horoscope-du-jour-sagittaire';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_sagittaire.xml');
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
        <title>Horoscope du jour Sagittaire : Comment appréhender votre journée ? - Myastro</title>
	<meta name="description" content="Signe Sagittaire : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Mon horoscope du jour Sagittaire : Pour aborder l’avenir sans peur</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">La vie est suffisamment imprévisible pour ne pas manquer l’opportunité que représente l’horoscope du jour Sagittaire homme et femme. Le futur ne sera dés lors plus synonyme d’incertitude.</p>
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
                                    <h2 class="h4">VOTRE HOROSCOPE DU JOUR GRATUIT : Sagittaire</h2>
                                    <img src="images_voyance/signes/sagittaire.png" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify"> 
                                    <h2>Mon horoscope du jour sagittaire gratuit d’un simple clic</h2>
                                    <p>Vous êtes en proie à de nombreux doutes concernant votre destin et vous éprouvez le besoin d’être rassuré et d’être guidé avec bienveillance. Nos médiums sont tous des experts qui sauront apporter des réponses claires à vos questions que cela soit par téléphone, par sms ou tout simplement en ligne. Tous les thèmes qui vous sont chers seront passés au crible.</p><br/>
                                    <p>L’horoscope du jour Sagittaire femme et homme va vous permettre de sonder l’avenir et de mieux pouvoir façonner ce dernier par vos choix et vos décisions. Sans avoir à débourser la plus petite somme, notre horoscope du jour Sagittaire vous surprendra par sa précision. Il vous aidera beaucoup pour affronter les obstacles qui s’abattent bien souvent au cours de l’existence.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>L’horoscope du jour Sagittaire homme et femme : une fenêtre sur l’avenir</h2>
                                    <p>En seulement quelques minutes, vous allez pouvoir prendre connaissance de précieuses informations sur vous, vos proches et sur tout ce qui a de l’importance pour vous. L’horoscope du jour Sagittaire femme et homme vous donnera une vision de l’avenir d’une clarté inédite. Vous pourrez également profiter du tirage de tarot à la fréquence que vous souhaitez, chaque jour, chaque semaine ou chaque mois. Il s’agit d’un atout de plus pour vous aider à aborder l’avenir sans aucune crainte ni appréhension.</p><br/>
                                    <p>Vous vous demandez souvent de quelle façon vous pouvez influer sur les événements. Consulter votre horoscope du jour femme ou homme est une solution aussi efficace que ludique. Sans qu’il soit nécessaire d’utiliser votre carte bancaire, vous pourrez bénéficier de la compétence et des dons de nos médiums. Pour en découvrir plus sur votre personnalité astrologique, en savoir plus sur les personnes qui pourraient vous être compatibles sur le plan amoureux ou tout simplement savoir si votre couple va durer, l’astrologie a toutes les réponses. Si vous vous demandez quelles surprises vous réserve la prochaine année, sur les plans professionnels, affectifs et familiaux, l’horoscope du jour Sagittaire qui vous sera proposé vous apportera un éclairage inattendu sur cet avenir dont vous voulez en apprendre le plus possible. Dés lors, vous aurez enfin toutes les cartes en main pour prendre les bonnes décisions et pour orienter votre existence selon vos souhaits les plus chers.</p>     
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
   

