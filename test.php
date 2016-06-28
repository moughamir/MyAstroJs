<?php
	include('include/tools.php');

	echo 'Insertion... <br/>';

	$email = "thierno.kgcom@gmail.com";
	$params = array(
                  'DATEMODIF'       => date("m/d/Y"),
                  'SOURCE'          => "Manuel",
                  'FIRSTNAME'       => "Thierno",
                  'NUMEROTELEPHONE' => "0605526815"
        );

	$insertion = $smartFocus->insert($email,$params);

	echo "JobId => ".$insertion;

?>