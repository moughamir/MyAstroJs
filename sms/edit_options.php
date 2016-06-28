<?php
// Exemple de envoi instantane de SMS

require('octopush_web_services.inc.php');

$user_login = '************@********';
$api_key = '****************';

$sms_type = SMS_WORLD; // ou encore SMS_STANDARD,SMS_PREMIUM
$sms_mode = INSTANTANE; // ou encore DIFFERE
$sms_sender = 'Octopush';

$ows = new OWS();

$ows->set_user_login($user_login);
$ows->set_api_key($api_key);
$ows->set_sms_alert_bound(1111);
$ows->set_sms_alert_type(SMS_STANDARD);
$ows->set_answer_email('un@emailvalide.com');

$xml = $ows->edit_options();

echo $xml;
echo '<br />';
echo '<textarea style="width:600px;height:600px;">' . $xml . '</textarea>';
?>