<?php
if(isset($_POST['demande_rappel']) && empty($_POST['antisp']) && !isset($_SESSION['demanderappel'])){
	$destinataire = 'thierno.kgcom@gmail.com';
	$sujet = utf8_decode('[MYASTRO - DRI] - '.$_POST['prenom'].' - '. uniqid());
	$email = 'contact@myastro.fr';
	$headers = 'From: Myastro - Demande de rappel  <' . $email . '>' . "\r\n" . 'Reply-To: ' . $email;
	$headers .= "Content-Type: text/html; charset=\"utf-8\"";
	$message .= "Prénom : ".$_POST['prenom']. "\r";
	$message .= "Téléphone : ".$_POST['tel']."\r";
	$message .= "Pays : ".$_POST['pays']."\r";
	$message .= "Page : ".$url."\r";
	$message .= "Site : My Astro\r";
	$message .= "Source : ".$source_affil."\r"; 
	$message .= "Support : DRI\r"; 
	if(mail($destinataire, $sujet, $message, $headers)){
		echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
		$_SESSION['demanderappel'] = true;
	}
	else{
		echo '<p class="erreur_envoye">Votre message n\'a pas été correctement envoyé</p>';
	}
}else if(isset($_SESSION['demanderappel'])){
	echo '<p class="message_envoye">Merci, votre demande a bien été prise en compte.<br/><strong>Un voyant vous recontactera dans quelques instants</strong>.</p>';
}
?>
