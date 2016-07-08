<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
  <title>Horoscope du jour : comment appréhender votre journée? - Myastro</title>
  <meta name="description" content="Grâce à Myastro, consultez votre horoscope tous les jours et prévoyez ainsi tous les évènements qui vont survenir au cours de la journée." />
  <script src="js/jquery-1.11.js"></script>
  <link rel="stylesheet" href="css/infobulle.css" />

  <?php include('include/header_sans_nav_inc.php'); ?>

  <link rel="stylesheet" type="text/css" href="css/formulaire-top-3.css" />

  <div class="container-fluid relative-container" itemscope >

    <!-- Main Content -->
    <div class="row-fluid">

      <div class="article-content">
        <header>
            <div class="cat-widget-title">

              <h1 itemprop="headline">Votre horoscope du jour, pour tout savoir sur votre avenir immédiat</h1>

            </div>

            <div class="row-fluid social-share-footer">
              <span class="share-icon icon-caret-right"></span>

              <div class="share-icons">
                <p itemprop="headline">Découvrez votre horoscope du jour gratuit et complet et ce que les astres vous réservent en consultant votre horoscope du jour en ligne ! Grâce à des prédictions claires et précises, vous savez en quelques instants tout ce qui va se dérouler dans votre futur immédiat et conditionner votre avenir. Vie sentimentale, relations professionnelles, personnalité générale de votre signe : vous bénéficiez d'une voyance de qualité pour gérer au mieux dans la journée les moments de chance et ceux plus délicats.</p>
              </div>

            </div>
            <br>                           

          </header>

          <span class="clearfix"></span>

          <!--  ************************ ici ****************************  -->
          <div class="row-fluid">
            <!-- Right sidebar -->
            <?php include('include/bloc-droit-secondaire-2.php'); ?>	

            <!-- main content -->
            <div class="span6 main-content">



              <aside class="widget w-pictures">
                <div class="widget-title">
                  <h2 class="h4">CHOISISSEZ VOTRE SIGNE ASTROLOGIQUE</h2>
                </div>

                <div class="widget-content clearfix thumbnails">
                  <?php echo getHoroscopeBlock('jour') ?>
                </div>
              </aside>

              <!-- Banner voyance gratuite -->
              <aside class="widget w-adv">
                <div class="widget-title">
                  <span class="h4">JE NE CONNAIS PAS MON SIGNE</span>
                </div>
                <form method="POST" action="signe.php?cat=horoscope-du-jour" >
                  <div class="widget-content clearfix">
                   <select style="width: 20%;" name="date_naissance_j" >
                    <option selected="selected" value="Jour">Jour</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
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
                  <select style="width: 20%;" name="date_naissance_m">
                    <option selected="selected" value="Mois">Mois</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>

                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <select style="width: 30%;" name="date_naissance_a">
                    <option selected="selected" value="Année">Année</option>
                    <option value="1912">1912</option>
                    <option value="1913">1913</option>
                    <option value="1914">1914</option>
                    <option value="1915">1915</option>
                    <option value="1916">1916</option>
                    <option value="1917">1917</option>
                    <option value="1918">1918</option>
                    <option value="1919">1919</option>
                    <option value="1920">1920</option>
                    <option value="1921">1921</option>
                    <option value="1922">1922</option>
                    <option value="1923">1923</option>
                    <option value="1924">1924</option>
                    <option value="1925">1925</option>
                    <option value="1926">1926</option>
                    <option value="1927">1927</option>
                    <option value="1928">1928</option>
                    <option value="1929">1929</option>
                    <option value="1930">1930</option>
                    <option value="1931">1931</option>
                    <option value="1932">1932</option>
                    <option value="1933">1933</option>
                    <option value="1934">1934</option>
                    <option value="1935">1935</option>
                    <option value="1936">1936</option>
                    <option value="1937">1937</option>
                    <option value="1938">1938</option>
                    <option value="1939">1939</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2012">2013</option>
                  </select>
                  <div style="margin-top:0px;text-align:center;">
                    <input type="submit" value="Mon signe" name="valider" class="button"/>
                  </div>
                </form>
              </div>

            </aside>
            <!-- texte -->
            <div>
              <div class="text-justify">
                <h2>Consultez votre horoscope du jour pour mieux connaître les forces actuelles de votre signe</h2>
                <p>Le net avantage de l'horoscope du jour réside dans sa réactivité par rapport aux événements qui vont se dérouler les prochaines heures. Vous avez par conséquent la garantie de ne pas faire de faux-pas et de toujours choisir la solution la plus pertinente, tout en respectant votre personnalité : personne ne s'attend à ce qu'un scorpion réagisse comme un cancer ou une balance ! Capitalisez sur les forces de votre signe et limitez l'impact de ses faiblesses.</p>
                <br/><p>Il est bien normal de vouloir savoir ce que la vie vous réserve, même à court terme. L'horoscope du jour répond parfaitement à cette attente, en mettant notamment l'accent sur l'amour et le travail. Quelle est la probabilité d'une nouvelle rencontre durable ? Comment améliorer votre relation de couple actuelle ? Comment renforcer votre position professionnelle ? Autant de questions complexes que les prédictions quotidiennes permettent d'éclaircir grâce à leur formulation sans la moindre ambiguïté.</p>
              </div>
              <div class="text-justify">
                <h2>Un horoscope du jour aux très nombreuses thématiques</h2>
                <p>Grâce à votre horoscope du jour gratuit, vous êtes informé(e) de manière rapide et efficace sur de nombreuses thématiques de votre signe astral, au-delà du triptyque amour-argent-travail.
                  Vous pouvez ainsi prendre des décisions importantes sur votre santé en temps réel : grâce à des conseils avisés, vous vous sentez bien immédiatement.
                  Utilisez également votre horoscope du jour en ligne pour créer les conditions d'une vie sociale harmonieuse avec vos amis et votre famille.
                </p><br/>
                <p>Très complet, votre horoscope pour aujourd'hui identifie même votre nombre de chance actuel, un atout bien pratique pour les jeux d'argent. Ces chiffres puissants vous permettent d'augmenter sans le moindre effort vos possibilités de gain dans les tirages faisant intervenir le hasard : il vous suffit de les reprendre dans vos combinaisons. Cette donnée peut également vous aider à fixer la date et l'heure d'un rendez-vous important, personnel ou professionnel.
                  Profitez aussi de la citation et du clin d'œil du jour dédiés à votre signe pour améliorer votre vie et vos relations avec les autres au quotidien.
                </p>
              </div>

            </div><br/>
            <!-- Horizontal Categories -->
            <section class="cat-widget h-cat-1">
              <div class="cat-widget-title">
                <h3><?= str_replace('-', ' ', $path);?></h3>
              </div>

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
                                      <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-femmes.jpg" class="post-img" />

                                      <div class="description visible-part">
                                        <h5 class="title">La compatibilité amoureuse avec votre partenaire</h5>

                                        <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">L'horoscope gratuit de votre journée ou à plus long terme. Par exemple : vérifier l'affinité et la concordance de caracatères avec votre partenaire. C'est une chose essentielle lorsque vous décidez de cheminer avec celui ou celle qui sera intime. L'harmonie sera-t-elle au RDV ? Ne prenez pas de risques.</h6>

                                      </div>

                                      <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                    </div>
                                  </article>
                                </div>

                                <div class="span6">
                                  <article class="fold-item span12">
                                    <div class="clearfix">
                                      <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                      <div class="description visible-part">
                                        <h5 class="title">Compatibilité amoureuse pour les hommes</h5>

                                        <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Elle est belle, charmante, charmeuse et vous êtes comme envoûté. Vérifiez gratuitement la compatibilité amoureuse de votre muse. Au plus vous réagirez tôt, au moins souffrirez-vous.</h6>

                                      </div>

                                      <a href="http://<?= ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
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
              </section>






            </div>




            <!-- Left sidebar -->
            <?php 
            $tracking = 'horoscopejour';
            include('include/bloc-gauche-secondaire-2.php'); ?>
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
            <li>
             <span class="h4"> <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
              <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope du jour</li></li></span>
            </ul>
          </div>
      </div>
    </div>


    </div>
    

    <?php include('include/nav_top_inc.php'); ?>
    <?php include('include/footer_inc_horoscope_jour.php'); ?>
    <script src="js/formValidator-w.js"></script>
    <script src="js/infoBulle.js"></script>
