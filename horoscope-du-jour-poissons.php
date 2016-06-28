<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope du jour Poissons: comment appréhender votre journée? - Myastro</title>
	<meta name="description" content="Signe Poissons :Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
    <script src="js/jquery-1.11.js"></script>
    <link rel="stylesheet" href="css/infobulle.css" />
 
<?php include('include/header_inc.php'); ?>
<link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" /> 
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
										
                                           <span class="h4"> <a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-du-jour">Horoscope du jour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du jour Poissons</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Entrevoyez votre futur avec l' horoscope du jour Poisson</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Vous qui n'aimez pas l'incertitude et qui avez besoin de réponses à vos nombreuses questions sur votre vie, l'horoscope du jour Poisson homme et femme vous guidera dans vos futures grandes décisions.</p>
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
                        <h2 class="h4">VOTRE HOROSCOPE DU JOUR GRATUIT: Poissons</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/poissons.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_poissons.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=poissons&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Mon horoscope du jour Poisson gratuit élaboré par de grands voyants</h2>
                        <p>L'année prochaine sera-t-elle une grande année pour vous? Réussirez-vous à accomplir tous les objectifs que vous vous êtes fixé? Avec l'horoscope du jour Poisson, vous allez pouvoir vous appuyez sur des voyants de grandes valeurs pour mieux cerner les contours de votre avenir. Par téléphone, par sms ou tout simplement en ligne, aucun détail ne vous sera caché pour votre plus grand bonheur.</p>
                        <br/><p>L'horoscope du jour poisson femme et homme est une formidable méthode pour lever le voile sur tous les domaines qui vous tiennent à coeur. Quel que soit votre situation personnelle et professionnelle, il existe forcément des points que vous souhaitez voir préciser dans le futur et mon horoscope du jour poisson remplira cette tâche au delà de vos espérances. Prendre connaissance de votre horoscope Poisson quotidiennement lèvera beaucoup de doutes sur votre futur. </p>
                    </div>
                    <div class="text-justify">
                          <h2>L'horoscope du jour Poisson : pour vivre mieux</h2>
                          <p>Découvrir votre horoscope du jour Poisson homme n'est pas la seule prestation que nous vous offrons. Sans avoir à utiliser votre carte bancaire, vous avez l'occasion de vous inscrire très facilement et rapidement pour bénéficier notamment de séances de tarot. Ces dernières peuvent être réalisés tous les jours, toutes les semaines ou tous les mois selon vos désirs et vos préoccupations du moment. Vous pourrez même profiter d'un tarot de couple qui vous fournira des indices précieux sur votre vie sentimentale et sa trajectoire future. </p><br/>
                          <p>L'horoscope du jour Poisson femme et homme fournit une pléiade d'informations non seulement sur votre avenir mais également sur votre personnalité selon votre signe astrologique. Grâce aux dons de nos médiums qui disposent d'une longue expérience dans l'univers des arts divinatoires, vous allez pouvoir en seulement quelques instants dissiper ce brouillard qui obstrue votre avenir. Le futur a toujours effrayé de nombreuses personnes. Quels sont les décisions que vous devez prendre sur le plan professionnel ? Allez-vous rencontrer l'amour de votre vie prochainement ? Votre couple est-il amené à durer dans le temps? Amour, travail, santé, argent sans oublier la fameuse citation du jour ...  L'horoscope du jour pour vous qui êtes du signe du poisson sera un véritable rayon de soleil qui ne vous fera plus jamais craindre les jours prochains. Nos prestations sont donc à utiliser sans la moindre modération.</p>     
                    </div>

                </div>

                <!-- Horizontal Categories -->
               
            </div>


			
            
							<!-- Left sidebar -->
							<?php 
                            $tracking = 'poissons';
                            include('include/bloc-gauche-secondaire-2.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_jour.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

