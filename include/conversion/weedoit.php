<?php 
/** Conversion Weedoit
 * idcpart = identifiant de compte weedoit
 * reqid = variable ajoutée par Weedoit dans l'URL de la landing
 * idr = paramètre unique qui représente le numéro de transaction, l’identifiant du lead sur votre base.
 */ 
$affiliation = $_SESSION['affiliation'];
$formulaire = $_SESSION['source'];
$email = $_SESSION['email'];
if($_SESSION['conversion']==2 && $_SESSION['affiliation'] == 'weedoit' && isset($_SESSION['weedoitreqid'])){
    $url = 'http://www.weedoit.fr/tracking/s2strack.php?idcpart=12569&reqid='.$_SESSION['weedoitreqid'].'&idr='.$_SESSION['user_id'];
    file_put_contents("../../logs-perso/conversion-weedoit.txt", date("[d/m/Y H:i:s]")." - SUCCES - ".$url." \r\n", FILE_APPEND);
    file_get_contents($url);
    unset($_SESSION['weedoitreqid']);
} else {
    file_put_contents("../../logs-perso/conversion-".$affiliation.".txt", date("[d/m/Y H:i:s]")." - INFO - Le mail ".$email." existe déjà, le pixel de conversion n'a pas été chargé. Formulaire d'origine : ".$formulaire."\r\n", FILE_APPEND);
}
