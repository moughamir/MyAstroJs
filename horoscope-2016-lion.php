<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 Lion: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Lion : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Lion 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope lion du jour gratuit</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">L'astrologie est un excellent moyen de choisir le meilleur chemin de vie possible. Elle aide à surmonter les épreuves sans jamais imposer une seule interprétation. Vous êtes lion ? Apprenez-en plus sur la vie amoureuse, la carrière et toutes les bonnes choses qui vous attendent pour l'année 2016. L'horoscope 2016 lion gratuit vous permettra de faire évoluer votre vie dans le bon sens et d'améliorer vos contacts avec les autres.</p>
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
                        <h4>Votre horoscope 2016 Gratuit: Lion</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/lion.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_lion.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
  
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
		elseif ($s_cle==='mes_conseils_pour_l\'année')
	{
			$conseils=$s_value;
			$conseils=preg_replace('@<center[^>]*?>.*?</center>@si', '', $conseils);
	}
		
	
  }

  ?>	

                    <div class="modern-accordion-container">

                                            <div class="accordion" id="accordion1">

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme" href="/horoscope-2016-lion-bis?tab=collapse1#collapse1">AMOUR

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php// echo $amour; ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-lion-bis?tab=collapse2#collapse1">TRAVAIL

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse2" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php// echo $travail; ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-lion-bis?tab=collapse3#collapse1">SANTÉ
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php// echo $sante; ?></p>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-lion-bis?tab=collapse4#collapse1">ARGENT
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php// echo $argent;    ?></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-lion-bis?tab=collapse5#collapse1">MES CONSEILS POUR L'ANNÉE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php //echo $conseils; ?>
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=lion&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Horoscope 2016 lion côté sentimental</h2>
                        <p>Vais-je tomber amoureux ou amoureuse en 2016 ? Suis-je avec la bonne personne ? Comment faire avancer ma vie amoureuse dans le bon sens ? Mon horoscope 2016 lion est là pour vous guider dans votre vie sentimentale. Les rencontres, les bouleversements, les grands événements comme le mariage ou une naissance prochaine... Toutes ces choses peuvent être sues à l'avance grâce à l'horoscope 2016 lion. Mais l'astrologie n'est pas uniquement là pour vous annoncer des bonnes nouvelles. Les ruptures, les disputes et autres bouleversements font également partie de la vie sentimentale de tout le monde. Heureusement, votre horoscope 2016 lion sera là pour vous guider sur le chemin du bonheur et vous aider à prendre les bonnes décisions</p>
                        <br/><p>L'horoscope 2016 lion pour homme permettra aux messieurs de mieux comprendre leur partenaire grâce à des explications claires et précises. Côté amitié, l'astrologie joue également un rôle primordial puisqu'elle vous aidera à prendre soin des êtres qui vous sont chers. Et pour vous, mesdames, l'horoscope 2016 lion pour femme sera comme un ange gardien qui veille sur vos relations affectives, qu'elles soient amicales ou amoureuses.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Mon horoscope 2016 lion : un guide pour la carrière et les finances</h2>
                        <p>L'horoscope 2016 lion pour homme vous permettra de booster votre carrière et d'atteindre vos objectifs. Prenez-le comme un guide vers l'épanouissement de votre vie professionnelle et appliquez les conseils positifs qui vous sont prodigués. L'horoscope 2016 lion pour femme aidera ces dernières à améliorer leurs relations professionnelles grâce à quelques exercices de développement personnel. La carrière fait partie intégrante de la réussite, mieux vaut donc vous accompagner du pouvoir des planètes pour atteindre vos objectifs.</p>
                        <br/><p>Côté argent, l'horoscope 2016 lion gratuit vous permettra de rester à flot et de prévoir à l'avance les éventuelles pertes et rentrées d'argent. L'astrologie prodigue d'excellents conseils financiers idéals pour appréhender le futur. Que les nouvelles soient bonnes ou mauvaises, profitez de les connaître à l'avance pour préparer votre contre-attaque. Dans tous les cas, laissez faire le pouvoir des planètes et suivez leurs conseils afin de mieux vivre au quotidien.</p>
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
    
	
   
<?php include('include/footer_inc_horoscope_2016.php'); ?>
   

