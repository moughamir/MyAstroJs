<?php
	require('inc/init.php');
	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	if(isset($_POST['addSource'])){
		if($tracker->addSource($_POST['website'],$_POST['source'],$_POST['url'])){
			echo "<div class='alert alert-success'>La source a bien été ajoutée</div>";
		}
		else{
			echo "<div class='alert alert-danger'>Une erreur est survenue lors de l'ajout</div>";
		}
	}
        
        include('inc/header.php');
?>

<div class="wrapper container-fluid">
	<h2>Ajouter une Source</h2>
	<form action="" method="post">
		<label for="websiteID">Site :</label>
		<select name="website" id="websiteID" class="form-control">
			<?php 
				foreach($tracker->getWebsiteList() as $site){
					echo '<option value="'.$site->id.'">'.$site->name.'</option>';
				}
			?>
		</select>
		<label for="source">Nom de la source <small><i>( ex : formulaire-6)</i></small></label>
		<input type="text" class="form-control" name="source" id="source"/>
		<label for="url">Url <small><i>( sans http:// )</i></small></label>
		<input type="text" class="form-control" name="url" id="url"/><br />
		<input type="submit" class="btn btn-primary center-block" value="Ajouter" name="addSource">
	</form>

	<table class="table table-bordered table-hovered">
		<tr>
			<th>ID</th>
			<th>Site</th>
			<th>Nom de la source</th>
			<th>Url</th>
		</tr>
		<?php 
		foreach($tracker->getSourcesList() as $source){
			?>
				<tr>
					<td><?= $source->id ?></td>
					<td><?= $source->sitename ?></td>
					<td><?= $source->source ?></td>
					<td><a href="<?= $source->url ?>"><?= $source->url ?></a></td>
				</tr>
			<?php
		}
	?>
</div>
<?php
    include('inc/footer.php');
?>