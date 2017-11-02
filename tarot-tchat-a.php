<?php
$url = $pageName= 'tarot-tchat-a';
$method = 'general-suscribe';
$support = 'tarot';
$site = 'myastro.fr';
$source = 'adwords';
$dri = 'voyance-par-tchat/offre-gratuite';
$dri2 = 'tarot-tchat-dri';
$assets = 'images_landing/tarot-tchat';
$gclid = isset($_GET['gclid']) ? $_GET['gclid'] : '';
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
                <section class="section post-test">
                    <p>Il existe un proverbe qui dit que les cartes du tarot sont bavardes et ont toujours quelque chose à dire. Qu’ont-elles à vous révéler ? Amour, travail, argent, votre destinée se trouve au cœur des arcanes du tarot. Et si nos cartomanciens
                        les faisaient parler pour vous…<br/>Avec le Tchat plus besoin d’attendre, nos experts vous divulguent tous les secrets des cartes en un clin d’œil.</p>
                    <div class="WidgetTarot hidden-sm">
                        <section class="ContentBand Tarot" id="scn-tarot-draw">
                            <div class="ContentBand-Table">
                                <div id="cards-container" class="ContentBand-Column">
                                    <div class="WidgetTarot-Draw">
                                        <?php for($i=1;$i<=20;$i++){ ?>
                                        <div class="WidgetTarot-Card notFlipped" data-card="<?= $i ?>">
                                            <div class="WidgetTarot-Card-Face front "></div>
                                            <div class="WidgetTarot-Card-Face back"></div>
                                        </div>
                                        <?php } ?> </div>
                                </div>
                            </div>
                        </section>
                        <section class="ContentBand Tarot-Result" id="scn-tarot-result">
                            <div class="ContentBand-Table">
                                <div id="cards-result" class="ContentBand-Column">
                                    <div class="WidgetTarot-Result">
                                        <div class="WidgetTarot-Result hidden-sm">
                                            <?php for($i=1;$i<=5;$i++){ ?>
                                            <div class="WidgetTarot-Card place" data-number="<?= $i ?>"></div>
                                            <?php } ?> </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <article class="session-result hidden"></article>
                    </div>
                    <div class="form"><input type="text" name="js-name" class="FormField-Input" placeholder="Votre prénom" required /> <button class="btn start">Tirez les cartes</button> </div>
                </section>
                <section class="section content hidden">
                    <h2 class="question">Sélectionnez 5 cartes</h2>
                    <div class="draw"> </div>
                    <section class="miniform hidden">
                        <h2 class="miniform-text">Nous allons envoyer la suite de cette<br>
                        interprétation dés demain par email:</h2>
                        <article class="FormContainer">
                            <form id="form-container" class="ajax">
                                <div class="FormContainer-Fields Fields-Table">
                                    <p class="alert alert-danger" style="display: none"></p>
                                    <!-- ########## identification formulaire ########## -->
                                    <input type="hidden" name="source" value="<?= $pageName;?>" />
                                    <input type="hidden" name="method" value="<?= $method;?>" />
                                    <input type="hidden" name="support" value="<?= $support;?>" />
                                    <input type="hidden" name="site" value="<?= $site;?>" />
                                    <input type="hidden" name="affiliation" value="<?= $source;?>" />
                                    <input type="hidden" name="dri" value="<?= $dri;?>" />
                                    <input type="hidden" name="dri2" value="<?= $dri2;?>" />
                                    <!-- ########## autres champs pré-remplis ########## -->
                                    <input type="hidden" name="convertir" value="1" />
                                    <input type="hidden" name="tel_needed" value="1" />
                                    <input type="hidden" name="cguv" value="1" />
                                    <input type="hidden" name="partenaires" value="1" />
                                    <input type="hidden" name="gclid" value="<?= $gclid;?>" />
                                    <input type="hidden" name="prenom" id="js-name" />
                                    <input type="hidden" name="question_code" id="js-question" />
                                    <!-- ############################################### -->
                                    <div class="Fields-Table-Row">
                                        <div class="FormField">
                                            <input id="email" type="email" name="email" class="FormField-Input" placeholder="Votre Email" required />
                                        </div>
                                        <button class="FormContainer-Submit" type="submit" name="valider">Envoyer</button>
                                    </div>

                                </div>
                                
                                </form>
                        </article>
                    </section>
                </section>
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
