<?php

include("geoiploc.php");
include(realpath('include/tools.php'));
$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

/*===============================================================* 
*                 INITIALISATION DES VARIABLES                   *
*================================================================*/
// Tableau comprenant les questions qui nécessitent les infos du conjoint.
$questionConjoint = array('question_2','question_24','question_22','question_12','question_11','question_10');
$needConjoint     = false;
$ip 				= $_SERVER['REMOTE_ADDR'];
$country 			= getCountryFromIP($ip);
$car 				= 0;
$car 				= (isset($_GET["car"])) ? $_GET['car'] : false ;
$ch 				= $_GET["ch"];
$chv 				= $_GET["chv"];
$vt 				= $_GET["vt"];
$page 				= 'true';
$ip 				= $_SERVER['REMOTE_ADDR'];
$trouve 			= false;
$msg 				= '';
$sexe 				= '';
$prenom 			= '';
$nom 				= '';
$email 				= '';
$date_naissance_j 	= "";
$date_naissance_m 	= "";
$date_naissance_a 	= "";
$tel 				= '';
$question 			= 'sentimentale';
$conjoint_prenom 	= '';
$ville 				= "";
$pays 				= "";
$day 				= "";
$month_ 			= "";
$year 				= "";
$msg 				= '';
$msg1 				= '';
$id_form			= 10;
$conjoint_date_naissance_j = "";
$conjoint_date_naissance_m = "";
$conjoint_date_naissance_a = "";
$confidentielle 	= "1";
$confidentielle_ 	= "true";
$source           = (isset($_POST['source'])) ? $_POST['source'] : 'myastro-medium';
$partenaire       = (isset($_POST['partenaire']) && !empty($_POST['partenaire'])) ? 'true' : 'false';
$partenaire_      = (isset($_POST['partenaire']) && !empty($_POST['partenaire'])) ? 'true' : 'false';
// Pas le temps de tout renommer ... $partenaire => utilisé nul part. idem $horoscope
$horoscope        = (isset($_POST['horoscope'])   && !empty($_POST['horoscope']))   ? 'true' : 'false';
$horoscope_       = (isset($_POST['horoscope'])   && !empty($_POST['horoscope']))   ? 'true' : 'false';


if(isset($_POST['valider'])){

  /*===============================================================* 
  *                 TRAITEMENT DE L'UTILISATEUR                    *
  *================================================================*/

	$sexe 				= (isset($_POST['sexe']) 	&& !empty($_POST['sexe']) ) 	? $_POST['sexe'] 	: false;
	$prenom 			= (isset($_POST['prenom']) 	&& !empty($_POST['prenom']) ) 	? $_POST['prenom'] 	: false;
	$email 				= (isset($_POST['email']) 	&& !empty($_POST['email']) ) 	? $_POST['email'] 	: false;
	$pays 				= (isset($_POST['pays']) 	&& !empty($_POST['pays']) ) 	? $_POST['pays'] 	: false;
	$tel 				= (isset($_POST['tel']) 		&& !empty($_POST['tel']) ) 			? $_POST['tel'] 		: false;	
	$date_naissance_j 	= (isset($_POST['date_naissance_j']) 	&& !empty($_POST['date_naissance_j']) ) 	? $_POST['date_naissance_j'] 	: false;
	$date_naissance_m 	= (isset($_POST['date_naissance_m']) 	&& !empty($_POST['date_naissance_m']) ) 	? $_POST['date_naissance_m'] 	: false;
	$date_naissance_a 	= (isset($_POST['date_naissance_a']) 	&& !empty($_POST['date_naissance_a']) ) 	? $_POST['date_naissance_a'] 	: false;

	if(!$prenom){
    	$msg['prenom'] = 'Merci d\'indiquer votre prénom.<br />';
  	}
  	if(!$sexe){
    	$msg['sexe'] = 'Merci de remplir le champ "Monsieur / Madame - Mademoiselle" <br />';
  	}

  	if(!$pays){
		$msg['pays'] = 'Merci d\'indiquer votre pays.<br />';
	}

  	if(((int)$date_naissance_j>0) && ((int)$date_naissance_m>0) && ((int)$date_naissance_a>0)){
	    $signe = get_signe_astro($date_naissance_j,$date_naissance_m);
	    $date1 = $date_naissance_a."-".$date_naissance_m."-".$date_naissance_j;
	    $datean1= $date_naissance_m."/".$date_naissance_j."/".$date_naissance_a;
	}
	else{
	  $msg['date_naissance_j'] = 'Merci d\'indiquer votre date de naissance.<br />';
	  $msg['date_naissance_m'] = '';
	  $msg['date_naissance_a'] = '';
	}

	/*===============================================================* 
	*               TRAITEMENT DES DONNES ASTRO                      *
	*================================================================*/

	$choix_question = (isset($_POST['question'])) ? $_POST['question'] : false;
	if(!$choix_question){
		$msg['question'] = 'Veuillez choisir un domaine pour votre voyance.';
	}

	/*===============================================================* 
	*            TRAITEMENT DU CONJOINT ( SI BESOIN )                *
	*================================================================*/
	$conjoint_prenom 	= (isset($_POST['conjoint']) 	&& !empty($_POST['conjoint']) ) 	? $_POST['conjoint'] 	: false;
	$conjoint_date_naissance_j = (isset($_POST['conjoint_date_naissance_j']) && !empty($_POST['conjoint_date_naissance_j']) ) ? $_POST['conjoint_date_naissance_j'] : false;
	$conjoint_date_naissance_m = (isset($_POST['conjoint_date_naissance_m']) && !empty($_POST['conjoint_date_naissance_m']) ) ? $_POST['conjoint_date_naissance_m'] : false;
	$conjoint_date_naissance_a = (isset($_POST['conjoint_date_naissance_a']) && !empty($_POST['conjoint_date_naissance_a']) ) ? $_POST['conjoint_date_naissance_a'] : false;


	if(false !== $choix_question && in_array($choix_question, $questionConjoint)){
	  if(  false !== $conjoint_date_naissance_j 
	  	&& false !== $conjoint_date_naissance_m 
	  	&& false !== $conjoint_date_naissance_a ){
	      $date2  = $conjoint_date_naissance_a."-".$conjoint_date_naissance_m."-".$conjoint_date_naissance_j;
	      $datean2= $conjoint_date_naissance_m."/".$conjoint_date_naissance_j."/".$conjoint_date_naissance_a;
	      $signe_conjoint = get_signe_astro($conjoint_date_naissance_j,$conjoint_date_naissance_m);
	  }
	  else{
	      $msg['conjointBirthDate'] = 'Veuillez remplir la date de naissance de l\'être aimé.<br>';
	  }

	  if(empty($conjoint_prenom) && empty($conjointBirthDate)){
	      $msg['conjoint'] = 'Veuillez remplir le prénom de l\'être aimé.<br>';
	  }
	}
	else{
	  $signe_conjoint   = '';
	  $conjoint_prenom  = '';
	}
		
	/*===============================================================* 
	*		 SI LE MAIL EST VALIDE / EXISTE-IL DEJA EN BASE ?		 *
	*================================================================*/

	if (preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$",$email)){ 
		$user = $bdd->get_row($bdd->prepare('SELECT internal_id FROM '.$bdd->users.' WHERE email="%s"',$email));
		if($user){
	    	$trouve = true;
	    	$idindex =$user->internal_id;
		}
	}
	else{
		$msg['email'] = "Veuillez donner un email valide.<br />";
	}
	
	/*==================================================* 
	*		  TRAITEMENT DU NUMERO DE TELEPHONE			*
	*================================================== */
	if(!empty($tel)){
		if(!preg_match("#(0{5,}|1{5,}|2{5,}|3{5,}|4{5,}|5{5,}|6{5,}|7{5,}|8{5,}|9{5,}|1234{1,}|(01){5,}|(02){5,}|(03){5,}|(04){5,}|(05){5,}|(06){5,}|(07){5,}|(08){5,}|(09){5,})#",$tel)){
	    // Si et seulement si on a pas de motifs qui se répètent, alors on check le format / pays.
			$phoneCheck = checkPhoneNumber($tel,$pays);
			if($phoneCheck['error'] != NULL && $phoneCheck['error'] != 'NULL'){
				$msg['tel'] = $phoneCheck['error'];
			}
			else{
				$tel   = $phoneCheck["phone"];
	      		$pays  = $phoneCheck["pays"];
			}
		}
	  	else{
			$msg['tel'] = 'Numéro de téléphone incorrect.';
		}
	}
	else{
	    $msg['tel'] = 'Merci d\'entrer un numéro de téléphone.';
	}	


	
	if(empty($msg)){
		// /////////////////////////////////////////////////   Requet sql    //////////////////////////////////////////////////////////////////////
		
		$today = date("m/d/Y");
		$site = "true";
		$user_responses = array(
          'choix'     => $choix_question,
          'question'  => (isset($_POST['question']) && !empty($_POST['question'])) ? $_POST['question'] : NULL ,
          'situation' => (isset($mind) && !empty($mind)) ? $mind : NULL ,
      	);
      	// On choppe le compteur pour les inscription dans EMV et les envoie par paquets
      	$compteur = new compteur();
		$flagCompteur = $compteur->get();

		if (!$trouve){
		$bdd->insert(
	        $bdd->users,
	        array(
	          'id'                      => uuid(),
	          'ip_adress'               => $ip,
	          'history'                 => date('Y-m-d H:i:s'),
	          'nom'                     => ( isset($nom) ) ? $nom : '',
	          'prenom'                  => $prenom,
	          'sexe'                    => $sexe,
	          'dateNaissance'           => $date1,
	          'signeAstrologique'       => $signe,
	          'conjoint'                => $conjoint_prenom,
	          'email'                   => $email,
	          'ville'                   => ( isset($ville) ) ? $ville : '',
	          'questionDate'            => date('Y-m-d'),
	          'questionSujet'           => $question,
	          'questionContent'         => $choix_question,
	          'horoscope'               => $horoscope,
	          'signe2'                  => $signe_conjoint,
	          'partenaires'             => $partenaire,
	          'date_naissance_conjoint' => ( isset($date2) ) ? $date2 : '',
	          'voyant'                  => $page,
	          'voyant1'                 => ( isset($vt) ) ? $vt : '0',
	          'tel'                     => $tel,
	          'pays'                    => $pays
	        )
     	);
		
		$idindex  = $bdd->insert_id;
      	$dateJoin = $today;
  		    
      // Insertion des réponses complémentaires
	    $bdd->insert(
	      $bdd->user_response,
	      array(
	        'id_user'   => $idindex,
	        'id_form'   => $id_form,
	        'date'      => date('Y-m-d'), 
	        'responses' => serialize($user_responses)
	      )
	    );
		}
		else { 
	    	$bdd->update(
	        $bdd->users,
	        	array(
	        	'prenom'            => $prenom,
	          	'signe2'            => $signe_conjoint,
	          	'signeAstrologique' => $signe,
	          	'conjoint'          => $conjoint_prenom,
	          	'questionDate'      => date('Y-m-d'),
	          	'questionContent'   => $choix_question,
	          	'dateNaissance'     => $date1,
	          	'tel'               => $tel,
	          	'pays'              => $pays
	        	),
	        	array(
	          		'internal_id'       => $idindex
	        	)
	      	);

	    $user = $bdd->get_row($bdd->prepare('SELECT * FROM '.$bdd->users.' WHERE email="%s"',$email));
	    $dateJoin       = substr($user->history,0,10);

	    $bdd->insert(
	    	$bdd->user_response,
	        array(
	          'id_user'   => $idindex,
	          'id_form'   => $id_form,
	          'date'      => date('Y-m-d'), 
	          'responses' => serialize($user_responses)
	        )
	      );
	    } 

	    /*==================================================* 
	    *                 URL EMAIL VISION                  *
	    *================================================== */
	      
	    $base_url = 'http://tre.emv3.com/D2UTF8';
	    $params = array(
	                'emv_tag'           => '10040002651C8CC1',
	                'emv_ref'           => 'EdX7CqkdLOHf8SA9MOPQNo3WKEx-HK3D-D7Yeto-K7PYKcc',
	                'EMAIL_FIELD'       => $email,
	                'DATEJOIN_FIELD'    => $dateJoin,
	                'DATEMODIF_FIELD'   => $today,
	                'SOURCE_FIELD'      => $source,
	                'CLIENTURN_FIELD'   => $choix_question,
	                'EMVADMIN2_FIELD'   => $horoscope, // Set a true par default. Demande de steeve. Opt-in malgré eux.
	                'EMVADMIN3_FIELD'   => $partenaire,
	                'DATEOFBIRTH_FIELD' => $datean1,
	                'SEED3_FIELD'		=> $signe,
	                'FIRSTNAME_FIELD'   => $prenom,
	                'TITLE_FIELD'       => $sexe,
	                'GROUPE_FLAG_5_FIELD'   => $flagCompteur['flag5'],
                  	'GROUPE_FLAG_7_FIELD'   => $flagCompteur['flag7'],
                  	'GROUPE_FLAG_15_FIELD'  => $flagCompteur['flag15'],
                  	'GROUPE_FLAG_30_FIELD'  => $flagCompteur['flag30']
	    );
		$compteur->process();

	    $url = $base_url;
	    $i = 1;
	    foreach ($params as $key => $value) {
	      	$url .= ($i==1) ? '?'.$key.'='.$value : '&'.$key.'='.$value ;
	    	$i++;
	    }
	    header("Location: ".$url);
	} // Fin si pas d'erreur
} // Fin si $_POST['valider']

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Inscription Voyance médium gratuite : apprenez-en plus sur votre futur avec Myastro</title>
	<meta name="description" content="Recevez votre voyance gratuite rapide et personnalisée." />
	
	<link rel="stylesheet" type="text/css" href="css/voyance.css" />
	
	
<?php include('include/header_inc_inscription.php'); ?>
   


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4">
                                            <a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li> <li><a href="http://<?= ROOT_URL ?>/voyance-medium-gratuit" class="active">Voyance médium gratuit </a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li>Inscription voyance médium gratuit </h4></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Inscription voyance médium gratuit </h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<p itemprop="headline">Recevez votre voyance médium gratuit rapide et personnalisée.</p>
									</div>

								</div>
                             

                            </header>
<br>
                            <span class="clearfix"></span>
<?php
                 	if(!empty($msg)){
                 		echo "<div class='alert alert-danger'>";
                 		foreach($msg as $error){
                 			echo "<p>".$error."</p>";
                 		}
                 		echo "</div>";
                 	}
                ?> 
<!-- ------------------------------- CONTENU ------------------------------- -->
 <form  id="form" action="inscription-voyance-medium-gratuit-<?= $vt;?>-<?= $ch;?>#form" method="post" onsubmit="return valider()" >
                        <div class="article-content">
                            

                      <span><br></span>   
							
                          <!--  ************************ ici ****************************  -->
                <aside class="widget w-sponsors">
                    
				<section class="span270">
				<div class="widget-title">
                        <h4>Votre Médium</h4>
                </div>
                <div class="widget-content clearfix">
						
					  <img src="images_voyance/voyant/<?php echo $ch; ?>.jpg" alt="coeur">
				  
                 </div>
				 <div style="text-align:center;"><div style="margin-left:0px;font-size:12px;padding-top:10px;"><?php echo $vt; ?><p><p>
		  <p>
		   		   
		   <div style="border-top: solid 5px #25ADC6;margin-left:0px;font-size:12px;padding-top:0px;">
		   </div>
		   </p>
			<br>
			
		  <p>
		    <input style="font-size:9px;height: 10px;" type="checkbox" name="horoscope" checked="checked" />
		    <font style="font-size:9px;">Je souhaite recevoir mon horoscope quotidien. </font><br />
		    <input style="font-size:10px;height: 10px;" type="checkbox" name="partenaire" checked="checked" />
		    <font style="font-size:9px;">Je souhaite recevoir les offres de nos partenaires.</font>
		    <br />
		    <a onClick="window.open(this.href);return false;" href="conditions-generale" ><font style="font-size:9px;color:red;">Condition générale et désabonnement.</font></a> <br /><span class="p_rens_sup_mini rose"><font style="font-size:9px;">Tous les Champs sont obligatoires.</span> <br />
		    <font style="font-size:9px;">(Une seule question par personne)</font>
		    </p>
			<p>
		   		  
		  
		   </p>
			<br>
			<br>
		  </div></div>
				</section>
				<section class="span300" style="margin-left:2.564102564102564%;">
				<div class="widget-title">
                        <h4>Votre partenaire</h4>
                </div>
                <div class="widget-content clearfix" style="padding:15px;
background-color: #ac0;
background-image: -webkit-gradient(linear, 0 100%, 100% 0, color-stop(.25, rgba(255, 255, 255, .2)), color-stop(.25, transparent), color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.75, rgba(255, 255, 255, .2)), color-stop(.75, transparent), to(transparent));
background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
background-image: -moz-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
background-image: -ms-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);
background-image: linear-gradient(45deg, rgba(255, 255, 255, .2) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, .2) 50%, rgba(255, 255, 255, .2) 75%, transparent 75%, transparent);

margin: 10px;
-webkit-background-size: 50px 50px;
-moz-background-size: 50px 50px;
background-size: 50px 50px;
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
}">
						
					 
			
			
			<label for="date">Son prénom</label>
			<input  style="width:97%;" type="text" name="conjoint" id="text" placeholder="Son prénom" value="<?php if ($conjoint_prenom != '') echo $conjoint_prenom; ?>" maxlength="50">
             
            <label for="date">Sa date de naissance</label>
			
			<select style="width: 20%;" name="conjoint_date_naissance_j" onfocus="jQuery('#conjoint').attr('checked','checked');" >
				  <option selected="selected" value="<?php  echo $conjoint_date_naissance_j;?>"><?php  if ($conjoint_date_naissance_j == ""){ echo 'JJ';}else{ echo $conjoint_date_naissance_j;}?></option>
                    <option selected="selected" value="<?php  echo $conjoint_date_naissance_j;?>"><?php  if ($conjoint_date_naissance_j == ""){ echo 'JJ';}else{ echo $conjoint_date_naissance_j;}?></option>
	                    <?php
	                    	for($i=1;$i<=31;$i++){
	                    		echo '<option value="'.$i.'" >'.$i.'</option>';
	                    	}
	                    ?>
                  </select>
                  <select style="width: 20%;" name="conjoint_date_naissance_m" onfocus="jQuery('#conjoint').attr('checked','checked');">
                    <option selected="selected" value="<?php  echo $conjoint_date_naissance_m;?>"><?php  if ($conjoint_date_naissance_m == ""){ echo 'MM';}else{ echo $conjoint_date_naissance_m;}?></option>
                    <?php
                    	for($i=1;$i<=12;$i++){
                    		echo '<option value="'.$i.'" >'.return_mois_textuel($i).'</option>';
                    	}
                    ?>
                  </select>
                  <select style="width: 40%;" name="conjoint_date_naissance_a" onfocus="jQuery('#conjoint').attr('checked','checked');">
                    <option selected="selected" value="<?php  echo $conjoint_date_naissance_a;?>"><?php  if ($conjoint_date_naissance_a == ""){ echo 'AAAA';}else{ echo $conjoint_date_naissance_a;}?></option>
                    <?php
                    	for($i=1912;$i<=date('Y')-5;$i++){
                    		echo '<option value="'.$i.'" >'.$i.'</option>';
                    	}
                    ?>
                  </select>
                </div>
				 
				</section>
				
				 <div class="span6 main-content">
				 <div class="widget-title">
                        <h4>Pour recevoir votre voyance médium gratuit, remplissez le formulaire</h4>
                </div>
				<div class="widget-content clearfix" style="padding:15px;

background-color: #f90;
background-image: -webkit-gradient(linear, 0 0, 100% 0, color-stop(.5, rgba(255, 255, 255, .2)), color-stop(.5, transparent), to(transparent));
background-image: -webkit-linear-gradient(0deg, rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
background-image: -moz-linear-gradient(0deg, rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
background-image: -ms-linear-gradient(0deg, rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
background-image: -o-linear-gradient(0deg, rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);
background-image: linear-gradient(0deg, rgba(255, 255, 255, .2) 50%, transparent 50%, transparent);

margin: 10px;
-webkit-background-size: 50px 50px;
-moz-background-size: 50px 50px;
background-size: 50px 50px;
-moz-box-shadow: 1px 1px 8px gray;
-webkit-box-shadow: 1px 1px 8px gray;
box-shadow: 1px 1px 8px gray;
}">
               
			 
                
					<select  name="sexe" value="<?php  if ($sexe != "") echo $sexe;?>">
                    <option <?php  if ($sexe == "") echo ' selected="selected" ';?> value="<?php  if ($_POST['sexe'] != "") echo $_POST['sexe']; else echo "Civilité";?>"><?php  if ($_POST['sexe'] != "") echo ucfirst($_POST['sexe']); else echo "Civilité";?></option>
                    <option <?php  if ($sexe == "monsieur") echo ' selected="selected" ';?> value="monsieur">Monsieur</option>
                    
                    <option <?php  if ($sexe == "madame") echo ' selected="selected" ';?> value="madame">Madame</option>
                  </select>
				  
				  <input style="width:97%;" name="prenom" type="text" placeholder="Votre prénom" value="<?php if ($prenom != '') echo $prenom; ?>" size="24" maxlength="50"/>
 
                <label for="date">Votre date de naissance</label>
                
				
				
				<select style="width: 20%;" name="date_naissance_j" >
                  <option selected="selected" value="<?php  echo $date_naissance_j;?>"><?php  if ($date_naissance_j == ""){ echo 'JJ';}else{ echo $date_naissance_j;}?></option>
                  <?php
	                	for($i=1;$i<=31;$i++){
	                		echo '<option value="'.$i.'" >'.$i.'</option>';
	                	}
	                ?>
                </select>
                <select style="width: 20%;" name="date_naissance_m">
                  <option selected="selected" value="<?php  echo $date_naissance_m;?>"><?php  if ($date_naissance_m == ""){ echo 'MM';}else{ echo $date_naissance_m;}?></option>
                  <?php
                	for($i=1;$i<=12;$i++){
                		echo '<option value="'.$i.'" >'.return_mois_textuel($i).'</option>';
                	}
                ?>
                </select>
                <select style="width: 30%;" name="date_naissance_a">
                  <option selected="selected" value="<?php  echo $date_naissance_a;?>"><?php  if ($date_naissance_a == ""){ echo 'AAAA';}else{ echo $date_naissance_a;}?></option>
                  <?php
                	for($i=1912;$i<=date('Y')-5;$i++){
                		echo '<option value="'.$i.'" >'.$i.'</option>';
                	}
                	?>
                </select>
				
				
				
				
              
             <input style="width:97%;" name="email" type="text" placeholder="Votre E-mail" value="<?php if ($email != '') echo $email; ?>" size="50">
              
             
			<input style="width:97%;" name="tel" type="text" placeholder="Votre téléphone" value="<?php if ($tel != '') echo $tel; ?>" size="50">
			
			<select name="pays" required id="pays" class="form-control">
               <option value="">Votre Pays</option>
                <option value="BE">Belgique</option>
                <option value="CA">Canada</option>
                <option value="LU">Luxembourg</option>
                <option value="CH">Suisse</option>
                <option value="FR">France Métropolitaine</option>
                <optgroup label="DOM-COM">
                    <option value="MQ">Martinique</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GF">Guyane</option>
                    <option value="RE">La Réunion</option>
                    <option value="YT">Mayotte</option>
                    <option value="PM">St Pierre et Miquelon</option>
                    <option value="BL">St Barthélémy</option>
                    <option value="SM">St Martin</option>
                    <option value="WF">Wallis et Futunua</option>
                    <option value="PF">Polynésie Française</option>
                    <option value="NC">Nouvelle Calédonie</option>
                </optgroup>
                <option value="ZZ">Autre</option>
            </select>
            <select name="question" id="question" class="form-control">
                <option value="">Choisissez un domaine</option>
                <optgroup label="Amour">
                    <option value="question_1" <?= (isset($choix_question) && $choix_question == 'question_1')? 'selected' : '' ?>>Vous en avez marre d’être seul(e)</option>
                    <option value="question_2" <?= (isset($choix_question) && $choix_question == 'question_2')? 'selected' : '' ?>>Est-ce qu'il/elle m'aime ?</option>
                    <option value="question_23" <?= (isset($choix_question) && $choix_question == 'question_23')? 'selected' : '' ?>>Il/Elle vous trompe</option>
                    <option value="question_24" <?= (isset($choix_question) && $choix_question == 'question_24')? 'selected' : '' ?>>Vous en aimez un(e) autre</option>
                    <option value="question_22" <?= (isset($choix_question) && $choix_question == 'question_22')? 'selected' : '' ?>>Il/Elle est marié(e)</option>
                    <option value="question_12" <?= (isset($choix_question) && $choix_question == 'question_12')? 'selected' : '' ?>>Il/elle vous ignore</option>
                    <option value="question_11" <?= (isset($choix_question) && $choix_question == 'question_11')? 'selected' : '' ?>>Il/Elle vous a quitté</option>
                    <option value="question_10" <?= (isset($choix_question) && $choix_question == 'question_10')? 'selected' : '' ?>>Il/Elle ne sait pas que vous l'aimez</option>
                </optgroup>
                <optgroup label="Argent">
                    <option value="question_701" <?= (isset($choix_question) && $choix_question == 'question_701')? 'selected' : '' ?>>Vous attendez une décision de justice</option>
                    <option value="question_71" <?= (isset($choix_question) && $choix_question == 'question_71')? 'selected' : '' ?>>Vous attendez un contrat</option>
                    <option value="question_72" <?= (isset($choix_question) && $choix_question == 'question_72')? 'selected' : '' ?>>Vous attendez un héritage</option>
                    <option value="question_73" <?= (isset($choix_question) && $choix_question == 'question_73')? 'selected' : '' ?>>Vous attendez un investissement</option>
                    <option value="question_74" <?= (isset($choix_question) && $choix_question == 'question_74')? 'selected' : '' ?>>Vous attendez une bourse</option>
                </optgroup>
                <optgroup label="Travail">
                    <option value="question_4" <?= (isset($choix_question) && $choix_question == 'question_4')? 'selected' : '' ?>>Vous attendez une augmentation</option>
                    <option value="question_4" <?= (isset($choix_question) && $choix_question == 'question_4')? 'selected' : '' ?>>Vous attendez d'être muté</option>
                    <option value="question_3" <?= (isset($choix_question) && $choix_question == 'question_3')? 'selected' : '' ?>>Vous chezchez un emploi</option>
                </optgroup>
            </select>
     </div>
		<div style="margin-top:20px;text-align:center;height:72px;">
		<input type="submit" style="height: 80px;" value="je valide ma demande" name="valider" class="button"/>
		</div>
			
				 </div>
				
                </aside>
                            <div class="clearfix"></div>
</form>           
                        </div>

        </div>
    
	
   

    <?php include('include/footer_inc_inscription.php'); ?>
