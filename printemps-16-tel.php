<?php
/* 
    ---------------------------------------
    --   printemps-16-tel = AFFIL BASE   --
    ---------------------------------------

    Created on : 13 avril 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
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
                <div id="logo_myastrol"><h1><img src="images_landing/printemps-16/logo_myastro.png" alt="logo myAstro" /></h1></div>
                
                <div id="catchphrase">        
                    <h2 class="font1">voyance</h2>
                    <h2 class="font1 txtcenter">Amour</h2>
                    <h3 class="font2">Printemps</h3>
                </div>
            </header>
            
            <section id="main-content2" class="bloc-rose" >
                <form id="form2" action="">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="method" value="telnum-save" />
                    <input type="hidden" name="dri" value="tchat" />
                    <!-- ############################################### -->
                    
                    <div id="voyante1"><label for="area_question">Posez votre question avec le plus de détails possible.</label></div>
                    <textarea name="question" id="area_question" cols="30" rows="4" placeholder="Écrivez votre question, pour plus de confidentialité, ne citez aucun nom ici."></textarea>
                    <div id="bloc-tel">
                        <label>Recevez votre étude personnelle par téléphone !</label>
                        <input type="text" placeholder="Mon n° de téléphone" id="tel" name="tel" required />
                    </div>
                    
                    <div class="wrapper-btn"><button class="btn-astro-large" type="submit" name="valider">Accédez à votre voyance gratuite</button></div>
                    
                    <p id="catchphrase2" class="txtcenter h2-like font3">Un voyant vous appelera dès demain,<br/>pour vous donner votre réponse en directe.</p>
                </form>
            
            </section>

            <footer id="main-footer" class="bloc-rose">
               <ul>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_etoile.png" alt="Étoile" />
                            <p>Voyants sérieux reconnus<br/>pour leur savoir-faire</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_cadenas.png" alt="Cadenas" />
                            <p>Consultations 100%<br/>discrètes & anonymes</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_tchat.png" alt="Tchat" />
                            <p>Interprétation<br/>immédiate</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_trophe.png" alt="Trophée" />
                            <p>My Astro leader<br/>depuis 2007</p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <img src="images_landing/printemps-16/picto_cb.png" alt="Carte bancaire" />
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
