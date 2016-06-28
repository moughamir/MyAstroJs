<?php

// yyadmin/inc/init.php

    session_start();
    $recherche = (isset($_GET['rech']))? $_GET['rech'] : null;  
  
    require_once('paramsAdmin.php');
    require_once('tools.php');
    require_once('config.php');
    
    if(isset($_GET['rub']) && $_GET['rub'] == 'deconnexion') {
        unset($_SESSION['adminStatus']);
        session_destroy();
        header("Location: ". $baseSiteAdmin); 
    }
    isAdmin($baseSiteAdmin);

