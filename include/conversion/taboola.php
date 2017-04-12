<!-- fichier conversion taboola -->
<?php
if(!isset($bdd)){
    require_once('inc/config.php');
    require_once('inc/bdd.php');
    $bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
}
if(isset($_SESSION['user_id'])){
    $page = explode("?", $_SERVER['REQUEST_URI'])[0];
    $bdd->update($bdd->users, ['conversion_page' => $page], ['internal_id' => $_SESSION['user_id']]);
}
if(isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1 and $_SESSION['affiliation'] == 'taboola'){
    if(isset($_SESSION['user_id'])){
        $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
    }
?>
<!-- Tag de conversion TABOOLA -->
<script> window._tfa = window._tfa || []; _tfa.push( {notify : "action",name :" successful_conversion"} ); </script>
<script src="//cdn.taboola.com/libtrc/ikomvoyancesc/tfa.js"></script>
<!-- Fin Tag de conversion TABOOLA -->
<?php 
    unset($_SESSION['conversion']);
}