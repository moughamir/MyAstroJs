<?php
// FICHIER INCLUS DEPUIS inc/ajaxHandler.php

$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

/* =========================================== * 
 *         INITIALISATION DES VARIABLES        *
 * =========================================== */

$err = array();
$conversion = 0;
$questionConjoint = array('question_2','question_24','question_11','printemps16_amour'); // Tableau comprenant les questions qui nécessitent les infos du conjoint.
$needConjoint     = false;
$msg              = array();
$questionSubject  = 'sentimentale';
$questionCode     = isset($param['theme_id']) && !empty($param['theme_id']) ? $param['theme_id'] : false;
$questionContent  = isset($param['question']) && !empty($param['question']) ? $param['question'] : NULL;
$formurl          = isset($param['source']) ? $param['source'] : 'erreur';
$website          = isset($param['site']) ? $param['source'] : 'myastro.fr';
$partenaires      = isset($param['partenaires']) ? 1 : 0;
$horoscope        = isset($param['horoscope']) && !empty($param['horoscope']) ? 1 : 0;
$id_random        = uuid();
$ip               = $_SERVER['REMOTE_ADDR'];
$voyant           = isset($param['voyant']) ? $param['voyant'] : '';
$trouve           = false;
$id_form          = 6;
$gclid            = isset($param['gclid']) ? $param['gclid'] : false;
$affiliation      = isset($param['affiliation']) ? $param['affiliation'] : 'naturel';
$website          = isset($param['site']) ? $param['site'] : 'myastro.fr';
$dri              = isset($param['dri']) ? $param['dri'] : false;
$redirect_method  = isset($param['redirect_method']) ? $param['redirect_method'] : 'url';

/* ========================================================================== * 
 *                        TRAITEMENT DES DONNEES ASTRO                        *
 * ========================================================================== */

$cguv = (isset($param['cguv'])) ? $param['cguv'] : false;
if(!$cguv){
    $msg['cguv'] = 'Veuillez accepter les conditions générales';
}

if ($questionCode == 'question_3' || $questionCode == 'question_4' || $questionCode == 'question_73'){
    $questionSubject='professionelle';
}

if(!$questionCode){
    $msg['theme_id'] = 'Veuillez répondre à la question : Quel est le sujet de vos tourments ?';
}

$mind = (isset($param['mind']) && !empty($param['mind'])) ? $param['mind'] : false;

  /*===============================================================* 
  *                 TRAITEMENT DE L'UTILISATEUR                    *
  *================================================================*/
  $sexe             = (isset($param['sexe']))           ? $param['sexe']            : false;
  $prenom           = (isset($param['prenom']))         ? $param['prenom']          : false;
  $email            = (isset($param['email']))          ? trim($param['email'])     : false;
  $date_naissance_j = (isset($param['jour']))           ? $param['jour']            : false;
  $date_naissance_m = (isset($param['mois']))           ? $param['mois']            : false;
  $date_naissance_a = (isset($param['annee']))          ? $param['annee']           : false;
  
  if($date_naissance_j && $date_naissance_m && $date_naissance_a){
    $date1     = $date_naissance_a."-".$date_naissance_m."-".$date_naissance_j; // FORMAT BDD MYASTRO
    $datean1   = $date_naissance_m."/".$date_naissance_j."/".$date_naissance_a; // FORMAT SMARTFOCUS
    $birthdate = $date_naissance_j."/".$date_naissance_m."/".$date_naissance_a; // FORMAT SESSION


    if(($date_naissance_j>0) && ($date_naissance_m>0) && ($date_naissance_a>0)){
        $signe = get_signe_astro($date_naissance_j,$date_naissance_m);
    }
  }else{
    $msg['date_naissance'] = 'Merci dʼindiquer votre date de naissance.<br />';
  }

  $test_prenom = trim($prenom, ' ');
  if(empty($test_prenom)){
    $msg['prenom'] = 'Merci dʼindiquer votre prénom.<br />';
  }
  if(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom) && !empty($test_prenom)){
    $msg['prenom'] = 'Merci dʼindiquer votre prénom sans chiffres.<br />';
  }
  
/* ========================================================================== * 
 *                      TRAITEMENT DU NUMERO DE TELEPHONE                     *
 * ========================================================================== */

$tel  = (isset($param['tel']))  ?$param['tel']  :false;
$tel_needed = (isset($param['tel_needed'])) ?$param['tel_needed'] :false; 
$pays = (isset($param['pays'])) ?$param['pays'] :false;

if($tel_needed && !$tel){ // Téléphone requis mais non remplis
    $msg['tel'] = "Numéro de téléphone manquant.";
} else if($tel){ // Téléphone remplis
    // Vérification du format
    if(!preg_match("#(0{5,}|1{5,}|2{5,}|3{5,}|4{5,}|5{5,}|6{5,}|7{5,}|8{5,}|9{5,}|1234{1,}|(01){5,}|(02){5,}|(03){5,}|(04){5,}|(05){5,}|(06){5,}|(07){5,}|(08){5,}|(09){5,})#", $tel)){
        // Si et seulement si on a pas de motifs qui se répètent, alors on check le format / pays.
        $phoneCheck = checkPhoneNumber($tel, $pays);
        if($phoneCheck['error'] != NULL && $phoneCheck['error'] != 'NULL'){
            $msg['tel'] = $phoneCheck['error'];
        } else {
            $tel  = $phoneCheck["phone"];
            $pays = $phoneCheck["pays"];
            // Ajout de l'indicatif pays au tel pour les num fr et dom pour les campagnes sms
            $tel = format_number_FR_DOM($tel, $pays);
        }
    } else {
        $msg['tel'] = "Numéro de téléphone incorrect.";
    }
}

  /*===============================================================* 
  *            TRAITEMENT DU CONJOINT ( SI BESOIN )                *
  *================================================================*/
  $conjoint_prenom  = (isset($param['conjoint'])) ? $param['conjoint'] : '';
  $conjoint_date_naissance = false;

  $conjoint_date_naissance_j = (isset($param['jour_c']))      ? $param['jour_c']     : false;
  $conjoint_date_naissance_m = (isset($param['mois_c']))      ? $param['mois_c']     : false;
  $conjoint_date_naissance_a = (isset($param['annee_c']))     ? $param['annee_c']    : false;


  if(in_array($questionCode, $questionConjoint)){
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
    $msg['conjoint'] = 'Merci de remplir le prénom de lʼêtre aimé.';
  }
  if($needConjoint && !empty($test_conjoint_prenom) && !preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $conjoint_prenom)){
    $msg['conjoint'] = 'Merci de remplir le prénom de lʼêtre aimé sans chiffres.';
  }

/* ========================================================================== * 
 *              SI LE MAIL EST VALIDE / EXISTE-IL DEJA EN BASE ?              *
 * ========================================================================== */

if(preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$",$email)) { 
    $user = $bdd->get_row($bdd->prepare('SELECT internal_id, questionDate FROM '.$bdd->users.' WHERE email="%s"',$email));
    if($user){
        $trouve = true;
        $idindex =$user->internal_id;
    }
} else {
    $msg['email'] = "Veuillez donner un email valide.";
}

/* ========================================================================== * 
 *                          ENREGISTREMENT KGESTION                           *
 * ========================================================================== */
$post_data = array(
    'email'             => $email,
    'firstName'         => $prenom,
    'gender'            => $sexe,
    'birthday'          => $date1,
    'sign'              => $signe,
    'phone'             => $tel,
    'country'           => $pays,
    'spouseName'        => isset($conjoint_prenom) ? $conjoint_prenom : '',
    'spouseSign'        => isset($signe_conjoint) ? $signe_conjoint : '',
    'spouseBirthday'    => isset($date2) ? $date2 : '',
    'questionDate'      => date('Y-m-d'),
    'questionSubject'   => $questionSubject,
    'questionCode'      => $questionCode,
    'questionText'      => '',
    'questionContent'   => $questionContent,
    'isOptinNewsletter' => $horoscope,
    'isOptinPartner'    => $partenaires,
    'myastroIp'         => $ip,
    'myastroPsychic'    => $voyant,
    'myastroWebsite'    => $website,
    'myastroSource'     => $affiliation,
    'myastroUrl'        => $formurl,
    'myastroGclid'      => $gclid
);

/* ========================================================================== * 
 *                           ENREGISTREMENT MYASTRO                           *
 * ========================================================================== */

if(empty($msg)){ // Si pas d'erreur
    $conversion = 1;

    $today = date("m/d/Y");
    $date_ques = date('Y-m-d');
    $user_responses = array(
        'choix'     => $questionCode,
        'question'  => $questionContent,
        'situation' => $mind
    );
    
    if (!$trouve){ // Nouveau prospect
        $conversion = 2;
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
                'questionSujet'           => $questionSubject,
                'questionContent'         => $questionCode,
                'horoscope'               => $horoscope,
                'signe2'                  => ( isset($signe_conjoint) ) ? $signe_conjoint : '',
                'partenaires'             => $partenaires,
                'date_naissance_conjoint' => ( isset($date2) ) ? $date2 : '',
                'voyant'                  => $voyant,
                'voyant1'                 => ( isset($vt) ) ? $vt : '0',
                'tel'                     => $tel,
                'pays'                    => $pays,
                'source'                  => $formurl,
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
                'pays'      => $pays,
                'tel'       => $tel,
                'date'      => date('Y-m-d'), 
                'responses' => serialize($user_responses)
            )
        );
    } else { // Existe déjà
        // inscrits il y a plus d'1 mois ?
        $date_derniere_inscription = date_create_from_format('Y-m-d', $user->questionDate);
        $date_validite = $date_derniere_inscription->add(new DateInterval('P1M'));
        $date_jour = new DateTime;
        if($date_jour->format('Ymd') > $date_validite->format('Ymd')){
            $conversion = 2;
        }
        // -------------------------------
        
        $bdd->update(
            $bdd->users,
                array(
                    'prenom'              => $prenom,
                    'signe2'              => (isset($signe_conjoint))? $signe_conjoint : '',
                    'signeAstrologique'   => $signe,
                    'conjoint'            => (isset($conjoint_prenom))? $conjoint_prenom : '',
                    'questionDate'        => date('Y-m-d'),
                    'questionDate_before' => $user->questionDate,
                    'question_date'       => date('Y-m-d H:i:s'),
                    'questionContent'     => $questionCode,
                    'dateNaissance'       => $date1,
                    'date_naissance_conjoint' => ( isset($date2) ) ? $date2 : '',
                    'tel'                     => $tel,
                    'pays'                    => $pays,
                    'source'                  => $formurl,
                    'voyant'            => $voyant,
                    'url'               => explode("?", $_SERVER['HTTP_REFERER'])[0],
                    'gclid'             => $gclid
                ),
                array(
                  'internal_id'       => $idindex
                )
            );
        $user = $bdd->get_row($bdd->prepare('SELECT * FROM '.$bdd->users.' WHERE email="%s"',$email));
        $dateJoin = substr($user->history, 0, 10);

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
/* ========================================================================== * 
 *                      MISE A JOUR IDASTRO SUR KGESTION                      *
 * ========================================================================== */
    
    
    
/* ========================================================================== * 
 *                                 SMARTFOCUS                                 *
 * ========================================================================== */

    $params = array(
        'DATEJOIN'        => $dateJoin,
        'DATEMODIF'       => $today,
        'SITE'            => $website,
        'SOURCE'          => $affiliation,
        'URL'             => $formurl,
        'CLIENTURN'       => $questionCode,
        'EMVADMIN2'       => $horoscope > 0 ? 'true' : 'false',
        'EMVADMIN3'       => $partenaires > 0 ? "true" : "false",
        'DATEOFBIRTH'     => $datean1,
        'SIGNE'           => $signe,
        'FIRSTNAME'       => $prenom,
        'EMVCELLPHONE'    => intval($tel),
        'NUMEROTELEPHONE' => $tel,
        'TITLE'           => $sexe,
        'CODE'            => isset($idindex) ? base_convert($idindex, 10, 32) : '',
        'IDASTRO'         => isset($idindex) ? base_convert($idindex, 10, 32) : '',
        'FIRSTNAME2'      => isset($conjoint_prenom) ? $conjoint_prenom : '',
        'SIGNE_P2'        => isset($signe_conjoint) ? $signe_conjoint : '',
        'VOYANT'          => $voyant,
        'VOYANT_CODE'     => getPsychicCode($voyant),
        'GROUPE_FLAG_5'   => $param['compteur']['flag5'],
        'GROUPE_FLAG_7'   => $param['compteur']['flag7'],
        'GROUPE_FLAG_15'  => $param['compteur']['flag15'],
        'GROUPE_FLAG_30'  => $param['compteur']['flag30']
    );
    
    $smartFocus->insert($email,$params);
    $compteur->process();
    
/* ================================================== * 
 *                  MISE EN SESSION                   *
 * ================================================== */

    $_SESSION['conversion']     = $conversion;
    $_SESSION['support']        = $param['support'];
    $_SESSION['firstname']      = $prenom;
    $_SESSION['email']          = $email;
    $_SESSION['voyant']         = $voyant;
    $_SESSION['birthdate']      = $birthdate;
    $_SESSION['sexe']           = $sexe;
    $_SESSION['cards']          = $param['cards'];
    $_SESSION['phone']          = $tel;
    $_SESSION['question']       = $questionCode;
    $_SESSION['firstnameJoint'] = $conjoint_prenom;
    $_SESSION['birthdateJoint'] = $date2;
    $_SESSION['user_id']        = $idindex;
    $_SESSION['pays']           = $pays;
    $_SESSION['trigger']        = $questionCode;
    $_SESSION['gclid']          = $gclid;
    $_SESSION['source']         = $formurl;
    $_SESSION['affiliation']    = $affiliation;
    $_SESSION['page']           = explode("?", $_SERVER['HTTP_REFERER'])[0];
                   
/* ================================================== * 
 *                     REDIRECTION                    *
 * ================================================== */
    
    $redirect_dri4  = array("voyance-affil-2","voyance-affil-4","voyance-affil-6");
    $redirect_dri5  = array("tarot-affil-2","tarot-affil-4","tarot-affil-6");
    
    if ($dri) {
        $redirect_url = $dri;
    } else {
        if(in_array($formurl, $redirect_dri4)){
            $redirect_url = 'http://www.myastro.fr/dri-4';
        } elseif(in_array($formurl, $redirect_dri5)) {
            $redirect_url = 'http://www.myastro.fr/dri-5';
        } else {
            $redirect_url = 'http://www.myastro.fr/merci-voyance';
        }
    }

    die(json_encode(array($redirect_method => $redirect_url)));
    
} else { // Fin si $msg=0
    die(json_encode($msg));
}
  
