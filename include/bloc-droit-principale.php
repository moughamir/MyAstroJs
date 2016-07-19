<?php $path_parts = pathinfo($_SERVER['REQUEST_URI']);
$path = $path_parts['filename'];
//echo $path;
$pathf = $path_parts['dirname'];
if ($path == ''){ $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';$type="jour";}
if ($path == 'index'){ $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';$type="jour";}
if ($path == 'horoscope-gratuit'){ $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';$type="jour";}
if ($path == 'astrologie-gratuite'){ $horoscope_type = 'de-la-semaine'; $typetext = 'HOROSCOPE DE LA SEMAINE';$type="semaine";}
if ($path == 'tarot-gratuit'){ $horoscope_type = 'de-l-amour'; $typetext = 'HOROSCOPE DE L\'AMOUR';$type="amour";}
if ($path == 'numerologie-gratuite'){ $horoscope_type = 'du-mois'; $typetext = 'HOROSCOPE DU MOIS';$type="mois";}
else { $horoscope_type = 'du-jour'; $typetext = 'HOROSCOPE DU JOUR';$type="jour";}

//variable test pour afficher le bloc texte uniquement sur la page d'accueil et eviter de le dupliquer sur d'autres pages.
$page_en_cours = $_SERVER['PHP_SELF'];
?>
<section class="span270">
								 <?php /*<h2 class="hidden">Bloc gauche</h2> */ ?>
				 <!-- New In Pictures -->
								<aside class="widget w-pictures">
									<div class="widget-title">
										<h4><?= $typetext ; ?></h4>
									</div>

									<div class="widget-content clearfix thumbnails">
										<?php echo getHoroscopeBlock($type) ?>
									</div>
								</aside>

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
									<!-- /zone de texte -->
		                        	<div <?php if($page_en_cours != "/index.php") {?>  style="display:none;"<?php } ?>>
                        				<div class="text-justify">                                 
                            				<p><span style="color:#000000;"><br>De la voyance en amour à la numérologie, MyAstro vous propose plusieurs méthodes pour lire votre avenir ou décrire votre personnalité et celle d'un proche pour que, selon vos convictions, vous puissiez obtenir ce que vous êtes venu chercher. Et si vous souhaitez en savoir encore plus, nos services de voyance peuvent être complétés par des échanges téléphoniques avec des experts (voyants, mediums, tarologues, etc…). En discutant avec ces derniers et en appliquant leurs conseils dans votre quotidien, vous pourrez atteindre vos objectifs de vie. Au-delà de la voyance de qualité, pratique et accessible, MyAstro se présente donc comme un réel spécialiste de cet art divinatoire.</span></p>
                        				</div>
                    				</div><br>
									<div class="widget-title">
										<h4>Voyance sans carte bancaire</h4>
									</div>

									<div class="widget-content clearfix">
										<a href="http://<?= ROOT_URL ?>/voyance-sans-cb">
											<img src="images_voyance/banniere/audiotel.jpg" alt="Voyance sans carte bancaire"  width="271" height="362"/>
										</a>
									</div>
		                            

								</aside>


								</section>
