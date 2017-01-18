<?php
    $forfait = array(
        'name' => 'saphir',
        'base' => [ 'tps' => 50, 'prix' => 225, 'base' => 275 ],
        'xfois' => array(
            [ 'tps' => 100, 'prix' => 500, 'base' =>  550 ],
            [ 'tps' => 150, 'prix' => 675, 'base' =>  825 ],
            [ 'tps' => 200, 'prix' => 900, 'base' => 1100 ],
        ),
        'abos' => array(
            0 => [ 'name' => 'Abonnement Offre1 SAPHIR', 'prix' => 140, 'code' => 'AAC670090EDE9A3' ],
            1 => [ 'name' => 'Abonnement Offre2 SAPHIR', 'prix' => 240, 'code' => 'A75AF2325D32972' ],
            2 => [ 'name' => 'Abonnement Offre3 SAPHIR', 'prix' => 399, 'code' => '00E7617EF5C732E' ],
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