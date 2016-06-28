<?php
$datevar=$_GET['datej'];
$nbrJours = 22;
$datevar=strtotime($datevar);
$timeStamp += 24 * 60 * 60 * $nbrJours;
$newDate = date("Y-m-d", $timeStamp);
$date = return_date($newDate);

function return_date($date)
	{
		$mois = substr($date, 0, 2);
		$jour = substr($date, 3, 2);
		switch($mois){
			case '1':
				$mois = 'janvier';
				break;
			case '2':
				$mois = 'février';
				break;
			case '3':
				$mois = 'mars';
				break;
			case '4':
				$mois = 'avril';
				break;
			case '5':
				$mois = 'mai';
				break;
			case '6':
				$mois = 'juin';
				break;
			case '7':
				$mois = 'juillet';
				break;
			case '8':
				$mois = 'août';
				break;
			case '9':
				$mois = 'septembre';
				break;
			case '10':
				$mois = 'octobre';
				break;
			case '11':
				$mois = 'novembre';
				break;
			case '12':
				$mois = 'décembre';
				break;
		}
		$date = $jour.' '.$mois;
		//$date = date('Y/m/d', strtotime('+22 day')); 
		echo $date;
		return $date;
	}

?>
