<?php
	require('inc/init.php');
        
	include('inc/header.php');
?>
<div id="fil">
	Vous êtes ici : &raquo; <a href="accueil.php">Accueil</a> &raquo; Gestion des comptes
</div>
<div class="wrapper">

<?php
	$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$query = 'SELECT * FROM users as user WHERE 1';
	$results = $wpdb->get_results($query);
	$added = false;
	$error = array();
	if(isset($_POST['submit'])){
		$nom = $_POST['name'];
		$prenom = $_POST['firstname'];
		$login = $_POST['newlogin'];
		$role = $_POST['role'];
		$mail = $_POST['mail'];
		$password = $_POST['password'];
		$confirm = $_POST['password-confirm'];

		if(empty($nom)){
			$error['name'] = 'Nom obligatoire';
		}
		if(empty($prenom)){
			$error['firstname'] = 'Prénom obligatoire';
		}
		if(empty($login)){
			$error['login'] = 'Login obligatoire';
		}
		if(empty($role)){
			$error['role'] = 'Rôle obligatoire';
		}
		if(empty($mail)){
			$error['mail'] = 'E-mail obligatoire';
		}
		if(empty($password)){
			$error['password'] = 'Mot de passe obligatoire';
		}
		if(!empty($password) && $password != $confirm){
			$error['password'] = 'Les 2 mots de passe ne correspondent pas.';
		}
		if(empty($error)){
			$insert = $wpdb->insert(
						'users',
						array(
							'nom' => $nom,
							'prenom' => $prenom,
							'mail'	=> $mail,
							'role'	=> $role,
							'login'	=> $login,
							'password' => md5($password),
							'enable' => 1,
							'created' => date('Y-m-d'),
							'updated' => date('Y-m-d')
						)
				);
			if($insert){
				$added = true;
			}
		}
	}
?>
</br>
<h3>Gestion des comptes</h3>
<?php
if($added == true){
?>
	<div class="alert alert-success">
		L'utilisateur a été ajouté avec succès !
	</div>
<?php
}
?>
<a href="#" id="toggle-form-user"><i class="glyphicon glyphicon-user"></i>Créer un compte</a>
<div class="form-user <?= (isset($_POST['submit']) && !$added ) ? '' : 'hidden' ?>">
	<?php
		if(!empty($error)){
			echo '<div class="alert alert-danger">';
			foreach($error as $key => $value){
				echo $value . '</br>';
			}
			echo '</div>';
		}
		?>
	<form action="" method="POST">
		<div class="form-group">
	    	<label for="name">Nom : </label>
	    	<input type="text" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>" class="form-control" name="name" id="name" placeholder="Nom...">
	  	</div>
	  	<div class="form-group">
	    	<label for="firstname">Prénom : </label>
	    	<input type="text" value="<?= isset($_POST['firstname']) ? $_POST['firstname'] : '' ?>" class="form-control" name="firstname" id="firstname" placeholder="Prénom...">
	  	</div>
	  	<div class="form-group">
	    	<label for="mail">Email : </label>
	    	<input type="text" value="<?= isset($_POST['mail']) ? $_POST['mail'] : '' ?>" class="form-control" name="mail" id="mail" placeholder="Email...">
	  	</div>
	  	<div class="form-group">
	    	<label for="login">Login : </label>
	    	<input type="text" value="<?= isset($_POST['login']) ? $_POST['login'] : '' ?>" class="form-control" name="newlogin" id="login" placeholder="Login...">
	  	</div>
	  	<div class="form-group">
	    	<label for="password">Mot de passe : </label>
	    	<input type="password" value="<?= isset($_POST['password']) ? $_POST['password'] : '' ?>" class="form-control" name="password" id="password" placeholder="Mot de passe...">
	  	</div>
	  	<div class="form-group">
	    	<label for="password-confirm">Confirmer le mot de passe : </label>
	    	<input type="password" value="<?= isset($_POST['password-confirm']) ? $_POST['password-confirm'] : '' ?>" class="form-control" name="password-confirm" id="password-confirm" placeholder="Mot de passe...">
	  	</div>
	  	<div class="form-group">
	    	<label for="role">Rôle : </label>
	    	<select name="role" class="form-control">
	    		<?php
	    			foreach($menuRole as $role => $menu){
	    				$selected = (isset($_POST['role']) && $_POST['role'] == $role) ? 'selected' : '' ;
	    				echo '<option value="'.$role.'" '.$selected.'>'.$role.'</option>';
	    			}
	    		?>
	    	</select>
	  	</div>
	  	<input type="submit" value="Ajouter" name="submit" class="btn btn-primary" />
	</form>
</div>
<table class="table table-bordered table-hover">
	<tr>
		<th>
			ID
		</th>
		<th>
			Nom
		</th>
		<th>
			Prénom
		</th>
		<th>
			Login
		</th>
		<th>
			Email
		</th>
		<th>	
			Rôle
		</th>
		<th>
			Actif
		</th>
	</tr>
	<?php
		foreach($results as $user){
	?>
	<tr>
		<td>
			<?= $user->id ?>
		</td>
		<td>
			<?= $user->nom ?>
		</td>
		<td>
			<?= $user->prenom ?>
		</td>
		<td>
			<?= $user->login ?>
		</td>
		<td>
			<?= $user->mail ?>
		</td>
		<td>
			<?= $user->role ?>
		</td>
		<td>
			<input type="checkbox" class="switcher" data-idUser="<?= $user->id ?>" data-on-text="Actif" data-off-text="Désactivé" <?= ($user->enable==1) ? 'checked' : '' ?> />
		</td>
	</tr>
	<?php
	}
	?>
</table>

</div>