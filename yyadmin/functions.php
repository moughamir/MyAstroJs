<?php
	
	function isAdmin($base)  
	{
		if($_SESSION['adminStatus'] != 'isConnected')
		{
			header('Location: '.$base.'login.php');
			exit();
		}
	}

	function ret_date($date)
	{
		$annee = substr($date, 0, 4);
		$mois = substr($date, 5, 2);
		$jour = substr($date, 8, 2);
		$date = $jour.'.'.$mois.'.'.$annee;
		return $date;
	}	

?>