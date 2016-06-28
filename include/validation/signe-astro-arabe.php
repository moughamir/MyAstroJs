<?php

session_start();
$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

/* ========================================================================== * 
 *                        INITIALISATION DES VARIABLES                        *
 * ========================================================================== */

$err = array();

$prenom           = (isset($param['prenom'])) ? $param['prenom'] : false;
$date_naissance_j = (isset($param['jour']))   ? $param['jour']   : false;
$date_naissance_m = (isset($param['mois']))   ? $param['mois']   : false;
$date_naissance_a = (isset($param['annee']))  ? $param['annee']  : false;
$dri              = (isset($param['dri']))    ? $param['dri']    : false;

$redirect_method = (isset($param['redirect_method'])) ? $param['redirect_method'] : 'url';


/* ========================================================================== * 
 *                         TRAITEMENT DE L'UTILISATEUR                        *
 * ========================================================================== */

$test_prenom = trim($prenom, ' ');
if(empty($test_prenom)){
    $err['prenom'] = 'Merci dʼindiquer votre prénom';
} elseif(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom)){
    $err['prenom'] = 'Merci dʼindiquer votre prénom sans chiffres';
}

if($date_naissance_j && $date_naissance_m && $date_naissance_a){
    if($date_naissance_j > 0 && $date_naissance_m > 0 && $date_naissance_a > 0){
        $signe = get_signe_astro_arabe($date_naissance_j, $date_naissance_m);
    }
} else {
    $err['date_naissance'] = 'Merci dʼindiquer votre date de naissance';
}


/* ========================================================================== * 
 *                         TRAITEMENT DE LA REDIRECTION                       *
 * ========================================================================== */

if (!$dri) {
    $err['dri'] = 'Donnée de redirection manquante.';
}

/* ========================================================================== * 
 *                          ENREGISTREMENT EN SESSION                         *
 * ========================================================================== */

if(empty($err)){
    $_SESSION['prenom'] = $prenom;
    $_SESSION['jour']   = $date_naissance_j;
    $_SESSION['mois']   = $date_naissance_m;
    $_SESSION['annee']  = $date_naissance_a;
    $_SESSION['signe']  = $signe;

/* ========================================================================== * 
 *                                 REDIRECTION                                *
 * ========================================================================== */
    
    die(json_encode(array($redirect_method => $dri)));
    
} else {
    die(json_encode($err));
}
