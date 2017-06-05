<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<title>Noel</title>
	<meta name="description" content="" />
	<script src="js/jquery-1.11.js"></script>
	<meta name="robots" content="noindex,nofollow" />
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="http://www.myastro.fr/css/bootstrap3.min.css">
	<link rel="stylesheet" href="css/prenoel.css">
	<link rel=stylesheet href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" type="text/css" media=all />

	<?php include('include/header_inc_landing.php'); ?>
	<script src="js/myscript.js"></script>
</head>
<body>
	<?php
        include('include/tracking-mailing.php'); 
    ?>
	<script src="js/neige.js"></script>
	<div class="top-nav">
		<div class="nav-content">
			<a href="<?= PROTOCOL.'://'.ROOT_URL ?>/charte-de-deontologie" rel="nofollow" target="_blank">Charte déontologique</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/conditions-generale" rel="nofollow" target="_blank">Conditions générales</a> | <a href="<?= PROTOCOL.'://'.ROOT_URL ?>/paiement-securise" rel="nofollow" target="_blank">Paiement sécurisé</a> 
		</div>
	</div>
	<div class="container">
		<div class="row header">
			<img class="img-responsive" alt="MyAstro" src="images_landing/logo-rose.png">
			<div class="col-md-12 text-center txt-style">
				<p>C'est bientot No&euml;l, que vous réserve<br/>
					cette fin d'année: <span>amour, travail, argent</span> ???<br/>
					Faites-vous rappeller immédiatement par téléphone
				</p>
			</div>
		</div>
		<div class="row title">
			<div class="col-md-12 text-center text-upper">
				<h1>vos <span>10</span> premières minutes à <span>1€</span> seulement !!!</h1>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 main-1">
				<div class="row">
					<div class="hidden-xs hidden-sm col-md-12 text-center text-upper main-1-left">
						<p>
							vous avez besoin de réponses sur votre avenir,<br/>qu'il soit proche ou lointain ?<br/>
							avec myastro, tchattez en direct et gratuitement<br/>avec des voyants sérieux, disponibles et à votre écoute.
						</p>
						<p>
							amour, travail, argent ou famille,<br/>quelles que soient vos interrogations,<br/>n'hésitez pas à en faire part à nos médiums au cours<br/>
							d'une séance de voyance gratuite par tchat.
						</p>
					</div>
					<div class="hidden-xs hidden-sm col-md-12 main-2 main-2-left main-2-left-1">
						<div class="col-md-12 text-center text-upper">
							<p>
								si vous souhaitez consulter un voyant<br/>immédiatement par téléphone, faites vous<br/>
								rappeler immédiatement en remplissant<br/>votre nom et numéro de téléphone
							</p>
						</div>
						<div class="col-md-12 text-center">
							<h2>Comment ça marche ?</h2>
						</div>
						<div class="col-md-12 text-center">
							<div class="row">
								<div class="col-md-6 first">
									Je remplie mon prénom et<br/> 
									mon numéro de téléphone
								</div>
								<div class="col-md-6 last">
									Je suis rappelé(e) <br/>immédiatement
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-12 main-2-left-2">
						<div class="col-xs-6 col-sm-3 text-center">
							<img src="images_landing/voyants/marc.png" alt="" width="90" height="64"/><span>Marc</span>
						</div>
						<div class="col-xs-6 col-sm-3 text-center">
							<img src="images_landing/voyants/aline.png" alt="" width="90" height="64" /><span>Aline</span>
						</div>
						<div class="col-xs-6 col-sm-3 text-center">
							<img src="images_landing/voyants/francis.png" alt="" width="90" height="64" /><span>Francis</span>
						</div>
						<div class="col-xs-6 col-sm-3 text-center">
							<img src="images_landing/voyants/benedicte.png" alt="" width="90" height="64" /><span>Bénédicte</span>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="row main-2">
					<div class="col-md-11 col-md-push-1 main-2-right">
						<div class="col-md-12 text-center text-upper">
							<h2>découvrez ce que l'avenir<br/> vous reserve</h2>
							<hr>
						</div>
						<div class="col-md-12 text-center">
							<p>Un de nos voyants vous<br/> rappelle <span>immédiatement</span><br/></p>
						</div>
						<div class="col-md-12 text-center">
							<?php
							$support_obj = "PRENOEL DRI";
							$campagne    = "PRE NOEL";
							include("include/send-mailing.php");
							if(!isset($_POST['demande_rappel']) && !isset($_SESSION['demanderappel'])){
							?>
								<form id=""  action="" method="post" class="form-horizontal">
									<input type="hidden" name="source" value="<?php echo $source; ?>" />
									<input type="hidden" name="gclid" value="<?php echo $gclid; ?>"/>
									<input type="hidden" name="idastro" value="<?php echo $idastro; ?>"/>
									<input type="text" name="antisp" value="" style="display:none">
									<div class="form-group">
										<input class="form-control" type="text" id="name" name="prenom" placeholder="Mon prénom" value="<?php echo $prenom; ?>" required>
									</div>
									<div class="form-group">
										<input class="form-control" id="tel" name="tel" type="tel" placeholder="Mon numéro de téléphone" pattern="(\+?\d[- .]*){10,18}" value="<?php echo $tel; ?>" required>
									</div>
									<div class="form-group">
										<select  name="pays" id="pays" class="form-control" required>
											<option value="" selected>Mon pays</option>
											<option value="Belgique +32">Belgique</option>
											<option value="Canada +1">Canada</option>
											<option value="Luxembourg +352">Luxembourg</option>
											<option value="Suisse +41">Suisse</option>
											<option value="France Métropolitaine +33">France Métropolitaine</option>
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
										<input class="btn btn-default" type="submit" name="valider" value="&Ecirc;TRE RAPPEL&Eacute;(E)">
									</div>
								</form>
								<?php
							}
							?>
						</div>
					</div>
					<div class="col-sm-12 col-md-11 col-md-push-1 main-1 main-1-right">
						<div class="row">
							<div class="col-sm-4 text-center">
								<img src="images_landing/amour.png" alt="" width="105" height="105"/><br/><span class="text-upper">amour</span>
							</div>
							<div class="col-sm-4 text-center">
								<img src="images_landing/travail.png" alt="" width="105" height="105"/><br/><span class="text-upper">travail</span>
							</div>
							<div class="col-sm-4 text-center">
								<img src="images_landing/argent.png" alt="" width="105" height="105"/><br/><span class="text-upper">argent</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid footer text-center">
		<div class="row">
			<div class="col-md-2 col-md-push-1 one">
				<p>Voyants <strong>sérieux</strong> reconnus<br/> pour leur savoir faire</p>
			</div>
			<div class="col-md-2 col-md-push-1 two">
				<p>Consultations 100% <br/><strong>discrètes & anonymes</strong></p>
			</div>
			<div class="col-md-2 col-md-push-1 three">
				<p>Interprétation <br/><strong>immédiate</strong></p>
			</div>
			<div class="col-md-2 col-md-push-1 four">
				<p>My Astro <strong>leader <br/>depuis 2007</strong></p>
			</div>
			<div class="col-md-2 col-md-push-1 five">
				<p>Paiement <br/><strong>sécurisé par CB</strong></p>
			</div>
		</div>
	</div>
	<div class="container footer-2">
		<div class="row">
			<div class="col-xs-12 text-center">
				<?php include('include/footer_copyright.php'); ?>
			</div>
		</div>
	</div>

	<script src="js/required.js"></script>
</body>
</html>