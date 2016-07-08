<?php
session_start(); 
	$hote='localhost';
	$uti='myastro';
	$pas='&vXShYxejV7Nnt9';
	mysql_connect($hote,$uti,$pas);
	mysql_select_db('myastrosqlfor')or die('la connexion a échoué');
	
		$message_mail = $_POST['message'];
		$mail = $_POST['email'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$phone = $_POST['phone'];
		$sujet = $_POST['sujet'];

if(($_POST['captcha']) && isset($_POST['message']) && isset($_POST['email'])  && isset($_POST['nom'])  && isset($_POST['prenom']) && isset($_POST['phone'])  && isset($_POST['sujet']) ){
		if($_POST['captcha']==$_SESSION['captcha']){
		$message_mail = $_POST['message'];
		$mail = $_POST['email'];
		$nom = $_POST['nom'];
		$prenom = $_POST['prenom'];
		$phone = $_POST['phone'];
		$sujet = $_POST['sujet'];
		
		
		$date = date("Y-m-d");
		

	
			
			if(!empty($message_mail) && !empty($mail))	{
				$insert = mysql_query("INSERT INTO contact VALUES('','$nom','$prenom','$sujet','$mail','$message_mail','$date','','$phone')");
				if($insert == 1)	{
					$message = '<span style="color:green;">Le message a &eacute;t&eacute; envoy&eacute;.</span>';
				}else{
					$message = '<span style="color:red;">Erreur. Le message n\'a pas pu être envoy&eacute; suite &agrave; un probl&ecirc;me technique.</span><br />';
				}
			}else{
				$message = '<span style="color:red;">Tous les champs sont obligatoires !</span><br />';
			}
			
			}else
			{ 
			  $message = '<span style="color:red;">Votre saisi ne correspond pas aux caractères figurant dans l\'image.</span><br />';
			}
	
}
	
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>contact</title>
	<meta name="description" content="page 404 Myastro " />
    <meta name="robots" content="noindex,nofollow">
 
<?php include('include/header_inc.php'); ?>
   


<div class="container-fluid" itemscope >
<header>
                                
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Page de contact</h1>
									
								</div>
                               
	<br><br>							
                             
 </header>
        <!-- Main Content -->
      <div class="row-fluid">
	  
	  
                                                            
								<h2><?= $message;?></h2><br>							
															<form method="POST" action="contact" class="login-form">
															<div class="input-prepend input-block-level">
                                                                    <label>Nom:</label>
                                                                    <input style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:60%;"id="Email1" name="nom" class="span10" type="name" placeholder="<?= $nom;?>" required="required" />
                                                                </div>
																
										<div class="input-prepend input-block-level">
                                                                    <label>Prénom:</label>
                                                                    <input style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:60%;"id="Email1" name="prenom" class="span10" type="name" placeholder="<?= $prenom;?>" required="required" />
                                                                </div>	

<div class="input-prepend input-block-level">
                                                                    <label>Téléphone:</label>
                                                                    <input style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:60%;"id="Email1" name="phone" class="span10" type="phone" placeholder="<?= $phone;?>" required="required" />
                                                                </div>											<div class="input-prepend input-block-level">
                                                                    <label>Sujet:</label>
                                                                    <input style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:60%;"id="Email1" name="sujet" class="span10" type="name" placeholder="<?= $sujet;?>" required="required" />
                                                                </div>					
															
                                                                <div class="input-prepend input-block-level">
                                                                    <label>Votre Email:</label>
                                                                    <input style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:60%;"id="Email1" name="email" class="span10" type="email" value="<?= $mail;?>" required="required" />
                                                                </div>
																
																
																
																
																
																<div class="input-prepend input-block-level">
                                                                    									
																	  <label>Message:</label>
																	  
                                                                    <textarea style="color:#ffffff;background-color: #1A1A1A;
border: 1px solid #3D3D3D;font-size: 11px;
font-weight: 400;width:59%;height:250px;" id="Message" name="message"  required="required" ><?= $message_mail;?></textarea>

                                                                </div>
                                                              

   <div class="input-prepend input-block-level">
                                                                    									
																	  <label>Veuillez saisir les caractères figurant dans l'image ci-dessous.</label>
																	  
                                                                    <img src="captcha.php" /><br />
					<input type="text" name="captcha" style="width:70px"/>

                                                                </div>                                                             

                                                                <button style="margin-left:50%;" type="submit" name="valider" class="btn-theme">Valider</button>
                                                            </form>
															
														
															
															
                                                        </div>
    
	
   
<?php include('include/footer_inc_index.php'); ?>
   