<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Découvrez votre horoscope du mois Balance avec Myastro</title>
	<meta name="description" content="Signe Balance :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
 
 
<?php include('include/header_inc.php'); ?>


    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-du-mois" >Horoscope du mois</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du mois Balance</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">L'horoscope du mois Balance en un clin d'œil</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Vous êtes actuellement à la recherche d'informations pour vous aider à trouver une solution dans votre vie personnelle ou professionnelle ? Parcourez votre horoscope du mois Balance, et apprenez-en plus sur votre personnalité, afin de rayer les doutes dans votre quotidien.</p>
                                </div>

                            </div>
                             
<br>
                            </header>

                            <span class="clearfix"></span>

                          <!--  ************************ ici ****************************  -->
 <div class="row-fluid">
          	<!-- Right sidebar -->
							<?php include('include/bloc-droit-secondaire.php'); ?>	
							
            <!-- main content -->
            <div class="span6 main-content">

               

               <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Balance</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/balance.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_balance.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=balance&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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

               <!-- texte -->
                <div>
                    <div class="text-justify">
                        <h2>Apprenez à vous connaître avec l'horoscope du mois Balance</h2>
                        <p>Grâce à une équipe de voyants bénévoles, bénéficiez d'un service gratuit et complet. Sans définir la ligne de conduite à suivre, profitez néanmoins de données importantes, qui pourraient vous guider à travers les méandres de vos réflexions. Un problème sérieux avec votre hiérarchie au travail ? Une décision cruciale pour la suite de votre carrière ? Un besoin de bouleverser vos habitudes, de changer de métier, ou de secteur d'activité ? Avant d'arrêter un avis définitif, prenez le temps d'apprécier ce que vous disent les astres, par le biais du décryptage de nos experts, en lisant votre horoscope du mois Balance.</p>
                        <br/><p>Autre sujet qui ne cessera jamais de questionner les gens : l'amour et les sentiments. Que vous soyez un homme du signe de la Balance ou bien une femme Balance, que vous soyez en couple depuis de longues années ou récents célibataires, peut-être désirez-vous en savoir un peu plus sur l'être aimé, ou sur une future rencontre pleine de promesses. N'hésitez pas à consulter votre horoscope mensuel gratuit sur notre plateforme. Du coup de cœur inattendu à la love story qui perdure, en passant par des doutes, des erreurs ou des besoins de souffler : nos experts sont également en capacité de vous répondre de façon plus personnelle, par un simple contact sur notre site.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Amour, travail, santé : tous les thèmes de votre horoscope mensuel Balance </h2>
                          <p>A l'évidence, une prévision astrale n'est pas synonyme d'autoréalisation. Elle vous permet par contre, dans des moments d'hésitations, de perplexité et d'indécisions, d'en connaître un peu plus sur vous-même, sur votre personnalité, et sur votre façon de fonctionner. Ces données sont utiles aux femmes Balance comme aux hommes Balance, pour faire ensuite votre choix en votre âme et conscience. Chaque mois, lisez votre horoscope, défini par notre équipe d'experts bénévoles, susceptible de vous accompagner et de vous guider dans des sujets aussi complexes que l'amour, les relations professionnelles, ou la santé.</p><br/>
                          <p>La santé est justement une thématique de plus en plus prisée par les lecteurs. Que ces questions de santé vous concernent directement, ou impliquent un de vos proches, il est essentiel de pouvoir être rassurer afin de mieux appréhender les choses. Vous venez d'apprendre qu'un de vos parents doit être prochainement hospitalisé ? Vous souhaitez savoir si durant cette période chargée au travail vous n'allez pas manquer d'énergie ? Autant de questionnements justifiés que l'horoscope du mois Balance vous aidera à surmonter.</p>     
                    </div>
                </div><br/>

                <!-- Horizontal Categories -->
               
            </div>


			
            
							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_mois.php'); ?>
   

