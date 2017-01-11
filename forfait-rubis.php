<?php
    $forfait = array(
        'name' => 'rubis',
        'base' => [ 'tps' =>  50, 'prix' => 200, 'base' => 250 ],
        'xfois' => array(
            [ 'tps' => 100, 'prix' => 400, 'base' => 450 ],
            [ 'tps' => 150, 'prix' => 525, 'base' => 675 ],
            [ 'tps' => 200, 'prix' => 700, 'base' => 900 ],
        ),
        'abos' => array(
            0 => [ 'name' => 'Abonnement Offre1 RUBIS', 'prix' => 130, 'code' => '1E6E4899FACE13C' ],
            1 => [ 'name' => 'Abonnement Offre2 RUBIS', 'prix' => 230, 'code' => 'B18824DE47D4D2E' ],
            2 => [ 'name' => 'Abonnement Offre3 RUBIS', 'prix' => 389, 'code' => 'CA98F8436C79D33' ],
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