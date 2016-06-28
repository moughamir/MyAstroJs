<?php
	require('inc/init.php');

	$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$themesQuestion = array(
		'question_1'	=> 'amour',
		'question_10'	=> 'amour',
		'question_11'	=> 'amour',
		'question_12'	=> 'amour',
		'question_2'	=> 'amour',
		'question_22'	=> 'amour',
		'question_23'	=> 'amour',
		'question_24'	=> 'amour',
		'question_3'	=> 'travail',
		'question_4'	=> 'travail',
		'question_5'	=> 'Famille',
		'question_6'	=> 'Action réalisé',
		'question_71'	=> 'argent',
		'question_72'	=> 'argent',
		'question_73'	=> 'argent',
		'question_74'	=> 'argent',
		'question_701'	=> 'argent',
		);
	$date 		= (isset($_REQUEST['startDate']) ) 	? $_REQUEST['startDate'] 	: date('Y-m-d'); 
	$orderby 	= (isset($_GET['orderby'])) 		? $_GET['orderby'] 			: 'internal_id' ;
	$order 		= (isset($_GET['order'])) 			? $_GET['order'] 			: 'DESC' ;
	$startDate	= (isset($_POST['startDate'])) 		? substr($_POST['startDate'],0,10) 		: date('Y-m-d') ;
	$endDate	= (isset($_POST['endDate'])) 		? substr($_POST['endDate'],0,10) 		: date('Y-m-d') ;
	$internal_id= (isset($_POST['internal_id'])) 	? $_POST['internal_id'] 	: NULL;

	// On fait d'abord la même query sans GROUP BY pour avoir le nombre de doublons
	$query 		= 'SELECT user.internal_id, user.dateNaissance, user.prenom, user.sexe, user.signeAstrologique, user.tel, user.pays, user.conjoint, user.signe2, user.questionDate, user.questionContent, rep.responses
				FROM ag_users AS user
				LEFT OUTER JOIN form_users_responses AS rep ON user.internal_id = rep.id_user
				WHERE 1 ';
	$query .= ($startDate && !$internal_id) ? 'AND user.questionDate >= "'.$startDate.'" ': '';
	$query .= ($endDate && !$internal_id) ? 'AND user.questionDate <= "'.$endDate.'" ': '';
	$query .= ($internal_id) ? 'AND user.internal_id = "'.$internal_id.'" ': '';
	$res = $wpdb->get_results($query);
	$total = $wpdb->num_rows;



	$query 		= 'SELECT user.internal_id, user.dateNaissance, user.prenom, user.sexe, user.signeAstrologique, user.tel, user.pays, user.conjoint, user.signe2, user.questionDate, user.questionContent, rep.responses
				FROM ag_users AS user
				LEFT OUTER JOIN form_users_responses AS rep ON user.internal_id = rep.id_user
				WHERE 1 ';
	$query .= ($startDate && !$internal_id) ? 'AND user.questionDate >= "'.$startDate.'" ': '';
	$query .= ($endDate && !$internal_id) ? 'AND user.questionDate <= "'.$endDate.'" ': '';
	$query .= ($internal_id) ? 'AND user.internal_id = "'.$internal_id.'" ': '';
	$query .= ' GROUP BY user.email
				ORDER BY '.$orderby.' '.$order;
	$results 	= $wpdb->get_results($query);
	$totalQuestions = $wpdb->num_rows;

	$queryTotal = 'SELECT user.questionDate, user.questionContent,COUNT(*) as nb FROM ag_users as user WHERE 1 ';
	$queryTotal .= ($startDate && !$internal_id) ? 'AND `questionDate` >= "'.$startDate.'" ': '';
	$queryTotal .= ($endDate && !$internal_id) ? 'AND `questionDate` <= "'.$endDate.'" ': '';
	$queryTotal .= 'GROUP BY questionContent ';
	$queryTotal .= 'ORDER BY nb DESC';

	$totalParQuestion = $wpdb->get_results($queryTotal);
        
        include('inc/header.php');

?>
	<form action="" method="post" class="form-inline">
		<h2>
			Réponses aux formulaires
			<div class="pull-right">
				<div class="form-group">
					<label for="startDate">Du </label>
					<input type="text" name="startDate" id="startDate" value="<?= $startDate ?>" class="datepicker form-control form-inline" />
				</div>
				<div class="form-group">
					<label> au </label>
					<input type="text" name="endDate" id="endDate" value="<?= $endDate ?>" class="datepicker form-control form-inline" />
				</div>
				<button class="btn btn-primary btn-small" type="submit" >
					<i class='glyphicon glyphicon-search'></i>
				</button>
			</div>
		</h2>
	</form>
	<form action="" method="post" class="form-horizontal">
		<div class="well">
			<div class="form-group">
                <label for="endDate" class="col-sm-4 control-label">Rechercher un ID interne :</label>
                <div class="col-sm-5">
					<input type="text" name="internal_id" class="form-control" />
				</div>
				<div class="col-sm-2">
					<button class="btn btn-primary btn-block">
						Valider&nbsp; 
						<i class="glyphicon glyphicon-circle-arrow-right"></i>
					</button>
				</div>
            </div>
        </div>
	</form>
	<div class="space"></div>
	<?php
		if(in_array($_SESSION['role'],$groupeRole['admin'])){
	?>
	<div class="panel panel-primary">
		<h4 class="panel-heading">
			Volume des questions posées
		</h4>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>Question</th>
					<th>Nombre</th>
				</tr>
			</thead>
			<tbody>
				<?php
					if(!empty($totalParQuestion)){
						foreach($totalParQuestion as $row){
							?>
							<tr>
								<td><?= $row->questionContent ?></td>
								<td><?= $questionArray[$row->questionContent] ?></td>
								<td><?= $row->nb ?></td>
							</tr>
							<?php
						}
					}
				?>
			</tbody>
		</table>
	</div>
	<div class="space"></div>
	<?php 
		}
	?>
	<div class="panel panel-default">
		<h4 class="panel-heading">
			<?= $totalQuestions ?> résulats. ( <?= $total-$wpdb->num_rows ?> Doublon(s) non affiché(s) )
		</h4>
		<table class="table table-striped table-bordered">
			<thead><tr>
				<th>
					<a href="responses.php?orderby=internal_id&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'internal_id') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i> 
						ID Client
					</a>
				</th>
				<th>
					<a href="responses.php?orderby=questionDate&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'prenom') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i> 
						Date
					</a>
				</th>
				<th>
					<a href="responses.php?orderby=prenom&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'prenom') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i> 
						Prénom | Âge
					</a> 
				</th>
				<th>
					<a href="responses.php?orderby=sexe&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'sexe') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i>&nbsp;<!--
						-->Genre
					</a>
				</th>
				<th>
					<a href="responses.php?orderby=signeAstrologique&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'signeAstrologique') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i>
						Signe Astro
					</a>
				</th>
				<!--<th>
					Téléphone
				</th>-->
				<th>
					Pays
				</th>
				<th>
					Prénom conjoint
				</th>
				<th>
					Signe astro conjoint
				</th>
				<th>
					<a href="responses.php?orderby=questionContent&order=<?= (isset($_GET['order']) && $_GET['order'] == 'DESC') ? 'ASC' : 'DESC' ?>">
						<i class="glyphicon <?= (isset($_GET['order']) && $_GET['order'] == 'DESC' && $_GET['orderby'] == 'questionContent') ? 'glyphicon-chevron-up' : 'glyphicon-chevron-down' ?>"></i> 
						Question / Domaine
					</a>
				</th>
				<th width="250">
					Réponse
				</th>
			</tr></thead>
			<tbody>
				<?php
				foreach($results as $res){
					?>
				<tr class="<?= ( date('Y') - substr($res->dateNaissance,0,4) < 18 && date('Y') - substr($res->dateNaissance,0,4) > 0) ? 'danger' : '' ?>">
					<td>
						<?= (isset($res->internal_id)) ? $res->internal_id : '-'?>
					</td>
					<td>
						<?= (isset($res->questionDate)) ? $res->questionDate : '-'?>
					</td>
					<td>
						<?= (isset($res->prenom)) ? $res->prenom : '-'?> |
						<?= date('Y') - substr($res->dateNaissance,0,4)?> ans
					</td>
					<td>
						<?= (isset($res->sexe)) ? $res->sexe : '-'?>
					</td>
					<td>
						<?= (isset($res->signeAstrologique)) ? $res->signeAstrologique : '-'?>
					</td>
					<!--<td>
						<?= (isset($res->tel)) ? $res->tel : '-'?>
					</td>-->
					<td>
						<?= (isset($res->pays)) ? $res->pays : '-'?>
					</td>
					<td>
						<?= (isset($res->conjoint)) ? $res->conjoint : '-'?>
					</td>
					<td>
						<?= (isset($res->signe2)) ? $res->signe2 : '-'?>
					</td>
					<td>
						<?= (isset($res->questionContent)) ? $res->questionContent : '-'?>
						/
						<?= (isset($res->questionContent)) ? $themesQuestion[$res->questionContent] : '-'?>
					</td>
					<td width="250">
						<?php
						 if(isset($res->responses)){
							$responses = unserialize($res->responses);
							echo $responses['question'];
							if(!empty($responses['situation'])){
								echo '<p>Je vis cette situation comme : <b>'.$responses['situation'].'</b></p>';
							}
						 }
						 ?>
					</td>
				</tr>
					<?php
				}
				?>
			</tbody>
		</table>
	</div>	
<?php
    include('inc/footer.php');
?>