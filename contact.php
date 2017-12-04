<?php
    $nom = $prenom = $email = $tel = $sujet = $msg ='';
    
require_once('include/tools.php');
// traitement du formulaire
$form_success = null;
$form = array_map('secure_formdata', $_POST);
$admin_mail = MAIL_CONTACT;
if(isset($form['submit_form'])){
    $form_success = false;
    $form_report = [];
    $error = false;
    //----- nom -----
    $nom = $form['nom'];
    if(!empty($nom)){
        if(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $nom)){
            $error = true; $form_report['prenom'] = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le nom.';
        }
    }
    //----- prénom -----
    $prenom = $form['prenom'];
    if(empty($prenom)){
        $error = true; $form_report['prenom'] = 'Veuillez renseigner votre prénom.';
    } elseif(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom)){
        $error = true; $form_report['prenom'] = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le prénom.';
    }
    //----- téléphone -----
    $tel = isset($form['tel']) ? $form['tel'] : 'Non renseigné';
    //----- adresse mail -----
    $email = $form['email'];
    if(!empty($email)){
        if(!validate_mail($email)) {
            $error = true; $form_report['email'] = 'Lʼadresse est mail invalide.';
        }
    } else { $error = true; $form_report['email'] = 'Veuillez renseigner votre adresse mail.';}
    //----- sujet -----
    $sujet = $form['sujet'];
    if(empty($sujet)){
        $error = true; $form_report['sujet'] = 'Veuillez renseigner le sujet de votre message.';
    }
    //----- msg -----
    $msg = $form['msg'];
    if(strlen($msg) < 10){
        $error = true; $form_report['msg'] = 'Votre message est trop court.';
    }
    //----- captcha -----
    $test_captcha = check_captcha($form);
    if(!$test_captcha){
        $error = true; $form_report['captcha'] = 'Nous nʼavons pas pu vérifier que vous nʼêtes pas un robot. Réessayez en cochant la case.';
    }
    //----- envoi des mails -----
    if(!$error){
        $head_pict = true;
        $curr_date = date('d/m/Y');
        $curr_hour = date('H:i');
        $nom_complet = (empty($nom) ? '' : $nom.' ').$prenom;
        $to = $admin_mail;
        $from = $email;
        $respond = $email;
        $subject = $nom_complet.' a complété le formulaire de contact de Myastro';
        $nl = mail_line_feed($to);
        $content  = 'Le '.$curr_date.' à '.$curr_hour.', '.$nom_complet.' a complété le formulaire de contact de Myastro :'.$nl.$nl;
        $content .= 'Nom : '.$nom_complet.$nl;
        $content .= 'Email : '.$email.$nl;
        $content .= 'Téléphone : '.$tel.$nl.$nl;
        $content .= '---------- '.$sujet.' ----------'.$nl;
        $content .= $msg.$nl;
        $content .= '----------------------------------------'.$nl;
        $error = !send_mail($to, $from, $respond, $subject, $content, $head_pict);
        // fin du traitement
        if($error){
            $form_report['delivery'] = 'Une erreur est survenue durant lʼenvoi, vérifiez vodre adresse mail avant de réessayer.';
        } else {
            $form_success = true;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Formulaire de contact | MyAstro</title>
        <meta name="robots" content="noindex,nofollow" />

        <?php include('include/header_inc.php');?>

        <style>
            .main-content {
                max-width: 50%;
                margin: auto;
                margin-bottom: 20px;
                text-align: center;
            }
            form { margin: 0;}
            .form-group {
                display: table;
                width: 100%;
                position: relative;
            }
            .form-group label {
                width: 20%;
                display: table-cell;
                text-align: right;
                padding-right: 10px;
                box-sizing: border-box;
                vertical-align: middle;
            }
            .form-group .form-control {
                display: table-cell;
                box-sizing: border-box;
                margin: 4px 0;
                height: auto;
                padding: 6px 12px;
                font-size: 12px;
            }
            .required:after {
                content: '★';
                color: #E51E85;
                font-size: 22px;
                position: absolute;
                right: 7px;
                top: 9px;
            }
            .required .form-control {
                padding-right: 30px;
            }
            .g-recaptcha > div { margin: 8px auto;}
            .btn {
                font-size: 18px;
                height: auto;
                text-transform: uppercase;
                padding: 12px 28px;
                border-left: 0;
                text-shadow: none;
                margin: 8px;
            }
            .FormError {
                color: #E51E85;
                font-size: 15px;
                font-weight: bold;
                margin: 15px auto;
                max-width: 80%;
                text-align: center;
            }
            .form-control.has-error, input.has-error[type="text"] {
                color: inherit !important;
                border-color: #E51E85 !important;
                -webkit-box-shadow: 0 0 6px #f8b9b7;
                -moz-box-shadow: 0 0 6px #f8b9b7;
                box-shadow: 0 0 6px #f8b9b7;
            }
            .FormSuccess {
                color: #E51E85;
                font-size: 15px;
                margin: 15px auto;
                max-width: 80%;
                text-align: center;
            }
        </style>
        
        <div class="container-fluid">
            <!-- Main Content -->
            <header>
                <h1 itemprop="headline">Page de contact</h1>
            </header>
            <div class="row">
                <div class="main-content well">
                    <?php if($form_success){ ?>
                    <p class="FormSuccess">
                        <strong>Votre demande à bien été transmise</strong><br>
                        Vous serez recontacté par notre équipe dans les plus brefs délais.
                    </p>
                    <?php } elseif($form_success === false){ ?>
                    <p class="FormError">
                            <?php foreach($form_report as $err_msg){
                        echo $err_msg.'<br>';
                            } ?>
                    </p>
                    <?php } ?>
                    <form method="POST" action="contact">
                        <div class="form-group">
                            <label for="nom">Nom</label>
                            <input type="text" id="nom" name="nom" class="form-control <?= isset($form_report['nom']) ? 'has-error' : '';?>" value="<?= $nom;?>" />
                        </div>
                        <div class="form-group required">
                            <label for="prenom">Prénom</label>
                            <input type="text" id="prenom" name="prenom" class="form-control <?= isset($form_report['prenom']) ? 'has-error' : '';?>" value="<?= $prenom;?>" required />
                        </div>
                        <div class="form-group">
                            <label for="tel">Téléphone</label>
                            <input type="tel" id="tel" name="tel" class="form-control <?= isset($form_report['tel']) ? 'has-error' : '';?>" value="<?= $tel;?>" />
                        </div>
                        <div class="form-group required">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control <?= isset($form_report['email']) ? 'has-error' : '';?>" value="<?= $email;?>" required />
                        </div>
                        <div class="form-group required">
                            <label for="sujet">Sujet</label>
                            <input type="text" id="sujet" name="sujet" class="form-control <?= isset($form_report['sujet']) ? 'has-error' : '';?>" value="<?= $sujet;?>" required />
                        </div>			
                        <div class="form-group required">
                            <label for="msg">Message</label>
                            <textarea id="msg" name="msg" class="form-control <?= isset($form_report['msg']) ? 'has-error' : '';?>" rows="4" required><?= !empty($msg) ? $msg : 'Bonjour, ';?></textarea>
                        </div>
                        <?php if($form_success !== true){ ?>
                        <div class="g-recaptcha <?= isset($form_report['captcha']) ? 'has-error' : '';?>" data-sitekey="6LezqysUAAAAABmZH8xdpdDB5vHX5oASsndrD_KL"></div>
                        <button type="submit" name="submit_form" class="btn btn-primary">Valider</button>
                        <?php } ?>
                    </form>
                </div>
            </div>
        </div>
    
        <script src="https://www.google.com/recaptcha/api.js"></script>
    
	<?php include('include/footer_inc_index.php');?>