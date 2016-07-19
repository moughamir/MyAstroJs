<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
	<title>Tirage Tarot Persan : tirage et interprétations | Myastro.fr</title>
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
     <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
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
                                        <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Tarot persan</span></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Les mystères du Tarot Persan</h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<p itemprop="headline">Créé en 1980 par la célèbre et non moins talentueuse Madame Indira, le Tarot Persan vous prédit l'avenir avec un nouveau regard sur le monde. Le jeu est composé de 56 lames aux symboles et au graphisme d'inspiration orientale. Un jeu divinatoire qui vous montrera le chemin de votre avenir sentimental ou professionnel, en  prodiguant des conseils et des réponses précises. Vais-je rester célibataire ? Est-ce le moment pour changer de métier ? Autant de questions que vous pourrez poser à l'oracle grâce au Tarot Persan gratuit. Découvrons ensemble la magie de ce tarot exceptionnel...</p>
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
					    echo '<img src="tarot/cartes/dos-p.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
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
                    <div class="text-justify">
                        <h2>La composition du Tarot Persan</h2>
                        <p>Les 19 cartes majeures sont composées de 5 animaux et de 14 symboles. Les animaux sont représentés par le paon, le tigre, la panthère, les hirondelles et la roue des poissons. Les figures quant elles sont identifiées par le Bateau, la Maladie, la Maison, le Coffre, la Rupture, l'île, les Flambeaux, la Mort, la Main de Fatma, la Rencontre, la Sorcière, la Fécondité, le Soleil, le Mariage. Ce sont des cartes très importantes pour l'interprétation car elles donneront un aperçu et une réponse globale à vos interrogations. Il existe d'ailleurs de nombreux tirages dans lesquels on utilise uniquement les cartes majeures.</p>
                        <br/><p>Pour obtenir plus de précisions, on peut utiliser les cartes intermédiaires, mineures et complémentaires. Les cartes intermédiaires (Rois, Reines, cavaliers et As) sont les personnages qui donneront vie à votre tirage et qui permettront de déterminer le rôle de chacun dans votre destin. Les 4 cartes complémentaires représentées par des chouettes et les 16 cartes mineures (Cœur, trèfle, carreau, pique) peuvent donner des indications temporelles et des informations précises sur les événements à venir. Chaque carte mineure représente un domaine spécifique : affectif, financier, travail ou difficultés.</p>
                    </div>
                    <div class="text-justify">
                          <h2>Tirages et interprétations du Tarot Persan</h2>
                          <p> Une question sur l'avenir de votre couple ou une rencontre à venir ? En amour, les doutes et les questions ne manquent pas, la tarot Persan est un excellent moyen de mettre un peu de clarté dans votre univers amoureux. Le tirage Passé Présent Futur est le tirage qu'il vous faut ! Il répond en effet précisément à toutes vos interrogations. Il suffit dans un premier temps de bien réfléchir à votre question, en vous concentrant sur ce qui vous préoccupe. Après avoir mélangé vos cartes, vous tirez 3 cartes parmi les 19 cartes majeures. Les cartes parleront immédiatement pour votre plus grand plaisir.</p>
                          <br/><p>Vous vous interrogez sur le succès d'un nouveau projet professionnel? Le tirage Indira vous donnera une vision précise de votre situation professionnelle. C'est le tirage classique de ce célèbre tarot, il s'effectue avec 36 cartes. Après avoir mélangé les cartes, le consultant tire 7 cartes. Chacune d'entre elles représente un domaine : les affaires, les potentialités, l'information professionnelle, les préoccupations affectives, les sentiments et la chance. Découvrez avec ce tirage l'univers fabuleux du tarot d'Indira qui vous montrera le chemin de l'avenir.</p>     
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
                                                                        <h5 class="title">Tarot gratuit</h5>

																		 <br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>  -->                                                                     
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-gratuit" class="more" title=""></a>
                                                                </div>
                                                            </article>
															
                                                        </div>

                                                        <div class="span6">
                                                            <article class="fold-item span12">
                                                                <div class="clearfix">
                                                                    <img src="tarot/images/tarot-oui-non.png"  class="post-img" />

                                                                    <div class="description visible-part">
                                                                        <h5 class="title">Tarot oui ou non</h5>

																		<br>
																		<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>-->                                                                     
                                                                    </div>

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-oui-ou-non" class="more" title=""></a>
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

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-de-l-amour" class="more" title=""></a>
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

                                                                    <a href="http://<?= ROOT_URL ?>/tarot-de-couple" class="more" title=""></a>
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