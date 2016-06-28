<?php

include("geoiploc.php");
function countryCityFromIP($ipAddr)
{
//function to find country and city from IP address
//Developed by Roshan Bhattarai http://roshanbh.com.np

//verify the IP address for the
ip2long($ipAddr)== -1 || ip2long($ipAddr) === false ? trigger_error("Invalid IP", E_USER_ERROR) : "";
$ipDetail=array(); //initialize a blank array

//get the XML result from hostip.info
$xml = file_get_contents("http://api.hostip.info/?ip=".$ipAddr);

//get the city name inside the node <gml:name> and </gml:name>
preg_match("@<Hostip>(\s)*<gml:name>(.*?)</gml:name>@si",$xml,$match);

//assing the city name to the array
$ipDetail['city']=$match[2]; 

//get the country name inside the node <countryName> and </countryName>
preg_match("@<countryName>(.*?)</countryName>@si",$xml,$matches);

//assign the country name to the $ipDetail array
$ipDetail['country']=$matches[1];

//get the country name inside the node <countryName> and </countryName>
preg_match("@<countryAbbrev>(.*?)</countryAbbrev>@si",$xml,$cc_match);
$ipDetail['country_code']=$cc_match[1]; //assing the country code to array

//return the array containing city, country and country code
return $ipDetail;

}
$ip = $_SERVER['REMOTE_ADDR'];
$country = getCountryFromIP($ip);
	if ($country == "FR") $indic="+33";
	if ($country == "BE") $indic="+32"; 
	if ($country == "CH") $indic="+41";
	if ($country == "CA") $indic="+1"; 
	if (($country != "FR") & ($country != "CA") & ($country != "BE") & ($country != "CH")) $indic="+"; 
	

$car=0;
$car=$_GET["car"];
$ch=$_GET["ch"];
$vt=$_GET["vt"];
$email1 = $_GET["m"];
$page='true';
$db_host = "localhost";
$DB_Username = "myastro";
$Db_pass = "fYJaWB2RqKZ9fJ";
$Db_name = "myastroslimit";
mysql_connect ("$db_host", "$DB_Username", "$Db_pass") or die ("Impossible de se connecter à mysql");
mysql_select_db ("$Db_name") or die ("pas de base de données");
		
		
		
function removeHTML($texttovalid){
		$texttovalid = trim($texttovalid);
		if(strlen($texttovalid)>0){
			$texttovalid = htmlspecialchars(stripslashes($texttovalid));
		}
		return $texttovalid;
}

function decoder($texte){
$texte = utf8_decode($texte);
$texte = str_replace("\r", "\n", $texte);
$texte = str_replace("'", "\'", $texte);
return $texte;
}



$trouve="non";

$msg ='';
$sexe ='';
$prenom ='';
$nom ='';
//$email ='';
$date_naissance_j = "";
$date_naissance_m = "";
$date_naissance_a = "";

$tel='';

$question='sentimentale';
$choix_question='question_2';
$conjoint_prenom='';
$conjoint_date_naissance_j = "";
$conjoint_date_naissance_m = "";
$conjoint_date_naissance_a = "";

$confidentielle = "1";
$horoscope = "1";
$partenaire = "0";
$ville ="";
$pays="";


$day = "";
$month_ = "";
$year = "";



if(isset($_POST['valider'])){
    $msg ='';
    $msg1 ='';
	$sexe = $_POST['sexe'];
	$prenom = $_POST['prenom'];
	//$nom = removeHTML(decoder($_POST['nom']));
	$email = removeHTML($_POST['email']);
	$email1 = removeHTML($_POST['email1']);
	
	$date_naissance_j = $_POST['date_naissance_j'];
	$date_naissance_m = $_POST['date_naissance_m'];
	$date_naissance_a = $_POST['date_naissance_a'];
	$indic = $_POST['indic'];
	$tel = $_POST['tel'];
	

	//$question = $_POST['question'];
	//$choix_question = $_POST['choix_question'];
	$conjoint_prenom = $_POST['conjoint'];
	if ($conjoint_prenom == 'Son prénom'){$choix_question='question_1';}
	if ($conjoint_prenom == ''){$choix_question='question_1';}
	
	$conjoint_date_naissance_j = $_POST['conjoint_date_naissance_j'];
	$conjoint_date_naissance_m = $_POST['conjoint_date_naissance_m'];
	$conjoint_date_naissance_a = $_POST['conjoint_date_naissance_a'];
	
	
	/*if ($conjoint_prenom != 'Son prénom'){if(($conjoint_date_naissance_j=='') || ($conjoint_date_naissance_m=='') || ($conjoint_date_naissance_a=='')){
		$msg = '<br />Date de naissance du partenaire est obligatoire.<br />';
		
	}}*/
	
		
	
	
	$confidentielle = "1";$confidentielle_ = "true";
	
	
	

	/*if(isset($_POST['horoscope']) && $_POST['horoscope'] == 'on')
	{
		$horoscope = "1";$horoscope_ = "true";
	}
	else
	{
		$horoscope = "0";$horoscope_ = "false";
	};	
	
	if(isset($_POST['partenaire']) && $_POST['partenaire'] == 'on')
	{
		$partenaire = "1";$partenaire_ = "true";
	}
	else
	{
		$partenaire = "0";$partenaire_ = "false";
	};	
	*/
	
	
	
	//$ville = removeHTML($_POST['ville']);
	$pays = removeHTML($_POST['pays']);

	

	/*echo $sexe."<br />"; 
	echo $prenom."<br />";
	echo $nom."<br />";
	echo $email."<br />";
	echo $date_naissance."<br />";
	echo $conjoint_date_naissance."<br />";
	
	echo $tel."<br />";

	echo $question."<br />";
	echo $choix_question."<br />";
	echo $conjoint_prenom."<br />";
	
	
	echo $confidentielle."<br />";
	echo $horoscope."<br />";
	echo $partenaire."<br />";
	echo $ville."<br />";
	echo $pays."<br />";*/
	
	
	/*if ($choix_question == "question_2")
	{
		if (($conjoint_prenom == 'Son prénom') || ($conjoint_date_naissance_j == '') || ($conjoint_date_naissance_m == '') || ($conjoint_date_naissance_a == ''))
		$msg = 'Tous les champs sont obligatoires.<br />';
		
	}*/
	
	if(($sexe=='Civilité') || ($prenom=='') || ($prenom=='Votre prénom') || ($date_naissance_j=='') || ($date_naissance_m=='') || ($date_naissance_a=='') || ($pays=='Votre Pays...') || ($pays=='Téléphone')){
		$msg .= 'Tous les champs sont obligatoires.<br />';
		
	}
	
	if (!preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$",$email)){ 
			
		   $msg .= 'Adresse email invalide.<br />';
	}
	if (preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$",$email)){ 
			
		   $sql_trouve = "SELECT * FROM `ag_users` WHERE email='".$email."'";
			$req = mysql_query($sql_trouve) or die('Erreur SQL !'.$sql_trouve.'<br />'.mysql_error());
			$res = mysql_num_rows($req);
			$result1 = mysql_query($sql_trouve);
			if($res!=0)  
				{
			
			$trouve="oui";
			
			while($row1 = mysql_fetch_array($result1))
		{
		
		$idindex = $row1['internal_id'];
			

		}
			
				}
		   
		   
	}
	
	if (preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$",$email1)){ 
			
		   $sql_trouve = "SELECT * FROM `ag_users` WHERE email='".$email1."'";
			$req = mysql_query($sql_trouve) or die('Erreur SQL !'.$sql_trouve.'<br />'.mysql_error());
			$res = mysql_num_rows($req);
			$result1 = mysql_query($sql_trouve);
			if($res!=0)  
				{
			
			$trouve="oui";
			
			while($row1 = mysql_fetch_array($result1))
		{
		
		$idindex1 = $row1['internal_id'];
			

		}
			
				}
		   
		   
	}
	
	
	/*if(($pays=='') || ($pays=='Pays')){
		$msg .= 'Tous les champs sont obligatoires.<br />';
		
	}*/
	if (!preg_match('`[0-9]{9,10}`',$tel)){ 
	   $msg .= 'Numéro de téléphone non valide ex: +33612345678<br />';
	   
	}
	$existe  = substr_count($tel, "0000");
	$existe .= substr_count($tel, "1234");
	$existe .= substr_count($tel, "000100");
	$existe .= substr_count($tel, "11111");
	$existe .= substr_count($tel, "22222");
	$existe .= substr_count($tel, "33333");
	$existe .= substr_count($tel, "44444");
	$existe .= substr_count($tel, "55555");
	$existe .= substr_count($tel, "66666");
	$existe .= substr_count($tel, "77777");
	$existe .= substr_count($tel, "88888");
	$existe .= substr_count($tel, "99999");
	
	if ($existe > 0){ 
	   $msg .= 'Numéro de téléphone incorrect<br />';
	   
	}
	
	if($msg == ''){$car='1';} else {$car='0';}
	
	
	/*if($msg1 == ''){	
	$date_ques = date('Y-m-d');
	$sqlupdate= "UPDATE `ag_users` SET `tel` = '".$tel."', `pays` = '".$pays."' WHERE `ag_users`.`internal_id` = '".$idindex1."'";

$Query2 = mysql_query ($sqlupdate) or die (mysql_error ());
echo '<script language="Javascript">
<!--

document.location.replace("http://www.myastro.fr/merci-voyance");

// -->
</script>';
	}*/
	
	if($msg == ''){
	
	
		// /////////////////////////////////////////////////   Requet sql    //////////////////////////////////////////////////////////////////////
		//$msg = '<p style="color:#008000;">Vos informations ont été enregistrées et votre demande d\'inscription a été prise en compte.</p><p  style="color:#008000;">Félicitation, Vous faites désormais partie de la Tribu de MyAstro.</p>';
		
		if ($sexe == "monsieur") $sexe="homme";
		if ($sexe == "madame") $sexe="femme";
		
		 
		$day = $date_naissance_j;
		$month = $date_naissance_m;
		$year = $date_naissance_a;
		
		
		
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
			else if((($month==2) && ($day>=19)) || (($month==3) && ($day<21)))	{$signe = "poisson";}
		}
		//echo "Signe Client: ".$signe."<br />";
		
		$day_ = $conjoint_date_naissance_j;
		$month_ = $conjoint_date_naissance_m;
		$year_ = $conjoint_date_naissance_a;
		
		
		$signe_conjoint='';
		if(($day_>0) && ($month_>0) && ($year_>0))
		{
			// B&eacute;lier  21 mars – 20 avril
			if((($month_==3) && ($day_>=21) || (($month_==4) && $day_<=20)))		{$signe_conjoint = "belier";}
			// Taureau  20 avril – 21 mai
			else if((($month_==4) && ($day_>20)) || (($month_==5) && ($day_<=21)))	{$signe_conjoint = "taureau";}
			// G&eacute;meaux  21 mai – 21 juin
			else if((($month_==5) && ($day_>21)) || (($month_==6) && ($day_<=21)))	{$signe_conjoint = "gemeaux";}
			// Cancer  21 juin – 22 juillet
			else if((($month_==6) && ($day_>21)) || (($month_==7) && ($day_<=22)))	{$signe_conjoint = "cancer";}
			// Lion  23 juillet – 23 août
			else if((($month_==7) && ($day_>=23)) || (($month_==8) && ($day_<=23)))	{$signe_conjoint = "lion";}
			// Vierge  23 août – 23 septembre
			else if((($month_==8) && ($day_>23)) || (($month_==9) && ($day_<=23)))	{$signe_conjoint = "vierge";}
			// Balance  23 septembre – 23 octobre
			else if((($month_==9) && ($day_>23)) || (($month_==10) && ($day_<=23)))	{$signe_conjoint = "balance";}
			// Scorpion  23 octobre – 22 novembre
			else if((($month_==10) && ($day_>21)) || (($month_==11) && ($day_<=22))){$signe_conjoint = "scorpion";}
			// Sagittaire  22 novembre – 22 d&eacute;cembre
			else if((($month_==11) && ($day_>22)) || (($month_==12) && ($day_<=22))){$signe_conjoint = "sagittaire";}
			// Capricorne  22 d&eacute;cembre – 20 janvier
			else if((($month_==12) && ($day_>22)) || (($month_==1) && ($day_<=20)))	{$signe_conjoint = "capricorne";}
			// Verseau  20 janvier – 19 f&eacute;vrier
			else if((($month_==1) && ($day_>20)) || (($month_==2) && ($day_<19)))	{$signe_conjoint = "verseau";}
			// Poissons  19 f&eacute;vrier – 21 mars
			else if((($month_==2) && ($day_>=19)) || (($month_==3) && ($day_<21)))	{$signe_conjoint = "poisson";}
		}
		//echo "Signe Conjoint: ".$signe_conjoint;
		$date1 = $date_naissance_a."-".$date_naissance_m."-".$date_naissance_j;
		$date2 = $conjoint_date_naissance_a."-".$conjoint_date_naissance_m."-".$conjoint_date_naissance_j;
		
		
		if ($conjoint_prenom == "Son prénom") {$conjoint_prenom="";};
		//if ($choix_question == "question_4") {$conjoint_prenom="";};
		//if ($choix_question == "question_3") {$conjoint_prenom="";};
	
		
		function uuid() {
  
   // The field names refer to RFC 4122 section 4.1.2

   return sprintf('%04x%04x-%04x-%03x4-%04x-%04x%04x%04x',
       mt_rand(0, 65535), mt_rand(0, 65535), // 32 bits for "time_low"
       mt_rand(0, 65535), // 16 bits for "time_mid"
       mt_rand(0, 4095),  // 12 bits before the 0100 of (version) 4 for "time_hi_and_version"
       bindec(substr_replace(sprintf('%016b', mt_rand(0, 65535)), '01', 6, 2)),
           // 8 bits, the last two of which (positions 6 and 7) are 01, for "clk_seq_hi_res"
           // (hence, the 2nd hex digit after the 3rd hyphen can only be 1, 5, 9 or d)
           // 8 bits for "clk_seq_low"
       mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535) // 48 bits for "node" 
   ); 
}
		//echo "V4 UUID: " . uuid() . '<br />';
		
		$id_random = uuid();
		//echo $id_random;
		
		
		
		$datean1= $date_naissance_m."/".$date_naissance_j."/".$date_naissance_a;
		$datean2= $conjoint_date_naissance_m."/".$conjoint_date_naissance_j."/".$conjoint_date_naissance_a;
		
		$today = date("m/d/Y");
		
		
		
		$site = "true";
		$confidentielle_ = "true";
		
		$tel= $indic.$tel;
		///////////////////////////////////////////////  ici sql //////////////////////////////////////////////
		
// ici
if ($trouve == "non"){

		
		$date_ques = date('Y-m-d');
		$sqlCommand = "INSERT INTO `myastroslimit`.`ag_users` (`internal_id`, `id`, `ip_adress`, `history`, `nom`, `prenom`, `sexe`, `dateNaissance`, `signeAstrologique`, `conjoint`, `email`, `ville`, `questionDate`, `questionSujet`, `questionContent`, `horoscope`, `signe2`, `partenaires`, `date_naissance_conjoint`, `voyant`, `voyant1`, `tel`, `pays`) VALUES ('NULL', '$id_random', '$ip', CURRENT_TIMESTAMP, '$nom', '$prenom', '$sexe', '$date1', '$signe', '$conjoint_prenom', '$email', '$ville', CURDATE(), '$question', '$choix_question', '$horoscope', '$signe_conjoint', '$partenaire', '$date2', '$page', '$vt', '$tel', '$pays')";
		
$msg = '<font style="color:green;">Votre inscription a bien été prise en compte.Merci</font>';

		$Query = mysql_query ($sqlCommand) or die (mysql_error ());

		$My_msg = "Merci, toutes les données ont été communiquées.";
		
		echo '<script language="Javascript">
<!--

document.location.replace("http://tre.emv3.com/D2UTF8?emv_tag=B7D621E86C020000&emv_ref=EdX7CqkdLXbX8SA9MOPQNo2lLzh8Hqy28j6ue6s2WMDZKVA&EMAIL_FIELD='.$email.'&CLIENTURN_FIELD='.$choix_question.'&LASTNAME_FIELD='.$nom.'&FIRSTNAME_FIELD='.$prenom.'&DATEOFBIRTH_FIELD='.$datean1.'&EMVADMIN1_FIELD='.$confidentielle_.'&EMVADMIN2_FIELD='.$horoscope_.'&DATEJOIN_FIELD='.$today.'&TITLE_FIELD='.$sexe.'&SEED3_FIELD='.$signe.'&FIRSTNAME2_FIELD='.$conjoint_prenom.'&SEED2_FIELD='.$signe_conjoint.'&NUMEROTELEPHONE_FIELD='.$tel.'&EMVADMIN3_FIELD='.$partenaire_.'&MYASTRO_FIELD='.$site.'&DATEMODIF_FIELD='.$today.'");

// -->
</script>';	

		
		} else {
	$date_ques = date('Y-m-d');
	$sqlupdate= "UPDATE `ag_users` SET `nom` = '".$nom."', `prenom` = '".$prenom."', `signe2` = '".$signe_conjoint."', `signeAstrologique` = '".$signe."', `conjoint` = '".$conjoint_prenom."', `questionDate` = '".$date_ques."', `questionSujet` = '".$question."', `questionContent` = '".$choix_question."' , `date_naissance_conjoint` = '".$date2."', `voyant` = '".$page."', `voyant1` = '".$vt."', `tel` = '".$tel."', `pays` = '".$pays."' WHERE `ag_users`.`internal_id` = '".$idindex."'";

$Query2 = mysql_query ($sqlupdate) or die (mysql_error ());

$msg = '<font style="color:green;">Votre inscription a bien été prise en compte.Merci</font>';

echo '<script language="Javascript">
<!--

document.location.replace("http://tre.emv3.com/D2UTF8?emv_tag=B7D621E86C020000&emv_ref=EdX7CqkdLXbX8SA9MOPQNo2lLzh8Hqy28j6ue6s2WMDZKVA&EMAIL_FIELD='.$email.'&CLIENTURN_FIELD='.$choix_question.'&LASTNAME_FIELD='.$nom.'&FIRSTNAME_FIELD='.$prenom.'&DATEOFBIRTH_FIELD='.$datean1.'&EMVADMIN1_FIELD='.$confidentielle_.'&EMVADMIN2_FIELD='.$horoscope_.'&TITLE_FIELD='.$sexe.'&SEED3_FIELD='.$signe.'&FIRSTNAME2_FIELD='.$conjoint_prenom.'&SEED2_FIELD='.$signe_conjoint.'&NUMEROTELEPHONE_FIELD='.$tel.'&EMVADMIN3_FIELD='.$partenaire_.'&MYASTRO_FIELD='.$site.'&DATEMODIF_FIELD='.$today.'");

// -->
</script>';

	}



	}
	
	
}

mysql_close(); 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<link rel="stylesheet" type="text/css" href="amour_fichiers/style.css">
<script type="text/javascript" src="amour_fichiers/jquery-1.js"></script>
<script language="JavaScript" src="amour_fichiers/javascript.htm" type="text/javascript"></script>

<title>Voyance Amour Gratuite Immediate</title>
<meta name="robots" content="noodp,noydir">
<meta name="description" content="">


	<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
</head>

<body>
	
	<div class="content">	
		
    	<div class="content_top">
            <div class="inner_content">
                <div class="right_form">
					<style type="text/css">
						select {
							font-size: 14px !important;
							margin-bottom: 5px !important;
							margin-right: 5px !important;
							margin-top: 5px !important;
						}
					</style>
                   
                    <div class="inner_form">
<style type="text/css">
#af-form-2019185848 .af-body .af-textWrap, #af-form-2019185848 .af-body .af-dateWrap, #af-form-2019185848 .af-body .af-selectWrap, #af-form-2019185848 .choiceList-radio-inline, #af-form-2019185848 .choiceList-radio-stacked{width:98%;display:block;float:none;}
#af-form-2019185848 .af-body a{color:#094C80;text-decoration:underline;font-style:normal;font-weight:normal;}
#af-form-2019185848 .af-body input.text, #af-form-2019185848 .af-body textarea{background-color:#ffffff;color:#000000;border-color:#7A4995;border-width:1px;border-style:solid;color:#000000;text-decoration:none;font-style:normal;font-weight:normal;font-size:12px;font-family:Verdana, sans-serif;}
#af-form-2019185848 .af-body input.text:focus, #af-form-2019185848 .af-body textarea:focus{background-color:#FFFAD6;color:#000000;border-color:#5F6BB4;border-width:2px;border-style:solid;}
#af-form-2019185848 .af-body label.choice{color:#000000;text-decoration:none;font-style:normal;font-weight:normal;font-size:12px;font-family:inherit;}
#af-form-2019185848 .af-body label.previewLabel{display:block;float:none;text-align:left;width:auto;color:#3C1852;text-decoration:none;font-style:normal;font-weight:bold;font-size:14px;font-family:Arial, sans-serif;}
#af-form-2019185848 .af-body{padding-bottom:15px;padding-top:15px;background-repeat:no-repeat;background-position:inherit;background-image:none;color:#000000;font-size:11px;font-family:Verdana, sans-serif;}
#af-form-2019185848 .af-element-radio{margin-left:10px;}
#af-form-2019185848 .af-footer{padding-right:15px;padding-left:15px;background-color:#transparent;border-width:1px;border-bottom-style:none;border-left-style:none;border-right-style:none;border-top-style:none;color:#000000;font-size:12px;font-family:Verdana, sans-serif;}
#af-form-2019185848 .af-header{padding-bottom:9px;padding-top:9px;padding-right:10px;padding-left:10px;background-color:transparent;background-repeat:no-repeat;background-position:center;background-image:url("http://www.voyancecouple.net/wp-content/themes/horoskopi/images/voyance_couple.png");border-width:1px;border-bottom-style:none;border-left-style:none;border-right-style:none;border-top-style:none;color:#FFFFFF;font-size:16px;font-family:Verdana, sans-serif;}
#af-form-2019185848 .af-quirksMode .bodyText{padding-top:2px;padding-bottom:2px;}
#af-form-2019185848 .af-quirksMode{padding-right:15px;padding-left:15px;}
#af-form-2019185848 .af-standards .af-element{padding-right:15px;padding-left:15px;}
#af-form-2019185848 .bodyText p{margin:1em 0;}
#af-form-2019185848 .buttonContainer input.submit{background-color:#0479c2;background-image:url("http://www.voyancecouple.net/wp-content/themes/horoskopi/images/recevoir-btn.png");color:#FFFFFF;text-decoration:none;font-style:normal;font-weight:normal;font-size:14px;font-family:Verdana, sans-serif;}
#af-form-2019185848 .buttonContainer input.submit{width:auto;}
#af-form-2019185848 .buttonContainer{text-align:center;}
#af-form-2019185848 .choiceList-radio-inline .af-element-radio{margin-right:0px;}
#af-form-2019185848 body,#af-form-2019185848 dl,#af-form-2019185848 dt,#af-form-2019185848 dd,#af-form-2019185848 h1,#af-form-2019185848 h2,#af-form-2019185848 h3,#af-form-2019185848 h4,#af-form-2019185848 h5,#af-form-2019185848 h6,#af-form-2019185848 pre,#af-form-2019185848 code,#af-form-2019185848 fieldset,#af-form-2019185848 legend,#af-form-2019185848 blockquote,#af-form-2019185848 th,#af-form-2019185848 td{float:none;color:inherit;position:static;margin:0;padding:0;}
#af-form-2019185848 button,#af-form-2019185848 input,#af-form-2019185848 submit,#af-form-2019185848 textarea,#af-form-2019185848 select,#af-form-2019185848 label,#af-form-2019185848 optgroup,#af-form-2019185848 option{float:none;position:static;margin:0;}
#af-form-2019185848 div{margin:0;}
#af-form-2019185848 fieldset{border:0;}
#af-form-2019185848 form,#af-form-2019185848 textarea,.af-form-wrapper,.af-form-close-button,#af-form-2019185848 img{float:none;color:inherit;position:static;background-color:none;border:none;margin:0;padding:0;}
#af-form-2019185848 input,#af-form-2019185848 button,#af-form-2019185848 textarea,#af-form-2019185848 select{font-size:100%;}
#af-form-2019185848 p{color:inherit;}
#af-form-2019185848 select,#af-form-2019185848 label,#af-form-2019185848 optgroup,#af-form-2019185848 option{padding:0;}
#af-form-2019185848 table{border-collapse:collapse;border-spacing:0;}
#af-form-2019185848 ul,#af-form-2019185848 ol{list-style-image:none;list-style-position:outside;list-style-type:disc;padding-left:40px;}
#af-form-2019185848,#af-form-2019185848 .quirksMode{width:338px;}
#af-form-2019185848.af-quirksMode{overflow-x:hidden;}
#af-form-2019185848{background-color:#DFBCD4;border-color:#FFFFFF;border-width:2px;border-style:solid;}
#af-form-2019185848{display:block;}
#af-form-2019185848{overflow:hidden;}
.af-body .af-textWrap{text-align:left;}
.af-body input.image{border:none!important;}
.af-body input.submit,.af-body input.image,.af-form .af-element input.button{float:none!important;}
.af-body input.text{width:100%;float:none;padding:2px!important;}
.af-body.af-standards input.submit{padding:4px 12px;}
.af-clear{clear:both;}
.af-element input.radio{width:inherit!important;}
.af-element label{text-align:left;display:block;float:left;}
.af-element-radio label,.af-element-radio input.radio{display:inline!important;float:none!important;}
.af-element-radio label{display:inline;}
.af-element-radio.inline{float:left;margin-left:0;margin-right:7px;}
.af-element.radio{display:block!important;}
.af-element{padding:5px 0;}
.af-form-wrapper{text-indent:0;}
.af-form{text-align:left;margin:auto;}
.af-header,.af-footer{margin-bottom:0;margin-top:0;padding:10px;}
.af-quirksMode .af-element{padding-left:0!important;padding-right:0!important;}
.choiceList-radio-inline .af-element-radio{float:left;}
.lbl-right .af-element label{text-align:right;}
body {
}
</style>
<img src="amour_fichiers/title_form.png" style="margin-left:-15px;" class="title_form" alt="">
<form method="post" class="af-form-wrapper" action="voyance-gratuite_.php">

<div id="af-form-2019185848" class="af-form">
<div id="af-body-2019185848" class="af-body af-standards">
<div class="af-element">
<label class="previewLabel" for="awf_field-52387478">Choisissez votre question gratuite :</label>

<div class="af-selectWrap"><select id="awf_field-52387478" name="custom question" tabindex="500"> 
<option class="multiChoice" value="Vais-je rencontrer quelqu'un ?">Vais-je rencontrer quelqu'un ?</option>
<option selected="selected" class="multiChoice" value="J'aime quelqu'un, mais...">J'aime quelqu'un, mais...</option>
</select>
</div><input name="meta_preselected_awf_field-52387478" value="J'aime quelqu'un, mais..." type="hidden"><div class="af-clear"></div></div>


<div class="af-element">
<label class="previewLabel" for="awf_field-52387479">Prénom de celui ou celle que vous aimez :</label>
<div class="af-textWrap"><input id="awf_field-52387479" class="text" name="conjoint" onfocus="jQuery('#conjoint').attr('checked','checked'); jQuery(this).attr('value',''); "  onBlur="javascript:if(this.value=='')this.value='Son prénom'" value="<?php if ($conjoint_prenom == '') echo "Son prénom"; else echo $conjoint_prenom; ?>" tabindex="501" type="text"></div>



<div class="af-clear"></div></div>


<div class="af-element"><div><div class="choiceList choiceList-radio-inline">
<div class="af-element-radio multiChoice">
<input class="radio" id="awf_field-523874800" name="sexe" <?php  if ($sexe == "madame") echo ' checked="checked" ';?>  value="madame" tabindex="502" type="radio"> 
<label class="choice" for="awf_field-523874800">Mme</label>
</div><div class="af-element-radio multiChoice">
<input class="radio" id="awf_field-523874801" name="sexe" value="madame" tabindex="503" type="radio"> 
<label class="choice" for="awf_field-523874801">Mlle</label>
</div><div class="af-element-radio multiChoice">
<input class="radio" id="awf_field-523874802" name="sexe" <?php  if ($sexe == "monsieur") echo ' checked="checked" ';?> value="monsieur" tabindex="504" type="radio"> 
<label class="choice" for="awf_field-523874802">Mr</label>
</div></div></div><div class="af-clear"></div>
</div>

<div class="af-element">
<label class="previewLabel" for="awf_field-52387481">Votre prénom :</label>
<div class="af-textWrap">
<input id="awf_field-52387481" name="prenom" onfocus="jQuery('#conjoint').attr('checked','checked'); jQuery(this).attr('value',''); "  onBlur="javascript:if(this.value=='')this.value='Votre prénom'" value="<?php if ($prenom == '') echo "Votre prénom"; else echo $prenom; ?>" class="text" tabindex="505" type="text">
</div>
<div class="af-clear"></div></div>
<div class="af-element">
<label class="previewLabel" for="awf_field-52387482day">Votre date de naissance :</label> 
<div class="af-dateWrap">
<select style="width: 20%;" name="date_naissance_j" >
                  <option selected="selected" value="<?php  echo $date_naissance_j;?>"><?php  if ($date_naissance_j == ""){ echo 'JJ';}else{ echo $date_naissance_j;}?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select style="width: 20%;" name="date_naissance_m">
                  <option selected="selected" value="<?php  echo $date_naissance_m;?>"><?php  if ($date_naissance_m == ""){ echo 'MM';}else{ echo $date_naissance_m;}?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>

                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <select style="width: 30%;" name="date_naissance_a">
                  <option selected="selected" value="<?php  echo $date_naissance_a;?>"><?php  if ($date_naissance_a == ""){ echo 'AAAA';}else{ echo $date_naissance_a;}?></option>
                  <option value="1912">1912</option>
                  <option value="1913">1913</option>
                  <option value="1914">1914</option>
                  <option value="1915">1915</option>
                  <option value="1916">1916</option>
                  <option value="1917">1917</option>
                  <option value="1918">1918</option>
                  <option value="1919">1919</option>
                  <option value="1920">1920</option>
                  <option value="1921">1921</option>
                  <option value="1922">1922</option>
                  <option value="1923">1923</option>
                  <option value="1924">1924</option>
                  <option value="1925">1925</option>
                  <option value="1926">1926</option>
                  <option value="1927">1927</option>
                  <option value="1928">1928</option>
                  <option value="1929">1929</option>
                  <option value="1930">1930</option>
                  <option value="1931">1931</option>
                  <option value="1932">1932</option>
                  <option value="1933">1933</option>
                  <option value="1934">1934</option>
                  <option value="1935">1935</option>
                  <option value="1936">1936</option>
                  <option value="1937">1937</option>
                  <option value="1938">1938</option>
                  <option value="1939">1939</option>
                  <option value="1940">1940</option>
                  <option value="1941">1941</option>
                  <option value="1942">1942</option>
                  <option value="1943">1943</option>
                  <option value="1944">1944</option>
                  <option value="1945">1945</option>
                  <option value="1946">1946</option>
                  <option value="1947">1947</option>
                  <option value="1948">1948</option>
                  <option value="1949">1949</option>
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
                  <option value="1952">1952</option>
                  <option value="1953">1953</option>
                  <option value="1954">1954</option>
                  <option value="1955">1955</option>
                  <option value="1956">1956</option>
                  <option value="1957">1957</option>
                  <option value="1958">1958</option>
                  <option value="1959">1959</option>
                  <option value="1960">1960</option>
                  <option value="1961">1961</option>
                  <option value="1962">1962</option>
                  <option value="1963">1963</option>
                  <option value="1964">1964</option>
                  <option value="1965">1965</option>
                  <option value="1966">1966</option>
                  <option value="1967">1967</option>
                  <option value="1968">1968</option>
                  <option value="1969">1969</option>
                  <option value="1970">1970</option>
                  <option value="1971">1971</option>
                  <option value="1972">1972</option>
                  <option value="1973">1973</option>
                  <option value="1974">1974</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                  <option value="1977">1977</option>
                  <option value="1978">1978</option>
                  <option value="1979">1979</option>
                  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                  <option value="1982">1982</option>
                  <option value="1983">1983</option>
                  <option value="1984">1984</option>
                  <option value="1985">1985</option>
                  <option value="1986">1986</option>
                  <option value="1987">1987</option>
                  <option value="1988">1988</option>
                  <option value="1989">1989</option>
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                </select>
				
</div><div class="af-clear"></div></div><div class="af-element">
<label class="previewLabel" for="awf_field-52387483">Votre email :</label>
<div class="af-textWrap"><input class="text" id="awf_field-52387483" name="email" onfocus="javascript: this.value=''"   onBlur="javascript:if(this.value=='')this.value='Votre E-mail'" value="<?php if ($email == '') echo "Votre E-mail"; else echo $email; ?>" tabindex="509" type="text">
</div><div class="af-clear"></div>
</div>
<div class="af-element">
<label class="previewLabel" for="awf_field-52387484">Votre numéro de téléphone :</label>
<div class="af-textWrap">




<input style="width:20%;" id="awf_field-52387484" class="text" name="indic" type="text" value="<? echo $indic;?>"  />
<input  style="width:72%;" id="awf_field-52387484" class="text" name="tel" type="text" onBlur="javascript:if(this.value=='')this.value='Votre Téléphone'" onfocus="javascript: this.value=''" value="<?php if ($tel == '') echo "Votre Téléphone"; else echo $tel; ?>" size="50">


</div>
<div class="af-clear"></div></div>
<div class="af-element buttonContainer">
<div class="af-clear"></div>
<div>
		<input type="submit" style="background-color: #a3d4ff;
  height:58px;width:312px;background: url('amour_fichiers/recevoir-btn.png');
border-radius:3px;
    display: inline-block;
    line-height: 22px;
    padding:7px 12px;
    margin:0;
    border: 0px solid #88bcf2; 
    color: #a0006c;
    font-size: 30px;
    font-weight: bold;
    letter-spacing: -1px;
    text-shadow: 0 1px 1px #70A7E0;
    cursor:pointer;" value="" name="valider" />
		</div>

<div class="af-clear"></div>
</div>
<div style="margin-top:20px;color:#FF00A1;margin-left:5px;right:0px;width:100%; height:auto;">
		<p style="text-align:center;font-size:11px;"><?php if ($msg == "" ){ echo $msg;}else{ echo '<img src="images_voyance/attention.png"  alt="attention" /></br>'.$msg;} ?></p>
</div>	
</div>

</div>

</form>

<!-- New Remarketing tags -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1024378253;
var google_conversion_label = "ipnICMWfg2EQjYu76AM";
var google_custom_params = window.google_tag_params;
var google_remarketing_only = true;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
  <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/1024378253/?value=1.00&amp;currency_code=EUR&amp;label=ipnICMWfg2EQjYu76AM&amp;guid=ON&amp;script=0"/>
  </div>
</noscript>

<!-- Analytics tags -->
<script type="text/javascript">

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-16975536-3']);
_gaq.push(['_trackPageview']);

(function () {
  var ga = document.createElement('script');
  ga.type = 'text/javascript';
  ga.async = true;
  ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(ga, s);
})();

</script> 

	

</body></html>