<?php
    
    /**
     * Ce cron est toujours programmé les lundi à 02:00 am. 
     * Mais ne doit plus envoyer les rapports tant qu'une solution n'a pas été trouvée pour 
     * `bypasser` l'action humaine de télécharger le rapport adwords.
     */

	/*require_once('/var/www/myastro/www/include/tools.php');
	require_once('/var/www/myastro/www/lib/Swift-5.0.3/lib/swift_required.php');


	$tracker   = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	$campainsPerWebsite = $tracker->getStatsByCampainPerWebsite(1, date('Y-m-d',time() - 60 * 60 * 24 * 7) ,date('Y-m-d',time()));
    rsort($campainsPerWebsite);


	$content = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<style type="text/css">
    @media only screen and (max-width: 480px){
        #templateColumns{
            width:100% !important;
        }

        .templateColumnContainer{
            display:block !important;
            width:100% !important;
        }

        .columnImage{
            height:auto !important;
            max-width:480px !important;
            width:100% !important;
        }

        .leftColumnContent{
            font-size:16px !important;
            line-height:125% !important;
        }

        .rightColumnContent{
            font-size:16px !important;
            line-height:125% !important;
        }
    }
	</style>
	</head>
	<body style="font-family:Arial">';

	$content .= '<table border="0" cellpadding="0" cellspacing="0" width="600" id="templateColumns" style="width:600px;border-collapse : collapse;color:#494949;">';
	$content .='<tr>
        <td align="center" valign="top" width="50%" class="templateColumnContainer">
            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <td valign="top" class="leftColumnContent">
                        <img src="http://www.myastro.fr/yyadmin/images/logo.png" />
                    </td>
                </tr>
            </table>
        </td>
        <td align="center" valign="top" width="50%" class="templateColumnContainer">
            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <td valign="top" class="rightColumnContent">
                        Rapport de campagne <br /> du <strong>'.date('d-m-Y',time() - 60 * 60 * 24 * 7).'</strong> au <strong>'.date('d-m-Y',time()).'</strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
	foreach($campainsPerWebsite as $campain){
		$name = ($campain->campain != null) ? $campain->campain : 'Non définie';
		$content .= '<tr>
        <td align="center" valign="top" width="50%" class="templateColumnContainer">
            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <td valign="top" class="leftColumnContent">
                        <strong>'.$name.'</strong>
                    </td>
                </tr>
            </table>
        </td>
        <td align="center" valign="top" width="50%" class="templateColumnContainer">
            <table border="0" cellpadding="10" cellspacing="0" width="100%">
                <tr>
                    <td valign="top" class="rightColumnContent">
                        '.$campain->total.'
                    </td>
                </tr>
            </table>
        </td>
    </tr>';
	}
	$content .=  '</table>';
	$content .=  '</body></html>';

	$bdd	 	= new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$transport 	= Swift_SmtpTransport::newInstance('localhost', 25)
					->setUsername('postmaster@myastro.fr')
					->setPassword('fYJAWB2RqK9fJ');

	$mailer 	= Swift_Mailer::newInstance($transport);

	$message 	= Swift_Message::newInstance($transport);
	// Give the message a subject
	$message 	->setSubject('[MyAstro]-Rapport de campagne du '.date('d-m-Y',time() - 60 * 60 * 24 * 7).' au '.date('d-m-Y',time()))
				// Set the From address with an associative array
				->setFrom(array('contact@myastro.fr' => 'Myastro - Rapport'))
				// Set the To addresses with an associative array
				->setTo(array(
					'julien.kgcom@gmail.com' 	=> 'Equipe développement KgCOM', 
                    'jkeloghlanian@gmail.com'   => 'Jérôme',
                    'contact.kgcom@gmail.com'   => 'Steeve'
					))
				// Give it a body
				->setBody($content,'text/html');

	// Send the message
    try{ 
	   $result = $mailer->send($message);
    }catch(Exception $e){
        die(var_dump($e));
    }*/

    die('ok');
?>