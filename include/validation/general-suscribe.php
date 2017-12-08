<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */

$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
$kgestion = new APIKGestion;
$err = array();
$conversion = 0;
$redirect_url    = false;
$redirect_method = isset($param['redirect_method']) ? $param['redirect_method'] : 'url';
$retour = array();
$trouve = false;
$reinscription = false;
$tchatabo_dri =  [
    'tarot-tchat-dri' => ['cookie' => true],
    'tarot-tchat/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/tarot-tchat/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'tarot-rentree/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/tarot-rentree/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'tarot-en-direct/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/tarot-en-direct/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'myastro/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/myastro/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'myastro/saisie-cb' => [ 'url' => 'https://voyance-en-direct.tv/myastro/saisie-cb?id=[IDKGESTION]', 'cookie' => false ],
    'pouvoir-des-trois/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/pouvoir-des-trois/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'love-myastro/offre-gratuite' => [ 'url' => 'https://voyance-en-direct.tv/love-myastro/offre-gratuite?id=[IDKGESTION]', 'cookie' => true ],
    'pouvoir-des-trois/saisie-cb' => [ 'url' => 'https://voyance-en-direct.tv/pouvoir-des-trois/saisie-cb?id=[IDKGESTION]', 'cookie' => false ],
    'tarot-direct-merci' => ['cookie' => true],
    'tarot-direct-rentree-merci' => ['cookie' => true],
    'quizz-rentree-result?chat=1' => ['cookie' => true],
];
$dri  = isset($param['dri']) ? urldecode($param['dri']) : false;
$dri2 = isset($param['dri2']) ? urldecode($param['dri2']) : 'merci-voyance';

$today_date_bdd = date('Y-m-d');
$today_datetime_bdd = date('Y-m-d H:i:s');
$today_date_smf = date('m/d/Y');

/* ========================================================================== *
 *                     TRAITEMENT DES DONNÉES DE TRACKING                     *
 * ========================================================================== */

$id_rdm  = uuid();
$ip      = $_SERVER['REMOTE_ADDR'];
$page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
$serverName    = parse_url($page, PHP_URL_SCHEME)."://".$_SERVER['SERVER_NAME'];
$website = isset($param['site']) ? $param['site'] : '';
$source  = isset($param['affiliation']) ? $param['affiliation'] : false;
$formurl = isset($param['source']) ? $param['source'] : false;
$formurl_kgs = '';
$regformurl_kgs = isset($param['regurl']) ? $param['regurl'] : '';
$gclid   = isset($param['gclid']) ? $param['gclid'] : '';
$voyant  = isset($param['voyant']) ? $param['voyant'] : '';
// ---- TRACKING REFLEX
$rc_affiliateid = isset($_SESSION['reflexcash_affiliateid']) ? $_SESSION['reflexcash_affiliateid'] : (isset($_SESSION['affiliate_id']) ? $_SESSION['affiliate_id']:'');
$rc_source = isset($_SESSION['reflexcash_source']) ? $_SESSION['reflexcash_source'] : (isset($_SESSION['affiliate_tracker']) ? $_SESSION['affiliate_tracker']:'');

if(!$website){
    addFormLog($bdd, $page, 'WARNING', 'Missing Website, setting <myastro.fr> by default');
    $website = 'myastro.fr';
}
if(!$source){
    addFormLog($bdd, $page, 'WARNING', 'Missing Source, setting <naturel> by default');
    $source = 'naturel';
}
if(!$formurl){
    addFormLog($bdd, $page, 'ERROR', 'Url du formulaire manquant');
    $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.Url du formulaire manquant';
} else {
    // Recherche de l'url kgestion
    $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$formurl.'"';
    $formurl_kgs = $bdd->get_var($tracking_qry);
    if(!isset($formurl_kgs)){
        addFormLog($bdd, $page, 'ERROR', 'Correspondance Url Kgestion non trouvée');
        $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
    } elseif(empty($regformurl_kgs)){
        $urlReg = str_replace($serverName.'/', "", $page);
        $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$urlReg.'"';
        $regformurl_kgs = $bdd->get_var($tracking_qry);
        if(!isset($regformurl_kgs)){
            addFormLog($bdd, $page, 'ERROR', 'Correspondance Url Kgestion non trouvée');
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        }
    }
}

/* ========================================================================== *
 *                        TRAITEMENT DES DONNÉES ASTRO                        *
 * ========================================================================== */

// Conditions générales & Newsletter -------------------------------------------
$partenaires = isset($param['partenaires']) ? 1 : 0;
$horoscope   = isset($param['horoscope']) && !empty($param['horoscope']) ? 1 : 0;
$cguv        = isset($param['cguv']) ? $param['cguv'] : false;
if(!$cguv){
    $err['cguv'] = 'Veuillez accepter les conditions générales';
}
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
// Tirage cartes ---------------------------------------------------------------
$cards_draw = isset($param['cards']) ? $param['cards'] : [];

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
list($tel, $pays) = form_phone($err, $param);

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

// Date de naissance & Signe Astrologique --------------------------------------
    if(isset($param['jour_c']) && isset($param['mois_c']) && $param['annee_c']){
        $conjoint_dtn_j = !empty($param['jour_c'])  ? $param['jour_c']  : false;
        $conjoint_dtn_m = !empty($param['mois_c'])  ? $param['mois_c']  : false;
        $conjoint_dtn_a = !empty($param['annee_c']) ? $param['annee_c'] : false;

        if($conjoint_dtn_j && $conjoint_dtn_m && $conjoint_dtn_a){
            $conjoint_dtn_bdd = $conjoint_dtn_a."-".$conjoint_dtn_m."-".$conjoint_dtn_j; // FORMAT BDD
            $conjoint_dtn_smf = $conjoint_dtn_m."/".$conjoint_dtn_j."/".$conjoint_dtn_a; // FORMAT SMART FOCUS
            $conjoint_dtn_ses = $conjoint_dtn_j."/".$conjoint_dtn_m."/".$conjoint_dtn_a; // FORMAT SESSION

            $conjoint_signe = get_signe_astro($conjoint_dtn_j, $conjoint_dtn_m);
        } else {
            $err['date_naissance'] = 'Merci dʼindiquer la date de naissance de lʼêtre aimé.';
        }
    }
}

/* ========================================================================== *
 *                       RECHERCHE PROSPECT SUR MYASTRO                       *
 * ========================================================================== */

$idindex = false;
$req = 'SELECT internal_id, questionDate, history, source, kgestion_id FROM '.$bdd->users.' WHERE email="%s"';
$user = $bdd->get_row($bdd->prepare($req, $email));
unset($req);

if($user){
    $trouve = true;
    $idindex = $user->internal_id;
    if($user->questionDate == $today_date_bdd AND $user->source == $formurl){
        $reinscription = true;
    }
}
/* ========================================================================== *
 *                           ENREGISTREMENT HAMEDIA                           *
 * ========================================================================== */

if(empty($err)){
    $hm_save = isset($param['hamedia_save']) ? $param['hamedia_save'] : null;
    if(!empty($param['hamedia_save'])){
        $hamedia = new APIHamedia;
        $hm_savelists = json_decode($hm_save);
        $post_data = array(
            'email' => $email,
            'firstname' => $prenom,
            'lastname' => ' ',
            'lifecycle' => 'lead',
            'lists' => $hm_savelists
        );
        $hamedia_insert = $hamedia->insertUser($post_data);
        if(!$hamedia_insert->success){
            addFormLog($bdd, $page, 'ERROR', '[API HAMEDIA] Erreur insertion user > '.json_encode($hamedia_insert));
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.ERREUR API HAMEDIA';
        }
    }
}

/* ========================================================================== *
 *                          ENREGISTREMENT KGESTION                           *
 * ========================================================================== */
$newKgestion = false;
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
        'questionSubject'   => isset($question['subject']) ? $question['subject'] : '',
        'questionCode'      => isset($question['code']) ? $question['code'] : isset($param['question_code']) ? $param['question_code'] : '' ,
        'questionText'      => isset($question['text']) ? $question['text'] : '',
        'questionContent'   => isset($question['content']) ? $question['content'] : '',
        'isOptinNewsletter' => $horoscope,
        'isOptinPartner'    => $partenaires,
        'myastroIp'         => $ip,
        'myastroWebsite'    => $website,
        'myastroSource'     => $source,
        'myastroUrlOrigin'  => $formurl_kgs,
        'myastroUrlRegistration' => $regformurl_kgs,
        'myastroGclid'      => $gclid,
        'reflexAffilateId'  => $rc_affiliateid,
        'reflexSource'      => $rc_source
    );

    if(!in_array($dri, $tchatabo_dri)){
        $post_data['myastroPsychic'] = $voyant;
    }

    if($reinscription){
        $kgestion_id = $user->kgestion_id;
        $kgestion_update = $kgestion->updateUser($kgestion_id, $post_data);
        if (!$kgestion_update->success){
            addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur update user '.$idindex.' on reinscription > '.json_encode($kgestion_update));
        }
    } else {
        $kgestion_id = false;
        if($idindex){
            $post_data['myastroId'] = $idindex;
        }
        $kgestion_insert = $kgestion->insertUser($post_data);
        if(!$kgestion_insert->success){
            addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur insertion user > '.json_encode($kgestion_insert));
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        } else {
            $kgestion_id = $kgestion_insert->id;
            $newKgestion = $kgestion_insert->new;
        }
    }
}
/* ========================================================================== *
 *                       RECHERCHE PROSPECT SUR KGESTION                       *
 * ========================================================================== */
$repousse = $doublon = $affiliation = 0;
if($newKgestion) {
    $searchAffiliation = $kgestion->searchProspectAffiliation($kgestion_id);
    if($searchAffiliation && $searchAffiliation->doublon > 0){
        $doublon = 1;
    }
    if($searchAffiliation && $searchAffiliation->repousse > 0){
        $repousse = 1;
    }

    if($repousse == 0 && $doublon == 0) {
        $affiliation = 0;
    }
    if($repousse == 0 && $doublon == 1) {
        $affiliation = 1;
    }
    if($repousse == 1 && $doublon == 0) {
        $affiliation = 10;
    }
    if($repousse == 1 && $doublon == 1) {
        $affiliation = 11;
    }

    $post_data = array(
        'email'             => $email,
        'firstName'         => $prenom,
        'affiliation'       => $affiliation
    );

    $kgestion_update = $kgestion->updateUser($kgestion_id, $post_data);
    if (!$kgestion_update->success){
        addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur update user '.$idindex.' on reinscription > '.json_encode($kgestion_update));
    }
}

/* ========================================================================== *
 *                                CONVERSION                                  *
 * ========================================================================== */

if(empty($err)){
    $conversion = 1;
    if($newKgestion) {
        if ($affiliation == 0){ // Nouveau prospect
            $conversion = 2;
        } else { // Existe déjà
            $conversion = 0;
        }
    } else {
        $conversion = 0;
    }


/* ========================================================================== *
 *                           ENREGISTREMENT MYASTRO                           *
 * ========================================================================== */
// Insertion Nouveau prospect --------------------------------------------------
    $result = true;
    if (!$trouve){
        $bdd_data = array(
            'id'                      => $id_rdm,
            'kgestion_id'             => $kgestion_id,
            'ip_adress'               => $ip,
            'history'                 => $today_datetime_bdd,
            'prenom'                  => $prenom,
            'sexe'                    => $sexe,
            'dateNaissance'           => $dtn_bdd,
            'signeAstrologique'       => $signe,
            'conjoint'                => $conjoint_prenom,
            'email'                   => $email,
            'questionDate'            => $today_date_bdd,
            'question_date'           => $today_datetime_bdd,
            'questionSujet'           => isset($question['subject']) ? $question['subject'] : '',
            'questionContent'         => isset($question['code']) ? $question['code'] : isset($param['question_code']) ? $param['question_code'] : '' ,
            'horoscope'               => $horoscope,
            'signe2'                  => $conjoint_signe,
            'partenaires'             => $partenaires,
            'date_naissance_conjoint' => $conjoint_dtn_bdd,
            'voyant'                  => $voyant,
            'tel'                     => $tel,
            'pays'                    => $pays,
            'source'                  => $formurl,
            'url'                     => $page,
            'gclid'                   => $gclid,
            'tel_is_valid'            => 1,
            'blacklisted'             => 0,
            'reflex_affiliate_id'     => $rc_affiliateid,
            'reflex_source'           => $rc_source
        );
        $result = $bdd->insert(
            $bdd->users,
            $bdd_data
        );
        $idindex  = $bdd->insert_id;

// Mise à jour du prospect existant --------------------------------------------
    } else {
        $bdd_data = array(
            'kgestion_id'             => $kgestion_id,
            'ip_adress'               => $ip,
            'prenom'                  => $prenom,
            'sexe'                    => $sexe,
            'dateNaissance'           => $dtn_bdd,
            'signe2'                  => $conjoint_signe,
            'signeAstrologique'       => $signe,
            'signeAstrologique'       => $signe,
            'conjoint'                => $conjoint_prenom,
            'questionDate'            => $today_date_bdd,
            'questionDate_before'     => $user->questionDate,
            'question_date'           => $today_datetime_bdd,
            'questionSujet'           => isset($question['subject']) ? $question['subject'] : '',
            'questionContent'         => isset($question['code']) ? $question['code'] : isset($param['question_code']) ? $param['question_code'] : '' ,
            'dateNaissance'           => $dtn_bdd,
            'date_naissance_conjoint' => $conjoint_dtn_bdd,
            'tel'                     => $tel,
            'pays'                    => $pays,
            'source'                  => $formurl,
            'voyant'                  => $voyant,
            'url'                     => $page,
            'gclid'                   => $gclid,
            'smart_focus_insert'      => 0,
            'conversion'              => 0,
            'dri_page'                => '',
            'conversion_page'         => '',
            'reflex_affiliate_id'     => $rc_affiliateid,
            'reflex_source'           => $rc_source
        );
        $result = $bdd->update(
            $bdd->users,
            $bdd_data,
            ['internal_id' => $idindex]
        );
    }

    if(!$result){
        addFormLog($bdd, $page, 'ERROR', '[BDD MYASTRO] Erreur > '.$bdd->last_error);
        $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
    }

// Insertion du détail de la question ------------------------------------------
    if(isset($user_responses)){
        $bdd->insert(
            $bdd->user_response,
            array(
                'id_user'   => $idindex,
                'id_form'   => 6,
                'pays'      => $pays,
                'tel'       => $tel,
                'date'      => $today_date_bdd,
                'responses' => serialize($user_responses)
            )
        );
    }

/* ========================================================================== *
 *                      MISE A JOUR IDASTRO SUR KGESTION                      *
 * ========================================================================== */

    if(!$trouve){
        $kgestion_update = $kgestion->updateUser($kgestion_id, ['myastroId'=>$idindex]);
        if (!$kgestion_update->success){
            addFormLog($bdd, $page, 'ERROR', '[API KGESTION] Erreur update user '.$idindex.' > '.json_encode($kgestion_update));
        }
    }

/* ========================================================================== *
 *                              MISE EN SESSION                               *
 * ========================================================================== */

    $_SESSION['conversion']     = $conversion;
    $_SESSION['support']        = isset($param['support']) ? $param['support'] : '';
    $_SESSION['firstname']      = $prenom;
    $_SESSION['email']          = $email;
    $_SESSION['voyant']         = $voyant;
    $_SESSION['birthdate']      = $dtn_ses;
    $_SESSION['sexe']           = $sexe;
    $_SESSION['cards']          = $cards_draw;
    $_SESSION['phone']          = $tel;
    $_SESSION['question']       = isset($question['code']) ? $question['code'] : isset($param['question_code']) ? $param['question_code'] : '' ;
    $_SESSION['firstnameJoint'] = $conjoint_prenom;
    $_SESSION['birthdateJoint'] = $conjoint_dtn_bdd;
    $_SESSION['user_id']        = $idindex;
    $_SESSION['kgestion_id']    = $kgestion_id;
    $_SESSION['pays']           = $pays;
    $_SESSION['trigger']        = isset($question['code']) ? $question['code'] : isset($param['question_code']) ? $param['question_code'] : '';
    $_SESSION['gclid']          = $gclid;
    $_SESSION['source']         = $formurl;
    $_SESSION['affiliation']    = $source;
    $_SESSION['page']           = $page;

/* ========================================================================== *
 *                                 REDIRECTION                                *
 * ========================================================================== */

    if ($dri){
        if($dri == "tchat"){
            if ( time() > strtotime(date('Y-m-d 09:00:00'))
                & time() < strtotime(date('Y-m-d 23:59:59'))
                && !isset($_COOKIE['tchat'] ))
            {
                $redirect_url = 'tchat';
            }
        } elseif(array_key_exists($dri, $tchatabo_dri)){
            if($tchatabo_dri[$dri]['cookie']){
                if(!isset($_COOKIE['offre_tchat_gratuit'])){
                    $redirect_url = isset($tchatabo_dri[$dri]['url']) ? $tchatabo_dri[$dri]['url'] : $dri;
                    setcookie('offre_tchat_gratuit', '1', time() + 6*24*3600, null, null, false, true);
                } else {
                    $redirect_url = $dri2;
                }
            } else {
                $redirect_url = isset($tchatabo_dri[$dri]['url']) ? $tchatabo_dri[$dri]['url'] : $dri;
            }
        } else {
            $redirect_url = $dri;
        }
    }

    if(!$redirect_url){
        $redirect_url = $dri2;
    }

    if(!preg_match('#^'.PROTOCOL.'.*#', $redirect_url)){
        $redirect_url = PROTOCOL.'://'.ROOT_URL.'/'.$redirect_url;
    }

    $redirect_url = preg_replace('#\[EMAIL\]#', $email, $redirect_url );
    $redirect_url = preg_replace('#\[IDKGESTION\]#', $kgestion_id, $redirect_url );

    $retour[$redirect_method] = $redirect_url;

/* ========================================================================== *
 *                           CONVERSION INSTANTANÉE                           *
 * ========================================================================== */

    if(isset($param['convertir'])){
        if($source == 'reflexcash'){
            include('../include/conversion/reflexcash.php');
        } elseif($source == 'goformedia'){
            include('../include/conversion/goformedia.php');
        } elseif($source == 'weedoit'){
            include('../include/conversion/weedoit.php');
        } else {
            $retour = array();
            $retour['url'] = 'http://'.ROOT_URL.'/conversion';
            $retour['redirect_delay'] = 0;
            $_SESSION['redirection'] = $redirect_url;
        }
    }

/* ========================================================================== *
 *                                   RETOUR                                   *
 * ========================================================================== */

    die(json_encode($retour));
} else {
    die(json_encode(array('error'=>$err)));
}