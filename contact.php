<?php
    $nom = $prenom = $email = $tel = $sujet = $msg ='';
/*
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
	*/
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Formulaire de contact | MyAstro</title>
        <meta name="robots" content="noindex,nofollow" />
            
        <?php include('include/header_inc.php');?>
    
        <div class="container-fluid">
            <!-- Main Content -->
            <header>
                <h1 itemprop="headline">Page de contact</h1>
            </header>
            <div class="row-fluid">
                <div>
                    <form method="POST" action="contact">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control" value="<?= $nom;?>" required />
                        </div>
                        <div class="form-group">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control" value="<?= $prenom;?>" required />
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone</label>
                            <input type="text" id="tel" name="tel" class="form-control" value="<?= $tel;?>" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?= $email;?>" required />
                        </div>
                        <div class="form-group">
                            <label for="sujet">Sujet</label>
                            <input type="text" id="sujet" name="sujet" class="form-control" value="<?= $sujet;?>" required />
                        </div>			
                        <div class="form-group">
                            <label for="msg">Message</label>
                            <textarea id="msg" name="msg" class="form-control" required><?= $msg;?></textarea>
                        </div>
                        <div class="g-recaptcha" data-sitekey="6LezqysUAAAAABmZH8xdpdDB5vHX5oASsndrD_KL"></div>
                        <button type="submit" name="valider" class="btn btn-primary">Valider</button>
                    </form>
                </div>
            </div>
        </div>
    
        <script src="https://www.google.com/recaptcha/api.js"></script>
    
	<?php include('include/footer_inc_index.php');?>
   