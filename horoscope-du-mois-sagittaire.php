<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>L’horoscope du mois sagittaire en toute simplicité</title>
	<meta name="description" content="Signe Sagittaire :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
     <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
 
<?php include('include/header_inc.php'); ?>
<link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-du-mois" >Horoscope du mois</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du mois Sagittaire</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Découvrir l’avenir avec l’horoscope du mois sagittaire</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Sagittaire :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception.</p>
                                </div>

                            </div>
                             
<br>
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
                        <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Sagittaire</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/sagittaire.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_sagittaire.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
 // echo $s_cle;
    if ($s_cle==='vos_amours')
	{
			$amour=$s_value;
  	}
	elseif ($s_cle==='votre_argent')
	{
			$argent=$s_value;
	}
	elseif ($s_cle==='votre_vitalité')
	{
			$vitalite=$s_value;
	}
	elseif ($s_cle==='votre_travail')
	{
			$travail=$s_value;
	}
	
	
	elseif ($s_cle==='mes_conseils_pour_le_mois')
	{
			$mes_conseils_pour_le_mois=$s_value;
			$mes_conseils_pour_le_mois=preg_replace('@<center[^>]*?>.*?</center>@si', '', $mes_conseils_pour_le_mois);
	}
	
	
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">VOS AMOURS

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $amour;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse2">VOTRE TRAVAIL

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $travail;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse3">VOTRE VITALITÉ
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $vitalite;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse4">VOTRE ARGENT
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $argent;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>
												
												 


												


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">MES CONSEILS POUR LE MOIS

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $mes_conseils_pour_le_mois;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>
									 



                                            </div>

                                        </div>
										
										<div class="row-fluid social-share-footer">
                                

                                <div class="share-icons">
                                   <div style="text-align:center;top:-3px;margin-left:20%;">
<?php
$url = '';

if (isset($_SERVER['HTTPS']) && filter_var($_SERVER['HTTPS'], FILTER_VALIDATE_BOOLEAN))
    $url .= 'https';
else
    $url .= 'http';

$url .= '://';

if (isset($_SERVER['HTTP_HOST']))
    $url .= $_SERVER['HTTP_HOST'];
elseif (isset($_SERVER['SERVER_NAME']))
    $url .= $_SERVER['SERVER_NAME'];
else
    trigger_error ('Could not get URL from $_SERVER vars');


if ($_SERVER['SERVER_PORT'] != '80')
  $url .= ':'.$_SERVER["SERVER_PORT"];

if (isset($_SERVER['REQUEST_URI']))
    $url .= $_SERVER['REQUEST_URI'];
elseif (isset($_SERVER['PHP_SELF']))
    $url .= $_SERVER['PHP_SELF'];
elseif (isset($_SERVER['REDIRECT_URL']))
    $url .= $_SERVER['REDIRECT_URL'];
else
    trigger_error ('Could not get URL from $_SERVER vars');?>								   
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=sagittaire&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
	<a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<!-- Placez cette balise où vous souhaitez faire apparaître le gadget Bouton +1. -->
<div class="g-plusone"></div>

<!-- Placez cette ballise après la dernière balise Bouton +1. -->
<script type="text/javascript">
  window.___gcfg = {lang: 'fr'};

  (function() {
    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
    po.src = 'https://apis.google.com/js/plusone.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
  })();
</script>
	</div> 
                                </div>

                            </div>
                     
<div><br><?php
	
			echo utf8_encode($asia_bottom);
	
	?></div>

					 
					</div>
                </aside>
                <hr/>
               <!-- texte -->
                <div>
                    <div class="text-justify">
                        <p>En ces temps incertains, l'avenir paraît bien sombre. Toutes les indications utiles, comme celle de votre horoscope, peuvent contribuer à vous préparer pour les évènements à venir. Amour, argent, santé, affaires, tout le monde veut pouvoir anticiper au plus près les décisions à prendre. Myastro.fr vous guide dans vos choix, en vous proposant notamment un horoscope du mois sagittaire.</p>
                        <h2>Connaitre son horoscope pour anticiper ses décisions</h2>
                        <p>Le site Myastro.com est au plus près des attentes de ses utilisateurs. Les demandes de conseils sont nombreuses et très variées. A chaque personne ses problèmes et ses envies bien particulières de trouver des clefs pour les résoudre. Qu'à cela ne tienne. Ici toutes les demandes trouvent leurs réponses. De nombreux liens pointent vers toutes les réponses que vous pouvez vous poser, et ce quel que soit votre signe astrologique et votre décan. Quel que soit la nature de vos questionnements, des experts reconnus vous répondent dans les plus brefs délais.</p>
                        <br/><p>Dès la page d'accueil du site, vous avez accès à des liens de réponses à tous vos types de préoccupation. Amour, travail, vitalité, argent, rien n'est passé sous silence. Un horoscope de la semaine est proposé gratuitement. Chaque semaine a son signe et chaque signe est évalué suivant une première et une seconde quinzaine. Vous pouvez également recourir aux conseils d'experts en ligne pour obtenir des conseils plus personnalisés. Il vous est tout aussi facile de poser une question précise grâce à un formulaire destiné à cet effet. Enfin, en vous rendant au bas de la page d'accueil, vous avez accès à des prédictions plutôt basées sur les compatibilités entre signes et sur la lecture des tarots.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Un site pour connaître son horoscope du mois sagittaire</h2>
                          <p>Votre horoscope du mois sagittaire est établi très facilement. En sélectionnant simplement votre signe astrologique, sagittaire en l'occurrence, vous avez accès à une multitude de fonctions. Celles-ci vous permettent d'obtenir des réponses précises à vos questions. Myastro.com met à votre disposition nombre d'outils qui réduisent considérablement les doutes que vous pouvez légitimement avoir quant à votre avenir. Dès que votre horoscope du mois, pour votre signe astrologique du sagittaire, est sélectionné, vous pouvez affiner les prédictions grâce à de nombreuses options.</p><br/>
                          <p>Afin de faciliter au maximum l'obtention de conseils sur votre avenir, Myastro.com a recours à toutes les technologies de communication les plus efficaces. En plus d'un accès direct grâce aux pages web du site, vous pouvez obtenir des prédictions par SMS sur votre smartphone. Ces mêmes ressources sont également accessibles par audiotel au moyen d'un simple numéro de téléphone. Ces conseils sont prodigués, en France comme en Belgique, sans utilisation d'une carte bancaire. En plus de votre horoscope et des fonctions d'astrologie, vous avez accès aussi facilement à des services basés sur les tarots, la numérologie et même à un service de voyance par téléphone.</p>     
                    </div>
                </div><br/>

                <!-- Horizontal Categories -->
               
            </div>


			
            
							<!-- Left sidebar -->
							<?php  $tracking = '';
                            include('include/bloc-gauche-secondaire-2.php');?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_mois.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

