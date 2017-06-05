<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title><?= $page_title ?></title>
<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" href="favicon.ico">
<link href='/sstyle.css' rel='stylesheet' type='text/css' />
<link href='/tchat/style.css' rel='stylesheet' type='text/css' />
<script>
    (function(){
      window._fbds = window._fbds || {};
      _fbds.pixelId = 497972160313027;
      var fbds = document.createElement('script');
      fbds.async = true;
      fbds.src = '//connect.facebook.net/en_US/fbds.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(fbds, s);
    })();
    window._fbq = window._fbq || [];
    window._fbq.push(["track", "PixelInitialized", {}]);
</script>
<style>
nav.main a{
    padding: 14px;
}
.navbar{
    border-radius:0px;
    min-height: 30px;
}
</style>
<?php if($_SERVER['REQUEST_URI'] == "/tchat/") { ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php } ?>
</head>
<body>
    <!-- SCRIPT TRACKING FB / Validate w3c-->
    <noscript>
        <img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=497972160313027&amp;ev=NoScript" />
    </noscript>    <!-- END SCRIPT TRACKING FB-->
        <nav class="top-menu-2">
        <div class="row-fluid">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container-fluid">
                        <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <i class="icon-reorder"></i>
                        </button>
                        <div class="nav-collapse collapse">
                            <!--<a class="brand" href="#">Serpentsoft</a>-->
                            <ul class="nav">
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow">Paiement sécurisé</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow">Déontologie</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow">Conditions générales</a></li>
                                <li class="divider-vertical"></li>
                            </ul>
                            <ul class="nav pull-right">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-delay="800">
                                        <i class="bo-icon-info-sign bo-icon-white"></i>Nous contacter 
                                        <i class="icon-angle-down" style="margin-right: 0"></i>
                                    </a>
                                    <ul class="dropdown-menu about-company">
                                        <li>
                                            <div class="row-fluid">
                                                <div class="span8 google-map-section clearfix">
                                                    <div class="row-fluid title">
                                                        <span class="title-contact"><i class="bo-icon-flag bo-icon-white"></i>Infos</span>
                                                        <hr />
                                                    </div>
                                                    <dl id="hcard-myastro" class="vcard">
                                                      <dt><a class="url fn" href="http://www.myastro.fr">www.myastro.fr</a></dt>
                                                        <dd class="org">Organisation : <span class="value">My Astro</span></dd>
                                                        <dd>
                                                          <dl class="adr">
                                                          <dt>Lieu :</dt>
                                                            <dd>
                                                            <span class="locality">Lyon</span> 
                                                            </dd>
                                                          </dl>
                                                        </dd>
                                                        <dd class="tel"><i class="icon-phone"></i> <span class="value"> +33 (0)4 82 53 71 59</span></dd>
                                                        <dd class="mail"><i class="icon-envelope"></i> <span class="value"><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/contact"> contact@myastro.fr</a></span></dd>
                                                    </dl>
                                                </div>
                                                <div class="span4">
                                                    <div class="row-fluid login-section">
                                                        <div class="row-fluid title">
                                                            <span class="title-contact"><i class="bo-icon-user bo-icon-white"></i>Contact</span>
                                                            <hr />
                                                        </div>
                                                        <div class="row-fluid">
                                                            <form method="POST" action="contact" class="login-form">
                                                                <div class="input-prepend input-block-level">
                                                                    <label>Votre Email:</label>
                                                                    <input id="Email1" name="email" class="span10" type="email" placeholder="Email" required="required" />
                                                                </div>
                                                                <div class="input-prepend input-block-level">
                                                                    <label>Message:</label>
                                                                    <textarea style="background-color: #1A1A1A;border: 1px solid #3D3D3D;font-size: 11px;font-weight: 400;width:78%;" id="Message" name="message" placeholder="Message" required="required" ></textarea>
                                                                </div>
                                                                <button type="submit" name="valider" class="btn-theme">Valider</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr />
                                            <div class="row-fluid">
                                                <div class="span8">
                                                    
                                                    <!-- Join Us - Social Icons -->
                                                    <div class="row-fluid">
                                                        <div class="row-fluid title">
                                                            <span class="title-contact"><i class="bo-icon-plane bo-icon-white"></i>Nous rejoindre</span>
                                                            <hr />
                                                        </div>
                                                        <div class="row-fluid">
                                                            <ul class="social-networks clearfix">
                                                                <li><a href="https://www.facebook.com/pages/Myastro/437290166297323" class="fb-metro-but" rel="help" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="facebook" ></a></li>

                                                                <li><a href="https://twitter.com/MYASTRO1" class="twitter-metro-but" rel="help" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="twitter" ></a></li>

                                                                <li><a href="https://plus.google.com/+MyastroFr" class="googleplus-metro-but" rel="help" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="googleplus" ></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="span4">
                                                    <div class="row-fluid title">
                                                        <span class="title-contact"><i class="bo-icon-question-sign bo-icon-white"></i>Notre site</span>
                                                        <hr />
                                                    </div>
                                                    <div class="about-desc">
                                                        <p>
                                                            MyAstro est un service d'information gratuit et complet qui vous guide peu à peu dans la découverte de votre personnalité. Enfin MyAstro vous mettra en relation avec un ensemble de voyants sélectionnés par ces soins qui sauront répondre efficacement à vos attentes.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Terms and Conditions -->
                                            <div class="row-fluid">
                                                <div class="row-fluid title">
                                                    <span class="title-contact">
                                                        <i class="bo-icon-bell bo-icon-white"></i>Termes et conditions</span>
                                                    <hr />
                                                </div>
                                                <div class="row-fluid">
                                                    <ul class="span7 terms-conditions clearfix">
                                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow">Conditions générale.</a></li>
                                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/plan-du-site" rel="nofollow">Plan du site</a></li>
                                                        <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow">Charte de déontologie</a></li>
                                                    </ul>
                                                    <div class="span5 copyright clearfix">
                                                        <span>&copy; Copyright <?= date('Y') ?> Myastro, Tous droits réservés</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header>
        <div class="navbar navbar-banner">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="logo-240 pull-left" itemscope itemtype="http://schema.org/Brand">
                        <a href="http://www.myastro.fr">
                            <img  itemprop="logo" src="http://www.myastro.fr/images/logo-V3.png"  alt="Voyance Myastro.fr" width="240" height="90" />
                        </a>
                    </div>
                    <div class="adv-600 pull-right visible-desktop">
                        <?php if ($_SERVER['PHP_SELF'] == '/voyance-par-telephone-2.php') { ?><img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/bandeau-numero-2.jpg" alt="Nous contacter au 04 37 45 45 32" style="margin-right:10px" width="340" height="90"/> <?php } else{?>

                        <img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/bandeau-numero.jpg" alt="Nous contacter au 04 82 53 71 59 " style="margin-right:10px" width="340" height="90"/>
                       <?php } ?>
                        <!--<a href="<?= PROTOCOL.'://'.ROOT_URL ?>/voyance-par-telephone"><img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/homepage-header-H.png" alt="Voyant de la semaine" width="340" height="90"/></a>-->
                        
                        <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/forfait-saphir"><img src="<?= PROTOCOL.'://'.ROOT_URL ?>/images/bannieres/voyance-forfaits.png" alt="Voyant de la semaine" width="340" height="90"/></a>
                    </div>
                </div>
                 <?php if ($_SERVER['PHP_SELF'] == '/index.php') { ?><h1 style="background:url('../../images/stripes.png') repeat-x scroll center 31px transparent;color:#000">Votre voyance MyAstro : découvrez de quoi sera fait demain</h1> <?php } ?>
            </div>
        </div>
    </header>
 
<?php include('nav_inc.php'); ?>