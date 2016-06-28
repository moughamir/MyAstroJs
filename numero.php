<?php

function calcul_destiny($date='01031986')
{
	$len=strlen($date);
	while($len>1)
	{
		$n=0;
		for($i=0;$i<$len;$i++)
		{
			$n=$n+$date[$i];
		}
		$date=''.$n;
		$len=strlen($date);
	}
	return $n;
}


$lien=$_GET["cat"];

$date= $_POST['date_naissance_j']. $_POST['date_naissance_m']. $_POST['date_naissance_a'];

$num=calcul_destiny($date);

$url=$lien.'-'.$num.'.php';
$url_vide=$lien.'/'.$lien.'.php';

if ($num == 0){

echo '<script language="Javascript">
<!--

document.location.replace("'.$url_vide.'");

// -->
</script>';}else{

echo '<script language="Javascript">
<!--

document.location.replace("'.$url.'");

// -->
</script>';

}
			?>