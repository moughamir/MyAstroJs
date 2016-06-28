<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 Cancer: est-ce une bonne année pour vous? - Myastro</title>
	<meta name="description" content="Signe Cancer : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Cancer 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope 2016 cancer</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Que vous réserve l'année 2016 en terme de réussite professionnelle, de santé et d'amour ? Pour le savoir et pouvoir ainsi devenir le maître de votre existence, la voyance est une méthode des plus efficace pour ne plus jamais craindre le futur.</p>
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
                        <h4>Votre horoscope 2016 Gratuit: Cancer</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/cancer.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_cancer.xml');

 
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
                                                        <a class="accordion-toggle btn-theme" href="/horoscope-2016-cancer-bis?tab=collapse1#collapse1">AMOUR

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-cancer-bis?tab=collapse2#collapse1">TRAVAIL

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-cancer-bis?tab=collapse3#collapse1">SANTÉ
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-cancer-bis?tab=collapse4#collapse1">ARGENT
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-cancer-bis?tab=collapse5#collapse1">MES CONSEILS POUR L'ANNÉE

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
                        <h2>Mon horoscope 2016 cancer en quelques clics seulement</h2>
                        <p>Pour vous donner toutes les chances de faire de l'année 2016 celle de votre consécration à tous les niveaux, mieux vaut se tourner vers des experts de la voyance pour entrevoir toutes les bonnes choses qui vont arriver dans votre vie. Différents médiums aux compétences reconnues sauront vous aider à y voir plus clair et à faire les bons choix pour la suite. Très à l'écoute et disposant de la capacité de prédire votre avenir, ils seront d'une aide appréciable pour vous. </p>
                        <br/><p>Pour profiter pleinement des visions des médiums du site, découvrez l'horoscope 2016 cancer pour homme ou pour femme. Il sera possible, sans carte bancaire, de ne plus envisager l'année qui s'annonce avec appréhension. En seulement quelques minutes, vous aurez toutes les informations qu'il vous manque pour orienter votre existence conformément à vos souhaits. Si le futur fait peur en règle générale, nos voyants sont à votre entière disposition pour lever toutes les zones d'ombre de votre vie et vous aider à prendre les bonnes décisions et ce, quelque soit le domaine abordé.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Horoscope 2016 cancer : Qu'est-ce qui vous attend en 2016 ?</h2>
                        <p>Parallèlement aux visions du médium concernant votre personne, vous pouvez également profiter d'un horoscope 2016 cancer gratuit. Lire l'horoscope 2016 cancer pour femme et pour homme vous fournira de précieuses indications sur les démarches à entreprendre, les personnes à qui accorder votre attention, etc... L'horoscope 2016 cancer pour homme et pour femme vous donnera des conseils clairs et précis pour toute l'année à venir. Amour, travail, santé, etc ... pas un seul thème qui vous est cher ne sera laissé de côté et pour chaque question que vous vous posez vous aurez un éclairage salutaire. Prendre connaissance de votre horoscope 2016 cancer pour femme et pour homme vous aidera à avancer.</p>
                        <br/><p>Votre horoscope 2016 pour femme ou homme répondra à toutes les questions que vous vous posez sur votre avenir. Vous êtes en quête d'harmonie amoureuse, vous recherchez des personnes vous correspondant selon leur signe, vous êtes au bon endroit pour y voir plus clair. Vous pouvez bénéficier d'un tarot quotidien, hebdomadaire ou mensuel et même bénéficier d'un tarot entièrement consacré à votre couple. Il est possible également de profiter d'une voyance par téléphone et même par sms. Avec autant de vecteurs pour entrevoir ce que l'année 2016 vous réserve, vous pourrez aborder cette dernière sans la moindre inquiétude.</p>
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
   

