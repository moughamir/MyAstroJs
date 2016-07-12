<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
   <title>Horoscope de l'amour cancer : souriez à la vie</title>
	<meta name="description" content="Signe Cancer :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-de-l-amour" >Horoscope de l'amour</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope de l'amour Cancer</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                             <h1 itemprop="headline">Prenez en main votre vie sentimentale grâce à l'horoscope de l'amour cancer</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Cancer :Vous vous posez des questions sur votre partenaire? Vous entretenez une relation platonique sans savoir quoi faire? L'horoscope de l'amour vous répond.</p>
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
                        <h2 class="h4">VOTRE HOROSCOPE DE LA SEMAINE GRATUIT: Cancer</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/cancer.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss3('http://www.asiaflash.com/horoscope/rss_mensuel_amoureux_cancer.xml');

 
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=cancer&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Si votre jour de naissance se situe entre le 21 juin et le 22 juillet, alors vous serez intéressé par les prévisions et les prédictions de l'horoscope de l'amour pour le Cancer. En effet, plus que pour tout autre signe astrologique, les relations interpersonnelles occupent une place de choix chez le Cancer. Pouvoir les gérer au mieux est donc la clé, non seulement d'un bonheur en amour mais également d'une harmonie plus globale.</p>
                        <h2>Horoscope de l'amour cancer : de quoi parle-t-on ?</h2>
                        <p>Le Cancer est un être très sentimental, véritablement porté sur les relations affectives. L'amour occupe ainsi une place très importante dans votre vie et a un impact considérable sur votre équilibre psychique. Vous permettant de mieux cerner les contours de votre vie amoureuse, un horoscope vous donnera donc l'opportunité de mieux gérer ce pan de votre existence, et le reste de votre vie par ricochet. Pour cela, des informations de différents ordres concernant votre vie amoureuse vous sont fournies. Cela inclut des indications concernant tous les Cancer de façon générale, ainsi que des conseils plus spécifiques.</p>
                        <br/><p>Les informations fournies par l'horoscope de l'amour cancer portent essentiellement sur l'évolution de la vie amoureuse, l'explication des faits et évènements, ainsi que sur la compatibilité amoureuse avec les autres signes. Ces informations sont fournies de façon globale pour tous les natifs du signe Cancer, puis déclinées de façon spécifique pour chaque décan. En effet, deux natifs du Cancer peuvent avoir des compatibilités ou des comportements affectifs différents. Il faut également noter qu'en fonction du mouvement des astres, ces prédictions peuvent beaucoup évoluer. D'où l'intérêt de consulter régulièrement votre horoscope.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Les bienfaits d'un horoscope de l'amour pour un cancer</h2>
                          <p>Compte tenu de l'importance de la sphère sentimentale dans le psychisme du Cancer, des décisions incongrues ou les incompréhensions de certains faits peuvent occasionner des déséquilibres importants. Par conséquent, une consultation fréquente d'un horoscope de l'amour ne pourra être que bénéfique pour les personnes de ce signe. Ce sera l'occasion de mieux comprendre les choses, les anticiper, savoir les affronter afin d'en tirer toujours le meilleur parti. L'horoscope amoureux aide donc le cancer à effectuer les choix qui lui siéront pour vivre une vie sentimentale saine et épanouie.</p><br/>
                          <p>Ceci est d'autant plus crucial, lorsqu'il s'agit de s'engager sur le long terme dans une relation amoureuse, alors que l'on est d'une sensibilité profonde comme le cancer. Mais aussi, lorsque la pression dans une relation est très forte et que l'on veut s'en soustraire. Savoir pour le cancer, si son élan de cœur est ce qui lui est profitable, sera possible avec une consultation fréquente de ses prédictions astrologiques. Prendre les rênes de votre vie sentimentale, alors qu'elle vous impacte fortement en tant que Cancer, sera à votre portée désormais grâce à votre horoscope de l'amour cancer.</p>     
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
    
	
   
<?php include('include/footer_inc_horoscope_amour.php'); ?>
   

