<?php
// $fichier = '../horoscope/daily_western_'.date("Y_m").'.xml';

// $valeur_jour = date("d");
// $jour = $valeur_jour - 1;
// $tablo_signe = array("belier"=>0, "bellier"=>0, "taureau"=>1, "gemeau"=>2, "cancer"=>3, "lion"=>4, "vierge"=>5, "balance"=>6, "scorpion"=>7, "sagittaire"=>8, "capricorne"=>9, "verseau"=>10, "poisson"=>11, "gemeaux" => 2, "sagitaire"=>8,);

// $xml = simplexml_load_file($fichier);
// $utilisateur = $_GET['signe'];
if(isset($_GET['part']))
	$part = $_GET['part'];
else
	$part = $_GET['partial'];


require('../rss.php');
if($_GET['signe']=='gemeau')
{
	$signe='gemeaux';
}
elseif($_GET['signe']=='poisson')
{
	$signe='poissons';
}
else
{
	$signe=$_GET['signe'];
}
$xml1 = read_horoscope_rss('http://www.asiaflash.com/horoscope/rss_horoscope_mensuel_complet_'.$signe.'.xml',2);
// print_r($xml1);


echo substr($xml1['desc'][$part], 0, 130) . '...';
// $signe = $tablo_signe[$utilisateur];
// echo substr($xml->date[$jour]->signe[$signe]->$part, 0, 130) . '...';
