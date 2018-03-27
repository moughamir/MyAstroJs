<?php

$form = $url = 'vpt-aff11';
$method = 'general-suscribe';
$support = "voyance";
$source = "ad380";
$site = 'myastro.fr';
$dri = "voyance-par-tchat/offre-gratuite";
$dri2 = "vpt-dri";
?>

<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Voyance Par Tchat | MyAstro</title>
    <link href="https://fonts.googleapis.com/css?family=Courgette|PT+Sans" rel="stylesheet">
    <link rel="stylesheet" href="css/tchat.css" type="text/css" />
  </head>

  <body>
    <a href="https://www.voyance-par-tchat.com/" class="logo-form">
                <img src="https://www.voyance-par-tchat.com/wp-content/themes/tchat/images/logo-voyance.png" alt="logo voyance par tchat" width="329" height="84" />
            </a>
    <div class="pageWrapper">
    <div class="leading">
      <p>vous avez une question ? <span>Nous avons la réponse</span></p>
    </div>
    <div class="flex-container">
      <div class="col-left">
        <div class="holder holder-tr">

        </div>
        <div class="holder holder-bl">
          <div class="holder holder-md">
            <ul>
              <li class="subject" id="ref-amour">Amour</li>
              <li class="subject" id="ref-travail">Travail</li>
              <li class="subject" id="ref-argent">Argent</li>
            </ul>
          </div>
        </div>

      </div>
      <div class="col-right">
        <div class="form-container">
            <div class="form-container overlay" id="form-overlay"></div>
            <form method="post" class="af-form-wrapper ajax-form ajax">
              <!-- ########## identification formulaire ########## -->
              <input type="hidden" name="source" value="<?= $url;?>" />
              <input type="hidden" name="method" value="<?= $method;?>" />
              <input type="hidden" name="support" value="<?= $support;?>" />
              <input type="hidden" name="site" value="<?= $site;?>" />
              <input type="hidden" name="affiliation" value="<?= $source;?>" />
              <input type="hidden" name="dri" value="<?= $dri;?>" />
              <input type="hidden" name="dri2" value="<?= $dri2;?>" />
              <!-- ########## autres champs pré-remplis ########## -->
              <input type="hidden" name="tel_needed" value="1" />
              <input type="hidden" name="cguv" value="1" />
              <input type="hidden" name="partenaires" value="1" />
              <input type="hidden" name="prenom" id="js-name" />
              <input type="hidden" name="question_code"  value="" />
              <input type="hidden" name="optional_birthdate" value="0" />
              <!-- ############################################### -->
            <div class="af-form">
              <div class="af-body af-standards">
                <div id="inner-form-frame">
                  <div class="alert alert-danger hidden"></div>
                  <div class="af-element">
                    <label class="previewLabel" for="question">&gt; Choisissez votre question gratuite&nbsp;:</label>
                    <div class="af-selectWrap">
                      <select name="question_code" id="question" class="form-control question_code" required="">
                        <option value="" selected="" disabled="">Thème de la question</option>
                        <optgroup label="Amour">
                          <option value="{'code':'question_1','subject':'sentimental','text':'Vous cherchez l\u2019amour ?'}">Vous cherchez l’amour ?</option>
                          <option value="{'code':'question_2','subject':'sentimental','text':'A-t-il\/elle des sentiments pour moi ?','conjoint':true}" data-need-spouse="1">A-t-il/elle des sentiments pour moi ?</option>
                          <option value="{'code':'question_24','subject':'sentimental','text':'Vous avez des sentiments pour un\/une autre','conjoint':true}" data-need-spouse="1">Vous avez des sentiments pour un/une autre</option>
                          <option value="{'code':'question_11','subject':'sentimental','text':'Mon ex m\u2019aime-t-il\/elle encore ?','conjoint':true}" data-need-spouse="1">Mon ex m’aime-t-il/elle encore ?</option>
                        </optgroup>
                        <optgroup label="Argent">
                          <option value="{'code':'question_73','subject':'financier','text':'Vous attendez un investissement'}">Vous attendez un investissement</option>
                        </optgroup>
                        <optgroup label="Travail">
                          <option value="{'code':'question_4','subject':'professionnel','text':'Vais-je avoir une augmentation ?'}">Vais-je avoir une augmentation ?</option>
                        </optgroup>
                      </select>
                    </div>
                  </div>
                    <div class="conjoint">
                        <div class="af-element">
                            <label class="previewLabel" for="conjointfield">&gt; Prénom de celui ou celle que vous aimez :</label>
                            <div class="af-textWrap">
                                <input type="text" id="conjointfield" class="form-control" name="conjoint" placeholder="Son prénom" />
                            </div>
                        </div>
                        <div class="af-element">
                            <label class="previewLabel" for="naissanceConjoint">&gt; Sa date de naissance :</label>
                            <div class="af-dateWrap"><div><!-- display table indispensable -->
                                    <div class="form-datepart">
                                        <select name="jour_c" class="form-control" id="jour_c">
                                            <option disabled selected value="">Jour</option>
                                            <?php for($i=1;$i<=31;$i++){ ?>
                                                <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <div class="form-datepart">
                                        <select name="mois_c" class="form-control" id="mois_c">
                                            <option disabled selected value="">Mois</option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Février</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Aout</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Décembre</option>
                                        </select>
                                    </div>
                                    <div class="form-datepart">
                                        <select name="annee_c" class="form-control" id="annee_c">
                                            <option disabled selected value="">Année</option>
                                            <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div></div>
                        </div>
                    </div>

                    <div class="af-element flexElm">
                    <label class="previewLabel flexLabel">&gt; Vous êtes&nbsp;:</label>
                    <div class="af-radioWrap form-radio-inline">
                      <div class="af-element-radio">
                        <input name="sexe" class="form-control" id="sexe-f" value="femme" required="" type="radio">
                        <label class="choice" for="sexe-f">Une femme</label>
                      </div>
                      <div class="af-element-radio">
                        <input name="sexe" class="form-control" id="sexe-h" value="homme" required="" type="radio">
                        <label class="choice" for="sexe-h">Un homme</label>
                      </div>
                    </div>
                  </div>
                  <div class="af-element">
                    <label class="previewLabel" for="prenomfield">&gt; Quel est votre prénom&nbsp;?</label>
                    <div class="af-textWrap">
                      <input name="prenom" placeholder="Votre prénom" value="" class="form-control" id="prenomfield" required="" type="text">
                    </div>
                  </div>
                  <div class="af-element">
                    <label class="previewLabel">&gt; Quelle est votre date de naissance&nbsp;?</label>
                    <div class="af-dateWrap">
                      <div>
                        <!-- display table indispensable -->
                        <div class="form-datepart">
                          <select name="jour" class="form-control" id="jour" required="">
                            <option disabled="" selected="" value="">Jour</option>
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
                        </div>
                        <div class="form-datepart">
                          <select name="mois" class="form-control" id="mois" required="">
                            <option disabled="" selected="" value="">Mois</option>
                            <option value="01">Janvier</option>
                            <option value="02">Février</option>
                            <option value="03">Mars</option>
                            <option value="04">Avril</option>
                            <option value="05">Mai</option>
                            <option value="06">Juin</option>
                            <option value="07">Juillet</option>
                            <option value="08">Aout</option>
                            <option value="09">Septembre</option>
                            <option value="10">Octobre</option>
                            <option value="11">Novembre</option>
                            <option value="12">Décembre</option>
                          </select>
                        </div>
                        <div class="form-datepart">
                          <select name="annee" class="form-control" id="annee" required="">
                            <option disabled="" selected="" value="">Année</option>
                            <option value="2000">2000</option>
                            <option value="1999">1999</option>
                            <option value="1998">1998</option>
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
                            <option value="1909">1909</option>
                            <option value="1908">1908</option>
                            <option value="1907">1907</option>
                            <option value="1906">1906</option>
                            <option value="1905">1905</option>
                            <option value="1904">1904</option>
                            <option value="1903">1903</option>
                            <option value="1902">1902</option>
                            <option value="1901">1901</option>
                            <option value="1900">1900</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="af-element">
                    <label class="previewLabel" for="emailfield">&gt; Quelle est votre adresse mail&nbsp;?</label>
                    <div class="af-textWrap">
                      <input name="email" class="form-control" id="emailfield" placeholder="Votre E-mail" value="" required="" type="text">
                    </div>
                  </div>
                  <div class="af-element">
                    <label class="previewLabel" for="paysfield">&gt; Dans quel pays habitez-vous&nbsp;?</label>
                    <div class="af-selectWrap">
                      <select name="pays" class="form-control" id="paysfield" required="">
                        <option value="BE">Belgique</option>
                        <option value="CA">Canada</option>
                        <option value="LU">Luxembourg</option>
                        <option value="CH">Suisse</option>
                        <option value="FR" selected="">France Métropolitaine</option>
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
                  </div>
                  <div class="af-element">
                    <label class="previewLabel" for="phonefield">&gt; Quel est votre numéro de téléphone&nbsp;?</label>
                    <div class="af-textWrap">
                      <input name="tel" class="form-control" id="phonefield" placeholder="Votre numéro de téléphone" required="" type="text">
                    </div>
                  </div>
                  <div class="af-element" id="ctn_accord">
                        <p>
                            <input type="checkbox" name="cguv" required checked /> J’accepte les conditions générales d'utilisation.
                        </p>
                        <p style="visibility: hidden;">
                            <input  type="checkbox" name="partenaires" checked /> Je souhaite recevoir les offres des partenaires.
                        </p>
                  </div>
                  <div class="af-element buttonContainer">
                  <button type="submit" name="valider" value="1">accéder au <span>tchat gratuit</span></button>
                </div>
                </div>

              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    </div>
     <footer>
            <p>Copyright © 2018 Voyance par tchat</p>
     </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/formValidator.js"></script>
    <script type="text/javascript" src="js/vpt.js"></script>
    <!-- #### REMARKETINGS #### -->
    <?php include('include/remarketing/adwords.php');
    include('include/remarketing/analytics.php');
    include('include/remarketing/facebook.php'); ?>
  </body>

</html>
