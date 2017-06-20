<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
    <title>Oracle : votre tirage de cartes interprété | MyAstro</title>
    <meta name="description" content="My Astro : Vos Tarots Gratuits - Obtenez des réponses immédiates à toutes vos questions. Tarots Divinatoires Gratuits." />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
         <meta name="robots" content="noindex,nofollow" />
         <?= $tracker->getCanonical() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="css/voyance-tarot-nat.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-gratuit.css" />
        <link rel="stylesheet" type="text/css" href="css/tarot-responsive-nat.css" />
        <link rel="stylesheet" href="css/infobulle.css" />
       <script src="js/jquery-1.11.js"></script>
        <link rel="shortcut icon" href="favicon.ico" /> 
        <noscript>
        <link rel="stylesheet" type="text/css" href="css/noscript.css" />
        </noscript>
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />   
        <?php include('include/header_inc_landing.php'); ?>
        <script src="js/myscript.js"></script>

    </head>
<body class="oracle oracle-general">
<div class="subbody">
    <div class="top-nav">
        <div class="nav-content">
            <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo">
                <img src="images_landing/logo-myastro-hover.png" alt="" width="230" height="101" />
            </div>
            <div class="content">
                <h1><strong>Oracle</strong></h1>
                <div class="txt-content">
                    <p>Et si les cartes vous lisaient l'avenir ? Avec notre service d'Oracle, tirez 5 lames et laissez l'un de nos spécialistes en arts divinatoires vous dicter ce que votre tirage a à raconter sur votre destin.</p>
                    <p>Vous avez des questions ? Notre Oracle vous apporte des réponses claires et honnêtes, quel que soit le thème abordé (amour, finances, famille, travail,...).</p>
                </div>
            </div>
        </div>


        <div class="right-top-part">
            <div  class="voyance-tarot">
                <!-- Main Content -->
                <div class="row-fluid">
                    <div class="span6 main-content">
                    <div class="widget-t w-sponsors">
                        <div class="tarot-content">
                        <div class="tarot-left" style="width:100%;">

                        <div class="paquet">

                            <div class="title">Tirez <strong>5</strong> lames</div>
                                <div class="relative">
                                <?php
                                for ($i = 1; $i <= 21; $i++)
                                {
                                    switch ($i)
                                    {
                                    // On met des attributs data pour la position de départ des elements
                                    case 1 :
                                    case 12 :
                                        $datapos = '0px';
                                        break;
                                    case 2 :
                                        $datapos = '2px';
                                        break;
                                    case 3 :
                                    case 11 :
                                        $datapos = '4px';
                                        break;
                                    case 4 :
                                    case 10 :
                                        $datapos = '6px';
                                        break;
                                    case 5 :
                                    case 9 :
                                        $datapos = '8px';
                                        break;
                                    case 6 :
                                    case 8 :
                                        $datapos = '10px';
                                        break;
                                    case 7 :
                                        $datapos = '12px';
                                        break;
                                    }
                                    echo '<img src="images_landing/carte-oracle-general.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
                                }
                                ?>
                                </div>
                            <!--<div class="clearfix"></div>-->
                            </div>

                            <div class="donne">
                                <div class="donneHandler">
                                <?php
                                for ($i = 1; $i <= 5; $i++)
                                {
                                    echo '<div class="pickHolder"></div>';
                                }
                                ?>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        
                        </div>
                        <!-- debut form -->
                        </div>
                        </div>
            
                        <!-- fin form -->
                        <div class="clearfix"></div>


                    </div>

                </div><br/> 
            </div>
        <div class="clearfix"></div>
        </div>
    </div>
      

        
    <div class="main bottom-part" id="secondpart">

        <div class="left-bottom-part">
             <div class="comment-ca-marche">
                <h2>Comment ça marche ? </h2>
                <ul>
                    <li class="li1"><strong>1</strong> <span>Je tire mes cinq lames de tarot</span></li>
                    <li class="li2"><strong>2</strong> <span>Je remplis le formulaire</span></li>
                    <li class="li3"><strong>3</strong> <span style="line-height: 27px;">Je suis rappelé(e) et je découvre mon <br/>interprétation immédiate</span></li>
                </ul>

                <img src="images_landing/oracle-general.jpg" width="577" height="180" alt="Oracle"/>
            </div>
        </div>


           <div class="right-part">

            
            
            <div>
                <aside class="widget w-adv">
                    <div class="widget-title" style="text-align:center;">
                        <span class="h4">Découvrez ce que l'avenir <br/>vous réserve</span>
                    </div>
                    <div id="form-w" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <?php
                                if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel'])){
                                    $destinataire = 'standard.kgcom@gmail.com, thierno.kgcom@gmail.com';
                                    $sujet = utf8_decode('[MYASTRO DRI] - '.$_POST['prenom'].' - '. uniqid());
                                    $email = 'contact@myastro.fr';
                                    $headers = 'From: Myastro - Demande de rappel  <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email;
                                    $headers .= "Content-Type: text/html; charset=\"utf-8\"";
                                    
                                    $message  = "Prénom : ".$_POST['prenom']. "\r";
                                    $message .= "Téléphone : ".$_POST['tel']."\r";
                                    $message .= "Pays : ".$_POST['pays']."\r";
                                    $message .= "Page : http://www.myastro.fr/oracle-1\r";
                                    $message .= "Site : My Astro\r";
                                    $message .= "Source : ADWORDS\r"; 
                                    $message .= "Support : DRI\r"; 
                                    $message .= "Gclid : ".$_POST['gclid']."\r";   

                                    if(mail($destinataire, $sujet, $message, $headers)){
                                        echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
                                        $_SESSION['demanderappel'] = true;
                                    }
                                    else{
                                        echo '<p class="erreur_envoye">Votre message n\'a pas été correctement envoyé</p>';
                                    }
                                } 
                                if(!isset($_POST['demande_rappel']) && isset($_SESSION['demanderappel'])){
                                    echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
                                }
                            ?>
                            <?php
                                if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel'])){
                            ?>
                            <form id=""  action="" method="post">
                                <input type="text" name="antisp" value="" style="display:none">
                                <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
                                <div class="form-w-one li-form subform">
                                    Un de nos voyants vous <br/>
                                    rappelle <strong>immédiatement</strong> <br/>
                                    <i>1€ les 10 minutes </i>
                                </div>

                                <div class="form-w-one li-form">
                                    <input type="text" id="name" name="prenom" placeholder="Mon prénom" required>
                                </div>

                                 <div class="form-w-one li-form">
                                    <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" required>
                                </div>

                                <div class="form-w-one li-form selectpays">
                                    <label>Votre pays </label>
                                    <select class="cnt-right" name="pays" id="pays" required="">
                                          <option value="" selected="selected">Votre Pays</option>
                                          <option value="Belgique +32">Belgique</option>
                                          <option value="Canada +1">Canada</option>
                                          <option value="Luxembourg +352">Luxembourg</option>
                                          <option value="Suisse +41">Suisse</option>
                                          <option value="France Métropolitaine +33" selected>France Métropolitaine</option>
                                          <optgroup label="DOM-TOM">
                                              <option value="Martinique +596">Martinique</option>
                                              <option value="Guadeloupe +590">Guadeloupe</option>
                                              <option value="Guyane +594">Guyane</option>
                                              <option value="La Réunion +262">La Réunion</option>
                                              <option value="Mayotte +262">Mayotte</option>
                                              <option value="St Pierre et Miquelon +508">St Pierre et Miquelon</option>
                                              <option value="St Barthélémy +590">St Barthélémy</option>
                                              <option value="St Martin +590">St Martin</option>
                                              <option value="Wallis et Futunua +681">Wallis et Futunua</option>
                                              <option value="Polynésie Française +689">Polynésie Française</option>
                                              <option value="Nouvelle Calédonie +687">Nouvelle Calédonie</option>
                                          </optgroup>
                                          <option value="Autre">Autre</option>
                                    </select>
                                 </div>      


                                <div>
                                    <input type="hidden" name="demande_rappel" value="rappel">
                                    <input class="" type="submit" name="valider" value="Être rappelé(e)">
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
        </div>
        <div class="clear"></div>



        </div>

  

        <script src="js/jquery-1.11.js"></script>
        <script src="js/belline.js"></script>
        <script src="framework/bootstrap/js/bootstrap.min.js"></script>
        <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>

 <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">1&euro; les 10 minutes <br/>code promo <strong>ASTRO10</strong></li>
            <li class="third">My Astro leader <br/><strong>depuis 2007</strong></li>
            <li class="fourth">Paiement <br/><strong>sécurisé</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>


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

</div>
</body>
</html>


