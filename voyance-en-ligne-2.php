<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <title>Voyance en Ligne avec des Experts | MyAstro</title>
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
<body class="voyance-telephone-1 voyance-en-ligne-2 page_appel voyance-ligne">
    <div class="top-nav">
        <div class="nav-content"><div class="links">
            <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
			<a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | 
			<a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div></div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo">
                <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
            </div>
            <div class="content">
                <h1><strong>Voyance en Ligne</strong></h1>
                <div class="txt-content">
                <p>Vous recherchez des réponses sur votre vie ou celle d'un proche ? Nos experts de la voyance en ligne sont à votre écoute par téléphone et vous apportent des conseils clairs et avisés.</strong></p>
                <p>Avec la voyance en ligne  My Astro, vous avez le choix : vous pouvez directement contacter l'un de nos voyants par téléphone, ou bien demander à être rappelé en choisissant votre voyant.</p>
                </div>
            </div>

            <div class="comment-ca-marche">
                <h2>Comment ça marche ? </h2>
                <div class="faq faq-appel">
                    <div class="cols-3 first">
                        J’appelle un(e) <br/>voyant(e)
                    </div>
                    <div class="cols-3 last">
                        Je profite de l’offre <br/>à 1€ les 10 minutes
                    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>


        <div class="right-part">
            <div class="appel-voyante">
              <div class="num-appel">
                    Appelez votre <strong>voyant(e)</strong> au<br/>
                    <a href="tel:0482537159">04 82 53 71 59</a>
                </div>
                <span class="offre">
                    Vos <strong>10</strong> premières minutes à <strong>1€</strong> avec le code promo<strong> LIGNE10</strong></span>
            </div>
            <div class="voyant-membre widget">

                <?php
                                if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel'])){
                                    $destinataire = 'standard.kgcom@gmail.com, thierno.kgcom@gmail.com';
                                    $sujet = utf8_decode('[MYASTRO DRI] - '. uniqid());
                                    $email = 'contact@myastro.fr';
                                    $headers = 'From: Myastro - Demande de rappel  <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email;
                                    $headers .= "Content-Type: text/html; charset=\"utf-8\"";
                                    
                                    $message  = "Prénom : ".$_POST['prenom']. "\r";
                                    $message .= "Téléphone : ".$_POST['tel']."\r";
                                    $message .= "Pays : ".$_POST['pays']."\r";
                                    $message .= "Page : http://www.myastro.fr/voyance-en-ligne-2\r";
                                    $message .= "Site : My Astro\r";
                                    $message .= "Source : ADWORDS\r"; 
                                    $message .= "Support : DRI\r"; 
                                    $message .= "Voyant : ".$_POST['voyant']."\r";   
                                    $message .= "Gclid : ".$_POST['gclid']."\r";   


                                    if(mail($destinataire, $sujet, $message, $headers)){
                                        echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
                                        $_SESSION['demanderappel'] = true;
                                    }
                                    else{
                                        echo '<p class="erreur_envoye">Votre message n\'a pas été correctement envoyé</p>';
                                    }
                                } 
                ?>
                <?php
                        if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel'])){
                ?>
                <form id=""  action="" method="post">
                    <input type="text" name="antisp" value="" style="display:none">
                    <input type="hidden" name="gclid" value="<?= isset($_GET['gclid']) ? $_GET['gclid'] : '' ?>"/>
					 <div class="form-w-one li-form">
                        <label class="label-rappel">Sélectionnez un voyant pour être rappelé :</label>
					 	<div class="cols4 first"><input type="radio" class="voyant1" name="voyant" value="jean" required ><img src="images_landing/voyants/jean.jpg" alt="" width="110" height="110" />Jean<span>5.50€/min</span></div>
                		<div class="cols4 second"><input type="radio" class="voyant2" name="voyant" value="lena"><img src="images_landing/voyants/lena.jpg" alt="" width="110" height="110" />Léna<span>4.00€/min</span></div>
               			<div class="cols4 third"><input type="radio" class="voyant3" name="voyant" value="robert"><img src="images_landing/voyants/robert.jpg" alt="" width="110" height="110" />Robert<span>4.00€/min</span></div>
               			<div class="cols4 last"><input type="radio" class="voyant4" name="voyant" value="beatrice"><img src="images_landing/voyants/beatrice.jpg" alt="" width="110" height="110" />Béatrice<span>5.50€/min</span></div>

					 </div>

                     <div class="form-w-one li-form">
                     	 <label class="title-rappel">Faites vous rappeler <strong>GRATUITEMENT</strong> </label>
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
                <div class="clear"></div>
            </div>
            

        </div>
        <div class="clear"></div>
        <div class="bloc-middle-bg"></div>

    </div>


    <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">1&euro; les 10 minutes <br/>code promo <strong>ASTRO10</strong></li>
            <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
            <li class="fifth">Paiement <br/><strong>sécurisé</strong></li>
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
</body>
</html>


