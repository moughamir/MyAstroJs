<?php
/* 
    --------------------------------------
    --  Demande de Rappel Post Mailing  --
    --------------------------------------

    Created on : 22 avril 2016
    Author     : Laurène Dourdin <2aurene@gmail.com>
*/

/* ############################# INITIALISATION ############################# */
include('tools.php');
require_once('inc/config.php');
require_once('inc/bdd.php');
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);

function secure_formdata($n){
    return htmlentities(strip_tags($n));
}
$form = array_map('secure_formdata', $_POST);
$state = "";

/* ########################### ENREGISTREMENT TEL ########################### */
$err = array();
if(isset($form['save_tel'])){
    $param = $form;
    include("validation/telnum-save.php");
}

/* ##################### RÉCUPERATION VARIABLES MAILING ##################### */
$codeastro = (isset($_GET['id'])) ? htmlentities(strip_tags($_GET['id'])) : false;
$code_promo = (isset($_GET['camp'])) ? htmlentities(strip_tags($_GET['camp'])) : false;
$email_base = (isset($_GET['email'])) ? htmlentities(strip_tags($_GET['email'])) : false;

/* ################### INITIALISATION DONNÉES DRI MAILING ################### */
$site        = "My Astro";
$objet       = "MYASTRO";
$support_obj = "MAILING";
$voyant      = "";

$voyants_affil2    = array("Marc", "Aline");
$voyants_affil1    = array("Jean", "Marie");
$voyants_affilbase = array("Pierre", "Laura");

/* ######################### DONNÉES SI DRI LANDING ######################### */
if((!$codeastro || !$email_base) && !$code_promo){
    $codeastro      = base_convert($_SESSION['user_id'], 10, 32);
    $email_base     = $_SESSION['email'];
    $support_obj    = 'DRI';
    $source_myastro = $_SESSION['source'];
}

/* ######################## PRÉPARATION DONNÉES USER ######################## */
$idastro = base_convert($codeastro, 32, 10);
$prenom = isset($prenom) ? $prenom : isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
$tel = isset($tel) ? $tel : isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$idastro_column = 'internal_id';
$source = $gclid = $url = $voyant = "";
$email_user  = $email_base;

/* ###################### REQUÊTE DONNÉES USER MAILING ###################### */
$base = $bdd->users;
if($idastro > 2000000){
    $base = $bdd->users_common;
    $idastro_column = 'external_id';
    $objet = "MINISITES";
}
$qry = 'SELECT * FROM '.$base.' as agu';
if(!empty($idastro)){ //si on a bien l'idastro
    $qry .= ' WHERE '.$idastro_column.'='.$idastro;
    $user = $bdd->get_row($qry);
} elseif(!empty($email_base)){ // sinon on recherche grace à l'email
    $qry .= ' WHERE email="'.$email_base.'"';
    $user = $bdd->get_row($qry);
    if(!$user){ // si pas trouvé pour myastro, recherche pour mini sites
        $base = $bdd->users_common;
        $objet = "MINISITES";
        $qry = 'SELECT * FROM '.$base.' as agu WHERE email="'.$email_base.'"';
        $user = $bdd->get_row($qry);
    }    
}
if($user){  
    $email_user = $user->email;
    $source_myastro = $user->source;
    if($base == "ag_users"){
        $prenom  = $user->prenom;
        $tel     = $user->tel;
        $gclid   = $user->gclid; // adwords uniquement sur myastro.fr
        $voyant  = $user->voyant;
        $idastro = base_convert($user->internal_id, 10, 32);
    } else {
        $prenom  = $user->firstname;
        $tel     = $user->phone; 
        $site    = $user->website;
        $idastro = base_convert($user->external_id, 10, 32);
    }
}

if(isset($form['tel'])){
    $tel = $form['tel'];
}

/* ######################## REQUÊTE DONNÉES TRACKING ######################## */
$tracking = null;
if($code_promo){
    $code_promo_decode = explode('-', $code_promo);
    $code_campagne = $code_promo_decode[0];
    $tracking_qry = 'SELECT * FROM source_to_formurl WHERE stf_codepromo ="'.$code_campagne.'"';
    $tracking = $bdd->get_row($tracking_qry);
}
if(!$tracking && isset($source_myastro)){
    $tracking_qry = 'SELECT * FROM source_to_formurl WHERE stf_source_myastro ="'.$source_myastro.'"';
    $tracking = $bdd->get_row($tracking_qry); 
}

if($tracking){
    $url    = $tracking->stf_formurl_kgestion; 
    $source = $tracking->stf_source_kgestion;
}

/* ######################## ATTRIBUTION D'UN VOYANT ######################### */
$rand = 0;
if($source == "AFFIL SWARMIZ"){
    $rand   = array_rand($voyants_affil1);
    $voyant = $voyants_affil1[$rand];
} elseif($source == "AFFIL REGIE ASTRO"){
    $rand   = array_rand($voyants_affil2);
    $voyant = $voyants_affil2[$rand];
} elseif($source == "AFFIL BASE"){
    $rand   = array_rand($voyants_affilbase);
    $voyant = $voyants_affilbase[$rand];
}
    
/* ############################# ENVOI DU MAIL ############################## */

if(isset($form['demande_rappel']) && !empty($tel) && empty($form['antisp']) && !isset($_SESSION['demanderappel']) && empty($err)){

    $destinataire = getenv('MYASTRO_MAIL_DRI') ?: 'standard.kgcom@gmail.com';
    $sujet        = utf8_decode('['.$objet.' - '.$support_obj.'] - '.htmlentities(strip_tags($prenom)).' - '.uniqid());
    $email        = 'contact@myastro.fr';
    
    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
    $headers .= 'From: Myastro - Demande de rappel  <'.$email.'>'."\r\n";
    $headers .= 'Reply-To: '.$email."\r\n";

    $message = '
        <table>
            <tr>
                <td>ID Astro : </td>
                <td>'.$idastro.'</td>
            </tr>
            <tr>
                <td>Prénom : </td>
                <td>'.$prenom.'</td>
            </tr>
            <tr>
                <td>Téléphone : </td>
                <td>'.$tel.'</td>
            </tr>
            <tr>
                <td>Pays : </td>
                <td>'.$form['pays'].'</td>
            </tr>
            <tr>
                <td>Email : </td>
                <td>'.$email_user.'</td>
            </tr>
            <tr>
                <td>Site : </td>
                <td>'.$site.'</td>
            </tr>
            <tr>
                <td>Source : </td>
                <td>'.$source.'</td>
            </tr>
            <tr>
                <td>Url : </td>
                <td>'.$url.'</td>
            </tr>';

    if(!empty($gclid) && ($source != "Naturel")){
        $message .= '
            <tr>
                <td>Gclid : </td>
                <td>'.$gclid.'</td>
            </tr>';
    }
    
    $message .= '
            <tr>
                <td>Support : </td>
                <td>'.$support_obj.'</td>
            </tr>';
        
    if(!empty($voyant)){
        $message .= '
            <tr>
                <td>Voyant : </td>
                <td>'.$voyant.'</td>
            </tr>';
    }
    
    if(isset($code_promo) && !empty($code_promo)){
        $message .= '
            <tr>
                <td>Code promo : </td>
                <td>'.$code_promo.'</td>
            </tr>';
    }
    
    $message .= '
        </table>';

    if(mail($destinataire, $sujet, $message, $headers)){
        $state = 'MAIL_SENT';
        $_SESSION['demanderappel'] = true;  
    } else {
        $state = 'MAIL_ERROR';
    }
    
} elseif(isset($_SESSION['demanderappel'])){
    $state = 'MAIL_ALREADY_SENT';
}