<?php

	/*==================================================* 
	*		  			BASE DE DONNEES					*
	*================================================== */

$db_host = "localhost";
$DB_login = getenv('MYASTRO_DB_LOGIN');
$DB_pass = getenv('MYASTRO_DB_PASS');
$DB_name = getenv('MYASTRO_DB_NAME');

define('DBHOST','localhost');
define('DBLOGIN', $DB_login);
define('DBPASS', $DB_pass);
define('DBNAME', $DB_name);
define('TABLE_USERS', 'ag_users');
define('TABLE_QUEUE', 'ag_tosend');
define('TABLE_NOT_SENDED', 'ag_users');

	/*==================================================* 
	*		  				PATHS						*
	*================================================== */

define('ROOT_URL','http://www.myastro.fr');
define('URL', 'http://www.myastro.fr/');
define('ROOT', URL."/");

// use by php
define('DIR_TMPL_RESPONSES', $_SERVER["DOCUMENT_ROOT"]."/zz_tmpl_responses/");
define('DIR_COMPILED_RESPONSES', $_SERVER["DOCUMENT_ROOT"]."/zz_compiled_responses/");
define('DIR_ARCHIVES_COMPILED_RESPONSES', $_SERVER["DOCUMENT_ROOT"]."/zz_archives_compiled_responses/");
// use for http link
define('DIR_TMPL_RESPONSES2', "/zz_tmpl_responses/");
define('DIR_COMPILED_RESPONSES2', "/zz_compiled_responses/");
define('DIR_ARCHIVES_COMPILED_RESPONSES2', "/zz_archives_compiled_responses/");
define('URL_TMPL_MAIL', DIR_TMPL_RESPONSES."/mail_template.html");
define('S_PATH_CACHE', 'http://www.myastro.fr/cache');
   
    /*==================================================* 
    *                       OTHERS                      *
    *================================================== */

define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

$sexeMap["F?minin"]		= "femme";
$sexeMap["Masculin"]	= "homme";

$array_month = array(
		1 	=> 	"Janvier",
		2 	=>	"Février",
		3 	=> 	"Mars",
		4 	=> 	"Avril",
		5 	=> 	"Mai",
		6 	=>  "Juin",
		7 	=> 	"Juilet",
		8 	=>	"Aout",
		9 	=> 	"Septembre",
		10 	=>	"Octobre",
		11 	=> 	"Novembre",
		12 	=>	"Décembre"
	);

	/*==================================================* 
	*		  	 	FILES MANIPULATION					*
	*================================================== */

function updateFile($file_to_update, $txt_to_write){
	$f=fopen($file_to_update, "wb"); 
	$text=utf8_encode($txt_to_write); 
	$text="\xEF\xBB\xBF".$text; 
	
	fputs($f, $text); 
	fclose($f);
}

function updateFileANSI($file_to_update, $txt_to_write){
	$f=fopen($file_to_update, "wb"); 
	$text=utf8_decode($txt_to_write); 
	fputs($f, $text); 
	fclose($f);
}

	/*==================================================* 
	*		  	 		BDD CONNECTION					*
	*================================================== */

$link = "";
function createConnection(){
	$link = mysql_connect(DBHOST, DBLOGIN, DBPASS);
	if (!$link) {
		//die('Connexion impossible : ' . mysql_error());
		echo "&result=0&errorMSG=Base de donnée indisponible. Merci de rééssayer plus tard. (Error 501)&";
	}
	
	$db_selected = mysql_select_db(DBNAME, $link);
	if (!$db_selected) {
		//die ('Impossible de sélectionner la base de données : ' . mysql_error());
		echo "&result=0&errorMSG=".mysql_error();
	}
	mysql_query("SET NAMES 'utf8'");
	return $link;
}

function destroyConnection($my_link){
	mysql_close($my_link);
}

?>
