<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
$kgestion = new APIKGestion;

$err = array();
$conversion = 0;
$retour = array();
$reinscription = false;

$today_date_bdd = date('Y-m-d');
$today_datetime_bdd = date('Y-m-d H:i:s');
$today_date_smf = date('m/d/Y');

/* ========================================================================== *
 *                     TRAITEMENT DES DONNÉES DE TRACKING                     *
 * ========================================================================== */

$id_rdm  = uuid();
$ip      = $_SERVER['REMOTE_ADDR'];
$page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
$website = isset($param['site']) ? $param['site'] : '';
$source  = isset($param['affiliation']) ? $param['affiliation'] : false;
$formurl_kgs = isset($param['source']) ? $param['source'] : false;
$regformurl_kgs = $formurl_kgs;
$gclid   = isset($param['gclid']) ? $param['gclid'] : '';
$voyant  = isset($param['voyant']) ? $param['voyant'] : '';
// ---- TRACKING REFLEX
$rc_affiliateid = isset($_SESSION['reflexcash_affiliateid']) ? $_SESSION['reflexcash_affiliateid'] : '';
$rc_source = isset($_SESSION['reflexcash_source']) ? $_SESSION['reflexcash_source'] : '';

if(!$website){
    $website = 'myastro.fr';
}
if(!$source){
    $source = 'naturel';
}
if(!$formurl_kgs){
    $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
}

/* ========================================================================== *
 *                        TRAITEMENT DE L'UTILISATEUR                         *
 * ========================================================================== */

// Genre -----------------------------------------------------------------------
$sexe = isset($param['sexe']) ? $param['sexe'] : null;
$sexe = str_replace('homme', 'M', $sexe);
$sexe = str_replace('femme', 'F', $sexe);

// Prénom ----------------------------------------------------------------------
$prenom = form_firstname($err, $param);
// Date de naissance & Signe Astrologique --------------------------------------
$dtn_bdd = $dtn_smf = $dtn_ses = '';
$need_birthdate = isset($param['optional_birthdate']) ? false : true;
$dtn_j = isset($param['jour'])  && !empty($param['jour'])  ? $param['jour']  : false;
$dtn_m = isset($param['mois'])  && !empty($param['mois'])  ? $param['mois']  : false;
$dtn_a = isset($param['annee']) && !empty($param['annee']) ? $param['annee'] : false;
$signe = '';

if($need_birthdate){
    if($dtn_j && $dtn_m && $dtn_a){
        $dtn_bdd = $dtn_a."-".$dtn_m."-".$dtn_j; // FORMAT BDD MYASTRO
        $dtn_smf = $dtn_m."/".$dtn_j."/".$dtn_a; // FORMAT SMARTFOCUS
        $dtn_ses = $dtn_j."/".$dtn_m."/".$dtn_a; // FORMAT SESSION

        $signe = get_signe_astro($dtn_j, $dtn_m);
    } else {
        $err['date_naissance'] = 'Merci dʼindiquer votre date de naissance.';
    }
}

// Adresse mail ----------------------------------------------------------------
$email = isset($param['email']) ? trim($param['email']) : false;
if(!preg_match("$[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-.]?[0-9a-zA-Z])*\.[a-zA-Z]{2,4}$", $email)){
    $err['email'] = 'Cette adresse email nʼest pas valide.';
}

// Numéro de téléphone & Pays --------------------------------------------------
$partenaires = isset($param['partenaires']) ? 1 : 0;
$horoscope   = isset($param['horoscope']) && !empty($param['horoscope']) ? 1 : 0;

$cguv        = isset($param['cguv']) ? $param['cguv'] : false;
if(!$cguv){
    $err['cguv'] = 'Veuillez accepter les conditions générales';
}
list($tel, $pays) = form_phone($err, $param);

// Question posée --------------------------------------------------------------
if (isset($param['question_code'])){
    // Nouveau champs de question avec texte de la question (value json)
    if(!empty($param['question_code'])){
        $question = json_decode(str_replace("'", '"', $param['question_code']), true);
        if($question == 'AMOUR-CONJOINT'){
            // En fonction de si le conjoint est rempli, soit amour, soit avour avec P2
            $questions = array(
                'question_1' => [ 'code' => 'question_1', 'subject' => 'sentimental', 'text' => 'Mon avenir sentimental - célibataire', 'conjoint' => false ],
                'question_2' => [ 'code' => 'question_2', 'subject' => 'sentimental', 'text' => 'Mon avenir sentimental - en couple', 'conjoint' => true ],
            );
            $code = (isset($param['conjoint']) && !empty($param['conjoint'])) ? 'question_2' : 'question_1';
            $question = $questions[$code];
        } else {
            $question['conjoint'] = isset($question['conjoint']) ? $question['conjoint'] : false;
        }
        $question['content'] = isset($param['question_content']) ? $param['question_content'] : null;
    } else {
        $err['question_code'] = 'Veuillez choisir votre question : Quel est le sujet de vos tourments ?';
    }
} else {
    // Anciens champs de question
    $question['code']    = isset($param['theme_id']) && !empty($param['theme_id']) ? $param['theme_id'] : false;
    $question['subject'] = 'sentimental';
    $question['content'] = isset($param['question']) && !empty($param['question']) ? $param['question'] : null;

    if ($question['code'] == 'question_3' || $question['code'] == 'question_4'){
        $question['subject'] = 'professionel';
    }
    if($question['code'] == 'question_73'){
        $question['subject'] = 'financier';
    }

    $question['text'] = '';

    // Tableau comprenant les questions qui nécessitent les infos du conjoint.
    $questionConjoint = array('question_2', 'question_24', 'question_11', 'printemps16_amour');
    $question['conjoint'] = in_array($question['code'], $questionConjoint);

    if(!$question['code']){
        $err['theme_id'] = 'Veuillez choisir votre question : Quel est le sujet de vos tourments ?';
    }

    $mind = isset($param['mind']) && !empty($param['mind']) ? $param['mind'] : false;
    $user_responses = array(
        'choix'     => $question['code'],
        'question'  => $question['content'],
        'situation' => $mind
    );
}

/* ========================================================================== *
 *                           TRAITEMENT DU CONJOINT                           *
 * ========================================================================== */

$conjoint_prenom  = $conjoint_dtn_bdd = $conjoint_dtn_smf = $conjoint_dtn_ses = $conjoint_signe = '';

if($question['conjoint']){
// Prénom ----------------------------------------------------------------------
    $conjoint_prenom  = isset($param['conjoint']) ? $param['conjoint'] : '';
    $test_prenom = trim($conjoint_prenom, ' ');
    if(empty($test_prenom)){
        $err['conjoint'] = 'Merci dʼindiquer le prénom de lʼêtre aimé.';
    } elseif(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom)){
        $err['conjoint'] = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le prénom de lʼêtre aimé.';
    }
    unset($test_prenom);
}

/* ========================================================================== *
 *                          ENREGISTREMENT KGESTION                          *
 * ========================================================================== */

if(empty($err)){

    $post_data = array(
        'email'             => $email,
        'firstName'         => $prenom,
        'gender'            => $sexe,
        'birthday'          => $dtn_bdd,
        'sign'              => $signe,
        'phone'             => $tel,
        'country'           => $pays,
        'spouseName'        => $conjoint_prenom,
        'spouseSign'        => $conjoint_signe,
        'spouseBirthday'    => $conjoint_dtn_bdd,
        'questionDate'      => $today_date_bdd,
        'questionSubject'   => $question['subject'],
        'questionCode'      => $question['code'],
        'questionText'      => $question['text'],
        'questionContent'   => $question['content'],
        'isOptinNewsletter' => $horoscope,
        'isOptinPartner'    => $partenaires,
        'myastroIp'         => $ip,
        'myastroWebsite'    => $website,
        'myastroSource'     => $source,
        'myastroUrlOrigin'  => $formurl_kgs,
        'myastroUrlRegistration' => $regformurl_kgs,
        'myastroGclid'      => $gclid,
        'reflexAffilateId'  => $rc_affiliateid,
        'reflexSource'      => $rc_source,
         );


    if($reinscription){
        $kgestion_id = $user->kgestion_id;
        $kgestion_update = $kgestion->updateUser($kgestion_id, $post_data);
        if (!$kgestion_update->success){
        }
    } else {
        $kgestion_id = false;
        $kgestion_insert = $kgestion->insertUserDRI($post_data);

        if(!$kgestion_insert->success){
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        } else {
            $kgestion_id = $kgestion_insert->id;
            die(json_encode(array('client_id' => $kgestion_id)));

        }
    }

} else {
    die(json_encode(array('error'=>$err)));
}