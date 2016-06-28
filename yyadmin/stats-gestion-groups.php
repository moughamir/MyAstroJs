<?php
	require('inc/init.php');
	$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$tracker   = new Tracker($bdd);
	$users = $bdd->get_results('SELECT * FROM users');
	if(isset($_POST['name']) && !empty($_POST['name'])){
		$tracker->addGroup(array('name' => $_POST['name'],'id_user' => $_POST['user']));
	}
        
        include('inc/header.php');
?>
<div class="wrapper container-fluid">
	<h2>Ajouter un Groupe </h2>
	<form action="" method="post">
		<label for="name">Nom du groupe</label>
		<input type="text" name="name" id="name" class="form-control" />
		<label for="users"> Rattacher l'utilisateur au groupe : </label>
		<select name="user" id="users" class="form-control">
			<?php
				foreach($users as $user){
					echo '<option value="'.$user->id.'">'.$user->prenom.' | '.$user->role.'</option>';
				}
			?>
		</select>
		<input type="submit" value="Ajouter" class="btn btn-primary center-block" />
	</form>

	<table class="table table-bordered table-hovered">
		<tr>
			<th>ID</th>
			<th>Nom</th>
			<th>User</th>
		</tr>
		<?php
			foreach($tracker->getGroups() as $group){
				?>
				<tr>
					<td><?= $group->id ?></td>
					<td><?= $group->name ?></td>
					<td><?= $bdd->get_var('SELECT prenom FROM users WHERE id = "'.$group->id_user.'"'); ?></td>
				</tr>
				<?php
			}
		?>
</div>
<?php
    include('inc/footer.php');
?>