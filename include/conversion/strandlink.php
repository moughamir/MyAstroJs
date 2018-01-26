<?php
/* --- CONVERSION strandlink --- */

$source         = $_SESSION['affiliation'];
$formulaire     = $_SESSION['source'];
$aff_id = $_SESSION['strandlink_affiliateid'];

$log_file       = 'logs-perso/conversion-'.$source.'.txt';

$urls_conversion = array(
    'tarot-direct-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=134&aff_id='.$aff_id,
    'pdt-tchat-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=132&aff_id='.$aff_id,
    'love-tchat-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=130&aff_id='.$aff_id,
    'tarot-tchat-stdl' => 'http://tracking.strandlink.com/aff_lsr?offer_id=138&aff_id='.$aff_id,
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
            unset($_SESSION['strandlink_affiliateid']);

        }
    }

}