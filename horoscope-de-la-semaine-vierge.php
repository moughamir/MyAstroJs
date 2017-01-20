<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Vierge :  pour connaître votre horoscope de la semaine, pensez à notre plateforme</title>
	<meta name="description" content="Signe Vierge :Les semaines s'enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l'horoscope de la semaine de Myastro." />
 
 
<?php include('include/header_inc.php'); ?>


    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine" >Horoscope de la semaine</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de la semaine Vierge</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Tout savoir sur l'horoscope de la semaine vierge</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Vierge :Les semaines s'enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l'horoscope de la semaine de Myastro.</p>
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
                        <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Vierge</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/vierge.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_vierge.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
  //echo $s_cle;
    if ($s_cle==='amour')
	{
			$amour=$s_value;
  	}
	elseif ($s_cle==='argent')
	{
			$argent=$s_value;
	}
	elseif ($s_cle==='santé')
	{
			$sante=$s_value;
	}
	elseif ($s_cle==='travail')
	{
			$travail=$s_value;
	}
	elseif ($s_cle==='famille')
	{
			$famille=$s_value;
	}
	
	elseif ($s_cle==='citation_de_la_semaine')
	{
			$citation_de_la_semaine=$s_value;
			$citation_de_la_semaine=preg_replace('@<center[^>]*?>.*?</center>@si', '', $citation_de_la_semaine);
	}
	
	
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">AMOUR

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
                                                            data-parent="#accordion1" href="#collapse2">TRAVAIL

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
                                                            data-parent="#accordion1" href="#collapse3">SANTÉ
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $sante;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

												<div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse4">ARGENT
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
                                                            data-parent="#accordion1" href="#collapse5">FAMILLE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $famille;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">CITATION DE LA SEMAINE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $citation_de_la_semaine;
	
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=vierge&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Venez découvrir plus en détails votre personnalité et ce que l'avenir vous réserve sur notre plateforme. Profitez d'un service d'informations totalement gratuit et parfaitement complet, relayé par une équipe de voyants bénévoles dont l'objectif est de vous apporter des solutions par rapport à tous vos questionnements.</p>
                        <h2>Apprenez à vous connaître avec l'horoscope de la semaine vierge</h2>
                        <p>Que vous ayez des questions au sujet de votre travail, de vos amours, ou encore de votre santé, n'hésitez pas à venir consulter gratuitement un voyant ou un médium bénévole. Accédez à l'horoscope de la semaine vierge, et venez puiser des réponses à vos interrogations sur notre plateforme. Besoin d'un changement professionnel ? Désir de tourner la page au niveau amoureux ? Nécessité d'éclaircir un souci d'origine familiale ou amicale ?  Envie de savoir si votre santé continuera d'être au beau fixe ? Utilisez les compétences de nos voyants bénévoles pour progresser dans votre quotidien !</p>
                        <br/><p>L'avantage d'une consultation pour connaitre votre horoscope de la semaine vierge vous permet de faire vos choix en toute connaissance de cause. Si vous êtes soumis à un certain stress, à une certaine angoisse, voire à une certaine appréhension, évoquez vos sujets de réflexion avec des voyants et des médiums bénévoles est désormais une possibilité simple et accessible. A votre écoute et sensibilisés à la psychologie, nos voyants s'appuient d'ailleurs sur leur savoir-faire et leur réelle expérience. Notez que ces prévisions peuvent également être réalisées au quotidien ou chaque mois. Un horoscope pour le signe de la Vierge peut être enfin thématisé, axé par exemple sur l'Amour.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Horoscope hebdomadaire pour les vierges : comment cela fonctionne ?</h2>
                          <p>Le fonctionnement de notre plateforme de consultations gratuites est très simple. Chaque semaine, une équipe de voyants actualise l'horoscope de la semaine Vierge, et vous indique plus personnellement l'itinéraire à suivre. Si une prévision astrale ne révèle pas forcément le déroulé de la semaine dans les moindres détails, elle permet cependant d'appréhender les grandes lignes conductrices. L'horoscope pour les femmes Vierge comme pour les hommes Vierge permet de révéler les priorités et mieux savoir déceler les attitudes des personnes qui vous entourent. Récoltez de précieuses informations sur votre vie professionnelle et privée, afin de pouvoir mieux affronter les obstacles qui se dressent devant vous.</p><br/>
                          <p>Vous avez une semaine particulièrement chargée dans le cadre de votre travail entre rendez-vous importants et réunions cruciales ? Vous avez flashé sur une personne dans les transports en commun et vous vous demandez si une réciprocité est envisageable ? Un de vos parents se rend à l'hôpital pour passer des examens et vous souhaitez en savoir un peu plus sur l'avenir ? N'hésitez plus et venez consulter votre horoscope de la semaine Vierge en bénéficiant du savoir-faire de notre équipe de voyants bénévoles.</p>     
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
    
	
   
<?php include('include/footer_inc_horoscope_semaine.php'); ?>
   

