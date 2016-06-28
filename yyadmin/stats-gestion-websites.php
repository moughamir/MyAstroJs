<?php
	require('inc/init.php');
	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	if(isset($_POST['addWebsite'])){
		if($tracker->addWebsite($_POST['name'],$_POST['url'])){
			echo "<div class='alert alert-success'>Le site a bien été ajouté</div>";
		}
		else{
			echo "<div class='alert alert-danger'>Une erreur est survenue lors de l'ajout</div>";
		}
	}
        
	include('inc/header.php');
?>
<div class="wrapper container-fluid">
	<h2>Ajouter un Site web</h2>
	<form action="" method="post">
		<label for="name">Nom Du Site</label>
		<input type="text" class="form-control" name="name" id="name" />
		<label for="url">Url <small>( sans http )</small> </label>
		<input type="text" class="form-control" name="url" id="url"/><br />
		<input type="submit" class="btn btn-primary center-block" value="Ajouter" name="addWebsite">
	</form>
	<table class="table table-bordered table-hovered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Url</th>
		</tr>
	<?php 
		foreach($tracker->getWebsiteList() as $site){
			?>
				<tr>
					<td><?= $site->id ?></td>
					<td><?= $site->name ?></td>
					<td><?= $site->url ?></td>
				</tr>
			<?php
		}
	?>
	</table>	
</div>
<?php
    include('inc/footer.php');
?>