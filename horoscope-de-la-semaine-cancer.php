<?php
    $source = 'horoscope-de-la-semaine-cancer';

    ini_set('max_execution_time', 0);
    include('lib.php');
    
    $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_cancer.xml');
    $ac_result = array();
    $nb_item = count($xml1['desc']);
    $i = 1;
    foreach ($xml1['desc'] as $s_cle => $s_value){
        if($i == $nb_item){ // dernier élément
            $s_value = preg_replace('@<center[^>]*?>.*?</center>@si', '', $s_value);
	}
        $s_cle = ucfirst(str_replace('_', ' ', $s_cle));
        $ac_result[$s_cle] = $s_value;
        $i++;
    }
    
    $ipg_title = 'HOROSCOPE DE LA SEMAINE CANCER';
    $ipg_pubs = ['compatibilite-amoureuse-pour-les-femmes-horoscope', 'compatibilite-amoureuse-pour-les-hommes-horoscope'];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Horoscope de la semaine cancer pour bien appréhender l’avenir</title>
	<meta name="description" content="Signe Cancer : Les semaines s’enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l’horoscope de la semaine de Myastro." />
        
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
                        <h1 itemprop="headline">Horoscope de la semaine Cancer</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline">Connaître son horoscope s’avère toujours très utile et intéressant puisque cela permet d’appréhender la vie et le futur de façon plus sereine tout en apprenant à faire les meilleurs choix possible. Nos services de voyances vous permettront ainsi de répondre à certaines questions qui peuvent vous ronger. Pour les natifs du cancer, c’est ici que ça se passe.</p>
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
                                    <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT : Cancer</h4>
                                    <img src="images_voyance/signes/cancer.png" />
                                </div>
                                <!-- Résultat horoscope -->
                                <?php include('include/content-result-accordion.php'); ?>
                                <!-- Partages -->
                                <?php include('include/content-article-social-share.php'); ?>
                            </aside>
                            <!-- texte -->
                            <div>
                                <div class="text-justify">
                                    <h2>Un horoscope de la semaine cancer gratuit</h2>
                                    <p>Pour nous, connaître son horoscope est quelque chose d’essentiel qui devrait être à la portée de chacun. Hors il est parfois compliqué d’y avoir accès de façon totalement gratuite, c’est pourquoi nous avons développé sur notre site web un service de voyance offert. Ainsi il est possible pour tous les natifs du signe du cancer de retrouver leur horoscope et de connaitre l’atmosphère de la semaine qui les attend.</p><br/>
                                    <p>Ce service, assuré entièrement gratuit, permet d’aborder la nouvelle semaine de façon plus sereine, de connaître les éventuels obstacles qui vous attendent et ainsi de se préparer à les affronter de la bonne façon. Bien entendu une analyse détaillée de cet horoscope de la semaine cancer sera faite, abordant tous les points important de la vie, à savoir l’amour, le travail, la santé, l’argent et la famille, le tout agrémenté d’une petite citation de la semaine que vous pourrez vous répéter et mettre en pratique au quotidien.</p>
                                </div>
                                <div class="text-justify">
                                    <h2>Des experts en ligne à votre service</h2>
                                    <p>Pour une analyse encore plus détaillée de votre horoscope de la semaine cancer il est aussi possible de faire appel à des experts de toutes sortes qui se feront un plaisir de vous aider à comprendre et à éclairer votre avenir. En effet il est encore plus intéressant de prendre contact directement avec une de nos professionnels puisque cela permet de répondre à vos questions avec précision et de façon plus personnalisée. Un simple appel peut ainsi vous apprendre l’horoscope de la semaine cancer tout en prodiguant des conseils plus généraux au niveau de votre mode de vie.</p><br/>
                                    <p>Pour que chacun trouve ce qui lui convient le mieux nous proposons différents services, chaque professionnel étant expert dans un secteur particulier. Il vous est donc possible de faire appel à un astrologue, à un médium auditif ou pur, à un tarologue, à un voyant pur ou encore à un numérologue. Ainsi vous choisissez la manière qui vous convient le mieux pour vous renseigner sur la semaine à venir afin d’être en total confiance et entièrement ouvert à ce qui vous sera dit et aux attentes que vous devrez avoir.</p>     
                                </div>
                            </div><br/>
                            <!-- Horizontal Categories -->
                            <section class="cat-widget h-cat-1">
                                <?php include('include/content-internal-pub-grid.php'); ?>
                            </section>
                        </div>
                        
                        <!-- Left sidebar -->
                        <?php include('include/bloc-gauche-secondaire-2.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    
        <?php include('include/footer_inc_horoscope_semaine.php'); ?>
    
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>
   

