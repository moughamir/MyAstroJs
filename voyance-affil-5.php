<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Voyance chat gratuit : Essayez la voyance gratuite par tchat</title>
        <script src="js/jquery-1.11.js"></script>
        <script src="js/formValidator.js"></script>
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script><!-- +++ -->
        <meta name="robots" content="noindex,nofollow" />
        <?= $tracker->getCanonical() ?>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
       <link rel="stylesheet" href="./voyance-gratuite-6_files/bootstrap.min.css"><!-- +++ -->
       <link rel="stylesheet" href="css/infobulle.css" />
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />   
        <?php include('include/header_inc_landing.php'); ?>
        <script src="js/myscript.js"></script>

    </head>
<body class="voyance-gratuite-1 voyance-amour">
    <div class="top-nav">
        <div class="nav-content">
            <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo">
                <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
            </div>
            <div class="content">
                <h1 style="color:#CD5C6B;">Voyance <strong>amour</strong></h1>
                <div class="txt-content">
                <p>Que vous réserve votre avenir amoureux ? Avec la voyance en amour par tchat de MyAstro, discutez en direct avec un voyant reconnu et sérieux, à même d'apaiser vos doutes.</p>
                <p>Toutes les questions méritent des réponses : votre couple est-il solide ? Votre partenaire fidèle ? Trouverez-vous le grand amour prochainement ? Nos voyants experts vous répondent.</p>
                </div>
            </div>

            <div class="comment-ca-marche">
                <h2 style="color:#CD5C6B;">Comment ça marche ? </h2>
                <div class="cols-3 first">
                    Je remplis le <br/>formulaire
                </div>
                <div class="cols-3 middle">
                    Le voyant me rappelle <br/>gratuitement
                </div>
                 <div class="cols-3 last">
                    Je reçois une <br/>réponse par mail
                </div>
            </div>
        </div>


        <div class="right-part">

            <div class="pop">
                voyants <br/><strong>sérieux</strong> & <br/><strong>reconnus</strong>
            </div>
            
            <div>
                <aside class="widget w-adv">
                    <div class="widget-title" style="text-align:center;">
                        <span class="h4">Mes informations</span>
                    </div>
                    <div id="form-w" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <div class="alert alert-danger">
                              <p></p>
                            </div>
                            <form id="">
                                <input type="hidden" name="source" value="voyance-affil-5" />
                                <input type="hidden" name="method" value="affil-mini" />
                                <input type="hidden" name="support" value="voyance"/>
                                <input type="hidden" name="theme_id" value="question_2">
                                <input type="hidden" name="affiliation" value="affilbase">
                                <div class="form-w-one li-form">
                                    <label>Mon prénom</label>
                                    <input type="text" id="name" name="prenom" required>
                                </div>
                                 <div class="form-w-one li-form sonprenom-amour">
                                    <label>Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint">
                                </div>
                                 <div class="form-w-one li-form">
                                    <label>Mon e-mail</label>
                                    <input id="email" type="email" name="email" required>
                                    <span class="infob-email-w" style="color:#000;">Une étude personnalisée vous sera envoyée à cette adresse</span>
                                </div> 
                                <div class="cguv">
                                    <label class="checkbox">
                                        <input type="checkbox" name="cguv" required checked>J'ai lu et j'accepte les conditions générales.
                                    </label>
                                    <label class="checkbox">
                                        <input type="checkbox" name="partenaires"  checked> J'accepte de recevoir les offres des partenaires.
                                    </label>
                                </div> 
                                <div>
                                    <input class="btn_button btn-full-one" type="submit" name="valider" value="Je valide" >
                                </div>
                            </form>
                        </div>
                        <div>
                    </div>
                </aside>
                               
                </div>
                 <div class="clear"></div>
            </div>
        </div>
        <div class="clear"></div>
    </div>


    <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">Étude personnalisée <br/><strong>par mail sous 24h</strong></li>
            <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>
<script src="js/infoBulle.js"></script>

 <!-- New Remarketing tags -->
     <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1024378253;
    var google_conversion_label = "ipnICMWfg2EQjYu76AM";
    var google_custom_params = window.google_tag_params;
    var google_remarketing_only = true;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>

    <!-- Analytics tags -->
    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-16975536-3']);
        _gaq.push(['_trackPageview']);

        (function () {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
        })();

    </script>  
</body>
</html>


