<?php
/* --- CONVERSION REFLEXCASH --- */

$source         = $_SESSION['affiliation'];
$formulaire     = $_SESSION['source'];
$id_transaction = $_SESSION['reflexcash_transactionid'];
$email          = $_SESSION['email'];
$log_file       = 'logs-perso/conversion-'.$source.'.txt';

$urls_conversion = array(
//    'gv-rc-tchat' => 'test',
    'nouvel-an-chinois-18-tchat-rc' => ' http://ads.reflexcash.com/aff_lsr?offer_id=14270&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'noel-2017-rc' => ' http://ads.reflexcash.com/aff_lsr?offer_id=4511&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-tchat-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=13722&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'gv-rc-tchat' => 'http://ads.reflexcash.com/aff_lsr?offer_id=13720&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'gv-rc-dri' => 'http://ads.reflexcash.com/aff_lsr?offer_id=13720&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'gv-rc-rdv' => 'http://ads.reflexcash.com/aff_lsr?offer_id=13720&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'love-tchat-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=12700&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rentree-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=4511&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-to' => 'http://b2.a4trk.com/aff_lsr?offer_id=4511&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-g' => 'http://b2.a4trk.com/aff_lsr?offer_id=4511&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-tf' => 'http://b2.a4trk.com/aff_lsr?offer_id=4507&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-tod' => 'http://ads.reflexcash.com/aff_lsr?offer_id=4519&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-tfd' => 'http://b2.a4trk.com/aff_lsr?offer_id=4523&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-tosu' => 'http://b2.a4trk.com/aff_lsr?offer_id=4527&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-direct-rc-tfsu' => 'http://b2.a4trk.com/aff_lsr?offer_id=4525&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-et-amour-rc' => 'http://b2.a4trk.com/aff_lsr?offer_id=4507&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'pdt-tchat-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=8908&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'pdt-tchat-rc-cb' => 'http://ads.reflexcash.com/aff_lsr?offer_id=8908&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-flash-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=8960&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'tarot-flash-rc-cb' => 'http://ads.reflexcash.com/aff_lsr?offer_id=8960&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'vpt-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=15406&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
    'printemps-18-tchat-rc' => 'http://ads.reflexcash.com/aff_lsr?offer_id=15406&transaction_id='.$id_transaction.'&security_token=1e126cec34726cab5a0731b4d1376eeb',
);

if($source == 'reflexcash' && isset($id_transaction)){
    if(isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2){
        if(isset($urls_conversion[$formulaire])){
            $url = $urls_conversion[$formulaire];
            file_get_contents($url);
            if(isset($_SESSION['user_id'])){
                $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
            }
            unset($_SESSION['conversion']);
            unset($_SESSION['reflexcash_transactionid']);
        }
    }
}