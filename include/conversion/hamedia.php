<!-- fichier conversion hamedia (pixel fb) -->
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
if(isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1 and $_SESSION['affiliation'] == 'hamedia'){ 
    if(isset($_SESSION['user_id'])){
        $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
    }
?>
<!-- Conversion Hamedia Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    fbq('init', '1444298548939044');
    fbq('track', 'CompleteRegistration');
</script>
<noscript>
    <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=1444298548939044&ev=CompleteRegistration&noscript=1" />
</noscript>
<!-- End Hamedia Facebook Pixel Code -->
<?php
    unset($_SESSION['conversion']);
}