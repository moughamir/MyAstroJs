<?php
/* 
    ---------------------------------
    --   tarot-gratuit-1 = ADWORDS   --
    ---------------------------------

    Created on : 05 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
    $page = 'tarot-gratuit-1';
    $button = 'Découvrir mon interprétation';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Tarot gratuit : amour et destin à chaque tirage gratuit | Myastro</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
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
                    <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <!-- 
                 --><a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <!--
                 --><a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
                </nav>
            </div>
        </header>
        <section class="ContentBand WidgetBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column WidgetBand-DescText">
                    <header class="ContentBand-ColumnHeader">
                        <span class="SiteLogo"></span>
                        <h1 class="DescText-Title">Tarot gratuit</h1>
                    </header>
                    <article class="DescText">
                        <div class="DescText-Content">
                            <p>Et si les cartes vous en disaient plus sur votre avenir ? Avec la voyance par tarot gratuit de MyAsto, tirez 5 lames et recevez par mail votre interprétation sous 24 heures.</p>
                            <p>Que signifient le Chariot ou le Monde ? Votre tirage de tarot gratuit est-il porteur de bonnes ou de mauvaises nouvelles ?</p>
                            <p>Les voyants spécialistes du tarot de MyAstro se tiennent à votre disposition pour interpréter au plus juste ce que les lames auront révélé.</p>
                            <p>Amour, argent, famille, notre tarot gratuit vous permet de répondre à vos interrogations en interrogeant le destin, qui se laissera découvrir dans les lames...</p>
                        </div>
                    </article>
                </div>
                <div class="ContentBand-Column WidgetBand-Tarot">
                    <h2 class="ContentBand-ColumnHeader">Tirez <strong>5</strong> lames</h2>
                    <article class="WidgetTarot" id="cards-container">
                        <div class="WidgetTarot-Draw">
                            <?php for($i=1;$i<=22;$i++){ ?>
                            <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                <div class="WidgetTarot-Card-Face front "></div>
                                <div class="WidgetTarot-Card-Face back"></div>
                            </div>
                            <?php } ?>
                        </div>
                        <div class="WidgetTarot-Result">
                            <?php for($i=1;$i<=5;$i++){ ?>
                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
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
                    <article class="FormContainer" id="form-container">
                        <h2 class="FormContainer-Header">Mes informations</h2>
                        <div class="FormContainer-Fields">
                            <p class="alert alert-danger" style="display: none"></p>
                            <form id="form-container">
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="myastro-tarot-a2" />
                                <input type="hidden" name="method" value="affil-maxi" />
                                <input type="hidden" name="support" value="tarot" />
                                <input type="hidden" name="affiliation" value="adwords" />
                                <input type="hidden" name="dri" value="tarot-gratuit-1-tel" />
                                <input type="hidden" name="redirect_method" value="reload_form" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>" />
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
                                    <select class="FormField-Input" name="theme_id" id="theme_id" required>
                                        <option value="" selected disabled>Thème de la question</option>
                                        <optgroup label="Amour">
                                            <option value="question_1">Vous en avez marre d’être seul(e)</option>
                                            <option value="question_2">Est-ce qu'il/elle m'aime ?</option>
                                            <option value="question_24">Vous en aimez un(e) autre</option>
                                            <option value="question_11">Il/Elle vous a quitté</option>
                                        </optgroup>
                                        <optgroup label="Argent">                          
                                            <option value="question_73">Vous attendez un investissement</option>
                                        </optgroup>
                                        <optgroup label="Travail">
                                            <option value="question_4">Vous attendez un changement professionel</option>
                                            <option value="question_3">Vous cherchez un emploi</option>
                                        </optgroup>
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
                                <button class="FormContainer-Submit" type="submit" name="valider"><?= $button ?></button>
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
        <script src="js/tarot-draw.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <!-- script pour conversion adwords en ajax -->
        <script type="text/javascript" src="http://www.googleadservices.com/pagead/conversion_async.js" charset="utf-8"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:700,300" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />