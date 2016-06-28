<?php
// Exemple de envoi instantane de SMS

require('sms.inc.php');

$user_login = '************@********';
$api_key = '****************';

$first_name = 'Prenom'; 
$last_name = 'Nom';
$raison_sociale = 'Raison'; 
$alert_bound = '243';
$alert_sms_type = 'FR';
	
$sms = new SMS();

$sms->set_user_login($user_login);
$sms->set_api_key($api_key);
$xml = $sms->create_sub_account($first_name, $last_name, $raison_sociale, $alert_bound, $alert_sms_type);
echo $xml;
echo '<br />';
echo '<textarea style="width:600px;height:600px;">' . $xml . '</textarea>';
?>