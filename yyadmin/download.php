<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 300);
	include('inc/tools.php');
	include('inc/config.php');
	require_once(ROOT_PATH.'/geoiploc.php');
	require_once(ROOT_PATH.'/lib/PHPExcel/PHPExcel.php');
	$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

	$mode = (isset($_GET['q'])) ? $_GET['q'] : null ;
	switch($mode){
		case 'campain' :
			$query = 'SELECT * FROM tracking_trackers';
			$results = $bdd->get_results($query);
			$objPHPExcel = new PHPExcel();
			// Set document properties
			$objPHPExcel->getProperties()->setCreator("Julien Citerne")
							 ->setLastModifiedBy("Julien Citerne")
							 ->setTitle("Liste des campagnes et trackers")
							 ->setSubject("Liste des campagnes et trackers");
			$objPHPExcel->setActiveSheetIndex(0)
            				->setCellValue('A1', 'ID')
            				->setCellValue('B1', 'CAMPAGNE')
            				->setCellValue('C1', 'TRACKER');
            $start = 2;
            foreach($results as $res){
            	$objPHPExcel->getActiveSheet()
            				->setCellValue('A'.$start, $res->id)
            				->setCellValue('B'.$start, $res->campain)
            				->setCellValue('C'.$start, $res->tracker);

            	$start++;
            }
            $objPHPExcel->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
            $objPHPExcel->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
            $objPHPExcel->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
            
            header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
			header('Content-Disposition: attachment;filename="Liste des campagnes.xlsx"');
			header('Cache-Control: max-age=0');

			$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
			$objWriter->save('php://output');
			exit;
		break;
		case 'export' :
			if($_GET['country'] == 'DOMCOM'){
				$countryCondition = 'AND user.pays IN("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC")';
			}
			elseif($_GET['country'] == 'FR'){
				$countryCondition = 'AND user.pays IN("RE","FR")';
			}
			elseif($_GET['country'] == 'APPELS_ENTRANTS'){
				$countryCondition = 'AND user.pays IN("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC","RE","FR","BE","CA","CH","LU")';
			}
			else{
				$countryCondition = 'AND user.pays = "'.$_GET['country'].'"';
			}

			$from = (isset($_GET['website']) && $_GET['website'] != 1) ? 'users_common' : 'ag_users' ;
			$idCondition = (isset($_GET['website']) && $_GET['website'] != 1) ? ' AND external_id LIKE "'.$_GET['website'].'%"': '';
			if (isset($_GET['website']) && $_GET['website'] != 1) {
			 $ID = 'user.external_id';
				$select = 'user.external_id as ID, user.firstname as prenom, user.sexe, user.birthdate as dateNaissance, user.phone as tel,user.email, user.pays, user.conjoint, user.conjointBirthdate, user.date, user.question as questionContent, rep.responses';
				$date_condition = 'WHERE user.date >= "'.$_GET['start'].' 00:00:00" AND user.date <= "'.$_GET['end'].' 23:59:59"';
				$orderby = ' ORDER BY user.date';
				$jointure = ' LEFT OUTER JOIN form_users_responses AS rep ON user.external_id = rep.id_user ';
			}
			else{
				$ID = 'user.internal_id';
				$select = 'user.internal_id as ID, user.ip_adress, user.prenom, user.sexe, user.signeAstrologique, user.tel, user.pays, user.email, user.dateNaissance, user.conjoint, user.signe2, user.questionDate, user.questionContent, rep.responses';
				$date_condition = 'WHERE `questionDate` >= "'.$_GET['start'].'" AND `questionDate` <= "'.$_GET['end'].'"';
				$orderby = ' ORDER BY user.questionDate';
				$jointure = ' LEFT OUTER JOIN form_users_responses AS rep ON user.internal_id = rep.id_user ';
			}

			$tchat_scenario = (isset($_GET['website']) && $_GET['website'] != 1) ? 'tchat_scenario_wp' : 'tchat_scenario' ;
			$jointure2 = ' LEFT JOIN tchat_stats as ts ON (ts.id_user='.$ID.') LEFT JOIN ' . $tchat_scenario . ' as tscen ON ( tscen.id=ts.id_scenario) ';
			//$jointure2 = '';
			$select2 = ',tscen.seer_name';

			$query = 'SELECT '.$select . $select2 . ' 
				FROM '.$from.' AS user
				'.$jointure .'
				'.$jointure2.'
				'.$date_condition.'
				'.$countryCondition.' 
				'.$idCondition.' 
				GROUP BY user.email' . $orderby;

				/*echo $query;
				die('<br>toto');*/
				$results = $bdd->get_results($query);
				
				$objPHPExcel = new PHPExcel();
				// Set document properties
				$objPHPExcel->getProperties()->setCreator("Julien Citerne")
								 ->setLastModifiedBy("Julien Citerne")
								 ->setTitle($_GET['country'].' '.substr($_GET['start'],-2).'.'.substr($_GET['start'],6,2))
								 ->setSubject($_GET['country'].' '.substr($_GET['start'],-2).'.'.substr($_GET['start'],6,2));
				$objPHPExcel->setActiveSheetIndex(0)
	            				->setCellValue('A1', 'Pays IP')
	            				->setCellValue('B1', 'ID Astro')
	            				->setCellValue('C1', 'Date')
	            				->setCellValue('D1', 'Prenom')
	            				->setCellValue('E1', 'Sexe')
	            				->setCellValue('F1', 'Signe')
	            				->setCellValue('G1', 'Telephone')
	            				->setCellValue('H1', 'Entrant')
	            				->setCellValue('I1', 'Pays')
	            				->setCellValue('J1', 'Conjoint')
	            				->setCellValue('K1', 'Signe Conjoint')
	            				->setCellValue('L1', 'ID Question')
	            				->setCellValue('M1', 'Question')
	            				->setCellValue('N1', 'Domaine')
	            				->setCellValue('O1', 'Source')
	            				->setCellValue('P1', 'Voyant')
	            				->setCellValue('Q1', 'email')
	            				->setCellValue('R1', 'Date de naissance');
	            $start = 2;

	           /* $tchat_scenario = (isset($_GET['website']) && $_GET['website'] != 1) ? 'tchat_scenario_wp' : 'tchat_scenario' ;*/

	            foreach($results as $res){

	            	/*$tchat_stats = $bdd->get_row('SELECT * FROM tchat_stats WHERE id_user = '.$res->ID.' ORDER BY `date` DESC LIMIT 1');
	            	if($tchat_stats){
	            		if($tchat_stats->id_scenario != 0){
	            			$voyant = $bdd->get_var('SELECT seer_name FROM '.$tchat_scenario.' WHERE id = "'.$tchat_stats->id_scenario.'"');
	            			$voyant = str_replace('&eacute;','e',$voyant);
	            		}
	            	} else {
	            		$voyant = "-";
	            	}*/
	            	
				$tel = $res->tel;
				$pays = $res->pays;
				/* on ajoute les indicatifs au num FR et DOMTOM sur les num enregistrés sans indicatif (avant le 25/11/2014) */
				if($pays == "FR"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","33$2",$tel);
				}else if($pays=="MQ"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","596$2",$tel);
				}else if($pays=="GP"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","590$2",$tel);
				}else if(($pays=="GF")){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","594$2",$tel);
				}else if(($pays=="RE")||($pays=="YT")){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","262$2",$tel);
				}else if($pays=="PM"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","508$2",$tel);
				}else if(($pays=="BL")||($pays=="SM")){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","590$2",$tel);
				}else if($pays=="WF"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","681$2",$tel);
				}else if($pays=="PF"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","689$2",$tel);
				}else if($pays=="NC"){
				    $tel = preg_replace("#^(0){1}(\d{8,9})#","687$2",$tel);
				}
				
			/*pour les appels 'telephone(sortants?)' : FR-> avec 0. DOM-TOM-> avec 0 sans indicatif.internationnal-> avec 00 + indicatif */	
				if($res->pays == "FR"){
				    $phone_sortant = '0'.substr($tel,2);
				}else{
				    $phone_sortant = (in_array($res->pays,array("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC","RE")) ) ? '0'.substr($tel,3):"00".$tel ;
				}
	
			/*pour les appels entrants : FR-> pas de 0. DOM-TOM-> pas de 0 avec indicatif.internationnal-> pas de 0 avec indicatif */
				if($res->pays == "FR"){
				    $phone_entrant = substr($tel,2);
				}else{
				    $phone_entrant = $tel ;
				}


	            	//$date = str_replace('-','/',$_GET['start']);
	            	$date = ( isset($res->questionDate) ) ? $res->questionDate : substr($res->date,0,10);
	            	$date = substr($date,0,4) . '-' . substr($date,5,2) . '-' . substr($date,8,2);
	            	$datenaissance = substr($res->dateNaissance,0,4) . '-' . substr($res->dateNaissance,5,2) . '-' . substr($res->dateNaissance,8,2);
	            	//substr($_GET['start'],-2).'/'.substr($_GET['start'],-5,2).'/'.substr($_GET['start'],0,4);
                        $idconvert = base_convert($res->ID, 10, 32);
                        $idkgestion = strtoupper((string) $idconvert);
	            	$objPHPExcel->getActiveSheet()
	            				->setCellValue('A'.$start, (isset($res->ip_adress)) ? getCountryFromIP($res->ip_adress) : 'not registred')
	            				->setCellValueExplicit('B'.$start, $idkgestion, PHPExcel_Cell_DataType::TYPE_STRING)
	            				->setCellValue('C'.$start, $date)
	            				->setCellValue('D'.$start, str_replace(array('é', 'è', 'ê', '&eacute;', '&egrave;'), 'e', $res->prenom))
	            				->setCellValue('E'.$start, $res->sexe)
	            				->setCellValue('F'.$start, (!isset($res->signeAstrologique) ) ? get_signe_astro(substr($res->dateNaissance,-2),substr($res->dateNaissance,-5,2)) : $res->signeAstrologique )
	            				->setCellValue('G'.$start, $phone_sortant)
	            				->setCellValue('H'.$start, $phone_entrant)
	            				->setCellValue('I'.$start, $res->pays)
	            				->setCellValue('J'.$start, str_replace(array('é', 'è', 'ê', '&eacute;', '&egrave;'), 'e', $res->conjoint))
	            				->setCellValue('K'.$start, (!isset($res->signe2) ) ? get_signe_astro(substr($res->conjointBirthdate,-2),substr($res->conjointBirthdate,-5,2)) : $res->signe2)
	            				->setCellValue('L'.$start, $res->questionContent)
	            				->setCellValue('M'.$start, $questionArray[$res->questionContent])
	            				->setCellValue('N'.$start, $domaineArray[$res->questionContent])
	            				->setCellValue('O'.$start, $sourceArray[$_GET['website']])
	            				->setCellValue('P'.$start, str_replace('&eacute;','e',$res->seer_name))
	            				->setCellValue('Q'.$start, $res->email)
	            				->setCellValue('R'.$start, $datenaissance);

	            	$start++;
	            }

	            header('Content-Type: text/html; charset=UTF-8');
	            header('Content-Type: text/csv');
				header('Content-Disposition: attachment;filename="'.$sourceArray[$_GET['website']].'-'.$_GET['country'].' '.substr($_GET['start'],-2).'.'.substr($_GET['start'],5,2).'.csv"');
				header('Cache-Control: max-age=0');
				echo "\xEF\xBB\xBF";
	            
	            $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
	            //$objWriter->setExcelCompatibility(TRUE);
	            $objWriter->setDelimiter(';');
	            //$objWriter->setUseBOM(true);
				$objWriter->save('php://output');
		break;
		default :
			echo "Erreur aucun mode définit !";
		break;
	}
?>