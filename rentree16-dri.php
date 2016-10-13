<?php
/* 
    ---------------------------------------------
    --   RENTRÉE 2016 - POST6MAIL = AFFIL-BASE --
    ---------------------------------------------

    Created on : 28 juillet 2016
    Author     : Guillaume Deschamps <guillaumedeschamps75@gmail.com>
*/
include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>My Astro - C’est la rentrée ! Venez tester votre moral</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/rentree16.min.css" />
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
    </head>
    <body>
        <div class="PageWrapper DRI">
            <header class="SiteHeader">
                <div class="SiteLogo"><span>MyAstro</span></div>
                <h1 class="PageLogo bgHeader"><span>C’est la rentrée</span><span>Venez tester votre moral</span></h1>
                <?php include('include/bloc-socials.php'); ?>
            </header>
            
            <section class="ContentBand">
                <article class="FormContainer">
                    <div class="FormContainer overlay" id="form-overlay"></div>
                    <div class="FormContainer-Fields">
                        <header class="header-voyant">
                            <p><span>Aline,</span><br/>voyante et tarologue professionnelle.</p>
                        </header>
                        <p class="txtleft"><?= ucfirst($prenom) ?>, Il ne faut pas voir Septembre seulement comme la fin de l’été. Une page se tourne certes, mais une nouvelle se présente à vous. Une nouvelle page qui vous réserve son lot de nouveaux défis à surmonter, de nouvelles opportunités à relever, de nouvelles perspectives à explorer, de nouvelles difficultés à surmonter. Il ne tient qu’à vous de bien entamer cette dernière ligne droite de l’année 2016.</p>
                        <p class="FormContainer-Slogan2">Envie d’en savoir plus immédiatement ?</p>
                        <p class="FormField-Info">Inscrivez votre numéro de téléphone ci-dessous<br class="small-hidden"/> nous vous rappelons dans les brefs délais !</p>
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
                                <input type="text" name="antisp" value="" style="display: none" /><br />
                                <button class="FormContainer-Submit btn" type="submit" name="demande_rappel">Me faire rappeler gratuitement</button>
                            </form>
                            <?php } ?>
                    </div>
                </article>  
            </section>
            
            <footer><p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p></footer>
            
        </div> 
        <!-- fin de .PageWrapper -->   
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href='https://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet"> 
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">