<?php
$form = $url= 'noel-2017-rc';
$source = "reflexcash";

$cards_dir = 'tarot/cartes/original-grand/';
$reassurance_items = [ 'voyant-serieux', 'discretion', 'interpretation', 'leader', 'paiement-secure' ];
$question = ['code'=>'tarot_noel17', 'subject'=>'evenement', 'text'=>'Tarot de Noël 2017'];

// Form Vars
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';

session_start();
$_SESSION['reflexcash_transactionid'] = isset($_GET['t1']) ? $_GET['t1'] : '';
$_SESSION['reflexcash_affiliateid'] = isset($_GET['t2']) ? $_GET['t2'] : '';
$_SESSION['reflexcash_source'] = isset($_GET['t3']) ? $_GET['t3'] : '';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Tarot de Noël par MyAstro</title>
        
        <link rel="shortcut icon" type="image/x-icon" href="images_landing/noel-17/favicon.png">
        <link rel="stylesheet" href="css/noel-17.css">
    </head>
    <body itemscope itemtype="http://schema.org/WebPage">
<!-- -------------------------- MODALE FORMULAIRE -------------------------- --
        <div class="FormContainer overlay" id="form-overlay"></div>
        <article class="modal hidden">
            <div class="modal-container">
                <h2 class="modal-title">Votre demande a bien été prise en compte</h2>
                <p class="modal-message">Vous allez rapidement être contacté par un de nos experts-voyants.</p>
                <button class="btn modal-btn">Fermer</button>
            </div>
        </article>
<!-- End Of Modal-->
        <section class="PageWrapper">
            <header class="PageHeader">
                <div class="PageLogo">
                    <?php include('include/myastro-logo-svg.php');?>
                </div>
                <div class="PageTitle"><span class="PageTitle-Img"></span></div>
            </header>
            <article class="Container">
<!-- ------------------------------- ACCUEIL ------------------------------- -->
                <section class="Home" id="scn-home">
                    <canvas id="snow" class="Home-SnowLayout"></canvas>
                    <button class="Button Home-Button" id="cta-scn-home">Je commence</button>
                </section>
<!-- -------------------------------- TEXTE -------------------------------- -->
                <section class="Text" id="scn-text" style="display: none;">
                    <p class="Text-Title">Noël…</p>
                    <p class="Text-Subtitle">La fête, des cadeaux, la convivialité…</p>
                    <p class="Text-Content">Noël, c’est surtout le mois de Décembre, le dernier mois de 2017, le mois qui clôture votre année ! Plus que quelques jours, quelques heures, une ultime occasion qui s’offre à vous pour donner à 2018 la saveur que vous souhaitez.</p>
                    <p class="Text-Content Italic">Que vont vous réserver les derniers instants de 2017 ? Que va-t- il se passer pour vous en cette fin d’année ? Comment bien débuter 2018 ? Que faire pour que cette nouvelle année soit meilleure que la précédente ?</p>
                    <p class="Text-Subtitle">Profitez du <strong>Tarot de Noël</strong> pour avoir toutes vos réponses, tirez les cartes ci-après :</p>
                    <button class="Button Text-Button" id="cta-scn-text">Je tire les cartes</button>
                </section>
<!-- ------------------------------- TIRAGE -------------------------------- -->
                <section class="Tarot" id="scn-tarot" style="display: none;">
                    <header class="Tarot-Title"><span class="Tarot-Title-Cell" id="scn-tarot-title">Mélangez les cartes</span></header>
                    <article class="WidgetTarot toShuffle" id="cards-container">
                        <div id="scn-tarot-draw">
                            <div class="WidgetTarot-Draw">
                                <?php for($i=1;$i<=12;$i++){ ?>
                                <div class="WidgetTarot-Card notFlipped toShuffle" data-card="<?= $i ?>">
                                    <div class="WidgetTarot-Card-Face front "></div>
                                    <div class="WidgetTarot-Card-Face back"></div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div id="scn-tarot-result">
                            <div class="WidgetTarot-Result" id="cards-result">
                                <?php for($i=1;$i<=5;$i++){ ?>
                                <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                                <?php } ?>
                            </div>
                        </div>
                        <button class="Button Shuffle-Button" id="cards-shuffle">Mélanger</button>
                    </article>
                </section>
<!-- ------------------------------ RÉSULTAT ------------------------------- -->
                <section class="Result" id="scn-result" style="display: none;">
                    <header class="Tarot-Title"><span class="Tarot-Title-Cell">Mon tirage</span></header>
                    <article class="WidgetTarot-Result">
                        <?php for($i=1;$i<=5;$i++){ ?>
                        <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                        <?php } ?>
                    </article>
                    <button class="Button Tarot-Button twitchy" id="cta-scn-tarot">Voir mon interprétation</button>
                </section>
<!-- ----------------------------- FORMULAIRE ------------------------------ -->
                <section class="Form" id="scn-form" style="display: none;">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <article class="WidgetTarot-Result">
                        <?php for($i=1;$i<=5;$i++){ ?>
                        <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                        <?php } ?>
                    </article>
                    <article class="FormContainer">
                        <form id="form-container" class="ajax">
                            <div class="FormContainer-Fields Fields-Table">
                                <p class="alert alert-danger" style="display: none;"></p>
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $url;?>" />
                                <input type="hidden" name="regurl" value="<?= $form;?>" />
                                <input type="hidden" name="method" value="general-suscribe"/>
                                <input type="hidden" name="support" value="tarot"/>
                                <input type="hidden" name="site" value="myastro.fr"/>
                                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                <input type="hidden" name="dri" value="noel-2017-tel"/>
                                <input type="hidden" name="convertir" value="1" />
                                <!-- ########## autres champs pré-remplis ########## -->
                                <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <input type="hidden" name="optional_birthdate" value="1" />
                                <!-- ############################################### -->
                                <div class="Fields-Table-Row">
                                    <div class="FormField">
                                        <input type="text" id="name" name="prenom" class="FormField-Input" value="<?php $prenom ?>" placeholder="Mon prénom" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <div class="FormField">
                                        <input id="email" type="email" name="email" class="FormField-Input" value="<?php $email ?>" placeholder="Mon email" required />
                                    </div>
                                </div>
                                <div class="FormField">
                                    <div class="FormField-TableInputContainer">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <label>Votre pays</label>
                                        </div>

                                        <div class="FormField-TableInputContainer-Cell">
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
                            </div>
                            <button class="Button twitchy" type="submit" name="valider">Recevoir mon interprétation</button>
                        </form>
                    </article>
                </section>
            </article>
            <?php include('include/footer_reassurance.php'); ?>
            <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        </section>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="js/snow-ball.js"></script>
        <script src="js/tarot-draw.js"></script>
        <script>/* Configuration du tirage de tarot */
            cardsPath = '<?= $cards_dir;?>';
            trt_deckNbCards = 20;
            trt_forceDrawFirst = false;
            trt_scrollOnComplete = false;
            trt_minSize = 460;
        </script>
        <script src="js/tarot-noel-wizard.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<link href="https://fonts.googleapis.com/css?family=Lobster|Open+Sans" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />