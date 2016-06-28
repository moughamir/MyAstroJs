<?php // yyadmin/inc/header.php
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

        <link rel="shortcut icon" type="image/x-icon" href="http://www.myastro.fr/images/favicon.ico" />
        <title><?php echo $companySite; ?> / Administration</title>

        <base href="<?php echo $baseSiteAdmin; ?>" />

        <link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/bootstrap-switch.min.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/bootstrap-dataTable.css" type="text/css" />
        <link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/jquery.datetimepicker.css" type="text/css" />
        <link rel="stylesheet" href="<?= ROOT_URL ?>/css/datepicker.css" type="text/css" />
        <link rel="stylesheet" type="text/css" href="<?= ROOT_URL ?>/yyadmin/css/jquery.jqplot.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= ROOT_URL ?>/yyadmin/css/chosen.min.css" />
        <link rel="stylesheet" type="text/css" href="<?= ROOT_URL ?>/yyadmin/css/ace-switch.css" />
        <!--<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/plug-ins/a5734b29083/integration/bootstrap/3/dataTables.bootstrap.css" />-->
        <link rel="stylesheet" href="<?php echo $baseSiteAdmin; ?>css/style.css" type="text/css" />

        <!-- JAVASCRIPTS -->
        <script type="text/javascript" src="<?= ROOT_URL ?>/js/jquery-1.11.js"></script>
    </head>
    
    <body>
        <header class="well">
            <div class="container">
                <div class="logo">
                    <img src="images/logo.png" alt="MyAstro" class="logo" />
                </div>
                <aside>
                    Bonjour <?= $_SESSION['prenom'] ?><br />
                    Vous êtes connecté en tant que <b><?= $_SESSION['role'] ?></b>
                </aside>
            </div>
        </header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-example-js-navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-home"></i>  Accueil</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse bs-example-js-navbar-collapse">
                <?php
                    $requestedfile = str_replace('/yyadmin/','',$_SERVER['REQUEST_URI']);
                    $menu = $menuRole[$_SESSION['role']];
                    $i = 1;
                    foreach($menu as $key => $value){
                        if(is_array($value)){
                ?>
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a id="drop<?=$i?>" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown"><?= $key ?> <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="drop<?=$i?>">
                            <?php foreach($value as $label => $url){?>
                                <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="<?= $url ?>"><?= $label ?></a>
                                </li>
                            <?php } ?>
                            </ul>
                        </li>
                    </ul>
                <?php
                        } else {
                ?>
                        <ul class="nav navbar-nav"><li><a href="<?= $value ?>"><?= $key ?></a></li></ul>
                <?php
                        }
                        $i++;
                    }
                ?>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a role="button" class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> Mon Compte <b class="caret"></b></a>
                            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                              <li>
                                  <a href="<?php echo $baseSiteAdmin; ?>edit.php"> <i class="glyphicon glyphicon-pencil"></i> Editer mon profil</a>
                              </li>
                              <li class="divider"></li>
                              <li>
                                  <a href="<?php echo $baseSiteAdmin; ?>index.php?rub=deconnexion"><i class="glyphicon glyphicon-off"></i> D&eacute;connexion</a>
                              </li>
                              <li>
                                  <a href="<?php echo $base; ?>"> <i class="glyphicon glyphicon-arrow-left"></i> Retour au site</a>
                              </li>
                            </ul>
                        </li>
                     </ul>
                </div>
            </div>    
        </nav>
        
        <div class="container">