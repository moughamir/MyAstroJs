<?php
require_once(realpath('include/tools.php'));
$tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));

$msg="";
$msg_err="";
if(isset($_POST['valider'])){
$nom = $_POST['prenom'];
$region = $_POST['country'];
$voyant = $_POST['voyant'];
if(isset($_POST['pays']))
     {
           $pays=htmlentities($_POST['pays']);
     }
if(isset($_POST['voyant']))
     {
           $voyant=htmlentities($_POST['voyant']);
     } 	 
if(($nom != "") && ($_POST['phone']!= "") ){
$ch=$_POST['phone'];
$msg='<BR><font style="color: green;font-family: Tahoma,Sans-serif;font-size: 11px;font-weight: bold;" >Merci, vous serez rappelé dans les plus brefs délais ...</font><br><br>';
} else $msg_err = '<BR><font style="color: red;font-family: Tahoma,Sans-serif;font-size: 11px;font-weight: bold;" >Afin que votre demande puisse être correctement prise en compte par notre service, merci de bien vouloir remplir le formulaire.</font><br><br>';
if ($pays != ""){
$region="Tel_autre_pays";
}
if ($msg!=""){
					$content = '<table style=>
                                        <tr>
                                            <td>
                                                <img src="http://<?= ROOT_URL ?>/images/logo_new.gif" alt="LOGO"/>
                                            </td>
                                            <td>
                                                Demande de Rappel.
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://<?= ROOT_URL ?>/images/user.png"  alt="User : " width="24"/>
                                            </td>
                                            <td>
                                                '.$nom.'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://<?= ROOT_URL ?>/images/phone.png"  alt="Phone : " width="24"/>
                                            </td>
                                            <td>
                                                '.$ch .'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Pays</b> : 
                                            </td>
                                            <td>
                                                '. $pays .'
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <b>Voyant Demandé</b> : 
                                            </td>
                                            <td>
                                                '. $voyant .'
                                            </td>
                                        </tr>
                                    </table>';

                        $transport  = Swift_SmtpTransport::newInstance('localhost', 25)
                                        ->setUsername('postmaster@myastro.fr')
                                        ->setPassword('fYJAWB2RqK9fJ');

                        $mailer     = Swift_Mailer::newInstance($transport);

                        $message    = Swift_Message::newInstance($transport);
                        // Give the message a subject
                        $message    ->setSubject('[RAPPEL2] - Demande de : '.$nom)
                                    // Set the From address with an associative array
                                    ->setFrom(array('contact@myastro.fr' => 'Myastro - Demande de rappel'))
                                    // Set the To addresses with an associative array
                                    ->setTo(array(
                                        'standard.kgcom@gmail.com'   => 'STANDARD KgCOM',
                                        'thierno.kgcom@gmail.com'   => 'Equipe développement KgCOM',
                                        'moise.kgcom@gmail.com'   => 'Equipe KgCOM'  
                                        ))
                                    // Give it a body
                                    ->setBody($content,'text/html');

                        // Send the message
                        try{ 
                           $result = $mailer->send($message);
                        }catch(Exception $e){
                            die(var_dump($e));
                        }

                        $msg='<BR><font style="color: green;font-family: Tahoma,Sans-serif;font-size: 9px;font-weight: bold;" >Merci, vous serez rappelé dans les plus brefs délais ...</font><br><br>';
}

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Voyance par téléphone : rapide et efficace | Myastro</title>
	<meta name="description" content="Vous avez besoin de pouvoir prévoir les évènements qui sont susceptibles de vous arriver afin de les anticipez. Utilisez la voyance par téléphone." />
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
	<?= $tracker->getCanonical() ?>
	
<link href="css/tel.css" type="text/css" rel="stylesheet">
	
<?php include('include/header_inc.php'); ?>
   


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><span class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Voyance par téléphone</span></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Avec la voyance par téléphone, obtenez les réponses que vous recherchez</h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<p itemprop="headline">Vous avez des doutes sur votre vie amoureuse, des inquiétudes quant à vos finances, ou des appréhensions sur votre vie professionnelle ? Vous recherchez des réponses sur votre passé, votre présent ou votre avenir ? La voyance par téléphone de MyAstro est faite pour vous ! Consultez nos professionnels de la voyance par téléphone et obtenez des réponses immédiates à vos questions.</p>
									</div>

								</div>
                             

                            </header>
<br>
                            <span class="clearfix"></span>

<!-- ------------------------------- CONTENU ------------------------------- -->
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

                                <?php 
                                    getVoyantScryscraperVTE2();
                                ?>
                            </div>
                        </div>
                    </div>
                </aside>
		<aside class="widget w-posts">

			<div style="text-align:justify;">
			    <div class="widget-title">
                    <span class="h4">Offre découverte</span>
                </div>
			<div class="widget-content clearfix">
				<p>Découvrez l’ensemble de l’équipe d’experts sélectionnés par My Astro avec qui vous établirez une relation de confiance et qui vous guideront sur le chemin d’une voyance par téléphone en toute sérénité.
                    </br></br>Le tarif est de 10€ les 10 premières minutes.<p><br>
			</div>
			</div>
		</aside>	
        <aside class="widget w-posts">

            <div style="text-align:justify;">
                <div class="widget-title">
                        <h2 class="txt-txt">Pourquoi opter pour la voyance par téléphone ?</h2>
                </div>
                <div class="widget-content text-justify clearfix">
                    <p>Solliciter les services d'un voyant n'est pas un acte anodin. Il implique de s'ouvrir à une personne souvent inconnue, de lui révéler ses peurs, ses faiblesses, de se mettre à nu. Un obstacle que peu de personnes, pourtant en quête de réponses, consentent à franchir, par pudeur, par gêne, ou tout simplement par timidité.</p>
                    <br><p>Parce qu'elle n'implique pas de confrontation "physique" avec le médium, la voyance par téléphone devient alors un substitut à la voyance directe, et ce sans pour autant en réduire l'efficacité. Bien au contraire d'ailleurs : la voyance par téléphone crée un rapport privilégié entre le médium et son interlocuteur et permet une introspection plus profonde.</p>
                </div>
            </div>
        </aside>   	
               

               

            </section>

            <!-- main content -->
            <div class="span6 main-content">

               

                <!--ici -->

						  <aside class="widget w-adv">
                    <div class="widget-title">
								<h4>Fiable et confidentielle</h4>
							</div>

                   

                </aside>
               <?php 
                $voyants = array(
                    'alexis' => array(
                        'sexe'          => 'masculin',
                        'price'         => '6,5',
                        'speciality'    => 'Voyant pur'
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
                        'speciality'    => 'Voyant auditif'
                    ),
                    'kathy' => array(
                        'sexe'          => 'feminin',
                        'price'         => '3,5',
                        'speciality'    => 'Voyante pur'
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
                            <br><p>Grâce à la voyance téléphonique de MyAstro, abordez votre avenir sereinement. Ne nous croyez pas sur parole, demandez aux âmes perdues que nous avons éclairées. </p>
                            <br><p>Notre service a permis à des centaines de personnes de trouver des réponses claires à leurs questions, d'effacer leurs doutes et leur appréhensions. Faites comme eux : choisissez votre médium parmi nos professionnels reconnus dans leurs disciplines respectives (tarologie, astrologie, numérologie, voyance…) et  contactez MyAstro et son service de voyance par téléphone obtenez les réponses que vous recherchez. Joignable 7 jours sur 7, notre service de voyance par téléphone reste à votre écoute, et vous prodigue ses conseils avisés en direct.</p>
                        </div>
            
                </aside>  
               


               
            </div>


			
            <!-- Right sidebar -->


            <!-- Left sidebar -->
            <section class="span300">
			
			<!-- Banner voyance gratuite -->
                <aside class="widget w-adv">
                    <div class="widget-title">
                        <h4>Consultation en URGENCE !</h4>
                    </div>

		<a href="#ouvert"><img src="images/bannieres/rappel_immediat.png" ></a>	
	

<div id="ouvert" class="modalDialog">
	<div>
		<a href="#fermer" title="Fermer" class="fermer">X</a>
		<div class="widget-content clearfix">
                        <div class="profil_cadre_block profil_cadre_block_rapide">

	<div class="profil_cadre_centre" style="background-color: #fcf8e3;
border: 1px solid #fbeed5;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;margin-left:0px;


background-color: #D5D3D0; 
">


	     
		 <form action="voyance-par-telephone#ouvert" method="post">
                        <div><strong><br>Saisissez le numéro de téléphone sur lequel vous souhaitez être rappelé :</strong></div><br>
                        <div style="width: 100%;text-align:center;">
                            <input style="width:90%;border-radius: 5px;" name="prenom" type="text" onfocus="jQuery('#conjoint').attr('checked','checked'); jQuery(this).attr('value',''); "  onBlur="javascript:if(this.value=='')this.value='Votre prénom'" value="<?php if ($nom == '') echo "Votre prénom"; else echo $nom; ?>" size="24" maxlength="50"/><br>
                            <input type="radio" name="country"  style="background-color: #619CCC;height: 15px;" checked="checked" value="TelFrance"> France <br>
                            <input type="radio" name="country"   style="background-color: #619CCC;height: 15px;" value="telOther"> Autre
                            <select name='pays' style="border-radius: 5px;width: 50%;">
                                <option value="" selected="">Choisir un pays...</option>
                                <option value="+49">Allemagne</option>
                                <option value="+43">Autriche</option>
                                <option value="+32">Belgique</option>
                                <option value="+357">Chypre</option>
                                <option value="+379">Cité du Vatican</option>
                                <option value="+45">Danemark</option>
                                <option value="+34">Espagne</option>
                                <option value="+358">Finlande</option>
                                <option value="+30">Grèce</option>
                                <option value="+353">Irlande</option>
                                <option value="+354">Islande</option>
                                <option value="+39">Italie</option>
                                <option value="+352">Luxembourg</option>
                                <option value="+356">Malte</option>
                                <option value="+47">Norvège</option>
                                <option value="+31">Pays-Bas</option>
                                <option value="+48">Pologne</option>
                                <option value="+351">Portugal</option>
                                <option value="+44">Royaume-Uni</option>
                                <option value="+46">Suède</option>
                                <option value="+41">Suisse</option>
                                <option value="+90">Turquie</option>
                            </select>
                        </div>
                        <div><br>
						
							<select  name="voyant"  style="border-radius: 5px;width: 50%;">
                                <option value="" selected="">Choisir un voyant...</option>
                                <option value="MORIN MICHEL">MORIN MICHEL</option>
                                <option value="GIRARD STEPHANE">GIRARD STEPHANE</option>
                                <option value="JULLIARD CHRISTOPHE">JULLIARD CHRISTOPHE</option>
                                <option value="DEJOIE LAURENT">DEJOIE LAURENT</option>
                                <option value="CUZIN CECILE">CUZIN CECILE</option>
                                <option value="PAZMIN VALERIE">PAZMIN VALERIE</option>
                                <option value="PAVYS CAROLINE">PAVYS CAROLINE</option>
                                <option value="BONNET GREGORY">BONNET GREGORY</option>
                                <option value="SARRUT GEORGES">SARRUT GEORGES</option>
                                <option value="BELFORT VIKTOR">BELFORT VIKTOR</option>
                                <option value="PAZ HENRI">PAZ HENRI</option>
                                <option value="DESZIN CLAUDE">DESZIN CLAUDE</option>
                                <option value="TOUZET ALEXIS">TOUZET ALEXIS</option>
                                <option value="PATONIER ERIC">PATONIER ERIC</option>
                                <option value="LARIVE OLIVIER">LARIVE OLIVIER</option>
                                
                            </select>
							<br>
                            Votre numéro : 
                             <div class="fields">
                                <input type="text" class="form-control" placeholder='Votre numéro de téléphone' name="phone"/>
                            </div>
                            

                            
                            
                        </div>
                        <?php echo $msg;?>
                        <?php echo $msg_err;?>
						            
                        <button type="submit" name="valider" value="valider" class="btn-theme">Envoyer</button>
                        <div><br>
						</div>
              </form>        
                    

	</div>
</div>

                    </div>

	</div>
</div>				
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
</style>	
					
                    
                </aside>
				
				
				
				
<!-- Tarifs -->
                <aside class="widget w-social-counter">
                    <div class="widget-title">
                        <h4>Tarifs</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="social-counter-metro">
                            <ul class="clearfix">

                                <?php 
                                    getConsultationPerMinutsAd();
                                ?>

                            </ul>
                        </div>
                    </div>
                </aside>
				
                <!-- texte-->
                <aside class="widget w-posts">

                    <div class="" >
                        <div class="widget-title">
                                <h2 class="txt-txt">Voyance téléphone : Posez vos questions aux médiums de MyAstro !</h2>
                        </div>
                        <div class="text-justify">
                            <br><p>Dotés d'un véritable don de voyance, nos médiums vous éclairent, vous guident et vous aident à résoudre vos problèmes du quotidien, à répondre à vos interrogations, à apaiser vos souffrances. Que vous soyez célibataire et à la recherche de l'âme sœur, en couple et en quête d'équilibre sentimental, que vous soyez à la poursuite d'un éventuel succès professionnel et financier, ou que vous cherchiez tout simplement le bonheur et la paix intérieure, notre équipe de voyance par téléphone vous donnera les réponses qui vous permettrons d'affronter vos aléas de la vie courante, vos peurs et vos craintes.</p> 
                       </div>
                    </div>
                 </aside> 
               

                <!-- Social Counter -->
                <aside class="widget w-social-counter">
                    <div class="widget-title">
                        <h4>Réseaux sociaux</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="social-counter-metro">
                            <ul class="clearfix">

                                <li class="fb-wrp">
                                    <div class="btn-count">

                                        <div class="social-counter-metro mask">
                                            <span>Like</span>
                                            <a target="_blank" href="https://www.facebook.com/pages/Myastro/437290166297323" class="more"></a>
                                        </div>

                                        <div class="facebook">
                                           <i class="facebook-sicon-48-white"></i>
                                            <span><?php
   
	//http://graph.facebook.com/437290166297323
		$script = "http://api.sharedcount.com/?url=https://www.facebook.com/pages/Myastro/437290166297323";
		$page = file_get_contents($script);
		$page = explode(",",$page);
		$page = str_replace('"total_count":','',$page[4]);
		
		echo $page;
		
		
	
	
	
?></span>
                                            <span class="fans">Fans</span>
                                        </div>


                                    </div>
                                </li>

                                <li class="tr-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Twetter</span>
                                            <a target="_blank" href="https://twitter.com/MYASTRO1" class="more"></a>
                                        </div>

                                        <div class="twitter">

                                            <i class="twitter-sicon-48-white"></i>
                                            <span><?php
   
	
		$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
		$page = file_get_contents($script);
		$page = explode(",",$page);
		$page = str_replace('"Twitter":','',$page[11]);
		
		echo $page;
		
		
	
	
	
?></span>
                                            <span class="fans">Twetter</span>

                                        </div>
                                    </div>
                                </li>
								<li class="gp-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Partages</span>
                                            <a target="_blank"  href="https://plus.google.com/113553129882139226237/posts" class="more"></a>
                                        </div>

                                        <div class="googleplus">
                                            <i class="googleplus-sicon-48-white"></i>
                                            <span><?php
   
	
		$script = "http://api.sharedcount.com/?url=http://www.myastro.fr";
		$page = file_get_contents($script);
		$page = explode(",",$page);
		$page = str_replace('"GooglePlusOne":','',$page[9]);
		
		echo $page;
		
		
	
	
	
?>




</span>
                                            <span class="fans">Partages</span>
                                        </div>
                                    </div>
                                </li>
								
								

                                

                                <li class="rs-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Souscrire</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="rss">
                                            <i class="rss-sicon-48-white"></i>
                                            <span>Souscrire</span>
                                            <span class="fans">Au RSS</span>
                                        </div>
                                    </div>
                                </li>



                                

                                <!--<li class="drb-wrp">
                                    <div class="btn-count">
                                        <div class="social-counter-metro mask">
                                            <span>Follow</span>
                                            <a href="#" class="more"></a>
                                        </div>

                                        <div class="dribbble">
                                            <i class="dribbble-sicon-48-white"></i>
                                            <span>29,000,000</span>
                                            <span class="fans">Followers</span>
                                        </div>
                                    </div>
                                </li>-->


                            </ul>
                        </div>
                    </div>
                </aside>


                



               
            </section>
        </div>

        

    </div>
	
							
							
							
							
							
                        

                           
                        </div>

           
                        </div>

        </div>
    
	
   

    <?php include('include/footer_inc_voyance-tel.php'); ?>
