<?php
	include('/var/www/myastro/www/include/tools.php');
	$smartFocus = new SmartFocus(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST),new Compteur());
	$smartFocus->processTask();
?>