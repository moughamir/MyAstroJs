<?php
/* 
    -----------------------------------------------
    --   offre-exceptionnelle-dri = AFFIL-BASE   --
    -----------------------------------------------

    Created on : 28 octobre 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/
include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <title>Occasion spéciale = Offre spéciale !</title>
        
        <meta name="robots" content="noindex,nofollow" />
        
        <link rel="icon" type="image/jpg" href="logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" type="text/css" href="css/offre-exceptionnelle-dri.css" />
        <!-- Slider assets -->
	<link rel="stylesheet" type="text/css" href="/images_landing/offre-exceptionnelle-dri/slider-engine/style.css" />
	<script type="text/javascript" src="/images_landing/offre-exceptionnelle-dri/slider-engine/jquery.js"></script>
        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="PageLogo"></div>
        <header class="SiteHeader">
            <div class="ContentWrapper">
                <ul class="SiteHeader-Nav">
                    <li class="SiteHeader-Nav-Item">Voyance gratuite</li>
                    <li class="SiteHeader-Nav-Item">Amour</li>
                    <li class="SiteHeader-Nav-Item">Travail</li>
                    <li class="SiteHeader-Nav-Item">Argent</li>
                </ul>
            </div>
        </header>
        <section class="Slider">
            <div id="wowslider-container1">
                <div class="ws_images">
                    <ul>
                        <li><img src="/images_landing/offre-exceptionnelle-dri/slider/offre1.jpg" alt="10 minutes gratuites" id="wows1_0"/></li>
                        <li><img src="/images_landing/offre-exceptionnelle-dri/slider/offre2.jpg" alt="10 minutes gratuites" id="wows1_1"/></li>
                        <li><img src="/images_landing/offre-exceptionnelle-dri/slider/offre3.jpg" alt="10 minutes gratuites" id="wows1_2"/></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="ContentBand">
            <div class="ContentWrapper">
                <div class="How">
                    <ul class="How-Horizontal">
                        <li class="How-HorizontalItem">
                            <span class="How-HorizontalItem-Img form"></span>
                            <span class="How-HorizontalItem-Txt">Je remplis<br/>le formulaire</span>
                        </li>
                        <li class="How-HorizontalItem">
                            <span class="How-HorizontalItem-Img phone"></span>
                            <span class="How-HorizontalItem-Txt">Je suis rappelé(e)<br/>immédiatement</span>
                        </li>
                        <li class="How-HorizontalItem">
                            <span class="How-HorizontalItem-Img smile"></span>
                            <span class="How-HorizontalItem-Txt">Je profite de mon<br/>offre spéciale</span>
                        </li>
                    </ul>
                </div>
                <article class="FormContainer">
                    <div class="Fields-Table">
                        <?php if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <div class="DRI-Form FormContainer-Fields">
                            <p class="DRI-Sent">
                                Merci, votre demande a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants</strong>.
                            </p>
                        </div>
                        <?php } else { ?>
                        <form method="post" class="DRI-FormContainer">
                            <div class="DRI-Form FormContainer-Fields">
                                <div class="FormField">
                                    <input type="text" id="name" name="prenom" placeholder="Mon Prénom" class="FormField-Input" value="<?= $prenom ?>" required />
                                </div>
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
                            </div>
                        </form>
                        <?php } ?>
                    </div>
                </article>
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
        
        <!-- Slider assets -->
	<script type="text/javascript" src="/images_landing/offre-exceptionnelle-dri/slider-engine/wowslider.js"></script>
	<script type="text/javascript" src="/images_landing/offre-exceptionnelle-dri/slider-engine/script.js"></script>
        
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
        
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />