<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr" style="background:#000;">
    <head>
        <title>Voyance chat gratuit : Essayez la voyance gratuite par tchat</title>
    	<meta name="description" content="My Astro : Voyance gratuite par chat - Obtenez des réponses immédiates à toutes vos questions. Voyance gratuite par chat." />
        <script src="js/jquery-1.11.js"></script>
        <meta name="robots" content="noindex,nofollow" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width">
        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script><!-- +++ -->
        <link rel="stylesheet" href="sstyle_landing.css" />
        <link rel="stylesheet" href="css/custom-landing.css" />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />

        <?php include('include/header_inc_landing.php'); ?>
        <script src="js/myscript.js"></script>
    </head>
<body class="voyance-telephone-1">
    <?php
        /* récupération et traitement des données du user */
        $code = (isset($_GET['id'])) ? $_GET['id'] : '';
        $id = base_convert($code, 32, 10);
        $camp = (isset($_GET['camp'])) ? $_GET['camp'] : '';
        $prenom = $idastro = $tel = $campagne = '';
        $id_astro = 'internal_id';
        $source = $pays = $gclid = '';
       
        require_once('inc/config.php');
        require_once('inc/bdd.php');      // New mysql Class From Wordpress : Wpdb
        $bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
       
        $base = $bdd->users;

        if ($id > 2000000) {
            $base = $bdd->users_common;
            $id_astro = 'external_id';
        }
        
        $qry = 'SELECT * FROM ' . $base . ' as agu WHERE '.$id_astro.'=' . $id;
        $user = $bdd->get_row($bdd->prepare($qry));
        if ($user){  
            $idastro = $code;
            $campagne = $camp; 
            $pays = $user->pays;
            if ($id > 2000000) {
                $prenom = $user->firstname;
                $tel = $user->phone;  
            }else{
                $prenom = $user->prenom;
                $tel = $user->tel; 
                $source = $user->source;
                $gclid = $user->gclid;    
            }   
        }
    ?>
    <div class="top-nav">
        <div class="nav-content">
            <a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div>
    </div>
    
    <div class="main">
        <div class="row">
            <div class="col-xs-6 hidden-sm hidden-xs">
                <div class="left-part">
                    <div class="comment-ca-marche">
                        <h2><span>C</span>omment ça marche ? </h2>
                        <div class="faq">
                           <img class="img-responsive" src="images_landing/custom/comment-custom.png" alt="">
                            <div class="clear"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-6">
            <div class="right-part">
            <div class="voyant-membre">
                <h2>Faites-vous rappeler <strong>immediatement</strong></h2>
                <!--<span class="slogan">Nos voyant(e)s répondent à vos questions</span>-->
                <div class="voyant-txt">
                    <p> Par SABINE qui répondra à toute vos questions</br>
                    "Ce vendredi 30 octobre est placé sous le signe du</br>
                    <span>Mystère au niveau astral</span></br>
                    Découvrez ce que vous réserve la fin de l'année"</p>
                </div>
               
            </div>
            <div>
                <aside class="widget">
                    <div class="widget-title" style="text-align:center;">
                       <strong>Vos 10 premières minutes à seulement 1&euro; ! </br>
                        + une bougie <span>Halloween</span> offerte</strong>
                    </div>
                    <div id="" class="widget-content clearfix">
                        <div class="visible-part form-part form-part-one">
                            <div class="alert alert-danger">
                              <p></p>
                            </div>
                            <?php
                                if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel'])){
                                    $destinataire = 'standard.kgcom@gmail.com, thierno.kgcom@gmail.com';
                                    $sujet = utf8_decode('[RAPPEL HALLOWEEN] - '.$_POST['prenom'].' - '. uniqid());

                                    $email = 'contact@myastro.fr';
                                    $headers = 'From: Myastro - Demande de rappel  <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email;
                                    $headers .= "Content-Type: text/html; charset=\"utf-8\"";
                                    
                                    $message = "Prénom : ".$_POST['prenom']. "\r";
                                    $message .= "Téléphone : ".$_POST['tel']."\r";
                                    $message .= "Pays : ".$pays."\r";
                                    $message .= "Id Astro : ".$idastro."\r";
                                    $message .= "Campagne : ".$campagne."\r";
                                    $message .= "Source : ".$source."\r";
                                    $message .= "Gclid : ".$gclid."\r";

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
                                <input type="hidden" name="source" value="<?php echo $source; ?>" />
                                <input type="hidden" name="method" value="form-widget-2" />
                                <input type="hidden" name="support" value="voyance"/>
                                <input type="hidden" name="gclid" value="<?php echo $gclid; ?>"/>
                                <input type="text" name="antisp" value="" style="display:none">
                                <div class="form-w-one li-form">
                                    <input type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?php echo $prenom; ?>" required>
                                </div>

                                 <div class="form-w-one li-form">
                                    <input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required>
                                </div>

                                <div>
                                    <input type="hidden" name="demande_rappel" value="rappel">
                                    <input class="" type="submit" name="valider" value="Rappel immédiat">
                                </div>
                            </form>
                            <?php
                            }else if(isset($_SESSION['demanderappel']) && !isset($_POST['demande_rappel'])){
                                 echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
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
        </div>


        </div>
        <div class="clear"></div>
    </div>


    <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">1&euro; les 10 minutes <br/>code promo <strong>HALLO10</strong></li>
            <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
            <li class="fifth">Paiement <br/><strong>sécurisé par CB</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="footer">
        <?php include('include/footer_copyright.php'); ?>
    </div>

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


