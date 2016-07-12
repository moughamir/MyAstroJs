<?php
/* 
    -------------------------------------------
    --     ete-16 = AFFIL BASE     --
    -------------------------------------------

    Created on : 21 juin 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
?>
<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  
    <title>MyAstro - Été 2016</title>
    
    <meta name="robots" content="noindex,nofollow" />
    
    <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

    <link rel="stylesheet" type="text/css" href="css/ete-16.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <header class="SiteHeader">
            <div class="PageWrapper headerContainer">
                <span class="SiteLogo"></span>
                <h1 class="DescText-Title">
                    <span class="titre1">Vos amours</span><br/><span class="titre2">pour l'été</span>
                </h1>
                <?php include('include/bloc-socials.php'); ?>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <div class="FormContainer-Fields">
                        
                        <p class="alert alert-danger" style="display: none"></p>
                    <?php session_start(); ?>

                    <form id="form-container">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="method" value="telnum-save" />
                    <input type="hidden" name="tel_needed" value="1" />
                    <input type="hidden" name="dri" value="ete-16-dri" />
                    <!-- ############################################### -->

                    <li class="FormField da-slide ">
                        <div class="wrapper600 txtcenter">
                            <p class="FormContainer-Slogan">merci vous allez recevoir votre interprétation<br class="small-hidden"/>par email dés demain matin</p>
                            <p>Envie d’en savoir plus immédiatement ?</p>
                                <div class="FormField">
                                    <span class="FormField-Info txtcenter">inscrivez votre numéro de téléphone ci-dessous et nous vous rappelons tout de suite !</span>
                                    <label for="tel" class="FormField-Label hidden">Téléphone</label>
                                    <div>
                                        <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" class="FormField-Input" required />
                                        <span class="picto-tel-bulle tiny-hidden small-hidden"></span>
                                    </div>
                                </div>
                                <div class="FormField">
                                    <label for="pays" class="FormField-Label hidden">Votre pays </label>
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

                                <button class="FormContainer-Submit" type="submit" name="valider">Envoyer</button>
                            </div>
                        </div> <!-- fin de .wrapper960 -->   
                    </li>
                    </form>    
                        
                    </div>
                    
                    
                    

                </article>  
                
            </div>
            <!-- fin de .PageWrapper-->
        </section>
        
        <div class="outside txtcenter">
            <span id="slider-prev"></span>
            <span id="slider-next"></span>
        </div> 
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        <!-- bxSlider Javascript file -->
        
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">