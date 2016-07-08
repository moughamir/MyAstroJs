<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope du jour Verseau: comment appréhender votre journée? - Myastro</title>
	<meta name="description" content="Signe Verseau :Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
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
										
                                           <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-du-jour">Horoscope du jour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du jour Verseau</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Découvrez votre horoscope du jour verseau</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">horoscope jour verseau homme : quelle meilleure façon d'aborder l'avenir avec optimisme et confiance qu'en prenant connaissance de son horoscope du jour verseau homme et femme? </p>
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
                        <h2 class="h4">VOTRE HOROSCOPE DU JOUR GRATUIT: Verseau</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/verseau.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horojour_verseau.xml');

 
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

               <!-- Texte -->
                <div>
                    <div class="text-justify"> 
                        <h2>mon horoscope du jour cerveau en toute simplicité</h2>
                       <p>Pour envisager votre futur avec un maximum de sérénité, il peut être judicieux de s'adjoindre les talents de mediums expérimentés qui vous fourniront des éléments de premier ordre sur votre vie à venir. Pour ne jamais perdre le contrôle des événements, vous pouvez consulter l'horoscope du jour Verseau homme ou femme pour découvrir ce qui vous attend au jour le jour.  </p>
                         <br/><p>Sans avoir à utiliser la moindre carte bancaire, vous allez pouvoir en apprendre davantage sur ce que les prochains temps vous réservent. Par téléphone, par sms ou en ligne, plus aucun détail de votre existence ne vous échappera. Pour obtenir des réponses sur toutes les questions que vous vous posez, il n'y a pas de moyen plus efficace que de lire votre horoscope du jour verseau femme ou homme.</p>
                    </div>
                    <div class="text-justify">
                          <h2>comment bénéficier d'un horoscope du jour Verseau gratuit ?</h2>
                          <p>Mon horoscope du jour verseau n'est pas à prendre à la légère. Quel que soit le domaine de votre vie pour lequel vous avez besoin de réponses claires et précises, l'horoscope du jour verseau femme ou homme vous apportera toute la lumière sur les nombreuses zones d'ombres de votre vie. Vous souhaitez savoir si vous allez obtenir votre promotion tant espérée dans votre travail, vous souhaitez savoir si votre couple est amené à durer dans le temps, etc... Autant de questionnements qui ont des réponses à travers l'horoscope. Quel que soit l'état d'esprit dans lequel vous vous trouvez, prendre connaissance quotidiennement de votre horoscope Verseau ne pourra qu'être pour vous une source de bien-être et d'inspiration pour vos futurs actes.  </p><br/>
                          <p>Outre le fait de pouvoir découvrir chaque jour votre horoscope Verseau, vous pouvez également pousser encore plus loin votre curiosité par le biais du tarot que vous pouvez vous faire tirer tous les jours, toutes les semaines ou tous les mois. Vous en apprendrez ainsi beaucoup plus sur votre personnalité, sur les personnes présentant des compatibilités amoureuses avec vous et bien d'autres informations essentielles qui vous aideront à faire les meilleurs choix dans votre vie. Très facile à utiliser, vous mettant en relation avec des voyants disposant de réels pouvoirs de medium, l'horoscope du jour Verseau vous apportera toute la confiance en vous dont vous avez besoin au quotidien. Travail, amour, santé, famille... Aucun thème qui vous est cher ne pourra echapper aux visions asserrees de nos voyants.</p>     
                    </div>

                </div>

                <!-- Horizontal Categories -->
                
            </div>


			
            
							<!-- Left sidebar -->
							<?php 
                            $tracking = 'verseau';
                            include('include/bloc-gauche-secondaire-2.php'); ?>
								</div>

						

							</div>
							 
									  

                           
            </div>


                        
                      

         </div>
    
	
   
<?php include('include/footer_inc_horoscope_jour.php'); ?>
<script src="js/formValidator-w.js"></script>
<script src="js/infoBulle.js"></script>
   

