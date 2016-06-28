<?php
// test : www.myastro.fr/sms/myastro-sms-cron.php
require_once('/var/www/myastro/www/sms/myastro-sms.php');
require_once('/var/www/myastro/www/inc/config.php');
require_once('/var/www/myastro/www/inc/bdd.php');   // New mysql Class From Wordpress : Wpdb
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);

// CRON a effectuer toutes les Heures HH:10min (pour éviter les risques de chevauchement)
// 3 envois possibles :
// sms2 - les H+xxx (6h) (le flash)
// sms3 - les J+1 yyy H (17h) (vous allez recevoir une reponse par mail + lien)
// sms4 - les J+2 zzz H (13h) (vous n'avez pas appelé)
// *************************************************************************
// ********************            SMS J+1            **********************
// *************************************************************************
$H			 = intval(date('H'));
$qry_start	 = 'SELECT
                tel_is_valid, 
                blacklisted,
                tel,
                conjoint,
                questionContent,
                prenom, 
                internal_id, 
                source
            FROM ' .
	$bdd->users . ' as agu 
                LEFT JOIN ' . $bdd->tracking_rdv . ' AS trdv ON (agu.internal_id = trdv.id_user) 
            WHERE 
                tel != \'\'
                AND tel_is_valid = 1 
                AND blacklisted = 0 
                AND trdv.id is NULL 
				AND pays != \'ZZ\' ';
//				AND tel in (\'' . SMS_TEST_NUMBER . '\', \'33614519476\')';
// Pour tester, on ne met que les numéros de Thierno et de Maxime.
//				AND tel in (\'' . SMS_TEST_NUMBER . '\', \'33614519476\')';

if (SMS_J_PLUS_1_ACTIVATED && $H === SMS_3_TIME_HOUR && $H >= 8 && $H < 20)
{
	// On envoi le SMS 3 sur tous les inscrits de la veille ayant un numero tel_is_valid == 1 et stop = 0
	// et left join tracking_rdv as trdv on (internal_id!user_id) WHERE trdv.id is NULL (On exclue les utilisateurs qui ont deja appelé.)
	// la requete precedente allege le NOT IN qui est tres chronophage
	// Dates de la veille :
	$dayb		 = new DateTime('-1 day');
	$day_before	 = $dayb->format('Y-m-d');
	$qry		 = $qry_start . ' AND questionDate = \'' . $day_before . '\'';

	$A_users = $bdd->get_results($qry);

	$A_numbers				 = array();
	$A_first_names			 = array();
	$A_additional_fields_1	 = array();

	$sms_text	 = $A_sms_texts['j_plus_un'][1];
	$cpt		 = 0;
	$A_lines = array();
	if (is_array($A_users) && !empty($A_users))
	{
		foreach ($A_users as $user)
		{
			$A_numbers[]	 = $user->tel;
			$A_first_names[] = $user->prenom;
			if (isset($A_response_files[$user->source]))
			{
				$file = $A_response_files[$user->source];	
			}
			else
			{
				$file = $A_response_files['default'];
			}
			$A_additional_fields_1[] = $file;
			$code = base_convert($user->internal_id, 10, 32);
			$A_additional_fields_2[] = $code;
			$A_lines[] = 'n°:' . $user->tel . '--p:' . $user->prenom . '--f:' . $ile . '--c:' . $code;

			if ($cpt > 200)
			{
				// On envoi
				_send_jplusun_sms($sms_text, $A_numbers, $A_first_names, $A_additional_fields_1, $A_additional_fields_2, time());
				// On remet les tableaux à 0
				$A_numbers				 = array();
				$A_first_names			 = array();
				$A_additional_fields_1	 = array();
				$A_additional_fields_2	 = array();
				$cpt					 = 0;
			}
			$cpt++;
		}
		// On envoi le résiduel
		_send_jplusun_sms($sms_text, $A_numbers, $A_first_names, $A_additional_fields_1, $A_additional_fields_2, time());
		
		$email_body = implode("\n<br/>\n", $A_lines);
		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		
		// Envoi de l'email
		mail(DEBUG_MAIL_ADDR, 'listes de numéros du sms j+1', $email_body, $headers);
		//mail('yoni.guimberteau@free.fr', 'listes de numéros du sms j+1', $email_body, $headers);
	}

	//  Envoi du SMS
	// TODO : Afficher les résultats:
	if (isset($_GET['testing']) && $_GET['testing'] == 'ok')
	{
		?>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<table border="1">
			<thead>
				<tr>
					<th>Id</th>
					<th>Tel</th>
					<th>Prénom</th>
					<th>Fichier</th>
					<th>Text</th>
				</tr>
			</thead>
			<tbody>
				<?
				for ($i = 0, $n = count($A_numbers); $i < $n; $i++)
				{
					$text	 = str_replace('{ch1}', $A_additional_fields_1[$i], J_PLUS_UN_1);
					$text	 = str_replace('{ch2}', $A_additional_fields_2[$i], $text);
					$text	 = str_replace('{prenom}', $A_first_names[$i], $text);
					?>
					<tr>
						<td><?= base_convert($A_additional_fields_2[$i], 32, 10) ?></td>
						<td><?= $A_numbers[$i] ?></td>
						<td><?= $A_first_names[$i] ?></td>
						<td><?= $A_additional_fields_1[$i] ?></td>
						<td><?= $text ?></td>
					</tr>
					<?
				}
				?>
			</tbody>
		</table>
		<?
	}
}
// *************************************************************************
// ********************            SMS J+2            **********************
// *************************************************************************
/* if($H === SMS_4_TIME_HOUR && $H >= 8 && $H < 20)
  {
  // On envoi le SMS 3 sur tous les inscrits de l'AVANT VEILLE ayant un numero tel_is_valid == 1 et stop = 0
  // et left join tracking_rdv as trdv on (internal_id!user_id) WHERE trdv.id is NULL (On exclue les utilisateurs qui ont deja appelé.)
  //  la requete precedente allege le NOT IN qui est tres chronophage
  //
  //
  //  Envoi du SMS
  } */
// *************************************************************************
// ********************            SMS FLASH            ********************
// *************************************************************************
// A faire toutes les heures ouvrables (entre 10h et 19h59 et hors week end.)
if ((isset($_GET['testing']) && $_GET['testing'] == 'ok') || SMS_FLASH_ACTIVATED)
{
	if ($H === 10)
	{
		// On envoi les SMS des inscrits de 18h00 la veille jusqu'à 6h00
		$start_time	 = mktime(18, 0, 0, date('m'), intval(date('d')) - 1, date('Y'));
		$end_time	 = mktime(8, 59, 59, date('m'), date('d'), date('Y'));
	}
	else if ($H >= 11 && $H <= 18)
	{
		// On envoi les SMS des inscrits de H - 2
		$start_time	 = mktime($H - 2, 0, 0, date('m'), date('d'), date('Y'));
		$end_time	 = mktime($H - 2, 59, 59, date('m'), date('d'), date('Y'));
	}
	else if ($H === 19)
	{
		// On envoi les SMS des inscrits de H-2  à 17h59
		$start_time	 = mktime(17, 0, 0, date('m'), date('d'), date('Y'));
		$end_time	 = mktime(17, 59, 59, date('m'), date('d'), date('Y'));
	}
	// else [=> if ($H >= 20 && $H <= 7h) : on n'envoi pas de SMS]

	$qry = $qry_start . '
                AND question_date >= \'' . date('Y-m-d H:i:s', $start_time) . '\'
                AND question_date <= \'' . date('Y-m-d H:i:s', $end_time) . '\'';

	$A_users = $bdd->get_results($qry);

	// Préparation de l'email
	$A_lines = array();
	if (is_array($A_users) && !empty($A_users))
	{
		foreach ($A_users as $user)
		{
			$number		 = $user->tel;
			$prenom		 = $user->prenom;
			$prenom2	 = $user->conjoint;
			$question	 = $user->questionContent;
			$code		 = base_convert($user->internal_id, 10, 32);

			if (!isset($A_sms_texts['flash'][$question]))
			{
				continue;
			}
			$A_lines[] = 'n°:' . $number . '--p:' . $prenom . '--p2:' . $prenom2 . '--c:' . $code . '--q:' . $question;
		
			$text	 = $A_sms_texts['flash'][$question];
			$text	 = str_replace('{prenom}', $prenom, $text);
			$text	 = str_replace('{ch1}', $prenom2, $text);
			$text	 = str_replace('{ch2}', $code, $text);

			// On envoi
			echo _send_flash_sms($text, $number, mktime($H, 45, 0, date('m'), date('d'), date('Y')));
			echo '<br /><br />' . "\n";
		}

		if (isset($_GET['testing']) && $_GET['testing'] == 'ok')
		{
			?>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
			<table border="1">
				<thead>
					<tr>
						<th>Id</th>
						<th>Tel</th>
						<th>Prénom</th>
						<th>Fichier</th>
						<th>Text</th>
					</tr>
				</thead>
				<tbody>
					<?
					for ($i = 0, $n = count($A_numbers); $i < $n; $i++)
					{
						$text	 = str_replace('{ch1}', $A_additional_fields_1[$i], J_PLUS_UN_1);
						$text	 = str_replace('{ch2}', $A_additional_fields_2[$i], $text);
						$text	 = str_replace('{prenom}', $A_first_names[$i], $text);
						?>
						<tr>
							<td><?= base_convert($A_additional_fields_2[$i], 32, 10) ?></td>
							<td><?= $A_numbers[$i] ?></td>
							<td><?= $A_first_names[$i] ?></td>
							<td><?= $A_additional_fields_1[$i] ?></td>
							<td><?= $text ?></td>
						</tr>
						<?
					}
					?>
				</tbody>
			</table>
			<?
		}
		$email_body = implode("\n<br/>\n", $A_lines);

		$headers = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=UTF-8' . "\r\n";
		
		// Envoi de l'email
		mail(DEBUG_MAIL_ADDR, 'listes de numéros du sms flash', $email_body, $headers);
		//mail('yoni.guimberteau@free.fr', 'listes de numéros du sms flash', $email_body, $headers);
	}
}
?>