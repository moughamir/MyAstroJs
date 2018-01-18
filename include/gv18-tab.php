<?php
session_start();
$prefix = (!empty($prefix) ? $prefix : 'gv18');
$parms = !empty($_SERVER['QUERY_STRING']) ? explode('&', $_SERVER['QUERY_STRING']) : [];
if(isset($_GET['t'])) {
    $curUrl = strtok($_SERVER["REQUEST_URI"],'?');
    $_SESSION['gv'] = $_GET['t'];
    $p= $_GET['p'];
    $indexSpam = array_search('t='.$_GET['t'], $parms);
    unset($parms[$indexSpam]);
    $newParams = count($parms) ? "?".join('&', $parms) : '';
    header("location: ".$curUrl.$newParams);
}

$correspondance = [
    'tchat' => $prefix.'-tchat',
    'rdv' => $prefix.'-rdv',
    'dri' => $prefix.'-dri',
];
$redirectUrl = !empty($_SESSION["gv"]) ? $correspondance[$_SESSION["gv"]] : '';
if(empty($redirectUrl)) {
    $redirectUrl = $correspondance["dri"];
}

?>