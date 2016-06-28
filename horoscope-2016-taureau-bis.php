<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 Taureau: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Taureau : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Taureau 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope 2016 : qu'est-ce que la nouvelle année réserve aux taureaux ?</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Une nouvelle année est souvent l'occasion de réfléchir et de faire le bilan des douze mois écoulés mais aussi d'élaborer des projets dans tous les domaines pour la nouvelle période qui débute. Pour savoir ce que l'avenir leur réserve, les personnes nées entre le 21 avril et le 20 mai peuvent consulter un horoscope 2016 taureau. Pourquoi affronter les imprévus quand vous pouvez d'ors et déjà avoir une bonne idée des grandes lignes de votre avenir grâce à cet horoscope gratuit, établi par des professionnels compétents et confirmés ?</p>
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
                        <h4>Votre horoscope 2016 Gratuit: Taureau</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/taureau.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_taureau.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=cancer&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Percer les mystères de l'amour</h2>
                        <p>Pas toujours évident de savoir si une relation est sérieuse ou si l'on va rencontrer quelqu'un. Sur notre site, vous trouverez aussi bien un horoscope 2016 taureau pour homme qu'un horoscope 2016 taureau pour femme qui vous aidera à y voir plus clair dans votre avenir amoureux. A quoi ressemblera 2016 ? Trouverez-vous l'amour ? Ferez-vous une rencontre inattendue ? Notre horoscope 2016 taureau gratuit vous aide à anticiper cette nouvelle année et vous dévoile des informations précieuses sur votre avenir sentimental. Profitez de 2016 en faisant confiance à votre horoscope 2016 taureau.</p>
                        <br/><p>Vous êtes marié ou dans une relation de longue durée et vous voudriez savoir si votre amour va continuer, voire même se renforcer ? Est-ce que je vais avoir un enfant ? Ma relation avec mon compagnon ou ma compagne va-t-elle devenir encore plus intense ? Allons-nous partir ensemble faire un beau voyage ? Si vous vous posez fréquemment ce genre d'interrogations, direction la rubrique mon horoscope 2016 taureau sur notre site. Pour les célibataires, la question de savoir si l'on va rencontrer quelqu'un est souvent essentielle. Apprenez si l'année 2016 sera placée sous le signe de la séduction, de l'amour, de la complicité et de la sensualité grâce à votre horoscope détaillé prédisant les grands événements de votre vie amoureuse.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Cerner les enjeux professionnels à venir avec l'horoscope 2016 taureau</h2>
                        <p>Un autre domaine qui génère bien souvent de nombreux doutes et questions est la sphère professionnelle. Pensez à consulter votre horoscope 2016 taureau pour homme ou votre horoscope 2016 taureau pour femme pour savoir ce que l'avenir vous réserve. Une mutation, une augmentation ou une redéfinition de votre poste sont peut-être au programme !</p>
                        <br/><p>Vous adorez votre travail et vous rêvez de voir évoluer votre emploi ? Votre horoscope vous aidera à savoir si votre poste va se diversifier. Vous en avez assez de votre entreprise et rêvez de travailler différemment, dans un autre lieu voire même de vous mettre à compte ? Lire votre horoscope vous aidera à anticiper les douze mois à venir, afin de toujours mener vos projets à bien.</p>
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
    
	
   
<?php include('include/footer_inc_horoscope.php'); ?>
   

