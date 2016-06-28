<?php
// test : www.myastro.fr/sms/myastro-stops.php?number=33605526815
require_once('../inc/config.php');
require_once('../inc/bdd.php');   // New mysql Class From Wordpress : Wpdb
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);

// On récupère les données en post.
$number		 = $_REQUEST['number'];
$text		 = $_REQUEST['text'];
$stop_date	 = $_REQUEST['stop_date'];


if($number == '')
	die();

// On recherche le ag_user correspondant
$qry	 = 'SELECT * FROM ag_users WHERE tel=\'' . str_replace('+', '', $number) . '\'';
$A_users = $bdd->get_results($qry);

// On met à jour ses infos dans la vase, si le delivery est "DELIVERED", on met tel_is_valid à 1, et sinon, à 0.
if (is_array($A_users))
{
	foreach ($A_users as $user)
	{
		if (isset($user->internal_id) && $user->internal_id > 0)
		{
			$qry		 = 'UPDATE ag_users SET blacklisted=1 WHERE internal_id=' . intval($user->internal_id);
			$A_users	 = $bdd->query($qry);
		}
	}
}