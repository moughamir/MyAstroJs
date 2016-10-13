<?php
/* 
    ------------------------------------------------
    --      Louise-grandol-dri = AFFIL BASE       --
    ------------------------------------------------

    Created on : 25 juillet 2016
    Author     :  Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
include('include/process-dri.php');
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
                         
                    <div>
                        <article class="FormContainer DRI">
                            <p>Si vous ne souhaitez pas attendre, je peux vous recontacter de suite<br/>il suffit de me laisser votre numéro de téléphone</p>
                            <h2 class="DRI-Slogan">Je vous offre les 10 premières minutes GRATUITEMENT !</h2>
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
                                        <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel ?>" required />
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
                                    <button class="FormContainer-Submit" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                                </form>
                                <?php } ?>
                            </div>
                        </article>
                    </div>
                    
                </div>    
            </div><!-- fin de PageWrapper -->
        </section>
                
        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />        
