<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
	<title>Tarot gratuit : amour et destin à chaque tirage gratuit | Myastro</title>
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

	  <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />
	  <style>
	      .widget .form-part{
	      	background-color:#eb2692;
	      }
	      .widget #form-w .btn_button{
	      	background-color: #1871b9;
	      }
	  </style>

	  <?php include('include/header_sans_nav_inc.php'); ?>

	    <div class="voyance-tarot container-fluid ninesixty relative-container" itemscope >
	      	<div class="article-content">
	      		<header>
	      			<div class="cat-widget-title">
	      				<h1 itemprop="headline">Tarot gratuit en ligne</h1>
	      			</div>

	      			<div class="row-fluid social-share-footer">
	      				<span class="share-icon icon-caret-right"></span>
	      				<div class="share-icons">
	      					<p itemprop="headline">My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits.</p>
	      				</div>
	      			</div>
	      		</header>

	      		<br/>
	      		
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
														$datapos = '-11px';
														break;
														case 2 :
														case 11 :
														$datapos = '3px';
														break;
														case 3 :
														case 10 :
														$datapos = '13px';
														break;
														case 4 :
														case 9 :
														$datapos = '20px';
														break;
														case 5 :
														case 8 :
														$datapos = '24px';
														break;
														case 6 :
														case 7 :
														$datapos = '26px';
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
						</div>
						<br/>

						<!-- texte -->
						<div>
							<div class="text-justify">
								<p>Quel sera votre avenir amoureux ? Allez-vous rencontrer le grand amour ? Pour le savoir, procédez à votre tirage tarot et découvrez sans plus attendre votre avenir sentimental. La vie à deux est tellement plus stimulante, vous aussi vous avez droit au bonheur, cela n'arrive pas qu'aux autres. Le tarot détermine les influences importantes de votre vie. Travail, amour, famille, amitié ou santé, il y a toujours une bonne raison pour faire un tirage tarot gratuit.</p>
								<h2>Votre avenir sentimental dévoilé par le jeu de tarot</h2>
								<p>S'il est bien une chose au monde qui rassemble tous les hommes et toutes les femmes, c'est l'amour. Parce qu'il transcende tout, l'amour est sans aucun doute un élixir de vie incomparable. Il faut dire que la rencontre amoureuse, en plus d'apporter le bonheur et de donner des ailes, offre un sérieux coup de fouet à la vitalité et à la créativité. Grâce aux tarots gratuits, faites la rencontre de votre vie pour partager de nouvelles expériences en duo.</p>
								<br/><p>Le tarot en ligne vous indique les périodes, les jours et les tendances favorables pour rencontrer le partenaire de vos rêves. Le jeu de tarot est connu depuis plusieurs siècles en France et en Italie entre autres, il est utilisé dans de nombreuses cultures. Grâce aux jeux de tarot gratuit, découvrez les cartes attachées à votre tirage et les symboles associés. La Tempérance, La Roue de Fortune ou encore le Soleil constituent quelques-unes des cartes maîtresses du jeu de tarot et vous indiquent la meilleure direction à suivre.</p>
							</div>
							<div class="text-justify">
								<h2>Découvrez votre tarot gratuit</h2>
								<p>Pour effectuer un tarot gratuit, pas besoin de vous rendre chez une voyante. Il existe de nos jours des solutions bien plus simples et plus rapides. Il vous suffit de procéder à votre tirage en ligne pour déterminer en un clin d'oeil les grandes lignes de votre avenir. Dans le domaine professionnel aussi, le tarot gratuit vous apporte de judicieuses informations et vous conseille pas à pas. Ne vous privez pas de cette aide appréciable pour prendre les décisions les plus favorables à votre carrière. Le tarot en ligne est votre allié le plus  précieux.
								</p><br/>
								<p>Vous êtes inquiet à propos de votre santé ? Vous désirez prendre soin de vous et de votre famille dans les meilleures conditions ? Grâce à votre tarot gratuit, découvrez de précieuses informations concernant votre santé et les éléments à prendre en compte pour conserver une bonne vitalité. N'hésitez pas à réaliser votre tarot gratuit en ligne régulièrement pour prendre les bonnes décisions concernant votre bien-être et connaître les grandes lignes de votre avenir. N'attendez plus, procédez dès maintenant au tirage de vos jeux de tarot gratuit.</p>     
							</div>
						</div>

						<br/>

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

																			<a href="http://<?= ROOT_URL ?>/tarot-de-marseille" class="more" title=""></a>
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
																			<img src="tarot/images/tirage-tarot-gratuit.png" class="post-img" />

																			<div class="description visible-part">
																				<h5 class="title">Tirage tarot gratuit</h5>
																				<br>
																				<!--<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;"></h6>-->                                                                     
																			</div>

																			<a href="http://<?= ROOT_URL ?>/tirage-tarot-gratuit" class="more" title=""></a>
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
							</div>
						</section>

						<!-- Left sidebar -->
						<?php include('include/bloc-gauche-principale-2.php'); ?>

					</div>
				</div>
			</div>
			<div class="absolute-top-section">
				<div class="row-fluid">
					<?php include('include/nav_inc.php'); ?>
				</div>
				<div class="row-fluid">
					<div itemscope >
						<ul class="breadcrumb" itemprop="breadcrumb">
							<li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
							<li>Tarot gratuit</span></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_tarot.php'); ?>

<script src="js/tarot-gratuit.js"></script>
<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>