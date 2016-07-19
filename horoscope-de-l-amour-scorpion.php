<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Un horoscope de l'amour scorpion pour maîtriser l'avenir</title>
	<meta name="description" content="Signe Scorpion :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" >Horoscope de l'amour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de l'amour Scorpion</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">L'horoscope de l'amour scorpion à consulter régulièrement</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Vous désirez en savoir plus sur votre avenir ou trouver l'amour ? La consultation régulière du site spécialisé Myastro.fr peut vous y aider. Chaque signe astrologique est ainsi décrit de manière complète, en particulier celui du scorpion. </p>
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
                        <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Scorpion</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/scorpion.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss3('http://www.asiaflash.com/horoscope/rss_mensuel_amoureux_scorpion.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=scorpion&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Savoir décrypter l'horoscope de l'amour scorpion</h2>
                        <p>Pour tous ceux que l'astrologie intéresse et qui souhaitent en savoir plus sur leur vie professionnelle ou amoureuse, le site Internet permet de découvrir des aspects méconnus de sa personnalité. Avec tous les signes astrologiques présents pour découvrir de manière approfondie tous les aspects de sa personnalité, c'est l'assurance de bénéficier d'une description complète. Avec un horoscope de l'amour des scorpions détaillé vous avez l'occasion d'orienter vos choix personnels en fonction de vos objectifs. Ludique et convivial, le site, dédié à l'astrologie, au tarot, à la numérologie ou encore à la voyance, dispose de nombreuses fonctionnalités. </p>
                        <br/><p>Idéal pour se connaître et en savoir plus sa propre personnalité avec un œil averti, le site en ligne permet une étude approfondie de ses choix personnels. Pour tous ceux qui souhaitent trouver l'amour ou découvrir des aspects méconnus de sa vie sentimentale et amoureuse, c'est un choix tout indiqué. De même, chaque aspect de la vie professionnelle et de ses objectifs peut susciter des interrogations, et le site d'astrologie permet d'en savoir plus. Les indications fournies ont alors pour objectif de se remettre en question et de confirmer des choix, ce qui n'est pas négligeable. </p>
                    </div>
                    <div class="text-justify">
                          <h2>Un horoscope de l'amour scorpion détaillé et complet</h2>
                          <p>Abordant tous les aspects de la vie privée, l'horoscope permet également d'appréhender des sujets sentimentaux et amoureux sous un jour nouveau, et il est toujours intéressant d'avoir un point de vue extérieur. C'est alors l'occasion de se rapprocher de proches ou de renouer des liens familiaux et amicaux, pour pourquoi pas envisager l'avenir sous un autre angle. Les femmes comme les hommes bénéficient ainsi d'un site Internet pour les guider et les orienter dans leurs choix, avec une étude approfondie qui peut répondre à un certain nombre d'interrogations. C'est alors le moment idéal de faire découvrir l'astrologie à vos proches et à votre famille, avec un contenu universel qui s'adresse à tous.</p><br/>
                          <p>Célibataire et à la recherche du grand amour, un horoscope de l'amour scorpion est un guide qui peut aider les femmes et les hommes. Afin de ne pas refaire les mêmes erreurs ou pour bénéficier de conseils avisés, c'est une solution idéale à consulter régulièrement. Savoir si vous allez rencontrer l'âme sœur ou s'il est préférable d'envisager d'autres options est un choix à ne pas prendre à la légère, et le site peut vous aider à faire des choix en toute connaissance de cause.</p>     
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
   

