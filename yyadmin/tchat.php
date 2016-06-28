<?php
	require('inc/init.php');
	require_once('../lib/Tchat/Tchat.class.php');
	$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$tchat = new Tchat($bdd);

	if(isset($_GET['step']) && $_GET['step'] == 4){
		$infos = array(
			'seer' 		=> $_POST['seer'],
			'name' 		=> $_POST['name'],
			'messages'	=> $_POST['messages'],
			'trigger'	=> $_POST['question']
		);
		if($tchat->save($infos)){
			header('Location: /yyadmin/tchat.php');
		}
		else{
			$bdd->print_error();
		}
	}

	if(isset($_GET['mode'])){
		$mode = $_GET['mode'];
		if($mode == 'disable'){
			$tchat->disable($_GET['id']);
		}
		if($mode == 'enable'){
			$tchat->enable($_GET['id']);
		}
		if($mode == 'draft'){
			$tchat->draft($_GET['id']);
		}
	}
	else{
		$mode = false;
	}
	if($_SESSION['role'] == 'redacteur'){
		$scenarios = $tchat->getall('draft');
	}
	else{
		$scenarios = $tchat->getall();
	}
        
        include('inc/header.php');
	
if(isset($_GET['step']) && $_GET['step'] == 2){
?>
<div class="helper pull-right">
	<p class="bg-info">Aide sur les variables à utiliser</p>
	<ul>
		<li><span class="label label-info">[NAME]</span> : Nom du client</li>
		<li><span class="label label-info">[SEER]</span> : Nom du voyant</li>
		<li><span class="label label-info">[TAROT1]</span> : 1ere carte tirée</li>
		<li><span class="label label-info">[TAROT2]</span> : 2eme carte tirée</li>
		<li><span class="label label-info">[TAROT3]</span> : 3eme carte tirée</li>
		<li><span class="label label-info">[TAROT4]</span> : 4eme carte tirée</li>
		<li><span class="label label-info">[TAROT5]</span> : 5eme carte tirée</li>
	</ul>
</div>
<?php
}
?>
<div class="wrapper">
	<?php
		if(!$mode || $mode != 'new'){
			?>
			<a href="/yyadmin/tchat.php?mode=new&step=1"><i class="glyphicon glyphicon-plus-sign"></i> Créer un nouveau scénario</a>
			<?php
		}
		else{
			if($mode == 'new'){
				?>
				<h2>Créer un nouveau scénario</h2>
				<?php
			}
		}
	?>
	
	<br />
	<?php 
	if(!isset($_GET['mode']) || !in_array($_GET['mode'],array('new','edit')) ){ 
		/*----------------------------------------------*/
		/*					LISTE						*/
		/*----------------------------------------------*/

	?>
	<table class="table table-striped">
		<tr>
			<th>
				Titre
			</th>
			<th>
				Voyant
			</th>
			<th>
				Statut
			</th>
			<th>
				Date de création
			</th>
			<th>
				Action
			</th>
		</tr>
		<?php
			foreach($scenarios as $scenario){
			?>
				<tr>
					<td>
						<?= $scenario->title ?>
					</td>
					<td>
						<?= $scenario->seer_name ?>
					</td>
					<td>
						<?php
							switch($scenario->enable){
								case 0 :
									echo "<p class='label label-danger'>Hors ligne</p>";
								break;
								case 1 :
									echo "<p class='label label-success'>En ligne</p>";
								break;
								case 2 :
									echo "<p class='label label-warning'>Brouillon</p>";
								break;
								default:
									echo "<p class='label label-default'>Erreur / statut inconnu</p>";
								break;
							}
						?>
					</td>
					<td>
						<?= date('d-m-Y',strtotime($scenario->created)) ?>
					</td>
					<td>
						<a href="/yyadmin/tchat.php?mode=edit&id=<?= $scenario->id ?>" class="btn-sm btn-info">
							<i class="glyphicon glyphicon-pencil"></i>
						</a>
						<?php
						if($scenario->enable == 0 || $scenario->enable == 2){
							if($_SESSION['role'] == 'superadministrateur' || $_SESSION['role'] == 'administrateur'){
						?>
								<a href="/yyadmin/tchat.php?mode=enable&id=<?= $scenario->id ?>" class="btn-sm btn-success" title="Passer en linge">
									<i class="glyphicon glyphicon-ok"></i>
								</a>
								<a href="/yyadmin/tchat.php?mode=draft&id=<?= $scenario->id ?>" class="btn-sm btn-warning" title="Passer en brouillon">
									<i class="glyphicon glyphicon-time"></i>
								</a>
						<?php
							}
						}
						if($scenario->enable == 1){
							if($_SESSION['role'] == 'superadministrateur' || $_SESSION['role'] == 'administrateur'){
						?>
								<a href="/yyadmin/tchat.php?mode=disable&id=<?= $scenario->id ?>" class="btn-sm btn-danger" title="Passer en hors ligne">
									<i class="glyphicon glyphicon-minus-sign"></i>
								</a>
								<a href="/yyadmin/tchat.php?mode=draft&id=<?= $scenario->id ?>" class="btn-sm btn-warning" title="Passer en brouillon">
									<i class="glyphicon glyphicon-time"></i>
								</a>
						<?php
							}
						}
						?>
					</td>
				</tr>
			<?php
			}
		?>
	</table>
	<?php
		} // End if not in array(new,edit);

		/*----------------------------------------------*/
		/*					NEW 						*/
		/*----------------------------------------------*/
	if(isset($mode) && $mode == 'new'){
		$step = $_GET['step'];
		// Verification
		if(isset($_POST['sent'])){
			$error = array();
			if(!$_POST['name']){
				$error['name'] = "Veuillez entrer un nom de scénario.";
			}
			if(!$_POST['seer']){
				$error['seer'] = "Veuillez entrer un nom de voyant.";
			}

			
		}

	?>
	<span class="btn <?= ($step == 1) ? 'btn-info' : 'btn-default disabled' ?>"> ETAPE 1 : <span class="label label-default">Infos générales:</span> </span>
	<span class="btn <?= ($step == 2) ? 'btn-info' : 'btn-default disabled' ?>"> ETAPE 2 : <span class="label label-default">Frappe au clavier</span></span>
	<span class="btn <?= ($step == 3) ? 'btn-info' : 'btn-default disabled' ?>"> ETAPE 3 : <span class="label label-default">Vérification</span></span>
	<?php
		if($step == 1){
			?>
			<form action="/yyadmin/tchat.php?mode=new&step=2" method="post">
				<div class="form-group <?= ( isset($error['name']) && isset($_POST['sent'])) ? 'has-error' : '' ?>">
			    	<label for="name">Nom du scénario</label>
			    	<?= isset($error['name']) ? '<span class="label label-danger">'.$error['name'].'</span>' : '' ?>
			    	<input type="text" class="form-control" id="name" name="name" value="<?= isset($_POST['name']) ? $_POST['name'] : '' ?>">
			  	</div>
			  	<div class="form-group <?= ( isset($error['seer']) && isset($_POST['sent'])) ? 'has-error' : '' ?>">
			    	<label for="seer">Choissiez un nom pour le / la voyant(e).</label>
			    	<?= isset($error['seer']) ? '<span class="label label-danger">'.$error['seer'].'</span>' : '' ?>
			    	<input type="text" class="form-control" id="seer" name="seer" value="<?= isset($_POST['seer']) ? $_POST['seer'] : '' ?>">
			  	</div>
			  	<div class="form-group <?= ( isset($error['question']) && isset($_POST['question'])) ? 'has-error' : '' ?>">
			    	<label for="seer">Scénario pour quelle question ?</label>
			    	<?= isset($error['question']) ? '<span class="label label-danger">'.$error['question'].'</span>' : '' ?>
			    	<select class="form-control" name="question">
			    		<option value="default" <?= (isset($_POST['question']) && $_POST['question'] == 'default') ? 'selected' : '' ?>>C'est un scénario général</option>
			    		<optgroup label="Amour">
                        <option value="question_1" <?= (isset($_POST['question']) && $_POST['question'] == 'question_1') ? 'selected' : '' ?>>Vous en avez marre d’être seul(e)</option>
                        <option value="question_2" <?= (isset($_POST['question']) && $_POST['question'] == 'question_2') ? 'selected' : '' ?>>Est-ce qu'il/elle m'aime ?</option>
                        <option value="question_23" <?= (isset($_POST['question']) && $_POST['question'] == 'question_23') ? 'selected' : '' ?>>Il/Elle vous trompe</option>
                        <option value="question_24" <?= (isset($_POST['question']) && $_POST['question'] == 'question_24') ? 'selected' : '' ?>>Vous en aimez un(e) autre</option>
                        <option value="question_22" <?= (isset($_POST['question']) && $_POST['question'] == 'question_22') ? 'selected' : '' ?>>Il/Elle est marié(e)</option>
                        <option value="question_12" <?= (isset($_POST['question']) && $_POST['question'] == 'question_12') ? 'selected' : '' ?>>Il/elle vous ignore</option>
                        <option value="question_11" <?= (isset($_POST['question']) && $_POST['question'] == 'question_11') ? 'selected' : '' ?>>Il/Elle vous a quitté</option>
                        <option value="question_10" <?= (isset($_POST['question']) && $_POST['question'] == 'question_10') ? 'selected' : '' ?>>Il/Elle ne sait pas que vous l'aimez</option>
                    </optgroup>
                    <optgroup label="Argent">
                        <option value="question_701" <?= (isset($_POST['question']) && $_POST['question'] == 'question_701') ? 'selected' : '' ?>>Vous attendez une décision de justice</option>
                        <option value="question_71" <?= (isset($_POST['question']) && $_POST['question'] == 'question_71') ? 'selected' : '' ?>>Vous attendez un contrat</option>
                        <option value="question_72" <?= (isset($_POST['question']) && $_POST['question'] == 'question_72') ? 'selected' : '' ?>>Vous attendez un héritage</option>
                        <option value="question_73" <?= (isset($_POST['question']) && $_POST['question'] == 'question_73') ? 'selected' : '' ?>>Vous attendez un investissement</option>
                        <option value="question_74" <?= (isset($_POST['question']) && $_POST['question'] == 'question_74') ? 'selected' : '' ?>>Vous attendez une bourse</option>
                    </optgroup>
                    <optgroup label="Travail">
                        <option value="question_4" <?= (isset($_POST['question']) && $_POST['question'] == 'question_4') ? 'selected' : '' ?>>Vous attendez une augmentation</option>
                        <option value="question_4" <?= (isset($_POST['question']) && $_POST['question'] == 'question_4') ? 'selected' : '' ?>>Vous attendez d'être muté</option>
                        <option value="question_3" <?= (isset($_POST['question']) && $_POST['question'] == 'question_3') ? 'selected' : '' ?>>Vous chezchez un emploi</option>
                    </optgroup>
			    	</select>
			  	</div>
			  	<div class="form-group">
			    	<input type="submit" class="btn btn-primary" id="sent" name="sent">
			  	</div>
			</form>
			<?php
		}
		elseif($step == 2){
			?>
			<h2><?= $_POST['name'] ?></h2>
			<form action="/yyadmin/tchat.php?mode=new&step=3" method="post" class="display">
				<div class="screen">
					<div class="output">
						<?php
							if(isset($_POST['messages']) && !empty($_POST['messages'])){
								foreach($_POST['messages'] as $msg){
									echo'<div class="row-value"><span class="name pull-left">'.$_POST['seer'].' dit : </span><span class="text pull-left">'.$msg.'</span><div class="controls"><button type="button" class="row-edit btn btn-warning btn-xs pull-right" onclick="return false;"><i class="glyphicon glyphicon-edit pull-right"></i></button><button type="button" href="#" class="pull-right row-remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove pull-right"></i></button></div><i class="clearfix"></i></div>';
								}
							}
						?>
					</div>
					<div class="input">
						<div class="input-group">
						    <input type="text pull-left" name="input-value" class="form-control" placeholder="Tapez le texte comme dans un tchat (skype, msn, etc...)">
						    <span class="input-group-btn">
						    	<button class="btn btn-primary"> Envoyer <i class="glyphicon glyphicon-chevron-right"></i></button>
						    </span>
						</div>
					</div>
				</div>
				<input type="submit" value="Enregistrer mon scénario" name="final-submit" class="btn btn-lg btn-info final-submit center-block" />
			</form>
			<form action="/yyadmin/tchat.php?mode=new&step=3" method="post" id="form-final">
				<?php
				if(isset($_POST['name'])){
					echo '<input type="hidden" name="name" value="'.$_POST['name'].'" />';
				}
				if(isset($_POST['seer'])){
					echo '<input type="hidden" name="seer" value="'.$_POST['seer'].'" data-width="'.(mb_strwidth($_POST['seer']) * 15).'"/>';
				}
				if(isset($_POST['question'])){
					echo '<input type="hidden" name="question" value="'.$_POST['question'].'"/>';
				}
				?>
			</form>
			<?php
		}
		elseif($step == 3){
			?>
			<script type="text/javascript">
				<?php
					$msgs = array();
					foreach($_POST['messages'] as $key => $value){
						$msgs[$key] = array("text" => $value);
					}
				?>
				var msgs = <?= json_encode($msgs)?>;
				var seerName = <?= json_encode($_POST['seer']) ?>
			</script>
			<form action="/yyadmin/tchat.php?mode=new&step=2" method="post" id="form-edit">
				<?php
					if(isset($_POST['name'])){
						echo '<input type="hidden" name="name" value="'.$_POST['name'].'" />';
					}
					if(isset($_POST['seer'])){
						echo '<input type="hidden" name="seer" value="'.$_POST['seer'].'" data-width="'.(mb_strwidth($_POST['seer']) * 15).'"/>';
					}
					if(isset($_POST['question'])){
						echo '<input type="hidden" name="question" value="'.$_POST['question'].'"/>';
					}
					foreach($_POST['messages'] as $key => $value){
						echo '<input type="hidden" name="messages[]" value="'.$value.'" />';
					}
				?>
			</form>
			<form action="/yyadmin/tchat.php?mode=new&step=4" method="post" id="form-final-submit">
				<?php
					if(isset($_POST['name'])){
						echo '<input type="hidden" name="name" value="'.$_POST['name'].'" />';
					}
					if(isset($_POST['seer'])){
						echo '<input type="hidden" name="seer" value="'.$_POST['seer'].'" data-width="'.(mb_strwidth($_POST['seer']) * 15).'"/>';
					}
					if(isset($_POST['question'])){
						echo '<input type="hidden" name="question" value="'.$_POST['question'].'"/>';
					}
					foreach($_POST['messages'] as $key => $value){
						echo '<input type="hidden" name="messages[]" value="'.$value.'" />';
					}
				?>
			</form>
			<div class="container-fluid">
				<div class="row">
					<div class="overlay">
						<div class="alert alert-info"><img src="images/loader-overlay.gif" class="loader" /> Connexion au serveur en cours ...</div>
					</div>
					<div class="screen">
						<div class="output">

						</div>
						<div class="input">
							<span class="waiting invisible"><img src="images/loader.gif" /><?= ucfirst( $_POST['seer'] ) ?> est en train d'écrire ... </span>
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
			<div class="center-block" style="width:45%;">
				<button id="validate-scenario" type="button" class="btn btn-lg pull-left btn-warning" onclick='$("#form-edit").submit();'>Corriger le scénario <i class="glyphicon glyphicon-edit"></i></button>
				<button id="validate-scenario" type="button" class="btn btn-lg pull-left btn-success" onclick='$("#form-final-submit").submit();'>Valider le scénario <i class="glyphicon glyphicon-ok"></i></button>
			</div>
			<?php
		}
	} // end if mode = new

	if($mode == 'edit'){
		if(isset($_POST) && !empty($_POST)){
			$update = $tchat->update($_POST);
			if(!$update){
				?>
				<div class="alert alert-danger"><i class="glyphicon glyphicon-error">Une erreur est survenue. Merci de contacter le webmaster.</i></div>
				<?php
			}else{
				?>
				<div class="alert alert-success"><i class="glyphicon glyphicon-ok">La modification a bien été effectuée.</i></div>
				<?php
			}
		}

		$edit = new Tchat($bdd);
		$edit->get($_GET['id']);
		?>
		<h2><?= $edit->title ?></h2>
		<form action="/yyadmin/tchat.php?mode=edit&id=<?= $_GET['id'] ?>" method="post" class="display">
			<div class="screen">
				<div class="output">
					<?php
						foreach($edit->messages as $msg){
							echo'<div class="row-value"><span class="name pull-left">'.$edit->seer.' dit : </span><span class="text pull-left">'.$msg['text'].'</span><div class="controls pull-right"><button type="button" class="row-edit btn btn-warning btn-xs pull-right" onclick="return false;"><i class="glyphicon glyphicon-edit pull-right"></i></button><button type="button" href="#" class="pull-right row-remove btn btn-danger btn-xs"><i class="glyphicon glyphicon-remove pull-right"></i></button></div><i class="clearfix"></i></div>';
						}
					?>
				</div>
				<div class="input">
					<div class="input-group">
					    <input type="text pull-left" name="input-value" class="form-control" placeholder="Tapez le texte comme dans un tchat (skype, msn, etc...)">
					    <span class="input-group-btn">
					    	<button class="btn btn-primary"> Envoyer <i class="glyphicon glyphicon-chevron-right"></i></button>
					    </span>
					</div>
				</div>
			</div>
			<input type="submit" value="Enregistrer mon scénario" name="final-submit" class="btn btn-lg btn-info final-submit center-block" />
		</form>
		<form action="/yyadmin/tchat.php?mode=edit&id=<?= $_GET['id'] ?>" method="post" id="form-final">
			<?php
				echo '<input type="hidden" name="ID" value="'.$_GET['id'].'" />';
				echo '<input type="hidden" name="name" value="'.$edit->title.'" />';
				echo '<input type="hidden" name="seer" value="'.$edit->seer.'" data-width="'.(mb_strwidth($edit->seer) * 15).'"/>';
			?>
		</form>
		<?php
	}
	?>
</div>