<?php
$weedoit = $_SESSION['affiliation'] ? : "";
if($weedoit == "weedoit" && isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1){

    if(isset($_SESSION['weedoitbis']) && $_SESSION['weedoitbis'] == 1){
        $email = $_SESSION['email'];
        $idr = $_SESSION['user_id'];
        $subid = isset($_SESSION['subid']) ? $_SESSION['subid'] : "";
        echo '<iframe src="https://www.wtrackssl01.fr/tr/tracklead.php?idcpart=12569&subid='.$subid.'&email='.$email.'&idr='.$idr.'" width="0" height="0" frameborder="0" scrolling="no" ></iframe>';
        $_SESSION['affiliation'] = "";
        unset($_SESSION['weedoitbis']);
        unset($_SESSION['conversion']);
        unset($_SESSION['affiliate_id']);
        unset($_SESSION['subid']);
    }

}
?>