<?php
    $source = 'horoscope-du-jour-cancer';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('https://www.asiaflash.com/horoscope/rss_horojour_cancer.xml');
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
        <title>Horoscope du jour Cancer : Comment appréhender votre journée ? - Myastro.fr</title>
	<meta name="description" content="Signe Cancer : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
        <style>
            .widget .form-part { background-color: #eb2692;}
            .widget #form-w .btn_button { background-color: #1871b9;}
        </style>
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Horoscope du jour Cancer : Voir l’avenir avec optimisme</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Si vous vous demandez souvent de quoi votre avenir sera fait, vous avez tout intérêt à prendre connaissance de votre horoscope du jour Cancer pour homme ou femme. Vous y découvrirez tout pour aborder votre futur sereinement. </p>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Cancer</h4>
                                    <img src="images_voyance/signes/cancer.png" class="signe" title="Symbole astrologique cancer" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify"> 
                                    <h2>Mon horoscope du jour Cancer : Pour mieux anticiper les événements futurs</h2>
                                    <p>Si comme de nombreuses personnes, vous abordez l’avenir avec beaucoup de questionnements et des doutes, vous avez tout intérêt à consulter l’horoscope du jour Cancer gratuit qui vous donnera de précieux éclaircissements sur toutes les zones d’ombres de votre futur. Nos différents médiums se feront une joie de vous fournir tous les éléments nécessaires à votre épanouissement et vous aideront à faire les bons choix.</p><br/>
                                    <p>L’horoscope du jour Cancer pour homme et femme est une mine d’informations dans les différents domaines clés de votre existence. Par téléphone, par sms ou en ligne, vous allez pouvoir bénéficier de l’expertise et de la parfaite maîtrise des arts divinatoires de nos voyants. Vous pourrez également profiter d’une séance de tarot, quotidiennement, hebdomadairement ou mensuellement pour ne rien manquer des prochaines échéances importantes de votre vie.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>L’horoscope du jour Cancer pour femme et homme : Toutes les réponses à vos questions</h2>
                                    <p>L’horoscope du jour Cancer pour femme et homme vous donnera également l’occasion de vous découvrir de façon plus précise à travers l’étude de votre personnalité par le biais de votre signe astrologique. Qu’il s’agisse d’inquiétudes ou d’espérances sur le plan professionnel, familial ou sentimental, l’horoscope du jour Cancer sera là pour éclairer chacun de vos pas et vous permettre de prendre les décisions les plus judicieuses pour vous et vos proches. Sans avoir à utiliser votre carte bancaire, vous allez pouvoir avoir accès très facilement et très rapidement à différents services de voyance qui seront autant d’occasions d’entrevoir de quoi demain sera fait pour vous. Il s’agit d’une excellente façon de vous rassurer et de devenir acteur de votre propre destinée.</p><br/>
                                    <p>Vous avez envie de savoir si cette nouvelle année vous permettra de réaliser vos rêves professionnels ? Vous souhaitez savoir si vous allez enfin rencontrer votre âme-sœur ? Travail, amour, santé, etc ... tous les thèmes qui vous tiennent à cœur et qui rythment votre vie trouveront des éléments de réponse grâce à votre horoscope du jour du signe du Cancer. Ne vivez plus dans l’incertitude et de la crainte des jours futurs. Prenez votre destin en main et tirez profit des puissants médiums qui se tiennent à votre disposition. Rarement le futur aura été aussi attrayant.</p>     
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
   

