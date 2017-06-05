<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Astrologie verseau : apprenez à vous connaitre avec Myastro</title>
	<meta name="description" content="Signe Verseau : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique." />
    
	<?php include('include/header_inc.php'); ?>

    

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        										
										<li><span class="h4"> <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/astrologie-gratuite" >Astrologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Votre personnalité astrologique Verseau</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">La personnalité astrologique verseau : les tendances de votre signe</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Verseau : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique.</p>
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
                        <h4>Votre personnalité astrologique gratuite: Verseau</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/verseau.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

  $xml1 = read_astrologie('verseau', 'h' ,2);
 $xml1['description']=utf8_encode_array($xml1['description']);
  foreach ($xml1['description'] as $s_cle=>$s_value)
  {
 //echo $s_cle;
 
 
    if ($s_cle===1)
	{
			$f1=$s_value;
  	}
	elseif ($s_cle===2)
	{
			$f2=$s_value;
	}
	
	elseif ($s_cle===3)
	{
			$f3=$s_value;
	}
	
	elseif ($s_cle===4)
	{
			$f4=$s_value;
	}
	
	elseif ($s_cle===5)
	{
			$f5=$s_value;
	}
	
	elseif ($s_cle===6)
	{
			$f6=$s_value;
	}
	
	elseif ($s_cle===7)
	{
			$f7=$s_value;
	}
	
				
	elseif ($s_cle===8)
	{
			$f8=$s_value;
			$f8=preg_replace('@<center[^>]*?>.*?</center>@si', '', $f8);
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

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse4">4
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse4" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f4;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse5">5
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse5" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f5;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>
<?php

if ($f6 != ""){
?>			
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse6">6
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f6;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>

<?php
}

if ($f7 != ""){
?>				
		
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">7
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f7;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>
<?php
}

if ($f8 != ""){
?>			
				
                                                <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse8">8
                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <p><?php
	echo $f8;
	?></p>
                                                        </div>
                                                    </div>
                                                </div>
												
											<?php
}
	?>	

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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=verseau&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Né entre le 20 janvier et le 19 février, découvrez votre personnalité, les grandes tendances de votre caractère, et vos dispositions au travail comme en amour. Votre astrologie verseau vous renseigne également sur les signes compatibles pour une entente harmonieuse. Vous pouvez approfondir votre étude en ayant recours à un astrologue en ligne.</p>
                        <h2>La personnalité verseau : découvrez votre caractère</h2>
                        <p>Votre date de naissance indique la position des astres dans votre ciel de naissance et influe sur votre caractère. Elle contribue à forger votre identité et dessine les grandes tendances de votre personnalité. Votre astro verseau vous dévoile vos qualités en termes de relation avec autrui, vos compétences au travail, votre attitude face aux événements de la vie, vos comportements les plus courants et vos points faibles à ne pas négliger. En consultant votre astrologie verseau, trouvez les réponses aux questions que vous vous posez depuis longtemps et ne restez plus isolé face à vos doutes.</p>
                        <br/><p>Vous avez parfois la sensation d'être désemparé face à certains coups du destin ? Ne restez pas seul avec votre inquiétude, votre astrologie vous guide efficacement sur la voie de la compréhension et de l'épanouissement personnel. Parce que vous êtes unique, votre portrait astrologique verseau peut être approfondi par nos astrologues professionnels joignables sur notre site. Ils prendront en compte votre date, votre heure et votre lieu de naissance pour dessiner une carte précise de la position des astres dans votre ciel de naissance. Vous découvrirez alors ce à quoi vous êtes véritablement destiné.</p>
                    </div>
                    <div class="text-justify">
                          <h2>L'astro verseau côté cœur : que prédisent les astres ?</h2>
                          <p>Parce que c'est un domaine trop important pour être laissé au hasard, découvrez votre astro verseau côté cœur et orientez positivement votre destin. Quel est votre caractère amoureux, êtes-vous possessif ou indépendant, jaloux ou libre, plutôt mariage ou plutôt chacun chez soi ? Autant de tendances qui vous renseigneront efficacement sur l'attitude à adopter lors d'une rencontre importante. Vous êtes en couple et vous ne comprenez pas toujours votre conjoint ? Découvrez votre compatibilité avec les autres signes du zodiaque pour une plus juste harmonie dans votre relation.</p><br/>
                          <p>Les natifs du verseau ont de grands traits de caractère en commun mais chaque être demeure unique. Votre ascendant précise votre personnalité et l'interprétation de votre ciel de naissance par un astrologue de métier, compétant et à l'écoute, peut vous éclairer durablement sur votre personnalité amoureuse. Vous comprendrez alors pourquoi certaines situations se répètent depuis des années, pourquoi vous restez seul malgré le désir d'être en couple, pourquoi vous ne parvenez pas à faire grandir une relation qui vous tient pourtant à cœur... Parce qu'il n'y a pas de fatalité, surtout dans le domaine amoureux, apprenez à mieux vous connaître pour mieux vous dépasser.</p>     
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
    
	
   
<?php include('include/footer_inc_personnalite_astrologique.php'); ?>
