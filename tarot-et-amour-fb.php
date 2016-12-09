<?php
/**
 * Created by PhpStorm.
 * User: Mohamed Moughamir <moughamir@gmail.com>
 * Date: 11/11/2016
 * Time: 17:43
 */
$question = ['code'=>'td_question_1', 'subject'=>'amour', 'text'=>'Tarot et amour - Offre Tchat gratuit sans tirage'];
$prenom = isset($_GET['prenom']) ? $_GET['prenom'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$dri = 'https://';
?>
<html class="no-js" lang="fr_FR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Le Tarot et LʼAmour | My Astro</title>
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
    <link href="https://fonts.googleapis.com/css?family=Dancing+Script|Raleway:400,500,600|PT+Sans" rel="stylesheet">
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
                <div class="logo-container">
                    <img src="images_landing/tarot-et-amour/logo.png" alt="Tarot Direct" class="logo"/>
                    <img src="images_landing/tarot-et-amour/eventail.png" class="eventail-md">
                </div>
                <img src="images_landing/tarot-et-amour/logo-m.png" alt="Tarot Direct" class="logo-m"/>
            </div>
        </div>
    </div>
</header>
<section class="main-content">
    <div class="page-w pos-r">
        <div class="main">
            <div class="form-container overlay" id="form-overlay" style="display:none"></div>
            <div class="ribbon-wrapper"><span class="ribbon">Offre découverte</span></div>
            <article class="form-container">
                <header class="form-header-md"></header>
                <header class="form-header">
                    <div class="slogan-container">
                        <h2 class="slogan">Amour, travail, argent</h2>
                        <img src="images_landing/tarot-et-amour/eventail.png" alt="" class="eventail" />
                    </div>
                    <h1 class="offer">5 minutes de TCHAT <span class="highlight">Gratuites</span></h1>
                </header>
                <form class="form ajax">
                    <!-- ########## identification formulaire ########## -->
                    <input type="hidden" name="source" value="tarot-et-amour-fb" />
                    <input type="hidden" name="method" value="general-suscribe" />
                    <input type="hidden" name="support" value="tarot" />
                    <input type="hidden" name="site" value="myastro.fr" />
                    <input type="hidden" name="affiliation" value="facebook_adds" />
                    <input type="hidden" name="dri" value="tarot-en-direct/offre-gratuite" />
                    <!-- ########## autres champs pré-remplis ########## -->
                    <input type="hidden" name="convertir" value="1" />
                    <input type="hidden" name="cguv" value="1" />
                    <input type="hidden" name="partenaires" value="1" />
                    <input type="hidden" name="question_code" value="<?= str_replace('"', "'", json_encode($question)) ?>" />
                    <input type="hidden" name="optional_birthdate" value="1" />
                    <!-- ############################################### -->
                    <div class="input-container">
                        <p class="small">Remplissez le formulaire</p>
                        <input class="form-inputs mod-input" type="text" name="prenom" id="prenom" placeholder="Votre prénom"  value="<?= $prenom ?>" required />
                        <input class="form-inputs mod-input" type="email" name="email" id="email" title="email" placeholder="Votre email" value="<?= $email ?>" required />
                        <input class="form-inputs mod-btn" type="submit" value="Tchat immédiat" name="valider" />
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
            Copyright &copy <?= date('Y');?> | <a class="footer-link" href="http://myastro.fr/">MyAstro</a>
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
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />