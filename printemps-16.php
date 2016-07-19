<?php
/* 
    -----------------------------------
    --   printemps-16 = AFFIL BASE   --
    -----------------------------------

    Created on : 12 avril 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
    $page = 'printemps-16';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Voyance de lʼamour - Printemps 2016</title>
    
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
	
        <link rel="stylesheet" type="text/css" href="css/bootstrap.334.min.css" />
        <link rel="stylesheet" type="text/css" href="css/printemps-16.css" />
	
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div id="main-wrapper">
            <header id="main-header" class="grid-1-4 bloc-rose">
                <div id="logo_myastrol"><h1><img src="images_landing/printemps-16/logo_myastro.png" alt="logo myAstrol"></h1></div>
                
                <div id="catchphrase">        
                    <h2 class="font1">voyance</h2>
                    <h2 class="font1 txtcenter">Amour</h2>
                    <h3 class="font2">Printemps 2016</h3>
                </div>
            </header>
            <section id="main-content" class="bloc-rose" >
                <div class="grid-2-small-1">
                    <div  class="push font3 txt ">
                        <p class="txtjustify">Que vous réserve votre avenir amoureux ? Avec la voyance en amour par tchat de MyAstro, discutez en direct avec un voyant reconnu et sérieux, à même d'apaiser vos doutes.</p>
                        <p class="txtjustify">Toutes les questions méritent des réponses : votre couple est-il solide ? Votre partenaire fidèle ? Trouverez-vous le grand amour prochainement ? Nos voyants experts vous répondent.</p>                  
                    </div>
                    <div id="bloc-vite" class="pull font2 txtcenter">
                        <p>Vite !!! recevez <br> votre étude personnalisée</p>
                    </div>
                </div><!-- fin de grid-2-small-1 -->
                <hr />
                <div id="my-form">
                    <form id="form1" action="" method="post">
                        <!-- ########## identification formulaire ########## -->
                        <input type="hidden" name="source" value="<?= $page ?>" />
                        <input type="hidden" name="method" value="affil-maxi" />
                        <input type="hidden" name="dri" value="printemps-16-tel" />
                        <input type="hidden" name="support" value="voyance"/>
                        <input type="hidden" name="affiliation" value="affilbase" />
                        <!-- ########## autres champs pré-remplis ########## -->
                        <input type="hidden" name="theme_id" value="printemps16_amour" />
                        <input type="hidden" name="cguv" value="1" />
                        <!-- ############################################### -->

                        <fieldset class="align-radio">
                           <p class="title-input">Je suis : </p>
                             <label for="gender-f">
                                <img src="images_landing/printemps-16/picto_femelle.png" alt="♀"> Femme
                                <input type="radio" name="sexe" id="gender-f" value="F" required />
                            </label>
                            <label class="" for="gender-h">
                                <img src="images_landing/printemps-16/picto_male.png" alt="♂"> Homme
                                <input type="radio" name="sexe" id="gender-h" value="M" />
                            </label>
                        </fieldset>

                        <fieldset>
                           <div class="grid-2-small-1">
                                <!-- Mon prénom -->
                                <div>
                                    <label for="prenom"><span class="hidden">Mon prénom</span>&nbsp;</label>
                                    <input name="prenom" id="prenom" type="text" required placeholder="Mon prénom" />
                                </div><!-- -->

                                <div>
                                    <!-- Date de naissance -->
                                    <label><em>Votre date de naissance :</em></label><br/>
                                    <select name="jour" class="jour">
                                        <option value="" disabled selected>Jour</option>
                                        <?php for($i=1;$i<=31;$i++){ ?>
                                        <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                        <?php } ?>
                                    </select>
                                    <select name="mois" class="mois">
                                        <option value="" disabled selected>Mois</option>
                                        <option value="01">Janvier</option>
                                        <option value="02">Février</option>
                                        <option value="03">Mars</option>
                                        <option value="04">Avril</option>
                                        <option value="05">Mai</option>
                                        <option value="06">Juin</option>
                                        <option value="07">Juillet</option>
                                        <option value="08">Août</option>
                                        <option value="09">Septembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Décembre</option>
                                    </select>

                                    <select name="annee" class="annee">
                                        <option value="" disabled selected>Année</option>
                                        <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                            
                        <fieldset class="mbl">
                           <div class="grid-2-small-1">
                                <!-- Conjoint Son prénom -->
                                <div>
                                    <label for="son_prenom"><span class="hidden">Son prénom</span>&nbsp;</label>
                                    <input type="text" id="son_prenom" name="conjoint" placeholder="Son prénom" />
                                </div>

                                <div>
                                    <!-- Date de naissance -->
                                    <label><em>Sa date de naissance :</em></label><br/>
                                    <select name="jour_c" class="jour">
                                        <option value="" disabled selected>Jour</option>
                                        <?php for($i=1;$i<=31;$i++){ ?>
                                        <option value="<?= $i ?>"><?= sprintf('%02d', $i) ?></option>
                                        <?php } ?>
                                    </select>
                                    <select name="mois_c" class="mois">
                                        <option value="" disabled selected>Mois</option>
                                        <option value="01">Janvier</option>
                                        <option value="02">Février</option>
                                        <option value="03">Mars</option>
                                        <option value="04">Avril</option>
                                        <option value="05">Mai</option>
                                        <option value="06">Juin</option>
                                        <option value="07">Juillet</option>
                                        <option value="08">Août</option>
                                        <option value="09">Septembre</option>
                                        <option value="10">Octobre</option>
                                        <option value="11">Novembre</option>
                                        <option value="12">Décembre</option>
                                    </select>

                                    <select name="annee_c" class="annee">
                                        <option value="" disabled selected>Année</option>
                                        <?php for($i=date('Y')-18;$i>=1900;$i--){ ?>
                                        <option value="<?= $i ?>"><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </fieldset>
                            
                        <!-- Email -->
                        <fieldset id="bloc-mail">
                            <label for="email" ><span class="hidden">E-mail</span></label>
                            <input name="email" id="email" type="email" required placeholder="Mon adresse email" />
                        </fieldset>
                        
                        <!-- ### BOUTON SUBMIT -->
                        <div class="wrapper-btn">
                            <button class="btn-astro-medium" type="submit" name="valider">Découvrir</button>
                        </div>
                    </form>
                </div><!-- fin de #my-form -->        
            </section><!-- fin de #main-content --> 

            <footer id="main-footer" class="bloc-rose">
               <ul>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_etoile.png" alt="Étoile">
                            <p>Voyants sérieux reconnus<br/>pour leur savoir-faire</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_cadenas.png" alt="Cadenas">
                            <p>Consultations 100%<br/>discrètes & anonymes</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_tchat.png" alt="Tchat">
                            <p>Interprétation<br/>immédiate</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_trophe.png" alt="Trophée">
                            <p>My Astro leader<br/>depuis 2007</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_cb.png" alt="Carte bancaire">
                            <p>Paiement<br/>sécurisé par CB</p>
                        </div>
                    </li>    
                </ul>                        
            </footer>
            
            <div class="w100 txtcenter">Copyright © 2016 | My Astro</div>
        </div><!--  fin de main-wrapper-->
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>