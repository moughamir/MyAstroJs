<?php
/**
 * ete-amour-dri
 * -------------
 * Created on : 20 juin 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>Vos amours pour l’été | MyAstro</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="/images_landing/ete-amour/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/ete-16.css" />

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
                    <span class="titre1">Vos amours</span><br/><span class="titre2">pour l’été</span>
                </h1>
                <?php include('include/bloc-socials.php');?>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper">
                <div class="ContentBand-Column Form">
                    <article class="FormContainer ">
                        <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                            <p class="DRI-Sent">
                                APPEL EN COURS ....<br/>
                                Merci, votre demande de rappel a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants.</strong>
                            </p>
                        <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                            <p class="DRI-Sent">
                                Merci, votre demande a bien été prise en compte.<br/>
                                <strong>Un-e voyant-e vous recontactera dans quelques instants</strong>.
                            </p>
                        <?php } else { ?>
                        <p class="DRI-Slogan">Envie d’en savoir plus immédiatement ?</p>
                        <p class="FormField-Info txtcenter">Inscrivez votre numéro de téléphone ci-dessous<br class="small-hidden" />et nous vous rappelons tout de suite !</p>
                        <div class="DRI-Form FormContainer-Fields">
                            <form method="post">
                                <input type="hidden" value="1" name="directCall">
                                <div class="FormField">
                                    <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom;?>" required />

                                </div>
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel;?>"required />
                                    <span class="picto-tel-bulle tiny-hidden small-hidden"></span>
                                </div>
                                <div class="FormField">
                                    <label for="pays" class="FormField-Label hidden">Votre pays</label>
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
                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none; opacity:0" />
                                <button class="FormContainer-Submit" type="submit" name="demande_rappel" >Rappel Gratuit</button>
                            </form>
                        </div>
                        <?php } ?>
                    </article>
                </div>
            </div>
        </section>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php');?></p>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?>
    </body>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Oswald|Pacifico|Lobster|Lato" />
<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" />