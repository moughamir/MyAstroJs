<?php
// yyadmin/exports.php

    require('inc/init.php');
    
    $startDate = (isset($_POST['startDate'])) ? $_POST['startDate'] : date('Y-m-d',time()-60*60*24);
    $endDate   = (isset($_POST['endDate'])) ? $_POST['endDate'] : date('Y-m-d',time()-60*60*24);
    
    include('inc/header.php');
?>

    <h2>Exports pour le CRM</h2>
    
    <form action="" method="post" class="form-horizontal">
        <div class="well">
            <div class="row form-group">
                <label for="startDate" class="col-sm-4 control-label">Du</label>
                <div class="col-sm-5">
                    <input type="text" class="sqldatepicker form-control" id="startDate" name="startDate" data-start="start" value="<?= $startDate ?>" />
                </div>
            </div>
            <div class="row form-group">
                <label for="endDate" class="col-sm-4 control-label">Au</label>
                <div class="col-sm-5">
                    <input type="text" class="sqldatepicker form-control" id="endDate" name="endDate" value="<?= $endDate ?>" />
                </div>
            </div>
            <div class="row form-group">
                <label for="website" class="col-sm-4 control-label">Site</label>
                <div class="col-sm-5">
                    <select name="website" class="form-control">
                        <?php foreach ($sourceArray as $key=>$name){
                            echo '<option value="'.$key.'">'.$name.'</option>';
                        } ?>
                    </select>
                </div>
            </div>
        </div>

    <!-- <div class="alert alert-warning">Les exports sont désactivés quelque temps. Je rajoute une information dans le fichier exporté.</div> -->
    <p class="text-center">
        <a href="" class="trigger-export" data-country="FR" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : France"><img src="<?= ADMIN_IMG ?>france.png" alt=""></a>
        <a href="" class="trigger-export" data-country="BE" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : Belgique"><img src="<?= ADMIN_IMG ?>belgium.png" alt=""></a>
        <a href="" class="trigger-export" data-country="CA" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : Canada"><img src="<?= ADMIN_IMG ?>canada.png" alt=""></a>
        <a href="" class="trigger-export" data-country="CH" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : Suisse"><img src="<?= ADMIN_IMG ?>switzerland.png" alt=""></a>
        <a href="" class="trigger-export" data-country="LU" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : Luxembourg"><img src="<?= ADMIN_IMG ?>luxembourg.png" alt=""></a>
        <a href="" class="trigger-export" data-country="DOMCOM" data-toggle="tooltip" data-placement="top" title="Télécharger l'export client : DOM COM"><img src="<?= ADMIN_IMG ?>domtom.png" alt=""></a>
        <a href="" class="trigger-export" data-country="APPELS_ENTRANTS" data-toggle="tooltip" data-placement="top" title="Télécharger l'export pour appels entrants"><img src="<?= ADMIN_IMG ?>incoming_call.png" alt="" width="128"></a>
    </p>
</form>
<?php 
	$nb_leads_date = 'nb_leads'. date('d-m-y',time() - 60*60*24);
	$leads_date = 'appel_entrants'. date('d-m-y', time() - 60*60*24);
?>
<div class="row well">
<form method='POST' class="form-horizontal">
	
	<select name="selection_type" id="selection_type" onchange="maj();">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="nb_leads">nb_leads</option>
		<!--<option value="appel_entrants_myastro_adwords">appel_entrants_myastro_adwords</option>
		<option value="appel_entrants_myastro_facebook">appel_entrants_myastro_facebook</option>
		<option value="appel_entrants_myastro_naturel">appel_entrants_myastro_naturel</option>
		<option value="appel_entrants_vpt">appel_entrants_vpt</option>
		<option value="appel_entrants_mini_site">appel_entrants_mini_site</option>-->
		<option value="appel_entrants_global">appel_entrants_global</option>
		<option value="source_myastro">source_myastro</option>
	</select>
	<select name="selection_date" id="selection_date" onchange="maj();">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<?php for($i=1;$i<31;$i++) {
			echo '<option value="d'. $i .'">' . date('d-m-y', time() - $i*60*60*24 ) . '</option>';
		} ?>
	</select>
	<a id="url_file" href="">Charger</a>
	<!--<p>Chargement test à j+0</p>
	<select name="selection_type2" id="selection_type2" onchange="maj2();">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="appel_entrants_myastro_adwords">appel_entrants_myastro_adwords</option>
		<option value="appel_entrants_myastro_facebook">appel_entrants_myastro_facebook</option>
		<option value="appel_entrants_myastro_naturel">appel_entrants_myastro_naturel</option>
		<option value="appel_entrants_vpt">appel_entrants_vpt</option>
		<option value="appel_entrants_mini_site">appel_entrants_mini_site</option>
	</select>
	<select id="selection_date2" onchange="maj2();">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<?php /*for($i=0;$i<31;$i++) {
			echo '<option value="dt'. $i .'">' . date('d-m-y', time() - $i*60*60*24) . '</option>';
		} */?>
	</select>
	<select id="selection_date21" onchange="maj2();">
		<option>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option>-soir</option>
		<option>-matin</option>
		<option>-11:00</option>
		<option>-12:00</option>
		<option>-13:00</option>
		<option>-14:00</option>
		<option>-15:00</option>
		<option>-16:00</option>
		<option>-17:00</option>
		<option>-18:00</option>
		<option>-19:00</option>
		<option>-20:00</option>
	</select>
	<a id="url_file2" href="">Charger</a>-->
</form>
</div>
<div class="row well">
<form>
	<span>Convertisseur base 10 à base 32 : </span><input id="input1" type="text"></input><input type="button" value="Convertir" onclick="conv1032()"></input><span id="res1"></span><br/>
	<span>Convertisseur base 32 à base 10 : </span><input id="input2" type="text"></input><input type="button" value="Convertir" onclick="conv3210()"></input><span id="res2"></span><br/>
</form>	
<script type="text/javascript">

function maj() {
	var liste=document.getElementById('selection_type');
	var liste2 = document.getElementById('selection_date');
	var file_url=document.getElementById('url_file');
	file_url.href="cdj/" + liste.options[liste.selectedIndex].text + liste2.options[liste2.selectedIndex].text + ".csv";
}

function maj2() {
	var liste=document.getElementById('selection_type2');
	var liste2 = document.getElementById('selection_date2');
	var liste3 = document.getElementById('selection_date21');
	var file_url=document.getElementById('url_file2');
	file_url.href="cdjj/" + liste.options[liste.selectedIndex].text + liste2.options[liste2.selectedIndex].text + liste3.options[liste3.selectedIndex].text + ".csv";
}

function conv1032() {
	var res = document.getElementById('res1');
	var finalRes = document.getElementById('input1').value;
	res.innerHTML = parseInt(finalRes).toString(32);
}

function conv3210() {
	var res = document.getElementById('res2');
	var finalRes = document.getElementById('input2').value;
	res.innerHTML = parseInt(finalRes,32);
}

</script>
<?php
    include('inc/footer.php');
?>