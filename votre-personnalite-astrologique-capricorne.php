
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Votre personnalité astrologique Capricorne: Votre personnalité astrologique : Myastro</title>
	<meta name="description" content="Signe Capricorne : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique." />
    
	<?php include('include/header_inc.php'); ?>

    

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        										
										<li><span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="http://<?= ROOT_URL ?>/astrologie-gratuite" >Astrologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://<?= ROOT_URL ?>/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Votre personnalité astrologique Capricorne</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Astrologie capricorne : découvrez ce que vous promet 2016 !</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Capricornes, que va-t-il se passer en 2016 ? Vous mourrez d'envie d'en savoir davantage ? Humeur, amour, travail, affinités, amitié, famille, climat astral.... Avec l'astro capricorne vous saurez tout sur ce que vous réservent les astres pour cette année qui s'annonce.</p>
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
                        <h2 class="h4">Votre personnalité astrologique gratuite: Capricorne</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/capricorne.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

  $xml1 = read_astrologie('capricorne', 'h' ,2);
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=capricorne&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Capricornes, que vous réserve votre carrière professionnelle en 2016 ?</h2>
                        <p>Si vous êtes indécis quand au choix de votre carrière, si vous ne savez quelle décision et tournant professionnels prendre, consultez nos prédictions spécifiques aux personnes nées entre le 23 décembre et le 20 janvier. </p>
                        <p>Toujours en guerre contre l'injustice et les méchancetés, c'est naturellement la voie de la justice qui vous attire. Vous mettez un point d'honneur à rétablir l'équité et la justice, à défendre les faibles et à apporter votre soutien à ceux qui en ont besoin. Peut-être l'ignorez-vous ou n'osez pas vous lancer dans un domaine juridique ? L'astro capricorne n'a pas vocation à vous diriger vers un métier plus qu'un autre, elle vous suggère seulement, d'une manière générale, en fonction de votre signe, le milieu professionnel le plus à même de vous correspondre. </p>
                        <h2>Astro capricorne : trouverez-vous l'amour cette année ?</h2>
                        <p>En amour les Capricornes sont généralement sélectifs et perfectionnistes. Rigoureux avec eux-même, ils le sont aussi envers les autres et sont très exigeants sur le choix de leur partenaire. Ils représentent donc tout naturellement, au regard des 12 signes du zodiaque, le plus gros pourcentage de célibataires. S'il trouve sa moitié, ce n'est généralement pas sans peine mais une fois qu'il l'a trouvée, l'homme ou la femme Capricorne est d'une fidélité exemplaire car ce qu'il aime par dessus tout c'est la stabilité. Ami(e)s Poissons, Vierges, Taureau ou Scorpions votre personnalité capricorne a toutes les chances de s'entendre avec un Capricorne !</p>
                   </div>
                    <div class="text-justify">
                          <h2>Si on parlait santé des capricornes pour 2016 ?</h2>
                          <p>Votre astrologie capricorne vous conseillera de surveiller votre santé car comme tous les Capricornes vous négligez souvent de vous soigner ou de prendre les traitements qui vous ont été prescrits. Vos points faibles ? Vos articulations et votre tendance aux états dépressifs. C'est certainement votre perpétuelle quête de la perfection qui fait de vous un éternel insatisfait.</p>
                          <h2>Le capricorne, un signe zodiacal généreux en amitié</h2>
                          <p>Vous donnez l'apparence de quelqu'un de secret, de renfermé, d'introverti voire de froid et dur... mais ce n'est qu'une façade car lorsque l'on vous connaît on s'aperçoit très vite que vous aimez l'humour et adorez plaisanter. Le Capricorne est par définition l'ami parfait toujours disponible pour apporter son aide. D'excellente compagnie, il est aussi toujours prêt à secourir un ami dans le besoin. </p>     
                          <p>Profondément sincère en amitié, capable de dépasser sa propre vie pour se déverser dans celle des autres, il ne supporte pas d'être trahi.</p>
                          <p>Envie d'en savoir davantage ? Consultez gratuitement votre astrologie capricorne pour mettre toutes les chances de votre côté en 2016 !</p>
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
