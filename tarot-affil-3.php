<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
	<title>Tarot de l'amour : laissez les lames parler | Myastro</title>
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
<body class="voyance-tarot-amour-1">
<div class="subbody">
    <div class="top-nav">
        <div class="nav-content">
            <a href="http://www.myastro.fr/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="http://www.myastro.fr/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="http://www.myastro.fr/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
        </div>
    </div>
    <div class="main">
        <div class="left-part">
            <div class="logo">
                <img src="images_landing/logo-myastro.png" alt="" width="220" height="89" />
            </div>
            <div class="content">
                <h1>Tarot de <strong>l'amour</strong></h1>
                <div class="txt-content">
                <p>Que disent les lames sur votre avenir amoureux ? Avec notre tarot de l'amour, découvrez ce que votre destin sentimental vous réserve.</p>
                <p>En toute simplicité, tirez les lames et laissez nos experts en divination interpréter votre tirage. Grâce à notre tarot de l'amour en ligne, n'attendez pas qu'il soit trop tard pour obtenir des réponses.</p>
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
								    echo '<img src="images_landing/carte-tarot-amour.png" class="tarot-dos tarot-' . $i . '" data-pos="' . $datapos . '"/>';
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

                        <div class="sub-bg">
                            <img src="images_landing/sub-bg-tarot-amour.png" alt="" width="" height="" />
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
                	<li class="li3"><strong>3</strong> <span>Je reçois un appel pour découvrir mon interprétation</span></li>
                	<li class="li4"><strong>4</strong> <span>Je reçois mon interprétation par mail sous 24h</span></li>
                </ul>

                <img src="images_landing/voyance-tarot-amour.jpg" width="577" height="111" alt="Voyance tarot gratuit"/>
            </div>
    	</div>


		   <div class="right-part">

            
            
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
                                <input type="hidden" name="source" value="tarot-affil-3" />
                                <input type="hidden" name="method" value="affil-mini" />
                                <input type="hidden" name="support" value="tarot"/>
                                <input type="hidden" name="theme_id" value="question_2">
                                <input type="hidden" name="affiliation" value="affil2">
                                <div class="form-w-one li-form">
                                    <label>Mon prénom</label>
                                    <input type="text" id="name" name="prenom" value="<?php echo $_GET['aff_firstname']; ?>" required>
                                </div>
                                 <div class="form-w-one li-form sonprenom-amour">
                                    <label>Son prénom</label>
                                    <input type="text" id="son_prenom" name="conjoint">
                                </div>
                                 <div class="form-w-one li-form">
                                    <label>Mon e-mail</label>
                                    <input id="email" type="email" name="email" value="<?php echo $_GET['aff_email']; ?>" required>
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
                                    <input class="btn_button btn-full-one" type="submit" name="valider" value="Découvrir mon interprétation" >
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

  

	   <script src="js/jquery-1.11.js"></script>
	    <script src="js/voyance-tarot-gratuit.js"></script>
	 	<script src="framework/bootstrap/js/bootstrap.min.js"></script>
	    <script src="framework/bootstrap/js/bootstrap-hover-dropdown.min.js"></script>
	    <script src="js/formValidator.js"></script>
		<script src="js/infoBulle.js"></script>

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


