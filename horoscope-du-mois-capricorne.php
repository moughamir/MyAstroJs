<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Découvrez votre horoscope du mois capricorne avec Myastro</title>
	<meta name="description" content="Signe Capricorne :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-du-mois" >Horoscope du mois</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du mois Capricorne</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Horoscope du mois capricorne : pour voir l'avenir du bon côté</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Capricorne :L'horoscope du mois de Myastro répond à toutes vos questions et vous prépare pour tous les évènements du mois. Sans déception et sans exception.</p>
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

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_capricorne.xml');

 
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
                <hr/>
               <!-- texte -->
                <div>
                    <div class="text-justify">
                        <p>Croire qu'il est impossible d'agir sur son destin est une erreur. Par le biais de l'horoscope du mois capricorne, les personnes nées sous ce signe peuvent désormais compter sur les dons et la clairvoyance des médiums du site pour trouver les réponses à leurs nombreuses questions, qu'elles soient d'ordre personnelles et professionnelles.  </p>
                        <h2>Découvrir son horoscope du mois capricorne : toutes les réponses</h2>
                        <p>Il est bien souvent anxiogène de songer à ce que réserve l'avenir en terme d'événements. Grâce aux nombreux médiums qui se tiennent à la disposition des individus du signe du capricorne, le site offre une belle fenêtre sur le futur. Pour en apprendre davantage sur les grandes lignes de ce dernier, qu'il s'agisse des semaines ou des mois à venir, nul besoin d'avoir recours à sa carte bancaire. Par sms, par téléphone ou par internet, les voyants sont là pour répondre à toutes les zones d'ombre que l'on souhaite voir éclaircir. </p>
                        <br/><p>Face à l'incertitude de l'avenir, il est très facile de céder au doute. Prendre connaissance de son horoscope du signe du capricorne est un guide précieux pour mieux orienter ses futures décisions et faire en sorte que les rêves les plus fous se réalisent. Grâce à l'horoscope du capricorne, c'est le mois à venir qui est ainsi éclairé à la lumière des dons exceptionnels des médiums du site.  </p>
                    </div>
                    <div class="text-justify">
                          <h2>L'horoscope du mois capricorne : le destin enfin maîtrisé</h2>
                          <p>L'horoscope n'est pas le seul atout dont dispose le site pour accompagner les personnes capricornes dans leur quotidien et dans les étapes clés de leur vie. Le tarot est également un art divinatoire dont il est utile de s'intéresser. Pouvant être employés chaque jour, chaque semaine et chaque mois, les tarots en diront plus sur les différents sujets d'interrogations. Amour, travail, famille et santé ... tous les sujets qui constituent le sel de l'existence trouveront des réponses claires et précises.</p><br/>
                          <p>Les personnes nées sous le signe du capricorne peuvent également bénéficier de séances de tarot en couple. Pour savoir si l'être cher est celui avec lequel il sera possible de finir sa vie, pour découvrir si ses choix personnels et professionnels seront les bons à l'avenir, la lecture des tarots est un moyen d'une rare efficacité et qui apprendra à tout un chacun les principaux traits de sa personnalité et les caractéristiques de son signe. Pour prendre un temps d'avance sur le futur qui se profile à l'horizon, le site est une véritable mine d'information qui aidera beaucoup et ceci, à tous les niveaux de l'existence. Une aide précieuse dont il serait dommage de se priver.</p>     
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
   

