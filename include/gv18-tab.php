<?php
session_start();
if(isset($_GET['t'])) {
    $curUrl = strtok($_SERVER["REQUEST_URI"],'?');
    $_SESSION['gv'] = $_GET['t'];
    $p= $_GET['p'];
    header("location: ".$curUrl."?p=".$p);
}

$correspondance = [
    'tchat' => 'gv18-tchat',
    'rdv' => 'gv18-rdv',
    'dri' => 'gv18-dri',
];
$redirectUrl = !empty($_SESSION["gv"]) ? $correspondance[$_SESSION["gv"]] : '';
if(empty($redirectUrl)) {
    $redirectUrl = $correspondance["dri"];
}

?>