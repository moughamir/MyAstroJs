<?php
define('S_PATH_CACHE', '/httpdjail/var/www/vhosts/myastro.fr/httpdocs/cache');
$A_SIGNE=array
(
  'belier', 'taureau', 'gemeaux', 'cancer', 'lion', 'vierge', 'balance', 'scorpion',
  'sagittaire', 'capricorne', 'verseau', 'poissons', 'poisson', 'gemeau'
);

$s_signe='belier';
if( isset($_GET['signe']) and in_array($_GET['signe'], $A_SIGNE) )
  $s_signe=$_GET['signe'];
elseif( isset($_GET['signe2']) and in_array($_GET['signe2'], $A_SIGNE) )
  $s_signe=$_GET['signe2'];
else
  $s_signe='belier';

if($s_signe=='gemeau')
	$s_signe='gemeaux';
elseif($s_signe=='poisson')
	$s_signe='poissons';

echo file_get_contents(S_PATH_CACHE.'/horoscope-semaine/'.date('Ymd').'/'.$s_signe);
