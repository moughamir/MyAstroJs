<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Moughamir <moughamir@gmail.com>
 * Date: 11/11/2016
 * Time: 17:43
 */
include 'include/functions/copyright.php';
?>
<html class="no-js" lang="fr_FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Le Tarot et L'Amour | My Astro</title>
    <meta name="description" content="Le Tarot et l'amour, 5 minutes de Tchat gratuites.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="images_landing/tarot-et-amour/icons/apple-touch-icon.png?v=tea2">
    <link rel="icon" type="image/png" href="images_landing/tarot-et-amour/icons/favicon-32x32.png?v=tea2" sizes="32x32">
    <link rel="icon" type="image/png" href="images_landing/tarot-et-amour/icons/favicon-16x16.png?v=tea2" sizes="16x16">
    <link rel="manifest" href="images_landing/tarot-et-amour/icons/manifest.json?v=tea2">
    <link rel="mask-icon" href="images_landing/tarot-et-amour/icons/safari-pinned-tab.svg?v=tea2" color="#ff71b4">
    <link rel="shortcut icon" href="images_landing/tarot-et-amour/icons/favicon.ico?v=tea2">
    <meta name="apple-mobile-web-app-title" content="Tarot et Amour">
    <meta name="application-name" content="Tarot et Amour">
    <meta name="theme-color" content="#fbc6df">


    <!-- Place favicon.ico in the root directory -->
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="css/tarot-et-amour.css">
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">Vous utilisez un navigateur <strong>obsolète</strong>. Veuillez <a
    href="http://browsehappy.com/">mettre à jour votre navigateur</a> pour améliorer votre expérience.</p>
<![endif]-->
<header class="landing-header">
    <div class="page-w">
        <div class="Content-brand">
            <div class="landing-header-logo">
                <img src="images_landing/tarot-et-amour/logo.png" alt="Tarot Direct" class="logo"/>
            </div>
        </div>
    </div>
</header>
<?php
switch (isset($state)) {
    case 'MAIL_SENT':
    case 'MAIL_ALREADY_SENT':
        echo "<p class='DRI-Sent'>Merci, votre demande a bien été prise en compte<br /><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>";
        break;
}
?>
<section class="main-content">
    <div class="page-w pos-r">
        <div class="main">
            <div class="ribbon-wrapper"><span class="ribbon">Offre découverte</span></div>
            <article class="form-container">
                <header class="form-header-md" style="display: none;">

                </header>
                <header class="form-header">
                    <h2 class="slogan">Amour, travail, argent</h2>
                    <h1 class="offer">5 minutes de TCHAT <span class="highlight">Gratuites</span></h1>
                </header>
                <form class="form ajax">
                    <input type="hidden" name="method" value="tarot-et-amour" />
                    <input type="hidden" name="dri" value="tarot-et-amour" />
                    <div class="input-container">
                        <p class="small">Remplissez le formulaire</p>
                        <label for="prenom"></label>
                        <input class="form-inputs mod-input" type="text" name="prenom" id="prenom"
                               placeholder="Votre prénom" required>
                        <label for="email"></label>
                        <input class="form-inputs mod-input" type="email" name="email" id="email" title="email"
                               placeholder="Votre email" required>
                        <input class="form-inputs mod-btn" type="submit" value="Tchat immédiat" name="valider">

                    </div>
                </form>
            </article>
            <aside class="voyant-info hidden">
                <div class="voyant-container"><span class="voyant-photo"></span></div>
            </aside>
        </div>
    </div>
</section>

<footer class="landing-footer">
    <div class="footer-c">
        <div class="page-w">
            <?php
            echo ("Copyright &copy " . copyright() . " | " . "<a class=\"footer-link\" href=\"http://myastro.fr/\">MyAstro</a>");
            ?>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-latest.min.js"></script>
<script src="js/formValidator.js"></script>
<script>
    $(document).ready(function () {
        var screen = $(window).width();
        if (screen == 960 || screen < 960) {
            btn = $('.mod-btn');
            btn.val('Lancer le Tchat');
        }
    });
</script>

    <!-- #### REMARKETINGS #### -->
<?php
include('include/remarketing/adwords.php');
include('include/remarketing/analytics.php');
include('include/remarketing/facebook.php');
?>
</body>
</html>
