<?php
/* ------ Détermination du signe astrologique et redirection ------ */

    $day = isset($_POST['date_naissance_j']) ? $_POST['date_naissance_j'] : 0;
    $month = isset($_POST['date_naissance_m']) ? $_POST['date_naissance_m'] : 0;
    
    $lien = $_GET["cat"];
    $signe = '';
    $url_vide = $lien;
    
         if(($month ==  1 && $day >= 21) || ($month ==  2 && $day <= 18)) { $signe = "verseau";}
    else if(($month ==  2 && $day >= 19) || ($month ==  3 && $day <= 20)) { $signe = "poissons";}
    else if(($month ==  3 && $day >= 21) || ($month ==  4 && $day <= 20)) { $signe = "belier";}
    else if(($month ==  4 && $day >= 21) || ($month ==  5 && $day <= 21)) { $signe = "taureau";}
    else if(($month ==  5 && $day >= 22) || ($month ==  6 && $day <= 21)) { $signe = "gemeaux";}
    else if(($month ==  6 && $day >= 22) || ($month ==  7 && $day <= 22)) { $signe = "cancer";}
    else if(($month ==  7 && $day >= 23) || ($month ==  8 && $day <= 23)) { $signe = "lion";}
    else if(($month ==  8 && $day >= 24) || ($month ==  9 && $day <= 23)) { $signe = "vierge";}
    else if(($month ==  9 && $day >= 24) || ($month == 10 && $day <= 23)) { $signe = "balance";}
    else if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)) { $signe = "scorpion";}
    else if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)) { $signe = "sagittaire";}
    else if(($month == 12 && $day >= 22) || ($month ==  1 && $day <= 20)) { $signe = "capricorne";}

if(!empty($signe)){
    $url = $lien.'-'.$signe;
} else {
    $url = $url_vide;
}

header('Location: /'.$url);
exit;