<?php
    include("include/tracking-mail.php");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Voyance chat gratuit : Essayez la voyance gratuite par tchat</title>
    	<meta name="description" content="My Astro : Voyance gratuite par chat - Obtenez des réponses immédiates à toutes vos questions. Voyance gratuite par chat." />
        <script src="js/jquery-1.11.js"></script>
        <meta name="robots" content="noindex,nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script><!-- +++ -->
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />

        <?php include('include/header_inc_landing.php'); ?>
        <script src="js/myscript.js"></script>
    </head>
<body class="voyance-telephone-1">
    <div class="top-nav">
        <div class="nav-content"><div class="links">
            <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
            <a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | 
            <a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div></div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo" style="text-align: center;margin-bottom: 20px;max-width: 320px;">
                <img src="images_landing/new-logo-myastro-purple.png" alt="Logo MyAstro" />
            </div>
            <div class="content">
                <div class="txt-content txt-merci-voyance" style="padding: 8px 16px;">
                <h4 style="margin: 12px 0;">votre demande a bien été prise en compte</h4>
                <p>Vous recevrez un appel dès demain en provenance du numéro 04.81.09.04.07</p>
                <p>En attendant, si vous souhaitez consulter un<br/> voyant immédiatement par téléphone,<br/> <a href="#form-merci-voyance"><span>faites vous rappeler gratuitement</span></a> en<br/> remplissant le formulaire.</p>
                </div>
            </div>

            <div class="comment-ca-marche ">
                <h2 class="merci-voyance-h2">Comment ça marche ? </h2>
                <div class="faq">
                    <div class="cols-3 first">
                        Je remplis le <br/>formulaire
                    </div>
                    <div class="cols-3 last">
                        Je suis rappelé(e) <br/>immédiatement
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div class="right-part right-part-merci" style="margin-top: 51px;">
            <div class="voyant-membre voyant-merci-voyance">
                <h2>Besoin d'une consultation <strong>immédiate</strong> ?</h2>
                <span class="slogan">Faites-vous rappeler immédiatement</span>

                <div class="cols4"><img src="images_landing/voyants/jean.jpg" alt="" width="110" height="110" />Paul<br/><span>5.50€/min</span></div>
                <div class="cols4"><img src="images_landing/voyants/lena.jpg" alt="" width="110" height="110" />Léna<br/><span>4.00€/min</span></div>
                <div class="cols4"><img src="images_landing/voyants/robert.jpg" alt="" width="110" height="110" />Robert<br/><span>4.00€/min</span></div>
                <div class="cols4"><img src="images_landing/voyants/beatrice.jpg" alt="" width="110" height="110" />Béatrice<br/><span>5.50€/min</span></div>

                <div class="clear"></div>
            </div>
            <div>
                <aside class="widget" id="form-merci-voyance">
                    <div class="widget-title" style="text-align:center;">
                       Vos <strong>10</strong> premières minutes <strong>gratuites ! </strong>
                    </div>
                    <div id="" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <div class="alert alert-danger">
                              <p></p>
                            </div>
                            <?php
                                include("include/send-mail.php");
                                if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel']) && !empty($id_astro)){
                            ?>
                            <form id=""  action="" method="post">
                                <input type="text" name="antisp" value="" style="display:none">
                                <input type="hidden" name="source" value="<?php echo $source; ?>"/>
                                <input type="hidden" name="gclid" value="<?php echo $gclid; ?>"/>
                                <div class="form-w-one li-form">
                                    <input type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?php echo $prenom; ?>" required>
                                </div>

                                 <div class="form-w-one li-form">
                                    <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required>
                                </div>

                                <div class="form-w-one li-form selectpays">
                                    <label for="pays">Votre pays </label>
                                    <select name="pays" id="pays" required>
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


                                <div>
                                    <input type="hidden" name="demande_rappel" value="rappel">
                                    <input class="" type="submit" name="valider" value="Rappel gratuit" onclick="ga('send', 'event', 'bouton', 'clique', 'voyance-telephone', 1);">
                                </div>
                            </form>
                            <?php
                            }
                            ?>
                        </div>
                        <div>
                    </div>
                </aside>
                               
                </div>
                 <div class="clear"></div>
            </div>
            <div class="bloc-middle-bg"></div>

        </div>
        <div class="clear"></div>
    </div>


    <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">10 minutes<br /><strong>offertes</strong></li>
            <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
            <li class="fifth">Paiement <br/><strong>sécurisé</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>

<script src="js/required.js"></script>
<!-- Google Code for MY ASTRO QUESTION INSCRIPTION Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1024378253;
var google_conversion_language = "fr";
var google_conversion_format = "1";
var google_conversion_color = "ffffff";
var google_conversion_label = "arTgCM2fhAMQjYu76AM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1024378253/?label=arTgCM2fhAMQjYu76AM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<!-- Facebook Conversion Code for Leads -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = '//connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6017569293945', {'value':'0.01','currency':'EUR'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6017569293945&amp;cd[value]=0.01&amp;cd[currency]=EUR&amp;noscript=1" /></noscript>

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
</body>
</html>