<?php 
$voyants = array(
    'alexis' => array(
        'sexe'          => 'masculin',
        'price'         => '6,5',
        'speciality'    => 'Médium pur'
    ),
    'caroline' => array(
        'sexe'          => 'feminin',
        'price'         => '6,5',
        'speciality'    => 'astrologue'
    ),
    'christophe' => array(
        'sexe'          => 'masculin',
        'price'         => '3,5',
        'speciality'    => 'Voyant auditif'
    ),
    'cécile' => array(
        'sexe'          => 'feminin',
        'price'         => '4',
        'speciality'    => 'Tarologue'
    ),
    'georges' => array(
        'sexe'          => 'masculin',
        'price'         => '5,5',
        'speciality'    => 'Voyant pur'
    ),
    'kathy' => array(
        'sexe'          => 'feminin',
        'price'         => '3,5',
        'speciality'    => 'Médium pure'
    ),
    'grégory' => array(
        'sexe'          => 'masculin',
        'price'         => '5,5',
        'speciality'    => 'Voyant pur'
    ),
    'linda' => array(
        'sexe'          => 'feminin',
        'price'         => '5,5',
        'speciality'    => 'Numérologue'
    ),
    'laurent' => array(
        'sexe'          => 'masculin',
        'price'         => '4,5',
        'speciality'    => 'Tarologue'
    ),
    'valérie' => array(
        'sexe'          => 'feminin',
        'price'         => '4,5',
        'speciality'    => 'Numérologue'
    ),
    'stéphane' => array(
        'sexe'          => 'masculin',
        'price'         => '4',
        'speciality'    => 'Astrologue'
    ),
    'viktor' => array(
        'sexe'          => 'masculin',
        'price'         => '5,5',
        'speciality'    => 'Tarologue'
        )
    );

    $forfaits = array(
        '6,5' => 'forfait-or',
        '5,5' => 'forfait-saphir',
        '4,5' => 'forfait-rubis',
        '4'   => 'forfait-emeraude',
        '3,5' => 'forfait-diamant'
    );

    require_once(realpath('include/tools.php'));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
    <head>
        <meta charset="UTF-8" />
	<title>Forfaits de voyance : les tarifs de nos experts | MyAstro</title>
	<meta name="description" content="Grâce aux forfaits voyance, restez en contact permanent avec les experts Myastro" />
        
	<link href="css/tel.css" type="text/css" rel="stylesheet">

	<?php include('include/header_inc.php'); ?>

	<link href="css/forfaits.css" type="text/css" rel="stylesheet">
	  
	<div class="container-fluid" itemscope>
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Profitez des forfaits de consultations de voyance et des abonnements à prix réduits avec votre voyant préféré !</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p class="txt-top" itemprop="headline">Sélectionnez le voyant de votre choix afin d’accéder à la commande de forfaits de minutes</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
<!-- ------------------------------- CONTENU ------------------------------- -->
                    <div class="row-fluid">
                        <!-- main content -->
                        <aside class="widget w-adv">
                            <div class="widget-title" style="text-align:center">
                                <h4>FORFAITS DE MINUTES PRÉPAYÉES ET FORMULES DʼABONNEMENT MENSUEL</h4>
                            </div>
                        </aside>
                        <div class="span6 main-content">
                            <aside class="row-fluid">
                                <table width="100%" border="0" cellpadding="2" class="table-voyant">
<?php
    $compteur = 0;
    $nbParLigne = 4;
    foreach($voyants as $name => $data){
        $compteur++;
        $safeName = str_replace('é','e',$name);
?>
                                <?php if($compteur == 1){ ?>
                                    <tr>
                                <?php } ?>
                                        <td>
                                            <div class="voyant voyant-<?= $data['sexe'] ?>">
                                                <div class="pic">
                                                    <a href="http://<?= ROOT_URL ?>/voyance-par-telephone-<?= $safeName?>"><img src="http://<?= ROOT_URL ?>/images/voyants/<?= $safeName?>.png" /><a>
                                                </div>
                                                <h4></h4>-->
                                                <div class="ribbon-wrapper">
                                                    <div class="ribbon-front">
			                                <!--h4><?= ucfirst($data['speciality']) ?></h4-->
                                                        <h4><?= ucfirst($name) ?></h4>
			                            </div>
                                                    <div class="ribbon-edge-topleft"></div>
                                                    <div class="ribbon-edge-topright"></div>
                                                    <div class="ribbon-edge-bottomleft"></div>
                                                    <div class="ribbon-edge-bottomright"></div>
                                                    <div class="ribbon-back-left"></div>
                                                    <div class="ribbon-back-right" style="display:none"></div>
                                                </div>
                                                <div class="ribbon-forfait">
                                                    <a href="<?= 'http://'.ROOT_URL.'/'.$forfaits[$data['price']];?>" class="seeDetails">Voir les forfaits</a>
                                                </div>
                                                <div class="price">
                                                    <?= $data['price'] ?>&euro; / min supp
                                                </div>
                                            </div>
                                        </td>
                                <?php if($compteur == count($voyants)){ ?>
                                    </tr>
                                <?php } elseif($compteur%$nbParLigne == 0){ ?>
                                    </tr>
                                    <tr>
                                <?php } ?>
<?php
    } // -- end foreach
?>
                                </table>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
	</div>

<?php include('include/footer_inc_forfait.php'); ?>
