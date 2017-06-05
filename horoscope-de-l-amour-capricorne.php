<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope de l'amour Capricorne: soulevez les doutes, vivez tranquillement | Myastro</title>
	<meta name="description" content="Signe Capricorne :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-de-l-amour" >Horoscope de l'amour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de l'amour Capricorne</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Horoscope de l'amour Capricorne</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Capricorne :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond.</h5>
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
                        <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Capricorne</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/capricorne.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss3('https://www.asiaflash.com/horoscope/rss_mensuel_amoureux_capricorne.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=capricorne&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Ah, l'amour... Qu'on le cherche encore ou qu'on l'ait déjà trouvé, qu'on doive encore le séduire ou qu'on sente poindre l'ennui dans son couple, tout savoir sur votre situation amoureuse vous apaisera et vous guidera vers les bonnes décisions à prendre ou les initiatives intéressantes à mettre en place. L'horoscope de l'amour capricorne vous apprend tout ce que vous voulez savoir ! </p>
                        <h2>Un excellent horoscope de l'amour capricorne</h2>
                        <p>Allez-vous bientôt rencontrer l'amour ? Etes-vous faits pour passer toute votre vie ensemble ? Etes-vous réellement compatibles, d'un point de vue zodiacal ? Pourquoi rechigne t-il à s'engager ? Pourquoi ressentez-vous un sentiment de lassitude, déjà ? L'amour et ses mystères nous convie toujours à de multiples interrogations et doutes. Vous cherchez des réponses ? Avec votre horoscope de l'amour capricorne, nous vous proposons des éléments de réflexion, des conseils et des prédictions pour satisfaire votre curiosité, et vous aiguiller au mieux sur votre situation ! </p>
                        <br/><p>Comment faire pour le séduire en fonction de son signe ? Notre horoscope amoureux prodigue également des astuces et des recommandations pour que votre élu tombe fou amoureux de vous ! L'amour est un sentiment grandiose et magique, et seules les étoiles et les planètes ont le pouvoir de l'influencer, ou de le déclencher ! Signe de terre, robuste et généreux, le capricorne a par nature un esprit rationnel et mature. Pourtant, votre coeur s'emballe à tout rompre quand vous croisez telle ou telle personne ? Vous perdez vos moyens, et ne savez plus quoi faire ? En un coup d'oeil sur votre horoscope de l'amour capricorne, nous vous donnons quelques solutions !</p>
                    </div>
                    <div class="text-justify">
                          <h2>Anticiper en amour avec l'horoscope du coeur pour les capricornes</h2>
                          <p>Tous les jours ou occasionnellement, pour se détendre ou au contraire, de manière très sérieuse, n'hésitez pas à consulter votre horoscope de l'amour capricorne pour tout savoir sur ce que le domaine du coeur vous réserve ! Car que l'on recherche la fièvre de la passion ou l'harmonie d'une relation solide, un bien-être amoureux, et une satisfaction de sa situation, est indispensable à un bon équilibre de vie. Se sentir bien en amour, c'est le premier grand pas vers le bonheur ! </p><br/>
                          <p>Avec notre horoscope amoureux pour capricorne, vous décodez les signes de l'avenir, et vous êtes en mesure de vous préparer au mieux aux rebondissements amoureux éventuels qui pourraient se présenter... Et en amour plus qu'ailleurs, toute la vie peut changer en un regard, ou en une rencontre ! Avec nos prédictions et nos conseils, vous anticipez votre avenir amoureux de manière paisible !</p>     
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
    
	
   
<?php include('include/footer_inc_horoscope_amour.php'); ?>
   

