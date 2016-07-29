<?php
    $questions = array(
        'Amour' => array(
            [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
            [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
            [ 'code' => 'question_24', 'subject' => 'sentimental', 'text' => 'Vous en aimez un(e) autre', 'conjoint' => true],
            [ 'code' => 'question_11', 'subject' => 'sentimental', 'text' => 'Il/Elle vous a quitté', 'conjoint' => true],
        ),
        'Argent' => array(
            [ 'code' => 'question_73', 'subject' => 'financier', 'text' => 'Vous attendez un investissement' ],
        ),
        'Travail' => array(
            [ 'code' => 'question_4', 'subject' => 'professionnel', 'text' => 'Vous attendez un changement professionnel' ],
            [ 'code' => 'question_3', 'subject' => 'professionnel', 'text' => 'Vous cherchez un emploi' ],
        )
    );
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Cartomancie en ligne gratuite : y voir plus clair | Myastro</title>
    
    <meta name="description" content="" />
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
    
<?php include('include/header_inc.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/formulaire-top-2.css" />   


<div class="container-fluid" itemscope >
    <!-- Main Content -->
    <div class="row-fluid">
        <div class="article-content">
            <header>
                <!--div itemscope >
                    <ul class="breadcrumb" itemprop="breadcrumb">
                        <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                        <li>cartomancie en ligne</span></li>
                    </ul>
                </div-->
                <h1 itemprop="headline">La cartomancie en ligne, pour y voir plus clair</h1>
            </header>
            <span class="clearfix"></span>
        <!--  ************************ contenu ****************************  -->
            <div class="row-fluid">
                <!-- Right sidebar -->
                <?php include('include/bloc-droit-principale.php'); ?>
     
                <!-- main content -->
                <div class="span6 main-content">
                    <div>           
                        <aside class="widget w-adv">
                        <div class="widget-title" style="text-align:center;">
                            <span class="h4">Cartomancie en ligne gratuite</span>
                        </div>
                        <div id="form-w" class="widget-content clearfix" style="background-image:url('images/voyance-en-ligne-web.jpg');">
                            <div class="visible-part form-part form-part-two">
                                <div class="alert alert-danger" style="display: none"></div>
                                <form id="">
                                    <input type="hidden" name="source" value="cartomancie" />
                                    <input type="hidden" name="method" value="general-suscribe" />
                                    <input type="hidden" name="support" value="voyance"/>
                                    <div class="form-w-one">
                                        <label></label>
                                        <input type="text" placeholder="Mon Prénom" id="name" name="prenom" required>
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
                                                  <option value="FR" selected>France Métropolitaine</option>
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
                                            <select class="cnt-right cnt-qt" name="question_code" id="theme_id" required>
                                                <option value="" selected="selected">Choisissez un domaine</option>
                                                <?php foreach($questions as $optgroup => $options){ ?>
                                                <optgroup label="<?= $optgroup ?>">
                                                    <?php foreach($options as $question){ ?>
                                                    <option value="<?= str_replace('"', "'", json_encode($question)) ?>"><?= $question['text'] ?></option>
                                                    <?php } ?>
                                                </optgroup>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-w-one sonprenom" style="display: none;">
                                            <input type="text" placeholder="Son Prénom" name="conjoint" id="son_prenom">
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
                                    <div></div>
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
                            <div></div>
                        </aside>
                        <div class="text-justify">
                            <p>Si comme beaucoup de gens, vous hésitez encore à vous faire tirer les cartes parce que vous n'en voyez pas vraiment l'utilité ou tout simplement parce que vous estimez que c'est une dépense de trop, sachez que vous pouvez désormais profiter d'un service de cartomancie gratuite assuré par un vrai spécialiste en la matière. Très bénéfiques pour votre bien-être et votre harmonie globale, ces séances contribueront à vous aider à mieux dominer votre environnement et à atteindre ainsi vos différents objectifs dans la vie.</p>
                        </div>
                        <div class="text-justify">
                            <h2>La cartomancie, un allié au quotidien</h2>
                            <p>L'une des utilisations les plus fréquentes de la cartomancie est liée à la prise de décisions complexes. En effet, pouvoir toujours prendre les bonnes décisions est un enjeu commun à tous les hommes. Assaillis constamment par le doute et les incertitudes, les êtres humains que nous sommes ont besoin d'être rassuré qu'ils s'engagent sur la bonne voie. Dans ce cadre, une séance de cartomancie gratuite immédiate permet d'y voir plus clair et de vous orienter efficacement dans chacun de vos prises de décision. Dans ces cas, une simple réponse par oui ou non permet de s'avancer avec plus d'assurance sur une piste ou une autre.</p><br>
                                <p>Une séance de cartomancie gratuite peut également aller beaucoup plus loin qu'un outil de décision immédiate et vous orienter plus globalement dans votre vie. Le liseur de cartes ne vous déclinera, certes pas tout votre avenir en détail, mais il pourra vous donner avec de nombreuses précisions, les voies à suivre pour parvenir à un épanouissement et une réussite réelle dans votre vie. Il saura également mettre en exergue les risques, les pièges et les différents aléas qui pourraient se dresser sur votre chemin. Ainsi, à la fin d'une séance, vous n'aurez peut-être pas une réponse par oui ou non sur les détails précis de votre avenir, mais vous aurez des informations qui vous aideront à mieux le forger.</p>
                        </div>
                        <div class="text-justify">
                            <h2>Pour faire face aux problèmes et organiser votre vie</h2>
                            <p>Il y a des moments dans la vie où les choses n'ont plus aucun sens du tout. Vous pouvez avoir des problèmes au travail ou dans vos relations, qui peuvent vous confondre. Lire les cartes peut alors vous aider à examiner et saisir la signification de ces choses. Souvent, si les besoins sont imminents, vous pourriez avoir besoin d'une séance de cartomancie gratuite immédiate pour voir les choses en perspective et comprendre pourquoi elles arrivent afin de mieux y faire face et aller de l'avant.</p><br>
                                <p>Allez-vous trouver l'amour ? Quelles sont les opportunités professionnelles qui s'offrent à vous ? Comment va se dérouler votre vie de famille, vos relations avec vos amis ? Voilà autant de questions que l'on se pose tous et auxquels la cartomancie apporte des réponses intéressantes, des pistes assez précises à exploiter. De quoi vous permettre d'organiser convenablement votre vie.</p>
                        </div>
                    </div>
                </div>
                <!-- Left sidebar -->
                <?php include('include/bloc-gauche-principale.php'); ?>
            </div>
        </div>
    </div>
</div>
    
<?php include('include/footer_inc_tarot.php'); ?>

<script src="js/infoBulle.js"></script>