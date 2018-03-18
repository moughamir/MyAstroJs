<?php
/**
 * pdt-tchat-a == ADWORDS
 * ----------------------
 * Created on : 04 avril 2017 By Mohamed Moughamir <hello@omnizya.com>
 */
$pageName = "pdt-tchat-aff10";
$method = "general-suscribe";
$support = "voyance";
$site = "myastro.fr";
$source = "zcorp";
$dri = "pouvoir-des-trois/offre-gratuite";
$dri2 = "pdt-tchat-dri";
// A titre indicatif, le champs question_code est rempli par javascript, voir pouvoir-des-trois.js
$questions = array(
    ['code' => 'pdt_amour', 'subject' => 'sentimental', 'text' => 'Pouvoir des Trois - Amour'],
    ['code' => 'pdt_argent', 'subject' => 'financier', 'text' => 'Pouvoir des Trois - Argent'],
    ['code' => 'pdt_travail', 'subject' => 'professionnel', 'text' => 'Pouvoir des Trois - Travail']
);
$assets = 'images_landing/pouvoir-des-trois';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex, nofollow" />
        <title>Pouvoir Des Trois - Prenez en main votre Avenir</title>
        <link rel="icon" type="image/png" href="<?= $assets;?>/favicon.png" />
        <link rel="stylesheet" href="css/pouvoir-des-trois.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Courgette|Open+Sans" rel="stylesheet" />
        <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
        <![endif]-->
    </head>
    <body class="main">
        <div class="overlay" id="form-overlay"></div>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <div class="SiteLogo"></div>
            </div>
        </header>
        <div class="title">
            <h1>Amour, Travail, Argent</h1>
        </div>
        <main class="ContentBand">
            <div class="preload">
                <span class="tri hidden"></span>
            </div>
            <div class="PageWrapper">
                <section class="section post-test hidden">
                    <p>
                        Prenez en main votre Avenir !<br>
                        Grâce au Pouvoir des trois et ses supports divinatoires ancestraux : le pendule, la boule de cristal et le tarot nous allons pouvoir répondre à toutes vos interrogations.<br>
                        Réalisez ce test simple et rapide qui nous permettra de mieux vous connaître.<br>
                        Inscrivez votre prénom ci-dessous pour commencer :
                    </p>
                    <div class="form">
                        <input type="text" name="js-name" class="FormField-Input" placeholder="Votre prénom" required />
                        <button class="btn start">Commencer</button>
                    </div>
                </section>
                <section class="section content hidden">
                    <h2 class="question">QUESTION</h2>
                    <ul id="choices">
                        <li class="choice">PLACEHOLDER</li>
                        <li class="choice">PLACEHOLDER</li>
                        <li class="choice">PLACEHOLDER</li>
                    </ul>
                </section>
                <section class="section hidden">
                    <article class="final-step">
                        <p class="result"></p>
                        <a href="#FormContainer" class="read-more">savoir la suite</a>
                    </article>
                    <article class="FormContainer">
                        <form id="form-container" class="ajax">
                            <div class="promo"></div>
                            <div class="FormContainer-Fields Fields-Table">
                                <p class="alert alert-danger" style="display: none"></p>
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $pageName;?>" />
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
                                <input type="hidden" name="prenom" id="js-name" /><!-- rempli par pouvoir-des-trois.js -->
                                <input type="hidden" name="question_code" id="js-question" /><!-- rempli par pouvoir-des-trois.js -->
                                <!-- ############################################### -->
                                <div class="Fields-Table-Row">
                                    <label for="email" class="FormField-Label hidden">Votre email</label>
                                    <div class="FormField">
                                        <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <span class="FormField-Info">Vous recevrez votre interprétation à cette adresse</span>
                                </div>
                                <div class="FormField">
                                    <label for="pays" class="FormField-Label">Votre pays </label>
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
                                <div class="Fields-Table-Row">
                                    <label for="tel" class="FormField-Label hidden">Votre numéro de téléphone</label>
                                    <div class="FormField">
                                        <input id="tel" type="tel" name="tel" class="FormField-Input" placeholder="Votre Téléphone" required />
                                    </div>
                                </div>
                                <div class="Fields-Table-Row">
                                    <span class="FormField-Info">Un SMS vous sera envoyé lorsque lʼinterprétation sera prête</span>
                                </div>
                                <div class="Fields-Table-Row">
                                    <label class="FormField-Label">Votre date de naissance</label>
                                    <div class="FormField">
                                        <div class="FormField-TableInputContainer">
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="jour" required>
                                                    <option value="" selected disabled>Jour</option>
                                                    <?php for ($i = 1; $i <= 31; $i++) { ?>
                                                        <option value="<?= $i ?>"><?= sprintf('%02d', $i);?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell">
                                                <select class="FormField-Input" name="mois" required>
                                                    <option value="" selected disabled>Mois</option>
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
                                                    <option value="" selected disabled>Année</option>
                                                    <?php for ($i = date('Y') - 18; $i >= 1900; $i--) { ?>
                                                        <option value="<?= $i;?>"><?= $i;?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="FormContainer-Submit" type="submit" name="valider">Commencer le Tchat Gratuit</button>
                        </form>
                    </article>
                </section>
            </div>
        </main>
        <footer>
            <p class="SiteCopyright">
                <?php include('include/footer_copyright.php');?>
            </p>
        </footer>
        <!-- #### SCRIPTS #### -->
        <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
        <script type="text/javascript" src="js/pouvoir-des-trois.js"></script>
        <script src="js/formValidator.js"></script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>