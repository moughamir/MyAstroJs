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
$kgestion = new APIKGestion;

$form = array_map('secure_formdata', $_POST);
$get  = array_map('secure_formdata', $_GET);

/* ########################### ENREGISTREMENT TEL ########################### */
$err = array();
if(isset($form['save_tel'])){
    $param = $form;
    include("validation/telnum-save.php");
}

/* ##################### RÉCUPERATION VARIABLES MAILING ##################### */
$codeastro  = isset($get['id']) && !empty($get['id']) ? $get['id'] : false;
$idkgestion = isset($get['idkgestion']) && !empty($get['idkgestion']) ? $get['idkgestion'] : false;
$code_promo = isset($get['camp']) && !empty($get['camp']) ? $get['camp'] : false;
$email_base = isset($get['email']) && !empty($get['email']) ? $get['email'] : false;
$makeDirectCall = isset($form['directCall']) && !empty($form['directCall']) ? $form['directCall'] : false;
$hasEmail = isset($form['email']) && !empty($form['email']) ? $form['email'] : "";
$page    = explode("?", $_SERVER['REQUEST_URI'])[0];
$urlReg = str_replace('/', "", $page);


/* ################### INITIALISATION DONNÉES DRI MAILING ################### */
$site        = "My Astro";
$objet       = "MYASTRO";
$support_obj = "MAILING";
$support_kgs = 'Mailing';

/* ######################### DONNÉES SI DRI LANDING ######################### */
if(((!$codeastro && !$idkgestion) || !$email_base) && !$code_promo){
    $codeastro      = base_convert($_SESSION['user_id'], 10, 32);
    $idkgestion     = $_SESSION['kgestion_id'];
    $email_base     = $_SESSION['email'];
    $support_obj    = 'DRI';
    $support_kgs    = 'Demande de rappel';
    $source_myastro = $_SESSION['source'];
}

/* ######################## PRÉPARATION DONNÉES USER ######################## */
$user = null;
$prenom = isset($prenom) ? $prenom : isset($_SESSION['firstname']) ? $_SESSION['firstname'] : '';
$tel = isset($tel) ? $tel : isset($_SESSION['phone']) ? $_SESSION['phone'] : '';
$source = $gclid = $url = $voyant = "";
$email_user  = $email_base;

$idastro = $codeastro ? base_convert($codeastro, 32, 10) : 0;
$idastro_column = 'internal_id';

/* ###################### REQUÊTE DONNÉES USER MAILING ###################### */
$base = $bdd->users;
if($idastro > 2000000){
    $base = $bdd->users_common;
    $idastro_column = 'external_id';
    $objet = "MINISITES";
}
$qry = 'SELECT * FROM '.$base.' as agu';
if(!empty($idkgestion)){ // si on a bien l'id kgestion
    $qry_kgs = $qry.' WHERE kgestion_id ='.$idkgestion;
    $user = $bdd->get_row($qry_kgs);
}
if(empty($user) && !empty($idastro)){ // user non trouvé mais on a bien l'idastro
    $qry_ida = $qry.' WHERE '.$idastro_column.'='.$idastro;
    $user = $bdd->get_row($qry_ida);
}
if(empty($user) && !empty($email_base)){ // user toujours non trouvé on recherche grâce à l'email
    $qry_ml = $qry.' WHERE email="'.$email_base.'"';
    $user = $bdd->get_row($qry_ml);
}
// Pas trouvé pour myastro, idastro vide (= impossible de savoir si minisite), mais a l'id kgestion > recherche pour mini sites
if(empty($user) && !$codeastro && !empty($idkgestion)){
    $base = $bdd->users_common;
    $objet = "MINISITES";
    $qry = 'SELECT * FROM '.$base.' as agu WHERE kgestion_id ='.$idkgestion;
    $user = $bdd->get_row($qry);
}
// Si trouvé, répartition des données
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
    if((!$idkgestion || empty($idkgestion)) && !empty($user->kgestion_id)){
        $idkgestion = $user->kgestion_id;
    }
}

/* ######################## TRAITEMENT DU FORMULAIRE ######################## */
$dri_ready = false;
if(empty($_POST) && in_array($urlReg, array('love-tchat-hm-dri', 'pdt-tchat-hm-dri', 'tarot-direct-rentree-hm-dri'))) {
    unset($_SESSION['demanderappel']);
}
$already_sent = isset($_SESSION['demanderappel']);
if(isset($form['demande_rappel'])){
    $prenom = form_firstname($err, $form);
    list($tel, $pays) = form_phone($err, $form);
    $dri_ready = empty($form['antisp']) && !$already_sent && empty($err);
}

/* ######################## TRAITEMENT DRI KGESTION ######################### */
$state = "";
$retour = false;
$directCall = false;
unset($_SESSION['directCall']);

if($already_sent){
    $state = 'MAIL_ALREADY_SENT';
} elseif($dri_ready){
    if(!empty($idkgestion)){
        $DRIdata = array(
            'firstName' => $prenom,
            'phone'     => $tel,
            'country'   => $pays,
            'myastroPromoCode' => !$code_promo ? '' : $code_promo,
            'myastroSupport' => $support_kgs
        );
        if($makeDirectCall) {
            $DRIdata['directCall'] = 1;
        }
        $kgestion_dri = $kgestion->registerDRI($idkgestion, $DRIdata);

        $retour = $kgestion_dri->success;
        $directCall = !empty($kgestion_dri->directCall) ? $kgestion_dri->directCall : false;

    } else {
        $tracking2 = null;
        if(isset($urlReg)){
            $tracking_qry2 = 'SELECT * FROM source_to_formurl WHERE stf_source_myastro ="'.$urlReg.'"';
            $tracking2 = $bdd->get_row($tracking_qry2);
        }
        $source = $url = "";
        if($tracking2){
            $url    = str_replace(' ', '_',strtolower($tracking2->stf_formurl_kgestion));
            $source = str_replace(' ', '_',strtolower($tracking2->stf_source_kgestion));
        }
        $DRIdata = array(
            'firstName' => $prenom,
            'phone'     => $tel,
            'country'   => $pays,
            'myastroPromoCode' => !$code_promo ? '' : $code_promo,
            'myastroSupport' => $support_kgs,
            'myastroWebsite'    => 'myastro.fr',
            'myastroSource'     => $source,
            'myastroUrlOrigin'  => $url,
            'myastroUrlRegistration' => $url,
        );
        if($makeDirectCall) {
            $DRIdata['directCall'] = 1;
        }
        if(!empty($hasEmail)) {
            $DRIdata['email'] = $hasEmail;
        }
        $kgestion_dri = $kgestion->insertDRI($DRIdata);

        $retour = $kgestion_dri->success;
        $directCall = !empty($kgestion_dri->directCall) ? $kgestion_dri->directCall : false;

///* ######################## REQUÊTE DONNÉES TRACKING ######################## */
//        $tracking = null;
//        if($code_promo){
//            $code_promo_decode = explode('-', $code_promo);
//            $code_campagne = $code_promo_decode[0];
//            $tracking_qry = 'SELECT * FROM source_to_formurl WHERE stf_codepromo ="'.$code_campagne.'"';
//            $tracking = $bdd->get_row($tracking_qry);
//        }
//        if(!$tracking && isset($source_myastro)){
//            $tracking_qry = 'SELECT * FROM source_to_formurl WHERE stf_source_myastro ="'.$source_myastro.'"';
//            $tracking = $bdd->get_row($tracking_qry);
//        }
//
//        if($tracking){
//            $url    = $tracking->stf_formurl_kgestion;
//            $source = $tracking->stf_source_kgestion;
//        }
//
///* ############################# ENVOI DU MAIL ############################## */
//        $destinataire = getenv('MYASTRO_MAIL_DRI') ?: 'standard.kgcom@gmail.com';
//        $sujet        = utf8_decode('['.$objet.' - '.$support_obj.'] - '.htmlentities(strip_tags($prenom)).' - '.uniqid());
//        $email        = 'contact@myastro.fr';
//
//        $headers  = 'MIME-Version: 1.0' . "\r\n";
//        $headers .= 'Content-Type: text/html; charset=utf-8'."\r\n";
//        $headers .= 'From: Myastro - Demande de rappel  <'.$email.'>'."\r\n";
//        $headers .= 'Reply-To: '.$email."\r\n";
//
//        $message = '
//            <table>
//                <tr>
//                    <td>ID Astro : </td>
//                    <td>'.$idastro.'</td>
//                </tr>
//                <tr>
//                    <td>Prénom : </td>
//                    <td>'.$prenom.'</td>
//                </tr>
//                <tr>
//                    <td>Téléphone : </td>
//                    <td>'.$tel.'</td>
//                </tr>
//                <tr>
//                    <td>Pays : </td>
//                    <td>'.$form['pays'].'</td>
//                </tr>
//                <tr>
//                    <td>Email : </td>
//                    <td>'.$email_user.'</td>
//                </tr>
//                <tr>
//                    <td>Site : </td>
//                    <td>'.$site.'</td>
//                </tr>
//                <tr>
//                    <td>Source : </td>
//                    <td>'.$source.'</td>
//                </tr>
//                <tr>
//                    <td>Url : </td>
//                    <td>'.$url.'</td>
//                </tr>';
//
//        if(!empty($gclid) && ($source != "Naturel")){
//            $message .= '
//                <tr>
//                    <td>Gclid : </td>
//                    <td>'.$gclid.'</td>
//                </tr>';
//        }
//
//        $message .= '
//                <tr>
//                    <td>Support : </td>
//                    <td>'.$support_obj.'</td>
//                </tr>';
//
//        if(!empty($voyant)){
//            $message .= '
//                <tr>
//                    <td>Voyant : </td>
//                    <td>'.$voyant.'</td>
//                </tr>';
//        }
//
//        if(isset($code_promo) && !empty($code_promo)){
//            $message .= '
//                <tr>
//                    <td>Code promo : </td>
//                    <td>'.$code_promo.'</td>
//                </tr>';
//        }
//
//        $message .= '
//            </table>';
//
//        $retour = mail($destinataire, $sujet, $message, $headers);
    }

/* ######################### CODE D'ÉTAT DE LA DRI ########################## */
    if($retour){
        $state = 'MAIL_SENT';
        $_SESSION['demanderappel'] = true;
        if($directCall) {
            $_SESSION['directCall'] = true;
        }
    } else {
        $state = 'MAIL_ERROR';
    }
}
