<section class="span300">
								 <?php /*<h2 class="hidden">Bloc droite</h2> */ ?>
							
							<!-- Banner voyance gratuite -->
								<aside class="widget w-adv">
									<div class="widget-title">
										<h4>Voyance gratuite</h4>
									</div>

									<div class="widget-content clearfix">
										<a href="http://<?= ROOT_URL ?>/voyance-gratuite">
											<?php 
				                                getSquareAd();
				                            ?>
										</a>
									</div>

								</aside>
								
								
								<!-- Banner voyance gratuite -->
								<aside class="widget w-adv">
									<div class="widget-title">
										<h4>Voyance par téléphone</h4>
									</div>

									<div class="widget-content clearfix">
										<a href="http://<?= ROOT_URL ?>/voyance-par-telephone">
											<?php 
				                                getVoyantScryscraper();
				                            ?>
										</a>
									</div>

								</aside>
								
								
								<!-- Posts Of The Day -->
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
						