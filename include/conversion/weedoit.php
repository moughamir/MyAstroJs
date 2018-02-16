<?php 
/** Conversion Weedoit
 * idcpart = identifiant de compte weedoit
 * reqid = variable ajoutée par Weedoit dans l'URL de la landing
 * idr = paramètre unique qui représente le numéro de transaction, l’identifiant du lead sur votre base.
 */

if($_SESSION['affiliation'] == 'weedoit' && isset($_SESSION['weedoitreqid'])){
    if(isset($_SESSION['conversion']) && $_SESSION['conversion'] >= 1){

        $url = 'http://www.weedoit.fr/tracking/s2strack.php?idcpart=16527&reqid='.$_SESSION['weedoitreqid'].'&idr='.$_SESSION['user_id'].'&email='.$_SESSION['email'];
        file_get_contents($url);
        if(isset($_SESSION['user_id'])){
            $bdd->update($bdd->users, ['conversion' => 1], ['internal_id' => $_SESSION['user_id']]);
        }

        unset($_SESSION['conversion']);
        unset($_SESSION['weedoitreqid']);
    }
}