<?php
    $source = 'horoscope-du-jour-vierge';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('https://www.asiaflash.com/horoscope/rss_horojour_vierge.xml');
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
        <title>Horoscope du jour Vierge gratuit sur Myastro.fr</title>
	<meta name="description" content="Signe Vierge : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
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
                        <h1 itemprop="headline">Ne rien laisser au hasard avec l’horoscope du jour Vierge</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Journée radieuse ou maussade en prévision ? Inutile de prendre le risque, découvrez ce que les 24 prochaines heures vous réservent en prenant le temps de lire votre horoscope du jour Vierge gratuit sur notre site. En un clic, vous pouvez prendre connaissance des prédictions, signe par signe, préparées par nos spécialistes en astrologie. Si votre anniversaire se situe entre le 23 août et le 23 septembre, c’est l’horoscope du jour Vierge qu’il vous faut consulter avant de vous lancer dans votre journée.</p>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Vierge</h4>
                                    <img src="images_voyance/signes/vierge.png"  class="signe" title="Symbole astrologique vierge" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Bien organiser ma journée grâce à mon horoscope du jour Vierge</h2>
                                    <p>C’est le matin, vous vous préparez pour vous rendre au travail et vous êtes inquiet au sujet d’une importante réunion de services ? Vous avez une grande nouvelle à annoncer à vos proches et vous vous demandez comment vous y prendre ? Votre rendez-vous à la banque pour votre prêt est fixé cet après-midi et vous aimeriez savoir s’il va bien se passer ? Découvrez ce que les astres vous réservent en consultant un horoscope du jour Vierge pour homme ou votre horoscope du jour Vierge pour femme.</p><br/>
                                    <p>Bien sûr, un horoscope ne peut vous révéler les moindres détails de votre journée mais il peut vous aider à en percevoir les grandes lignes directrices. Il permet également de vous aider à définir des priorités et à mieux comprendre l’attitude des personnes qui vous entourent. Ne passez pas à côté de cette mine de renseignements précieux et très utiles !</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Une journée placée sous le signe de l’amour ?</h2>
                                    <p>Votre voisin vous fait craquer et vous fondez à chaque fois qu’il vous sourit dans le couloir mais les choses ne vont pas plus loin ? La situation semble au beau fixe avec votre compagnon mais vous aimeriez que votre relation devienne plus sérieuse ? Vous avez toujours des sentiments pour votre ancien petit ami et vous souhaitez qu’il revienne vers vous ? Faites le point sur votre avenir sentimental en consultant votre horoscope du jour Vierge pour femme.</p><br/>
                                    <p>Messieurs, vous pouvez également en apprendre plus sur les prochaines 24 heures en vous reportant à votre horoscope du jour Vierge pour homme. Vous y trouverez les grandes lignes pour mieux appréhender votre journée. En couple ? Découvrez ce que votre relation vous réserve et les clés pour mieux comprendre le comportement de votre compagne. Célibataire ? Peut-être aurez-vous la surprise de faire une merveilleuse rencontre aujourd’hui ou d’entendre à nouveau parler d’une ancienne petite amie. Tout cela, et bien plus, vous sera expliqué dans votre horoscope du jour Vierge, disponible gratuitement sur notre site afin de vous aider à vivre votre vie à fond.</p>
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
   

