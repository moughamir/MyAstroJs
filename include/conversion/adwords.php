<!-- fichier conversion adwords -->
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
if(isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1 and $_SESSION['affiliation'] == 'adwords'){
    if(isset($_SESSION['user_id'])){
        $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
    }
?>
<!-- Conversion tag Adwords -->
<!-- Google Code for MY ASTRO QUESTION INSCRIPTION Conversion Page -->
<script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 1024378253;
    var google_conversion_language = "fr";
    var google_conversion_format = "1";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "arTgCM2fhAMQjYu76AM";
    var google_remarketing_only = false;
    /* ]]> */
</script>
<script type="text/javascript" src="https://www.googleadservices.com/pagead/conversion.js"></script>
<noscript>
    <div style="display:inline;">
        <img height="1" width="1" style="border-style:none;" alt="" src="https://www.googleadservices.com/pagead/conversion/1024378253/?label=arTgCM2fhAMQjYu76AM&amp;guid=ON&amp;script=0" />
    </div>
</noscript>
<?php 
    unset($_SESSION['conversion']);
}