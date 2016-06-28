<?php
	require_once('inc/tools.php');
	require_once('inc/header.php');
	$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

	if(isset($_POST['submitted'])){
		if(isset($_POST['mail']) && $_POST['mail'] != $_SESSION['mail']){
			// On update le mail
			$update = $wpdb->update(
				'users',
				array('mail' => $_POST['mail']),
				array('id' => $_SESSION['id'])
			);
			if($update){
				$_SESSION['mail'] = $_POST['mail'];
				$success = 'Votre mail a bien été mis à jour.';
			}
		}

		if(isset($_POST['password']) && !empty($_POST['password']) && !empty($_POST['lastpw'])){
			if($_POST['password'] == $_POST['confirm']){
				$lastPassword = $wpdb->get_var('SELECT password FROM users WHERE id="'.$_SESSION['id'].'"');
				if($lastPassword != md5($_POST['lastpw'])){
					$warning = 'Ancien mot de passe incorrect.';
				}
				elseif(md5($_POST['password']) != $lastPassword){
					$update = $wpdb->update(
						'users',
						array('password' => md5($_POST['password'])),
						array('id' => $_SESSION['id'])
					);
					if($update){
						$success = 'Votre mot de passe a bien été mis à jour.';
					}
				}else{
					$warning = 'Aucun changement avec votre ancien mot de passe n\'a été détecté.';
				}
			}
			else{
				$warning = 'Les 2 mots de passe ne correspondent pas.';
			}
		}
	}

?>
<div id="fil">
	Vous êtes ici : &raquo; <a href="accueil.php">Accueil</a> &raquo; Gestion du compte
</div>
<div class="wrapper">
	<?php
		if(!empty($success)){
			echo "<p class='alert alert-success'>".$success."</p>";
		}
		if(!empty($warning)){
			echo "<p class='alert alert-warning'>".$warning."</p>";
		}
	?>
	<form action="" method="post">
		<div class="form-group">
	    	<label for="mail">Changer de mail : </label>
	    	<input type="text" value="<?= isset($_SESSION['mail']) ? $_SESSION['mail'] : '' ?>" class="form-control" name="mail" id="mail" >
	  	</div>
	  	<div class="form-group">
	    	<label for="lastpw">Ancien de mot de passe : </label>
	    	<input type="password" value="<?= isset($_POST['lastpw']) ? $_POST['lastpw'] : '' ?>" class="form-control" name="lastpw" id="lastpw" placeholder="Ancien mot de passe">
	  	</div>
	  	<div class="form-group">
	    	<label for="password">Nouveau de mot de passe : </label>
	    	<input type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" class="form-control" name="password" id="password" placeholder="Nouveau mot de passe">
	  	</div>
	  	<div class="form-group">
	    	<label for="confirm">Confirmer le mot de passe : </label>
	    	<input type="password" value="<?= isset($_POST['confirm']) ? $_POST['confirm'] : '' ?>" class="form-control" name="confirm" id="confirm" placeholder="Confirmer">
	  	</div>
	  	<input type="submit" value="Changer" name="submitted" class="btn btn-primary" />
	</form>
</div>