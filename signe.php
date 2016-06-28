<?php

$day = $_POST['date_naissance_j'];
$month = $_POST['date_naissance_m'];
$year = $_POST['date_naissance_a'];
		
		$signe='';
		if(($day>0) && ($month>0) && ($year>0))
		{
			// B&eacute;lier  21 mars – 20 avril
			if((($month==3) && ($day>=21) || (($month==4) && $day<=20)))		{$signe = "belier";}
			// Taureau  20 avril – 21 mai
			else if((($month==4) && ($day>20)) || (($month==5) && ($day<=21)))	{$signe = "taureau";}
			// G&eacute;meaux  21 mai – 21 juin
			else if((($month==5) && ($day>21)) || (($month==6) && ($day<=21)))	{$signe = "gemeaux";}
			// Cancer  21 juin – 22 juillet
			else if((($month==6) && ($day>21)) || (($month==7) && ($day<=22)))	{$signe = "cancer";}
			// Lion  23 juillet – 23 août
			else if((($month==7) && ($day>=23)) || (($month==8) && ($day<=23)))	{$signe = "lion";}
			// Vierge  23 août – 23 septembre
			else if((($month==8) && ($day>23)) || (($month==9) && ($day<=23)))	{$signe = "vierge";}
			// Balance  23 septembre – 23 octobre
			else if((($month==9) && ($day>23)) || (($month==10) && ($day<=23)))	{$signe = "balance";}
			// Scorpion  23 octobre – 22 novembre
			else if((($month==10) && ($day>21)) || (($month==11) && ($day<=22))){$signe = "scorpion";}
			// Sagittaire  22 novembre – 22 d&eacute;cembre
			else if((($month==11) && ($day>22)) || (($month==12) && ($day<=22))){$signe = "sagittaire";}
			// Capricorne  22 d&eacute;cembre – 20 janvier
			else if((($month==12) && ($day>22)) || (($month==1) && ($day<=20)))	{$signe = "capricorne";}
			// Verseau  20 janvier – 19 f&eacute;vrier
			else if((($month==1) && ($day>20)) || (($month==2) && ($day<19)))	{$signe = "verseau";}
			// Poissons  19 f&eacute;vrier – 21 mars
			else if((($month==2) && ($day>=19)) || (($month==3) && ($day<21)))	{$signe = "poissons";}
		}


$lien=$_GET["cat"];

$url=$lien.'-'.$signe.'.php';

$url_vide=$lien.'/'.$lien.'.php';

if (($day == 'Jour') or ($month == 'Mois') or ($year == 'Année')){

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