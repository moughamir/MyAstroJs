<?php

include("geoiploc.php");
include(realpath('include/tools.php'));

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);
$smartFocus = new SmartFocus(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST),new Compteur());

/*===============================================================* 
*                 INITIALISATION DES VARIABLES                   *
*================================================================*/
// Tableau comprenant les questions qui nécessitent les infos du conjoint.
$questionConjoint = array('question_2','question_22','question_12','question_11','question_10');
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
$source           = (isset($_POST['source'])) ? $_POST['source'] : 'myastro-numerologie';
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
	    *        INSERTION DU TRAKCING DANS LE BDD          *
	    *================================================== */
	    $tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
	    $tracker->addTrackingUser($idindex,$_SESSION);
	    /*==================================================* 
	    *                 URL EMAIL VISION                  *
	    *================================================== */
	      
	    //$base_url = 'http://tre.emv3.com/D2UTF8';
	    $params = array(
	               /* 'emv_tag'           => '10040002651C8CC1',
	                'emv_ref'           => 'EdX7CqkdLOHf8SA9MOPQNo3WKEx-HK3D-D7Yeto-K7PYKcc',
	                'EMAIL_FIELD'       => $email,*/
	                'DATEJOIN'    => $dateJoin,
	                'DATEMODIF'   => $today,
	                'SOURCE'      => $source,
	                'CLIENTURN'   => $choix_question,
	                'EMVADMIN2'   => $horoscope,
	                'EMVADMIN3'   => $partenaire,
	                'DATEOFBIRTH' => $datean1,
	                'SEED3'		  => $signe,
	                'FIRSTNAME'   => $prenom,
	                'TITLE'       => $sexe,
	                'GROUPE_FLAG_5'   => $flagCompteur['flag5'],
                  	'GROUPE_FLAG_7'   => $flagCompteur['flag7'],
                  	'GROUPE_FLAG_15'  => $flagCompteur['flag15'],
                  	'GROUPE_FLAG_30'  => $flagCompteur['flag30']
	    );
		$smartFocus->insert($email,$params);
		$compteur->process();

	   /* $url = $base_url;
	    $i = 1;
	    foreach ($params as $key => $value) {
	      	$url .= ($i==1) ? '?'.$key.'='.$value : '&'.$key.'='.$value ;
	    	$i++;
	    }*/
	    header("Location: http://".ROOT_URL."/merci-voyance");
	} // Fin si pas d'erreur
} // Fin si $_POST['valider']

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <title>Votre analyse numérologique complète et gratuite</title>
	<meta name="description" content="Réponse Claire, Précise et Gratuite. En numérologie, les propriétés des nombres permettraient de mieux connaître votre futur et votre personnalité." />
	
<link rel="stylesheet" type="text/css" href="css/voyance.css" />
	
<?php include('include/header_inc_inscription.php'); ?>
   


<div class="container-fluid" itemscope >

        <!-- Main Content -->
        <div class="row-fluid">

                        <div class="article-content">
                            <header>
                                <div itemscope >
                                    <ul class="breadcrumb" itemprop="breadcrumb">
                                        <li><h4 class="h4"><a href="http://<?= ROOT_URL ?>/"><i class="bo-icon-home"></i>Home</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="http://<?= ROOT_URL ?>/voyance-numerologique-gratuite" class="active">Voyance numérologique gratuite</a><i class="icon-caret-right icon-fixed-width"></i></li>
                                        <li><a href="voyance-numerologique-gratuite-chiffres-<?= $vt;?>-<?= $chv;?>" class="active">Voyance numérologique gratuite chiffres</a><i class="icon-caret-right icon-fixed-width"></i></li> <li>Inscription voyance numérologique gratuite</h4></li>
                                    </ul>
                                </div>
								<div class="cat-widget-title">
									
										<h1 itemprop="headline">Inscription voyance numérologique gratuite</h1>
									
								</div>
                               
								<div class="row-fluid social-share-footer">
									<span class="share-icon icon-caret-right"></span>

									<div class="share-icons">
										<h5 itemprop="headline">Réponse Claire, Précise et Gratuite. En numérologie, les propriétés des nombres permettraient de mieux connaître votre futur et votre personnalité.</h5>
									</div>

								</div>
                             

                            </header>
<br>
                            <span class="clearfix"></span>

                          <!--  ************************ contenu ****************************  -->

                            

                     <?php
                     	if(!empty($msg)){
                     		echo "<div class='alert alert-danger'>";
                     		foreach($msg as $error){
                     			echo "<p>".$error."</p>";
                     		}
                     		echo "</div>";
                     	}
                     ?>     
				<form  id="form" action="inscription-voyance-numerologique-gratuite-<?= $ch;?>-<?= $vt;?>-<?= $chv;?>#form" method="post" onsubmit="return valider()" >
 <aside class="widget w-sponsors">
                    
				<section class="span270">
				<div class="widget-title">
                        <h4>Votre Chiffre</h4>
                </div>
                <div class="widget-content clearfix">
						
					 <img src="images/chiffres/<?= $ch;?>.jpg" alt="" width="150" >
				  
                 </div>
				 <div style="text-align:center;"><div style="margin-left:0px;font-size:12px;padding-top:10px;">
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
			<input  style="width:97%;" type="text" name="conjoint" Placeholder="Son prénom..." id="text" value="<?php if ($conjoint_prenom != '') echo $conjoint_prenom; ?>" maxlength="50">
             
            <label for="date">Sa date de naissance</label>
			
			<select style="width: 20%;" name="conjoint_date_naissance_j" onfocus="jQuery('#conjoint').attr('checked','checked');" >
				  <option selected="selected" value="<?php  echo $conjoint_date_naissance_j;?>"><?php  if ($conjoint_date_naissance_j == ""){ echo 'JJ';}else{ echo $conjoint_date_naissance_j;}?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                  </select>
                  <select style="width: 20%;" name="conjoint_date_naissance_m" onfocus="jQuery('#conjoint').attr('checked','checked');">
                    <option selected="selected" value="<?php  echo $conjoint_date_naissance_m;?>"><?php  if ($conjoint_date_naissance_m == ""){ echo 'MM';}else{ echo $conjoint_date_naissance_m;}?></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                  </select>
                  <select style="width: 40%;" name="conjoint_date_naissance_a" onfocus="jQuery('#conjoint').attr('checked','checked');">
                    <option selected="selected" value="<?php  echo $conjoint_date_naissance_a;?>"><?php  if ($conjoint_date_naissance_a == ""){ echo 'AAAA';}else{ echo $conjoint_date_naissance_a;}?></option>
                    <option value="1912">1912</option>
                    <option value="1913">1913</option>
                    <option value="1914">1914</option>
                    <option value="1915">1915</option>
                    <option value="1916">1916</option>
                    <option value="1917">1917</option>
                    <option value="1918">1918</option>
                    <option value="1919">1919</option>
                    <option value="1920">1920</option>
                    <option value="1921">1921</option>
                    <option value="1922">1922</option>
                    <option value="1923">1923</option>
                    <option value="1924">1924</option>
                    <option value="1925">1925</option>
                    <option value="1926">1926</option>
                    <option value="1927">1927</option>
                    <option value="1928">1928</option>
                    <option value="1929">1929</option>
                    <option value="1930">1930</option>
                    <option value="1931">1931</option>
                    <option value="1932">1932</option>
                    <option value="1933">1933</option>
                    <option value="1934">1934</option>
                    <option value="1935">1935</option>
                    <option value="1936">1936</option>
                    <option value="1937">1937</option>
                    <option value="1938">1938</option>
                    <option value="1939">1939</option>
                    <option value="1940">1940</option>
                    <option value="1941">1941</option>
                    <option value="1942">1942</option>
                    <option value="1943">1943</option>
                    <option value="1944">1944</option>
                    <option value="1945">1945</option>
                    <option value="1946">1946</option>
                    <option value="1947">1947</option>
                    <option value="1948">1948</option>
                    <option value="1949">1949</option>
                    <option value="1950">1950</option>
                    <option value="1951">1951</option>
                    <option value="1952">1952</option>
                    <option value="1953">1953</option>
                    <option value="1954">1954</option>
                    <option value="1955">1955</option>
                    <option value="1956">1956</option>
                    <option value="1957">1957</option>
                    <option value="1958">1958</option>
                    <option value="1959">1959</option>
                    <option value="1960">1960</option>
                    <option value="1961">1961</option>
                    <option value="1962">1962</option>
                    <option value="1963">1963</option>
                    <option value="1964">1964</option>
                    <option value="1965">1965</option>
                    <option value="1966">1966</option>
                    <option value="1967">1967</option>
                    <option value="1968">1968</option>
                    <option value="1969">1969</option>
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option>
                    <option value="1973">1973</option>
                    <option value="1974">1974</option>
                    <option value="1975">1975</option>
                    <option value="1976">1976</option>
                    <option value="1977">1977</option>
                    <option value="1978">1978</option>
                    <option value="1979">1979</option>
                    <option value="1980">1980</option>
                    <option value="1981">1981</option>
                    <option value="1982">1982</option>
                    <option value="1983">1983</option>
                    <option value="1984">1984</option>
                    <option value="1985">1985</option>
                    <option value="1986">1986</option>
                    <option value="1987">1987</option>
                    <option value="1988">1988</option>
                    <option value="1989">1989</option>
                    <option value="1990">1990</option>
                    <option value="1991">1991</option>
                    <option value="1992">1992</option>
                    <option value="1993">1993</option>
                    <option value="1994">1994</option>
                    <option value="1995">1995</option>
                    <option value="1996">1996</option>
                    <option value="1997">1997</option>
                    <option value="1998">1998</option>
                    <option value="1999">1999</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                    <option value="2008">2008</option>
                    <option value="2009">2009</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                  </select>
			
            
			<!--<img src="05.gif" alt="inscription voyance gratuite">
			<img src="numerologie_gratuit.gif" alt="partenaire myastro">-->
			  
                 </div>
				  <div class="widget-title">
                        <h4>Votre Numérologue<br><?php echo $vt; ?></h4>
                </div>
                <div class="widget-content clearfix">
						
					  <img src="images_voyance/voyant/<?php echo $chv; ?>.jpg" alt="voyant">
				  
                 </div>
				</section>
				
				 <div class="span6 main-content">
				 <div class="widget-title">
                        <h4>Pour recevoir votre numérologie gratuite, remplissez le formulaire</h4>
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
                    <option <?php  if ($sexe == "monsieur") echo ' selected="selected" ';?> value="homme">Monsieur</option>
                    
                    <option <?php  if ($sexe == "madame") echo ' selected="selected" ';?> value="femme">Madame</option>
                  </select>
				  
				  <input style="width:97%;" name="prenom" type="text" onfocus="jQuery('#conjoint').attr('checked','checked'); jQuery(this).attr('value',''); "  onBlur="javascript:if(this.value=='')this.value='Votre prénom'" value="<?php if ($prenom == '') echo "Votre prénom"; else echo $prenom; ?>" size="24" maxlength="50"/>
 
                <label for="date">Votre date de naissance</label>
                
				
				
				<select style="width: 20%;" name="date_naissance_j" >
                  <option selected="selected" value="<?php  echo $date_naissance_j;?>"><?php  if ($date_naissance_j == ""){ echo 'JJ';}else{ echo $date_naissance_j;}?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                  <option value="13">13</option>
                  <option value="14">14</option>
                  <option value="15">15</option>
                  <option value="16">16</option>
                  <option value="17">17</option>
                  <option value="18">18</option>
                  <option value="19">19</option>
                  <option value="20">20</option>
                  <option value="21">21</option>
                  <option value="22">22</option>
                  <option value="23">23</option>
                  <option value="24">24</option>
                  <option value="25">25</option>
                  <option value="26">26</option>
                  <option value="27">27</option>
                  <option value="28">28</option>
                  <option value="29">29</option>
                  <option value="30">30</option>
                  <option value="31">31</option>
                </select>
                <select style="width: 20%;" name="date_naissance_m">
                  <option selected="selected" value="<?php  echo $date_naissance_m;?>"><?php  if ($date_naissance_m == ""){ echo 'MM';}else{ echo $date_naissance_m;}?></option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>

                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                  <option value="11">11</option>
                  <option value="12">12</option>
                </select>
                <select style="width: 30%;" name="date_naissance_a">
                  <option selected="selected" value="<?php  echo $date_naissance_a;?>"><?php  if ($date_naissance_a == ""){ echo 'AAAA';}else{ echo $date_naissance_a;}?></option>
                  <option value="1912">1912</option>
                  <option value="1913">1913</option>
                  <option value="1914">1914</option>
                  <option value="1915">1915</option>
                  <option value="1916">1916</option>
                  <option value="1917">1917</option>
                  <option value="1918">1918</option>
                  <option value="1919">1919</option>
                  <option value="1920">1920</option>
                  <option value="1921">1921</option>
                  <option value="1922">1922</option>
                  <option value="1923">1923</option>
                  <option value="1924">1924</option>
                  <option value="1925">1925</option>
                  <option value="1926">1926</option>
                  <option value="1927">1927</option>
                  <option value="1928">1928</option>
                  <option value="1929">1929</option>
                  <option value="1930">1930</option>
                  <option value="1931">1931</option>
                  <option value="1932">1932</option>
                  <option value="1933">1933</option>
                  <option value="1934">1934</option>
                  <option value="1935">1935</option>
                  <option value="1936">1936</option>
                  <option value="1937">1937</option>
                  <option value="1938">1938</option>
                  <option value="1939">1939</option>
                  <option value="1940">1940</option>
                  <option value="1941">1941</option>
                  <option value="1942">1942</option>
                  <option value="1943">1943</option>
                  <option value="1944">1944</option>
                  <option value="1945">1945</option>
                  <option value="1946">1946</option>
                  <option value="1947">1947</option>
                  <option value="1948">1948</option>
                  <option value="1949">1949</option>
                  <option value="1950">1950</option>
                  <option value="1951">1951</option>
                  <option value="1952">1952</option>
                  <option value="1953">1953</option>
                  <option value="1954">1954</option>
                  <option value="1955">1955</option>
                  <option value="1956">1956</option>
                  <option value="1957">1957</option>
                  <option value="1958">1958</option>
                  <option value="1959">1959</option>
                  <option value="1960">1960</option>
                  <option value="1961">1961</option>
                  <option value="1962">1962</option>
                  <option value="1963">1963</option>
                  <option value="1964">1964</option>
                  <option value="1965">1965</option>
                  <option value="1966">1966</option>
                  <option value="1967">1967</option>
                  <option value="1968">1968</option>
                  <option value="1969">1969</option>
                  <option value="1970">1970</option>
                  <option value="1971">1971</option>
                  <option value="1972">1972</option>
                  <option value="1973">1973</option>
                  <option value="1974">1974</option>
                  <option value="1975">1975</option>
                  <option value="1976">1976</option>
                  <option value="1977">1977</option>
                  <option value="1978">1978</option>
                  <option value="1979">1979</option>
                  <option value="1980">1980</option>
                  <option value="1981">1981</option>
                  <option value="1982">1982</option>
                  <option value="1983">1983</option>
                  <option value="1984">1984</option>
                  <option value="1985">1985</option>
                  <option value="1986">1986</option>
                  <option value="1987">1987</option>
                  <option value="1988">1988</option>
                  <option value="1989">1989</option>
                  <option value="1990">1990</option>
                  <option value="1991">1991</option>
                  <option value="1992">1992</option>
                  <option value="1993">1993</option>
                  <option value="1994">1994</option>
                  <option value="1995">1995</option>
                  <option value="1996">1996</option>
                  <option value="1997">1997</option>
                  <option value="1998">1998</option>
                  <option value="1999">1999</option>
                  <option value="2000">2000</option>
                  <option value="2001">2001</option>
                  <option value="2002">2002</option>
                  <option value="2003">2003</option>
                  <option value="2004">2004</option>
                  <option value="2005">2005</option>
                  <option value="2006">2006</option>
                  <option value="2007">2007</option>
                  <option value="2008">2008</option>
                  <option value="2009">2009</option>
                  <option value="2010">2010</option>
                  <option value="2011">2011</option>
                  <option value="2012">2012</option>
                </select>

             <input style="width:97%;" name="email" type="text" onfocus="javascript: this.value=''"   onBlur="javascript:if(this.value=='')this.value='Votre E-mail'" value="<?php if ($email == '') echo "Votre E-mail"; else echo $email; ?>" size="50">
              
             
		<input style="width:97%;" name="tel" type="text" onBlur="javascript:if(this.value=='')this.value='Votre Téléphone'" onfocus="javascript: this.value=''" value="<?php if ($tel == '') echo "Votre Téléphone"; else echo $tel; ?>" size="50">
						
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
				<div style="margin-top:30px;text-align:center;height:80px;">
		<input type="submit" value="je valide ma demande" name="valider" class="button"/>
		</div>
			
				 </div>
				
                </aside>
                 <div class="clearfix"></div>           
</form>
                       



                        
                       

                    </div>
               
                        </div>

        </div>
    
	
   

    <?php include('include/footer_inc_inscription.php'); ?>
