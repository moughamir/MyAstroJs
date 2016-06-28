<?php 
 error_reporting(E_ALL);
 ini_set("display_errors", 1);
require_once('../../lib/PHPExcel/PHPExcel.php');
/*
		$str = file_get_contents('backup.xml');
		preg_match_all('#<field name="id">(\d+)</field>#', $str, $ids);
		preg_match_all('#<field name="name">(\w+)</field>#',$str,$names);
		preg_match_all('#<field name="mail">([a-zA-Z0-9@-_\.]+)</field>#',$str,$mails);
		
		$objPHPExcel = new PHPExcel();
				// Set document properties
				$objPHPExcel->getProperties()->setCreator("Julien Citerne");
		$objPHPExcel->setActiveSheetIndex(0)
	            				->setCellValue('A1', 'Id')
	            				->setCellValue('B1', 'name')
	            				->setCellValue('C1', 'email');

		header('Content-Type: text/html; charset=UTF-8');
	            header('Content-Type: text/csv');
				header('Content-Disposition: attachment;filename="export.csv"');
				header('Cache-Control: max-age=0');
		$i = 2;
		foreach($ids[1] as $id){
			if(isset($names[1][$i]) && isset($mails[1][$i])){
				$objPHPExcel->getActiveSheet()
	            				->setCellValue('A'.$i, $id)
	            				->setCellValue('B'.$i, $names[1][$i])
	            				->setCellValue('C'.$i, $mails[1][$i]);
			}
			$i++;
		}
		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');
	            //$objWriter->setExcelCompatibility(TRUE);
	            $objWriter->setDelimiter(';');
	            //$objWriter->setUseBOM(true);
				$objWriter->save('php://output');*/

$sub = array(
  array('id' => '1','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:7:"sylvain";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:10:"25/06/1964";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:8:"lorraine";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"CA";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"02/10/1955";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:20:"lorraineboby@live.ca";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:10:"1234567890";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-03-25 15:49:31'),
  array('id' => '2','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:4:"ERIC";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:10:"19/12/1970";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:8:"CLAUDINE";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"FR";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"20/12/1971";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:21:"mesamourslojo@live.fr";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:10:"0723658854";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-04-11 18:57:14'),
  array('id' => '3','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_2";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:0:"";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:0:"";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:5:"julia";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"ZZ";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"13/11/1973";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:17:"isis_and@live.com";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:11:"00376356373";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-04-14 21:11:25'),
  array('id' => '4','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:7:"Fabrice";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:10:"28/02/1964";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:9:"Dominique";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"FR";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"01/058/195";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:22:"dom1?aubry@laposte.net";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:10:"0629542661";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-04-19 17:42:43'),
  array('id' => '5','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:6:"Jessy ";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:10:"04/04/1991";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:8:"Jessica ";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"FR";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"27/06/1992";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:24:"linthaljessica@gmail.com";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:10:"0665076675";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-04-21 03:38:48'),
  array('id' => '6','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:7:"thierry";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:0:"";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:8:"Sandrine";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"FR";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"12/04/1972";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:26:"sandyvaloche87@laposte.net";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:10:"0672847484";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-04-25 12:10:43'),
  array('id' => '7','user_id' => '0','form_id' => '1','status' => '1','action' => 'submit','data' => 'a:10:{i:0;a:2:{s:8:"field_id";i:11;s:10:"user_value";s:10:"question_1";}i:1;a:2:{s:8:"field_id";i:1;s:10:"user_value";s:8:"Philippe";}i:2;a:2:{s:8:"field_id";i:18;s:10:"user_value";s:10:"17/10/1980";}i:3;a:2:{s:8:"field_id";i:13;s:10:"user_value";s:5:"Dores";}i:4;a:2:{s:8:"field_id";i:16;s:10:"user_value";s:2:"LU";}i:5;a:2:{s:8:"field_id";i:15;s:10:"user_value";s:10:"02/08/1980";}i:6;a:2:{s:8:"field_id";i:2;s:10:"user_value";s:21:"doresalves@hotmail.fr";}i:7;a:2:{s:8:"field_id";i:14;s:10:"user_value";s:9:"000000000";}i:8;a:2:{s:8:"field_id";i:4;s:10:"user_value";s:1:"7";}i:9;a:2:{s:8:"field_id";i:5;s:10:"user_value";s:0:"";}}','date_updated' => '2014-05-02 21:26:45')
);
//echo '<pre>';

header('Content-Type: text/html; charset=UTF-8');
	            header('Content-Type: text/csv');
				header('Content-Disposition: attachment;filename="export.csv"');
				header('Cache-Control: max-age=0');
$lignes = '';
foreach($sub as $s){
	$user = array();
	$data = unserialize($s['data']);
	foreach($data as $d){
		if($d['field_id'] == 11){ // question
			$user['questionContent'] = $d['user_value'];
		}
		if($d['field_id'] == 1){ // prenom
			$user['prenom'] = $d['user_value'];
		}
		if($d['field_id'] == 18){ // birthdate
			$user['birthdate'] = $d['user_value'];
		}
		if($d['field_id'] == 16){ // pays
			$user['pays'] = $d['user_value'];
		}
		if($d['field_id'] == 15){ // conjoint birthdate
			$user['conjointBirthdate'] = $d['user_value'];
		}
		if($d['field_id'] == 14){ // tel
			$user['tel'] = $d['user_value'];
		}
	}
	$lignes .= implode(';',$user)."\n";
}
print $lignes;
//echo '</pre>';
?>