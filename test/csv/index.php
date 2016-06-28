<?php

$row = 1;
$signes 	= array('belier','taureau','gemeaux','cancer','lion','vierge','balance','scorpion','sagittaire','capricorne','verseau','poissons');
$order = array();
if (($handle = fopen("horoscopes.txt", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $num = count($data);
        $row++;
        $infos = $data[0];
        $user  = explode(';',$infos);
        if(isset($user[2]) && $user[2] == 'poisson'){
        	$user[2] = 'poissons';
        }
        if(isset($user[3]) && $user[3] == 'poisson'){
        	$user[3] = 'poissons';
        }
		if(isset($user[2]) && in_array(strtolower($user[2]), $signes)){
			$signe = $user[2];
		}
		elseif(isset($user[3]) && in_array(strtolower($user[3]), $signes)){
			$signe = $user[3];
		}
		else{
			$signe = false;
		}

		$order[$signe][] = array($user[0],$user[1],$user[4]);
    }
   /* echo "<pre>";
    //var_dump($order);
    $total = 0;
    foreach($order as $key => $value){
    	$total += count($value);
    	echo "<p>$key  -  " . count($value) . '</p>';
    }
    echo "</pre>";
    echo "<h4> Total : $total </h4>";*/
    header("Content-type: application/vnd.ms-excel"); 
    header("Content-disposition: attachment; filename=\"belier.csv\"");
    $return = '';
    foreach($order['belier'] as $user){
        $return .= implode(';',$user)."\n";
    }
    echo $return;
    fclose($handle);
}

?>