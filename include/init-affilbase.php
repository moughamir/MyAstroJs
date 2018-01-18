<?php
/* ----  Initialisation des données de tracking pour formulaire affil base  ----
 * -----------------------------------------------------------------------------
 *
 * Created on : 30 mars 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
include_once('tools.php');
require_once('inc/config.php');
require_once('inc/bdd.php');

$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);

$get = array_map('secure_formdata', $_GET);
$email = isset($_SESSION['ab_email']) ? $_SESSION['ab_email'] : (isset($get['email']) ? $get['email'] : false);
$idkgestion = isset($_SESSION['ab_idkgestion']) ? $_SESSION['ab_idkgestion'] : (isset($get['id']) ? $get['id'] : false);
$form = isset($form) ? $form : 'MISSING';
$request_url = isset($_SESSION['ab_request_url']) ? $_SESSION['ab_request_url'] : $_SERVER['REQUEST_URI'];
$api_exec = 0;

$source = 'affil_base';
$gclid = '';
$url = $form;

if($idkgestion){
    $kgestion = new APIKGestion;
    $tracking_data = $kgestion->getTracking($idkgestion);
    if($tracking_data){
        $api_exec = 1;
        $source = $tracking_data->source;
        $url = $tracking_data->url;
        $gclid = isset($tracking_data->gclid) ? $tracking_data->gclid : '';
    }
}

$bdd->insert(
    'logs_affilbase',
    array(
        'date' => date('Y-m-d H:i:s'),
        'email' => $email,
        'idkgestion' => $idkgestion,
        'form' => $form,
        'request_url' => $request_url,
        'api_exec' => $api_exec,
        'source' => $source
    )
);