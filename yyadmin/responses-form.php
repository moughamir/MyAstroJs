<?php
	require('inc/init.php');
	$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

	if(isset($_POST['id_form'])){
		$text 	= $_POST['text'];
		$id 	= $_POST['id_form'];
		$update = $wpdb->update('form_responses',
						array(
							'text'	=> $text
						),
						array(
							'id'	=> $id
						)
					);
	}
        
        
    include('inc/header.php');

?>
<div class="wrapper">
<?php
	if(isset($update) && $update != false){
?>
	<div class="alert alert-success">
		<p>Le formulaire a été modifié avec succès.</p>
	</div>
<?php
	}
	elseif(isset($update) && $update == false ){
?>
	<div class="alert alert-warning">
		<p>Une erreur est survenue lors de la modification.</p>
	</div>
<?php
	}

	// Si on a pas demandé de modification
	if(!isset($_GET['id'])){
		$results = $wpdb->get_results('SELECT * FROM form_responses GROUP BY `trigger` ORDER BY `trigger` ASC');
?>

	<table class="table table-bordered">
		<tr>
			<th>
				TITRE
			</th>
			<th>
				DECLANCHEUR
			</th>
			<th>
				TEXTE
			</th>
			<th>
				EDITER
			</th>
		</tr>
		<?php
			foreach($results as $rep){
		?>
			<tr>
				<td>
					<?= utf8_encode($rep->title) ?>
				</td>
				<td>
					<?= $rep->trigger ?>
				</td>
				<td>
					<?= substr(strip_tags($rep->text),0,500) ?>...
				</td>
				<td>
					<?php
						if($rep->sexe != '0'){
							$autreSexe = ($rep->sexe == 'F') ? 'H' : 'F' ;
							$autreID = $wpdb->get_var('SELECT id FROM form_responses WHERE `trigger` = "'.$rep->trigger.'" AND sexe = "'.$autreSexe.'"');
							$genderImg = ($rep->sexe == 'H') ? 'male.png' : 'female.png';
							$alterGender = ($rep->sexe == 'H') ? 'female.png' : 'male.png';
							echo '<a href="/yyadmin/responses-form.php?id='.$rep->id.'"><img src="'.ROOT_URL.'/images/'. $genderImg .'"/></a>';
							echo '<a href="/yyadmin/responses-form.php?id='.$autreID.'"><img src="'.ROOT_URL.'/images/'. $alterGender .'"/></a>';
						}
						else{
							echo '<a href="/yyadmin/responses-form.php?id='.$rep->id.'"><i class="glyphicon glyphicon-pencil"></i>Editer</a>';
						}
					?>
				</td>
			</tr>
		<?php
			}
		?>
	</table>


<?php
	}
	else{
		$text = $wpdb->get_var('SELECT text FROM form_responses WHERE id="'.$_GET['id'].'"');
		?>
		<h3><i class="glyphicon glyphicon-pencil"></i> Editer une réponse.</h3>
		<form action="" method="post">
			<input type="hidden" value="<?= $_GET['id'] ?>" name="id_form" />
			<textarea class="tinymce" rows="25" name="text">
				<?= $text ?>
			</textarea>
			<p><input type="submit" value="Modifier" class="btn btn-primary" /></p>
		</form>
		<?php
	}
?>
</div>