<?php 
    $path_parts = pathinfo($_SERVER['REQUEST_URI']);
    $path = $path_parts['filename'];
    $pathf = $path_parts['dirname'];
    if ($path == 'horoscope-gratuit'){ $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';}
    if ($path == 'astrologie-gratuite'){ $horoscope_type = 'de-la-semaine'; $typetext = 'HOROSCOPE DE LA SEMAINE';}
    if ($path == 'tarot-gratuit'){ $horoscope_type = 'de-l-amour'; $typetext = 'HOROSCOPE DE L\'AMOUR';}
    if ($path == 'numerologie-gratuite'){ $horoscope_type = 'du-mois'; $typetext = 'HOROSCOPE DU MOIS';}
?>
<section class="span270">
				 				
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
										<a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-sans-cb">
											<img src="images_voyance/banniere/audiotel.jpg" width="271" height="362"/>
										</a>
									</div>

								</aside>
    <!-- SMS banner -->
    <?php include('visual_modules/sms_banner.php');?>
</section>
