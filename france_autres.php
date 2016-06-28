<?php
session_start();
	
$deb = $_GET['deb'];
$fin = $_GET['fin'];
$pays = $_GET['pays'];
$domaine = array(
		'question_1'	=> 'amour',
		'question_10'	=> 'amour',
		'question_11'	=> 'amour',
		'question_12'	=> 'amour',
		'question_2'	=> 'amour',
		'question_22'	=> 'amour',
		'question_3'	=> 'travail',
		'question_4'	=> 'travail',
		'question_5'	=> 'Famille',
		'question_6'	=> 'Action réalisé',
		'question_71'	=> 'argent',
		'question_72'	=> 'argent',
		'question_73'	=> 'argent',
		'question_74'	=> 'argent',
		'question_701'	=> 'argent',
		);
$questions = array(
		'question_1'	=> 'Vous en avez marre d’être seule',
		'question_10'	=> 'Il ne sait pas que vous l\'aimez',
		'question_11'	=> 'Il vous a quitté',
		'question_12'	=> 'Il vous ignore',
		'question_2'	=> 'Est-ce qu\'il m\'aime',
		'question_22'	=> 'Il est marié',
		'question_3'	=> 'Vous cherchez un emploi',
		'question_4'	=> 'Vous un changement dans votre travail',
		'question_5'	=> 'Famille',
		'question_6'	=> 'Action réalisé',
		'question_71'	=> 'Vous attendez un contrat',
		'question_72'	=> 'Vous attendez un héritage',
		'question_73'	=> 'Vous attendez un investissement',
		'question_74'	=> 'Vous attendez une bourse',
		'question_701'	=> 'Vous attendez une décision de justice',
);

$query = 'SELECT user.internal_id, user.ip_adress, user.prenom, user.sexe, user.signeAstrologique, user.tel, user.pays, user.conjoint, user.signe2, user.questionDate, user.questionContent, rep.responses
				FROM ag_users AS user
				LEFT OUTER JOIN form_users_responses AS rep ON user.internal_id = rep.id_user
				WHERE `questionDate` >= "'.$deb.'"
				AND `questionDate` <= "'.$fin.'"
				AND `questionSujet` != ""
				AND `ip_adress` != "mobile"
				GROUP BY user.email
				ORDER BY user.questionDate';
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
header("Cache-Control: private", false);
header("Content-Type: application/vnd.ms-excel");
header('Content-Disposition: attachment; filename=myastro-'.$deb.'.xls;' );

require_once('include/tools.php');
require_once('geoiploc.php');
$wpdb = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

$results = $wpdb->get_results($query);

  print '<table border=1>
            <!-- impression des titres de colonnes -->
             <TR align="center">
			 <TD>Pays IP</TD>
			 <TD>ID interne</TD>
			 <TD>Date</TD>
			 <TD>Prenom</TD>
			 <TD>Sexe</TD>
			 <TD>Signe</TD>
			 <TD>Tel</TD>
			 <TD>Pays</TD>
			 <TD>Conjoint</TD>
			 <TD>Signe conjoint</TD>
			 <TD>ID question</TD>
			 <TD>Question</TD>
			 <TD>Domaine</TD>
			 
			 </TR>
			 <TR>';
	foreach($results as $res){
		$tel = (in_array($res->pays,array("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC","RE","FR"))) ? substr($res->tel,1) : $res->tel;
		print('<TR>');
		print('<TD>'.getCountryFromIP($res->ip_adress).'</TD>');
		print('<TD>'.$res->internal_id.'</TD>');
		print('<TD>'.$res->questionDate.'</TD>');
		print('<TD>'.utf8_decode($res->prenom).'</TD>');
		print('<TD>'.$res->sexe.'</TD>');
		print('<TD>'.$res->signeAstrologique.'</TD>');
		print('<TD>'.$tel.'</TD>');
		print('<TD>'.$res->pays.'</TD>');
		print('<TD>'.utf8_decode($res->conjoint).'</TD>');
		print('<TD>'.$res->signe2.'</TD>');
		print('<TD>'.$res->questionContent.'</TD>');
		print('<TD>'.utf8_decode($questions[$res->questionContent]).'</TD>');
		print('<TD>'.utf8_decode($domaine[$res->questionContent]).'</TD>');
		print('</TR>');
	}
?>