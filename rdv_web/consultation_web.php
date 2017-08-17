<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
$kgestion = new APIKGestion;

$err = array();
$retour = array();


/* ========================================================================== *
 *                          RECUPERATION DES INFOS  COORDONNEE BANCAIRE                         *
 * ========================================================================== */

$carte_prenom = isset($param['carte_prenom']) ? $param['carte_prenom'] : '';
$carte_nom = isset($param['carte_nom']) ? $param['carte_nom'] : '';
$carte_num = isset($param['carte_num']) ? $param['carte_num'] : '';
$crypto = isset($param['crypto']) ? $param['crypto'] : '';
$expiration_mois = isset($param['expiration_mois']) ? $param['expiration_mois'] : '';
$expiration_annee = isset($param['expiration_annee']) ? $param['expiration_annee'] : '';
$client_id = isset($param['client_id']) ? $param['client_id'] : '';
$planning_horaire_selection = isset($param['planning_horaire_selection']) ? $param['planning_horaire_selection'] : '';

/* ===============================================================================================*
*                            GESTION DES ERREURS et Validation
 * ===========================================================================================
 */

if($carte_num == ''){
    $err['carte_num_req'] = 'Numéro de la carte bancaire obligatoire';
}
if($carte_num != '' && !preg_match("$[0-9]{16}$", $carte_num)) {
    $err['carte_num'] = 'Numéro de la carte bancaire doit contenir 16 chiffres.';
}

if($crypto == ''){
    $err['crypto_req'] = 'cryptogramme de sécurité  obligatoire.';
}

if($crypto != '' && !preg_match("$[0-9]{3}$", $crypto)){
    $err['crypto'] = 'cryptogramme de sécurité  doit contenir 3 chiffres.';
}

if($planning_horaire_selection == ''){
    $err['planning_horaire_selection'] = 'Veuillez choisir l\'horaire de la consultation.';
}

if($client_id == '0'){
    $err['client_id '] = 'Veuillez choisir l\'horaire de la consultation.';
}

if(is_null($expiration_mois) || $expiration_mois == ''){
    $err['expiration_mois'] = 'le mois d\'expiration de la carte bancaire est obligatoire.';
}

if(is_null($expiration_annee) || $expiration_annee == '') {
    $err['expiration_annee'] = 'l\'année d\'expiration de la carte bancaire est obligatoire.';
}

$current_date = new DateTime();
if($current_date->format('Y') > $expiration_annee  || ($current_date->format('Y') == $expiration_annee && $current_date->format('m') > $expiration_mois)){
    $err['expiration'] = 'la date d\'expiration de la carte bancaire est invalide.';
}


/* ========================================================================== *
 *                          ENREGISTREMENT KGESTION  COORDONNEE BANCAIRE                         *
 * ========================================================================== */
if(empty($err)){

    $post_data = array(

        'client_id'      => $client_id,
        'planning_horaire_selection'      => $planning_horaire_selection,
        'cartebancaires___name___prenom'      => $carte_prenom,
        'cartebancaires___name___nom'      => $carte_nom,
        'cartebancaires___name___numero'      => $carte_num,
        'cartebancaires___name___expiration'      => $expiration_mois."/".substr($expiration_annee,2),
        'cartebancaires___name___cryptogramme'      => $crypto
    );

        $kgestion_id = false;
        $kgestion_insert = $kgestion->insertOnlineRDV($post_data);

        if(!$kgestion_insert->success){
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        } else {
            $kgestion_id = $kgestion_insert->id;
            die(json_encode(array('rdv_added' => "Consultation ajoutée . Vous allez être appelé par l'un de nos conseiller pour avoir plus de détail")));

        }


} else {
    die(json_encode(array('error'=>$err)));
}