<?php
    $forfait = array(
        'name' => 'diamant',
        'base' => [ 'tps' => 50, 'prix' => 150, 'base' => 175 ],
        'xfois' => array(
            [ 'tps' => 100, 'prix' => 300, 'base' => 350 ],
            [ 'tps' => 150, 'prix' => 375, 'base' => 525 ],
            [ 'tps' => 200, 'prix' => 500, 'base' => 700 ],
        ),
        'abos' => array(
            0 => [ 'name' => 'Abonnement Offre1 DIAMANT', 'prix' => 110, 'code' => 'E2DDACB2E4E31BA' ],
            1 => [ 'name' => 'Abonnement Offre2 DIAMANT', 'prix' => 210, 'code' => '9CDC2E79F443DC8' ],
            2 => [ 'name' => 'Abonnement Offre3 DIAMANT', 'prix' => 349, 'code' => 'AE197B9AE59F482' ],
        )
    );
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarifs Forfait <?= ucfirst($forfait['name']);?> | Myastro</title>
        <meta name="robots" content="noindex, nofollow" />
        
        <link href="css/forfait-abo.css" type="text/css" rel="stylesheet">
            
        <?php include('include/header_inc.php'); ?>
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- Left sidebar -->
                        <?php include('include/bloc-droit-principale.php'); ?>
                        
                        <!-- Main content -->
                        <div class="span6 main-content">
                            <aside class="row-fluid">
                                <?php include('include/visual_modules/subscription-presentation.php'); ?>
                            </aside>
                        </div>
                        
                        <!-- Right sidebar -->
                        <?php include('include/bloc-gauche-principale.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    
    <?php include('include/footer_inc_forfait.php'); ?>