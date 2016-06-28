<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 Poissons: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Poissons : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 <meta name="robots" content="noindex,nofollow" />
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Poissons 2016</li></span>
                                        
                                        
                                        
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Que vous révèle votre horoscope 2016 poisson ?</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Petit guide du quotidien, votre horoscope 2016 poisson vous accompagnera chaque jour vers le chemin du bonheur. Il est là pour vous guider dans vos décisions et dans vos choix sans jamais s'imposer. L'astrologie est la science idéale pour en apprendre plus sur soi-même, sa vie amoureuse et sa vie professionnelle. Découvrez tout ce qui vous attend en 2016 grâce à votre horoscope 2016 poisson gratuit.</p>
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
                         <h2 class="h4">Votre horoscope 2016 Gratuit: Poissons</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/sagittaire.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_poissons.xml');

 
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
                                                        <a class="accordion-toggle btn-theme" data-toggle="collapse" data-parent="#accordion1"
                                                            href="#collapse1">AMOUR

                                                        <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse1" class="accordion-body <?php if($_GET['tab'] == 'collapse1') {echo 'in';} ?> collapse">
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
                                                    <div id="collapse2" class="accordion-body <?php if($_GET['tab'] == 'collapse2') {echo 'in';} ?> collapse">
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
                                                    <div id="collapse3" class="accordion-body <?php if($_GET['tab'] == 'collapse3') {echo 'in';} ?> collapse">
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
                                                    <div id="collapse4" class="accordion-body <?php if($_GET['tab'] == 'collapse4') {echo 'in';} ?> collapse">
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
                                                            data-parent="#accordion1" href="#collapse5">MES CONSEILS POUR L'ANNÉE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body <?php if($_GET['tab'] == 'collapse5') {echo 'in';} ?> collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $conseils;
	
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

               <!-- Texte -->
                <div>
                    <div class="text-justify"> 
                        <h2>Ce que l'horoscope poisson révèle sur votre vie sentimentale</h2>
                       <p>Qui ne s'est jamais demandé ce qui l'attendait pour l'année 2016 d'un point de vue amoureux ? Un heureux événement, la rencontre avec le grand amour, un mariage, une rupture... Tous ces éléments peuvent être anticipés en consultant mon horoscope 2016 poisson. La vie amoureuse fait partie des choses qui permettent de s'épanouir au quotidien. Pourquoi ne pas vous offrir un bon coup de pouce en lisant votre horoscope ? Ce dernier se fera discret mais efficace et vous aidera à anticiper votre avenir sentimental. Vous êtes une femme et vous vous demandez si vous allez enfin tomber enceinte ? Votre horoscope 2016 poisson pour femme vous est entièrement consacré. Ayez confiance dans les planètes, elles vous guideront pendant les moments difficiles et vous aideront à prendre les bonnes décisions.</p>
                         <br/><p>Vous êtes un homme ? L'horoscope 2016 poisson pour homme vous aidera à mieux comprendre votre femme. Alors que certaines personnes se verront annoncer qu'elles rencontreront l'amour en 2016, d'autres trouveront le moyen d'entretenir leur couple sainement et simplement. Votre horoscope 2016 poisson est là pour veiller sur vos relations affectives, il se fera le garant de votre accomplissement sentimental.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Mon horoscope 2016 poisson pour une vie professionnelle épanouie</h2>
                          <p>Vous êtes poisson et vous vous demandez comment faire évoluer votre carrière dans le bon sens ? Votre horoscope 2016 poisson pour homme vous aidera à atteindre vos objectifs. Vous n'avez qu'à appliquer les conseils prodigués à la lecture de votre horoscope pour accéder à l'épanouissement de votre vie professionnelle. Spécialement destiné à la gente féminine, l'horoscope 2016 poisson pour femme aidera lui aussi à booster votre carrière d'un point de vue féminin. </p><br/>
                          <p>L'horoscope est aussi là pour vous accompagner dans votre vie financière. Il vous aidera à anticiper les éventuelles rentrées et pertes d'argent. Vais-je enfin avoir une promotion ? Est-ce le moment pour moi de jouer à la loterie ? Votre horoscope 2016 poisson gratuit vous aidera à mieux gérer vos finances et vous guidera vers les meilleures façons d'investir en fonction de la position des planètes. C'est maintenant à vous de jouer !</p>     
                    </div>

                </div>


                <!-- Horizontal Categories -->
                
            </div>


			
            
							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope.php'); ?>
   

