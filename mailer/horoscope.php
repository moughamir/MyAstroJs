<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

	require 'PHPMailerAutoload.php';
	require '../include/tools.php' ;

	$bdd	= new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
	$mail 	= new PHPMailer;

	// $mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->Host = 'mail.myastro.fr';  // Specify main and backup server
	// $mail->SMTPAuth = true;                               // Enable SMTP authentication
	// $mail->Username = 'myastro';                            // SMTP username
	// $mail->Password = 'fYJAWB2RqK9fJ';                           // SMTP password
	// $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'horoscope@myastro.fr';
	$mail->FromName = 'Myastro';
	$mail->addAddress('julien.kgcom@gmail.com');               // Name is optional
	$mail->addReplyTo('no-reply@myastro.fr', 'MyAstro');

	$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
	$mail->isHTML(true);                                  // Set email format to HTML

	$mail->Subject = 'Julien, votre vrai horoscope '.date('d-m-Y');
	$mail->Body    = '<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Horoscope-Myastro-jour</title>
</head>
<body leftmargin="0" topmargin="0" bgcolor="#FFFFFF" marginheight="0" marginwidth="0">
<table bgcolor="#FFFFFF" border="0" cellpadding="0" cellspacing="0" width="100%">
<tbody>
  <tr>
    <td align="center">
	<table id="Table_01" style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" align="center" border="0" cellpadding="0" cellspacing="0" height="904" width="650">
        <tbody>

          <tr>
            <td height="25"><table style="background: none repeat scroll 0% 0% rgb(255, 255, 255);" border="0" width="650">
                <tbody>
                  <tr>
                    <td style="font-family: Arial,Helvetica,sans-serif; font-size: 12px; color: rgb(0, 0, 0); text-align: center;" align="center" height="20" width="650">Si cet e-mail ne s affiche pas correctement,visualisez la : <a style="text-decoration: underline; color: rgb(255, 4, 7);" href="[EMV LINK]16[EMV /LINK]">version en ligne</a></td>
                  </tr>
                </tbody>
              </table>
            </td></tr><tr>
            <td height="34" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]2[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_02.jpg" alt="" style="display: block;" border="0" height="34" width="488"></a></td> 
                    
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]3[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_03.jpg" alt="" style="display: block;" border="0" height="34" width="78"></a></td>
                                        <td align="left" valign="top" width="650"><a href="[EMV LINK]4[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_04.jpg" alt="" style="display: block;" border="0" height="34" width="84"></a></td>
                    </tr>
                </tbody>
              </table>
              </td></tr>
          <tr>
            <td style="background-repeat:no-repeat;" background="http://www.myastro.fr/images/mail/horoscope_jour/logomyastro.png" height="85" valign="top" width="650">
			<div style="width:650px;height:85px;color:#FFFFFF;text-align:right;padding-top:12px;padding-right:10px;font-family: Impact, \'Comic Sans MS\';font-size:16px;background-image: url(http://www.myastro.fr/images/mail/horoscope_jour/logomyastro.png);background-repeat:no-repeat;display: block;border:0px;">  
                    

[EMV FIELD]FIRSTNAME[EMV /FIELD], votre horoscope du [EMV SYSDATE]dd/MM/yyyy,fr[EMV /SYSDATE]
                    
'.file_get_contents(S_PATH_CACHE.'/horoscope-quotidien/'.date('Ymd').'/poissons').'

                    </div>
                  
              </td></tr>
                      <tr>
            <td height="100" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]5[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_06.jpg" alt="" style="display: block;" border="0" height="100" width="650"></a></td> 
                    </tr>
                </tbody>
              </table>
              </td></tr>

              </td></tr>
                        
              <tr>
            <td height="103" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]7[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_22.jpg" alt="" style="display: block;" border="0" height="129" width="337"></a></td> 
                                        <td align="left" valign="top" width="650"><a href="[EMV LINK]8[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_23.jpg" alt="" style="display: block;" border="0" height="129" width="313"></a></td> 
                    </tr>
                </tbody>
              </table>
              </td></tr> 
                     <tr>
            <td height="100" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="337"><a href="[EMV LINK]9[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_20.jpg" alt="" style="display: block;" border="0" height="103" width="337"></a></td> 
                                        <td align="left" valign="top" width="337"><a href="[EMV LINK]10[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_21.jpg" alt="" style="display: block;" border="0" height="103" width="313"></a></td> 
                                        <td align="left" valign="top" width="313"></td> 
                    </tr>
                </tbody>
              </table>
              </td></tr>  
                             <tr>
            <td height="133" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]11[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_24.jpg" alt="" style="display: block;" border="0" height="133" width="337"></a></td> 
                                        <td align="left" valign="top" width="650"><a href="[EMV LINK]12[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_25.jpg" alt="" style="display: block;" border="0" height="133" width="313"></a></td> 
                                        <td align="left" valign="top" width="650"> </td> 
                    </tr>
                </tbody>
              </table>
              </td></tr>         
     <tr>
            <td height="152" valign="top" width="650">
			<table border="0" cellpadding="0" cellspacing="0" width="650">

  <tbody>
 <tr>                   
                    <td align="left" valign="top" width="650"><a href="[EMV LINK]13[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_26.jpg" alt="" style="display: block;" border="0" height="152" width="337"></a></td> 
                                        <td align="left" valign="top" width="650"><a href="[EMV LINK]14[EMV /LINK]"><img src="http://www.myastro.fr/images/mail/horoscope_jour/News-horoscope_27.jpg" alt="" style="display: block;" border="0" height="152" width="313"></a></td> 
                                        <td align="left" valign="top" width="650"> </td> 
                    </tr>
                </tbody>
              </table>
              </td></tr>                  
<tr>
     <td height="39" width="650"><table border="0" cellpadding="0" cellspacing="0" width="650">
                <tbody>
                  <tr>

                    <td><table border="0" cellpadding="0" cellspacing="0" width="650">
                        <tbody>
                        <tr><td align="right" height="43" valign="top" width="168"><a href="[EMV LINK]15[EMV /LINK]" target="_blank"><img src="http://www.myastro.fr/images/mail/horoscope_jour/SE-DESINSCRIRE.jpg" alt="" border="0" height="39" width="43"></a></td>
                          <td align="left" valign="top" width="482"><p style="font-family:Arial, Helvetica, sans-serif; color:#371200; font-size:10px;"><br>

                            Si vous voulez ne plus recevoir des promotions de www.myastro.fr <a style="text-decoration: underline; font-family: Arial,Helvetica,sans-serif; color: rgb(255, 4, 7); font-size: 11px;" href="[EMV LINK]15[EMV /LINK]" target="_blank">cliquez ici</a></p></td>
                        </tr>
                      </tbody></table></td>

                  </tr>
              </tbody></table></td>
          </tr>
        </tbody>
      </table>
</td>
    </tr>
  </tbody>
</table>


</body></html>';
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	if(!$mail->send()) {
	   echo 'Message could not be sent.';
	   echo 'Mailer Error: ' . $mail->ErrorInfo;
	   exit;
	}

	echo 'Message has been sent';

?>