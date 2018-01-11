<?php 
/* --- CONVERSION strandlink --- */

$source         = $_SESSION['affiliation'];
$formulaire     = $_SESSION['source'];
$log_file       = 'logs-perso/conversion-'.$source.'.txt';

$urls_conversion = array(
    'tarot-direct-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=134&aff_id=9',
    'pdt-tchat-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=132&aff_id=9',
    'love-tchat-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=130&aff_id=9',
);

if($source == 'strandlink'){
    if(isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
        if(isset($urls_conversion[$formulaire])){
            $url = $urls_conversion[$formulaire];
            file_get_contents($url);
            if(isset($_SESSION['user_id'])){
                $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
            }
            unset($_SESSION['conversion']);
        }
    }

}