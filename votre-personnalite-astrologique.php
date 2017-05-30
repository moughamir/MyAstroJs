<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
  <title>Votre personnalité astrologique : Myastro</title>
  <?= $tracker->getCanonical() ?>
  <meta name="description" content="Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique." />
  <?php include('include/header_sans_nav_inc.php'); ?>


  <div class="container-fluid relative-container" itemscope >

    <!-- Main Content -->
    <div class="row-fluid">

      <div class="article-content">
        <header>
          <div class="cat-widget-title">

            <h1 itemprop="headline">Votre personnalité astrologique</h1>

          </div>

          <div class="row-fluid social-share-footer">
            <span class="share-icon icon-caret-right"></span>

            <div class="share-icons">
              <p itemprop="headline">Avec Myastro, répondez à vos questionnements de compatibilité avec les personnes qui vous entourent en définissant votre personnalité astrologique.</p>
            </div>

          </div>

          <br>
        </header>

        <span class="clearfix"></span>
        <!--  ************************ ici ****************************  -->
        <div class="row-fluid">
          <!-- Right sidebar -->
          <?php include('include/bloc-droit-secondaire.php'); ?>

          <!-- main content -->
          <div class="span6 main-content">



            <aside class="widget w-pictures">
              <div class="widget-title">
                <h4>CHOISISSEZ VOTRE SIGNE ASTROLOGIQUE</h4>
              </div>

              <div class="widget-content clearfix thumbnails">
                <?php echo getHoroscopeBlock("votre-portrait") ?>
              </div>
            </aside>

            <!-- Banner voyance gratuite -->
            <aside class="widget w-adv">
              <div class="widget-title">
                <h4>JE NE CONNAIS PAS MON SIGNE</h4>
              </div>
              <form method="POST" action="signe.php?cat=votre-personnalite-astrologique" >
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
                <div style="margin-top:0px;text-align:center;height:80px;">
                  <input type="submit" value="Mon signe" name="valider" class="button"/>
                </div>
              </form>
            </div>

          </aside>

          <!-- Horizontal Categories -->
          <section class="cat-widget h-cat-1">
            <div class="cat-widget-title">

              <h3>HOROSCOPE GRATUIT</h3>

            </div>

            <div class="cat-widget-content">


              <div class="row-fluid cat-horiz">
                <div class="cat-horiz-divider"></div>

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

                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">La question est souvent posée à nos astrologues: ? et quant à ma vie amoureuse suis-je bien entouré(e)?. MyAstro vous permet de façon gratuite de vérifier votre compatibilité amoureuse avec votre partenaire.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-femmes" class="more" title=""></a>
                                  </div>
                                </article>
                              </div>

                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/compatibilite-amoureuse-pour-les-hommes.jpg"  class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">Compatibilité amoureuse pour les hommes</h5>


                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Les hommes peuvent au gré de leurs besoins vérifier la compatibilité amoureuse. Cela donne un atout sérieux pour vérifier s'il est dans la bonne direction ou non. Ce travail est opéré gratuitement et offert par MyAstro. N'hésitez pas pour une interrogation sur votre compatibilité amoureuse, vous en tirerez des enseignements précieux.</h6>                                                                       
                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/compatibilite-amoureuse-pour-les-hommes" class="more" title=""></a>
                                  </div>

                                </article>
                              </div>
                            </li>

                            <li class="row-fluid">
                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/horoscope-de-la-semaine.jpg"  class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">Découvrez votre horoscope de la semaine</h5>

                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Certains ne sortent pas de chez eux sans avoir consulté leur horoscope. Sans aller jusque là, vous pourrez de manière gratuite jeter un oeil sur votre horoscope hebdomadaire, il tracera les grandes lignes de votre semaine. MyAstro se met en quatre pour vous offrir une visibilité juste.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-de-la-semaine" class="more" title=""></a>
                                  </div>

                                </article>
                              </div>

                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/horoscope-2015.png" class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">Votre horoscope 2016</h5>
                                      <br>
                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Il est bon de savoir ce que nous réservent les astres pour un moyen terme de plusieurs mois voire l'année complète. Essayez gratuitement de compulser votre horoscope 2013. MyAstro dns ses outils met tout son savoir et sa technologie pour coller à la réalité de votre futur.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-2016" class="more" title=""></a>
                                  </div>

                                </article>
                              </div>
                            </li>
                            <li class="row-fluid">
                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/tarot-quotidien.jpg" class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">TAROT QUOTIDIEN</h5>
                                      <br>
                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Les cartes du tarot depuis le Bateleur (carte 1) jusqu'au Monde (carte 22) ont toutes un retentissement dans votre vie. Concentrez-vous sur votre vie et sur votre question, MyAstro vous répondra en fonction des cartes, alors pourquoi ne pas faire un tirage de tarot quotidien ? Profitez-en c'est gratis.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-quotidien" class="more" ></a>
                                  </div>
                                </article>
                              </div>

                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/tarot-hebdomadaire.jpg"  class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">TAROT HEBDOMADAIRE</h5>
                                      <br>
                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Si vous avez un moment de la semaine bien à vous et si vous souhaitez lever un coin du voile de votre futur, faites un tirage hebdomadaire du tarot. Basé sur les 22 arcanes issues des 22 lettres hébraïques, le tirage de tarot est bluffant de réalité sur votre futur. C'est écrit (peut-être) mais le fait de connaitre la tendance vous prépare à affronter l'évènement.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-hebdomadaire" class="more" ></a>
                                  </div>

                                </article>
                              </div>
                            </li>
                            <li class="row-fluid">
                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/tarot-mensuel.jpg"  class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">TAROT MENSUEL</h5>
                                      <br>
                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Le tarot peut être une espèce de rituel et chaque mois, l'on peut connaitre une parcelle de son futur. MyAstro vous donne la possibilité d'un tirage de tarot mensuel gratuit. Il a mis tout en oeuvre pour que sa technologie soit le plus simple d'usage. Si le coeur vous en dit, n'hésitez pas.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/tarot-mensuel" class="more" ></a>
                                  </div>

                                </article>
                              </div>

                              <div class="span6">
                                <article class="fold-item span12">
                                  <div class="clearfix">
                                    <img src="images_voyance/banniere/tarot-couple.jpg" class="post-img" />

                                    <div class="description visible-part">
                                      <h5 class="title">TAROT COUPLE</h5>
                                      <br>
                                      <h6 style="line-height:120%;margin-top:20px;text-align: justify;color:#ffffff;">Le tirage de tarot n'est pas réservé aux individus pris séparément. Vous pouvez vous intéresser aux groupes ou tout simplement à votre couple. Réaliser un tirage de tarots couple s'est se projeter vers le futur et c'est surtout s'interresser au sien. Chacun des protagonistes apporte son atmosphère et MyAstro saura bien faire la part des choses. Essayer c'est offert.</h6>

                                    </div>

                                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/horoscope-de-l-amour" class="more" ></a>
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
          <?php include('include/bloc-gauche-secondaire.php'); ?>
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
              <li><h4 class="h4"><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li><li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/astrologie-gratuite" >Astrologie gratuite</a></li><i class="icon-caret-right icon-fixed-width"></i>
              <li>Votre personnalité astrologique</h4></li>
            </ul>
          </div>
      </div>
    </div>
  </div>



  <?php include('include/nav_top_inc.php'); ?>
  <?php include('include/footer_inc_personnalite_astrologique.php'); ?>

