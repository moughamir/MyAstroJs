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
?>

<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
	<?php /*<title>Voyance par téléphone : rapide et efficace - Myastro</title> */ ?>
	<title>Forfait voyance : tous les tarifs de nos experts | MyAstro</title>
	<meta name="description" content="grâce aux forfaits voyance, restez en contact permanent avec les experts Myastro" />
	<?= $tracker->getCanonical() ?>
	<link href="css/tel.css" type="text/css" rel="stylesheet">

	<?php include('include/header_sans_nav_inc.php'); ?>

	<link href="css/forfaits.css" type="text/css" rel="stylesheet">
	  
	<div class="container-fluid relative-container" itemscope >
		<!-- Main Content -->
		<div class="row-fluid">
			<div class="article-content">
				<header>
					<div class="cat-widget-title">
						<h1 itemprop="headline">Profitez des forfaits de consultations de voyance et des abonnements à prix réduits avec votre voyant préféré !</h1>
					</div>

					<div class="row-fluid social-share-footer">
						<span class="share-icon icon-caret-right"></span>

						<div class="share-icons">
							<p class="txt-top" itemprop="headline">Sélectionnez le voyant de votre choix afin d’accéder à la commande de forfaits de minutes</p>
						</div>

					</div>
				</header>
				<br>
				<span class="clearfix"></span>

				<!--  ************************ contenu ****************************  -->
				<div class="row-fluid">
					<!-- main content -->
					<aside class="widget w-adv">
						<div class="widget-title" style="text-align:center">
							<h4>FORFAITS DE MINUTES PREPAYEES ET FORMULES D'ABONNEMENT MENSUEL</h4>
						</div>
					</aside>
					<div class="span6 main-content">
						

							<aside class="row-fluid">
								<table width="100%" border="0" cellpadding="2" class="table-voyant">
			                        <?php 
			                        $i = 1;
			                        foreach($voyants as $name => $data){
			                            if($i == 0 ){
			                                echo '<tr>';
			                            }
			                            echo '<td>';
			                            $safeName = str_replace('é','e',$name);
			                            ?>
			                            <div class="voyant voyant-<?= $data['sexe'] ?>">
			                                <div class="pic">
			                                    <a href="http://<?= ROOT_URL ?>/voyance-par-telephone-<?= $safeName?>"><img src="http://<?= ROOT_URL ?>/images/voyants/<?= $safeName?>.png" /><a>
			                                    </div>
			                                    <h4 ></h4>-->
			                                    <div class="ribbon-wrapper">
			                                        <div class="ribbon-front">
			                                         <!--<h4><?= ucfirst($data['speciality']) ?></h4>-->
			                                         <h4><?= ucfirst($name) ?></h4>
			                                     </div>
			                                     <div class="ribbon-edge-topleft"></div>
			                                     <div class="ribbon-edge-topright"></div>
			                                     <div class="ribbon-edge-bottomleft"></div>
			                                     <div class="ribbon-edge-bottomright"></div>
			                                     <div class="ribbon-back-left"></div>
			                                     <div class="ribbon-back-right" style="display:none"></div>
			                                 </div>
			                                 <div class="ribbon-forfait"><a href="<?php if($data['price'] == '6,5'){ echo 'http://'.ROOT_URL.'/forfait-or';}else if($data['price'] == '5,5'){echo 'http://'.ROOT_URL.'/forfait-saphir';}else if($data['price'] == '4,5'){echo 'http://'.ROOT_URL.'/forfait-rubis';}else if($data['price'] == '4'){echo 'http://'.ROOT_URL.'/forfait-emeraude';}else if($data['price'] == '3,5'){echo 'http://'.ROOT_URL.'/forfait-diamant';}?>" class="seeDetails">
			                                    Voir les forfaits
			                                </a></div>
			                                <div class="price">
			                                    <?= $data['price'] ?>&euro; / min supp
			                                </div>
			                            </div>
			                            <?php
			                            echo '</td>';
			                            if($i == 4 ){
			                                echo '</tr><tr>';
			                                $i = 0;
			                            }
			                            
			                            $i++;
			                        }
			                        ?>
			                    </table>
							</aside>
						</div>
					</div>
			</div>
		</div>
		<div class="absolute-top-section">
			<div class="row-fluid">
				<?php include('include/nav_inc.php'); ?>
			</div>
			<div class="row-fluid">
				<div itemscope >
					<ul class="breadcrumb" itemprop="breadcrumb">
						<li><h4 class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
						<li>Forfaits</h4></li>
					</ul>
				</div>
			</div>
		</div>
	</div>

<?php include('include/nav_top_inc.php'); ?>
<?php include('include/footer_inc_forfait.php'); ?>
