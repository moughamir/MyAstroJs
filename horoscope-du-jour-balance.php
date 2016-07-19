<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope du jour Balance : Amour travail et santé | Myastro.fr</title>
	<meta name="description" content="Signe Balance :Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
 
<?php include('include/header_inc.php'); ?>
<link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        
										
										
										<li>
										
                                           <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-du-jour">Horoscope du jour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du jour Balance</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">L'horoscope du jour Balance, une assistance pour vous simplifier la vie</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">L'hésitation est une des caractéristiques du signe de la Balance. C'est la raison pour laquelle, une aide quotidienne peut vous aider à trouver le bon chemin en cas de doute. Un horoscope du jour Balance est donc une assistance incontournable pour améliorer votre vie. "Mon horoscope du jour Balance" , ce sont un horoscope du jour Balance pour homme et un horoscope du jour Balance pour femme pour ne plus perdre de temps à vous poser des questions inutiles.</p>
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
                        <h4>VOTRE HOROSCOPE DU JOUR GRATUIT: Balance</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/balance.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_balance.xml');

 
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
	elseif ($s_cle==='vie_sociale')
	{
			$vie_sociale=$s_value;
	}
	elseif ($s_cle==='citation_du_jour')
	{
			$citation_du_jour=$s_value;
	}
	elseif ($s_cle==='nombre_de_chance')
	{
			$nombre_de_chance=$s_value;
	}
		elseif ($s_cle==='clin_d\'oeil')
	{
			$clin_d_oeil=$s_value;
			$clin_d_oeil=preg_replace('@<center[^>]*?>.*?</center>@si', '', $clin_d_oeil);
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
                                                            data-parent="#accordion1" href="#collapse6">VIE SOCIALE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse6" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $vie_sociale;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse7">CITATION DU JOUR

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse7" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $citation_du_jour;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse8">NOMBRE DE CHANCE

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse8" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $nombre_de_chance;
	
	?>
                                                        </div>
                                                    </div>
                                                </div>


												 <div class="accordion-group">
                                                    <div class="accordion-heading">
                                                        <a class="accordion-toggle btn-theme collapsed" data-toggle="collapse"
                                                            data-parent="#accordion1" href="#collapse9">CLIN D'OEIL

                                                         <i class="icon-angle-down pull-right"></i>
                                                        </a>
                                                    </div>
                                                    <div id="collapse9" class="accordion-body collapse">
                                                        <div class="accordion-inner">
                                                            <?php
	
			echo $clin_d_oeil;
	
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

               <!-- texte -->
                <div>
                    <div class="text-justify">
                        <h2>Un signe, un caractère, un horoscope</h2>
                        <p>Vous êtes Balance car lors de votre naissance, le soleil se trouvait dans la constellation de la Balance. La position des différentes planètes va influencer votre caractère et votre vie. C'est la raison pour laquelle des voyants professionnels vont étudier les astres et vous fournir un horoscope du jour Balance gratuit. Vous pourrez alors avancer dans la vie sans vous poser ces sempiternelles questions qui minent votre quotidien. Les informations qui vous seront données sont basées sur la carte du ciel du jour.</p>
                         <br/><p>Signe d'Air, vous êtes bien souvent dans le questionnement. Pour ne pas blesser les autres, vous réfléchissez aux diverses solutions qui se présentent à vous. Peut-être un peu trop. Cette perte de temps peut être réduite grâce à des prévisions précises fournies par votre horoscope quotidien, établi par votre astrologue. Positions des planètes, transits négatifs ou positifs..., tout est étudié pour être le plus complet possible. Vous êtes sûr d'obtenir un horoscope sûr.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Pour vous guider au quotidien, votre horoscope du jour Balance</h2>
                        <p>Pour être complet, un horoscope quotidien doit être composé de plusieurs rubriques. Amour, travail, santé, argent, vie sociale ou famille, vous pourrez découvrir les réponses à vos problèmes. Va-t-il vous revenir ? Obtiendrez-vous cette promotion tant attendue ? Allez-vous vous faire de nouveaux amis ? Votre horoscope vous guidera. Avec des conseils, votre chiffre et une citation du jour, vous en saurez plus sur la journée qui vous attend. Et si vous avez encore des questions, il vous est possible d'utiliser le tarot divinatoire.</p>
                        <br/><p>Horoscope du jour Balance pour homme ou horoscope du jour Balance pour femme, les prévisions sont adaptées au mieux à chacun. Véritable outil pour connaître votre avenir, vous ne pourrez rapidement plus vous en passer. Cette aide quotidienne vous permet de savoir où vous diriger, que faire - ou ne pas faire - face à une situation. Votre climat astral n'aura plus de secret et vous pourrez être rassuré. Les Balances trouveront du réconfort dans la lecture de leurs prévisions et pourront avancer le plus simplement du monde vers l'avenir. </p>
                    </div>

                </div><br/>

                <!-- Horizontal Categories -->
               
            </div>


							<!-- Left sidebar -->
							<?php 
                            $tracking = 'balance';
                            include('include/bloc-gauche-secondaire-2.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_jour.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

