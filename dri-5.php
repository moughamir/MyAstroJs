<?php
include("include/tracking-mail.php");
?>
	<!DOCTYPE html>
	<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
	    <head>
	        <title>Voyance chat gratuit : Essayez la voyance gratuite par tchat</title>
	    	<meta name="description" content="" />
	        <script src="js/jquery-1.11.js"></script>
	        <meta name="robots" content="noindex,nofollow" />
	        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	        <meta name="viewport" content="width=device-width">
	        <script type="text/javascript" src="./voyance-gratuite-6_files/bootstrap.min.js"></script><!-- +++ -->
	        <link rel="stylesheet" href="http://www.myastro.fr/css/bootstrap3.min.css">
	        <link rel="stylesheet" href="sstyle_landing.css" />
	        <link rel="stylesheet" href="css/dri.css">
	        <link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />

	        <?php include('include/header_inc_landing.php'); ?>
	        <script src="js/myscript.js"></script>
                <!-- Tag de conversion TABOOLA -->
                <script> window._tfa = window._tfa || []; _tfa.push( {notify : "action",name :" successful_conversion"} ); </script>
                <script src="//cdn.taboola.com/libtrc/ikomvoyancesc/tfa.js"></script>
                <!-- Fin Tag de conversion TABOOLA -->
	    </head>
	<body class="voyance-telephone-1 dri-3 dri-5">
	    <div class="top-nav">
	        <div class="nav-content"><div class="links">
	            <a href="http://www.myastro.fr/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | 
				<a href="http://www.myastro.fr/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | 
				<a href="http://www.myastro.fr/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
			</div></div>
	    </div>
	    <div class="main">
	        <div class="right-part right-part-merci">
	        	<div class="container-fluid text-center top-header">
	        		<div class="row">
	        			<div class="col-lg-12">
	        				<img class="img-responsive" src="images_landing/logo-dri5.png" alt="MyAstro">
	        			</div>
	        		</div>
	        	</div>
	        	<div class="container-fluid header-container">
	        		<div class="row">
	        			<p>
			        		<span class="header-txt-1">Votre demande a bien été prise en compte</span><br/>
			        		<span class="header-txt-2">Vous recevrez votre réponse par email dés demain de la part de votre voyant </span><br/>
			        		<span class="header-txt-3">faites-vous rappeler immédiatement par téléphone</span><br/>
			        		<span class="header-txt-4"><img class="img-responsive" src="images_landing/tarif-min-dri5.png" alt="MyAstro"></span>
				        </p>
	        		</div>
	        	</div>
	        	<div class="container-fluid content-container">
					<div class="row">
						<aside class="widget" id="form-merci-voyance">
							<div class="comment-ca-marche col-lg-6 hidden-xs hidden-sm">
								<div class="row">
									<div class="col-lg-12">
										<p>si vous souhaitez consulter un voyant  immédiatement par téléphone, faites vous rappeler immédiatement en remplissant votre nom et numéro de téléphone</p>
									</div>
									<div class="col-lg-12">
										<h2 class="merci-voyance-h2">Comment ça marche ? </h2>
								<div class="faq">
									<div class="cols-3 first">
										Je remplis mon prénom et<br/> 
										mon numéro de téléphone
									</div>
									<div class="cols-3 last">
										Je suis rappelé(e) <br/>immédiatement
									</div>
									<div class="clear"></div>
								</div>
									</div>
								</div>  
							</div>
							<div id="" class="widget-content col-xs-12 col-sm-12 col-lg-6">
								<img class="img-promo" src="images_landing/promo-dri5.png">
								<div class="visible-part form-part form-part-one">
									<?php
										include("include/send-mail.php");
										if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel']) && !empty($id_astro)){
									?>
									<form id=""  action="" method="post">
										<input type="text" name="antisp" value="" style="display:none">
										<div class="form-w-one li-form">
											<input type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?php echo $prenom; ?>" required>
										</div>

										 <div class="form-w-one li-form">
											<input id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required>
										</div>

										<div class="form-w-one li-form selectpays">
											<label>Votre pays </label>
											<select class="cnt-right" name="pays" id="pays" required="">
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
											<input class="" type="submit" name="valider" value="" onclick="">
										</div>
									</form>
									<?php
									}
									?>
								</div>
								</div>
						</aside>
					</div>				   
						<div class="row row-voyant">
							<div class="voyant-membre voyant-merci-voyance">  
								<div class="cols4 mg-right"><img src="images_landing/voyants/laura.png" alt="" width="178" height="128" />L<span>aura</span><br/></div>
								<div class="cols4 mg-right"><img src="images_landing/voyants/pierre.png" alt="" width="178" height="128" />P<span>ierre</span><br/></div>
								<div class="cols4 mg-right"><img src="images_landing/voyants/claude.png" alt="" width="178" height="128" />C<span>laude</span><br/></div>
								<div class="cols4"><img src="images_landing/voyants/marianne.png" alt="" width="178" height="128" />M<span>arianne</span><br/></div>
							 </div>
						</div>
				</div>
	        </div>
	    </div>
	        <div class="clear"></div>
	    <div class="subfooter">
	        <ul>
	            <li class="first"><strong>Voyants sérieux reconnus<br/> pour leur savoir faire</strong></li>
	            <li class="second"><strong>Consultations 100% <br/>discrètes & anonymes</strong></li>
	            <li class="third"><strong>1&euro; les 10 premières<br/>minutes</strong></li>
	            <li class="third fourth"><strong>My Astro leader <br/>depuis 2007</strong></li>
	            <li class="fifth"><strong>Paiement <br/>sécurisé</strong></li>
	            <div class="clear"></div>
	        </ul>
	        <div class="clear"></div>
	    </div>

	    <div class="footer">
	        <?php include('include/footer_copyright.php'); ?>
	    </div>

<script src="js/required.js"></script>
<!--Pixel Affiliation -->
<?php include_once('include/pixels/affiliation.php');?>

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