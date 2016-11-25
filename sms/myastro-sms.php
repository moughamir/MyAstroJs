<?php

require_once('sms.inc.php');

define('USER_LOGIN', 'contact.kgcom@gmail.com');
define('API_KEY', 'i3XeUE4qUqsYTHOKudfDQAic7k8b7FG0');
define('SMS_SENDER', 'My Astro');

define('DEBUG_MAIL_ADDR', 'thierno.kgcom@gmail.com');
define('SEND_DEBUG_MAIL', '1');

// Booléens permettant de décider quels SMS sont ou non envoyés.
define('SMS_J_PLUS_1_ACTIVATED', TRUE);
define('FLASH_ACTIVATED', TRUE);
define('INSCRIPTION_ACTIVATED', TRUE);
define('SMS_J_PLUS_2_ACTIVATED', FALSE);

//define('INSCRIPTION_0', 'Bienvenue sur Myastro {prenom}! Voici votre code de validation : {ch1}.');
define('INSCRIPTION_1', 'Bienvenue sur My Astro {prenom} ! Vous recevrez votre réponse gratuite dès demain par mail. Pour toute question urgente : 1€/10min au 04.82.53.71.59');

define('J_PLUS_UN_1', 'Bonjour {prenom}, votre réponse gratuite est prête ! Cliquez-ici pour la lire : www.myastro.fr/{ch1}?c={ch2}');
// define('J_PLUS_DEUX_1', 'Je suis votre voyant myAstro. Vous n\'avez pas encore consulté la réponse que je vous ai apportée. Souhaitez vous la recevoir par SMS au 77777?');
define('FLASH_1',  '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir sentimental. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_11', '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant le retour de {ch1} vers vous. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_2',  '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir sentimental avec {ch1}. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_24', '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir sentimental avec {ch1}. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_3',  '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir professionnel. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_4',  '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir professionnel. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');
define('FLASH_73', '{prenom}, suite à la question que vous m\'avez posée, j\'ai des révélations importantes à vous faire concernant votre avenir financier. Contactez-moi au 04.82.53.71.59 pour bénéficier de 10 minutes de consultation à seulement 1€ avec le code S-{ch2}. Votre voyante Cécile de My Astro.');

define('SMS_TEST_NUMBER', '33605526815');
define('INSCRIPTION_DELAY', 0); // temps en secondes avant l'envoi du sms d'inscription.
define('FLASH_DELAY', 21600); // === 6h
define('SMS_3_TIME_HOUR', 17);
define('SMS_4_TIME_HOUR', 13);
$A_sms_texts['inscription']	 = array('1' => INSCRIPTION_1);
$A_sms_texts['j_plus_un']	 = array('1' => J_PLUS_UN_1);
$A_sms_texts['j_plus_deux']	 = array('1' => J_PLUS_DEUX_1);
$A_sms_texts['flash']		 = array(
	'question_1'	 => FLASH_1,
	'question_11'	 => FLASH_11,
	'question_2'	 => FLASH_2,
	'question_24'	 => FLASH_24,
	'question_3'	 => FLASH_3,
	'question_4'	 => FLASH_4,
	'question_73'	 => FLASH_73);

$A_response_files = array(
	'myastro-tarot'		 => 't.php',
	'myastro-tarot-a'	 => 't.php',
	'voyance-gratuite-6' => 'v.php',
	'default'			 => 'v.php');

define('SEND_SMS_FLASH', 1);
define('SEND_SMS_J_PLUS_1', 1);
define('SEND_SMS_J_PLUS_2', 1);

function _send_inscription_sms($sms_text, $number, $firstname, $delay = null)
{
	if (!INSCRIPTION_ACTIVATED)
		return TRUE;

	$user_login			 = USER_LOGIN;
	$api_key			 = API_KEY;
	$A_sms_recipients	 = array($number);
	$A_sms_prenoms		 = array($firstname);
	$sms_type			 = SMS_PREMIUM; // ou encore SMS_STANDARD,SMS_PREMIUM
	$sms_mode			 = DIFFERE;
	$sms_sender			 = SMS_SENDER;

	$sms = new SMS();

	$sms->set_user_login($user_login);
	$sms->set_api_key($api_key);
	$sms->set_sms_mode($sms_mode);
	$sms->set_sms_text($sms_text);
	$sms->set_sms_recipients($A_sms_recipients);
	$sms->set_recipients_first_names($A_sms_prenoms);
	$sms->set_sms_type($sms_type);
	$sms->set_sms_sender($sms_sender);
	$sms->set_option_transactional(1);

	$sending_time = time() + intval($delay);

	$sms->sending_date = $sending_time;

	$sms->send();
}

function _send_jplusun_sms($sms_text, $A_numbers, $A_first_names, $A_additional_fields_1, $A_additional_fields_2, $sending_date)
{
	if (!SMS_J_PLUS_1_ACTIVATED)
	{
		return TRUE;
	}
	
	$user_login	 = USER_LOGIN;
	$api_key	 = API_KEY;
	$sms_type	 = SMS_PREMIUM; // ou encore SMS_STANDARD,SMS_PREMIUM
	$sms_mode	 = DIFFERE;
	$sms_sender	 = SMS_SENDER;

	$sms = new SMS();

	$sms->set_user_login($user_login);
	$sms->set_api_key($api_key);
	$sms->set_sms_mode($sms_mode);
	$sms->set_sms_text($sms_text);
	$sms->set_sms_recipients($A_numbers);
	$sms->set_recipients_first_names($A_first_names);
	$sms->set_sms_fields_1($A_additional_fields_1);
	$sms->set_sms_fields_2($A_additional_fields_2);
	$sms->set_sms_type($sms_type);
	$sms->set_sms_sender($sms_sender);
	$sms->set_option_transactional(1);

	$sms->sending_date = $sending_date;

	$sms->send();
}

function _send_flash_sms($sms_text, $number, $sending_time)
{

	if (!FLASH_ACTIVATED)
	{
		return TRUE;
	}

	$user_login	 = USER_LOGIN;
	$api_key	 = API_KEY;
	$sms_type	 = SMS_PREMIUM; // ou encore SMS_STANDARD,SMS_PREMIUM
	$sms_mode	 = DIFFERE;
	$sms_sender	 = SMS_SENDER;

	$sms = new SMS();

	$sms->set_user_login($user_login);
	$sms->set_api_key($api_key);
	$sms->set_sms_mode($sms_mode);
	$sms->set_sms_text($sms_text);
	$sms->set_sms_recipients(array($number));
	$sms->set_sms_type($sms_type);
	$sms->set_sms_sender($sms_sender);
	$sms->set_option_transactional(1);
	$sms->sending_date = $sending_time;

	$result = $sms->send();
	return $result;
}

// REGLES DIVERSES
// - On n'envoi pas de SMS quand le pays est "Autre" (==ZZ)
?>