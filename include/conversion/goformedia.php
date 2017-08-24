<?php 
/* --- CONVERSION GOFORMEDIA --- */

$source     = $_SESSION['affiliation'];
$formulaire = $_SESSION['source'];
$email      = $_SESSION['email'];
$log_file   = 'logs-perso/conversion-'.$source.'.txt';

$urls_conversion = array(
    'tarot-flash-gf' => 'http://www.adv-sbpgreen-x.com/tag.php?type=lead&idc=8511&ref='.$email,
    'pdt-tchat-gf' => 'http://www.adv-sbpgreen-x.com/tag.php?type=lead&idc=8510&ref='.$email,
    'tarot-direct-gf' => 'http://www.adv-sbpgreen-x.com/tag.php?type=lead&idc=8509&ref='.$email,
);

if($source == 'goformedia' && isset($_SESSION['conversion']) && $_SESSION['conversion'] == 1){
    if(isset($urls_conversion[$formulaire])){
        $url = $urls_conversion[$formulaire];
        file_get_contents($url);
        if(isset($_SESSION['user_id'])){
            $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
        }
        unset($_SESSION['conversion']);
    }
}