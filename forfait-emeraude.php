<?php
    $forfait = array(
        'name' => 'emeraude',
        'base' => [ 'tps' =>  50, 'prix' =>  175, 'base' => 200 ],
        'xfois' => array(
            [ 'tps' => 100, 'prix' => 350, 'base' => 400 ],
            [ 'tps' => 150, 'prix' => 450, 'base' => 600 ],
            [ 'tps' => 200, 'prix' => 600, 'base' => 800 ],
        ),
        'abos' => array(
            0 => [ 'name' => 'Abonnement Offre1 EMERAUDE', 'prix' => 120, 'code' => 'F3B765E8DB904E4' ],
            1 => [ 'name' => 'Abonnement Offre2 EMERAUDE', 'prix' => 220, 'code' => '2632FF2BCE28159' ],
            2 => [ 'name' => 'Abonnement Offre3 EMERAUDE', 'prix' => 369, 'code' => '52DA3D954633702' ],
        )
    );
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <title>Tarifs Forfait <?= ucfirst($forfait['name']);?> - Myastro</title>
        <meta name="robots" content="noindex, nofollow" />
        
        <link href="css/forfait-abo.css" type="text/css" rel="stylesheet">
            
        <?php include('include/header_inc.php'); ?>
    
        <div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <!--  ************************ contenu ****************************  -->
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