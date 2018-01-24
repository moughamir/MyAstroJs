<?php
/*
    --------------------------------------------------------------------------
    --   DRI POST-MAIL & POST-LANDING = nouvel-an-chinois-18-tchat-d = AFFIL BASE   --
    --------------------------------------------------------------------------

    * Created on : abderrahime.sanadi@gmail.com

*/
session_start();
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$prenom = isset($_SESSION['prenom'])? $_SESSION['prenom'] : '';
$tel = isset($_SESSION['tel'])? $_SESSION['tel'] : '';

$reassurance_items = [ 'voyant-serieux', 'discretion', 'mail-24h', 'leader' ];
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title>2018 L’année du Chien !</title>

        <meta name="robots" content="noindex,nofollow" />

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />

        <link rel="stylesheet" type="text/css" href="css/nouvel-an-chinois-18-tchat.css" />

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="DRI Amour">
        <section class="ContentBand">
            <div class="SiteLogo">
                <img src="images_landing/nouvel-an-chinois-18/tchat/logo.png" alt="">
            </div>
            <div class="PageWrapper">

                <div class="DRI-Intro">
                    <div class="DRI-Intro-Title">Faites-vous rappeler immédiatement</div>
                    <div class="DRI-Intro-Text">Nos voyants répondent à vos questions</div>
                </div>
                <article class="FormContainer" id="vm-anchor">
                    <div class="FormContainer-Wrapper">
                        <div class="DRI-Slogan">Profitez d’une consultation privée <br> 5 minutes de TCHAT GRATUITS</div>

                        <div class="FormContainer-Fields">
                            <form method="post">
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
                                <a href="https://voyance-en-direct.tv/myastro/offre-gratuite?email=<?= $email ?>" class="FormContainer-Submit"  name="demande_rappel">Commencer le Tchat Gratuit</a>
                            </form>
                        </div>
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

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $('html,body').animate({scrollTop: $('#vm-anchor').offset().top}, 1000);
            });
        </script>

        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
<!-- ### Ressources CSS à charger en dernier ### -->
<link href="https://fonts.googleapis.com/css?family=Oxygen|Kaushan+Script|Ubuntu+Condensed" rel="stylesheet" type="text/css" />