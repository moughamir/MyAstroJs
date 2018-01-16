<?php
include("include/process-dri.php");
$assets = 'images_landing/tarot-tchat';

session_start();
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$pays = isset($_SESSION['pays'])? $_SESSION['pays'] : '';
$birthdate = isset($_SESSION['birthdate']) ? $_SESSION['birthdate'] : '';
$draw = isset($_SESSION['cards'])? $_SESSION['cards'] : false;

if(isset($_SESSION['user_id'])){
    $bdd->update($bdd->users, ['dri_page' => 'tarot-tchat-dri'], ['internal_id' => $_SESSION['user_id']]);
}
?>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="robots" content="noindex, nofollow" />
        <title>Tarot Tchat</title>
        <link rel="icon" type="image/png" href="<?= $assets;?>/favicon.png" />
        <link rel="stylesheet" href="css/tarot-tchat.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
        <!--[if lt IE 9]>
        <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3,respond@1.4.2"></script>
        <![endif]-->
    </head>

    <body class="main">
        <div class="overlay" id="form-overlay"></div>
        <header class="SiteHeader">
            <div class="PageWrapper">
                <div class="SiteLogo"></div>
            </div>
        </header>
        <div class="title">
            <h1>Les cartes ont le pouvoir de vous révéler votre avenir ...</h1>
        </div>
        <main class="ContentBand">
            <div class="PageWrapper">
                <section class="section">
                    <?php if($directCall && ($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT')){ ?>
                        <p class="DRI-Sent">
                            APPEL EN COURS ....<br/>
                            Merci, votre demande de rappel a bien été prise en compte.<br/>
                            <strong>Un voyant vous recontactera dans quelques instants.</strong>
                        </p>
                    <?php } else  if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <div class="DRI-Form FormContainer-Fields">
                            <p class="DRI-Sent">
                                Merci, votre demande a bien été prise en compte.<br/>
                                Un voyant vous recontactera dans quelques instants
                            </p>
                        </div>
                    <?php } else { ?>
                        <h2 class="DRI-Form-Title">
                            Vous avez déjà bénéficié de l’offre :<br>
                            <strong>« 5 minutes de tchat gratuit »</strong>
                        </h2>
                        <p>
                            Vous pourrez de nouveau profiter de cette offre dans 7 jours.<br>
                            En attendant, vous pouvez consulter un voyant immédiatement par téléphone.
                        </p>
                        <h3 class="DRI-Form-Subtitle">Faites-vous rappeler gratuitement en remplissant le formulaire :</h3>
                        <p><strong>Nos voyants répondent à vos questions</strong></p>
                    <form method="post" class="DRI-FormContainer">

                    <div class="FormContainer DRI-Form">
                        <div class="FormContainer-Field">
                            <div class="Fields-Table-Row">
                                <div class="FormField">
                                    <input type="hidden" id="name" name="prenom"  value="<?= $prenom ?>" />
                                    <input type="hidden" id="birthdate" name="birthdate"  value="<?= $birthdate ?>"  />
                                    <div class="Fields-Table-Row">
                                        <label for="email" class="FormField-Label hidden">Votre email</label>
                                        <div class="FormField">
                                            <input id="email" type="email" name="email" class="FormField-Input" value="<?= $email ?>" placeholder="Votre Email" required />
                                        </div>
                                    </div>
                                    <div class="Fields-Table-Row">
                                        <label for="pays" class="FormField-Label">Votre pays </label>
                                        <select name="pays" id="pays" value="<?= $pays ?>" class="FormField-Input" required>
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
                                    <div class="Fields-Table-Row">
                                        <label for="tel" class="FormField-Label hidden">Votre numéro de téléphone</label>
                                        <div class="FormField">
                                            <input id="tel" type="tel" name="tel" class="FormField-Input" placeholder="Votre Téléphone" value="<?= $tel;?>" required />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="offer">
                            <div class="offer-c">
                                <input type="submit" class="btn" value="Rappel gratuit" name="demande_rappel">
                                <div class="offer-tel"></div>
                            </div>
                        </div>
                    </div>
                   </form>

                <?php } ?>
                </section>
            </div>
            </div>
        </main>
        <footer>
            <p class="SiteCopyright">
                <?php include('include/footer_copyright.php');?> </p>
        </footer>
        <!-- #### SCRIPTS #### -->
        <script src="https://cdn.jsdelivr.net/g/lodash@4.17.4,jquery@3.1.1"></script>
        <script type="text/javascript" src="js/tarot-tchat.js"></script>
       <!-- <script src="js/tarot-draw.js"></script> -->
        <script src="js/tarot-direct-wizard.js"></script>
        <script src="js/formValidator.js"></script>
        <!--Pixel Affiliation -->
        <?php include_once('include/pixels/gpbl.php');?>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?> </body>

    </html>
