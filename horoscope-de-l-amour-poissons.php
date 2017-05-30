<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope de l'amour poisson</title>
	<meta name="description" content="Signe Poissons :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-de-l-amour" >Horoscope de l'amour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de l'amour Poissons</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Votre horoscope de l'amour poisson : une heureuse nouvelle à venir ?</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Poissons :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond.</p>
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
                        <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Poissons</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/poissons.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss3('http://www.asiaflash.com/horoscope/rss_mensuel_amoureux_poissons.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
 //echo $s_cle;
    if ($s_cle===0)
	{
			$f1=$s_value;
  	}
	elseif ($s_cle===1)
	{
			$f2=$s_value;
	}
	elseif ($s_cle===2)
	{
			$f3=$s_value;
			$f3=preg_replace('@<center[^>]*?>.*?</center>@si', '', $f3);
	}
	
	
	
	
	
	
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">1

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f1;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse2">2

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f2;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse3">3
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f3;
	?></p>
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=poissons&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>L'amour, quoi de plus important dans la vie ? Grand amour et doux amours, amour d'un soir ou amour d'une vie, on a tous envie de savoir ce que nous réserve le domaine amoureux... Allez-vous rencontrer le grand, l'unique, le magnifique amour ? Etes-vous faits l'un pour l'autre ? Allez-vous enfin réussir à séduire ce collègue de bureau ? Comment va tenir votre couple ? Etes-vous compatible au niveau des signes du zodiaque ? Ah, toutes ces questions qui nous habitent au quotidien... Avec l'horoscope de l'amour poisson, vous avez des pistes de réponses à toutes vos questions, même les plus intimes ! </p>
                        <h2>Un horoscope de l'amour poisson pour l'année 2016</h2>
                        <p>Pour savoir ce que demain vous réserve dans le champ amoureux, vous n'avez qu'à consulter votre horoscope de l'amour poisson. Nous vous proposons des éléments de réponses, des suggestions de rencontres ou d'événements, qui vous permettent ensuite d'être préparé à tout ce qu'il peut arriver, des baisers aux déclarations sans oublier les drames et les colères. En effet, avoir quelques pistes sur ce que l'avenir réserve permet d'être paré à toute les éventualités. Souvent, face à des événements impromptus, ou inattendus, il est possible de se sentir dépassé par ce qu'il se passe, et de ne pas être en mesure de prendre les meilleures décisions. Grâce à votre horoscope, vous affrontez l'avenir en toute sérénité, et avec toutes les clés en main ! </p>
                        <br/><p>Avec l'horoscope amoureux des poissons, vous êtes en pleine possession de vos moyens, prêt à vous laisser chavirer comme à faire des choix importants ! Votre horoscope poisson amoureux est disponible tous les jours, toutes les semaines ou encore tous les mois, en fonction de votre fréquence d'utilisation.</p>
                    </div>
                    <div class="text-justify">
                          <h2>L'horoscope de l'amour poisson, l'indispensable de votre journée</h2>
                          <p>Profond et insaisissable, le poisson est un caractère passionné en amour, à tendance impulsive, et à sentiments entiers. Forces de caractère, les poissons peuvent également être très vulnérables dans des situations de conflits ou de tensions au sein du couple. Pour vous aider à affronter les moments difficiles de votre vie amoureuse, notre horoscope poisson spécial amour vous accompagne à chaque étape importante de votre vie sentimentale.</p><br/>
                          <p>A chacun sa manière de consulter son horoscope ! Certaines personnes le lisent religieusement et tous les matins, pour avoir à l'avance une sensation de la journée qui s'annonce. D'autres ont un rapport plus léger à l'horoscope, et le feuillette comme une distraction pour se changer les idées. D'autres y font appel en cas d'événements importants. Avec l'horoscope poisson amoureux, vous avez les clés de demain !</p>     
                    </div>
                </div><br/>

            </div>


			
            
							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_amour.php'); ?>
   

