<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 bélier : Amour, santé et travail | Myastro</title>
	<meta name="description" content="Signe Bélier : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Bélier 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope 2016 belier</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">L'horoscope est une pratique divinatoire basée sur l'astrologie. Il s'agit d'un ensemble de prédictions issues de l'étude de la position des planètes dans le système solaire. A travers l'horoscope, il est possible de prédire des événements individuels ou collectifs sur une durée précise. Si vous êtes né(e) entre le 20 mars et le 20 avril, prenez connaissance de l'horoscope 2016 bélier gratuit afin d'avoir une idée précise sur les grandes tendances de l'année. </p>
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
                        <h2 class="h4">Votre horoscope 2016 Gratuit: Bélier</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/belier.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_belier.xml');

 
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
                                                        <a class="accordion-toggle btn-theme" href="/horoscope-2016-belier-bis?tab=collapse1#collapse1">AMOUR

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-belier-bis?tab=collapse2#collapse1">TRAVAIL

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-belier-bis?tab=collapse3#collapse1">SANTÉ
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-belier-bis?tab=collapse4#collapse1">ARGENT
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-belier-bis?tab=collapse5#collapse1">MES CONSEILS POUR L'ANNÉE

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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=belier&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Les tendances sentimentales et professionnelles de mon horoscope 2016 bélier</h2>
                        <p>Les célibataires du signe bélier profiteront de l'année 2016 pour faire de belles rencontres. Il faudra faire preuve de patience car plusieurs personnes se succéderont avant que le bon partenaire se dévoile. Pour les personnes en couple, la période hivernale sera très romantique. L'horoscope 2016 belier femme prédit que le chant des oiseaux du printemps donnera une grande inspiration qui fera naître l'envie de s'engager. Si vous êtes de sexe masculin, l’horoscope 2016 bélier homme révèle que vous aurez envie de projets à long terme ou d'un voyage avec votre bien-aimé afin de sortir de votre zone de confort. Pour mieux surmonter cette étape, il faudra écouter votre cœur plutôt que votre raison.</p>
                        <br/><p>Professionnellement, le bélier passera un cap important au cours de l'année 2016. Une situation très inattendue se réalisera et vous en tirerez beaucoup de satisfaction. Au début de l'année, la pression professionnelle sera intense. Mais celle ci se dissipera avec le temps. Peu à peu, vous parviendrez à mieux gérer votre temps et à prendre les bonnes décisions. Toutefois, l'horoscope 2016 bélier homme invite à rester sur ses gardes car la réussite fera des envieux. Il faudra donc faire attention à son entourage et éliminez les rivaux. L'horoscope 2016 bélier révèle que vos efforts professionnels seront récompensés.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Les tendances financières et votre état de santé</h2>
                        <p>Côté argent, l'année 2016 ne vous réserve pas de mauvaises nouvelles. Elle débutera de la plus belle des manières avec d'énormes retombées financières. Vos affaires prospéreront et feront naître de grands projets. Pensez à rationaliser vos dépenses et faites des économies pour vos vacances, car vous aurez besoin d'un changement de décor. Toutefois, les difficultés ne manqueront pas ; notamment au deuxième trimestre. Vous serez confronté à certains imprévus financiers. Gardez le moral et servez-vous de vos économies pour résoudre ces problèmes.</p>
                        <br/><p>Sur le plan de la santé, l'horoscope 2016 bélier femme révèle que les natifs de ce signe jouiront d'une santé de diable. Les sportifs seront en pleine forme et auront le vent en poupe. Cependant, il faudra se ménager et éviter les excès. Les personnes prédisposées aux douleurs rhumatismales et arthritiques doivent se montrer vigilantes. Au cours de l'année 2016, adoptez une bonne hygiène de vie, évitez les efforts violents et optez pour une alimentation énergétique.</p>
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
    
	
   
<?php include('include/footer_inc_horoscope_2016.php'); ?>
   

