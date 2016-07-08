<section class="span300">
<?php 
    $url = $_SERVER['PHP_SELF']; 
    $source = isset($tracking) ? $tracking : '';
    if($url == "/voyance-par-sms.php"){
         $source = "voyance-par-sms";
    }else if($url == "/compatibilite-amoureuse-pour-les-femmes.php"){
         $source = "compatibilite-amoureuse-pf";
    }else if($url == "/portrait-astrologique-masculin.php"){
         $source = "portrait-astrologique-m";
    }else if($url == "/portrait-astrologique-feminin.php"){
         $source = "portrait-astrologique-f";
    }else if($url == "/personnalite-numerologique.php"){
         $source = "personnalite-numerologique";
    }else if(preg_match('%^(/horoscope-2015)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-2015";
    }else if(preg_match('%^(/horoscope-du-mois)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-mois";
    }else if(preg_match('%^(/horoscope-de-la-semaine)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-semaine";
    }else if(preg_match('%^(/horoscope-du-jour)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-jour";
    }else if(preg_match('%^(/horoscope-de-l-amour)([-a-z]?)+(.php)$%', $url)){
         $source = "horoscope-amour";
    }
?>
<!-- form widget-->
                <aside class="widget w-adv">
                    <div class="widget-title" style="text-align:center;">
                        <span class="h4">Voyance gratuite</span>
                    </div>
                    <div id="form-w" class="widget-content clearfix" style="background-image:none;">
                        <div class="visible-part form-part">
                            <div class="alert alert-danger">
                              <p></p>
                            </div>
                            <form class="formWidget">
                                <input type="hidden" name="source" value="<?php echo $source; ?>"/>
                                <input type="hidden" name="method" value="form-widget" />
                                <input type="hidden" name="support" value="voyance"/>
                                <div class="form-w-one">
                                    <label></label>
                                    <input type="text" placeholder="Mon Prénom" id="name" name="prenom" required>
                                    <label></label>
                                    <input type="text" placeholder="Son Prénom" name="conjoint" id="lover_name">
                                </div>
                                <div class="form-w-two">
                                    <div>
                                        <label class="label-left">Je suis :</label>
                                        <select class="cnt-right" name="sexe" required>
                                            <option value="femme">Une femme</option>
                                            <option value="homme">Un homme</option>
                                        </select>
                                    </div>
                                    <div>
                                    <label>
                                        Ma date de naissance :
                                        <br>
                                    </label>
                                    <select  class="daten jour" name="jour" required>
                                        <option selected="selected" value="">Jour</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                        <option value="4">04</option>
                                        <option value="5">05</option>
                                        <option value="6">06</option>
                                        <option value="7">07</option>
                                        <option value="8">08</option>
                                        <option value="9">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                    <select  class="daten mois" name="mois" required>
                                        <option value="" selected="selected">Mois</option>
                                        <option value="01">Janv.</option>
                                        <option value="02">Fev.</option>
                                        <option value="03">Mars</option>
                                        <option value="04">Avr.</option>
                                        <option value="05">Mai</option>
                                        <option value="06">Juin</option>
                                        <option value="07">Juil.</option>
                                        <option value="08">Aout</option>
                                        <option value="09">Sept.</option>
                                        <option value="10">Oct.</option>
                                        <option value="11">Nov.</option>
                                        <option value="12">Dec.</option>
                                    </select>
                                    <select name="annee"  class="daten annee" required>
                                        <option selected="selected" value="">Année</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                        <option value="1919">1919</option>
                                        <option value="1918">1918</option>
                                        <option value="1917">1917</option>
                                        <option value="1916">1916</option>
                                        <option value="1915">1915</option>
                                        <option value="1914">1914</option>
                                        <option value="1913">1913</option>
                                        <option value="1912">1912</option>
                                        <option value="1911">1911</option>
                                        <option value="1910">1910</option>
                                    </select>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div>
                                        <label class="label-left" >Pays :</label>
                                        <select class="cnt-right" name="pays" id="pays" required>
                                              <option value="" selected="selected">Votre Pays</option>
                                              <option value="BE">Belgique</option>
                                              <option value="CA">Canada</option>
                                              <option value="LU">Luxembourg</option>
                                              <option value="CH">Suisse</option>
                                              <option value="FR">France Métropolitaine</option>
                                              <optgroup label="DOM-TOM">
                                                  <option value="MQ">Martinique</option>
                                                  <option value="GP">Guadeloupe</option>
                                                  <option value="GF">Guyane</option>
                                                  <option value="RE">La Réunion</option>
                                                  <option value="YT">Mayotte</option>
                                                  <option value="PM">St Pierre et Miquelon</option>
                                                  <option value="BL">St Barthélémy</option>
                                                  <option value="SM">St Martin</option>
                                                  <option value="WF">Wallis et Futunua</option>
                                                  <option value="PF">Polynésie Française</option>
                                                  <option value="NC">Nouvelle Calédonie</option>
                                              </optgroup>
                                              <option value="ZZ">Autre</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label>Ma question :</label>
                                        <select class="cnt-right cnt-qt" name="theme_id" required>
                                            <option value="" selected="selected">Choisissez un domaine</option>
                                                    <optgroup label="Amour">
                                                        <option value="question_1">Vous en avez marre d’être seul(e)</option>
                                                        <option value="question_2">Est-ce qu'il/elle m'aime ?</option>
                                                        <option value="question_24">Vous en aimez un(e) autre</option>
                                                        <option value="question_11">Il/Elle vous a quitté</option>
                                                    </optgroup>
                                                    <optgroup label="Argent">                          
                                                        <option value="question_73">Vous attendez un investissement</option>
                                                    </optgroup>
                                                    <optgroup label="Travail">
                                                        <option value="question_4">Vous attendez un changement professionel</option>
                                                        <option value="question_3">Vous cherchez un emploi</option>
                                                    </optgroup>
                                         
                                        </select>
                                    </div>
                                    <div>
                                        <label ></label>
                                        <input id="email" type="email" name="email" placeholder="Mon email" required>
                                        <span class="infob-email-w">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                        <label ></label>
                                        <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" required>
                                        <span class="infob-tel-w">Vous serez rappelé par le voyant à ce numéro</span>
                                    </div>
                                </div>
                                <div ></div>
                                <div class="cguv">
                                    <label class="checkbox">
                                        <input type="checkbox" name="cguv" required checked>J'accepte les conditions générales
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="partenaires"  checked>Recevoir les offres des partenaires
                                    </label>
                                </div> 
                                <div>
                                    <input class="btn_button btn-full-two" type="submit" name="valider" value="Poser votre question">
                                </div>
                            </form>
                        </div>
                        <div>
    
                    </div>
                </aside>
                <!-- end form widget -->
								
								
								<!-- Banner voyance téléphone -->
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
						$page = @file_get_contents($script);
                                                if($page){
                                                    $page = explode(",", $page);
                                                    $page = str_replace('"total_count":','',$page[4]);
                                                    echo $page;
                                                }
                                                
                                                ?></span>
															<span class="fans">Fans</span>
														</div>


													</div>
												</li>

												<li class="tr-wrp">
													<div class="btn-count">
														<div class="social-counter-metro mask">
															<span>Twitter</span>
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
						$page = @file_get_contents($script);
                                                if($page){
                                                    $page = explode(",",$page);
                                                    $page = str_replace('"GooglePlusOne":','',$page[9]);

                                                    echo $page;
                                                }
                                                ?></span>
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
						