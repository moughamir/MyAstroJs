<?php
    $root = '/';
    require_once('include/tools.php');
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
	<title>Voyance par téléphone : Posez vos questions à MyAstro</title>
	<meta name="description" content="Vous avez besoin de pouvoir prévoir les évènements qui sont susceptibles de vous arriver afin de les anticipez. Utilisez la voyance par téléphone." />

	<link href="css/tel.css" type="text/css" rel="stylesheet" />
	<style>
            .modalDialog {
		display:none;
		position: fixed;
		font-family: Arial, Helvetica, sans-serif;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
            }
            .modalDialog:target {
		display:block;
		opacity:1;
		pointer-events: auto;
            }
            .modalDialog > div {
		width: 400px;
		position: relative;
		margin: 10% auto;
		padding: 0px 10px 10px 10px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
            }
            .fermer {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
            }
            .fermer:hover { background: #00d9ff; }
            .profil_cadre_centre {
                background-color: #fcf8e3;
                border: 1px solid #fbeed5;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px; margin-left:0px;
                background-color: #D5D3D0;
            }
	</style>

	<?php include('include/header_inc.php'); ?>

	<div class="container-fluid" itemscope >
            <!-- Main Content -->
            <div class="row-fluid">
                <div class="article-content">
                    <header>
                        <h1 itemprop="headline">Avec la voyance par téléphone, obtenez les réponses que vous recherchez</h1>
                        <div class="row-fluid social-share-footer">
                            <span class="share-icon icon-caret-right"></span>
                            <div class="share-icons">
                                <p itemprop="headline"class="txt-top">Vous avez des doutes sur votre vie amoureuse, des inquiétudes quant à vos finances, ou des appréhensions sur votre vie professionnelle ? Vous recherchez des réponses sur votre passé, votre présent ou votre avenir ? La voyance par téléphone de MyAstro est faite pour vous ! Consultez nos professionnels de la voyance par téléphone et obtenez des réponses immédiates à vos questions.</p>
                            </div>
                        </div>
                    </header>
                    <span class="clearfix"></span>
                    
                    <!--  ************************ contenu ****************************  -->
                    <div class="row-fluid">
                        <section class="span270">
                            <!--Barre de centre-->
                            <aside class="widget w-posts">
                                <div class="widget-title">
                                    <h4>Voyance par Téléphone</h4>
                                </div>
                                <div class="widget-content clearfix">
                                    <div class="posts-in-widget">
                                        <div class="row-fluid modern-items-list">
                                            <?php getVoyantScryscraperVPT();?>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget w-posts">
                                <div style="text-align:justify;">
                                    <div class="widget-title">
                                        <span class="h4">Offre découverte</span>
                                    </div>
                                    <div class="widget-content text-justify clearfix">
                                        <p>Découvrez l’ensemble de l’équipe d’experts sélectionnés par My Astro avec qui vous établirez une relation de confiance et qui vous guideront sur le chemin d’une voyance par téléphone en toute sérénité.</br></br>Le tarif est de 10€ les 10 premières minutes.<p><br>
                                    </div>
                                </div>
                            </aside>
                            <aside class="widget w-posts">
                                <div style="text-align:justify;">
                                    <div class="widget-title">
                                        <h2 class="h4">Pourquoi opter pour la voyance par téléphone ?</h2>
                                    </div>
                                    <div class="widget-content text-justify clearfix">
                                        <p>Solliciter les services d’un voyant n’est pas un acte anodin. Il implique de s’ouvrir à une personne souvent inconnue, de lui révéler ses peurs, ses faiblesses, de se mettre à nu. Un obstacle que peu de personnes, pourtant en quête de réponses, consentent à franchir, par pudeur, par gêne, ou tout simplement par timidité.</p><br>
                                        <p>Parce qu’elle n’implique pas de confrontation "physique" avec le médium, la voyance par téléphone devient alors un substitut à la voyance directe, et ce sans pour autant en réduire l’efficacité. Bien au contraire d’ailleurs : la voyance par téléphone crée un rapport privilégié entre le médium et son interlocuteur et permet une introspection plus profonde.</p>
                                    </div>
                                </div>
                            </aside> 
                        </section>
                        
                        <!-- main content -->
                        <div class="span6 main-content">
                            <aside class="widget w-adv">
                                <div class="widget-title">
                                    <h4>Fiable et confidentielle</h4>
                                </div>
                            </aside>
<?php 
$voyants = array(
    'alexis' => array(
        'sexe'       => 'masculin',
        'price'      => '6,5',
        'speciality' => 'Médium pur'
    ),
    'anissa' => array(
        'sexe'       => 'feminin',
        'price'      => '6,5',
        'speciality' => 'Médium pur'
    ),
    'caroline' => array(
        'sexe'       => 'feminin',
        'price'      => '6,5',
        'speciality' => 'Astrologue'
    ),
    'christophe' => array(
        'sexe'       => 'masculin',
        'price'      => '3,5',
        'speciality' => 'Voyant auditif'
    ),
    'cécile' => array(
        'sexe'       => 'feminin',
        'price'      => '4',
        'speciality' => 'Tarologue'
    ),
    'dalil' => array(
        'sexe'       => 'masculin',
        'price'      => '5,5',
        'speciality' => 'Tarologue'
    ),
    'georges' => array(
        'sexe'          => 'masculin',
        'price'         => '5,5',
        'speciality'    => 'Voyant pur'
    ),
    'kathy' => array(
        'sexe'       => 'feminin',
        'price'      => '3,5',
        'speciality' => 'Médium pure'
    ),
    'grégory' => array(
        'sexe'       => 'masculin',
        'price'      => '5,5',
        'speciality' => 'Voyant pur'
    ),
    'linda' => array(
        'sexe'       => 'feminin',
        'price'      => '5,5',
        'speciality' => 'Numérologue'
    ),
    'sarah' => array(
        'sexe'       => 'feminin',
        'price'      => '4',
        'speciality' => 'Numérologue'
        ),
    'soufiane' => array(
        'sexe'       => 'masculin',
        'price'      => '6,5',
        'speciality' => 'Tarologue'
    ),
    'laurent' => array(
        'sexe'       => 'masculin',
        'price'      => '4,5',
        'speciality' => 'Tarologue'
    ),
    'valérie' => array(
        'sexe'       => 'feminin',
        'price'      => '4,5',
        'speciality' => 'Numérologue'
    ),
    'stéphane' => array(
        'sexe'       => 'masculin',
        'price'      => '4',
        'speciality' => 'Astrologue'
    ),
    'viktor' => array(
        'sexe'       => 'masculin',
        'price'      => '5,5',
        'speciality' => 'Tarologue'
    ),
    'zohra' => array(
        'sexe'       => 'feminin',
        'price'      => '5,5',
        'speciality' => 'Tarologue'
    )
);
?>
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
                                            <img src="http://<?= ROOT_URL ?>/images/voyants/<?= $safeName?>.png" />
                                        </div>
                                        <h4 class="seername"><?= ucfirst($name) ?></h4>
                                        <div class="ribbon-wrapper">
                                            <div class="ribbon-front">
                                                <h4><?= ucfirst($data['speciality']) ?></h4>
                                            </div>
                                            <div class="ribbon-edge-topleft"></div>
                                            <div class="ribbon-edge-topright"></div>
                                            <div class="ribbon-edge-bottomleft"></div>
                                            <div class="ribbon-edge-bottomright"></div>
                                            <div class="ribbon-back-left"></div>
                                            <div class="ribbon-back-right"></div>
                                        </div>
                                        <a href="http://<?= ROOT_URL ?>/voyance-par-telephone-<?= $safeName?>" class="seeDetails">
                                            Voir la fiche
                                        </a>
                                        <div class="price">
                                            <?= $data['price'] ?>&euro; / min supp
                                        </div>
                                    </div>
<?php
        echo '</td>';
        if($i == 2 ){
            echo '</tr><tr>';
            $i = 0;
        }
        $i++;
    }
?>
                                </table>
                            </aside>
                            <aside class="widget w-posts">
                                <div class="widget-content text-justify clearfix">
                                    <br><p>Grâce à la voyance téléphonique de MyAstro, abordez votre avenir sereinement. Ne nous croyez pas sur parole, demandez aux âmes perdues que nous avons éclairées.</p>
                                    <br><p>Notre service a permis à des centaines de personnes de trouver des réponses claires à leurs questions, d’effacer leurs doutes et leur appréhensions. Faites comme eux : choisissez votre médium parmi nos professionnels reconnus dans leurs disciplines respectives (tarologie, astrologie, numérologie, voyance…) et  contactez MyAstro et son service de voyance par téléphone obtenez les réponses que vous recherchez. Joignable 7 jours sur 7, notre service de voyance par téléphone reste à votre écoute, et vous prodigue ses conseils avisés en direct.</p>
                                </div><br><br>
                                <div class= "text-justify"><p> *Photos non contractuelles<p></div>
                            </aside>  
                        </div>
                        
                        <!-- Left sidebar -->
                        <section class="span300">
                            <!-- Banner voyance gratuite -->
                            <aside class="widget w-adv">
                                <div class="widget-title">
                                    <h4>Consultation en URGENCE !</h4>
                                </div>
                                <img src="images/bannieres/rappel_immediat.png" />
                                <!--
                                <a href="#ouvert"><img src="images/bannieres/rappel_immediat.png" ></a>
                                
                                <div id="ouvert" class="modalDialog">
                                    <a href="#fermer" title="Fermer" class="fermer">X</a>
                                    <div class="widget-content clearfix">
                                        <div class="profil_cadre_block profil_cadre_block_rapide">
                                            <div class="profil_cadre_centre">
                                                <form action="voyance-par-telephone#ouvert" method="post">
                                                    <div><strong><br>Saisissez le numéro de téléphone sur lequel vous souhaitez être rappelé :</strong></div><br>
                                                    <div style="width: 100%;text-align:center;">
                                                        <input style="width:70%;border-radius: 5px;" name="prenom" type="text" placeholder='Votre prénom' value="<?= isset($nom) ? "" : $nom ?>" size="24" maxlength="50" required /><br>
                                                        Pays :<br>
                                                        <select name="pays" style="border-radius: 5px;width: 50%;">
                                                            <option value="Allemagne (+49)">Allemagne</option>
                                                            <option value="Autriche (+43)">Autriche</option>
                                                            <option value="Belgique (+32)">Belgique</option>
                                                            <option value="Chypre (+357)">Chypre</option>
                                                            <option value="Cité du Vatican (+379)">Cité du Vatican</option>
                                                            <option value="Danemark (+45)">Danemark</option>
                                                            <option value="Espagne (+34)">Espagne</option>
                                                            <option value="Finlande (+358)">Finlande</option>
                                                            <option value="France" selected="">France</option>
                                                            <option value="Grèce (+30)">Grèce</option>
                                                            <option value="Irlande (+353)">Irlande</option>
                                                            <option value="Islande (+354)">Islande</option>
                                                            <option value="Italie (+39)">Italie</option>
                                                            <option value="Luxembourg (+352)">Luxembourg</option>
                                                            <option value="Malte (+356)">Malte</option>
                                                            <option value="Norvège (+47)">Norvège</option>
                                                            <option value="Pays-Bas (+31)">Pays-Bas</option>
                                                            <option value="Pologne (+48)">Pologne</option>
                                                            <option value="Portugal (+351)">Portugal</option>
                                                            <option value="Royaume-Uni (+44)">Royaume-Uni</option>
                                                            <option value="Suède (+46)">Suède</option>
                                                            <option value="Suisse (+41)">Suisse</option>
                                                            <option value="Turquie (+90)">Turquie</option>
                                                            <option value="">Autres</option>
                                                        </select>
                                                    </div>
                                                    <div><br>
                                                        <select name="voyant" style="border-radius: 5px;width: 50%;">
                                                            <option value="" selected="">Choisir un voyant...</option>
                                                            <option value="ALEXIS">ALEXIS</option>
                                                            <option value="CAROLINE">CAROLINE</option>
                                                            <option value="CHRISTOPHE">CHRISTOPHE</option>
                                                            <option value="CECILE">CECILE</option>
                                                            <option value="GEORGES">GEORGES</option>
                                                            <option value="KATHY">KATHY</option>
                                                            <option value="GREGORY">GREGORY</option>
                                                            <option value="LINDA">LINDA</option>
                                                            <option value="LAURENT">LAURENT</option>
                                                            <option value="VALERIE">VALERIE</option>
                                                            <option value="STEPHANE">STEPHANE</option>
                                                            <option value="VIKTOR">VIKTOR</option>
                                                        </select><br>
                                                        Votre numéro : 
                                                        <div class="fields">
                                                            <input style="width:46%" type="text" class="form-control" placeholder='Votre numéro de téléphone' name="phone" pattern="(\+?\d[- .]*){10,18}" required />
                                                        </div>
                                                    </div>
                                                    <?= $msg ?>
                                                    <?= $msg_err ?>
                                                    <button type="submit" name="valider" value="valider" class="btn-theme">Envoyer</button>
                                                    <br>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                -->
                            </aside>
                            
                            <!-- Tarifs -->
                            <aside class="widget w-social-counter">
                                <div class="widget-title">
                                    <h4>Tarifs</h4>
                                </div>
                                <div class="widget-content clearfix">
                                    <div class="social-counter-metro">
                                        <ul class="clearfix">
                                            <?php getConsultationPerMinutsAd();?>
                                        </ul>
                                    </div>
                                </div>
                            </aside>
                            
                            <!-- texte-->
                            <aside class="widget w-posts">
                                <div class="" >
                                    <div class="widget-title">
                                        <h2 class="h4">Voyance par téléphone : Posez vos questions aux médiums de MyAstro !</h2>
                                    </div>
                                    <div class="text-justify">
                                        <br><p>Dotés d’un véritable don de voyance, nos médiums vous éclairent, vous guident et vous aident à résoudre vos problèmes du quotidien, à répondre à vos interrogations, à apaiser vos souffrances. Que vous soyez célibataire et à la recherche de l’âme sœur, en couple et en quête d’équilibre sentimental, que vous soyez à la poursuite d’un éventuel succès professionnel et financier, ou que vous cherchiez tout simplement le bonheur et la paix intérieure, notre équipe de voyance par téléphone vous donnera les réponses qui vous permettrons d’affronter vos aléas de la vie courante, vos peurs et vos craintes.</p>
                                    </div>
                                </div>
                            </aside> 
                            
                            <!-- Social Counter -->
                            
                        </section>
                    </div>
                </div>
            </div>
        </div>
    
<?php include('include/footer_inc_voyance-tel.php'); ?>
