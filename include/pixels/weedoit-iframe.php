<?php
$weedoit = $_SESSION['affiliation'] ? : "";
if($weedoit == "weedoit" && isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1){

        $email = $_SESSION['email'];
        $idr = $_SESSION['user_id'];
        echo '<iframe src="https://www.wtrackssl01.fr/tr/tracklead.php?idcpart=12569&email='.$email.'&idr='.$idr.'" width="0" height="0" frameborder="0" scrolling="no" ></iframe>';
        $_SESSION['affiliation'] = "";
        unset($_SESSION['weedoitbis']);
        unset($_SESSION['conversion']);


}
?>