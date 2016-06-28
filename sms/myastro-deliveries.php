<?php
// test : www.myastro.fr/sms/myastro-deliveries.php?status=DELIVERED&number=33605526815
require_once('../inc/config.php');
require_once('../inc/bdd.php');   // New mysql Class From Wordpress : Wpdb
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);

// On récupère les données en post.
$number			 = $_REQUEST['number'];
$message_id		 = $_REQUEST['message_id'];
$delivery_date	 = $_REQUEST['delivery_date'];
$status			 = $_REQUEST['status'];

if($number == '' || $status == '')
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
			$is_valid	 = intval(($status !== 'NOT_DELIVERED'));
			$qry		 = 'UPDATE ag_users SET tel_is_valid=' . intval($is_valid) . ' WHERE internal_id=' . intval($user->internal_id);
			$A_users	 = $bdd->query($qry);
		}
	}
}