    <?php 
        $tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
    ?>
    <?= $tracker->getCanonical() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />


    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Styles Should be After Script -->
    <link rel="stylesheet" href="style.css" />
	<link href="css/tel.css" type="text/css" rel="stylesheet">


    <!--[if IE 7]>
    <link id="lnkFontAwesomeIE7" href="framework/fontawesome/css/font-awesome-ie7.min.css" rel="stylesheet" />
    <![endif]-->

    <!--[if lt IE 9]>
      <script src="framework/fix-ie/html5.js"></script>
    <![endif]-->

    <script src="framework/fix-ie/modernizr.v262.js"></script>

	
	
	<link rel="shortcut icon" href="favicon.ico" /> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
		<noscript>
			<link rel="stylesheet" type="text/css" href="css/noscript.css" />
		</noscript>
	<!-- SCRIPT TRACKING FB-->
    <script>(function(){
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
    <noscript><img height="1" width="1" border="0" alt="" style="display:none" src="https://www.facebook.com/tr?id=497972160313027&amp;ev=NoScript" /></noscript>
       <!-- END SCRIPT TRACKING FB-->
</head>

<body>

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

                                <li><a href="http://<?= ROOT_URL ?>/paiement-securise" rel="nofollow">Paiement sécurisé</a></li>
                                <li class="divider-vertical"></li>

                                <li><a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow">Déontologie</a></li>
                                <li class="divider-vertical"></li>
                                <li><a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow">Conditions générales</a></li>
                                <li class="divider-vertical"></li>

                                
                            </ul>

                            <ul class="nav pull-right">

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-hover="dropdown" data-delay="200"><i class="bo-icon-info-sign bo-icon-white"></i>Nous contacter <i class="icon-angle-down" style="margin-right: 0"></i></a>

                                    <ul class="dropdown-menu about-company">
                                        <li>
                                            <div class="row-fluid">

                                                

                                                <div class="span4">

                                                    

                                                    <div class="row-fluid login-section">
                                                        
 
                                                        
                                                    </div>

                                                </div>

                                            </div>

                                            <hr />

                                            <div class="row-fluid">
                                                <div class="span8">
                                                    <div class="row-fluid title">
                                                        <h3><i class="bo-icon-flag bo-icon-white"></i>Infos</h3>
                                                        <hr />
                                                    </div>

                                                    <ul class="row-fluid contact-info">

                                                        <li>
                                                            <strong>Adresse:</strong>
                                                            <span>Lyon</span>
                                                        </li>

                                                        <li>
                                                            <strong>Pays:</strong>
                                                            <span>France</span>
                                                        </li>

                                                        <li>
                                                            <strong>Telephone:</strong>
                                                            <span>+33 (0)4 82 53 71 59</span>
                                                        </li>

                                                        <li>
                                                            <strong>Email:</strong>
                                                            <a href="http://<?= ROOT_URL ?>/contact">contact@myastro.fr</a>
                                                        </li>

                                                    </ul>

                                                    <!-- Join Us - Social Icons -->
                                                    <div class="row-fluid">
                                                        <div class="row-fluid title">
                                                            <h3><i class="bo-icon-plane bo-icon-white"></i>Nous rejoindre</h3>
                                                            <hr />
                                                        </div>

                                                        <div class="row-fluid">
                                                            <ul class="social-networks clearfix">
                                                                <li><a href="https://www.facebook.com/pages/Myastro/437290166297323" class="fb-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="facebook" ></a></li>

                                                                <li><a href="https://twitter.com/MYASTRO1" class="twitter-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="twitter" ></a></li>

                                                                <li><a href="https://plus.google.com/+MyastroFr" class="googleplus-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="googleplus" ></a></li>
<!--
                                                                <li><a href="#" class="pinterest-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="pinterest" ></a></li>

                                                                <li><a href="#" class="youtube-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="youtube" ></a></li>

                                                                <li><a href="#" class="linkedin-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="linkedin" ></a></li>

                                                                <li><a href="#" class="rss-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="rss" ></a></li>

                                                                <li><a href="#" class="skype-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="skype" ></a></li>

                                                                <li><a href="#" class="dribble-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="dribbble" ></a></li>

                                                                <li><a href="#" class="instagram-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="instagram" ></a></li>

                                                                <li><a href="#" class="flickr-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="flickr" ></a></li>

                                                                <li><a href="#" class="dropbox-metro-but" rel="tooltip" data-toggle="tooltip" data-placement="top"
                                                                    data-original-title="dropbox" ></a></li>
-->
															</ul>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="span4">
                                                    <div class="row-fluid title">
                                                        <h3><i class="bo-icon-question-sign bo-icon-white"></i>Notre site</h3>
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
                                                    <h3><i class="bo-icon-bell bo-icon-white"></i>Termes et conditions</h3>
                                                    <hr />
                                                </div>

                                                <div class="row-fluid">
                                                    <ul class="span7 terms-conditions clearfix">

                                                        <li><a href="http://<?= ROOT_URL ?>/conditions-generale" rel="nofollow">Conditions générale.</a></li>
                                                        <li><a href="http://<?= ROOT_URL ?>/plan-du-site" rel="nofollow">Plan du site</a></li>
                                                        <li><a href="http://<?= ROOT_URL ?>/charte-de-deontologie" rel="nofollow">Charte de déontologie</a></li>


                                                    </ul>

                                                    <div class="span5 copyright clearfix">
                                                        <span>&copy; Copyright <?= date('Y') ?> Myastro, Tous droits réservés</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                <li class="divider-vertical"></li>

                                <li>
                                    
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
                        <a href="http://<?= ROOT_URL ?>">
                            
							<img  itemprop="logo" src="images_voyance/logo_myastro.png"  alt="Voyance Myastro.fr" /></a>
                    </div>

                    <div class="adv-970 pull-right visible-desktop">
                       <!-- <a href="#">
                            <img class="pull-right" src="" data-src="holder.js/970x90" alt="970x90" /></a>-->
                    </div>
                </div>
            </div>
        </div>

    </header>

    <?php include('nav_inc.php'); ?>