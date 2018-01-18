<?php
$gpbl = $_SESSION['affiliation'] ? : "";
$formulaireGPBL     = $_SESSION['source'];
if($gpbl == "gpbl" && isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
	$urls_conversion = array(
		'tarot-tchat-aff7' => ' https://gpbl.go2cloud.org/aff_l?offer_id=119',
		'other' => ' https://gpbl.go2cloud.org/aff_l?offer_id=98',
	);
	if(isset($urls_conversion[$formulaireGPBL])) {
		echo '<img src="'.$urls_conversion[$formulaireGPBL].'" width="1" height="1"/>';
		$_SESSION['affiliation'] = "";
		unset($_SESSION['conversion']);
	} else {
		echo '<img src="'.$urls_conversion["other"].'" width="1" height="1"/>';
		$_SESSION['affiliation'] = "";
		unset($_SESSION['conversion']);
	}
}
?>