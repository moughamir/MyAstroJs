<?php $path_parts = pathinfo($_SERVER['REQUEST_URI']);
$path = $path_parts['filename'];
$pathf = $path_parts['dirname'];
if ($path == 'horoscope-gratuit'){ $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';}
if ($path == 'astrologie-gratuite'){ $horoscope_type = 'de-la-semaine'; $typetext = 'HOROSCOPE DE LA SEMAINE';}
if ($path == 'tarot-gratuit'){ $horoscope_type = 'de-l-amour'; $typetext = 'HOROSCOPE DE L\'AMOUR';}
if ($path == 'numerologie-gratuite'){ $horoscope_type = 'du-mois'; $typetext = 'HOROSCOPE DU MOIS';}



?>
<section class="span270">
								 <?php /*<h2 class="hidden">Bloc gauche</h2> */ ?>
				 				
								<!-- Sponsors (4x125 Adv.) -->
								<aside class="widget w-sponsors">
									<div class="widget-title">
										<h4>Expert en ligne</h4>
									</div>

									<div class="widget-content clearfix">
										<?php 
											getExpertEnLigne();
										?>
									</div>
								</aside>
								
								
								

								<!-- Voyance sans Carte Bancaire -->
								<aside class="widget w-adv" style="margin-bottom:0px;">
									<div class="widget-title">
										<h4>Voyance sans carte bancaire</h4>
									</div>

									<div class="widget-content clearfix">
										<a href="http://<?= ROOT_URL ?>/voyance-sans-cb">
											<img src="images_voyance/banniere/audiotel.gif" width="271" height="362"/>
										</a>
									</div>

								</aside>
								<!-- Banner voyance SMS -->
								<aside class="widget w-posts">
									<div class="widget-title">
										<h4>Voyance par SMS</h4>
									</div>

									<div class="widget-content clearfix">
										<div class="posts-in-widget">
											<div class="row-fluid modern-items-list">

												<div id="widget_300_slider3" class="flexslider">

													<ul class="slides">
														<li>
															<ul class="items left clearfix">
																<li>
																	<article class="fold-item">
																		<div class="clearfix">
																			<img class="post-img" src="images_voyance/voyance-sms.jpg"  />

																			<div class="post-sitemap">
																				<span>Envoyer </span><span style="font-size:150%;color:#FF00A1;">myastro</span> <span>au</span>
																			</div>

																			<div class="description visible-part">
																				<h5 class="title" style="font-size:250%;color:#FF00A1;">7 3 5 3 6</h5>

																				<div class="info">
																					<span style="color:#000000;"><i class="bo-icon-exclamation-sign bo-icon-white"></i>0.50€ par envoi + prix d'un sms</span>
																					
																				</div>

																				
																			</div>

																			<a href="http://<?= ROOT_URL ?>/voyance-par-sms" class="more" title=""></a>
																		</div>
																	</article>
																</li>
															</ul>
														</li>


														
													</ul>

												</div>
											</div>
										</div>
									</div>
								</aside>


								</section>
