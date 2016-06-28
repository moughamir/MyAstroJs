<?php
// Exemple de envoi instantane de SMS

require('sms.inc.php');

$user_login = '************@********';
$api_key = '****************';

$login_account = 'xxxxxxxxxxxxxxxxxxx@sub-accounts.com'; 
$nb_sms = '1000'; 
$sms_type = 'FR'; 
	
$sms = new SMS();
$xml = $sms->credit_sub_account($user_login, $api_key, $login_account, $nb_sms, $sms_type);
echo $xml;
echo '<br />';
echo '<textarea style="width:600px;height:600px;">' . $xml . '</textarea>';
?>