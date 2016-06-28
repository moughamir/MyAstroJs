<?php

/**
 * Librairie de services complémentaires via POST HTTP
 *
 * Auteur Yoni Guimberteau yoni@octopush.com
 *
 * copyright (c) 2013 Yoni Guimberteau
 * licence : utilisation, modification, commercialisation.
 * L'auteur ainsi se decharge de toute responsabilite
 * concernant une quelconque utilisation de ce code, livre sans aucune garantie.
 * Il n'est distribue qu'a titre d'exemple de fonctionnement du module POST HTTP de OCTOPUSH,
 * Vous pourrez toutefois telecharger une version actualisee sur www.octopush.com
 */
include ('config.inc.php');

class OWS
{

	public $user_login; // string
	public $api_key;   // string
	public $answer_email; // string
	public $sms_alert_bound; // int
	public $sms_alert_type; // FR ou XXX

	public function __construct()
	{
		$this->user_login	 = '';
		$this->api_key		 = '';

		$this->answer_email		 = -1;
		$this->sms_alert_bound	 = -1;
		$this->sms_alert_type	 = -1;
	}

	/*
	 * Fonction credit_sub_account
	 * 
	 * Make the request -> token -> request from server to server to execute the transfer
	 * 
	 */

	public function credit_sub_account($user_login, $api_key, $sub_account_email, $sms_amount, $sms_type)
	{
		$domain	 = DOMAIN;
		$path	 = PATH_CREDIT_SUB_ACCOUNT_TOKEN;
		$port	 = PORT;

		$data = array(
			'user_login'		 => $user_login,
			'api_key'			 => $api_key,
			'sub_account_email'	 => $sub_account_email
		);

		$xml_return	 = trim($this->_httpRequest($domain, $path, $port, $data));
		/* 	 $xml_return = '<?xml version="1.0" encoding="UTF-8"?>
		  <octopush>
		  <token>F76C90C4F269289575363AE34BF6E399</token>
		  </octopush>'; */
		libxml_use_internal_errors(true);
		if (($xml		 = simplexml_load_string($xml_return)) !== false)
		{
			$res	 = (array) $xml->xpath('/octopush');
			$tt		 = ((array) $res[0]);
			$token	 = $tt['token'];
		}
		else
		{
			return 'An error as occured.';
		}

		/* Now, the token is ready, we can ask for the transfer to be done */

		$domain	 = DOMAIN;
		$path	 = PATH_CREDIT_SUB_ACCOUNT;
		$port	 = PORT;

		/* We check that the type of the sms belong to the usual values */
		if ($sms_type != 'FR' && $sms_type != 'XXX')
		{
			$sms_type = 'FR';
		}

		$data = array(
			'user_login'		 => $user_login,
			'api_key'			 => $api_key,
			'sub_account_email'	 => $sub_account_email,
			'sms_number'		 => $sms_amount,
			'sms_type'			 => $sms_type,
			'token'				 => $token
		);

		$xml_return = trim($this->_httpRequest($domain, $path, $port, $data));
		return $xml_return;
	}

	public function edit_options()
	{
		$domain	 = DOMAIN;
		$path	 = PATH_EDIT_OPTIONS;
		$port	 = PORT;

		$data = array(
			'user_login' => $this->user_login,
			'api_key'	 => $this->api_key);

		if ($this->answer_email !== -1)
			$data['answer_email']	 = $this->answer_email;
		if ($this->sms_alert_bound !== -1)
			$data['sms_alert_bound'] = $this->sms_alert_bound;
		if ($this->sms_alert_type !== -1)
			$data['sms_alert_type']	 = $this->sms_alert_type;

		$xml_return = trim($this->_httpRequest($domain, $path, $port, $data));
		return $xml_return;
	}

	public function get_balance()
	{
		$domain	 = DOMAIN;
		$path	 = PATH_BALANCE;
		$port	 = PORT;

		$data = array(
			'user_login' => $this->user_login,
			'api_key'	 => $this->api_key
		);

		return trim($this->_httpRequest($domain, $path, $port, $data));
	}

	private function _httpRequest($domain, $path, $port, $A_fields = array())
	{
		$ssl = $domain . $path;
		@set_time_limit(0);
		$qs	 = array();
		foreach ($A_fields as $k => $v)
		{
			$qs[] = $k . '=' . urlencode($v);
		}

		$request = join('&', $qs);

		if (false && function_exists('curl_init') AND $ch = curl_init(substr($domain, _CUT_) . $path))
		{
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_PORT, $port);

			curl_setopt($ch, CURLOPT_POSTFIELDS, $request);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

			$result = curl_exec($ch);
			curl_close($ch);

			return $result;
		}
		else if (ini_get('allow_url_fopen'))
		{
			$fp = fsockopen(substr($domain, _CUT_), $port, $errno, $errstr, 100);
			if (!$fp)
			{
				echo 'Unable to connect to host. Try again later.';
				return null;
			}
			$header = "POST " . $path . " HTTP/1.1\r\n";
			$header .= 'Host: ' . substr($domain, _CUT_) . "\r\n";
			$header .= "Accept: text\r\n";
			$header .= "User-Agent: Octopush\r\n";
			$header .= "Content-Type: application/x-www-form-urlencoded\r\n";
			$header .= "Content-Length: " . strlen($request) . "\r\n";
			$header .= "Connection: close\r\n\r\n";
			$header .= "{$request}\r\n\r\n";

			fputs($fp, $header);
			$result = '';
			while (!feof($fp))
				$result .= fgets($fp, 1024);
			fclose($fp);

			$result = substr($result, strpos($result, "\r\n\r\n") + 4);
			return $result;
		}
		else
		{
			die('Server does not support HTTP(S) requests.');
		}
		return $response;
	}

	public function set_user_login($user_login)
	{
		$this->user_login = $user_login;
	}

	public function set_api_key($api_key)
	{
		$this->api_key = $api_key;
	}

	public function set_answer_email($answer_email)
	{
		$this->answer_email = $answer_email;
	}

	public function set_sms_alert_bound($sms_alert_bound)
	{
		$this->sms_alert_bound = intval($sms_alert_bound);
	}

	public function set_sms_alert_type($sms_alert_type)
	{
		if (in_array($sms_alert_type, array(SMS_PREMIUM, SMS_STANDARD)))
			$this->sms_alert_type = $sms_alert_type;
	}

	/*
	 * XML PARSING FUNCTIONS
	 */

	public function parse_octopush_token_result($xml)
	{
		libxml_use_internal_errors(true);
		if (($xml = simplexml_load_string($xml)) !== false)
		{
			$result	 = $xml->xpath('/octopush');
			$res	 = (array) $result[0];
			$token	 = $res['token'];
		}
		else
		{
			$token = '';
		}

		return $token;
	}

}

?>
