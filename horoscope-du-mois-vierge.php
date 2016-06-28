<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope du mois vierge : mieux appréhender votre vie </title>
	<meta name="description" content="Signe Vierge :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
 
 
<?php include('include/header_inc.php'); ?>


    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-du-mois" >Horoscope du mois</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du mois Vierge</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Votre horoscope du mois vierge : simple et gratuit </h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Vierge :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception.</p>
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
                        <h2 class="h2">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Vierge</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/vierge.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_vierge.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=vierge&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Un mois finit de s'achever, et un nouveau mois commence. Avec celui qui s'éteint, on fait le bilan de ses échecs comme de ses réussites, on se souvient de ses moments forts. Comment aborder le mois qui commence ? Que va t-il vous arriver ? Votre carrière va t-elle décoller ? Allez-vous rencontrer le grand amour ? Comment va évoluer ce problème de santé ? Grâce à l'horoscope du mois vierge, nous vous proposons des réponses, afin de vivre vos interrogations plus sereinement.</p>
                        <h2>Le meilleur horoscope du mois vierge</h2>
                        <p>Nos astrologues sont réputés pour leur excellence et leur talent, et ils livrent toujours des horoscopes affûtés et très détaillés. Notre équipe de pratiquants de l'astrologie est absolument fiable : tous nos astrologues sont habités par la passion de leur art, et adorent perpétuellement continuer à se former, pour enrichir toujours plus leur savoir-faire. Ainsi, les horoscopes qu'ils vous concoctent sont toujours très justes : pour vous en convaincre, il vous suffit de l'essayer ! Et vous constaterez les prochaines semaines que ses prédictions se réalisent !</p>
                        <br/><p>Grâce à votre horoscope du mois vierge, vous profitez d'un aperçu de ce qu'il vous attend le mois suivant ! Et quel confort que de ne pas être désarmé, face à l'inconnu ou à l'imprévu ! En effet, le rôle d'un horoscope n'est pas de vous révéler exactement ce que l'avenir vous réserve, mais plutôt de vous transmettre le goût et la couleur des prochaines semaines. Allez-vous traverser des défis importants ? Votre vie amoureuse va t-elle basculer ? Allez-vous faire des rencontres essentielles ? Pour le savoir, rendez vous dans notre rubrique spécialisée sur l'horoscope mensuel destiné aux vierges. </p>
                    </div>
                    <div class="text-justify">
                          <h2>L'horoscope mensuel des vierges, et l'avenir vous sourit !</h2>
                          <p>Avec l'horoscope du mois vierge, vous êtes absolument prêt à affronter un nouveau mois, dans ses épreuves comme dans ses délices. Travail, amour, amitié, santé, argent, ou encore famille : toutes vos réponses se trouvent dans l'horoscope. Nous avons tous des questions, des doutes et des espoirs, mais y faire face seul peut parfois être angoissant. Plutôt que de vous laisser happer par les questions insondables, grâce à l'horoscope, vous décalez votre regard, et portez sur telle ou telle situation un regard renouvelé ! </p><br/>
                          <p>Votre horoscope vierge mensuel vous accompagne dans toutes les étapes importantes de votre vie, mais aussi pour la vie de tous les jours ! Que vous consultiez votre horoscope pour vous distraire, par superstition, pour vous rassurer ou pour anticiper, notre horoscope vierge vous donnera les prédictions les plus justes et les plus précises, pour que l'avenir vous appartienne !</p>     
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
   

