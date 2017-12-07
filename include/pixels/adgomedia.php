<?php
$adgomedia = $_SESSION['affiliation'] ? : "";
if($adgomedia == "adgomedia"  && isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
	$kgestionIdAff = $_SESSION["kgestion_id"];
	echo '<img src="http://tbl.tradedoubler.com/report?organization=2137782&event=369181&leadNumber='.$kgestionIdAff.'" width="1" height="1" alt="pixel" />';
	$_SESSION['affiliation'] = "";
}
?>