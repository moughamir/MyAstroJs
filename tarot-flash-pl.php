<?php
/**
 * tarot-flash-pl == PLUTONMEDIA
 * -----------------------------
 * Created on : 04 août 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
$url = 'tarot-flash-pl';
$method = 'general-suscribe';
$support = 'tarot';
$site = 'myastro.fr';
$source = 'plutonmedia';
$dri = 'myastro/offre-gratuite';
$dri2 = 'myastro-tchat-dri';

$assets = 'images_landing/tarot-sable/';
$button = 'Accéder au tchat';
$questions = array(
    'Amour' => array(
        [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Vous en avez marre d’être seul(e)' ],
        [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Est-ce qu’il/elle m’aime ?', 'conjoint' => true ],
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
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Tarot flash : Amour et destin à chaque tirage | Myastro</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="<?= $assets;?>favicon.png" />

        <link rel="stylesheet" type="text/css" href="css/tarot-sable.css" />
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
        <section class="ContentBand WidgetBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column WidgetBand-DescText">
                    <header class="ContentBand-ColumnHeader">
                        <span class="SiteLogo"></span>
                        <h1 class="DescText-Title">Tarot flash</h1>
                    </header>
                    <article class="DescText">
                        <div class="DescText-Content">
                            <p>Et si les cartes vous en disaient plus sur votre avenir ? Avec la voyance par tarot gratuit de MyAstro, tirez 5 lames et recevez par mail votre interprétation sous 24 heures.</p>
                            <p>Que signifient le Chariot ou le Monde ? Votre tirage de tarot flash est-il porteur de bonnes ou de mauvaises nouvelles ?</p>
                            <p>Les voyants spécialistes du tarot de MyAstro se tiennent à votre disposition pour interpréter au plus juste ce que les lames auront révélé.</p>
                            <p>Amour, argent, famille, notre tarot vous permet de répondre à vos questions en interrogeant le destin, qui se laissera découvrir dans les lames…</p>
                        </div>
                    </article>
                </div>
                <div class="ContentBand-Column WidgetBand-Tarot">
                    <h2 class="ContentBand-ColumnHeader">Tirez <strong>5</strong> lames</h2>
                    <article class="WidgetTarot">
                        <div class="WidgetTarot-Draw" id="cards-container">
                            <?php for($i=1;$i<=22;$i++){ ?>
                            <div class="WidgetTarot-Card notFlipped" data-card="<?= $i;?>">
                                <div class="WidgetTarot-Card-Face front "></div>
                                <div class="WidgetTarot-Card-Face back"></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="WidgetTarot-Result" id="cards-result">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i;?>"></div>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <section class="ContentBand FormBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column FormBand-How">
                    <div class="FormBand-HowWrapper">
                        <h2 class="ContentBand-ColumnHeader">Comment ça marche ?</h2>
                        <ul class="How-List">
                            <li class="How-ListItem">
                                <span class="How-ListItem-Num">1</span>
                                <span class="How-ListItem-Img hand"></span>
                                <span class="How-ListItem-Txt">Je tire mes cinq lames de tarot</span>
                            </li>
                            <li class="How-ListItem">
                                <span class="How-ListItem-Num">2</span>
                                <span class="How-ListItem-Img form"></span>
                                <span class="How-ListItem-Txt">Je remplis le formulaire</span>
                            </li>
                            <li class="How-ListItem">
                                <span class="How-ListItem-Num">3</span>
                                <span class="How-ListItem-Img tchat"></span>
                                <span class="How-ListItem-Txt">Un voyant me répond immédiatement par tchat</span>
                            </li>
                            <li class="How-ListItem">
                                <span class="How-ListItem-Num">4</span>
                                <span class="How-ListItem-Img mail"></span>
                                <span class="How-ListItem-Txt">Je reçois mon interprétation par mail sous 24h</span>
                            </li>
                        </ul>
                        <img src="images_landing/voyance-tarot-gratuit.jpg" alt="Voyance tarot gratuit" class="ContentBand-Footer" />
                    </div>
                </div>
                <div class="ContentBand-Column FormBand-Form">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <article class="FormContainer">
                        <h2 class="FormContainer-Header">Mes informations</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container" class="ajax">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="<?= $url;?>" />
                                <input type="hidden" name="method" value="<?= $method;?>" />
                                <input type="hidden" name="support" value="<?= $support;?>" />
                                <input type="hidden" name="site" value="<?= $site;?>" />
                                <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                <input type="hidden" name="dri" value="<?= $dri;?>" />
                                <input type="hidden" name="dri2" value="<?= $dri2;?>" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="convertir" value="1" />
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '';?>" />
                                <input type="hidden" name="tel_needed" value="1" />
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
                                <div class="FormField">
                                    <label class="FormField-Label" for="question_code">Votre question</label>
                                    <select class="FormField-Input" name="question_code" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <?php foreach($questions as $optgroup => $options){ ?>
                                        <optgroup label="<?= $optgroup;?>">
                                            <?php foreach($options as $question){ ?>
                                            <option value="<?= str_replace('"', "'", json_encode($question));?>" <?= isset($question['conjoint']) && $question['conjoint'] ? 'data-need-spouse="1"' : ''?>><?= $question['text'];?></option>
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
                                    <span class="FormField-Info">Une étude personnalisée vous sera envoyée à cette adresse</span>
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
        <?php include('include/footer_reassurance.php');?>
        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/tarot-draw.js"></script>
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