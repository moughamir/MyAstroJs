<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Horoscope 2016 verseau gratuit l’astrologie Myastro</title>
	<meta name="description" content="Signe Verseau : L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
 
 
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
                                        <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/horoscope-2016">Horoscope 2016</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope Verseau 2016</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Horoscope Verseau 2016</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Né entre le 21 janvier et le 18 février, votre horoscope 2016 verseau gratuit vous réserve de belles surprises. Côté cœur, vous vous engagez dans une relation constructive. Côté travail, vous gagnez en responsabilités et montez en grade. Votre santé est au beau fixe, vous trouvez votre équilibre auprès des autres. Côté argent, votre situation se stabilise. Jupiter et Saturne sont vos alliés, une très belle année en perspective !</p>
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
                        <h2 class="h4">Votre horoscope 2016 Gratuit: Verseau</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/verseau.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

 $xml1 = read_horoscope_rss2('http://www.asiaflash.com/horoscope/rss_horo_occ_2016_verseau.xml');

 
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
                                                        <a class="accordion-toggle btn-theme" href="/horoscope-2016-verseau-bis?tab=collapse1#collapse1">AMOUR

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-verseau-bis?tab=collapse2#collapse1">TRAVAIL

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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-verseau-bis?tab=collapse3#collapse1">SANTÉ
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-verseau-bis?tab=collapse4#collapse1">ARGENT
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
                                                        <a class="accordion-toggle btn-theme collapsed" href="/horoscope-2016-verseau-bis?tab=collapse5#collapse1">MES CONSEILS POUR L'ANNÉE

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

                  <!-- texte -->
                <div>
                    <div class="text-justify">
                        <h2>2016 Verseau : Ambiance générale très positive</h2>
                        <p>Votre horoscope 2016 verseau vous réserve de bonnes surprises et vous engage dans une année très riche dans le domaine affectif. Si vous êtes célibataire, le ciel est propice à une rencontre importante et épanouissante, vous aurez envie de vous engager dans une relation stable. Si vous êtes déjà en couple, c'est auprès de votre partenaire que vous vous sentirez le mieux. Il se pourrait même que vous éprouviez le besoin d'officialiser votre liaison. Votre horoscope 2016 verseau est donc propice à l'épanouissement conjugal. En effet, c'est une année clé pour ceux qui désirent s'ouvrir à l'amour véritable.</p>
                        <br/><p>Côté travail, vos compétences seront reconnues par vos supérieurs et vous aurez des responsabilités nouvelles à prendre. Certains se verront faire des propositions importantes qui favoriseront leur promotion. D'autres sauront s'imposer, quelque soit leur entreprise. Bref, vous parviendrez à vous construire un avenir aussi stable qu'enviable. D'ailleurs vos soucis d'argent trouveront une issue favorable avec la signature d'un contrat ou l'accès à des accords financiers. Vous ferez preuve également d'une belle vitalité en trouvant votre bien-être auprès de vos proches.</p>
                    </div>
                    <div class="text-justify">
                        <h2>Mon horoscope 2016 verseau par décan et par saison</h2>
                        <p>Si vous êtes du 1er décan, le sextile de Saturne indique que vous avez un cap important à passer. Vous devrez redoubler d'énergie au travail. Vos amours prendront une tournure sérieuse avec un engagement à la clé. Si vous êtes du deuxième décan, vous aurez envie de changement mais aussi de liberté. A partir de juin, vous ferez preuve d'audace et vos amours joueront avec le feu et les émotions fortes. Si vous êtes du troisième décan, les planètes vous aideront à vous reposer et vous prendrez le temps de préparer de nouvelles conquêtes. Vous subirez quelques contrariétés mais vous serez récompensé de tous vos efforts au 3e trimestre.</p>
                        <br/><p>L'horoscope 2016 verseau délivre aussi ses secrets par saison. L'hiver sera propice aux rencontres avec une belle énergie au travail. En couple, vous envisagez des changements importants, l'officialisation d'une relation ou au contraire une rupture. Au printemps, c'est l'heure du grand ménage, célibataires, vous dites adieu à vos vieilles habitudes et ouvrez le champ des possibles. En couple, vous aimez votre routine romantique. L'été sera favorable à tous côté cœur comme côté travail, vous attirez l'attention, on vous résiste peu. En automne, les astres vous surprendront avec de nouvelles responsabilités professionnelles et une rencontre inattendue pour les célibataires. En couple, vous serez sur la même longueur d'onde.</p>
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
   

