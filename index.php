<?php
include('include/tools.php');
include('lib.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<title>Votre voyance personnalisée et fiable | Myastro</title>
	<meta name="description" content="Myastro vous permet de consulter un horoscope fiable de manière gratuite. Anticipez votre journée, votre mois ou votre année grâce à ce service." />
	<script src="js/jquery-1.11.js"></script>
	<script src="js/formValidator.js"></script>
	<style>
	.infob-tel-w,.infob-email-w{
		position:absolute;
		width:192px;
		color:#fff;
		background:#fff; 
		padding:15px;
		border-radius:3px;
		box-shadow:0 0 2px rgba(0,0,0,.5);
		transform:scale(0) rotate(-12deg);
		transition:all .25s;
		opacity:0;
	}

	.infob-email-w{
		margin-top:-81px;
		margin-left:-216px;
	}
	.infob-tel-w{
		margin-top:-101px;
		margin-left:-216px;
	}
	</style>
	
	<?php include('include/header_sans_nav_inc.php'); ?>

	<link rel="stylesheet" type="text/css" href="css/formulaire-top.css" />
	<script type="application/ld+json">
	{ "@context": "http://schema.org",
	"@type": "Organization",
	"name": "myastro »,
        "url": "http://www.myastro.fr/",
        "logo": "http://www.myastro.fr/images/logo-V3.png",
        "sameAs": [ "https://twitter.com/MYASTRO1",
        "https://www.facebook.com/pages/Myastro/437290166297323",
        "https://plus.google.com/+MyastroFr"]
    }
    </script>

    <div class="container-fluid relative-container" itemscope >
    	<!-- Main Content -->
    	<div class="row-fluid">
    		<!-- main content -->
    		<div class="span6 main-content">
    			<!-- Breaking News -->     

    			<!-- Slider -->

    			<div id="carousel-homepage" class="carousel slide" data-ride="carousel">
    				<!-- Indicators -->

    				<div class="carousel-inner">
    					<div class="item active">
    						<a href="http://www.myastro.fr/voyance-gratuite">
    							<img src="images/bannieres/homepage/voyance.jpg" alt="Voyance gratuite" width="604" height="400"  />
    						</a>
    					</div>
    					<div class="item">
    						<a href="http://www.myastro.fr/voyance-tarot">
    							<img src="images/bannieres/homepage/tarot-gratuit.jpg" alt="Voyance tarot"  width="604" height="400" />
    						</a>
    					</div>
    					<div class="item">
    						<a href="http://www.myastro.fr/voyance-par-chat">
    							<img src="images/bannieres/homepage/voyance-tchat.jpg" alt="Voyance tchat"  width="604" height="400">
    						</a>
    					</div>
    					<div class="item">
    						<a href="http://www.myastro.fr/voyance-par-telephone#ouvert">
    							<img src="images/bannieres/homepage/voyance-telephone.jpg" alt="Voyance par telephone"  width="604" height="400"/>
    						</a>
    					</div>

    				</div>
    				<ol class="carousel-indicators">
    					<li data-target="#carousel-homepage" data-slide-to="0" class="active"></li>
    					<li data-target="#carousel-homepage" data-slide-to="1"></li>
    					<li data-target="#carousel-homepage" data-slide-to="2"></li>
    					<li data-target="#carousel-homepage" data-slide-to="3"></li>
    				</ol>
    			</div>

    			<!-- /zone de texte -->
    			<div class="widget widget-home">
    				<div class="widget-title">
    					<h2 class="h4">Votre voyance en ligne, par mail ou par chat</h2>
    				</div>
    				<div class="text-justify text-front-end">
    					<p><span style="color:#000000; ">MyAstro vous permet de suivre une séance de voyance aussi bien en chattant directement avec l'un de nos experts qu'en recevant un mail complet répondant à vos questions et vous en dévoilant plus sur votre avenir. Quoi qu'il en soit, notre site de voyance confidentielle se veut le plus accessible possible pour permettre à chacun de trouver les réponses à ses questions.</span></p>
    				</div>
    			</div>
    			<!-- Horizontal Categories -->
    			<section class="widget cat-widget h-cat-1">
    				<div class="widget-title">
    					<h4>Tarot gratuit</h4>
    				</div>
    				<div class="cat-widget-content">
    					<!-- last post -->
    					<div class="row-fluid cat-horiz">
    						<article class="last-post clearfix">
    							<div id="carousel-tarot" class="carousel slide" data-ride="carousel">
    								<!-- Indicators -->
    								<div class="carousel-inner">
    									<div class="item active">
    										<a href="http://www.myastro.fr/voyance-tarot">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_HEBDOMADAIRE.png" alt="Image tirage hebdomadaire" width="604" height="400" />
    										</a>
    										<div class="carousel-caption">
    											<p>Vous vous posez des questions sur votre avenir proche? Alors gr&acirc;ce &agrave; MYASTRO proc&eacute;dez sans attendre au <a href="http://www.myastro.fr/voyance-tarot">tirage de tarot gratuit.</a></p>
    										</div>
    									</div>
    									<div class="item">
    										<a href="http://www.myastro.fr/tarot-de-l-amour">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_AMOUR.png" alt="Image tarot de l'amour" width="604" height="400" />
    										</a>
    										<div class="carousel-caption">
    											<p>Une question sur votre vie sentimentale? Des interrogations sur la fiabilit&eacute; de votre partenaire? Essayez le <a href="http://www.myastro.fr/tarot-de-l-amour">tarot de l'amour gratuit.</a></p>
    										</div>
    									</div>
    									<div class="item">
    										<a href="http://www.myastro.fr/tarot-quotidien">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_QUOTIDIEN.png" alt="Image tarot quotidien" width="604" height="400">
    										</a>
    										<div class="carousel-caption">
    											<p>Que ce soit en amour ou en argent notre Tarot vous oriente sur les choix que vous devrez prendre. Testez notre <a href="http://www.myastro.fr/tarot-quotidien">tarot du quotidien gratuit.</a></p>
    										</div>
    									</div>
    									<div class="item">
    										<a href="http://www.myastro.fr/tarot-mensuel">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_MENSUEL.png" alt="Image d'un tirage de tarot"  width="604" height="400"/>
    										</a>
    										<div class="carousel-caption">
    											<p>Gr&acirc;ce &agrave; notre tarot votre vie sentimentale s'&ecute;claircit en quelques clics. Faites le test sans attendre et essayez le <a href="http://www.myastro.fr/tarot-mensuel">tarot mensuel gratuit.</a></p>
    										</div>
    									</div>
    									<div class="item">
    										<a href="http://www.myastro.fr/tarot-de-couple">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_COUPLE.png" alt="Image tarot de couple"  width="604" height="400"/>
    										</a>
    										<div class="carousel-caption">
    											<p>Vous voulez savoir de quoi serait fait votre futur amoureux? Faites le test en compagnie de votre partenaire avec le <a href="http://www.myastro.fr/tarot-de-couple">Tarot de couple gratuit.</a></p>
    										</div>
    									</div>
    								</div>
    								<div class="indicators-handler">
    									<ol class="carousel-indicators">
    										<li data-target="#carousel-tarot" data-slide-to="0" class="active">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_HEBDOMADAIRE.png" alt="Image d'un tirage de tarot" width="604" height="400"/>
    										</li>
    										<li data-target="#carousel-tarot" data-slide-to="1">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_AMOUR.png" alt="Image tarot de l'amour"  width="604" height="400"/>
    										</li>
    										<li data-target="#carousel-tarot" data-slide-to="2">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_QUOTIDIEN.png" alt="Image tarot quotidien"  width="604" height="400"/>
    										</li>
    										<li data-target="#carousel-tarot" data-slide-to="3">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_MENSUEL.png" alt="Image tarot mensuel"  width="604" height="400"/>
    										</li>
    										<li data-target="#carousel-tarot" data-slide-to="4">
    											<img src="http://www.myastro.fr/images/bannieres/tarot/TAROT_COUPLE.png" alt="Image tarot de couple"  width="604" height="400"/>
    										</li>
    									</ol>
    								</div>
    							</div>

    						</article>
    					</div>
    					<!--zone de texte -->
    					<div class="widget">
    						<div class="widget-title">
    							<h2 class="h4">Amour, travail, famille, argent : votre voyance avec MyAstro</h2>
    						</div>
    						<div class="text-justify text-front-end">
    							<p><span style="color:#000000;">Avec MyAstro, profitez simplement d'une voyance en direct sur le sujet qui vous intéresse le plus. Que vous préfériez connaître votre avenir amoureux ou savoir si la fortune vous sourira, la voyance vous apportera des réponses claires. Au quotidien, vous pourrez ainsi lire sur notre site votre horoscope, ou par exemple tirer les cartes du tarot chaque semaine.</span></p>
    						</div>
    					</div>
    					<div class="row-fluid cat-horiz">
    						<!-- <div class="cat-horiz-divider widget"></div>-->
    						<div class="widget-title">
    							<h4>Voyance gratuite</h4>
    						</div>
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
    																<img src="images_voyance/banniere/voyance-tchat-gratuite.jpg" alt="Voyance par tchat gratuite" class="post-img"  width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title"> Voyance par tchat gratuite</h5>
    																	<br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Grâce à la voyance par tchat, communiquez directement en ligne avec un voyant expérimenté qui saura vous apporter les réponses que vous attendez. La voyance par tchat vous permet de faire une consultation complète avec le voyant de votre choix tout en restant tranquillement derrière votre ordinateur.</h6>                                                                      
    																</div>
    																<a href="http://www.myastro.fr/voyance-par-chat" class="more" ></a>
    															</div>
    														</article>
    													</div>
    													<div class="span6">
    														<article class="fold-item span12">
    															<div class="clearfix">
    																<img src="images_voyance/banniere/voyance-mail-gratuite.jpg" alt="Voyance par mail gratuite" class="post-img"  width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title">Voyance par mail gratuite</h5>
    																	<br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La voyance par mail de MyAstro est un système qui vous permet d'obtenir des réponses pertinentes et efficaces de manière rapide et complète grâce à une étude personnalisée. Que se soit votre avenir sentimental ou professionnel qui vous préoccupe, nos voyants sont là pour répondre à vos questions.</h6>
    																</div>
    																<a href="http://www.myastro.fr/voyance-gratuite-mail" class="more" ></a>
    															</div>
    														</article>
    													</div>
    												</li>
    												<li class="row-fluid">
    													<div class="span6">
    														<article class="fold-item span12">
    															<div class="clearfix">
    																<img src="images_voyance/banniere/horoscope-de-la-semaine.jpg" class="post-img" alt="Horoscope hebdomadaire" width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title"> Horoscope gratuit</h5><br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Consultez votre horoscope gratuit quotidien, hebdomadaire, mensuel, annuel, et découvrez ce qu’il va vous arriver en fonction de la position des planètes. Avec l’horoscope de l’amour, sachez à l’avance si vous allez rencontrer quelqu’un, si votre couple va battre de l’aile, ou si vous devez avouer vos sentiments!</h6>                                                                       
    																</div>
    																<a href="horoscope-gratuit" class="more" ></a>
    															</div>
    														</article>
    													</div>
    													<div class="span6">
    														<article class="fold-item span12">
    															<div class="clearfix">
    																<img src="images_voyance/banniere/astrologie-gratuite.jpg" alt="Voyance astrologie gratuite" class="post-img"  width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title"> Astrologie gratuite</h5>
    																	<br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L’astrologie est un art divinatoire basé sur la consultation des astres, qui jouent un rôle important sur les événements de votre vie. Nos médiums astrologues vous dévoilent votre astrologie gratuite, ce que les astres vous réservent sentimentalement, professionnellement, du côté de votre famille, financièrement...</h6>
    																</div>
    																<a href="http://www.myastro.fr/astrologie-gratuite" class="more" ></a>
    															</div>
    														</article>
    													</div>
    												</li>
    												<li class="row-fluid">
    													<div class="span6">
    														<article class="fold-item span12">
    															<div class="clearfix">
    																<img src="images_voyance/banniere/tarot-mensuel.jpg" alt="Voyance tarot mensuel gratuite" class="post-img"  width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title"> Tarot gratuit</h5>
    																	<br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Grâce au tarot divinatoire, effectuez gratuitement tous les tirages que vous voulez et découvrez les interprétations des cartes que vous avez tiré ! Avec le tarot du couple et le tarot de l’amour, quotidien, hebdomadaire et mensuel, faites confiance aux cartes.</h6>                                                                      
    																</div>
    																<a href="http://www.myastro.fr/tarot-gratuit" class="more" ></a>
    															</div>
    														</article>
    													</div>
    													<div class="span6">
    														<article class="fold-item span12">
    															<div class="clearfix">
    																<img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-femmes.jpg" alt="Compatibilité amoureuse pour les femmes" class="post-img"  width="294" height="190"/>
    																<div class="description visible-part">
    																	<h5 class="title">Numérologie gratuite</h5>
    																	<br>
    																	<h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Vos chiffres et lettres préférés ont un sens dans votre vie avec la numérologie. Votre numéroscope gratuit vous délivre des informations sur votre personnalité et tout ce qu’il va vous arriver dans un futur proche. Vous pouvez agir sur votre destin ! </h6>
    																</div>
    																<a href="http://www.myastro.fr/numerologie-gratuite" class="more" ></a>
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
    			<!-- Vertical Categories -->
    			<div class="row-fluid">
    				<div class="span6">
    				</div>
    				<div class="span6">
    				</div>
    			</div>
    		</div>
    		<!-- Right sidebar -->
    		<?php include('include/bloc-droit-principale.php'); ?>
    		<!-- Left sidebar -->
    		<section class="span300">
    			<!-- form widget-->
    			<aside class="widget w-adv">
    				<div class="widget-title">
    					<h4>question gratuite</h4>
    				</div>
    				<div id="form-w" class="widget-content clearfix">
    					<div class="description visible-part form-part">
    						<div class="alert alert-danger">
    							<p></p>
    						</div>
    						<form id="">
    							<input type="hidden" name="source" value="form-widget"/>
    							<input type="hidden" name="method" value="form-widget-2"/>
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
    										<option value="01">01</option>
    										<option value="02">02</option>
    										<option value="03">03</option>
    										<option value="04">04</option>
    										<option value="05">05</option>
    										<option value="06">06</option>
    										<option value="07">07</option>
    										<option value="08">08</option>
    										<option value="09">09</option>
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
    								<input class="btn_button" type="submit" name="valider" value="Poser votre question">
    							</div>
    						</form>
    					</div>
    					<div>

    					</div>
    				</aside>
    				<!-- end form widget -->
    				<!-- Banner voyance gratuite -->
    				<aside class="widget w-adv">
    					<div class="widget-title">
    						<h4>Voyance gratuite</h4>
    					</div>
    					<div class="widget-content clearfix">
    						<?php 
    						getSquareAd();
    						?>
    						<div class="description visible-part">
    							<div class="info text-justify">
    								<p><span style="color:#000000;"><br>Adieu l’hiver, place au printemps ! L’hiver nous fait ses adieux, emportant avec lui ses longues nuits et ses journées froides. Place désormais au printemps : le retour des beaux jours et du soleil. Un changement climatique qui impacte inévitablement notre humeur et notre manière de voir la vie. Terminés tous les tracas hivernaux, direction les projets printaniers. Et c’est parce que nous avons à cœur de vous apporter notre aide dans la réalisation de tous ces nouveaux projets qui se présentent à vous, que Myastro met à votre disposition son équipe complète de professionnels de la divination, afin de vous donner toutes les cartes en main pour faire de ce printemps 2016, une période inoubliable.</span></p>
    							</div>
    						</div>
    					</div>
    				</aside>
    				<!-- Banner voyance gratuite -->
    				<aside class="widget w-adv">
    					<div class="widget-title">
    						<h4>Voyance par téléphone</h4>
    					</div>
    					<div class="widget-content clearfix">
    						<a href="http://www.myastro.fr/voyance-par-telephone">
    							<?php 
    							getVoyantScryscraper();
    							?>
    						</a>
    					</div>

    				</aside>
    				<!-- Posts Of The Day -->
    				<aside>
    					<!-- /zone de texte -->
    					<div class="widget">
    						<div class="text-justify">                                 
    							<p><span style="color:#000000;">La voyance a longtemps été perçue comme une pratique onéreuse, réservée à une certaine élite capable de s’offrir des consultations avec des voyants professionnels. Mais là n’est pas la tradition des Arts divinatoires qui ont, depuis la nuit des temps, toujours été à disposition de tous. Et c’est parce que la voyance doit redevenir une pratique accessible à tous que Myastro propose un service de <a href="http://www.myastro.fr/voyance-discount">voyance discount</a>, mettant en avant une voyance traditionnelle et professionnelle sans en faire subir les conséquences à vos porte-monnaie. Parce que discount ne signifie pas qualité au rabais, Myastro s’engage à fournir des prestations divinatoires professionnelles en mettant à votre disposition une équipe d’experts en divination diplômés et aguerris aux pratiques divinatoires modernes.<span></p>
    						</div>
    					</div>
    				</aside>
    			</section>
    		</div>
    		<div class="absolute-top-section">
				<div class="row-fluid">
					<?php include('include/nav_inc.php'); ?>
				</div>
			</div>
    	</div>
    	
<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_index.php'); ?>

<script src="js/infoBulle.js"></script> 