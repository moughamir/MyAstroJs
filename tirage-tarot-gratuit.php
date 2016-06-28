<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
	<title>Tirage de tarot gratuit en ligne sur Myastro.fr </title>
	<meta name="description" content="My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits." />
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	    <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
	    <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
	    <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
	    <link rel="stylesheet" href="css/infobulle.css" />
	    
	    <link rel="shortcut icon" href="favicon.ico" /> 
	    <noscript>
		<link rel="stylesheet" type="text/css" href="css/noscript.css" />
	    </noscript>

	    <!--[if IE 7]>
	    <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
	    <![endif]-->

	    <!--[if lt IE 9]>
	      <script src="framework/fix-ie/html5.js"></script>
	    <![endif]-->

    <?php include('include/header_inc.php'); ?>
    <style>
    .widget .form-part{
        background-color:#eb2692;
    }
    .widget #form-w .btn_button{
        background-color: #1871b9;
    }
    </style>
    
    <div  class="voyance-tarot">

	<div class="container-fluid ninesixty" itemscope >
	    <div class="article-content">
	    					<header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><span class="h4"><a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Tirage tarot gratuit</span></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Reprenez votre vie en main avec le tirage de tarot gratuit en ligne</h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<p itemprop="headline">« Pourquoi faire du tirage de tarot gratuit en ligne ? ». Si comme beaucoup de personnes, vous vous posez encore cette question, sachez que la réponse est toute simple : « parce que le tirage de tarot gratuit peut vous aider à améliorer votre vie! ». Utilisé depuis plusieurs siècles, le tarot divinatoire peut en effet être un instrument efficace au service de la construction de votre avenir.</p>
									</div>

								</div>
                             

                            </header><br/>
                            <span class="clearfix"></span>
	    <!-- Main Content -->
	    <div class="row-fluid">
	    	<!-- Right sidebar -->
							<?php include('include/bloc-droit-principale-2.php'); ?>

	  		
            <div class="span6 main-content">
         	<div class="cat-widget-title cat-title-tarot widget-t-title">
                <h2 class="h4">1 - tirez vos cartes</h2>
            </div>
		    <div class="widget-t w-sponsors">
				<div class="tarot-content">
			    <div class="tarot-left" style="width:100%;">
				<!--<div class="vy-title first-title">
				    <h2 class="" style="background-color:transparent;font-size:14px!important;">tirez vos cartes</h2>
				</div>-->
				<div class="paquet">
				    <div class="relative">
					<?php
					for ($i = 1; $i <= 12; $i++)
					{
					    switch ($i)
					    {
						// On met des attributs data pour la position de départ des elements
						case 1 :
						case 12 :
						    $datapos = '0px';
						    break;
						case 2 :
						    $datapos = '2px';
						    break;
						case 3 :
						case 11 :
						    $datapos = '4px';
						    break;
						case 4 :
						case 10 :
						    $datapos = '6px';
						    break;
						case 5 :
						case 9 :
						    $datapos = '8px';
						    break;
						case 6 :
						case 8 :
						    $datapos = '10px';
						    break;
						case 7 :
						    $datapos = '12px';
						    break;
					    }
					    echo '<img src="tarot/cartes/dos.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
					}
					?>
				    </div>
				    <!--<div class="clearfix"></div>-->
				</div>
				<div class="vy-title second-title">
                    <h2 class="" style="background-color:transparent;font-size:14px!important;">Votre tirage</h2>
				</div>
				<div class="donne">
				    <div class="donneHandler">
					<?php
					for ($i = 1; $i <= 5; $i++)
					{
					    echo '<div class="pickHolder"></div>';
					}
					?>
				    </div>
				    <div class="clearfix"></div>
				</div>
				
			    </div>
			    <!-- debut form -->
			   
	
			    <!-- fin form -->
			    <div class="clearfix"></div>


			</div>

		    </div><br/>   
            <!-- texte -->
                <div>
                    <p></p>
                    <div class="text-justify">
                        <h2>Pour comprendre et mieux organiser votre vie</h2>
                        <p>Dans de nombreuses situations, dont certaines sont imminentes, vous avez besoin de comprendre pourquoi afin de mieux faire front. Une séance de tirage de tarot gratuit et immediat vous permet justement d'y voir plus clair. Que ce soit en amour, sur la plan professionnel ou au niveau familial, vous aurez des réponses précises ou des indications claires sur certaines des décisions qu'il vous faut prendre ou sur les évènements qui surviennent.</p>
                        <br/><p>Parfois, vous savez que vous avez besoin de parfaire certains aspects de votre existence, mais vous ne savez pas par où commencer à vous améliorer. Dans ces cas, le tarot divinatoire peut aider à mettre en évidence les choses sur lesquelles vous devriez vous concentrer tout de suite afin d'obtenir des résultats pour un meilleur lendemain.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Prenez votre destinée en main</h2>
                          <p>L'anxiété, le souci et la crainte sont souvent les symptômes d'une vie menée au gré du vent, en avançant dans l'inconnu. En vous fournissant des indications claires sur certains aspects de votre avenir, le tirage de tarot gratuit  vous permettra donc de l'aborder avec plus de sérénité. En effet, une fois que vous avez identifié les différentes orientations possibles de votre vie, il vous est plus facile de déterminer le chemin qui peut être le vôtre. En effet, si le tirage de tarot gratuit ne peut pas prévoir l'avenir ou vous dire à coup sûr ce qui va arriver, il vous met face aux possibilités qui s'offrent à vous et vous oriente vers le choix le plus adéquat pour vous.
                            </p><br/>
                          <p>Nombre de personnes ont recours aux séances de tarot comme un outil de prise de décisions au quotidien. Le tirage de tarot gratuit permet en effet d'optimiser votre intuition et vous aide ainsi à prendre les décisions les plus adéquates dans votre vie de tous les jours. N'oubliez jamais le pouvoir du libre arbitre! Si vous voyez quelque chose que vous n'aimez pas dans une lecture tarot gratuit, vous avez le pouvoir de le changer. Rester maître de son destin plutôt que de le subir, c'est là l'un des objectifs principaux du tarot divinatoire.</p>     
                    </div>

                </div><br/>
		    		<!-- Horizontal Categories -->
                <section class="cat-widget h-cat-1">
                    

                    <div class="cat-widget-content">
                        

                        <div class="row-fluid cat-horiz">
                     
                            <div class="related-posts clearfix">
                                <div class="row-fluid modern-items-list">
                                    <div id="h_cat_slider1" class="flexslider">
                                        <ul class="slides">
                                            <li>
                                                <ul class="items left clearfix">
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="tarot/images/tarot.png" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Tarot de Marseille</h5>

																		 <br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>  -->                                                                     
                                                                    </div>

                                                                    <a href="http://www.myastro.fr/tarot-de-marseille" class="more" title=""></a>
                                                                </div>
                                                            </article>
															
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="tarot/images/tarot-oui-non.png"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Tarot Oui ou Non</h5>

																		<br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>-->                                                                     
                                                                    </div>

                                                                    <a href="http://www.myastro.fr/tarot-oui-ou-non" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>
                                                    <li class="row-fluid">
                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="tarot/images/tarot-amour.png"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Tarot de l'amour</h5>

																		 <br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>-->                                                                     
                                                                    </div>

                                                                    <a href="http://www.myastro.fr/tarot-de-l-amour" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="tarot/images/tarot-couple.png" class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Tarot de couple</h5>
																		<br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>-->                                                                     
                                                                    </div>

                                                                    <a href="http://www.myastro.fr/tarot-de-couple" class="more" title=""></a>
                                                                </div>

                                                            </article>
                                                        </div>
                                                    </li>

													  </ul>
                                            </li>

                                            </ul>
                                    </div>

								
								</div>
                            </div>

                        </div>
                </section>
		   </div>
		
		   	<!-- Left sidebar -->
							<?php include('include/bloc-gauche-principale-2.php'); ?>

	    </div>

  
        <?php include('include/footer.php'); ?>

	   <script src="js/jquery-1.11.js"></script>
	    <script src="js/tarot-gratuit.js"></script>
	 	<script src="framework/bootstrap/js/bootstrap.min.js"></script>
	    <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
	    <script src="js/formValidator.js"></script>
		<script src="js/infoBulle.js"></script>


	    <!-- New Remarketing tags -->
		<script type="text/javascript">
		/* <![CDATA[ */
		var google_conversion_id = 1024378253;
		var google_conversion_label = "ipnICMWfg2EQjYu76AM";
		var google_custom_params = window.google_tag_params;
		var google_remarketing_only = true;
		/* ]]> */
		</script>
		<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
		</script>
		<noscript>
		  <div style="display:inline;">
		    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
		  </div>
		</noscript>

		<!-- Analytics tags -->
		<script type="text/javascript">

		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-16975536-3']);
		_gaq.push(['_trackPageview']);

		(function () {
		  var ga = document.createElement('script');
		  ga.type = 'text/javascript';
		  ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
		  var s = document.getElementsByTagName('script')[0];
		  s.parentNode.insertBefore(ga, s);
		})();

		</script> 
		</div>
	    </div>
    </div>

    </body>
</html>