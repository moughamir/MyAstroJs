<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);
$timestart=microtime(true);
require '../include/tools.php' ;
require_once 'Swift-5.0.3/lib/swift_required.php';

$bdd	 	= new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
$firstName	= 'Julien';


$transport 	= Swift_SmtpTransport::newInstance('localhost', 25)
				->setUsername('postmaster@myastro.fr')
				->setPassword('fYJAWB2RqK9fJ');

$mailer 	= Swift_Mailer::newInstance($transport);

$message 	= Swift_Message::newInstance($transport);
// Give the message a subject
$message 	->setSubject($firstName.', votre horoscope du '.date('d-m-Y'))
			// Set the From address with an associative array
			->setFrom(array('horoscope@myastro.fr' => 'Myastro - Horoscope'))
			// Set the To addresses with an associative array
			->setTo(array(
				'julien.kgcom@gmail.com' 	=> 'Equipe développement KgCOM', 
				'laurene.kgcom@gmail.com' 	=> 'Equipe développement KgCOM',
				'adopte.me@witi.fr'		  	=> 'Julien Citerne'
				))
			// Give it a body
			->setBody(file_get_contents('templates/horoscope.tpl'),'text/html')
			// And optionally an alternative body
			->addPart(file_get_contents('templates/horoscope.tpl'), 'text/html');

// Send the message
$result = $mailer->send($message);

$timeend=microtime(true);
$time=$timeend-$timestart;
 
//Afficher le temps d'éxecution
$page_load_time = number_format($time, 3);
echo "<br>Script execute en " . $page_load_time . " sec";
var_dump($result);die;
?>