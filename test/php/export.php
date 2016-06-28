<?php
	include(realpath('../../include/tools.php'));
	$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

	$row = 1;
	$users = array();
	if (($handle = fopen("export.csv", "r")) !== FALSE) {
	    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
	        $num = count($data);
	        $infos = explode(';',$data[0]);
	        $users[] = array(
	        	'ID' => $infos[0],
	        	'mail' => $infos[1],
	        	'sexe'	=> '',
	        	'DATEMODIF' => $infos[3]
	        	);
	    }
	    fclose($handle);
	}
	
	foreach($users as $key => $user){
		$sexe = $wpdb->get_var('SELECT sexe from ag_users WHERE `email` = "'.$user['mail'].'"');
		$users[$key]['sexe'] = $sexe;
	}

	$fp = fopen('file.csv', 'r+');
	var_dump($fp);
	foreach ($users as $fields) {
	    var_dump(fputcsv($fp, $fields));
	}
	fclose($fp);
	var_dump('<pre>',$users,'</pre>');
?>