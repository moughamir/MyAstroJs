<?php
 error_reporting(E_ALL);
 ini_set("display_errors", 1);

 	include('../../lib/Tchat/Tchat.class.php');
	include('../../include/tools.php');
	$bdd 	= new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$tchat 	= new Tchat($bdd);
	$tchat->getByTrigger('question_23');
	$tarots = array(
		1 => 'Le bateleur',
		2 => 'Le charlot',
		3 => 'L\'empereur',
		4 => 'La force',
		5 => 'L\'imperatrice',
		6 => 'La roue de la fortune',
		7 => 'Le soleil',
		8 => 'La justice',
		9 => 'L\'Amoureux',
		10 => 'Le Monde',
		11 => 'Le Fou',
		12 => 'Tempérance'
	);

	$cartes = array();
	foreach($_SESSION['cards'] as $card){
		$cartes[] = $tarots[substr($card,0,-4)];
	}

	$infos = array(
		"cartes" 	=> $cartes,
		"user"		=> array(
			"firstname"      => $_SESSION['firstname'],
			"sexe"           => $_SESSION['sexe'],
			"birthdate"      => $_SESSION['birthdate'],
			"mail"           => $_SESSION['email'],
			"phone"          => $_SESSION['phone'],
			"question"       => $_SESSION['question'],
			"firstnameJoint" => $_SESSION['firstnameJoint'],
			"birthdateJoint" => $_SESSION['birthdateJoint'],
			"code"           => base_convert($_SESSION['user_id'],10,32)
		),
		"voyant"	=> array(
			"name"  => $tchat->getSeer()
			)
	);
	$messages = array_walk_recursive($tchat->messages, 'replaceAll',$infos);

	/*$mail = $_SESSION['email'];
	if ($mail) {
		$content = file_get_contents("../mail/merci-voyance.html");
			$to      =  $mail;
		    $subject = 'Merci de votre inscription à myastro';
		    $message = $content;
		    $headers = 'From: contact@myastro.fr' . "\r\n" .
		    'Reply-To: contact@myastro.fr' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();

		    mail($to, $subject, $message, $headers);
	}*/

	function replaceAll(&$item, $key, $infos){
		if($key == 'text'){
			$item = str_replace('[NAME]',$infos['user']['firstname'],$item);
			$item = str_replace('[NAME2]',$infos['user']['firstnameJoint'],$item);
			$item = str_replace('[SEER]',$infos['voyant']['name'],$item);
			$item = str_replace('[TAROT1]',$infos['cartes'][0],$item);
			$item = str_replace('[TAROT2]',$infos['cartes'][1],$item);
			$item = str_replace('[TAROT3]',$infos['cartes'][2],$item);
			$item = str_replace('[TAROT4]',$infos['cartes'][3],$item);
			$item = str_replace('[TAROT5]',$infos['cartes'][4],$item);
			$item = str_replace('[CODE]',$infos['user']['code'],$item);
		}

	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<title>Tarot gratuit amour: apprenez-en plus sur votre futur avec Myastro</title>
<meta name="description" content="Vous avez des doutes sur certains aspects de votre vie et voulez être rassuré? Faites appel à Myastro." />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<script type="text/javascript" src="../../js/jquery-1.11.js"></script>
<script type="text/javascript">
	var msgs = <?= json_encode($tchat->messages)?>;
	var seerName = <?= json_encode($tchat->getSeer()) ?>
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
					<span class="waiting invisible"><img src="loader.gif" /><?= ucfirst( $tchat->getSeer() ) ?> est en train d'écrire ... </span>
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