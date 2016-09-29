<?php
    $source = 'horoscope-du-jour-taureau';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_taureau.xml');
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
        <title>Horoscope du jour Taureau gratuit sur Myastro.fr</title>
        <meta name="description" content="Signe Taureau : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Tout savoir sur l’avenir avec l’horoscope du jour Taureau</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Que va t-il se passer aujourd’hui ? Quel cours va prendre votre existence ? Cette réunion boulot qui vous angoisse va t-elle bien se passer ? Allez-vous enfin rencontrer le grand amour de votre vie ? Quel sera le dénouement de ce petit différend familial ou amical ? Grâce à l’horoscope du jour Taureau gratuit, je suis mieux préparée à cette nouvelle journée !</p>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Taureau</h4>
                                    <img class="signe" src="images_voyance/signes/taureau.png" title="Symbole astrologique Taureau" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Mon horoscope du jour Taureau pour bien démarrer la journée </h2>
                                        <p>Ce matin, vous vous êtes réveillée avec une intuition envahissante : aujourd’hui, quelque chose d’important va se passer. Oui, mais quoi ? Sous le coup d’un bouleversement soudain, on ne sait souvent ni comment réagir, ni quoi choisir. Et les choix faits sous le coup du stress ou de l’indécision n’ont pas toujours les meilleures conséquences...L’horoscope du jour Taureau vous propose des pistes de réflexions et des fenêtres sur l’avenir : mieux préparée à toutes les possibilités de la journée, vous serez plus à même de prendre des décisions mieux avisées...</p><br/>
                                        <p>Horoscope du jour Taureau pour homme ou horoscope du jour Taureau pour femme : grâce à notre équipe d’experts en astrologie, nous vous offrons les prédictions les plus précises concernant cette journée qui commence. Nos astrologues ont suivi une formation de haut vol, et interprètent quotidiennement les thèmes astraux des douze signes du Zodiaque. Amour, carrière, famille : consultez votre horoscope pour avoir un avant-goût de ce que l’avenir vous réserve.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Horoscope du jour Taureau, des conseils à ne pas râter</h2>
                                    <p>Le ciel nous révèle ses mystères : le signe du Taureau est le premier signe, parmi trois, à être gouverné par l’influence de Vénus. Personnalité nerveuse et persévérante caractérise les Taureaux. Dotée d’une impressionnante vitalité, vous faîtes preuve d’une patience et d’une stabilité inégalées, vous attelant à toujours poursuivre, même lentement, l’objectif que vous vous êtes fixé. Mais comment canaliser toute cette énergie, et ne pas vous laisser entraîner par votre tendance impulsive ? Pour vous préparer au mieux, et obtenir les clés du succès, lisez chaque matin votre horoscope du jour Taureau pour homme ou votre horoscope du jour Taureau pour femme.</p><br/>
                                    <p>Etes-vous réellement destinée à ce métier ? Comment aborder ce problème de couple ? Comment réussir à trouver un équilibre entre votre vie professionnelle et votre vie sentimentale ? Et comment éviter ces petits conflits qui pourraient exploser en grands drames ? Toutes ces questions existentielles jalonnent notre existence, et rien n’est moins facile que d’apporter seule des réponses. Pour un petit coup de pouce, pourquoi ne pas faire confiance à votre horoscope ? Celui que nous vous fournissons quotidiennement est absolument réputé et juste.</p>
                                </div>
                            </div><br/>
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
   

