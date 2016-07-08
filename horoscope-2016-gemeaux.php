<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 Gémeaux: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Gémeaux : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Gémeaux 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Mon horoscope 2016 gemeaux</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Cette journée commence, et vous ne savez pas très bien comment l'aborder... Une question vous taraude, un doute vous hante, ou vous êtes tout simplement curieux : heureusement, notre service d'astrologie peut éclairer l'horoscope 2016 gemeaux, pour tout savoir sur ce que votre avenir vous réserve. Allez-vous rencontrer le grand amour ? Quel tournant va prendre votre carrière ? Pour tout savoir, direction l'horoscope 2016 gemeaux gratuit !</p>
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
                        <h4>Votre horoscope 2016 Gratuit: Gémeaux</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/gemeaux.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_gemeaux.xml');

 
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
                                                        <a class="accordion-toggle btn-theme" href="/horoscope-2016-gemeaux-bis?tab=collapse1#collapse1">AMOUR

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-gemeaux-bis?tab=collapse2#collapse1">TRAVAIL

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-gemeaux-bis?tab=collapse3#collapse1">SANTÉ
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-gemeaux-bis?tab=collapse4#collapse1">ARGENT
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-gemeaux-bis?tab=collapse5#collapse1">MES CONSEILS POUR L'ANNÉE

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
                 <!-- texte -->
                <div>
                    <div class="text-justify">
                        <h2>Quel horoscope en 2016 pour les gemeaux?</h2>
                        <p>Troisième signe du zodiaque, le Gémeaux est sous la tutelle de la planète Mercure, et fait partie de cette zone que les astrologues nomment la duplicité de l'air : voici exactement la caractéristique qui confère à tous les gemeaux une grande faculté d'adaptation, et une infaillible souplesse. Dotés d'un bon sens de la communication, d'une nature souriante et attentive aux autres, les gémeaux sont un élément stabilisateur, et savent insuffler autour d'eux une bonne humeur généreuse, au travail comme à la maison.</p>
                        <br/><p>Adieu 2014, et bonjour 2016 ! A la fin d'une année, la tradition veut que l'on émette des souhaits pour l'année qui commence : les fameuses résolutions. Seulement, toutes les décisions ne nous appartiennent pas, et les lecteurs assidus des astres le savent. Ainsi, notre équipe réunit les astrologues d'aujourd'hui les plus perspicaces, pour vous offrir au quotidien un horoscope 2016 gemeaux pour femme ou un horoscope 2016 gemeaux pour homme de grande qualité. Alors n'hésitez plus à venir nous consulter ! </p>
                    </div>
                    <div class="text-justify">
                        <h2>Disposer de toutes les clés grâce à mon horoscope 2016 gemeaux</h2>
                        <p>A la veille d'un rendez-vous important comme une consultation à l'hôpital ou un entretien d'embauche, il peut s'avérer utile de consulter son horoscope, pour savoir à quoi s'attendre, et anticiper au mieux toutes les situations. Et pourquoi pas consulter votre horoscope 2016 gemeaux gratuit sur une base quotidienne ? Après tout, chaque journée apporte son lot de surprises, face auxquelles il est toujours mieux d'être bien préparé : c'est la condition première pour savoir comment réagir, et prendre des décisions avisées quant à votre avenir.</p>
                        <br/><p>Car il n'est jamais simple de répondre aux grandes questions de la vie. Quand vais-je trouver l'amour ? Comment vais-je vivre dans quelques semaines ou quelques mois ? Vais-je faire des rencontres intéressantes ? Vais-je réussir à atteindre mon but professionnel ? En vous donnant des pistes de réponses concernant toutes vos problématiques, l'horoscope 2016 gemeaux pour homme ou l'horoscope 2016 gemeaux pour femme vous ouvrent une fenêtre sur votre avenir. Pourquoi ne pas en profiter ? Petit coup de pouce ou grand soulagement, l'horoscope 2016 gemeaux vous accompagne au quotidien. Humeur, amour, argent, travail, rencontres : nous vous livrons un concentré de justesse pour anticiper l'avenir en toute sérénité ! </p>
                    </div>

                </div><br/>

            </div>


							<!-- Left sidebar -->
							<?php include('include/bloc-gauche-secondaire.php'); ?>
								</div>

						

							</div>
							 
       
            </div>

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_2016.php'); ?>
   

