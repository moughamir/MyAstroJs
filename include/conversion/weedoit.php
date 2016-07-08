<?php 
/** Conversion Weedoit
 * idcpart = identifiant de compte weedoit
 * reqid = variable ajoutée par Weedoit dans l'URL de la landing
 * idr = paramètre unique qui représente le numéro de transaction, l’identifiant du lead sur votre base.
 */ 
$affiliation = $_SESSION['affiliation'];
$formulaire = $_SESSION['source'];
$email = $_SESSION['email'];
if(isset($_SESSION['conversion']) && $_SESSION['conversion'] == 2 && $_SESSION['affiliation'] == 'weedoit' && isset($_SESSION['weedoitreqid'])){
    $url = 'http://www.weedoit.fr/tracking/s2strack.php?idcpart=12569&reqid='.$_SESSION['weedoitreqid'].'&idr='.$_SESSION['user_id'];
    unset($_SESSION['weedoitreqid']);
}
