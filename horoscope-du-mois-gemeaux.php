<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>L'horoscope du mois Gémeaux : prédictions sur les jours à venir</title>
	<meta name="description" content="Signe Gémeaux :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-du-mois" >Horoscope du mois</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du mois Gémeaux</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Votre horoscope du mois Gémeaux dévoilé par des experts</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Gémeaux :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception.</p>
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
                        <h4>VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Gémeaux</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/gemeaux.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_gemeaux.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=gemeaux&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                <hr/>
               <!-- texte -->
                <div>
                    <div class="text-justify">
                        <p>Gouverné par la planète Mercure, Gémeaux est le troisième signe du zodiaque. Il correspond aux personnes nées entre le 21 mai et le 21 juin, et comporte trois décans. Toute personne qui désire avoir de sérieuses informations sur sa personnalité devra se référer à l'horoscope de son signe. Si vous êtes un natif du signe "Gémeaux", nos meilleurs astrologues vous dévoilent votre horoscope du mois. </p>
                        <h2>L'horoscope du mois Gémeaux, l'amour et le travail</h2>
                        <p>L'horoscope du mois accorde une importance particulière au domaine sentimental. A ce sujet, les prédictions sont réalisées en deux grands volets. En amour, la première partie de l'horoscope mensuel sera essentiellement consacrée à la première quinzaine tandis que la deuxième partie abordera les prédictions des quinze derniers jours du mois. Chaque partie sera dédiée aussi bien aux célibataires qu'aux natifs vivants en couple. Ainsi, chaque natif du signe "Gémeaux" aura de précieuses informations sur la tendance amoureuse, les occasions de rencontres, les aspirations du cœur... Au delà des prédictions, nos astrologues vous dévoileront la planète qui gouvernera votre vie sur le plan des amours et ce, tout au long du mois. </p>
                        <br/><p>Après les prédictions amoureuses, vous prendrez du plaisir à découvrir votre horoscope du travail. Celui-ci sera également organisé en deux parties et fera mention des obstacles que vous allez devoir surmonter, de l'attitude à adopter au cours de chaque quinzaine, des projets à entreprendre, etc. Grâce à l'horoscope du mois Gémeaux, vous découvrirez s'il est nécessaire ou non de faire preuve d'une superbe créativité. D'une façon générale, l'étude de votre signe vous aidera à fixer et atteindre vos objectifs professionnels.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Recevez de précieux conseils grâce à l'horoscope du mois Gémeaux</h2>
                          <p>La vitalité est l'un des points cruciaux de l'horoscope. Lorsque les astrologues parlent de vitalité, il s'agit d'étudier votre réserve d'énergie et d'optimisme. A ce propos, l'horoscope vous dévoile les astuces à mettre en pratique pour canaliser votre énergie. Grâce à vos prévisions astrologiques du mois, vous découvrirez que la pratique d'un art martial ou d'une discipline corporelle orientale pourrait vous permettre de décupler la puissance planétaire. Une fois que vous aurez canalisé vos énergies, vous n'aurez qu'à mettre en pratique les prédictions de la deuxième quinzaine pour finir votre mois en pleine forme.</p><br/>
                          <p>Pour finir, l'horoscope fera mention de conseils pour le mois. Cette partie des prédictions est particulièrement riche en enseignements qui aident dans les prises de décision. Les conseils de l'horoscope améliorent les rapports que l'on a avec ses proches. En faisant bon usage de l'horoscope du mois Gémeaux, vous aurez une meilleure conception de la vie.</p>     
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
   

