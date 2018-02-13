<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */

$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
$kgestion = new APIKGestion;

$err = array();
$conversion = 0;
$retour = array();
$reinscription = false;

$today_date_bdd = date('Y-m-d');
$today_datetime_bdd = date('Y-m-d H:i:s');
$today_date_smf = date('m/d/Y');


/* ========================================================================== *
 *                     TRAITEMENT DES DONNÉES DE TRACKING                     *
 * ========================================================================== */

$id_rdm  = uuid();
$ip      = $_SERVER['REMOTE_ADDR'];
$page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
$website = isset($param['site']) ? $param['site'] : '';
$source  = isset($param['affiliation']) ? $param['affiliation'] : false;
$formurl_kgs = isset($param['source']) ? $param['source'] : false;
$regformurl_kgs = null;
$page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
$serverName    = parse_url($page, PHP_URL_SCHEME)."://".$_SERVER['SERVER_NAME'];
if(!$formurl_kgs){
    addFormLog($bdd, $page, 'ERROR', 'Url du formulaire manquant');
    $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.Url du formulaire manquant';
} else {
    // Recherche de l'url kgestion
    $urlReg = str_replace($serverName.'/', "", $page);
    $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$urlReg.'"';
    $regformurl_kgs = $bdd->get_var($tracking_qry);
    if(!isset($regformurl_kgs)){
        addFormLog($bdd, $page, 'ERROR', 'Correspondance Url Kgestion non trouvée');
        $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
    } else {
        $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$formurl_kgs.'"';
        $formurl_kgs = $bdd->get_var($tracking_qry);
        if(!isset($formurl_kgs)){
            $formurl_kgs = $regformurl_kgs;
        }
    }
}

$gclid   = isset($param['gclid']) ? $param['gclid'] : '';
$voyant  = isset($param['voyant']) ? $param['voyant'] : '';
// ---- TRACKING REFLEX
$rc_affiliateid = isset($_SESSION['reflexcash_affiliateid']) ? $_SESSION['reflexcash_affiliateid'] : '';
$rc_source = isset($_SESSION['reflexcash_source']) ? $_SESSION['reflexcash_source'] : '';

if(!$website){
    $website = 'myastro.fr';
}
if(!$source){
    $source = 'naturel';
}
if(!$formurl_kgs){
    $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
}

/* ========================================================================== *
 *                        TRAITEMENT DE L'UTILISATEUR                         *
 * ========================================================================== */

// Genre -----------------------------------------------------------------------
$sexe = isset($param['sexe']) ? $param['sexe'] : null;
$sexe = str_replace('homme', 'M', $sexe);
$sexe = str_replace('femme', 'F', $sexe);

// Prénom ----------------------------------------------------------------------
$prenom = form_firstname($err, $param);
// Date de naissance & Signe Astrologique --------------------------------------
$dtn_bdd = $dtn_smf = $dtn_ses = '';
$need_birthdate = isset($param['optional_birthdate']) ? false : true;
$dtn_j = isset($param['jour'])  && !empty($param['jour'])  ? $param['jour']  : false;
$dtn_m = isset($param['mois'])  && !empty($param['mois'])  ? $param['mois']  : false;
$dtn_a = isset($param['annee']) && !empty($param['annee']) ? $param['annee'] : false;
$signe = '';

if($sexe == null) {
    $err['sexe'] = 'Merci dʼindiquer votre sexe.';
}
if($need_birthdate){
    if($dtn_j && $dtn_m && $dtn_a){
        $dtn_bdd = $dtn_a."-".$dtn_m."-".$dtn_j; // FORMAT BDD MYASTRO
        $dtn_smf = $dtn_m."/".$dtn_j."/".$dtn_a; // FORMAT SMARTFOCUS
        $dtn_ses = $dtn_j."/".$dtn_m."/".$dtn_a; // FORMAT SESSION

        $signe = get_signe_astro($dtn_j, $dtn_m);
    } else {
        $err['date_naissance'] = 'Merci dʼindiquer votre date de naissance.';
    }
}

// Adresse mail ----------------------------------------------------------------
$email = isset($param['email']) ? trim($param['email']) : false;
//if(!preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$", $email)){
//    $err['email'] = 'Cette adresse email nʼest pas valide.';
//}
//if($source !== "adwords") {
//    $sessionCheck = $_SESSION['emailCheck'];
//    $toCheckEmail = true;
//    $fromSession = false;
//    $emailResponse = null;
//    if(isset($sessionCheck) && count($sessionCheck)) {
//        if(array_key_exists($email, $sessionCheck)) {
//            $emailResponse = $sessionCheck[$email];
//            $toCheckEmail = false;
//        }
//    } else {
//        $sessionCheck = [];
//    }
//    $checkDisposable = true;
//    if($toCheckEmail) {
//        $emailResponse = $emailChecker->checkEmail($email);
//        if($emailResponse && !is_array($emailResponse)) {
//            $emailResponse = json_decode($emailResponse, true);
//        }
//        $sessionCheck[$email] = $emailResponse;
//        $_SESSION['emailCheck'] = $sessionCheck;
//    } else {
//        $fromSession = true;
//    }
//    if($emailResponse && count($emailResponse) && $emailResponse['status'] != "") {
//        switch ($emailResponse['status']) {
//            case 'invalid':
//                switch ($emailResponse['error_code']) {
//                    case 'email_address_invalid':
//                        $err['email'] = 'l\'email n\'est pas formaté correctement';
//                        break;
//                    case 'email_domain_invalid':
//                        $err['email'] = 'le domaine n\'existe pas ou n\'est pas capable de recevoir des emails';
//                        break;
//                    case 'email_account_invalid':
//                        $err['email'] = 'le compte email n\'existe pas sur le domaine';
//                        break;
//                }
//                break;
//            default:
//                if($checkDisposable) {
//                    if($emailResponse['disposable'] == 1) {
//                        $err['email'] = 'Les adresses jetables ne sont pas tolérées';
//                    }
//                }
//                break;
//        }
//    } else {
//        $err['email'] = 'Une erreur sur l\'email est survenue.';
//    }
//} else {
    if(!preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$", $email)){
        $err['email'] = 'Cette adresse email nʼest pas valide.';
    }
//}

// Numéro de téléphone & Pays --------------------------------------------------
$partenaires = isset($param['partenaires']) ? 1 : 0;
$horoscope   = isset($param['horoscope']) && !empty($param['horoscope']) ? 1 : 0;

$cguv        = isset($param['cguv']) ? $param['cguv'] : false;
if(!$cguv){
    $err['cguv'] = 'Veuillez accepter les conditions générales';
}
list($tel, $pays) = form_phone($err, $param);


/* ========================================================================== *
 *                          ENREGISTREMENT KGESTION                          *
 * ========================================================================== */

if(empty($err)){

    $post_data = array(
        'email'             => $email,
        'firstName'         => $prenom,
        'gender'            => $sexe,
        'birthday'          => $dtn_bdd,
        'sign'              => $signe,
        'phone'             => $tel,
        'country'           => $pays,
        'questionDate'      => $today_date_bdd,
        'questionCode'      => $param['question_code'],
        'isOptinNewsletter' => $horoscope,
        'isOptinPartner'    => $partenaires,
        'myastroIp'         => $ip,
        'myastroWebsite'    => $website,
        'myastroSource'     => $source,
        'myastroUrlOrigin'  => $formurl_kgs,
        'myastroUrlRegistration' => $regformurl_kgs,
        'myastroGclid'      => $gclid,
        'reflexAffilateId'  => $rc_affiliateid,
        'reflexSource'      => $rc_source,
         );

    if($reinscription){
        $kgestion_id = $user->kgestion_id;
        $kgestion_update = $kgestion->updateUser($kgestion_id, $post_data);
        if (!$kgestion_update->success){
        }
    } else {
        $kgestion_id = false;
        $kgestion_insert = $kgestion->insertUser($post_data);

        if(!$kgestion_insert->success){
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        } else {
            $kgestion_id = $kgestion_insert->id;
            die(json_encode(array('client_id' => $kgestion_id)));

        }
    }

} else {
    die(json_encode(array('error'=>$err)));
}