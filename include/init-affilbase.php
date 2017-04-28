<?php
/* ----  Initialisation des données de tracking pour formulaire affil base  ----
 * -----------------------------------------------------------------------------
 *
 * Created on : 30 mars 2017 By Laurène Dourdin <2aurene@gmail.com>
 */
include('tools.php');

function secure_formdata($n){
    return htmlentities(strip_tags($n));
}
$get  = array_map('secure_formdata', $_GET);
$idkgestion = isset($get['idkgestion']) && !empty($get['idkgestion']) ? $get['idkgestion'] : false;

$source = 'affil_base';
$gclid = '';

if($idkgestion){
    $kgestion = new APIKGestion;
    $tracking_data = $kgestion->getTracking($idkgestion);
    if($tracking_data){
        $source = $tracking_data->source;
        $gclid = isset($tracking_data->gclid) ? $tracking_data->gclid : '';
    }
}