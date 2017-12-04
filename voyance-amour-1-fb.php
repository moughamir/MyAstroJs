<?php
/**
 * voyance-amour-1-fb == FACEBOOK ADDS
 * -----------------------------------
 * Created on : 04 avril 2016 By Laurène Dourdin <2aurene@gmail.com>
 * Updated on : 10 avril 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
// Paramètres design
$button = 'Accéder au tchat';
$assets = 'images_landing/voyance-amour/';
// Paramètre formulaire
$url = 'voyance-amour-1-fb';
$method = 'general-suscribe';
$site = 'myastro.fr';
$source = 'facebook_adds';
$dri = 'myastro/offre-gratuite';
$dri2 = 'myastro-tchat-dri';
$questions = array(
    'encouple' => ['code'=>'question_2', 'subject'=>'sentimental', 'text'=>'Voyance de lʼamour : En couple', 'conjoint' => true],
    'separes' => ['code'=>'question_11', 'subject'=>'sentimental', 'text'=>'Voyance de lʼamour : Séparés', 'conjoint' => true],
    'amants' => ['code'=>'question_24', 'subject'=>'sentimental', 'text'=>'Voyance de lʼamour : Amants', 'conjoint' => true],
);

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Voyance de lʼamour : Essayez la voyance gratuite par tchat</title>
        
        <meta name="robots" content="noindex,nofollow" />
        <meta name="description" content="My Astro : Voyance gratuite par chat - Obtenez des réponses immédiates à toutes vos questions. Voyance gratuite par chat." />
        
        <link rel="icon" type="image/png" href="<?= $assets;?>favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="css/voyance-amour.css" />
        
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
                <nav class="SiteHeader-Nav">
                    <a href="<?= PROTOCOL.'://'.ROOT_URL;?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <!-- 
                 --><a href="<?= PROTOCOL.'://'.ROOT_URL;?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <!--
                 --><a href="<?= PROTOCOL.'://'.ROOT_URL;?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
                </nav>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeader">
                            <span class="SiteLogo"></span>
                        </header>
                        <article class="DescText">
                            <h1 class="DescText-Title">Voyance de <strong>lʼamour</strong></h1>
                            <div class="DescText-Content">
                                <p>Que vous réserve votre avenir amoureux ? Avec la voyance en amour par tchat de MyAstro, discutez en direct avec un voyant reconnu et sérieux, à même dʼapaiser vos doutes.</p>
                                <p>Toutes les questions méritent des réponses : votre couple est-il solide ? Votre partenaire fidèle ? Trouverez-vous le grand amour prochainement ? Nos voyants experts vous répondent.</p>
                            </div>
                        </article>
                    </div>
                    <div class="How">
                        <h2 class="How-Header">Comment ça marche ?</h2>
                        <ul class="How-Wizard">
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img form"></span>
                                <span class="How-WizardItem-Txt">Je remplis le <br/>formulaire</span>
                            </li>
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img tchat"></span>
                                <span class="How-WizardItem-Txt">Jʼaccède au tchat <br/>immédiatement</span>
                            </li>
                            <li class="How-WizardItem">
                                <span class="How-WizardItem-Img mail"></span>
                                <span class="How-WizardItem-Txt">Je reçois une <br/>réponse par mail</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ContentBand-Column Form">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <article class="FormContainer">
                        <div class="FormContainer-Pop">
                            voyants <br/><strong>sérieux</strong> & <br/><strong>reconnus</strong>
                        </div>
                        <h2 class="FormContainer-Header">Mes informations</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container" class="ajax">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $url;?>" />
                                <input type="hidden" name="method" value="<?= $method;?>" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="site" value="<?= $site;?>" />
                                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                <input type="hidden" name="dri" value="<?= $dri;?>" />
                                <input type="hidden" name="dri2" value="<?= $dri2;?>" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <input type="hidden" name="tel_needed" value="1" />
                                <input type="hidden" name="convertir" value="1" />
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
                                                <option value="<?= $i;?>"><?= sprintf('%02d', $i);?></option>
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
                                                <option value="<?= $i;?>"><?= $i;?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField radio">
                                    <label class="FormField-Label">Vous êtes</label>
                                    <div class="FormField-TableInputContainer fixed-3-col relationship-status">
                                        <div class="FormField-TableInputContainer-Cell">
                                            <input type="radio" name="question_code" id="q-couple" value="<?= str_replace('"', "'", json_encode($questions['encouple']))?>" class="FormField-Input theme_id" required data-need-spouse="1" />
                                            <label for="q-couple" class="FormField-Label">En couple</label>
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <input type="radio" name="question_code" id="q-separes" value="<?= str_replace('"', "'", json_encode($questions['encouple']))?>" class="FormField-Input theme_id" data-need-spouse="1" />
                                            <label for="q-separes" class="FormField-Label">Séparés</label>
                                        </div>
                                        <div class="FormField-TableInputContainer-Cell">
                                            <input type="radio" name="question_code" id="q-amants" value="<?= str_replace('"', "'", json_encode($questions['encouple']))?>" class="FormField-Input theme_id" data-need-spouse="1" />
                                            <label for="q-amants" class="FormField-Label">Amants</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="FormField sonprenom show">
                                    <label class="FormField-Label" for="son_prenom">Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint" class="FormField-Input" />
                                </div>
                                <div class="FormField">
                                    <label for="email" class="FormField-Label">E-mail</label>
                                    <input id="email" type="email" name="email" class="FormField-Input" required />
                                    <span class="FormField-Info" style="margin-top: -10rem;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div>
                                <div class="FormField">
                                    <label for="tel" class="FormField-Label">Téléphone</label>
                                    <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
                                    <span class="FormField-Info">Vous serez rappelé par le voyant à ce numéro</span>
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
                                <button class="FormContainer-Submit" type="submit" name="valider"><?= $button;?></button>
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
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />