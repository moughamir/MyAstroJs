<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope de la semaine Gémeaux: pour une semaine réussie - Myastro</title>
	<meta name="description" content="Signe Gémeaux :Les semaines s'enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l'horoscope de la semaine de Myastro." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-de-la-semaine" >Horoscope de la semaine</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de la semaine Gémeaux</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Horoscope de la semaine Gémeaux</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Gémeaux :Les semaines s'enchainent les unes après les autres et il vous arrive de ne pas toujours en être satisfait. Prévoyez et planifiez grâce à l'horoscope de la semaine de Myastro.</p>
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

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_hebdotay_complet_gemeaux.xml');

 
  foreach ($xml1['desc'] as $s_cle=>$s_value)
  {
  //echo $s_cle;
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
	elseif ($s_cle==='famille')
	{
			$famille=$s_value;
	}
	
	elseif ($s_cle==='citation_de_la_semaine')
	{
			$citation_de_la_semaine=$s_value;
			$citation_de_la_semaine=preg_replace('@<center[^>]*?>.*?</center>@si', '', $citation_de_la_semaine);
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
                                                            data-parent="#accordion1" href="#collapse2">TRAVAIL

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
                                                            data-parent="#accordion1" href="#collapse3">SANTÉ
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse3" class="accordion-body collapse">
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
                                                            data-parent="#accordion1" href="#collapse5">FAMILLE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $famille;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">CITATION DE LA SEMAINE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $citation_de_la_semaine;
	
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
                <!-- texte -->
                <div>
                    <div class="text-justify">
                        <p>L'astrologie offre un petit coup de pouce à ne pas négliger, qui nous accompagne pour prendre des décisions, pour anticiper sur la semaine à venir, ou encore pour nous éclairer sur ce doute qui nous poursuit. Grâce à l'horoscope de la semaine pour les gemeaux, vous savez à quoi vous attendre pour les prochains jours, et vous disposez de tous les outils pour vous préparer au mieux à toutes les éventualités !</p>
                        <h2>Le meilleur horoscope de la semaine gemeaux</h2>
                        <p>Evidemment, l'horoscope ne nous dira pas en détail ce qu'il se passera la semaine prochaine. Mais il nous en donne la couleur, l'atmosphère, ainsi que les grandes lignes. Vous avez un rendez-vous déterminant pour votre carrière, la semaine prochaine ? Vousvous demandez si vous allez enfin rencontrer l'amour, et dans quelles circonstances ? Vous aimeriez savoir quelle sera l'issue de ce conflit amical ou de cette tension familiale qui vous agace ? Avec votre horoscope de la semaine gemeaux, vous avez des pistes de réponses !</p>
                        <br/><p>Il y a de multiples manières d'avoir recours à son horoscope de la semaine gemeaux. Certaines personnes ne le consultent qu'occasionnellement, dans une période très angoissée, ou à un moment qui semble alors très déterminant. D'autres ont pris l'habitude de le lire chaque semaine à heure fixe, comme un mot d'encouragement pour entamer cette semaine qui commence. Il existe également des amateurs d'astrologie qui lisent leur horoscope de temps à autre comme un porte bonheur.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Tout savoir avec l'horoscope de la semaine gemeaux</h2>
                          <p>Nos astrologues sont talentueux et plein d'expériences. Ils sont curieux et humbles, et adorent continuer à perfectionner leur art. Ainsi, ils livrent chaque semaine un horoscope pour les gémeaux  d'une extrême justesse, et doté de nombreux conseils pratiques. Grâce à ces professionnels avisés de l'astrologie, notre horoscope de la semaine gemeaux est toujours précis, et les prédictions annoncées, qu'elles se situent dans le domaine du coeur, dans le champ professionnel ou relationnel, se vérifient tout au long de la semaine, pour le plus grand plaisir des gémeaux !</p><br/>
                          <p>Nous avons tous des coups de blues, des incertitudes ou des petites angoisses : ces contretemps font partie de la vie au même titre que les grandes périodes de bonheur. Mais y faire face seul n'est pas facile, et trouver des réponses sans un coup de pouce est presque impossible. Grâce à l'astrologie, vous dissipez vos doutes en tendant vers une piste de réponse, ou en alimentant votre réflexion. Avec l'horoscope de la semaine pour les gémeaux, vous abordez les prochains jours tranquillement, en toute sérénité !</p>     
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
    
	
   
<?php include('include/footer_inc_horoscope_semaine.php'); ?>
   

