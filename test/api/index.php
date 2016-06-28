<?php

// Url Ajout RDV : http://api.myastro.fr/addAppointement/id/456/price/666
// Url pour connaitre le support : http://api.myastro.fr/getSupport/id/456/
$url = 'http://api.myastro.fr/getuser/id/888888/email/contact.kgcom@gmail.com';
$query = file_get_contents($url);


if($query){
	$r = json_decode($query);
} else {
	// There is a header status différent than 200. Find why now :/
}

var_dump($r);
	
?>