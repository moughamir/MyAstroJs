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
								<aside class="widget w-adv">
									<div class="widget-title">
										<h4>Voyance sans carte bancaire</h4>
									</div>

									<div class="widget-content clearfix">
										<a href="http://www.myastro.fr/voyance-sans-cb">
											<img src="images_voyance/banniere/audiotel.gif" width="271" height="362"/>
										</a>
									</div>

								</aside>

								<?php  if($_SERVER['PHP_SELF'] == '/voyance-sans-cb.php' ){  ?>
								<!--  -->
								<aside class="widget w-adv">
									<div style="text-align:justify;">
										<h5>Les paiements par carte bancaires sont totalement sécurisés et ce, grâce à nos partenaires financiers..<br><br>
											Myastro vous garantit une totale discrétion ainsi qu'une confidentialité sans faille lors de vos consultations. 
											Vos donnéees personnelles sont gardées secrètes.</h5><h5><br>
										</h5></div>

								</aside>

								<?php } ?>
								</section>
