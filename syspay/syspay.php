<?php 


$url = 'https://emi.syspay.com/process/webservice';

$montant= $_POST['mon'];
$ord= $_POST['ref'];
$desq= $_POST['des'];
$montant = number_format($montant, 2, '.', ' ');
//echo $montant;
//echo '</br></br>';
//echo $ord;
/*$params = array('redirect' => 'http://www.myastro.fr/syspay/merci-trans.htm','method' => 'PaymentRequest','application' => 'kgcom','amount' => $montant,'currency' => 'EUR','order_ref' => $ord,'description' => $desq);*/
$params = array('method' => 'PaymentRequest','application' => 'kgcom','amount' => $montant,'currency' => 'EUR','order_ref' => $ord,'description' => $desq);

// Calcul du checksum

$params['checksum'] = getChecksum($params, 'RJTq35abxzvrvUfMEV3EJkKx');

// Envoi

$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $params);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$xml = curl_exec($ch);
$xml = new SimpleXMLElement($xml);

echo '</br>';
echo '</br>';

echo '<a href="'.$xml->data->redirect_url.'"><img src="cl.png" /></a>';

echo '</br>';
echo '</br>';

echo $xml->data->redirect_url;



function getChecksum($params, $passphrase) { 
    ksort($params); 
    $string = ''; 
    foreach($params as $key => $value) { 
        $string .= $key.'='.$value.'&'; 
    } 
    return sha1($string . $passphrase); 
}

?>