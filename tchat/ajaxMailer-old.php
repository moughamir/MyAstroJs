<?php
	
	include('../include/Lib_handler.php');
	$phone = $_POST['phone'];
	$data = $_POST['data'];
	$objet = $_POST['objet']; /*valeur qui va servir à différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat */
	$data = unserialize($data);
	$gender = ($data['user']['sexe'] == 'M') ? 'male' : 'female' ;
	$pays = (in_array($data['user']['pays'],array("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC","RE"))) ? 'DOMTOM' : $data['user']['pays'] ;
	$tarots = array(
			1 => 'Le bateleur',
			2 => 'Le charlot',
			3 => 'L\'empereur',
			4 => 'La force',
			5 => 'L\'imperatrice',
			6 => 'La roue de la fortune',
			7 => 'Le soleil',
			8 => 'La justice',
			9 => 'L\'Amoureux',
			10 => 'Le Monde',
			11 => 'Le Fou',
			12 => 'Tempérance'
		);
	$cartes = array();
	foreach($data['cartes'] as $c){
		$cartes[] = $tarots[substr($c,0,-4)];
	}

/****************************PAGE*********************************/
$page		  = "/tchat";
/***************************SUPPORT*******************************/
$support      = "TCHAT";
/*****PAGES:ADWORDS/FACEBOOK/ REF NAT/AFFIL1/AFFIL2/AFFILBASE******/
$affil1    	 = "affil1";
$affil2      = "affil2";
$affilbase   = "affilbase";
/****************AFFILIATION --> SOURCE*****************************/
$source_affil = "";
$affiliation  = $data['user']['affiliation'];
if($affiliation == $affil1){
	$source_affil = "AFFIL 1";
}else if($affiliation == $affil2){
	$source_affil = "AFFIL 2";
}else if($affiliation == $affilbase){
	$source_affil = "AFFIL BASE";
}
/*******************************************************************/
	$content = '<table style=>
					<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/logo_new.gif" alt="LOGO"/>
						</td>
						<td>
							Demande de Rappel.
						</td>
					</tr>
					<tr>
						<td>
							Id Astro :
						</td>
						<td>
							'. $data['user']['ID'] .'
						</td>
					</tr>
					<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/user.png"  alt="User : " width="24"/>
						</td>
						<td>
							'. $data['user']['name'] .'
						</td>
					</tr>
					<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/'.$gender.'.png"  alt="genre : " width="24"/>
						</td>
						<td>
							'. $gender .'
						</td>
					</tr>';

	if($rappel_title == 'TCHAT'){

	$content .=		'<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/birthday.png"  alt="Phone : " width="24"/>
						</td>
						<td>
							'.  $data['user']['birthdate'] .'
						</td>
					</tr>
					<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/'.$pays.'.png"  alt="'.$pays.' : " width="24"/>
						</td>
						<td>
							'.$pays.'
						</td>
					</tr>';
	}		

	$content .=		'<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/phone.png"  alt="Phone : " width="24"/>
						</td>
						<td>
							'. $phone .'
						</td>
					</tr>
					<tr>
						<td>
							<img src="http://<?= ROOT_URL ?>/images/email.png"  alt="Email : " width="24"/>
						</td>
						<td>
							'. $data['user']['email'] .'
						</td>
					</tr>
					<tr>
						<td>
							Conjoint(e)
						</td>
						<td>
							'. $data['user']['firstnameJoint'] .'
						</td>
					</tr>
					<tr>
						<td>
							Source :
						</td>
						<td>
							'. $data['user']['source'] .'
						</td>
					</tr>
					<tr>
						<td>
							Tirage des cartes : 
						</td>
						<td>
							'. implode(',',$cartes) .'
						</td>
					</tr>
					<tr>
						<td colspan="2">
							A discuté sur le chat avec <b>'.$_POST['voyant'].'</b>.
						</td>
					</tr>
				</table>';
	
	$transport 	= Swift_SmtpTransport::newInstance('localhost', 25)
					->setUsername('postmaster@myastro.fr')
					->setPassword('fYJAWB2RqK9fJ');

	$mailer 	= Swift_Mailer::newInstance($transport);

	$message 	= Swift_Message::newInstance($transport);
	// Give the message a subject : [TCHAT]- Rappel : '.$data['user']['name']
	//Pour différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat, on peut mettre $objet dans l'objet du mail
	$message 	->setSubject('[MYASTRO - '.$support.'] - '.$data['user']['name'].' - '.$data['user']['ID'])
				// Set the From address with an associative array
				->setFrom(array('contact@myastro.fr' => 'Myastro - Automatique'))
				// Set the To addresses with an associative array
				->setTo(array(
					'standard.kgcom@gmail.com' 	=> 'Standard KgCOM',
					'thierno.kgcom@gmail.com' 	=> 'Equipe développement KgCOM'
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