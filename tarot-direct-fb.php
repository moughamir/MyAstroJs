<?php
/*
    -----------------------------------------
    --   tarot-direct-fb = FACEBOOK_ADDS   --
    -----------------------------------------

    Created on : 07 juin 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
// Paramètres design
$cards_dir = 'tarot/cartes/original-grand/';
$pict_path = 'images_landing/tarot-direct/';
$css = 'css/tarot-direct.css';
// Design Noël
$j = date('j');
$m = date('n');
if($m == 12 || ($m == 1 && $j <= 5)){
    $pict_path = 'images_landing/tarot-direct-noel/';
    $css = 'css/tarot-direct-noel.css';
}
// Paramètre formulaire
include('include/questions/tarot-direct.php');
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tarot Direct - Interprétation en live !</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="<?= $pict_path ?>favicon.png" />

        <link rel="stylesheet" type="text/css" href="<?= $css ?>" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="ContentBand ThreeCols SiteHeader">
            <div class="PageWrapper ContentBand-Table">
                <div class="ContentBand-Column SiteHeader-Slogan1">
                    Tirage de tarot gratuit<br>
                    avec interprétation en live !
                </div>
                <div class="ContentBand-Column"><div class="SiteHeader-Logo"></div></div>
                <div class="ContentBand-Column SiteHeader-Slogan2">
                    Votre tirage <strong>en direct</strong><br>
                    en 2 minutes chrono !
                </div>
            </div>
        </header>
        <form id="form-container" class="ajax">
            <!-- -------------------------------------- CHOIX DU VOYANT -------------------------------------- -->
            <section class="ContentBand TwoCols PsychicChoice Principal" id="scn-psychic">
                <header class="ContentBand-ColumnHeader Title">- Choisissez votre <strong>voyante</strong> -</header>
                <div class="PageWrapper">
                    <div class="ContentBand-Table">
                        <div class="ContentBand-Column PsychicChoice-Psychic Christelle">
                            <input type="radio" name="voyant" value="Christelle" id="christelle_choice" class="PsychicChoice-Psychic-Input" required />
                            <label for="christelle_choice" class="PsychicChoice-Psychic-VisualForm">
                                <span class="PsychicChoice-Psychic-Picture"><span class="PsychicChoice-Psychic-Photo"></span></span>
                                <span class="PsychicChoice-Psychic-Name">Christelle</span>
                            </label>
                            <div class="PsychicChoice-Psychic-Introduction">
                                Bonjour, je suis Christelle et je suis tarologue et médium depuis maintenant treize ans. En plus de mes visions, je maitrise tous les messages du tarot. Leur profondeur sans limite me permet de compléter mes flashs afin de vous apporter des réponses claires et complètes. Je suis plus particulièrement spécialisée dans les questions amoureuses et sentimentales mais je peux aborder facilement le sujet de votre choix sans aucun problème. Je mets mes dons et mes connaissances divinatoires à votre service, afin de répondre à toutes les questions que vous vous posez.
                            </div>
                        </div>
                        <div class="ContentBand-Column PsychicChoice-Psychic Sonia">
                            <input type="radio" name="voyant" value="Sonia" id="sonia_choice" class="PsychicChoice-Psychic-Input" required />
                            <label for="sonia_choice" class="PsychicChoice-Psychic-VisualForm">
                                <span class="PsychicChoice-Psychic-Picture"><span class="PsychicChoice-Psychic-Photo"></span></span>
                                <span class="PsychicChoice-Psychic-Name">Sonia</span>
                            </label>
                            <div class="PsychicChoice-Psychic-Introduction">
                                Bienvenue à tous et à toutes, je m’appelle Sonia et pour moi, le tarot est une histoire de famille puisque c’est ma grand-mère qui m’a initié à cette pratique. Très jeune j’ai commencé à avoir mes visions et grâce aux cartes du tarot, je peux mettre des mots sur ces flashs, et ainsi vous transmettre des interprétations très détaillées. Grâce à cette double compétence, je peux interpréter votre tirage du tarot et vous communiquer toutes les visions que j’ai vous concernant. Avec un seul mot d’ordre : chasser tous vos doutes pour vous aider à avancer l’esprit léger et serein.
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- -------------------------------------- CHOIX DE LA QUESTION -------------------------------------- -->
            <section class="ContentBand ThemeChoice Principal" id="scn-theme" style="display:none">
                <header class="ContentBand-ColumnHeader Title">- Choisissez votre <strong>Thème</strong> -</header>
                <div class="PageWrapper">
                    <article class="ThemeChoice-List">
                        <?php foreach($questions as $optgroup => $options){ ?>
                            <?php foreach($options as $theme => $question){ ?>
                            <input type="radio" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" id="theme_<?= $theme ?>" class="ThemeChoice-ListItem-Input theme_id" required <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?> />
                            <label for="theme_<?= $theme ?>" class="ThemeChoice-ListItem">
                                <span class="ThemeChoice-ListItem-Icon <?= $optgroup ?>"></span>
                                <span class="ThemeChoice-ListItem-Label"><?= $question['text'] ?></span>
                            </label>
                            <?php } ?>
                        <?php } ?>
                    </article>
                </div>
            </section>
            <!-- -------------------------------------- FORMULAIRE -------------------------------------- -->
            <section class="ContentBand Form Principal" id="scn-form" style="display:none">
                <header class="ContentBand-ColumnHeader Title">- Pour poursuivre remplissez le <strong>formulaire</strong> ci-dessous -</header>
                <div class="PageWrapper ContentBand-Table">
                    <div class="ContentBand-Column">
                        <article class="FormContainer">
                            <div class="Pop Pop-Voyant getFormValue" data-ref-form="voyant" data-method="class"><span class="Pop-Voyant-Photo"></span></div>
                            <div class="FormContainer overlay" id="form-overlay"></div>
                            <div class="FormContainer-Fields Fields-Table">
                                <p class="alert alert-danger" style="display: none"></p>
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="tarot-direct-fb" />
                                <input type="hidden" name="method" value="general-suscribe" />
                                <input type="hidden" name="support" value="tarot" />
                                <input type="hidden" name="site" value="myastro.fr" />
                                <input type="hidden" name="affiliation" value="facebook_adds" />
                                <input type="hidden" name="dri" value="tarot-direct-merci" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="tel_needed" value="1" />
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                <div class="Fields-Table-Row gender">
                                    <label class="FormField-Label">Vous êtes</label>
                                    <div class="FormField radio">
                                        <div class="FormField-TableInputContainer fixed-2-col gender">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-f" class="FormField-Label "><span class="ico-woman fa fa-venus"></span> une femme</label>
                                                <input type="radio" name="sexe" value="femme" id="sexe-f" class="FormField-Input" />
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <label for="sexe-h" class="FormField-Label"><span class="ico-man fa fa-mars"></span> un homme</label>
                                                <input type="radio" name="sexe" value="homme" id="sexe-h" class="FormField-Input" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label for="name" class="FormField-Label">Votre prénom</label>
                                    <div class="FormField">
                                        <input type="text" id="name" name="prenom" class="FormField-Input" value="<?= $prenom ?>" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label class="FormField-Label">Votre date de naissance</label>
                                    <div class="FormField">
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
                                </div>
                                <div class="Fields-Table-Row sonprenom" style="display: none;">
                                    <label class="FormField-Label" for="son_prenom">Personne aimée</label>
                                    <div class="FormField">
                                        <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label for="email" class="FormField-Label">Votre email</label>
                                    <div class="FormField">
                                        <input id="email" type="email" name="email" class="FormField-Input" value="<?= $email ?>" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <span class="FormField-Info">Vous recevrez votre interprétation à cette adresse</span>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label for="tel" class="FormField-Label">Votre numéro de téléphone</label>
                                    <div class="FormField">
                                        <input id="tel" type="tel" name="tel" class="FormField-Input" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <span class="FormField-Info">Un SMS vous sera envoyé lorsque lʼinterprétation sera prête</span>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label for="pays" class="FormField-Label">Votre pays</label>
                                    <div class="FormField">
                                        <select name="pays" id="pays" class="FormField-Input" required>
                                            <option value="" selected>Votre Pays</option>
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
                                </div>
                            </div>
                            <button class="FormContainer-Submit" type="submit" name="valider">Lancer lʼinterprétation</button>
                        </article>
                    </div>
                </div>
            </section>
        </form>
        <!-- -------------------------------------- TIRAGE DU TAROT -------------------------------------- -->
        <div class="WidgetTarot">
            <section class="ContentBand Tarot Arrowed" id="scn-tarot-draw">
                <header class="ContentBand-ColumnHeader Title">- Tirez <strong>5 cartes</strong> -</header>
                <div class="PageWrapper ContentBand-Table">
                    <div id="cards-container" class="ContentBand-Column">
                        <div class="WidgetTarot-Draw" >
                            <?php for($i=1;$i<=20;$i++){ ?>
                            <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                <div class="WidgetTarot-Card-Face front "></div>
                                <div class="WidgetTarot-Card-Face back"></div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <section class="ContentBand Tarot-Result Arrowed" id="scn-tarot-result">
                <div class="PageWrapper ContentBand-Table">
                    <div id="cards-result" class="ContentBand-Column">
                        <div class="WidgetTarot-Result" >
                            <div class="WidgetTarot-ResultMsg">Votre tirage transmis à <span class="getFormValue" data-method="html" data-ref-form="voyant"></span></div>
                            <div class="WidgetTarot-Result">
                                <?php for($i=1;$i<=5;$i++){ ?>
                                <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/tarot-draw.js"></script>
        <script>/* Configuration du tirage de tarot */
            cardsPath = '<?= $cards_dir;?>';
            trt_deckNbCards = 20;
            trt_forceDrawFirst = false;
            trt_scrollOnComplete = false;
            trt_minSize = 600;
        </script>
        <script src="js/tarot-direct-wizard.js"></script>
        <script src="js/formValidator.js"></script>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />