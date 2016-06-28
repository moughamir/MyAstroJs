<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
  <title>Horoscope 2016 : est-ce une bonne anée pour vous? - Myastro</title>
  <meta name="description" content="L'année 2016 est pleine de bonnes promesses et annonçait un renouveau certain. L'horoscope de Myastro vous permet de mettre toutes les chances de votre côté pour en faire une réussite." />
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

              <h1 itemprop="headline">Myastro, une ressource gratuite pour découvrir votre horoscope de l'année</h1>

            </div>

            <div class="row-fluid social-share-footer">
              <span class="share-icon icon-caret-right"></span>

              <div class="share-icons">
                <p itemprop="headline">Suivez votre horoscope en ligne et obtenez gratuitement une foule de renseignements utiles sur le site Myastro. Prenez connaissance, par exemple, des caractéristiques de votre signe et de ceux des gens qui vous entourent. Apprenez si l'année est favorable à l'harmonie de votre couple et consultez les prévisions de l'horoscope 2016 gratuit en ligne. Ou encore, découvrez votre profil astrologique féminin ou les compatibilités amoureuses pour les hommes.</p>
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
                <h4>CHOISISSEZ VOTRE SIGNE ASTROLOGIQUE</h4>
              </div>

              <div class="widget-content clearfix thumbnails">
                <?php echo getHoroscopeBlock("2016") ?>
              </div>
            </aside>

            <!-- Banner voyance gratuite -->
            <aside class="widget w-adv">
              <div class="widget-title">
                <h4>JE NE CONNAIS PAS MON SIGNE</h4>
              </div>
              <form method="POST" action="signe.php?cat=horoscope-2016" >
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
                  <option value="2012">2016</option>
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
              <h2>Votre horoscope 2016, un guide gratuit</h2>
              <p>En sélectionnant votre signe ou en inscrivant en ligne votre date de naissance complète, vous obtiendrez sans frais les principales caractéristiques de votre personnalité, tant sur le plan amoureux qu'au niveau du travail, à partir de votre horoscope personnel. Ces renseignements gratuits vous permettront de prendre des décisions plus éclairées et de vous servir de vos atouts pour atteindre vos buts. Profitez de l'occasion pour connaître quels sont les points forts et les côtés plus faibles de votre conjoint ou conjointe, de vos collègues ou de votre patron, en mentionnant tout simplement leur date de naissance. En consultant l'horoscope 2016 en ligne vous pourrez suivre les développements de votre signe et ceux de vos proches.</p>
              <br/><p>L'horoscope 2016 par Myastro pourra constituer un outil précieux pour savoir si votre partenaire est vraiment le meilleur complément amoureux pour vous. En complétant le test gratuit en ligne, vous pourrez être rassuré sur vos choix ou décider si un temps de changement est venu. Avant toute chose, les explications contenues sur ce site ont pour but de vous fournir des pistes de réflexion pour mieux orienter votre chemin de vie. Plusieurs personnages influents de ce monde consultent à chaque jour leur horoscope pour y trouver des repères pour améliorer leurs pensées et leurs actions.</p>
            </div>
            <div class="text-justify">
              <h2>Combinez votre horoscope 2016 au tarot</h2>
              <p>Sur Myastro, non seulement vous pouvez obtenir votre horoscope 2016 gratuit, mais il est possible de consulter votre tarot de façon quotidienne, hebdomadaire ou mensuelle. Utilisé depuis la fin du 16e siècle, le tarot originerait d'Égypte et serait devenu populaire entre autres grâces aux gitans. Basées sur des illustrations, les cartes de ce jeu transmettent des messages d'ordre pratique, spirituel ou philosophique. Vous pouvez utiliser sans frais le tarot en ligne de ce site pour trouver réponse à une question ou faire la lumière sur un aspect particulier de votre vie. Le « tarot du couple » a été conçu pour aider les partenaires à mieux comprendre leur relation et à la faire évoluer au fil du temps.</p>
              <br/><p>Pour obtenir une ressource fiable quand il est question d'interpréter votre horoscope de l'année, selon votre signe zodiacal, Myastro constitue une référence de choix.</p>
            </div>

          </div><br/>

          <!-- Horizontal Categories -->
          <section class="cat-widget h-cat-1">
            <div class="cat-widget-title">
              <h3><? //echo str_replace('-', ' ', $path);?></h3>
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

                                      <h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">L’année 2016 est-elle est celle de votre couple? Découvrez la comptabilité amoureuse entre vous et votre partenaire grâce à votre horoscope 2016 gratuit, vos signes astrologiques sont peut-être liés, faits pour être rassemblés, ou… totalement contraires ! </h6>

                                    </div>

                                    <a href="http://www.myastro.fr/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                  </div>
                                </article>
                              </div>

                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">Compatibilité amoureuse pour les hommes</h5>

                                      <h6 style="margin-top:20px;line-height:120%;text-align: justify;color:#ffffff;">Vous avez des sentiments pour elle, mais est-ce réciproque? Votre relation peut-elle durer? Vous êtes peut-être véritablement faits pour être ensemble, alors consultez votre horoscope de compatibilité amoureuse pour le savoir : vos signes en disent long sur votre couple.</h6>

                                    </div>

                                    <a href="http://www.myastro.fr/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
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
          $tracking = 'horoscope2016';
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
             <span class="h4"> <a href="http://www.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
              <li><a href="horoscope-gratuit" >Horoscope gratuit</a><i class="icon-caret-right icon-fixed-width"></i><li>Horoscope 2016</li></li></span>
            </ul>
          </div>
      </div>
    </div>


  </div>


  <?php include('include/nav_top_inc.php'); ?>
  <?php include('include/footer_inc_horoscope_2016.php'); ?>
  <script src="js/formValidator-w.js"></script>
  <script src="js/infoBulle.js"></script>

