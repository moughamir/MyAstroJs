
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Une astrologie vierge pour mieux anticiper son avenir</title>
	<meta name="description" content="Signe Vierge : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique." />
    
	<?php include('include/header_inc.php'); ?>

    

    <div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        										
										<li><span class="h4"> <a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="http://www.myastro.fr/astrologie-gratuite" >Astrologie gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li><a href="http://www.myastro.fr/votre-personnalite-astrologique" >Votre personnalité astrologique</a></li></li><i class="icon-caret-right icon-fixed-width"></i><li>Votre personnalité astrologique Vierge</li></span>
										
										
										
                                    </ul>
                                </div>
					<div class="cat-widget-title">
                        
                            <h1 itemprop="headline">Que révèle l'astrologie vierge sur notre personnalité ?</h1>
                        
                    </div>
                               
<div class="row-fluid social-share-footer">
                                <span class="share-icon icon-caret-right"></span>

                                <div class="share-icons">
                                    <p itemprop="headline">Signe Vierge : Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique.</p>
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
                        <h2 class="h4">Votre personnalité astrologique gratuite: Vierge</h2>
						<div class="thumb-effect">
                                        <div class="mask"></div>
                                        <img src="images_voyance/signes/vierge.png" />
                        </div>
                    </div>

                    <div class="widget-content clearfix thumbnails">
					
<?php 

ini_set('max_execution_time', 0);
include('lib.php');

  $xml1 = read_astrologie('vierge', 'h' ,2);
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
	<iframe src="//www.facebook.com/plugins/like.php?href=<? echo $url;?>&amp;mode=annuel&amp;signe=vierge&amp;send=false&amp;layout=button_count&amp;width=150&amp;show_faces=false&amp;action=recommend&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150px; height:21px;" allowtransparency="true"></iframe>
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
                        <p>Bien se connaître fait partie des clés essentielles pour apprendre à être heureux. Vous êtes de signe vierge et souhaitez en apprendre davantage sur vous-même pour mieux vous accepter ? L'astro vierge vous révèle tout ce que vous devez savoir pour vous accepter tel que vous êtes. Le jour de naissance influe sur votre personnalité, vos différents choix et votre vie. Plutôt que de l'ignorer, apprenez à mieux comprendre votre personnalité afin de faire les bons choix au quotidien.</p>
                        <h2>La personnalité vierge côté cœur</h2>
                        <p>L'amour fait partie de ces choses qui rendent soit très heureux, soit très malheureux. Pour savoir si vous êtes avec la bonne personne, pour connaître la date de votre future rencontre ou pour prédire les heureux événements, faites confiance à votre astro vierge. Que vous soyez confronté ou non à des problèmes sentimentaux, tout le monde se pose des questions concernant sa vie amoureuse. Vous voulez savoir avec quel signe vous risquez de mieux vous entendre ? Vous voulez apprendre à dompter vos réactions lorsque vous êtes amoureux ? En lisant votre astrologie, vous ne vous poserez plus de question.</p>
                        <br/><p>Il est parfois difficile de trouver le juste équilibre dans un couple. Si chacun y met du sien et apprend à connaître la personnalité astrologique de l'autre, vous favorisez la communication et les chances de réussir. Le signe vierge a pour particularité de s'entendre plus ou moins bien avec les personnes selon leur signe astrologique. Plutôt que de vous poser davantage de questions, découvrez ce que votre vie amoureuse vous réserve grâce à l'astro vierge.</p>
                    </div>
                    <div class="text-justify">
                          <h2>La personnalité du vierge côté professionnel et financier</h2>
                          <p>Dans la vie, il n'y a pas que l'amour qui permet d'être heureux, mais également la réussite dans le travail. Le signe vierge aura tendance à se tourner vers tel ou tel métier en fonction de ses préférences. Attention donc à travailler dans un secteur qui vous plaît. Vous rencontrez des problèmes avec votre patron ou vos collègues ? Vous n'êtes plus motivé au travail ? Vous vous demandez si votre métier vous plaît vraiment ? L'astrologie vierge est là pour vous guider dans vos choix professionnels et booster votre carrière au quotidien.</p><br/>
                          <p>Question argent aussi, le vierge possède une personnalité complexe qui peut le pousser à faire les mauvais choix. Apprenez à mieux cibler vos envies et votre caractère en lisant votre astrologie et vous gérerez mieux votre argent. Que vous soyez économe ou dépensier, mieux vaut bien se connaître avant de faire des investissements ou tout autre choix financier.</p>     
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
