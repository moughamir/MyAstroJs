
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>L'astrologie bélier, une aide pour comprendre votre personnalité</title>
	<meta name="description" content="Signe Bélier : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique." />
    
	<?php include('include/header_inc.php'); ?>

    

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        										
										<li><span class="h4"> <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/astrologie-gratuite" >Astrologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Votre personnalité astrologique Bélier</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">En apprendre davantage sur votre personnalité astrologique Bélier</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Impulsif, le Bélier fonce tête baissée vers l'avenir. Ce signe du printemps est rempli d'énergie et oublie parfois les autres sur son chemin tant est importante son envie d'avancer. Pour mieux cerner ce signe, il peut s'avérer indispensable de consulter l'astrologie.</p>
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
                        <h4>Votre personnalité astrologique gratuite: Bélier</h4>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/belier.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

  $xml1 = read_astrologie('belier', 'h' ,2);
 //$xml1['description']=utf8_encode_array($xml1['description']);
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<?= $url;?>&amp;mode=annuel&amp;signe=belier&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <h2>Des questions, des doutes : osez une consultation astrologique !</h2>
                        <p>Signe de feu, les Béliers sont gouvernés par la planète Mars. Leur personnalité est riche, spontanée et un brin autoritaire. Meneur remarquable, il peut parfois désarçonner ses proches. Même s'il est sûr de lui, il peut se poser des questions. Pour mieux se comprendre et comprendre pour quelles raisons vous agissez de telle sorte, vous pouvez obtenir des éclaircissements grâce à votre thème astrologique. Vous aurez ainsi tous les éléments pour comprendre vos réactions et pourquoi pas corriger certains défauts.</p>
                        <br/><p>Au moment de votre naissance, la position des planètes  est unique. C'est ce positionnement qui fait votre personnalité et votre caractère. Des professionnels de l'astrologie étudient les planètes, les oppositions, les transits... et vous fournissent le tableau de la personnalité bélier. Idéal pour mieux comprendre vos relations avec les autres, l'astrologie bélier permet également d'obtenir un soutien pour vivre au mieux les changements. Elle permet en outre de mieux avancer vers l'avenir car vous comprendrez vos choix.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Une astro bélier pour mieux se connaître</h2>
                          <p>L'astrologie est une des méthodes pour connaître l'avenir les plus courantes mais c'est également un moyen sérieux pour découvrir un caractère. L'astrologue travaille sur ces deux aspects pour offrir des informations dignes de confiance. L'astrologie se décline en plusieurs domaines : famille, travail, caractère... Toutes les indications correspondent à votre signe, à vos préférences, à votre personnalité bélier. Vous avez dès lors toutes les cartes en main pour savoir si le travail que l'on vous propose vous correspond ou si la personne que vous venez de rencontrer est la bonne. Facile à lire et précis, vous trouverez dans cet astro bélier une mine d'informations pour avancer dans la vie avec certitude. </p><br/>
                          <p>Votre personnalité énergique peut en dérouter certains. Pour mieux vous cerner, il est donc indispensable de connaître votre  dominante astrale. A faire lire à vos amis, la connaissance de votre personnalité astrologique facilitera vos relations. Vous avez également la possibilité de découvrir votre futur grâce à nos horoscopes mais aussi avec des tirages de tarot. Socrate l'avait déjà compris, on ne peut vivre pleinement qu'en se connaissant bien. C'est la raison pour laquelle l'astrologie vous sera bénéfique.</p>     
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
