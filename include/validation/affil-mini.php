<?php
session_start();
$bdd = new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST);

/* =============================================================== * 
 *                 INITIALISATION DES VARIABLES                    *
 * =============================================================== */
$conversion = 0;
$questionConjoint = array('question_2','question_24','question_11'); // Tableau comprenant les questions qui nécessitent les infos du conjoint.
$needConjoint     = false;
$msg              = array();
$question         = 'sentimentale';
$confidentielle   = "1";
$confidentielle_  = "true";
$source           = (isset($param['source'])) ? $param['source'] : 'voyance-affil-1';
$partenaires      = (isset($param['partenaires'])) ? 1 : 0;
$partenaires2     = (isset($param['partenaires'])) ? "true" : "false";
$horoscope        = (isset($param['horoscope'])   && !empty($param['horoscope']))   ? 'true' : 'false';
$horoscope_       = (isset($param['horoscope'])   && !empty($param['horoscope']))   ? 'true' : 'false';
$partenaire_      = "false";
$site             = "true";
$id_random        = uuid();
$ip               = $_SERVER['REMOTE_ADDR'];
$page             = 'true';
$trouve           = false;
$id_form          = 6;
$gclid            = (isset($param['gclid'])) ? $param['gclid'] : false;
$affiliation      = (isset($param['affiliation'])) ? $param['affiliation'] : false;
$affiliation_id   = 0;
$dri              = (isset($param['dri'])) ? $param['dri'] : false;
/* =============================================================== * 
 *                 TRAITEMENT DE L'UTILISATEUR                     *
 * =============================================================== */
$sexe      = (isset($param['sexe']))   ? $param['sexe']        : false;
$prenom    = (isset($param['prenom'])) ? $param['prenom']      : false;
$email     = (isset($param['email']))  ? trim($param['email']) : false;
$tel       = (isset($param['tel']))    ? $param['tel']         : false;
$pays      = (isset($param['pays']))   ? $param['pays']        : false;
$date1     = false;
$datean1   = false;
$birthdate = false;
$signe     = false;

$test_prenom = trim($prenom, ' ');
if(empty($test_prenom)){
  $msg['prenom'] = 'Merci d\'indiquer votre prénom.<br />';
}
if(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom) && !empty($test_prenom)){
  $msg['prenom'] = 'Merci d\'indiquer votre prénom pour correspondre au format demandé<br />';
}

/* =============================================================== * 
 *                  TRAITEMENT DES DONNEES ASTRO                   *
 * =============================================================== */
  $cguv = (isset($param['cguv'])) ? $param['cguv'] : false;
  if(!$cguv){
    $msg['cguv'] = 'Veuillez accepter les conditions générales';
  }

  $choix_question = (isset($param['theme_id']) && !empty($param['theme_id'])) ? $param['theme_id'] : false; 

  if(!$choix_question){
    $msg['theme_id'] = 'Veuillez répondre à la question : Quel est le sujet de vos tourments ?';
  }

/* =============================================================== * 
 *               TRAITEMENT DU CONJOINT ( SI BESOIN )              *
 * =============================================================== */

  $conjoint_prenom  = (isset($param['conjoint'])) ? $param['conjoint'] : '';

  if(in_array($choix_question,$questionConjoint)){
    $needConjoint = true;
  }

  $test_conjoint_prenom = trim($conjoint_prenom, ' ');
  if(($needConjoint && empty($conjoint_prenom)) || ($needConjoint && empty($test_conjoint_prenom))){
    $msg['conjoint'] = 'Merci de remplir le prénom de l\'être aimé. <br />';
  }
  if($needConjoint && !empty($test_conjoint_prenom) && !preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $conjoint_prenom)){
    $msg['conjoint'] = 'Merci de remplir le prénom de l\'être aimé pour correspondre au format demandé. <br />';
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
  *             TRAITEMENT DES DONNEES                *
  *================================================== */
  
  if(empty($msg)){
      $conversion = 1;

    $today = date("m/d/Y");
    $date_ques = date('Y-m-d');
    $user_responses = array(
          'choix'     => $choix_question,
          'question'  => (isset($param['question']) && !empty($param['question'])) ? $param['question'] : NULL ,
          'situation' => $mind
      );

    if (!$trouve){
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
                'pays'      => $pays,
                'tel'       => $tel,
                'date'      => date('Y-m-d'), 
                'responses' => serialize($user_responses)
            )
        );
    } else { // trouvé
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
        $dateJoin = substr($user->history,0,10);

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
    *                 SMARTFOCUS                *
    *================================================== */

    $params = array (
        'DATEJOIN'        => $dateJoin,
        'DATEMODIF'       => $today,
        'SOURCE'          => $source,
        'CLIENTURN'       => $choix_question,
        'EMVADMIN2'       => $horoscope_,
        'EMVADMIN3'       => $partenaires2,
        'DATEOFBIRTH'     => $datean1,
        'SEED3'           => $signe,
        'FIRSTNAME'       => $prenom,
        'EMVCELLPHONE'    => ( isset($tel) ) ? intval($tel) : '',
        'NUMEROTELEPHONE' => $tel,
        'TITLE'           => $sexe,
        'CODE'            => ( isset($idindex) ) ? base_convert($idindex, 10, 32) : '',
        'IDASTRO'         => ( isset($idindex) ) ? base_convert($idindex, 10, 32) : '',
        'FIRSTNAME2'      => ( isset($conjoint_prenom) ) ? $conjoint_prenom : '',
        'SEED2'           => ( isset($signe_conjoint) ) ? $signe_conjoint : '',
        'GROUPE_FLAG_5'   => $param['compteur']['flag5'],
        'GROUPE_FLAG_7'   => $param['compteur']['flag7'],
        'GROUPE_FLAG_15'  => $param['compteur']['flag15'],
        'GROUPE_FLAG_30'  => $param['compteur']['flag30']
    );

    if($affiliation == "affil1"){
      $affiliation_id = 1;
    } else if($affiliation == "affil2"){
      $affiliation_id = 2;
    } else if($affiliation == "affilbase"){
      $affiliation_id = 3;
    }

    $_SESSION['conversion']     = $conversion;
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
    $_SESSION['affiliation_id'] = $affiliation_id;
    $_SESSION['page']           = explode("?", $_SERVER['HTTP_REFERER'])[0];

    
    $smartFocus->insert($email,$params);
    $compteur->process();

    /*==================================================*/ 
    $redirect_tchat = array("tarot-affil-1","voyance-affil-1","tarot-affil-3","voyance-affil-3");
    $redirect_dri3  = array("tarot-affil-1","tarot-affil-3","tarot-affil-5");
    $redirect_dri6  = array("voyance-affil-1","voyance-affil-3","voyance-affil-5");
    
    if ($dri) {
        if($dri == "tchat"){
            if ( time() > strtotime(date('Y-m-d 09:00:00')) 
                & time() < strtotime(date('Y-m-d 23:59:59'))
                && !isset($_COOKIE['tchat'] )) 
            {
                $redirect_url = 'http://www.myastro.fr/tchat';
            } else {
                $redirect_url = 'http://www.myastro.fr/merci-voyance';
            }
        } else {
            $redirect_url = $dri;
        }
    } else {
        if(in_array($source, $redirect_tchat)
            && time() > strtotime(date('Y-m-d 09:00:00')) 
            && time() < strtotime(date('Y-m-d 23:59:59'))
            && !isset($_COOKIE['tchat'])){
            $redirect_url = 'http://www.myastro.fr/tchat/';
        } else if(in_array($source, $redirect_dri3)){
            $redirect_url = 'http://www.myastro.fr/dri-8';
        } else if(in_array($source, $redirect_dri6)){
            $redirect_url = 'http://www.myastro.fr/dri-6';
        } else {
            $redirect_url = 'http://www.myastro.fr/merci-voyance';
        }   
    }

    die(json_encode(array('url' => $redirect_url)));
    
} else { // Fin si $msg=0
    die(json_encode($msg));
}
  
