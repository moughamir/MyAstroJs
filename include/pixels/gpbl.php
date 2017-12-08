<?php
$gpbl = $_SESSION['affiliation'] ? : "";
if($gpbl == "gpbl" && isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
	echo '<img src="https://gpbl.go2cloud.org/aff_l?offer_id=98" width="1" height="1"/>';
	$_SESSION['affiliation'] = "";
}
?>