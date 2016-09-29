<?php
    $source = 'horoscope-du-jour-verseau';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_verseau.xml');
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
        <title>Horoscope du jour Verseau : comment appréhender votre journée ? - Myastro</title>
	<meta name="description" content="Signe Verseau : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
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
                        <h1 itemprop="headline">Découvrez votre horoscope du jour verseau</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">horoscope jour verseau homme : quelle meilleure façon d’aborder l’avenir avec optimisme et confiance qu’en prenant connaissance de son horoscope du jour verseau homme et femme ?</p>
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
                                    <h2 class="h4">VOTRE HOROSCOPE DU JOUR GRATUIT : Verseau</h2>
                                    <img class="signe" src="images_voyance/signes/verseau.png" title="Sylbole Verseau" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- Texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope du jour verseau en toute simplicité</h2>
                                    <p>Pour envisager votre futur avec un maximum de sérénité, il peut être judicieux de s’adjoindre les talents de mediums expérimentés qui vous fourniront des éléments de premier ordre sur votre vie à venir. Pour ne jamais perdre le contrôle des événements, vous pouvez consulter l’horoscope du jour Verseau homme ou femme pour découvrir ce qui vous attend au jour le jour.</p><br/>
                                    <p>Sans avoir à utiliser la moindre carte bancaire, vous allez pouvoir en apprendre davantage sur ce que les prochains temps vous réservent. Par téléphone, par sms ou en ligne, plus aucun détail de votre existence ne vous échappera. Pour obtenir des réponses sur toutes les questions que vous vous posez, il n’y a pas de moyen plus efficace que de lire votre horoscope du jour verseau femme ou homme.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Comment bénéficier d’un horoscope du jour Verseau gratuit ?</h2>
                                    <p>Mon horoscope du jour verseau n’est pas à prendre à la légère. Quel que soit le domaine de votre vie pour lequel vous avez besoin de réponses claires et précises, l’horoscope du jour verseau femme ou homme vous apportera toute la lumière sur les nombreuses zones d’ombres de votre vie. Vous souhaitez savoir si vous allez obtenir votre promotion tant espérée dans votre travail, vous souhaitez savoir si votre couple est amené à durer dans le temps, etc... Autant de questionnements qui ont des réponses à travers l’horoscope. Quel que soit l’état d’esprit dans lequel vous vous trouvez, prendre connaissance quotidiennement de votre horoscope Verseau ne pourra qu’être pour vous une source de bien-être et d’inspiration pour vos futurs actes.</p><br/>
                                    <p>Outre le fait de pouvoir découvrir chaque jour votre horoscope Verseau, vous pouvez également pousser encore plus loin votre curiosité par le biais du tarot que vous pouvez vous faire tirer tous les jours, toutes les semaines ou tous les mois. Vous en apprendrez ainsi beaucoup plus sur votre personnalité, sur les personnes présentant des compatibilités amoureuses avec vous et bien d’autres informations essentielles qui vous aideront à faire les meilleurs choix dans votre vie. Très facile à utiliser, vous mettant en relation avec des voyants disposant de réels pouvoirs de medium, l’horoscope du jour Verseau vous apportera toute la confiance en vous dont vous avez besoin au quotidien. Travail, amour, santé, famille... Aucun thème qui vous est cher ne pourra échapper aux visions acerées de nos voyants.</p>     
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
   

