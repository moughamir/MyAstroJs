<?php
	require_once('inc/tools.php');
	require_once('inc/header.php');
	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	$startDate = (isset($_POST['startDate'])) ? $_POST['startDate'] : date('Y-m-d 00:00:00');
	$endDate   = (isset($_POST['endDate'])) ? $_POST['endDate'] : date('Y-m-d H:i:s');
	$stats = $tracker->getStatsForLeadManager($_SESSION['id'], $startDate, $endDate);

	//var_dump('<pre>',$stats,'</pre>');

?>
<div class="wrapper">
	<form action="" method="post">
	<h4>
		Du <input type="text" name="startDate" data-start='start' value="<?= $startDate ?>" class="datepicker form-control form-inline" /> au <input type="text" name="endDate" value="<?= $endDate ?>" class="datepicker form-control form-inline" />
		<button class="btn btn-primary btn-small" >
			<i class='glyphicon glyphicon-search'></i>
		</button>
	</h4>
	<div class="graphique">
		<h3>Statistiques des leads :</h3>
		<div class="alert alert-info">
			<p>Le tableau ci-dessous comprend des statistiques avec les <strong>displays</strong> comme point de départ. Il est donc possible qu'un display ( ou lead ) le <strong>10 mai</strong> génère un rdv le <strong>13 mai</strong> mais ne soit pas présent dans le tableau si la période sélectionnée est du <strong>10 au 12 mai.</strong> </p>
		</div>
		<div id="graph-campains">
			<table class="table table-bordered">
				<tr>
					<th>Groupe de trackers</th>
					<th>Source</th>
					<th>Nombre de Displays</th>
					<th>Nombre de Leads</th>
					<th>Nombre de Rdv</th>
					<th>Panier Moyen</th>
					<th>Total</th>
				</tr>
				<?php 
					foreach($stats as $name => $data){
						foreach($data['displays']['SSID'] as $id_source => $array){
							?>
							<tr>
								<td><?= $name ?></td>
								<td><?= $id_source . ' - ' . $tracker->getWebsite($id_source) ?></td>
								<td><?= count($array) ?></td>
								<td><?= count($data['leads'][$id_source]['id_user']) ?></td>
								<td><?= $data['appointement'][$id_source]['total'] ?></td>
								<td><?= $data['appointement'][$id_source]['average'] ?> &euro;</td>
								<td><?= $data['appointement'][$id_source]['amount'] ?> &euro;</td>
							</tr>
							<?php
						}
					}
				?>
			</table>
		</div>
	</div>
</div>
<?php
    include('inc/footer.php');
?>