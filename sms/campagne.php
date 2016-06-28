<?php
// Exemple de envoi instantane de SMS

require('sms.inc.php');

$user_login = 'thierno.kgcom@gmail.com';
$api_key = 'i3XeUE4qUqsYTHOKudfDQAic7k8b7FG0'; 

$sms_recipients = array('+33605526815');
$sms_text = 'test d\'envoi à ' . date('Y-m-d H:i:s') . ' '; //{ch1} {ch2}

$sms_type = SMS_PREMIUM; // ou encore SMS_STANDARD,SMS_PREMIUM
$sms_mode = INSTANTANE; // ou encore DIFFERE
$sms_sender = 'Myastro';

$sms = new SMS();

$sms->set_user_login($user_login);
$sms->set_api_key($api_key);
$sms->set_sms_mode($sms_mode);
$sms->set_sms_text($sms_text);
$sms->set_sms_recipients($sms_recipients);
$sms->set_sms_type($sms_type);
$sms->set_sms_sender($sms_sender);
$sms->set_sms_request_id(uniqid());
$sms->set_option_with_replies(0);
//$sms->set_sms_fields_1(array(''));
//$sms->set_sms_fields_2(array('a'));
$sms->set_option_transactional(1);
$sms->set_sender_is_msisdn(0);
//$sms->set_date(2016, 4, 17, 10, 19); // En cas d'envoi différé.
$sms->set_request_keys('TRS');
$xml = $sms->send();
echo $xml;
echo '<br />';
echo '<textarea style="width:600px;height:600px;">' . $xml . '</textarea>';
?>