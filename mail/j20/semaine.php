<?php
$date_debut=$_GET['datej'];
$j=$_GET['j'];
$date_fin = date('Y-m-d', strtotime($date_debut.' +'.$j.' days'));
//echo "ici == ".$date_fin;
$date = return_date($date_fin);


function return_date($date)
	{
		$mois = substr($date, 5, 2);
		$jour = substr($date, 8, 2);
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
		echo $date;
		return $date;
	}

?>
