<?php
require_once('inc/config.php');
require_once('inc/bdd.php');
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
/* --------------- RECUPERATION VARIABLES --------------- */
$code = (isset($_GET['id'])) ? $_GET['id'] : "";
$campagne = (isset($_GET['camp'])) ? $_GET['camp'] : "";
$email_base = (isset($_GET['email'])) ? $_GET['email'] : "";
/* --------------- INITIALISATION DONNEES --------------- */
$id = base_convert($code, 32, 10);
$prenom = $idastro = $tel = "";
$id_astro = 'internal_id';
$source = $gclid = $source_affil = $url = "";
$email_user  = $email_base;
$site        = "My Astro";
$objet       = "MYASTRO";
$support_obj = "MAILING";
$voyant      = "";
$rand        = 0;

$voyants_affil2    = array("Marc","Aline");
$voyants_affil1    = array("Jean","Marie");
$voyants_affilbase = array("Pierre","Laura");
/* --------------- PREPARATION REQUETE --------------- */
$base = $bdd->users;
if ($id > 2000000) {
    $base = $bdd->users_common;
    $id_astro = 'external_id';
    $objet = "MINISITES";
}
$qry = 'SELECT * FROM '.$base.' as agu LEFT JOIN source_to_formurl ON source = stf_source_myastro';
if(!empty($code)){ //si on a bien l'idastro
    $qry .= ' WHERE '.$id_astro.'=' . $id;
    $user = $bdd->get_row($bdd->prepare($qry)); 
} elseif(!empty($email_base)){ // sinon on recherche grace à l'email
    $qry .= ' WHERE email="'.$email_base.'"';
    $user = $bdd->get_row($bdd->prepare($qry));
    if(!$user){ // si pas trouvé pour myastro, recherche pour mini sites
        $base = $bdd->users_common;
        $objet = "MINISITES";
        $qry = 'SELECT * FROM '.$base.' as agu LEFT JOIN source_to_formurl ON source = stf_source_myastro WHERE email="'.$email_base.'"'; 
        $user = $bdd->get_row($bdd->prepare($qry)); 
    }    
}
/* --------------- DISTRIBUTION DES DONNEES --------------- */
if($user){  
    $email_user   = $user->email; 
    $source       = $user->source; 
    $url          = !empty($user->url) ? $user->url : $user->stf_formurl_kgestion; 
    $source_affil = $user->stf_source_kgestion;

    if ($base == "ag_users") {
        $prenom = $user->prenom;
        $tel = $user->tel;   
        $gclid = $user->gclid; 
        $idastro = base_convert($user->internal_id,10,32); 
    } else {
        $prenom = $user->firstname;
        $tel = $user->phone; 
        $site = $user->website; 
        $idastro = base_convert($user->external_id,10,32);
    }  
}
/* --------------- ATTRIBUTION D'UN VOYANT --------------- */
if($source_affil == "Affil 1 Swarmiz"){
    $rand         = array_rand($voyants_affil1);
    $voyant       = $voyants_affil1[$rand];
} elseif($source_affil == "Affil 2 Régie Astro"){
    $rand         = array_rand($voyants_affil2);
    $voyant       = $voyants_affil2[$rand];
} elseif($source_affil == "Affil Base"){
    $rand         = array_rand($voyants_affilbase);
    $voyant       = $voyants_affilbase[$rand];
}
