<?php
	require_once('inc/tools.php');
	require_once('inc/header.php');
	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	if(isset($_POST['addRDV'])){
		if(preg_match('#[a-zA-Z]+#', $_POST['userID'])){
			// C'est un base 32
			$userID = base_convert($_POST['userID'],32,10);
		}
		else{
			$userID = $_POST['userID'];
		}

		$add = $tracker->addRdv($userID,$_POST['amount']);
		if(	$add !== false && $add !== NULL ){
			$insert = '<div class="alert alert-success">Ajout réalisé avec succès ! </div>';
			$insert .= '<div class="alert alert-info">';
			$insert .= '<p>Cet utilisateur provient de <b>'.$add->sitename.'</b></p>';
			$insert .= '<p>Source : <b>'.$add->sourcename.'</b> | Url : <b><a href="http://'.$add->url.'" target="_blank">'.$add->url.'</a></b> | Campagne : <b>'.$add->campain.'</b></p>';
			$insert .= '</div>';
		}elseif($add == NULL){
			$insert = '<div class="alert alert-success">Ajout réalisé avec succès !</div>';
			$insert .= '<div class="alert alert-warning">Cependant l\'utilisateur n\'a pas été tracké, impossible d\'en déduire la provenance</div>';
		}else{
			$insert = '<div class="alert alert-danger"> Une erreur est survenue lors de l\'ajout <a href="mailto:julien.kgcom@gmail.com">contacter le webmaster</a></div>';
		}
	}
?>
<script type="text/javascript">
	window.onload = function() {
	  var input = document.getElementById("userID").focus();
	}
</script>
<div class="wrapper">
	<?= (isset($insert))? $insert : '' ?>
	<form action='' method='post'>
		<div class="input-group center-block standard-caption">
			<label for="userID">ID Client : </label>
			<input type="text" class="form-control" name="userID" id="userID" /><br />
			<label for="amount">Montant de la consultation :</label><br />
			<input class="form-control" name="amount" id="amount" /><br />
			<p><input type="submit" class="btn btn-primary center-block" value="Envoyer" name="addRDV"></p>
		</div>
	</form>
</div>