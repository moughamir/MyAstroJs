<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<title>Voyance gratuite par tchat avec Myastro</title>
	<meta name="description" content="" />
	<?= $tracker->getCanonical() ?>
	<script src="js/jquery-1.11.js"></script>
	<style>
		.infob-tel-w,.infob-email-w{
			position:absolute; 
			width:192px;
			color:#fff; 
			background:#246BAD; 
			padding:15px; 
			border-radius:3px; 
			box-shadow:0 0 2px rgba(0,0,0,.5);
			transform:scale(0) rotate(-12deg);
			transition:all .25s;
			opacity:0;
		}

		.infob-email-w{
			margin-top:-76px; 
			margin-left:-284px;
		}
		.infob-tel-w{
			margin-top:-95px; 
			margin-left:-284px;
		}
	</style>
	
	<?php include('include/header_sans_nav_inc.php'); ?>

	<link rel="stylesheet" href="./voyance-gratuite-6_files/style-3.css">
 
	<div class="container-fluid relative-container" itemscope >

		<!-- Main Content -->
		<div class="row-fluid">

			<div class="article-content">
				<header>
					
					<div class="cat-widget-title">
						<h1 itemprop="headline">Voyance gratuite par tchat : la fusion de la tradition et de la modernité</h1>
					</div>
					<div class="row-fluid social-share-footer" style="padding:0px;">
						<span class="share-icon icon-caret-right"></span>
						<div class="share-icons" >
							<p class="txt-top" itemprop="headline">Support divinatoire millénaire, ayant connu les civilisations humaines les plus anciennes et les plus prestigieuses, la voyance a du, tout au long de son existence, évoluer pour s’adapter aux nouvelles sociétés côtoyées. De nombreuses nouvelles branches de la voyance sont ainsi apparues ces dernières années, jusqu’à l’ultime pour le moment : la voyance gratuite par tchat.</p>
						</div>
					</div>
				</header>
				<br>
				<span class="clearfix"></span>

				<!--  ************************ contenu ****************************  -->

				<div class="row-fluid" style="background:url('voyance-gratuite-6_files/back_voyance_gratuite.pn') no-repeat fixed center center rgba(0, 0, 0, 0); margin-top:-22px;">

					<!-- main content -->
					<div class="span6 main-content" style="width:100%;">
						<div class="texte-voyance-g">
							<div class="text-justify">
								<br>
								<h2>L’arrivée du tchat dans le monde de la voyance</h2>
								<p>De tous temps, la voyance a du prendre en considération les habitudes, les attentes et les besoins des nouvelles sociétés avec lesquelles elle devait marcher main dans la main. Sous peine d’avancer à contre-courant, la voyance s’est vu contrainte de revoir ses pratiques afin de se rapprocher au plus près des personnes souhaitant avoir recours à ses dons, sans pour autant perdre de sa tradition.<br /><br /> C’est donc assez naturellement que la voyance est entrée dans l’ère du 21ème siècle, avec l’apparition des nouveaux supports de communication. Parmi ces supports modernes, le tchat est celui qui a apporté le plus de changements au cœur d’une pratique exercée depuis des millénaires.</p>
							</div>
							<div class="text-justify">
								<br><h3>Voyance gratuite par tchat : de nombreux avantages pour tous</h3>
								<p>Des changements qui ont entraîné de nombreuses nouveautés dans la pratique moderne de la voyance. La <strong>voyance gratuite par tchat</strong> offre une multitude d’avantages à toutes les personnes souhaitant avoir accès à une consultation. Plus besoin d’attendre et de devoir sortir de chez soi, grâce au tchat, la voyance se fait de l’endroit que vous souhaitez, en instantané et dans une discrétion la plus absolue. Il ne suffit que d’un écran et d’une connexion pour avoir accès à un échange avec un professionnel de la voyance par tchat. Un professionnel qui profite lui aussi des nombreux avantages que peut lui offrir la voyance gratuite par tchat.<br /><br /> En plus de mettre de côté toutes les éventuelles contraintes pouvant encombrer la tranquillité d’esprit de son consultant, le tchat permet au voyant de créer une atmosphère plus intime, lui offrant la possibilité d’une meilleure connexion avec la personne qui le contacte. Une meilleure connexion et un échange plus fluide qui ont un impact direct sur la qualité des interprétations, qui se retrouvent ainsi plus complètes et encore plus détaillées que celles pouvant être données lors d’une consultation dite traditionnelle.</p>
							</div>
							<div class="text-justify">
								<br><h4>Des professionnels de la voyance gratuite par tchat pour des réponses immédiates</h4>
								<p>L’avènement de la voyance par tchat et de tous ses apports a ainsi vu naître une nouvelle spécialisation chez les professionnels de la divination. Chacun d’entre eux a ainsi du intégrer l’utilisation de ce nouveau support de communication dans leur interprétation et la pratique de leur don.<br /><br /> Désormais, grâce à la voyance gratuite par tchat, plus besoin d’attendre pour recevoir des réponses claires et précises, l’échange avec le voyant se fait en direct et en simultané, ses réponses étant instantanées. Parce que le destin ne nous laisse pas toujours le temps de réagir, la voyance gratuite par tchat permet d’avoir un coup d’avance sur la destinée.</p>
							</div>
						</div>

						<div class="formulaire-voyance-g">
							<div class="widget-title vy-title">
								<h2 class="h4">Votre voyance gratuite par tchat</h2>
							</div>           
							<div class="widget w-adv">
								<div id="form-w" class="widget-content clearfix">
									<div class="visible-part form-part">
										<div class="alert alert-danger">
											<p></p>
										</div>
										<form id="">
											<input type="hidden" name="source" value="voyance-gratuite-par-tchat" />
											<input type="hidden" name="method" value="voyance-gratuite-2" />
											<input type="hidden" name="support" value="voyance"/>
											<div>
												<div class="vt2">
													<label class="label-left">Je suis :</label>
													<select class="cnt-right" name="sexe" required>
														<option value="femme">Une femme</option>
														<option value="homme">Un homme</option>
													</select>
												</div>
												<div class="vt2 inp-txt">
													<label></label>
													<input type="text" placeholder="Mon Prénom" id="name" name="prenom" required>
												</div>
												<div class="vt2 dn-part">
													<label>
														Ma date de naissance :

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
												<div class="vt2 inp-txt">
													<label></label>
													<input type="text" placeholder="Son Prénom" name="conjoint" id="lover_name">
												</div>
												<div class="vt2 dn-part">
													<label>
														Sa date de naissance :
													</label>
													<select  class="daten jour" name="jour_c">
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
													<select  class="daten mois" name="mois_c">
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
													<select   class="daten annee" name="annee_c">
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
												<div class="vt2">
													<label class="label-left">Ma question :</label>
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
												<div class="vt2">
													<label class="label-left" >Mon pays :</label>
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

												<div class="vt2 inp-txt">
													<label ></label>
													<input  type="email" name="email" placeholder="Mon email" required>
													<span class="infob-email-w">Une étude personnalisée vous sera envoyée à cette adresse</span>
												</div>
												<div class="vt2 inp-txt">
													<label ></label>
													<input  name="tel" type="tel" placeholder="Mon numéro de téléphone" required>
													<span class="infob-tel-w">Vous serez rappelé par le voyant à ce numéro</span>
												</div>
												<div class="vt2 inp-txt">
													<textarea class="" rows="6" name="question" id="question" placeholder="Posez votre question en donnant le maximum d&#39;informations. Pour plus de confidentialité, ne citez aucun nom de personne."  data-msg-required="Merci de préciser votre problème"></textarea>
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
											<div class="vt2">
												<input class="btn_button btn-full-two" type="submit" name="valider" value="Poser votre question">
											</div>
										</form>
									</div><br>

								</div>

							</div>

						</div>
					</div>
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
						<li><span class="h4"><a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
						<li><a href="voyance-gratuite" >Voyance gratuite</a><i class="icon-caret-right icon-fixed-width"></i><li>Voyance gratuite par tchat</li></li></span>
					</ul>
				</div>
			</div>
		</div>

	</div>

<script src="js/formValidator.js"></script>
<script src="js/infoBulle.js"></script>

<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_voyance_gratuite.php'); ?>
