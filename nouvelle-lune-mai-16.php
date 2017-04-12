<?php
/* 
    -------------------------------------------
    --   nouvelle-lune-mai-16 = AFFIL BASE   --
    -------------------------------------------

    Created on : 25 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/

$questions = array(
    'Amour' => array(
        [ 'code' => 'nlm16_question_1', 'subject' => 'sentimental', 'text' => 'Quand vais-je rencontrer l’amour ?' ],
        [ 'code' => 'nlm16_question_2', 'subject' => 'sentimental', 'text' => 'Quels sont ses sentiments pour moi ?', 'conjoint' => true ],
        [ 'code' => 'nlm16_question_24', 'subject' => 'sentimental', 'text' => 'Mes sentiments sont confus, que dois-je faire ?', 'conjoint' => true],
        [ 'code' => 'nlm16_question_11', 'subject' => 'sentimental', 'text' => 'Ai-je encore un avenir avec lui/elle ?', 'conjoint' => true],
    ),
    'Argent' => array(
        [ 'code' => 'nlm16_question_73', 'subject' => 'financier', 'text' => 'Vais-je gagner de l’argent ?' ],
    ),
    'Travail' => array(
        [ 'code' => 'nlm16_question_4', 'subject' => 'professionnel', 'text' => 'Quel sera mon avenir professionnel ?' ],
        [ 'code' => 'nlm16_question_3', 'subject' => 'professionnel', 'text' => 'Quand vais-je trouver du travail ?' ],
    )
);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>MyAstro - Ce que vous révèle la Nouvelle Lune</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
                
        <meta property="og:title" content="Nouvelle Lune = Nouvelle Vie" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.myastro.fr/nouvelle-lune-mai-16" />
        <meta property="og:image" content="http://www.myastro.fr/images_landing/nouvelle-lune-16/fb-ban.jpg" />
        <meta property="og:description" content="À l’image de son incidence sur le cycle lunaire, auquel elle donne un nouveau départ, la nouvelle lune a des conséquences et des influences similaires sur la vie de chacun d’entre nous." />
        <meta property="og:locale" content="fr_FR" />
        
        <link rel="stylesheet" type="text/css" href="css/nouvelle-lune-16.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <span class="PageLogo"></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeader">
                            <h1 class="DescText-Title">
                                Nouvelle lune<br />
                                =<br />
                                Nouvelle vie
                            </h1>
                            <p class="DescText-Title-Legend">
                                MARIE,<br />
                                Consultante en astrologie Lunaire<br />
                                répondra à vos questions
                            </p>
                        </header>
                        <article class="DescText">
                            <div class="DescText-Content">
                                <p>À l’image de son incidence sur le cycle lunaire, auquel elle donne un nouveau départ, la nouvelle lune a des conséquences et des influences similaires sur la vie de chacun d’entre nous. Cet astre, à la fois si proche de nous et si mystérieux, contribue à donner une nouvelle impulsion aux différents domaines composant notre quotidien.</p>
                                <p>Amour, travail, argent, vie sociale : cette période de la nouvelle lune est le moment idéal pour vous, pour passer à l’action, agir, vous lancer dans de nouveaux projets, relever tous les défis, prendre des décisions, et repartir du bon pied en laissant derrière vous un passé dont vous ne voulez plus.</p>
                                <p>À l’occasion de cette nouvelle lune du 6 mai, les astres sont avec vous et vous accompagnent pour vous aider à prendre un nouveau départ. Il serait dommage de ne pas profiter de cette opportunité…</p>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="ContentBand-Column Form">
                    <article class="FormContainer">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h2 class="FormContainer-Header">Remplissez vite le formulaire <br class="hidebloc"/> pour recevoir votre étude personnalisée !</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="site" value="myastro.fr" />
                                <input type="hidden" name="source" value="nouvelle-lune-mai-16" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="affiliation" value="affil_base" />
                                <input type="hidden" name="dri" value="nouvelle-lune-16-tel" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <div class="FormField">
                                    <label for="name" class="FormField-Label">Prénom</label>
                                    <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                </div>
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
                                <div class="FormField">
                                    <label class="FormField-Label" for="theme_id">Votre question</label>
                                    <select class="FormField-Input" name="question_code" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <?php foreach($questions as $optgroup => $options){ ?>
                                        <optgroup label="<?= $optgroup ?>">
                                            <?php foreach($options as $question){ ?>
                                            <option value="<?= str_replace('"', "'", json_encode($question)) ?>" <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?>><?= $question['text'] ?></option>
                                            <?php } ?>
                                        </optgroup>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="FormField sonprenom" style="display: none;">
                                    <label class="FormField-Label" for="son_prenom">Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
                                </div>
                                <div class="FormField">
                                    <label for="email" class="FormField-Label">E-mail</label>
                                    <input id="email" type="email" name="email" class="FormField-Input" required />
                                    <span class="FormField-Info" style="margin-top: -10rem;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                <button class="FormContainer-Submit" type="submit" name="valider">Je veux savoir</button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <footer class="SiteFooter">
            <div class="PageWrapper">
                <ul class="ReassuranceList">
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img star"></span>
                        <span class="ReassuranceList-Item-Txt">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img lock"></span>
                        <span class="ReassuranceList-Item-Txt">Consultations 100% <br/><strong>discrètes & anonymes</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img gift"></span>
                        <span class="ReassuranceList-Item-Txt">Étude personnalisée <br/><strong>par mail sous 24h</strong></span>
                    </li>
                    <li class="ReassuranceList-Item">
                        <span class="ReassuranceList-Item-Img trophy"></span>
                        <span class="ReassuranceList-Item-Txt">My Astro leader <br/><strong>depuis 2007</strong></span>
                    </li>
                </ul>
            </div>
        </footer>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />