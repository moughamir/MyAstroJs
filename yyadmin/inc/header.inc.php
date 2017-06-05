<?php
/* --- 03/03/2015 A PRIORI OBSOLèTE --- */

    error_reporting(E_ALL);
    ini_set("display_errors", 1);
    session_start();
    $recherche = (isset($_GET['rech']))? $_GET['rech'] : null;  
    require_once('functions.php');
    require_once('paramsAdmin.php');
    require_once('inc/tools.php');
    require_once('inc/config.php');
    
    if(isset($_GET['rub']) && $_GET['rub'] == 'deconnexion') {
        unset($_SESSION['adminStatus']);
        session_destroy();
        header("Location: ". $baseSiteAdmin); 
    }
    isAdmin($baseSiteAdmin);

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="" content="text/html; charset=UTF-8" />

<link rel="shortcut icon" type="image/x-icon" href="http://www.myastro.fr/images/favicon.ico" />
<title><?php echo $companySite; ?> / Administration</title>

<base href="<?php echo $baseSiteAdmin; ?>" />

<link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/style.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/menu.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/bootstrap-switch.min.css" type="text/css" />
<link rel="stylesheet" href="<?= ROOT_URL ?>/css/datepicker.css" type="text/css" />

<script type="text/javascript" src="<?= ROOT_URL ?>/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/js/jquery-1.11.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/yyadmin/js/admin.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/yyadmin/js/bootstrap-switch.min.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/js/bootstrap-dataTables.js"></script>
<!--[if lt IE 9]><script language="javascript" type="text/javascript" src="<?= ROOT_URL ?>/yyadmin/js/excanvas.js"></script><![endif]-->
<script language="javascript" type="text/javascript" src="<?= ROOT_URL ?>/yyadmin/js/jquery.jqplot.min.js"></script>
<script type="text/javascript" src="<?= ROOT_URL ?>/yyadmin/js/plugins/jqplot.pieRenderer.min.js"></script>
<script type="text/javascript" src=".<?= ROOT_URL ?>/yyadmin/js/plugins/jqplot.donutRenderer.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?= ROOT_URL ?>/yyadmin/css/jquery.jqplot.css" /><script type="text/javascript">
$(document).ready(function(){
    $('.datepicker').datepicker({format:'yyyy-mm-dd'});
    $('.switcher').bootstrapSwitch('size', 'small');
});
</script>

<style type="text/css"> 
#header { background-color: #e3127f; }
</style>
</head>

<body>


<div id="header"> 
    <div id="hCnt"> 
        
        <div style=" float: left; width: 880px; height: 173px;">
        
        <img src="images/logo.png" width="300" height="96" alt="<?php echo $companySite; ?>" class="logo" />

        <div class="dropdown">
          <a data-toggle="dropdown" id="dropdown-menu" href="#"><i class="glyphicon glyphicon-user"></i> Menu </a>
          <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
            <li>
                <a href="<?php echo $baseSiteAdmin; ?>edit.php"> <i class="glyphicon glyphicon-pencil"></i> Editer mon profil</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="<?php echo $baseSiteAdmin; ?>index.php?rub=deconnexion"><i class="glyphicon glyphicon-remove"></i> D&eacute;connexion</a>
            </li>
            <li>
                <a href="<?php echo $base; ?>"> <i class="glyphicon glyphicon-arrow-left"></i> Retour au site</a>
            </li>
          </ul>
        </div>

        
        <ul  id="nav" class="menu2">
            <li><a href="<?= PROTOCOL.'://'.ROOT_URL ?>/yyadmin/"><i class="glyphicon glyphicon-home"></i></a></li>
            
            <?php
                $requestedfile = str_replace('/yyadmin/','',$_SERVER['REQUEST_URI']);
                $menu = $menuRole[$_SESSION['role']];
                foreach($menu as $label => $url){
                    ?>
                    <li>
                        <a href="<?= $url ?>" class="<?= ($requestedfile == $url) ? 'active on' : '' ?>"><?= $label ?></a>
                    </li>
                    <?php
                }

            ?>
            
            
            
            
        </ul>
    
        <ul class="menu3">
        

            <li>Vous &ecirc;tes connect&eacute; en tant que <?= $_SESSION['role'] ?></li>
            
        </ul>
        <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>



            