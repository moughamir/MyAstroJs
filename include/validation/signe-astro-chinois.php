<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
$err = array();

/* ========================================================================== * 
 *                         TRAITEMENT DE L'UTILISATEUR                        *
 * ========================================================================== */

// Prénom ----------------------------------------------------------------------
$prenom = form_firstname($err, $param);

// Date de naissance & Signe Astrologique --------------------------------------
$dtn_j = (isset($param['jour']))  ? $param['jour']  : false;
$dtn_m = (isset($param['mois']))  ? $param['mois']  : false;
$dtn_a = (isset($param['annee'])) ? $param['annee'] : false;

if($dtn_j && $dtn_m && $dtn_a){
    $signe = get_signe_astro_chinois($dtn_j, $dtn_m, $dtn_a);
} else {
    $err['date_naissance'] = 'Merci dʼindiquer votre date de naissance';
}

/* ========================================================================== * 
 *                         TRAITEMENT DE LA REDIRECTION                       *
 * ========================================================================== */

$dri = isset($param['dri']) ? $param['dri'] : false;
$redirect_method = (isset($param['redirect_method'])) ? $param['redirect_method'] : 'url';

if (!$dri) {
    $err['dri'] = 'Donnée de redirection manquante.';
}

/* ========================================================================== * 
 *                          ENREGISTREMENT EN SESSION                         *
 * ========================================================================== */

if(empty($err)){
    $_SESSION['prenom'] = $prenom;
    $_SESSION['jour']   = $dtn_j;
    $_SESSION['mois']   = $dtn_m;
    $_SESSION['annee']  = $dtn_a;
    $_SESSION['signe']  = $signe;

/* ========================================================================== * 
 *                                 REDIRECTION                                *
 * ========================================================================== */
    
    die(json_encode(array($redirect_method => $dri)));
    
} else {
    die(json_encode($err));
}