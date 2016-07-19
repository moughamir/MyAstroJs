<?php

$voyant = "DEJOIE LAURENT";
$prenom = "Laurent";
$n_photo = "04";
$text_l = "A";
$text = "dolescant, j'ai compris que je possédais un don unique, je l'ai depuis apprivoisé pour pouvoir vous révéler clairement et sincèrement votre destinée. Si vous ne savez quelle décision prendre, je saurai vous guider .";

$nom_com_1 ="michel46";
$commentaire_1 = "je suis assez stupéfaite car ses prédictions se réalisent les une après les autres, pas toujours dans les temps mais bonne finalité. retour +";
$date_1 ="14 Mar 2013, 01:32 PM";

$nom_com_2 ="prune69";
$commentaire_2 = "Bonjour, moi j'ai consulter ce voyant en octobre, ca me laisse un vrai recul, sans parler de sa gentillesse, il m'a tout de suite bien cerné, ses propos sur mon caractère, ma vie, mes changements étaient exacts, je précise qu'il avait juste mon prénom. Pour le reste bien qu'intime je lui fais un retour +, bref très satisfaite!";
$date_2 ="1 Mar 2013, 15:20 PM";

$nom_com_3 ="helene154";
$commentaire_3 = "Pour moi retours positifs, exceptionnel.";
$date_3 ="15 Jan 2013, 01:00 AM";

$msg="";
$msg_err="";
if(isset($_POST['valider'])){
$nom = $_POST['prenom'];
$region = $_POST['country'];

if(isset($_POST['pays']))
     {
           $pays=htmlentities($_POST['pays']);
     }
 
if(($nom != "") && ($_POST['c1']!= "") && ($_POST['c2']!= "") && ($_POST['c3']!= "") && ($_POST['c4']!= "") && ($_POST['c5']!= "")){
$ch=$_POST['c1'].$_POST['c2'].$_POST['c3'].$_POST['c4'].$_POST['c5'];
$msg='<BR><font style="color: green;font-family: Tahoma,Sans-serif;font-size: 11px;font-weight: bold;" >Merci, vous serez rappelé dans les plus brefs délais ...</font><br><br>';
} else $msg_err = '<BR><font style="color: red;font-family: Tahoma,Sans-serif;font-size: 11px;font-weight: bold;" >Afin que votre demande puisse être correctement prise en compte par notre service, merci de bien vouloir remplir le formulaire.</font><br><br>';
if ($pays != ""){
$region="Tel_autre_pays";
}
if ($msg!=""){
						//$nom ="client myastro";
						$email="par.telephone@hotmail.com";
						$ip = $_SERVER['REMOTE_ADDR'];
						$myemail="standard.kgcom@gmail.com"; 
						$to=$myemail;
						$subject="[myastro] $nom";
						$header="from: $nom <$email>\n";
						$header.="Content-type: text/html\r\n";
						$message2="Region : $region \r\n\r\n<br>";
						$message2.="Pays : $pays \r\n\r\n<br>";
						$message2.="Voyant : $voyant \r\n\r\n<br>";
						$message2.="Telephone : <a  href=\"tel:$pays$ch\">$pays$ch</a> \r\n\r\n<br>";
						$message2.="IP : $ip \r\n\r\n";
						$sentmail = mail($to,$subject,$message2,$header);
						if ($sentmail) {
							$msg='<BR><font style="color: green;font-family: Tahoma,Sans-serif;font-size: 9px;font-weight: bold;" >Merci, vous serez rappelé dans les plus brefs délais ...</font><br><br>';
						} else{
						$msg="";
						}
}

}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Voyance par téléphone <?= $prenom;?>: rapide et efficace - Myastro</title>
	<meta name="description" content="Vous avez besoin de pouvoir prévoir les événements qui sont susceptibles de vous arriver afin de les anticipez. Utilisez la voyance par téléphone." />

	<link href="css/tel.css" type="text/css" rel="stylesheet">
	
	
	<?php include('include/header_inc.php'); ?>
   


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="http://<?= ROOT_URL ?>/voyance-par-telephone">Voyance par téléphone</a></li><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Voyance par téléphone <?= $prenom;?></h4></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Voyance par téléphone <?= $prenom;?></h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<h5 itemprop="headline">Vous avez besoin de pouvoir prévoir les événements qui sont susceptibles de vous arriver afin de les anticipez. Utilisez la voyance par téléphone.</h5>
									</div>

								</div>
                             

                            </header>
<br>
                            <span class="clearfix"></span>

                          <!--  ************************ contenu ****************************  -->
 <div class="row-fluid">	
						
            <section class="span270">
 <aside class="widget w-posts">
                    <div class="widget-title">
                        <h4>Voyance par Téléphone</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="posts-in-widget">
                            <div class="row-fluid modern-items-list">
                            	<?php 
                                    if($_SERVER['HTTP_REFERER'] == 'http://www.myastro.fr/voyance-par-telephone-2'){
                                    ?>
                                        <img src="images/bannieres/VTE2/laurent.png"  alt="VOYANCE PAR TELEPHONE">
                                    <?php
                                    } else {
                                    ?>
                                    <img src="images/bannieres/voyant-skyscraper/laurent-voyant.jpg"  alt="VOYANCE PAR TELEPHONE">
                                    <?php
                                    }
                                ?>
                                
                            </div>
                        </div>
                    </div>
                </aside>
		<aside class="widget w-posts">

			<div style="text-align:justify;">
			 <div class="widget-title">
                        <h4>Offre découverte</h4>
                    </div>
			<div class="widget-content clearfix">
				<h5>Découvrez l’ensemble de l’équipe d’experts sélectionnés par My Astro avec qui vous établirez une relation de confiance et qui vous guideront sur le chemin d’une voyance par téléphone en toute sérénité.
				</br></br>Le tarif est de 10€ les 10 premières minutes.<h5><br>
			</div>
			</div>
		</aside>		
               

               

            </section>

            <!-- main content -->
            <div class="span6 main-content" style="background: #EEEEEE; padding:10px;border: 5px solid #3266AA;border-radius: 10px;">

               

                <!--ici -->

						  <aside class="widget w-adv">
                    <div class="widget-title">
								<h4>FICHE VOYANT(E)</h4>
							</div>

                   

                </aside>
               

               

               <aside class="row-fluid">
                 <table width="100%" border="0" cellpadding="2">
  <tr>
    <td> 
											
                                                
                                                    
                                                        <div style="margin-top:0px;">
                                                            <img src="images_voyance/voyant/<?= $n_photo;?>.jpg"  class="imgtelvb">
                                                        </div>

                                                       
                                                    
                                                
	</td>
	<td><div style="text-align:left;"><br><a href="#ouvert"><img style="margin-left:20px;width: 200px;" src="images_voyance/rappele.png" ></a><br></div></td>
    <td> 
											
                                                <div>
                                                    
                                                        

                                                        <div class="media-body span9" style="margin-left:15px;margin-top:0px; height: 150px;width:100%;">
                                                            <div style="text-align:right;margin-right:20px;"> <h3 style="font-weight:bold;font-family:arial black, sans-serif;line-height:1;"><?= $voyant;?></h3>

                                                            
                                                                
<!--<div class="rating"  style="text-align:right;margin-right:10px;" itemprop="reviewRating" itemscope="" itemtype="http://schema.org/Rating">
                                                        <span class="stars-24" style="text-align:right;margin-right:10px;" title="50% Bon">
                                                            <span class="fill" style="width: 50%"></span>
                                                            <span class="hidden" itemprop="worstRating">1</span>
                                                            <span class="hidden" itemprop="ratingValue">50</span>  
                                                            <span class="hidden" itemprop="bestRating">100</span>
                                                        </span>
                                                    </div>-->
													</div>


  <div style="text-align:right;margin-right:20px;margin-top:10px;">  

                                                            
                                                                <span style="color:#000000;font-weight:bold;font-size:13px;font-family:tahoma, verdana, arial, sans-serif;"><br>Tarifs : 4,5€/MIN SUP<br><br>VOYANT ET TAROLOGUE</span>

													</div>                                                   
                                                                                                              
                                                           
                                                        </div>
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


	     
		 <form action="voyance-par-telephone.php#ouvert" method="post">
                         <div style="width: 100%;text-align:left;margin-left:15px;

"><strong><br>Saisissez le numéro de téléphone sur lequel vous <br>souhaitez être rappelé :</strong></div><br>
                        <div style="width: 100%;text-align:left;margin-left:15px;

">
                            <input style="width:90%;border-radius: 5px;" name="prenom" type="text" onfocus="jQuery('#conjoint').attr('checked','checked'); jQuery(this).attr('value',''); "  onBlur="javascript:if(this.value=='')this.value='Votre prénom'" value="<?php if ($nom == '') echo "Votre prénom"; else echo $nom; ?>" size="24" maxlength="50"/><br>
                            <input type="radio" name="country"  style="background-color: #619CCC;height: 15px;border-radius: 5px;" checked="checked" value="TelFrance"> France <br>
                            <input type="radio" name="country"   style="background-color: #619CCC;height: 15px;border-radius: 5px;" value="telOther"> Autre
                            <select name='pays' style="width: 50%;border-radius: 5px;">
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
                        <div style="width: 100%;text-align:left;margin-left:15px;

">
							<br>
                            Votre numéro : 
                            <div class="fields">
                                <input onkeyup="if (this.value.length==2) {this.form.c2.focus()}" style="border-radius: 5px;width: 10%;" type="text"  name="c1" size="2" maxlength="2" value="" class="first">
                                <input  onkeyup="if (this.value.length==2) {this.form.c3.focus()}" style="border-radius: 5px;width: 10%;" type="text" name="c2" size="2" maxlength="2" value="">
                                <input  onkeyup="if (this.value.length==2) {this.form.c4.focus()}" style="border-radius: 5px;width: 10%;" type="text" name="c3" size="2" maxlength="2" value="">
                                <input  onkeyup="if (this.value.length==2) {this.form.c5.focus()}" style="border-radius: 5px;width: 10%;" type="text" name="c4" size="2" maxlength="2" value="">
                                <input  style="border-radius: 5px;width: 10%;" type="text" name="c5" size="2" maxlength="2" value="">
                            </div>
                            

                            
                            
                        </div>
                        <?php echo $msg;?>
                        <?php echo $msg_err;?>
						 <div style="width: 100%;text-align:left;margin-left:80%;

">           
                        <button type="submit" name="valider" value="valider" class="btn-theme">Envoyer</button>
                        </div>
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
	padding: 10px 10px 10px 10px;
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
					
  
                                                </div>
	</td>
  </tr>
  <tr><td class="btn-voir-forfait"><div class="bloc-vf"><br><a href="http://<?= ROOT_URL ?>/forfait-rubis"><h4>VOIR LES FORFAITS</h4></a></div></td></tr>
 </table>       

                                </aside>
               

  <div class="cadretelv">
	<span class="drop-capital"><?= $text_l;?></span>
	<p><?= $text;?></p>
	
</div>                                      

    <div class="cat-widget">
                                  <br>  <div class="cat-widget-title">
                                        <h3>Les Commentaires sur <?= $prenom;?></h3>
                                    </div>

                                    <div class="cat-widget-content">
                                        <div class="row-fluid comments">

                                            <article class="media">
                                                

                                                <div class="media-body span10">
                                                    

                                                    <!-- Nested Comments -->
                                                    <article class="media">
                                                 
                                                        <div class="media-body span10">
                                                            <a itemprop="creator" href="#">
                                                                <h5 class="media-heading"><?= $nom_com_1;?></h5>
                                                            </a>

                                                            <div class="media">
                                                                <div itemprop="commentText">
                                                                    <p><?= $commentaire_1;?></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </article>
 <article class="media">
                                                

                                                 <div class="media-body span10">
                                                            <a itemprop="creator" href="#">
                                                                <h5 class="media-heading"><?= $nom_com_2;?></h5>
                                                            </a>

                                                            <div class="media">
                                                                <div itemprop="commentText">
                                                                    <p><?= $commentaire_2;?></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                            </article>
											 <article class="media">
                                                

                                                <div class="media-body span10">
                                                            <a itemprop="creator" href="#">
                                                                <h5 class="media-heading"><?= $nom_com_3;?></h5>
                                                            </a>

                                                            <div class="media">
                                                                <div itemprop="commentText">
                                                                    <p><?= $commentaire_3;?></p>
                                                                </div>
                                                                
                                                            </div>
                                                        </div>
                                            </article>
                                          
                                        </div>

                                        <div class="row-fluid split-top leave-comment">
                                            <h4>Laisser un commentaire</h4>
                                            <p>Votre adresse de messagerie ne sera pas publiée. Les champs obligatoires sont indiqués avec <i class="bo-icon-star"></i></p><br>
                                            <form>
                                                <fieldset>
                                                    <label for="txtCommenterName">Votre Nom<i class="bo-icon-star"></i></label>
                                                    <input style="width: 95%;" id="txtCommenterName" type="text" placeholder="Votre Nom" required="required">

                                                    <div class="row-fluid">
                                                        <div class="span6">
                                                            <label for="txtCommenterEmail">Email <i class="bo-icon-star"></i></label>
                                                            <input style="width: 95%;" id="txtCommenterEmail" type="email" placeholder="Votre Email" required="required">
                                                        </div>

                                                       
                                                    </div>

                                                    <label for="txtCommenterText">Commentaire <i class="bo-icon-star"></i></label>
                                                    <textarea style="width: 95%;" id="txtCommenterText" rows="3" cols="100" placeholder="Votre commentaire" required="required"></textarea>

                                                    <button type="submit" class="btn-theme">Poster votre commentaire</button>
                                                </fieldset>

                                            </form>
                                        </div>
                                    </div>

                                </div>                                    
                                  

               
            </div>


			
            <!-- Right sidebar -->


            <!-- Left sidebar -->
            <section class="span300">			
			
				
				
		<!-- Tarifs -->
                <aside class="widget w-social-counter">
                    <div class="widget-title">
                        <h4>Tarifs</h4>
                    </div>

                    <div class="widget-content clearfix">
                        <div class="social-counter-metro">
                            <ul class="clearfix">

                                
<img src="images_voyance/tarifs.png">

                            </ul>
                        </div>
                    </div>
                </aside>		
				
				
                
               

              
            <aside class="widget w-adv">
									<div class="widget-title">
										
									</div>

									<div class="widget-content clearfix">
										<a href="http://<?= ROOT_URL ?>/voyance-par-telephone">
											<img src="images_voyance/voy_tel_banner_voyants.gif">
										</a>
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
