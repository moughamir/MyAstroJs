<?php

// Exemple de envoi instantane de SMS

require('octopush_web_services.inc.php');

$user_login = '************@********';
$api_key = '****************';

$login_account = 'xxxxxxxxxx@octopush-dm.com'; 

$ows = new OWS();

$ows->set_user_login($user_login);
$ows->set_api_key($api_key);
$xml = $ows->get_user_info($login_account);
echo $xml;
echo '<br />';
echo '<textarea style="width:600px;height:600px;">' . $xml . '</textarea>';
?>