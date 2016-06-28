<?php
	
	include('../include/Lib_handler.php');
	$nom = $_GET['nom'];
	$prenom = $_GET['prenom'];
	$dateNaissance = $_GET['date_naissance'];
	$email = $_GET['mail'];
	$offre = $_GET['offre'];
	$montant = $_GET['montant'];
	$phone = $_GET['phone'];
	$voyant = $_GET['voyant'];



	$content = '<table style=>
					<tr>
						<td>
							Une demande de rétractation vient d\'être postée sur myastro.fr.
						</td>
						<td>
						</td>
					</tr><br>
					<tr>
						<td>
							Nom : 
						</td>
						<td>
							'. $nom .'
						</td>
					</tr>
					<tr>
						<td>
							Prenom :
						</td>
						<td>
							'. $prenom .'
						</td>
					</tr>
					<tr>
						<td>
							Date de naissance : 
						</td>
						<td>
							'. $dateNaissance .'
						</td>
					</tr>
					<tr>
						<td>
							Email : 
						</td>
						<td>
							'.  $email .'
						</td>
					</tr>
					<tr>
						<td>
							Offre ou Produit concerné : 
						</td>
						<td>
							'.$offre.'
						</td>
					</tr>
					<tr>
						<td>
							Montant : 
						</td>
						<td>
							'. $montant .'
						</td>
					</tr>
					<tr>
						<td>
							Téléphone : 
						</td>
						<td>
							'. $phone .'
						</td>
					</tr>
					<tr>
						<td>
							Voyant consulté : 
						</td>
						<td>
							'. $voyant .'
						</td>
					</tr>
				</table>';
	
	$transport 	= Swift_SmtpTransport::newInstance('localhost', 25)
					->setUsername('postmaster@myastro.fr')
					->setPassword('fYJAWB2RqK9fJ');

	$mailer 	= Swift_Mailer::newInstance($transport);

	$message 	= Swift_Message::newInstance($transport);
	// Give the message a subject
	$message 	->setSubject('Demande de Rétractation')
				// Set the From address with an associative array
				->setFrom(array('contact@myastro.fr' => 'Myastro - Formulaire'))
				// Set the To addresses with an associative array
				->setTo(array(
					'thierno.kgcom@gmail.com' 	=> 'Equipe développement KgCOM',
					'standard.kgcom@gmail.com' 	=> 'Standard KgCOM',
					'contact@myastro.fr' 	=> 'Contact Myastro', 
					))
				// Give it a body
				->setBody($content,'text/html');

	// Send the message
    try{ 
	   $result = $mailer->send($message);
    }catch(Exception $e){
        die(var_dump($e));
    }

    die('ok');

?>