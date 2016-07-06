<?php
session_start();
$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

/*===============================================================* 
*                 INITIALISATION DES VARIABLES                   *
*================================================================*/
// Tableau comprenant les questions qui nécessitent les infos du conjoint.
$questionConjoint = array('question_2','question_24','question_11');
$needConjoint     = false;
$msg              = array();
$question         = 'sentimentale';
$confidentielle   = "1";
$confidentielle_  = "true";
$website          = isset($param['site']) ? $param['site'] : 'myastro.fr';
$affiliation      = isset($param['affiliation']) ? $param['affiliation'] : 'naturel';
$source           = isset($param['source']) ? $param['source'] : 'myastro-voyance-gratuite-6';
$partenaires      = (isset($param['partenaires'])) ? 1 : 0;
$partenaires2     = (isset($param['partenaires'])) ? "true" : "false";
$horoscope        = (isset($param['horoscope'])   && !empty($param['horoscope']))   ? 'true' : 'false';
$horoscope_       = (isset($param['horoscope'])   && !empty($param['horoscope']))   ? 'true' : 'false';
$partenaire_      = "false";
$site             = "true";
$confidentielle_  = "true";
$id_random        = uuid();
$ip               = $_SERVER['REMOTE_ADDR'];
$page             = 'true';
$trouve           = false;
$id_form          = 6;
$gclid            = (isset($param['gclid'])) ? $param['gclid'] : false;

  
  /*===============================================================* 
  *                 TRAITEMENT DES DONNEES ASTRO                   *
  *================================================================*/
  $cguv = (isset($param['cguv'])) ? $param['cguv'] : false;
  if(!$cguv){
    $msg['cguv'] = 'Veuillez accepter les conditions générales';
  }

  $choix_question = (isset($param['theme_id']) && !empty($param['theme_id'])) ? $param['theme_id'] : false; 
  if (
         $choix_question == 'question_3' 
      || $choix_question == 'question_4'
      || $choix_question == 'question_73'
  ){
    $question='professionelle';
  }

  if(!$choix_question){
    $msg['theme_id'] = 'Veuillez répondre à la question : Quel est le sujet de vos tourments ?';
  }

  $mind = (isset($param['mind']) && !empty($param['mind'])) ? $param['mind'] : false;

  /*===============================================================* 
  *                 TRAITEMENT DE L'UTILISATEUR                    *
  *================================================================*/
  $sexe             = (isset($param['sexe']))           ? $param['sexe']            : false;
  $prenom           = (isset($param['prenom']))         ? $param['prenom']          : false;
  $email            = (isset($param['email']))          ? trim($param['email'])     : false;
  $tel              = (isset($param['tel']))            ? $param['tel']             : false;
  $pays             = (isset($param['pays']))           ? $param['pays']            : false;
  $date_naissance_j = (isset($param['jour']))           ? $param['jour']            : false;
  $date_naissance_m = (isset($param['mois']))           ? $param['mois']            : false;
  $date_naissance_a = (isset($param['annee']))          ? $param['annee']           : false;
  
  if($date_naissance_j && $date_naissance_m && $date_naissance_a){
    $date1   = $date_naissance_a."-".$date_naissance_m."-".$date_naissance_j;
    $datean1 = $date_naissance_m."/".$date_naissance_j."/".$date_naissance_a;
    $birthdate = $date_naissance_j."/".$date_naissance_m."/".$date_naissance_a;


    if(($date_naissance_j>0) && ($date_naissance_m>0) && ($date_naissance_a>0)){
        $signe = get_signe_astro($date_naissance_j,$date_naissance_m);
    }
  }else{
    $msg['date_naissance'] = 'Merci d\'indiquer votre date de naissance.<br />';
  }

  $test_prenom = trim($prenom, ' ');
  if(empty($test_prenom)){
    $msg['prenom'] = 'Merci d\'indiquer votre prénom.<br />';
  }
  if(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom) && !empty($test_prenom)){
    $msg['prenom'] = 'Merci d\'indiquer votre prénom pour correspondre au format demandé<br />';
  }
  
  /*===============================================================* 
  *            TRAITEMENT DU CONJOINT ( SI BESOIN )                *
  *================================================================*/
  $conjoint_prenom  = (isset($param['conjoint'])) ? $param['conjoint'] : '';
  $conjoint_date_naissance = false;

  $conjoint_date_naissance_j = (isset($param['jour_c']))      ? $param['jour_c']     : false;
  $conjoint_date_naissance_m = (isset($param['mois_c']))      ? $param['mois_c']     : false;
  $conjoint_date_naissance_a = (isset($param['annee_c']))     ? $param['annee_c']    : false;


  if(in_array($choix_question,$questionConjoint)){
    $needConjoint = true;
    
    if($conjoint_date_naissance_j && $conjoint_date_naissance_m && $conjoint_date_naissance_a){

        $date2 = $conjoint_date_naissance_a."-".$conjoint_date_naissance_m."-".$conjoint_date_naissance_j;
        $datean2= $conjoint_date_naissance_m."/".$conjoint_date_naissance_j."/".$conjoint_date_naissance_a;
        $conjoint_date_naissance = true;

      if(((int)$conjoint_date_naissance_j>0) && ((int)$conjoint_date_naissance_m>0) && ((int)$conjoint_date_naissance_a>0)){
        $signe_conjoint = get_signe_astro($conjoint_date_naissance_j,$conjoint_date_naissance_m);
      }
      
    }
  }



  $test_conjoint_prenom = trim($conjoint_prenom, ' ');
   if(($needConjoint && empty($conjoint_prenom)) || ($needConjoint && empty($test_conjoint_prenom))){
    $msg['conjoint'] = 'Merci de remplir le prénom de l\'être aimé. <br />';
  }
  if($needConjoint && !empty($test_conjoint_prenom) && !preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $conjoint_prenom)){
    $msg['conjoint'] = 'Merci de remplir le prénom de l\'être aimé pour correspondre au format demandé. <br />';
  }
  if($needConjoint && !$conjoint_date_naissance){
    $msg['conjoint_date_naissance'] = 'Merci de remplir la date de naissance de l\'être aimé. <br />';
  }

  /*===============================================================* 
  *    SI LE MAIL EST VALIDE / EXISTE-IL DEJA EN BASE ?            *
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
  *     TRAITEMENT DU NUMERO DE TELEPHONE             *
  *================================================== */

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
    $msg['tel'] = "Numéro de téléphone incorrect.";
  }

/*================================================================================================================* 
    *  AJOUT DE L'INDICATIF PAYS AU TEL POUR LES NUM FR ET DOM POUR LES CAMPAGNES SMS                 *
    *================================================================================================================ */
      $tel = format_number_FR_DOM($tel,$pays);

  /*==================================================* 
  *             TRAITEMENT DES DONNEES                *
  *================================================== */
  
  if(empty($msg)){

    $today = date("m/d/Y");
    $date_ques = date('Y-m-d');
    $user_responses = array(
          'choix'     => $choix_question,
          'question'  => (isset($param['question']) && !empty($param['question'])) ? $param['question'] : NULL ,
          'situation' => $mind
      );

    if (!$trouve){
      $bdd->insert(
        $bdd->users,
        array(
          'id'                      => $id_random,
          'ip_adress'               => $ip,
          'history'                 => date('Y-m-d H:i:s'),
          'nom'                     => ( isset($nom) ) ? $nom : '',
          'prenom'                  => $prenom,
          'sexe'                    => $sexe,
          'dateNaissance'           => $date1,
          'signeAstrologique'       => $signe,
          'conjoint'                => ( isset($conjoint_prenom) ) ? $conjoint_prenom : '',
          'email'                   => $email,
          'ville'                   => ( isset($ville) ) ? $ville : '',
          'questionDate'            => date('Y-m-d'),
	  'question_date'           => date('Y-m-d H:i:s'),
          'questionSujet'           => $question,
          'questionContent'         => $choix_question,
          'horoscope'               => $horoscope,
          'signe2'                  => ( isset($signe_conjoint) ) ? $signe_conjoint : '',
          'partenaires'             => $partenaires,
          'date_naissance_conjoint' => ( isset($date2) ) ? $date2 : '',
          'voyant'                  => $page,
          'voyant1'                 => ( isset($vt) ) ? $vt : '0',
          'tel'                     => $tel,
          'pays'                    => $pays,
	        'source'                  => $source,
          'url'                     => explode("?", $_SERVER['HTTP_REFERER'])[0],
          'gclid'                   => $gclid,
          'tel_is_valid'            => 1,
          'blacklisted'             => 0
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
          'signe2'            => (isset($signe_conjoint))? $signe_conjoint : '',
          'signeAstrologique' => $signe,
          'conjoint'          => (isset($conjoint_prenom))? $conjoint_prenom : '',
          'questionDate'      => date('Y-m-d'),
	        'question_date'     => date('Y-m-d H:i:s'),
          'questionContent'   => $choix_question,
          'dateNaissance'     => $date1,
          'tel'               => $tel,
          'pays'              => $pays,
          'source'            => $source,
          'url'               => explode("?", $_SERVER['HTTP_REFERER'])[0],
          'gclid'             => $gclid
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
    
    $params = array(
        'DATEJOIN'        => $dateJoin,
        'DATEMODIF'       => $today,
        'SITE'            => $website,
        'SOURCE'          => $affiliation,
        'URL'             => $source,
        'CLIENTURN'       => $choix_question,
        'EMVADMIN2'       => $horoscope_,
        'EMVADMIN3'       => $partenaires2,
        'DATEOFBIRTH'     => $datean1,
        'SIGNE'           => $signe,
        'FIRSTNAME'       => $prenom,
        'EMVCELLPHONE'    => intval($tel),
        'NUMEROTELEPHONE' => $tel,
        'TITLE'           => $sexe,
        'CODE'            => ( isset($idindex) ) ? base_convert($idindex, 10, 32) : '',
        'IDASTRO'         => ( isset($idindex) ) ? base_convert($idindex, 10, 32) : '',
        'FIRSTNAME2'      => ( isset($conjoint_prenom) ) ? $conjoint_prenom : '',
        'SIGNE_P2'        => ( isset($signe_conjoint) ) ? $signe_conjoint : '',
        'GROUPE_FLAG_5'   => $param['compteur']['flag5'],
        'GROUPE_FLAG_7'   => $param['compteur']['flag7'],
        'GROUPE_FLAG_15'  => $param['compteur']['flag15'],
        'GROUPE_FLAG_30'  => $param['compteur']['flag30']
    );

    $_SESSION['support']        = $param['support'];
    $_SESSION['firstname']      = $prenom;
    $_SESSION['email']          = $email;
    $_SESSION['birthdate']      = $birthdate;
    $_SESSION['sexe']           = $sexe;
    $_SESSION['cards']          = $param['cards'];
    $_SESSION['phone']          = $tel;
    $_SESSION['question']       = $choix_question;
    $_SESSION['firstnameJoint'] = $conjoint_prenom;
    $_SESSION['birthdateJoint'] = $date2;
    $_SESSION['user_id']        = $idindex;
    $_SESSION['pays']           = $pays;
    $_SESSION['trigger']        = $choix_question;
    $_SESSION['source']         = $source;
    $_SESSION['affiliation']    = $affiliation;
    $_SESSION['page']           = explode("?", $_SERVER['HTTP_REFERER'])[0];
    
    $smartFocus->insert($email,$params);
    $compteur->process();
   

 /*==================================================* 
    *                 ENVOI SMS DE CONFIMATION             
    *================================================== */

    //_send_inscription_sms(INSCRIPTION_1, '+' . $tel, $prenom, INSCRIPTION_DELAY);

   
  /*==================================================* 
   *                 FIN ENVOI SMS DE CONFIRMATION                  
  *================================================== */

      if (   time() > strtotime(date('Y-m-d 09:00:00')) 
          && time() < strtotime(date('Y-m-d 23:59:59'))
          && !isset($_COOKIE['tchat'] )) 
      {

         //$redirect_url = 'http://www.myastro.fr/tchat/';
        $redirect_url = 'http://www.myastro.fr/merci-voyance';
      }
      else{
         $redirect_url = 'http://www.myastro.fr/merci-voyance';
      }

      die(json_encode(array('url' => $redirect_url)));
  } // Fin si $msg=0
  else{
    die(json_encode($msg));
  }
?>
  
