<?php
include("include/process-dri.php");
$assets = 'images_landing/tarot-tchat';

session_start();
$email = isset($_SESSION['email'])? $_SESSION['email'] : '';
$kgestion_id = isset($_SESSION['kgestion_id'])? $_SESSION['kgestion_id'] : '';

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
                        <div class="DRI-Form FormContainer-Fields">
                            <p class="DRI-Sent">
                                APPEL EN COURS ....<br/>
                                Merci, votre demande de rappel a bien été prise en compte.<br/>
                                <strong>Un voyant vous recontactera dans quelques instants.</strong>
                            </p>
                        </div>
                    <?php } else  if($state == 'MAIL_SENT' || $state == 'MAIL_ALREADY_SENT'){ ?>
                        <div class="DRI-Form FormContainer-Fields">
                            <p class="DRI-Sent">
                                Merci, votre demande a bien été prise en compte.<br/>
                                Un voyant vous recontactera dans quelques instants
                            </p>
                        </div>
                    <?php } else { ?>
                    <form method="post" class="DRI-FormContainer">
                    <input type="hidden" value="1" name="directCall">
                    <div class="FormContainer DRI-Form">
                        <div class="FormContainer-Field">
                            <div class="Fields-Table-Row">
                                <div class="FormField">
                                    <input type="hidden" id="name" name="prenom"  value="<?= $prenom ?>" />
                                    <input type="hidden" id="pays" name="pays"  value="<?= $pays ?>"  />
                                    <input type="hidden" id="birthdate" name="birthdate"  value="<?= $birthdate ?>"  />
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel;?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="offer">
                            <div class="offer-c">
                                <input type="submit" class="btn" value="Rappel gratuit" name="demande_rappel">
                                <div class="offer-tel"></div>
                            </div>
                            <div class="offer-c">
                                <a href="https://voyance-en-direct.tv/tarot-tchat/offre-gratuite?id=<?= $kgestion_id ?>" class="btn">Commencer le Tchat Gratuit</a>
                                <div class="offer-tchat"></div>
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
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?> </body>

    </html>
