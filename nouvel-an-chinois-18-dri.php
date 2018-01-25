<?php
include('include/process-dri.php');
$reassurance_items = [ 'voyant-serieux', 'discretion', 'mail-24h', 'leader' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>2018 L’année du Chien !</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

        <link rel="stylesheet" type="text/css" href="css/nouvel-an-chinois-18.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="DRI">
        <section class="ContentBand">
            <div class="lampion"></div>
            <div class="PageWrapper">
                <!-- Logo -->
                <div class="SiteLogo">
                    <?php include('include/myastro-logo-svg.php');?>
                </div>
                <div class="DRI-Intro">
                    <div class="DRI-Intro-Title">Faites-vous rappeler immédiatement</div>
                    <div class="DRI-Intro-Text">Nos voyants répondent à vos questions</div>
                </div>
                <article class="FormContainer origami" id="vm-anchor" >
                    <div class="FormContainer-Wrapper " >
                        <div class="DRI-Slogan">Profitez d’une consultation<br>privée pour 1€ seulement</div>
                        <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                            <p class="DRI-Sent">
                                APPEL EN COURS ....<br/>
                                Merci, votre demande de rappel a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants.</strong>
                            </p>
                        <?php } else if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <p class="DRI-Sent">
                            Merci, votre demande a bien<br/> été prise en compte.<br/><br/>
                            <strong>Un voyant vous recontactera<br/> dans quelques instants</strong>.
                        </p>
                        <?php } else { ?>
                        <div class="FormContainer-Fields">
                            <form method="post">
                                <input type="hidden" value="1" name="directCall">
                                <div class="Fields-Table">
                                    <div class="Fields-Table-Row Free">
                                        <label for="name" class="FormField-Label">Mon prénom</label>
                                        <div class="FormField">
                                            <input type="text" id="name" name="prenom" class="FormField-Input" value="<?= $prenom ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="Fields-Table">
                                    <div class="Fields-Table-Row Free">
                                        <label for="tel" class="FormField-Label">Mon n° de téléphone</label>
                                        <div class="FormField">
                                            <input type="tel" name="tel" id="tel" class="FormField-Input" value="<?= $tel ?>" required />
                                        </div>
                                    </div>
                                </div>
                                <div class="Fields-Table">
                                    <div class="Fields-Table-Row Free NoBorder">
                                        <label for="tel" class="FormField-Label">Mon pays</label>
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
                                    </div>
                                </div>
                                <!-- SUBMIT -->
                                <input type="text" name="antisp" value="" style="display: none" />
                                <button class="FormContainer-Submit" type="submit" name="demande_rappel">Rappel Gratuit</button>
                            </form>
                        </div>
                        <?php } ?>
                        <div class="How">
                            <div class="How-Header">Comment ça marche ?</div>
                            <ul class="How-Wizard">
                                <li class="How-WizardItem">
                                    <span class="How-WizardItem-Img form"></span>
                                    <span class="How-WizardItem-Txt">Je remplis le <br/>formulaire</span>
                                </li>
                                <li class="How-WizardItem">
                                    <span class="How-WizardItem-Img phone"></span>
                                    <span class="How-WizardItem-Txt">Je suis rappelé(e) <br/>immédiatement</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <?php include('include/footer_reassurance.php'); ?>

        <p class="SiteCopyright"><?php include('include/footer_copyright.php'); ?></p>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script type="text/javascript" src="js/oridomi.min.js"></script>
        <script type="text/javascript">
        var origami = new OriDomi('.origami', {
            hPanels:            6,
            speed:              0,
            //ripple:             6,
            shadingIntesity:    0,
            shading:            false,
            maxAngle:           90,
            shading:            false,
            ripple: false,
            touchEnabled: false
        });
        origami.accordion(90, 'top');
        
        setTimeout(function(){
            origami.unfold().setSpeed(1300);
        }, 900)
        </script>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Oxygen|Kaushan+Script|Ubuntu+Condensed" rel="stylesheet" type="text/css" />