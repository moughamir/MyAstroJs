<?php
session_start();
/********************************VARIABLES FORMULAIRES************************************.****/
$id_astro     = isset($_SESSION['user_id']) ? base_convert($_SESSION['user_id'], 10,32) : "";
$prenom       = $_SESSION['firstname'];
$tel          = $_SESSION['phone'];
$gclid        = isset($_SESSION['gclid']) ? $_SESSION['gclid'] : '';
$source       = $_SESSION['source'];
$email_user   = $_SESSION['email'];
$affiliation  = $_SESSION['affiliation'];
$page         = $_SESSION['page'];

/********************************PAGES AVEC DEMANDE DE RAPPEL*********************************/
/*$dri		  = array("/merci-voyance","/dri-3","/dri-4","/dri-5","/dri-6");
$mailing	  = array("/voyance-telephone-mail");
$page		  = str_replace(array(".php","/index"), "", $_SERVER['PHP_SELF']);*/

/****************************************SUPPORT*********************************************/
$support      = "DRI";
/********************************PAGES:ADWORDS/FACEBOOK/ REF NAT/AFFIL1/AFFIL2/AFFILBASE******/
$adwords           = "adwords";
$facebook          = "facebook";
$facebook_com      = "facebook-com";
$instagram_com	   = "instagram-com";
$affil1    	   = "affil1";
$affil2            = "affil2";
$affilbase         = "affilbase";
$affilvps          = "affilvps";
$taboola           = "taboola";
$weedoit           = "weedoit";
$voyants_affil1    = array("Jean","Marie");
$voyants_affil2    = array("Marc","Aline");
$voyants_affilbase = array("Pierre","Laura");

/******************************************AFFILIATION --> SOURCE*****************************/
$source_affil = "";
$voyant       = "";
$rand         = 0;
if($affiliation == $affil1){
    $source_affil = "AFFIL 1 SWARMIZ";
    $rand         = array_rand($voyants_affil1);
    $voyant       = $voyants_affil1[$rand];
} else if($affiliation == $affil2){
    $source_affil = "AFFIL 2 REGIE ASTRO";
    $rand         = array_rand($voyants_affil2);
    $voyant       = $voyants_affil2[$rand];
} else if($affiliation == $affilbase){
    $source_affil = "AFFIL BASE";
    $rand         = array_rand($voyants_affilbase);
    $voyant       = $voyants_affilbase[$rand];
} else if($affiliation == $affilvps){
    $source_affil = "AFFIL VPS";
} else if($affiliation == $adwords){
    $source_affil = "ADWORDS";
} else if($affiliation == $facebook){
    $source_affil = "FACEBOOK_ADDS";
} else if($affiliation == $facebook_com){
    $source_affil = "FACEBOOK";
} else if($affiliation == $instagram_com){
    $source_affil = "INSTAGRAM";
} else if($affiliation == $taboola){
    $source_affil = "TABOOLA";
} else if($affiliation == $weedoit){
    $source_affil = "WEEDOIT";
} else {
    $source_affil = "Naturel";
}