<?php // yyadmin/login.php

/* ##### INITIALISATION ##### */
    session_start();
    require_once(realpath('inc/tools.php'));
    $log = null;

/* ####### EXECUTION ####### */
    if(isset($_POST['submit'])){
        $login = htmlspecialchars($_POST['login']);
        $pass = htmlspecialchars($_POST['pass']);
        $log = login($login,$pass);
        if( $log['result'] == true){
            if($_SESSION['role'] != 'standard'){
                header('Location: index.php');
            } else {
                header('Location: standard.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        
        <title>Administration</title>
        
        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="http://www.myastro.fr/yyadmin/css/bootstrap.min.css" type="text/css" />
    </head>
    <body class="container">
        <div class="jumbotron loginform">
            
            <div class="logo">
                <img src="images/logo.png" alt="MyAstro" class="logo" />
            </div>

            <form action="" method="post">
				<?php if(isset($log['msg'])){
					echo '<div class="alert alert-danger">'.$log['msg'].'</div>';
				} ?>
                <div class="form-group">
                    <input type="text" name="login" id="login" class="form-control" placeholder="Identifiant" value="<?= isset($login) ? $login : '' ?>" />
                </div>
                <div class="form-group">
                    <input type="password" name="pass" id="pass" class="form-control" placeholder="Mot de passe" />
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Connexion</button>
            </form>

            <small>
                <a href="http://www.myastro.fr">Retour au site</a>
            </small>
        </div>
    </body>
</html>