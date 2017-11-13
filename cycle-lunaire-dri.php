<?php
/*
    -----------------------------------------------------
    --      cycle-lunaire-dri = DRI POST MAILING       --
    -----------------------------------------------------

    Created on : 12 juillet 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
                 Guillaume Deschamps <guillaumed.kgcom@gmail.com>
*/
include('include/process-dri.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>MyAstro - Ce que vous révèle le cycle lunaire</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />


        <link rel="stylesheet" type="text/css" href="css/cycle-lunaire.css" />

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
                <span class="SiteLogo"></span>
                <span class="PageLogo"></span>
            </div>
        </header>
        <section class="ContentBand">
            <div class="PageWrapper ">
                <div class="ContentBand-Column">
                    <div class="TextContent">
                        <header class="ContentBand-ColumnHeader">
                            <h1 class="DescText-Title"><span>Que vous réserve le cycle lunaire ?</span></h1>
                        </header>
                        <div class="moon-gif"></div>
                    </div>
                </div>
                <div id="form-container" class="ContentBand-Column Form ">
                    <p class="FormContainer-Slogan">Un nouveau cycle lunaire pour un nouveau départ dans votre vie</p>
                    <p class="FormContainer-name">
                        <?= ucfirst($prenom) ?>, la lune et ses influences positives sont avec vous, vous avez toutes les cartes en main pour agir. Alors passez à l’action ! Mais attention, agir ne veut pas dire se précipiter et commettre des erreurs irrémédiables… Les choix que vous allez faire ces prochains jours seront cruciaux…
                    </p>
                    <p class="FormContainer-Slogan-bloc">Pour en savoir plus notre équipe de voyants est à votre écoute et vous rappelle gratutement !</p>

                    <span class="ten-min-free"></span>
                    <article id="form2-form" class="FormContainer DRI ">
                        <div class="FormContainer overlay" id="form-overlay"></div>
                        <h1 class="DRI-Slogan"><span>Vos 10 premières minutes gratuites !</span></h1>
                        <div class="DRI-Form FormContainer-Fields">
                            <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                                <p class="DRI-Sent">
                                    APPEL EN COURS ....<br/>
                                    Merci, votre demande de rappel a bien été prise en compte.<br/>
                                    <strong>Un voyant vous recontactera dans quelques instants.</strong>
                                </p>
                            <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
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
                                <input type="hidden" value="1" name="directCall">
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

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,700" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
