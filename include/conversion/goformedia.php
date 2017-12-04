<?php 
/* --- CONVERSION GOFORMEDIA --- */

$source     = $_SESSION['affiliation'];
$formulaire = $_SESSION['source'];
$email      = urlencode($_SESSION['email']);
$trackid    = $_SESSION['goformedia_track'];

$urls_conversion = array(
    'tarot-flash-gf' => 'http://www.adv-sbpgreen-x.com/tag_sponsorboost.php?type=lead&idc=8511&ref='.$email.'&track='.$trackid,
    'pdt-tchat-gf' => 'http://www.adv-sbpgreen-x.com/tag_sponsorboost.php?type=lead&idc=8510&ref='.$email.'&track='.$trackid,
    'tarot-direct-gf' => 'http://www.adv-sbpgreen-x.com/tag_sponsorboost.php?type=lead&idc=8509&ref='.$email.'&track='.$trackid,
);

if($source == 'goformedia' && $_SESSION['conversion'] >= 1){
    if(isset($urls_conversion[$formulaire])){
        $url = $urls_conversion[$formulaire];
        file_get_contents($url);
        if(isset($_SESSION['user_id'])){
            $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
        }
        unset($_SESSION['conversion']);
    }
}