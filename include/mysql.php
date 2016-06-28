<?php
	$db_host = "localhost";
	$DB_Username = "myastro";
	$Db_pass = "fYJaWB2RqKZ9fJ";
	$Db_name = "myastroslimit";
	mysql_connect ("$db_host", "$DB_Username", "$Db_pass") or die ("Impossible de se connecter à mysql");
	mysql_select_db ("$Db_name") or die ("pas de base de données");
?>