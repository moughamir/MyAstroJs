<?php
	$ip       = "213.186.33.87";
	$user     = "mediumpuessai";
	$db       = "mediumpuessai";
	$password = "131045";
	if(!mysql_connect ($ip, $user, $db, $password )){
		die(mysql_error());
	}

?>