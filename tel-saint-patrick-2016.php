<!DOCTYPE html>
<html ng-app="myAstro" prefix="og: http://ogp.me/ns#" lang="fr_FR" ng-strict-di>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
        <meta name="MobileOptimized" content="320" />
        <meta name="HandheldFriendly" content="True" />
        <meta name="robots" content="noindex,nofollow" />

        <title>Saint Patrick &#x1F340; | Myastro</title>

        <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
        
        <link href="css/saint-patrick-2016.css" rel="stylesheet" />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <header class="site--header" role="banner">
            <div class="container">
                <img src="images_landing/saint-patrick-2016/My-ASTRO.svg" class="logo" alt="My Astro logo">
                <h1 class="site-name">Saint Patrick</h1>
            </div>
        </header>
        <main role="main">
            <div class="notification animated">
                <p class="headline-3">
                    Votre demande a bien été prise en compte<br/>
                    Vous recevrez votre réponse par email dès demain de la part de votre voyant.
                </p>
            </div>
            <article class="dri-article">
                <h2>Ne perdez pas de temps,<br />faites-vous rappeler par téléphone !</h2>
                <form action="" class="dri">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="method" value="telnum-save" />
                    <input type="hidden" name="dri" value="tchat" />
                    <!-- ############################################### -->
                    <div class="group">
                        <img src="images_landing/saint-patrick-2016/voyante.png" alt="Voyante"/>
                        <label class="label-h" for="message">Posez votre question avec le plus de détails possible.</label>
                        <textarea name="question" id="message" rows="8" cols="40" placeholder="Écrivez votre question, pour plus de confidentialité, ne citez aucun nom ici."></textarea>
                    </div>
                    <div class="group">
                        <label class="label-h" for="tel">Recevez votre étude personelle par téléphone !</label>
                        <input type="tel" name="tel" id="tel" placeholder="Mon N° de téléphone" required />
                    </div>
                    <button class="form--btn" type="submit" id="submit-form" name="valider">Accédez au tchat gratuit</button>
                </form>
            </article>
            <div class="">
                <p class="headline-3">
                    Un voyant vous appelera dès demain,<br />
                    pour vous donner votre réponse en directe.
                </p>
            </div>
        </main>
        <footer>
            <div class="reassure">
                <ul>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/star.svg" alt="star">
                            <p>Voyants sérieux reconnus
                                <br/>pour leur savoir-faire</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/luck.svg" alt="luck">
                            <p>Consultations 100%
                                <br/>discrètes &amp; anonymes</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/chat.svg" alt="chat">
                            <p>Interprétation
                                <br/>immédiate</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/trophy.svg" alt="leader">
                            <p>My Astro leader
                                <br/>depuis 2007</p>
                        </div>
                    </li>
                    <li>
                        <div class="elem">
                            <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/secure.svg" alt="secure">
                            <p>Paiement
                                <br/>sécurisé par CB</p>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="container">
                <p class="attribute">Copyright &copy; 2016 | My Astro</p>
            </div>
        </footer>
        
        <!-- #### SCRIPTS #### -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script src="js/bootstrap.334.min.js"></script>
        <script type="text/javascript" charset="utf-8" src="js/formValidator.js"></script>
        
        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
    </body>
</html>
