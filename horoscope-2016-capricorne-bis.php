<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
     <title>Horoscope 2016 Capricorne: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Capricorne : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
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
										
                                           <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Capricorne 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope Capricorne, que vous réserve 2016 ?</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Pour connaître votre horoscope 2016 capricorne, commencez maintenant votre consultation en ligne. Amour, activité professionnelle, amitié, famille, argent et santé, votre signe astral vous révèle toutes les tendances de l'année 2016. L'horoscope 2016 capricorne homme vous dévoile les moments les plus favorables pour faire une rencontre ou changer de travail. L'horoscope 2016 capricorne femme révèle vos points forts et vos ressources pour réaliser vos objectifs</p>
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
                        <h4>Votre horoscope 2016 Gratuit: Capricorne</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/capricorne.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_capricorne.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=cancer&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Amour, santé, argent, quoi de neuf dans votre horoscope 2016 capricorne ?</h2>
                        <p>Quoi de neuf dans mon horoscope 2016 capricorne ? Pour savoir ce que vous réserve votre avenir amoureux en 2016, les voyants consultent sans relâche les astres. Confiance, harmonie et bonheur se conjuguent pour vous faire vivre des moments très enrichissants. Quelques difficultés de communication seront les seuls nuages de votre duo. Vous vous sentez seul et cherchez l'âme soeur ? De belles rencontres viendront parsemer l'année 2016, à vous d'en profiter et d'en tirer le meilleur parti.</p>
                        <br/><p>Horoscope 2016 capricorne gratuit : que révèlent les astres ? Quelle que soit votre demande, découvrez votre horoscope 2016 pour connaître les grandes lignes de votre avenir. Dans le domaine financier également, les voyants vous indiquent la meilleure période de l'année pour réaliser des investissements, mais aussi le moment idéal pour demander une augmentation. Vous envisagez un voyage ou un achat important ? Grâce à votre horoscope 2016 capricorne gratuit, découvrez votre avenir financier en quelques minutes. Vous saurez désormais à quoi vous attendre pour l'ensemble de l'année et vous pourrez ainsi programmer vos dépenses.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Quels changements se profilent dans votre vie ?</h2>
                        <p>Vous êtes native de décembre ou janvier et vous aimeriez connaître votre horoscope 2016 capricorne femme ? Quels changements vont intervenir cette année ? Découvrez les principales planètes ayant une influence sur votre signe en 2016. Amour, amitié, argent, travail, santé et famille, votre horoscope complet vous attend pour vous livrer les grandes lignes de votre avenir. Mois par mois, les voyants détaillent votre évolution pour l'année qui s'annonce. Quels seront les moments-clés de cette année 2016 ? Quels changements se profilent à l'horizon ? Votre horoscope capricorne vous dévoile toutes les tendances de l'année 2016. </p>
                        <br/><p>Découvrez votre horoscope 2016 capricorne homme pour connaître votre avenir dans le domaine sentimental, financier ou familial. N'attendez pas une minute, décryptez la position des planètes en rapport avec votre signe pour prendre les meilleures décisions concernant votre avenir. Un changement de travail se profile peut-être, accompagné d'une belle augmentation. Parce qu'un homme averti en vaut deux, selon le dicton populaire, ne vous laissez pas surprendre par les événements. Découvrez les révélations des voyants sans plus attendre, votre horoscope 2016 capricorne n'a pas fini de vous étonner.</p>
                    </div>

                </div><br/>

    
            </div>

							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
	      
            </div>
     

         </div>
    
	
   
<?php include('include/footer_inc_horoscope.php'); ?>
   

