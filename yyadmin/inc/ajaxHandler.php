<?php

// Include Here to avoid path problems
include(realpath('tools.php'));
$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	if(isset($_POST)){
		$param = $_POST;
		switch($param['method']){
			case 'disable-user' :
				 $res = $wpdb->update('users',
				 	array("enable" => 0),
				 	array("id" => $param['user_id'])
				 );
				 if($res){
				 	die('OK');
				 }else{
				 	die('error');
				 }
			break;
			case 'enable-user' :
				 $res = $wpdb->update('users',
				 	array("enable" => 1),
				 	array("id" => $param['user_id'])
				 );
				 if($res){
				 	die('OK');
				 }else{
				 	die('error');
				 }
			break;
			default :
				die(json_encode('No method transmitted'));
			break;
		}
	}
	else{
		die('No data transmitted');
	}

?>