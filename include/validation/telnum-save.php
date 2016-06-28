<?php
// FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== * 
 *                               INITIALISATION                               *
 * ========================================================================== */

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
$err = array();
$kgestion = new APIKGestion;
$page = explode("?", $_SERVER['HTTP_REFERER'])[0];

/* ========================================================================== * 
 *                          TRAITEMENT DES DONNÉES                            *
 * ========================================================================== */

$idindex     = $_SESSION['user_id'];
$kgestion_id = $_SESSION['kgestion_id'];
$email       = $_SESSION['email'];

// Numéro de téléphone & Pays --------------------------------------------------
$tel = isset($param['tel']) && !empty($param['tel']) ? $param['tel'] : false;
$tel_needed = isset($param['tel_needed']) ? $param['tel_needed'] : false; 
$pays = isset($param['pays']) && !empty($param['pays']) ? $param['pays'] : false;

if($tel_needed && !$tel) { // Téléphone requis mais non remplis
    $err['tel'] = 'Merci dʼindiquer votre numéro de téléphone.';
} elseif($tel) { // Téléphone remplis
    if ($pays){
        // Vérification du format
        if(!preg_match("#(0{5,}|1{5,}|2{5,}|3{5,}|4{5,}|5{5,}|6{5,}|7{5,}|8{5,}|9{5,}|1234{1,}|(01){5,}|(02){5,}|(03){5,}|(04){5,}|(05){5,}|(06){5,}|(07){5,}|(08){5,}|(09){5,})#", $tel)){
            // Si et seulement si on a pas de motifs qui se répètent, alors on check le format / pays.
            $phoneCheck = checkPhoneNumber($tel, $pays);
            if($phoneCheck['error'] != NULL && $phoneCheck['error'] != 'NULL'){
                $msg['tel'] = $phoneCheck['error'];
            } else {
                $tel  = $phoneCheck["phone"];
                $pays = $phoneCheck["pays"];
                // Ajout de l'indicatif pays au tel pour les num fr et dom pour les campagnes sms
                $tel = format_number_FR_DOM($tel, $pays);
            }
        } else {
            $err['tel'] = 'Le numéro de téléphone est incorrect.';
        }
    } else {
        $err['pays'] = 'Merci dʼindiquer votre pays de résidence.';
    }
}

// Détail de la question -------------------------------------------------------
$question['content'] = isset($param['question_content']) ? $param['question'] : isset($param['question']) ? $param['question'] : null;


/* ========================================================================== * 
 *                               ENREGISTREMENT                               *
 * ========================================================================== */
  
// KGestion --------------------------------------------------------------------
if(empty($err) && isset($kgestion_id)){
    $data = array(
        'phone'   => $tel,
        'country' => $pays,
        'questionContent' => $question['content']
    );
    $kgestion_update = $kgestion->updateUser($kgestion_id, $data);
    if (!$kgestion_update->success){
        addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur update user '.$idindex.' > '.$kgestion_update->message);
        $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
    }
}

// Myastro ---------------------------------------------------------------------
if(empty($err)){
    $bdd->update(
        $bdd->users,
        [ 
            'tel'  => $tel,
            'pays' => $pays,
        ],
        [ 'internal_id' => $idindex ]
    );
// Smartfocus ------------------------------------------------------------------
    $smartFocus->updateMember($email, intval($tel));
    
// Session ---------------------------------------------------------------------
    $_SESSION['phone'] = $tel;

/* ========================================================================== * 
 *                                 REDIRECTION                                *
 * ========================================================================== */
      
    $dri = (isset($param['dri'])) ? $param['dri'] : false;
    $dri2 = (isset($param['dri2'])) ? $param['dri2'] : 'http://www.myastro.fr/merci-voyance';
    
    if ($dri) {
        if($dri == "tchat"){
            if ( time() > strtotime(date('Y-m-d 09:00:00')) 
                & time() < strtotime(date('Y-m-d 23:59:59'))
                && !isset($_COOKIE['tchat'] ))
            {
                $redirect_url = 'http://www.myastro.fr/tchat';
            } else {
                $redirect_url = $dri2;
            }
        } else {
            $redirect_url = $dri;
        }
        
    } else {
        $redirect_url = $dri2;
    }

    die(json_encode(array('url' => $redirect_url)));
    
} else { // Fin si ERREUR
    die(json_encode($err));
}
  