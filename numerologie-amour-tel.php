<?php
/* 
    ---------------------------------------------------
    --      numérologie amour tel = AFFIL BASE       --
    ---------------------------------------------------

    Created on : 19 juillet 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
include('include/process-dri-postmailing.php');
$result = $_SESSION['numResult'];
//$result = 3;
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>MyAstro - Numérologie de l'Amour</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
                
        
        <link rel="stylesheet" type="text/css" href="css/numerologie-amour.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg1">
        <header class="SiteHeader">
            <div class="PageWrapper">
                <span class="SiteLogo"></span>
                <span class="PageLogo"><h1><span>Numérologie de l'</span><span>Amour</span></h1></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div id="form-container" class="ContentBand-Column Form txtcenter">
                    <!-- animation ds polaroïds -->
                    <div id="photo1" class="polaroid"></div>
                    <div id="photo2" class="polaroid"></div>  
                      
                    <h2 class="FormContainer-Header">Testez votre compatibilité amoureuse&nbsp;:</h2>
                    
                    <!-- RESULTAT -->
                    <?php
                    switch ($result) {
                        case 1:
                            $textResult= "scénario 1";
                            break;
                        case 2:
                            $textResult= "scénario 2";
                            break;
                        case 3:
                            $textResult= "scénario 3";
                            break;
                        case 4:
                            $textResult= "scénario 4";
                            break;
                        case 5:
                            $textResult= "scénario 5";
                            break;    
                    }
                    ?>

                    
                    <section class="wrapper-num-result txtleft">
                        <h3 class="num-result-title">Résultats</h3>
                        <div class="num-result grid-1-2">                                 
                            <p id="num-result-numero" class="num-result-numero"><?php echo $result ?></p>
                            <div class="num-result-text-name">
                                <p><?= $prenom ?></p>
                                <p id="num-result-text"><?php echo $textResult ?></div>
                        </div>
                    </section>
                    <!-- FIN DE RESULTAT --> 
                    
                    <p class="FormContainer-Slogan-bloc">Pour en savoir plus  notre équipe de voyants est à votre écoute<br class="small-hidden"/>et vous rappelle gratutement !</p>

                    <span class="ten-min-free"></span>

                    <article id="form2-form" class="FormContainer DRI">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h1 class="DRI-Slogan"><span>Vos 10 premières minutes gratuites !</span></h1>
                        <div class="DRI-Form FormContainer-Fields">
                            <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                                <p class="DRI-Sent">
                                    Merci, votre demande a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants</strong>.
                                </p>                        
                            <?php } else { ?>
                                <?php if(!empty($err) || $state == 'MAIL_ERROR'){ ?>
                            <p class="alert alert-danger">
                                <b><i class="fa fa-warning"></i> Une erreur est survenue.</b><br>
                                    <?php foreach($err as $msg){
                                        echo $msg.'<br>';
                                    } ?>
                            </p>
                                <?php } ?>
                            <form method="post">
                                
                                <!-- ########## identification formulaire ########## -->
                                <input type="hidden" name="save_tel" value="1" />
                                <input type="hidden" name="tel_needed" value="1" />
                                <!-- ############################################### -->
                                
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input"  value="<?= $tel ?>" required />
                                </div>
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

                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none" />
                                <button class="FormContainer-Submit btn-rose" type="submit" name="demande_rappel" >me faire rappeler gratuitement</button>
                            </form>
                            <?php } ?>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        
        <?php include('include/footer_reassurance.php'); ?>
        
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/formValidator.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Amatic+SC' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />