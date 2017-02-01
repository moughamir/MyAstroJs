<?php
/* 
    --------------------------------------------
    --      Louise-grandol = AFFIL BASE       --
    --------------------------------------------

    Created on : 25 juillet 2016
    Author     : Guillaume Deschamps <guillaumed.kgcom@gmail.com>
               : Laurène Dourdin <2aurene@gmail.com>
*/

$questions = array (
    'Amour' => array(
        'celibat'  => [ 'code' => 'lg_q4', 'subject' => 'sentimental', 'text' => 'Quand vais-je trouver l’amour ?' ],
        'couple'   => [ 'code' => 'lg_q1', 'subject' => 'sentimental', 'text' => 'Notre couple va t’il fonctionner ?', 'conjoint' => true ],
        'amoureux' => [ 'code' => 'lg_q2', 'subject' => 'sentimental', 'text' => 'A t-il des sentiments pour moi ?', 'conjoint' => true],
        'infidele' => [ 'code' => 'lg_q3', 'subject' => 'sentimental', 'text' => 'J’éprouve des sentiments pour quelqu’un d’autre', 'conjoint' => true]
    ),
    'Argent' => array(
        'argent'   => [ 'code' => 'lg_q6', 'subject' => 'financier', 'text' => 'Ma situation financière va t-elle évoluer ?' ],
    ),
    'Travail' => array(
        'travail'  => [ 'code' => 'lg_q5', 'subject' => 'professionnel', 'text' => 'Ma situation pro va t-elle évoluer ?' ],
    )
);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>MyAstro - La voyance par Louise</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

        <link rel="stylesheet" type="text/css" href="css/louise-grandol.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <h1 class="SiteHeader-Title">La voyance par Louise</h1>
        </header>
        <div class="PageWrapper">
            <section class="ContentBand">
                <div class="ContentBand-Column Psychic-Portrait">
                    <div class="Psychic-Portrait-Picture"></div>
                    <p class="Psychic-Portrait-Name">Louise Grandol</p>
                    <div class="Psychic-Portrait-Sign"></div>
                </div>
                <div class="ContentBand-Column">
                    <article id="form-container" class="FormContainer">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <div class="FormContainer-Fields">
                            <form class="ajax">                                
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="louise-grandol" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <input type="hidden" name="site" value="myastro.fr" />
                                <input type="hidden" name="dri" value="louise-grandol-dri" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->

                                <!-- PREMIÈRE ETAPE -->
                                <section id="scn-theme">
                                    <div class="DescText">
                                        <p class="DescText-Header">Bonjour à toutes et tous,</p>
                                        <p>Je m’appelle Louise, je suis voyante depuis maintenant 33 ans.</p>
                                        <p>Cartomancienne, c’est avec plaisir que je mets mes cartes du tarot à votre service.</p>
                                        <p>
                                            Parce que notre quotidien à tous est fait de hauts et de bas,<br>
                                            j’ai la conviction de pouvoir vous apporter sérénité et bien-être !
                                        </p>
                                        <p>Amour, travail, argent… Ne soyez plus prisonnier de cette situation !</p>
                                        <p>
                                            Ma philosophie ? Placer l’humain au centre de ma voyance !<br>
                                            Parce que votre bonheur est ma seule préoccupation. 
                                        </p>
                                        <p>
                                            Alors adieu les complications et les difficultés de paiement, <br>
                                            je prône une voyance privée, claire et honnête, où seule votre satisfaction compte.
                                        </p>
                                        <p class="DescText-Sign">Louise Grandol</p>
                                    </div>
                                    <div class="ThemeChoice">
                                        <h3 class="FormContainer-Header">Choisissez votre domaine :</h3>
                                        <div class="FormField-FlexContainer">
                                            <div class="FormField-FlexItem">
                                                <input type="radio" name="theme_choice" value="Amour" id="theme-amour" class="ThemeChoice-Input" />
                                                <label for="theme-amour" class="ThemeChoice-Item Amour">
                                                    <span class="ThemeChoice-ItemIco"></span> L’amour
                                                </label>
                                            </div>
                                            <div class="FormField-FlexItem">
                                                <input type="radio" name="theme_choice" value="Travail" id="theme-travail" class="ThemeChoice-Input" />
                                                <label for="theme-travail" class="ThemeChoice-Item Travail">
                                                    <span class="ThemeChoice-ItemIco"></span> Le travail
                                                </label>
                                            </div>
                                            <div class="FormField-FlexItem">
                                                <input type="radio" name="theme_choice" value="Argent" id="theme-argent" class="ThemeChoice-Input" />
                                                <label for="theme-argent" class="ThemeChoice-Item Argent">
                                                    <span class="ThemeChoice-ItemIco"></span> L’argent
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <!-- DEUXIEME ETAPE -->
                                <section id="scn-question" style="display:none">
                                    <h2 id="scn-question-title"></h2>
                                    <p class="alert alert-danger" style="display: none"></p>
                                    <div class="Fields-Table">
                                        <div class="Fields-Table-Row">
                                            <label class="FormField-Label">Votre Question</label>
                                            <div class="FormField">
                                                <select class="FormField-Input" name="question_code" id="theme_id" required>
                                                    <?php foreach($questions as $optgroup => $options){ ?>
                                                        <?php foreach($options as $question){ ?>
                                                        <option value="<?= str_replace('"', "'", json_encode($question));?>" <?= isset($question['conjoint']) ? 'data-need-spouse="1"' : '';?> data-filter-value="<?=$optgroup;?>"><?= $question['text'] ?></option>
                                                        <?php } ?>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="Fields-Table-Row sonprenom">
                                            <label for="son_prenom" class="FormField-Label">Prénom de l’être aimé</label>
                                            <div class="FormField">
                                                <input type="text" placeholder="Son prénom" id="son_prenom" class="FormField-Input" name="conjoint" />
                                            </div>
                                        </div>
                                    </div>
                                    <h3 class="FormContainer-Title">Précisez-moi votre demande :</h3>
                                    <div class="FormField">
                                        <textarea name="question" id="message" rows="5" cols="40" placeholder="Écrivez ici votre question avec le plus de détails possible. Pour plus de confidentialité, ne citez aucun nom." class="FormField-Input"></textarea>
                                    </div>
                                    <a href="#" class="FormContainer-Submit" id="scn-question-submit">envoyer</a>
                                </section>
                                <!-- TROISIÈME ÉTAPE -->
                                <section id="scn-form" style="display:none">
                                    <h2 class="FormContainer-Title">Remplissez vite le formulaire afin que <br class="hidebloc"/>je puisse vous envoyer votre interprétation :</h2>
                                    <p class="alert alert-danger" style="display: none"></p>
                                    <div class="FormField radio">
                                        <div class="FormField-TableInputContainer fixed-2-col gender">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> Femme</label>
                                                <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> Homme</label>
                                                <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="Fields-Table">
                                        <div class="Fields-Table-Row">
                                            <label for="name" class="FormField-Label blueLabel">Prénom</label>
                                            <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                        </div>
                                        <div class="Fields-Table-Row">
                                            <label for="email" class="FormField-Label">E-mail</label>
                                            <input id="email" type="email" name="email" class="FormField-Input" required />
                                        </div>
                                    </div>
                                    <div class="FormField">
                                        <label class="FormField-Label">Date de naissance</label>
                                        <div class="FormField-TableInputContainer">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select  class="FormField-Input" name="jour" required>
                                                    <option selected="selected" value="">Jour</option>
                                                    <?php for($i=1;$i<=31;$i++){ ?>
                                                    <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="mois" required>
                                                    <option value="" selected="selected">Mois</option>
                                                    <option value="01">Janv.</option>
                                                    <option value="02">Fév.</option>
                                                    <option value="03">Mars</option>
                                                    <option value="04">Avr.</option>
                                                    <option value="05">Mai</option>
                                                    <option value="06">Juin</option>
                                                    <option value="07">Juil.</option>
                                                    <option value="08">Août</option>
                                                    <option value="09">Sept.</option>
                                                    <option value="10">Oct.</option>
                                                    <option value="11">Nov.</option>
                                                    <option value="12">Dec.</option>
                                                </select>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="annee" required>
                                                    <option selected="selected" value="">Année</option>
                                                    <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                                    <option value="<?= $i ?>"><?= $i ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="FormContainer-Submit" type="submit" name="valider">envoyer</button>
                                </section>
                                <!-- FIN DE TROISIEME ETAPE-->
                            </form>
                        </div>
                    </article></div>
                </div>
            </section>
        </div><!-- fin de PageWrapper -->

        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/louise_grandol.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300|Gochi+Hand" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />