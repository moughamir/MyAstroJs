<?php    
    $forfait = array(
        'name' => 'or',
        'base' => [ 'tps' =>  50, 'prix' =>  300, 'base' => 325 ],
        'xfois' => array(
            [ 'tps' => 100, 'prix' =>  600, 'base' =>  650 ],
            [ 'tps' => 150, 'prix' =>  825, 'base' =>  975 ],
            [ 'tps' => 200, 'prix' => 1100, 'base' => 1300 ],
        ),
        'abos' => array(
            0 => [ 'name' => 'Abonnement Offre1 OR', 'prix' => 150, 'code' => '52675F0BE4B0A86' ],
            1 => [ 'name' => 'Abonnement Offre2 OR', 'prix' => 250, 'code' => '6C8623700944A9C' ],
            2 => [ 'name' => 'Abonnement Offre3 OR', 'prix' => 429, 'code' => 'BC6BEB2798E0ABF' ],
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
                        
                        <!-- main content -->
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