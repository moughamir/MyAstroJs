<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope de l'amour balance : une aide précieuse</title>
	<meta name="description" content="Signe Balance :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
 
<?php include('include/header_inc.php'); ?>
<style>
  .widget .form-part{
        background-color:#eb2692;
  }
  .widget #form-w .btn_button{
        background-color: #1871b9;
  }
</style>

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" >Horoscope de l'amour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de l'amour Balance</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Avancer sereinement grâce à un horoscope de l'amour balance</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Balance :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond.</p>
                                </div>

                            </div>
                             
<br>
                            </header>

                            <span class="clearfix"></span>

                          <!--  ************************ ici ****************************  -->
 <div class="row-fluid">
          	<!-- Right sidebar -->
							<?php include('include/bloc-droit-secondaire-2.php'); ?>	
							
            <!-- main content -->
            <div class="span6 main-content">

               

               <aside class="widget w-pictures">
                    <div class="widget-title">
                        <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Balance</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/balance.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss3('http://www.asiaflash.com/horoscope/rss_mensuel_amoureux_balance.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=balance&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Gouvernée par Vénus, la planète de l'amour, la Balance accorde une grande place aux sentiments. Longues discussions, dîners romantiques... vous recherchez la perfection. Et ce n'est pas toujours simple ! Pour vous aider à avancer en amour, vous avez la possibilité de consulter l'horoscope de l'amour de la Balance. </p>
                        <h2>Les atouts des balances dans le domaine amoureux</h2>
                        <p>Nées au tout début de l'automne, les Balances possèdent charme et tempérament. Ce signe d'air aime l'harmonie et les ambiances douces, les relations amicales et amoureuses. Parfois indécise, la Balance aime écouter les autres. Toujours à la recherche de l'équilibre, la Balance déteste les conflits et joue de ses charmes pour conserver le calme nécessaire à son bien-être. Amoureuse inconditionnelle, elle est fidèle. Pas d'anticonformisme pour elle, les choses doivent être faites dans l'ordre et mener à une relation parfaite ou l'amour doit être total et partagé. </p>
                        <br/><p>Les natifs de la Balance sont nés entre le 22 septembre et le 22 octobre. Les planètes au moment de leurs naissances mais aussi les positions de celles-ci ont influencé leurs caractères. Au jour le jour, ces positionnements évoluent et pour traduire ces mouvements, des professionnels de l'astrologie vous proposent un horoscope de qualité pour vous guider dans le domaine de l'amour. Un horoscope de l'amour Balance vous aidera à comprendre vos relations mais également à savoir quoi faire en cas de difficultés.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Un horoscope de l'amour Balance pour réussir sa vie amoureuse </h2>
                          <p>Si vous avez décidé de vivre sans doute et de ne plus vous poser ces questions, qui minent votre quotidien, il existe plusieurs méthodes de divination dont la plus appréciée est sans conteste l'astrologie. Les astrologues vont étudier les mouvements des planètes principales Mars, Mercure, Vénus, Neptune ou encore Saturne mais également du Soleil et de la Lune.  Pour savoir quelles décisions prendre face à un problème - Est-il le compagnon idéal ? Me convient-il ? Notre relation est-elle sérieuse ?  - mais aussi pour pouvoir anticiper les difficultés, consulter son horoscope est une aide précieuse.  </p><br/>
                          <p>Vous ne savez que penser de votre partenaire ? Vous avez envie que les choses deviennent plus sérieuses ? Vous pourrez trouver des réponses avec l'horoscope de l'amour Balance. Avec des conseils précis, votre avenir amoureux va s'éclairer. Et si vous voulez plus d'informations, vous avez la possibilité de consulter vos compatibilités amoureuses, les profils astrologiques de vos relations ou encore obtenir des réponses avec un tirage du tarot.  Votre vie amoureuse sera plus simple grâce à l'astrologie.</p>     
                    </div>
                </div><br/>

                <!-- Horizontal Categories -->
                
            </div>


			
            
							<!-- Left sidebar -->
							<?php  $tracking = '';
                            include('include/bloc-gauche-secondaire-2.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_amour.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

