<?php
/* 
    -------------------------------------------
    --      Louise-grandol = AFFIL BASE       --
    -------------------------------------------

    Created on : 25 juillet 2016
    Author     :  Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
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
                
        
        <link rel="stylesheet" type="text/css" href="css/louise-grandol.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <header class="SiteHeader">
                <h1>La voyance par Louise</h1>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper ">
               <div class="flex-mobile grid-2-tiny-1-small-1-medium-2">
                
                    <div class="louise-portrait">
                        <div class="louise-portrait-img"></div>  
                        <p class="louise-portrait-name">Louise Grandol</p>   
                        <div class="louise-portrait-sign"> </div> 
                    </div> 
                         
                    <div><article id="form-container" class="FormContainer" >
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <div class="FormContainer-Fields">
                            <form>
                               
                                <!-- ########## TODO ########## -->
                                <!-- ########## TODO ########## -->
                                <!-- ########## TODO ########## -->
                                <!-- Recréer un autre handler pour la gestion des 3 étapes -->
                                <!-- du formulaire   -->
                                
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="source" value="louise-grandol" />
                                <input type="hidden" name="method" value="affil-maxi" />
                                <input type="hidden" name="support" value="voyance" />
                                <input type="hidden" name="affiliation" value="affilbase" />
                                <input type="hidden" name="dri" value="louise-grandol-tel" />
                                <!-- ########## autres champs pré-remplis ######### -->
                                <input type="hidden" name="cguv" value="1" />
                                <input type="hidden" name="partenaires" value="1" />
                                <!-- ############################################### -->
                                
                                <h3 class="FormContainer-Title">Titre formulaire</h3> 
                                
                                <!-- PREMIERE ETAPE -->
                                <section class="form-first-step">
                                    <p class="FormContainer-Header typoManu">Bonjour</p>
                                    <p class="typoManu">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. </p>
                                    <p class="louise-portrait-name">Louise Grandol</p>   
                                    <div class="louise-portrait-sign sign1"></div> 

                                    <p>Pour commencer</p>
                                    <h3 class="title-choice">Choisissez votre domaine&nbsp;:</h3>

                                    <div class="FormField radio">
                                        <div id="choice" class="FormField-TableInputContainer fixed-2-col">
                                            <div class="FormField-TableInputContainer-Cell flex-radio">
                                                <input type="radio" name="theme_id" value="lg_1" id="c_amour" class="FormField-Input" />
                                                <label for="c_amour" class="FormField-Label "><span class="ico-amour"></span>L'amour</label>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell flex-radio">
                                                <input type="radio" name="theme_id" value="lg_2" id="c_travail" class="FormField-Input" />
                                                <label for="c_travail" class="FormField-Label "><span class="ico-travail"></span>Le travail</label>
                                            </div>
                                            <div class="FormField-TableInputContainer-Cell flex-radio">
                                                <input type="radio" name="theme_id" value="lg_3" id="c_argent" class="FormField-Input" />
                                                <label for="c_argent" class="FormField-Label "><span class="ico-argent"></span>L'argent</label>
                                            </div>
                                        </div>
                                    </div>
                                </section> 
                                <!-- FIN DE PREMIERE ETAPE -->  
                                
                                
                                <!-- DEUXIEME ETAPE -->
                                <section class="form-second-step">
                                    
                                    <p class="alert alert-danger" style="display: none"></p>

                                    <div class="FormField sonprenom">
                                        <input type="text" placeholder="Son prénom" id="son_prenom" class="FormField-Input" name="conjoint">
                                    </div>
                                    
                                    <div class="FormField">
                                        <textarea name="question" id="message" rows="5" cols="40" placeholder="Écrivez ici votre question avec le plus de détails possible. Pour plus de confidentialité, ne citez aucun nom." class="FormField-Input"></textarea>
                                    </div>
                                    
                                    <div class="FormField">
                                        <label for="tel" class="FormField-Label">Téléphone</label>
                                        <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
                                        <span class="FormField-Info txtcenter">Vous serez rappelé par le voyant à ce numéro</span>
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
                                    
                                    <p class="FormContainer-Slogan">
                                        Un voyant vous appelera dès demain,<br />pour vous donner votre réponse en direct.
                                    </p>
                                    
                                    <!--<button class="FormContainer-Submit" type="submit" name="valider">envoyer</button>  -->
                                    
                                    <a href="#" class="thirdStep btn" >envoyer</a>
                                    
                                </section> 
                                <!-- FIN DE DEUXIEME ETAPE -->
                                
                                
                                <!-- TROISIEME ETAPE -->
                                <section class="form-third-step">
                                   
                                    <h2 class="FormContainer-Header">Remplissez vite le formulaire afin que <br class="hidebloc"/>je puisse vous envoyer votre interprétation&nbsp;:</h2>
                                    
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

                                    <div class="FormField">
                                        <label for="name" class="FormField-Label blueLabel">Prénom</label>
                                        <input type="text" id="name" name="prenom" class="FormField-Input" required />
                                    </div>
                                    
                                    <div class="FormField">
                                        <label for="email" class="FormField-Label">E-mail</label>
                                        <input id="email" type="email" name="email" class="FormField-Input" required />
                                        <span class="FormField-Info" style="margin-top: -10rem;">Une étude personnalisée vous sera envoyée à cette adresse</span>
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
                                    
                                    <button class="FormContainer-Submit" type="submit" name="valider">envoyer</button>     
                                    
                                </section>
                                <!-- FIN DE TROISIEME ETAPE-->
                                
                            </form>
                        </div>
                    </article></div>
                    
                </div>    
            </div><!-- fin de PageWrapper -->
        </section>
                
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <script src="js/louise_grandol.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Raleway:300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />