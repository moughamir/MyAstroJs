<?php
// FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== * 
 *                               INITIALISATION                               *
 * ========================================================================== */

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
$kgestion = new APIKGestion;
$err = array();
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
        $test_baseformat = preg_match("#^[0-9]{5,}$#", $tel);
        $test_motif = preg_match("#(0{5,}|1{5,}|2{5,}|3{5,}|4{5,}|5{5,}|6{5,}|7{5,}|8{5,}|9{5,}|1234{1,}|(01){5,}|(02){5,}|(03){5,}|(04){5,}|(05){5,}|(06){5,}|(07){5,}|(08){5,}|(09){5,})#", $tel);
        if($test_baseformat && !$test_motif){
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
    
// KGestion --------------------------------------------------------------------
    if($kgestion_id){
        $kgestion_update = $kgestion->updateUser($kgestion_id, ['phone'=>$tel]);
        if (!$kgestion_update->success){
            addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur update user '.$idindex.' > '.json_encode($kgestion_update));
        }
    }
    
// Session ---------------------------------------------------------------------
    $_SESSION['phone'] = $tel;
}
  