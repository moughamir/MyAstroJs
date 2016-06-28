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
										<h4><? echo $typetext ; ?></h4>
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
								<aside class="widget w-adv" style="margin-bottom:0px;">
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
										<a href="http://www.myastro.fr/voyance-sans-cb">
											<img src="images_voyance/banniere/audiotel.jpg" alt="Voyance sans carte bancaire"  width="271" height="362"/>
										</a>
									</div>
		                            

								</aside>
								<!-- Social Counter -->
								<aside class="widget w-social-counter">
									<div class="widget-title">
										<h4>Réseaux sociaux</h4>
									</div>

									<div class="widget-content clearfix">
										<div class="social-counter-metro">
											<ul class="clearfix">

												<li class="fb-wrp">
													<div class="btn-count">

														<div class="social-counter-metro mask">
															<span>Like</span>
															<a target="_blank" href="https://www.facebook.com/pages/Myastro/437290166297323" class="more"></a>
														</div>

														<div class="facebook">
														   <i class="facebook-sicon-48-white"></i>
															<span><?php
				   
					//http://graph.facebook.com/437290166297323
						$script = "http://api.sharedcount.com/?url=https://www.facebook.com/pages/Myastro/437290166297323";
						$page = file_get_contents($script);
						$page = explode(",",$page);
						$page = str_replace('"total_count":','',$page[4]);
						
						echo $page;
						
						
					
					
					
				?></span>
															<span class="fans">Fans</span>
														</div>


													</div>
												</li>

												<li class="tr-wrp">
													<div class="btn-count">
														<div class="social-counter-metro mask">
															<span>Twetter</span>
															<a target="_blank" href="https://twitter.com/MYASTRO1" class="more"></a>
														</div>

														<div class="twitter">

															<i class="twitter-sicon-48-white"></i>
															<span><?php

/*$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
		$page = file_get_contents($script);
		$page = explode(",",$page);
		$page = str_replace('"Twitter":','',$page[11]);
		
		echo $page;
			

$url='http://query.yahooapis.com/v1/public/yql?q=SELECT%20*%20from%20html%20where%20url=%22http://twitter.com/MYASTRO1%22%20AND%20xpath=%22//a[@class=\'js-nav\']/strong%22&format=json';
             $src = file_get_contents($url);
            
             $decoded = json_decode($src);
             echo ($decoded->query->results->strong[2]);	*/
			
						
						
					
					
					
				?>32</span>
															<span class="fans">Abonnés</span>

														</div>
													</div>
												</li>
												<li class="gp-wrp">
													<div class="btn-count">
														<div class="social-counter-metro mask">
															<span>Partages</span>
															<a target="_blank"  href="https://plus.google.com/113553129882139226237/posts" class="more"></a>
														</div>

														<div class="googleplus">
															<i class="googleplus-sicon-48-white"></i>
															<span><?php
				   
					
						$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
						$page = file_get_contents($script);
						$page = explode(",",$page);
						$page = str_replace('"GooglePlusOne":','',$page[9]);
						
						echo $page;
						
						
					
					
					
				?>




				</span>
															<span class="fans">Partages</span>
														</div>
													</div>
												</li>
												
												

												

												<li class="rs-wrp">
													<div class="btn-count">
														<div class="social-counter-metro mask">
															<span>Souscrire</span>
															<a href="#" class="more"></a>
														</div>

														<div class="rss">
															<i class="rss-sicon-48-white"></i>
															<span>Souscrire</span>
															<span class="fans">Au RSS</span>
														</div>
													</div>
												</li>



												

												<!--<li class="drb-wrp">
													<div class="btn-count">
														<div class="social-counter-metro mask">
															<span>Follow</span>
															<a href="#" class="more"></a>
														</div>

														<div class="dribbble">
															<i class="dribbble-sicon-48-white"></i>
															<span>29,000,000</span>
															<span class="fans">Followers</span>
														</div>
													</div>
												</li>-->


											</ul>
										</div>
									</div>
								</aside>


								</section>
