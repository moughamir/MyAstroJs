<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Voyance tarot : quels sont vos meilleurs atouts ? | Myastro</title>
    <meta  http-equiv="Content-Type" content="text/html" charset="utf-8" />
<?php 
session_start();
include('include/header_inc.php'); 
//traitement du formulaire
include('inc/class.phpmailer-new.php');

if(isset($_POST['captcha']) && isset($_POST['motivations']) && isset($_POST['mail'])  && isset($_POST['nom']) && isset($_POST['don']) && isset($_POST['prenom']) && isset($_POST['phone']) ){
    if($_POST['captcha']==$_SESSION['captcha']){
        if (isset($_POST['sexe'])) { $civilite = $_POST['sexe'];}
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['mail'];
        $phone = $_POST['phone'];
        $don = $_POST['don'];
        $motivations = $_POST['motivations'];
       
    /*   traitement de la pièce jointe

        if (isset($_FILES['cv']) AND $_FILES['cv']['error'] == 0)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['cv']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('pdf', 'doc', 'txt', 'docx');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                    //print_r($_FILES['cv']);
                    // On peut valider le fichier et le stocker définitivement
                    $resultat = move_uploaded_file($_FILES["cv"]["tmp_name"], $_FILES["cv"]["name"]);
                    if($resultat) echo "transfet reussi !"; else echo "echec envoi";
                    $cv = "candidatures/" .$_FILES['cv']['name'];
                    //echo $cv;
                }
        }*/

    
        // On créé une nouvelle instance de la classe
        $mail = new PHPMailer();
     
        // Encodage
        $mail->CharSet = 'UTF-8';

       // De qui vient le message, e-mail puis nom
        $mail->From = $email;
        $mail->FromName = $nom . ' '.$prenom;
     
       // Définition du sujet/objet
         $mail->Subject = "Candidature de ".$civilite.' '.$nom . ' '.$prenom;
     
        //On contruit le message à transmettre
        $body = "Une nouvelle candidature viens d'&#234;tre postée sur le site: \r\n\r\n";     
        $body.="<b>Nom:</b> $nom \r\n";
        $body.="<b>Prenom:</b> $prenom \r\n";
        $body.= "<b>Email:</b> $email \r\n";
        $body.= "<b>T&eacute;l&eacute;phone:</b> $phone\r\n";
        $body.="<b>Don:</b> $don \r\n";
        $body.="<b>Motivations:</b> \r\n$motivations\r\n";

       // On définit le corps du message
         $mail->MsgHTML(nl2br($body));
     
       // Il reste encore à ajouter au moins un destinataire
        $mail->AddAddress("contact@myastro.fr", "Myastro");
        $mail->AddAddress("thierno.kgcom@gmail.com", "Thierno");

        // On met notre CV en pièce jointe
        //$mail->AddAttachment($cv);

       // Pour finir, on envoi l'e-mail
        $mail->send();

                if($mail)   {
                    $message = '<span style="color:green;">Le message a &eacute;t&eacute; envoy&eacute;.</span>';
                }else{
                    $message = '<span style="color:red;">Erreur. Le message n\'a pas pu &ecirc;tre envoy&eacute; suite &agrave; un probl&ecirc;me technique.</span><br />';
                }
    }else
    {
                    $message = '<span style="color:red;">Votre saisi ne correspond pas aux caractères figurant dans l\'image.</span><br />';

    }
}

?>
   


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4"><a href="http://beta.myastro.fr/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Recrutement Myastro</h4></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Myastro recrute - Envoyez-nous votre candidature</h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<h5 itemprop="headline">Si vous êtes un <strong>professionnel des arts divinatoires</strong> et que vous souhaitez faire partie de l'<strong>équipe de voyants</strong> 

                                                                Myastro (pour audiotel France, Suisse, Belgique et CB), utilisez ce formulaire, sans oublier d'indiquer un numéro 

                                                                de téléphone pour que nous puissions vous contacter, ou contactez-nous au 04 82 53 71 67.</h5><br>
									</div>

								</div>
                             

                            </header>
<br>
                            <span class="clearfix"></span>

                          <!--  ************************ contenu ****************************  -->

 <div class="row-fluid">
            <!-- Right sidebar -->
							<?php include('include/bloc-droit-principale.php'); ?>
     
            <!-- main content -->
            <div class="span6 main-content">
                   <h2><?= $message;?></h2><br>
                <div  id="text-candidature">
                     <p>Nous demandons :<br>- un véritable don<br>- un statut professionnel légal<br>- une réelle volonté de travailler et une assiduité sans faille<br>- une expérience audiotel sera un plus<br><br>

                        Nous Offrons :<br>- une rémunération correcte et motivante<br>- un contrat de collaboration écrit et clair<br>- une ponctualité de paiement assurée</p>
                </div>  
                   <form action="" method="post" enctype="multipart/form-data">
                                    <table id="form-candidature">
                                        <tr>
                                            <td colspan="2">
                                                <div class="alert alert-danger hidden">
                                                    <p></p>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group civilite-candidature">
                                                    <label for="mr" class="mr">Mr
                                                    <input type="radio" name="sexe" value="Mr" class="form-controle" id="mr" >
                                                    </label>
                                                    <label for="mme" class="mme">Mme
                                                    <input type="radio" name="sexe" value="Mme" class="form-control" id="mme" >
                                                    </label>
                                                </div>
                                                <div class="clearfix"></div>
                                                <div class="form-group">
                                                    <label for="nom">Votre nom</label>
                                                    <input type="text" class="form-control" id="nom" name="nom" placeholder="Votre Nom..." required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="prenom">Votre prénom</label>
                                                    <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Votre Prénom..." required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mail">Votre email</label>
                                                    <input name="mail" type="email" placeholder="Votre mail" id="mail" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="phone">Votre téléphone</label>
                                                    <input type="text" name="phone" id="phone" class="form-control" required/>
                                                </div>
                                                <!--<div class="form-group">
                                                    <label for="cv">Joindre un CV (au format word ou pdf)</label>
                                                    <input name="cv" type="file" id="cv" class="form-control" required>
                                                </div><br>-->
                                                <div class="form-group">
                                                    <label for="don">Votre don</label>
                                                    <input type="text" class="form-control" id="don" name="don" placeholder="Votre don..." required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="motivations">Vos motivations</label>
                                                    <textarea rows="6" cols="50" name="motivations" id="motivations" class="form-control" required></textarea>
                                                </div>
                                                <div class="input-prepend input-block-level">                                                                                                        
                                                    <label>Veuillez saisir les caractères figurant dans l'image ci-dessous.</label>                                                                   
                                                    <img src="captcha.php" /><br />
                                                    <input type="text" name="captcha" style="width:70px" required/>
                                                </div> 
                                            </td>
                                        </tr> 
                                        <tr>
                                            <td colspan="2">
                                                    <input type="submit" value="Envoyer ma candidature" class="btn btn-info" />
                                            </td>
                                        </tr>
                                    </table>
                                </form>          


               
            </div>


			
            <!-- Right sidebar -->


        			<!-- Left sidebar -->
							<?php include('include/bloc-gauche-principale.php'); ?>
       </div>

        

    </div>
                       
                        </div>

        </div>
    
	
   

    <?php include('include/footer_inc_tarot.php'); ?>
