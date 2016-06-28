<?
// BDD
//define('DBHOST','sql.kellyjimi.com');
//define('DBLOGIN', 'kellyjimicom');
//define('DBPASS', 'laurence');
//define('DBNAME', 'kellyjimicom');

/*
define('DBHOST','localhost');
define('DBLOGIN', 'elle');
define('DBPASS', 'juillet2009');
define('DBNAME', 'kovan_elle');
*/

define('DBHOST','mysql51-8.business');
define('DBLOGIN', 'myastros123');
define('DBPASS', 'fYJaWB2RqKZ9fJ');
define('DBNAME', 'myastros123');

//define('DBHOST','localhost');
//define('DBLOGIN', 'root');
//define('DBPASS', '');
//define('DBNAME', 'marie');


/*
define('TABLE_USERS', 'AG_USERS');
define('TABLE_QUEUE', 'AG_TOSEND');
define('TABLE_NOT_SENDED', 'AG_USERS');
*/

define('TABLE_USERS', 'ag_users');
define('TABLE_QUEUE', 'ag_tosend');
define('TABLE_NOT_SENDED', 'ag_users');


$link = "";
function createConnection(){
	$link = mysql_connect(DBHOST, DBLOGIN, DBPASS);
	if (!$link) {
		//die('Connexion impossible : ' . mysql_error());
		echo "&result=0&errorMSG=Base de donnée indisponible. Merci de réésayer plus tard. (Error 501)&";
	}
	
	$db_selected = mysql_select_db(DBNAME, $link);
	if (!$db_selected) {
		//die ('Impossible de sélectionner la base de données : ' . mysql_error());
		echo "&result=0&errorMSG=Base de donnée indisponible. Merci de réésayer plus tard. (Error 502)&";
	}
	
	return $link;
}

function destroyConnection($my_link){
	mysql_close($my_link);
}
?>