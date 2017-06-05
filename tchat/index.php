<?php
    /* Page de tchat gratuit virtuel */

    setcookie("tchat","tchat", time()+86400,'/');
    
    include('../include/Lib_handler.php');
    $tchat = new Tchat\Tchat(new Bdd\Bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
    
    $user = array(
        'ID'             => $_SESSION['user_id'],
        'name'           => $_SESSION['firstname'],
        'email'          => $_SESSION['email'],
        'phone'          => $_SESSION['phone'],
        'sexe'           => $_SESSION['sexe'] == 'homme' ? 'M' : 'F',
        'code'           => base_convert($_SESSION['user_id'], 10,32),
        'firstnameJoint' => $_SESSION['firstnameJoint'],
        'pays'           => $_SESSION['pays'],
        'birthdate'      => $_SESSION['birthdate'],
        'birthdatejoint' => $_SESSION['birthdateJoint'],
        'source'     	 => $_SESSION['source'],
        'affiliation'    => $_SESSION['affiliation'],
        'support'   	 => $_SESSION['support'],
        'page'           => $_SESSION['page']
    );
    
    if($user['source']=='saint-patrick-2016'){
        switch($_SESSION['trigger']){
            case 'question_sp_amour':
                $trigger = 'question_1';
                break;
            case 'question_sp_travail':
                $trigger = 'question_4';
                break;
            case 'question_sp_argent':
                $trigger = 'question_73';
                break;
        }
    } elseif($user['source']=='printemps-16'){
        $trigger = 'question_2';
    } elseif($user['source']=='pleine-lune-avril-16'){
        $trigger = substr($_SESSION['trigger'], 6 );
    } else {
        $trigger = $_SESSION['trigger'];
    }
    $affiliation_id = (isset($_SESSION['affiliation_id'])) ? $_SESSION['affiliation_id'] : 0;
    
    $tchat->trigger = $trigger;
    $tchat->setSupport($_SESSION['support'],$affiliation_id);
    
    $infos = array(
        'user' => $user,
        'cartes' => $_SESSION['cards']
    );

    $data = $infos;

    if($tchat->canStart()){
        $conversation = $tchat->flattenConversation($tchat->getConversation($infos));
        $id_stats = $tchat->stats->addStats($tchat->scenario[0]->id, $tchat->intro, $tchat->content, $tchat->conclusion, $user['ID']);
    }

    if(in_array($user['source'],['tarot-amour-1', 'tarot-amour-1-fb'])){
        $page_title = 'Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro';
    } else {
        $page_title = 'Tchat gratuit - MyAstro';
    }
    /** -------------- envoi mail confirmation d'inscription --------------- **
    $mail = $_SESSION['email'];
    if ($mail) {
        $content  = file_get_contents("../mail/merci-voyance.html");
        $name     = utf8_decode($user['name']);
        $to       = $mail;
        $subject  = 'Confirmation de votre demande d\'étude';
        $message  = str_replace(array('IDASTRO', 'NOMCLE'), array($user['code'], $name), $content);
        $headers  = "From: \"My Astro\"<contact@myastro.fr>\n";
        $headers .= "Reply-To: contact@myastro.fr\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
    /** -------------------------------------------------------------------- **/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="robots" content="noindex,nofollow" />
        
        <title><?= $page_title ?></title>
        <meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
        
        <link rel="icon" type="image/png" href="../logo_myastro_32x32.jpg" />
        
        <link rel="stylesheet" href="http://www.myastro.fr/sstyle_landing.css" />
        <link href='http://www.myastro.fr/tchat/style.css' rel='stylesheet' type='text/css' />
        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />
        <?php // ($_SERVER['REMOTE_ADDR']=='90.80.230.107'){// ?>
        <?php if ($user['source']=='saint-patrick-2016'){ ?>
            <link rel=stylesheet href="themes/saint-patrick-2016/style.css" type="text/css" media=all />
        <?php } elseif ($user['source']=='printemps-16'){ ?>
            <link rel=stylesheet href="themes/equinoxe-printemps-2016/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['tarot-affil-2', 'tarot-gratuit-m-fb', 'myastro-tarot-fb1', 'myastro-tarot-a2', 'tarot-gratuit-m-a', 'tarot-wdt'])){ ?>
            <link rel=stylesheet href="themes/tarot-sable/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['voyance-gratuite-a1', 'voyance-gratuite-m-a', 'voyance-gratuite-fb1', 'voyance-gratuite-m-fb'])){ ?>
            <link rel=stylesheet href="themes/voyance-bleue/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['voyance-gratuite-a2', 'myastro-tarot-a4', 'myastro-tarot-fb2', 'voyance-gratuite-fb2'])){ ?>
            <link rel=stylesheet href="themes/amour/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['tarot-gratuit-sw-16', 'tarot-gratuit-fb-16', 'tarot-gratuit-a-16', 'tarot-gratuit-wdt-16'])){ ?>
            <link rel=stylesheet href="themes/tarot-gratuit-16/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['pleine-lune-avril-16'])){ ?>
            <link rel=stylesheet href="themes/pleine-lune-2016/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['nouvelle-lune-mai-16', 'nouvelle-lune-septembre-16'])){ ?>
            <link rel=stylesheet href="themes/nouvelle-lune-2016/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['vendredi-13-05-16'])){ ?>
            <link rel=stylesheet href="themes/vendredi-13-05-16/style.css" type="text/css" media=all />
        <?php } elseif (in_array($user['source'], ['voyance-amour-16'])){ ?>
            <link rel=stylesheet href="themes/voyance-amour-16/style.css" type="text/css" media=all />
        <?php } ?>
        <style>
            .output .name{ color:#<?= ($tchat->scenario[0]->seer_sexe == 'M') ? '2277f7': 'c9209f' ; ?>;}
        </style>
        
        <?php include('../include/header_inc_landing.php'); ?>
    </head>
    <body class="voyance-telephone-1" style="max-width:100%;">
        <div class="top-nav">
            <div class="nav-content">
                <div class="logo"></div>
                <div class="links">
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> |
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> |
                    <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a>
                </div>
            </div>
        </div>
    <div class="container-fluid">
        <div class="row main">
            <div class="right-part logo-right"></div>
            <div class="left-part" style="margin:0px;">
                <div class="logo">
                    <img src="../images_landing/logo-myastro.png" alt="" width="220" height="89" />
                </div>
                <div class="right-part">
                    <div class="voyant-membre">
                        <h2><strong><span>F</span>aites-vous rappeler immédiatement</strong></h2>
                        <span class="slogan">Nos voyant(e)s répondent à vos questions</span>
                        <div class="clear"></div>
                    </div>
                    <div>
                        <aside class="widget">
                            <div class="widget-title" style="text-align:center;">
                                Vos <strong>10</strong> premières minutes <strong>gratuites !</strong>
                            </div>
                            <div id="" class="widget-content clearfix">
                                <div class="visible-part form-part form-part-one">
                                    <form action="" id="rappel">
                                        <input type="text" name="antisp" value="" style="display:none" />
                                        <div class="form-w-one li-form">
                                            <input id="tel" name="phone" type="tel" value="<?php echo $data['user']['phone']; ?>" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" required />
                                        </div>
                                        <div>
                                            <input type="hidden" name="demande_rappel" value="rappel" />
                                            <input class="" type="submit" name="valider" value="Rappel gratuit" onclick="rappelTchat()" />
                                            
                                            <input type="hidden" name="data" value="<?= htmlentities(serialize($data)) ?>" />
                                            <input type="hidden" name="voyant" value="<?= ucfirst( $tchat->scenario[0]->seer_name ) ?>" />
                                            <input type="hidden" name="objet" id="objet" value="" />
                                            <input type="hidden" name="idastro"  value="<?= $data["user"]["ID"]?>"/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </aside>
                        <div class="clear"></div>
                    </div>
                    <div class="comment-ca-marche">
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
            </div>
            <div class="pop">
                voyants <br><strong>sérieux</strong> &amp; <br><strong>reconnus</strong>
            </div>
            <div class="right-part tchat">
                <div class="overlay">
                    <div class="alert alert-info">
                        <img src="loader-overlay.gif" class="loader" /> Connexion au serveur en cours ...
                    </div>
                </div>
                <div class="advert">
                    <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/preloader.gif" class="advert-offline" />
                    <div class="advert-online hidden">
                        <h2>Vous Tchattez avec <?= ucfirst( $tchat->scenario[0]->seer_name ) ?></h2>
                        <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/tchat/new/<?= $tchat->getImageName() ?>.png" />
                    </div>
                </div>
                <div class="screen">
                    <div class="output">
                        <?php if(!$tchat->canStart()){ ?>
                        <div class="jumbotron">
                            <h1>Demande effectuée</h1>
                            <p>Vous avez déjà effectué une demande par tchat récemment, vous ne pouvez donc pas en refaire une avant quelques jours. Merci de votre compréhension.</p>
                        </div>
                        <?php } ?>
                    </div>
                    <div class="input">
                        <span class="waiting invisible">
                            <img src="loader.gif" /><?= ucfirst( $tchat->scenario[0]->seer_name ) ?> est en train d'écrire ...
                        </span>
                        <div class="input-group">
                            <input type="text pull-left" class="form-control" readonly placeholder="Vous êtes en mode gratuit, vous ne pouvez pas répondre." />
                            <span class="input-group-btn">
                                <button class="btn btn-default disabled" type="button"> Envoyer <i class="glyphicon glyphicon-chevron-right"></i></button>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="modal fade bs-example-modal-lg error-handler" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" id="error_msg"></div>
            </div>
        </div>
    </div>
</div>

    <div class="subfooter">
        <ul>
            <li class="first">Voyant <strong>sérieux reconnus</strong> <br/> pour leur <strong>savoir faire</strong></li>
            <li class="second">Consultations 100% <br/><strong>discrètes & anonymes</strong></li>
            <li class="third">Interprétation<br/>immédiate</li>
            <li class="fourth">My Astro leader <br/><strong>depuis 2007</strong></li>
            <li class="fifth">Paiement <br/><strong>sécurisé</strong></li>
            <div class="clear"></div>
        </ul>
        <div class="clear"></div>
    </div>

    <div class="footer">
        <?php include('../include/footer_copyright.php'); ?>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript">
	var msgs = <?= json_encode($conversation)?>;
	var seerName = <?= json_encode(ucfirst($tchat->scenario[0]->seer_name)) ?>
    </script>
    <script type="text/javascript" src="script.js"></script>
    
    <!-- Tag de conversion TABOOLA -->
    <script> window._tfa = window._tfa || []; _tfa.push( {notify : "action",name :" successful_conversion"} ); </script>
    <script src="//cdn.taboola.com/libtrc/ikomvoyancesc/tfa.js"></script>
    <!-- Fin Tag de conversion TABOOLA -->
    
    <!-- Pixel Affiliation -->
    <?php include_once('../include/pixels/affiliation.php');?>

    <!-- Autres conversions -->
    <?php include_once('../include/conversion/adwords.php');
          include_once('../include/conversion/facebook.php');?>

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

<script src="http://www.myastro.fr/js/bootstrap.min.js"></script>