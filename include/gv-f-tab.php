<?php
session_start();
$parms = explode('&', $_SERVER['QUERY_STRING']);
if(isset($_GET['t'])) {
    $curUrl = strtok($_SERVER["REQUEST_URI"],'?');
    $_SESSION['gv'] = $_GET['t'];
    $p= $_GET['p'];
    $indexSpam = array_search('t='.$_GET['t'], $parms);
    unset($parms[$indexSpam]);
    header("location: ".$curUrl."?".join('&', $parms));
}

$correspondance = [
    'tchat' => 'gv-f-tchat',
    'rdv' => 'gv-f-rdv',
    'dri' => 'gv-f-dri',
];
$redirectUrl = !empty($_SESSION["gv"]) ? $correspondance[$_SESSION["gv"]] : '';
if(empty($redirectUrl)) {
    $redirectUrl = $correspondance["dri"];
}

?>