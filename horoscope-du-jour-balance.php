<?php
    $source = 'horoscope-du-jour-balance';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_balance.xml');
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
        <title>Horoscope du jour Balance : Amour travail et santé | Myastro.fr</title>
	<meta name="description" content="Signe Balance : Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
        
        <script src="js/jquery-1.11.js"></script>
        <link rel="stylesheet" href="css/infobulle.css" />
            
        <?php include('include/header_inc.php'); ?>
        
        <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">L’horoscope du jour Balance, une assistance pour vous simplifier la vie</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">L’hésitation est une des caractéristiques du signe de la Balance. C’est la raison pour laquelle, une aide quotidienne peut vous aider à trouver le bon chemin en cas de doute. Un horoscope du jour Balance est donc une assistance incontournable pour améliorer votre vie. "Mon horoscope du jour Balance", c’est un horoscope du jour Balance pour homme et un horoscope du jour Balance pour femme pour ne plus perdre de temps à vous poser des questions inutiles.</p>
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
                                    <h4>VOTRE HOROSCOPE DU JOUR GRATUIT : Balance</h4>
                                    <img src="images_voyance/signes/balance.png" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Un signe, un caractère, un horoscope</h2>
                                    <p>Vous êtes Balance car lors de votre naissance, le soleil se trouvait dans la constellation de la Balance. La position des différentes planètes va influencer votre caractère et votre vie. C’est la raison pour laquelle des voyants professionnels vont étudier les astres et vous fournir un horoscope du jour Balance gratuit. Vous pourrez alors avancer dans la vie sans vous poser ces sempiternelles questions qui minent votre quotidien. Les informations qui vous seront données sont basées sur la carte du ciel du jour.</p><br/>
                                    <p>Signe d’Air, vous êtes bien souvent dans le questionnement. Pour ne pas blesser les autres, vous réfléchissez aux diverses solutions qui se présentent à vous. Peut-être un peu trop. Cette perte de temps peut être réduite grâce à des prévisions précises fournies par votre horoscope quotidien, établi par votre astrologue. Positions des planètes, transits négatifs ou positifs..., tout est étudié pour être le plus complet possible. Vous êtes sûr d’obtenir un horoscope sûr.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Pour vous guider au quotidien, votre horoscope du jour Balance</h2>
                                    <p>Pour être complet, un horoscope quotidien doit être composé de plusieurs rubriques. Amour, travail, santé, argent, vie sociale ou famille, vous pourrez découvrir les réponses à vos problèmes. Va-t-il vous revenir ? Obtiendrez-vous cette promotion tant attendue ? Allez-vous vous faire de nouveaux amis ? Votre horoscope vous guidera. Avec des conseils, votre chiffre et une citation du jour, vous en saurez plus sur la journée qui vous attend. Et si vous avez encore des questions, il vous est possible d’utiliser le tarot divinatoire.</p><br/>
                                    <p>Horoscope du jour Balance pour homme ou horoscope du jour Balance pour femme, les prévisions sont adaptées au mieux à chacun. Véritable outil pour connaître votre avenir, vous ne pourrez rapidement plus vous en passer. Cette aide quotidienne vous permet de savoir où vous diriger, que faire - ou ne pas faire - face à une situation. Votre climat astral n’aura plus de secret et vous pourrez être rassuré. Les Balances trouveront du réconfort dans la lecture de leurs prévisions et pourront avancer le plus simplement du monde vers l’avenir. </p>
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
   

