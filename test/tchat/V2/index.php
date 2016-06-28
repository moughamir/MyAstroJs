<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

require(realpath('../../../lib/Autoloader.php'));
require(realpath('../../../inc/') . '/config.php');
Autoloader::register();

$tchat = new Tchat\Tchat(new Bdd\Bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
$tchat->support = 'voyance';
$tchat->trigger = 'question_1';
$user = 	array(
				'name' => 'julien',
				'email' => 'julien.kgcom@gmail.com',
				'phone' => '0677943066',
				'sexe' => 'M',
				'code' => 'CODE',
				'firstnameJoint' => 'Alexia',
			);
$infos = 	array(
				'user' => $user,
				'cartes' => array('Le bateleur', 'Le charlot', 'L\'empereur', 'Le Monde', 'L\'Amour')
			);
$conversation = $tchat->flattenConversation($tchat->getConversation($infos));


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro</title>
<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript">
	var msgs = <?= json_encode($conversation)?>;
	var seerName = <?= json_encode($tchat->scenario[0]->seer_name) ?>
</script>
<script type="text/javascript" src="script.js"></script>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<div class="overlay">
				<div class="alert alert-info"><img src="loader-overlay.gif" class="loader" /> Connexion au serveur en cours ...</div>
			</div>
			<div class="screen">
				<div class="output">

				</div>
				<div class="input">
					<span class="waiting invisible"><img src="loader.gif" /><?= ucfirst( $tchat->scenario[0]->seer_name ) ?> est en train d'écrire ... </span>
					<div class="input-group">
					    <input type="text pull-left" class="form-control" readonly placeholder="Vous êtes en mode gratuit, vous ne pouvez pas répondre.">
					    <span class="input-group-btn">
					    	<button class="btn btn-default disabled" type="button"> Envoyer <i class="glyphicon glyphicon-chevron-right"></i></button>
					    </span>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>