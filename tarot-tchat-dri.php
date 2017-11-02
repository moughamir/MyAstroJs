<?php
include("include/process-dri.php");
$assets = 'images_landing/tarot-tchat';
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
                    <div class="FormContainer DRI-Form">
                        <div class="FormContainer-Field">
                            <div class="Fields-Table-Row">
                                <div class="FormField">
                                    <input type="tel" id="tel" name="tel" placeholder="Mon N° de téléphone" class="FormField-Input" value="<?= $tel;?>" required />
                                </div>
                            </div>
                        </div>
                        <div class="offer">
                            <div class="offer-c">
                                <button class="btn">Rappel gratuit</button>
                                <div class="offer-tel"></div>
                            </div>
                            <div class="offer-c">
                                <button class="btn start">Commencer le Tchat Gratuit</button>
                                <div class="offer-tchat"></div>
                            </div>
                        </div>
                    </div>
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
        <script src="js/tarot-draw.js"></script>
        <script src="js/tarot-direct-wizard.js"></script>
        <script src="js/formValidator.js"></script>
        <!-- #### REMARKETINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php');?> </body>

    </html>
