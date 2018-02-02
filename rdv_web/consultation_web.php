<?php // FICHIER INCLUS DEPUIS inc/ajaxHandler.php

/* ========================================================================== *
 *                               INITIALISATION                               *
 * ========================================================================== */
$bdd = new bdd(DBLOGIN, DBPASS, DBNAME, DBHOST);
$kgestion = new APIKGestion;

$err = array();
$retour = array();

/* ========================================================================== *
 *                          RECUPERATION DES INFOS  COORDONNEE BANCAIRE                         *
 * ========================================================================== */

$carte_prenom = isset($param['carte_prenom']) ? $param['carte_prenom'] : '';
$carte_nom = isset($param['carte_nom']) ? $param['carte_nom'] : '';
$carte_num = isset($param['carte_num']) ? $param['carte_num'] : '';
$crypto = isset($param['crypto']) ? $param['crypto'] : '';
$expiration_mois = isset($param['expiration_mois']) ? $param['expiration_mois'] : '';
$expiration_annee = isset($param['expiration_annee']) ? $param['expiration_annee'] : '';
$client_id = isset($param['client_id']) ? $param['client_id'] : '0';
$planning_horaire_selection = isset($param['planning_horaire_selection']) ? $param['planning_horaire_selection'] : '';

/* ===============================================================================================*
*                            GESTION DES ERREURS et Validation
 * ===========================================================================================
 */

if($carte_num == ''){
    $err['carte_num_req'] = 'Numéro de la carte bancaire obligatoire';
}
if($carte_num != '' && !preg_match("$[0-9]{16}$", $carte_num)) {
    $err['carte_num'] = 'Numéro de la carte bancaire doit contenir 16 chiffres.';
}

if($crypto == ''){
    $err['crypto_req'] = 'cryptogramme de sécurité  obligatoire.';
}

if($crypto != '' && !preg_match("$[0-9]{3}$", $crypto)){
    $err['crypto'] = 'cryptogramme de sécurité  doit contenir 3 chiffres.';
}

if($planning_horaire_selection == ''){
    $err['planning_horaire_selection'] = 'Veuillez choisir l\'horaire de la consultation.';
}

$date_rdv = DateTime::createFromFormat("d/m/Y H:i", $planning_horaire_selection);

if($date_rdv <= new DateTime() ){
    $err['planning_horaire_selection_before'] = 'Vous ne pouvez pas choisir cette heure Veuillez selectionner une autre horaire de la consultation.';
}

if($client_id == '0'){

    $sexe = isset($param['sexe']) ? $param['sexe'] : '';
    if(isset($sexe) && !empty($sexe)) {
        $id_rdm  = uuid();
        $ip      = $_SERVER['REMOTE_ADDR'];
        $page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
        $website = isset($param['site']) ? $param['site'] : '';
        $source  = isset($param['affiliation']) ? $param['affiliation'] : false;
        $formurl_kgs = isset($param['source']) ? $param['source'] : false;
        $regformurl_kgs = null;
        $page    = explode("?", $_SERVER['HTTP_REFERER'])[0];
        $serverName    = parse_url($page, PHP_URL_SCHEME)."://".$_SERVER['SERVER_NAME'];
        if(!$formurl_kgs){
            addFormLog($bdd, $page, 'ERROR', 'Url du formulaire manquant');
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.Url du formulaire manquant';
        } else {
            // Recherche de l'url kgestion
            $urlReg = str_replace($serverName.'/', "", $page);
            $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$urlReg.'"';
            $regformurl_kgs = $bdd->get_var($tracking_qry);
            if(!isset($regformurl_kgs)){
                addFormLog($bdd, $page, 'ERROR', 'Correspondance Url Kgestion non trouvée');
                $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
            } else {
                $tracking_qry = 'SELECT stf_formurl_kgestion FROM source_to_formurl WHERE stf_source_myastro ="'.$formurl_kgs.'"';
                $formurl_kgs = $bdd->get_var($tracking_qry);
                if(!isset($formurl_kgs)){
                    $formurl_kgs = $regformurl_kgs;
                }
            }
        }

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

        if($sexe == null) {
            $err['sexe'] = 'Merci dʼindiquer votre sexe.';
        }
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
                'questionDate'      => $today_date_bdd,
                'questionCode'      => $param['question_code'],
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
                $client_id = $kgestion_id;
            } else {
                $kgestion_id = false;
                $kgestion_insert = $kgestion->insertUser($post_data);

                if(!$kgestion_insert->success){
                    $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
                } else {
                    $kgestion_id = $kgestion_insert->id;
                    $client_id = $kgestion_id;
                }
            }

        }
    } else {
        $err['client_id '] = 'Veuillez choisir l\'horaire de la consultation.';
    }
}

if(is_null($expiration_mois) || $expiration_mois == ''){
    $err['expiration_mois'] = 'le mois d\'expiration de la carte bancaire est obligatoire.';
}

if(is_null($expiration_annee) || $expiration_annee == '') {
    $err['expiration_annee'] = 'l\'année d\'expiration de la carte bancaire est obligatoire.';
}

$current_date = new DateTime();
if($current_date->format('Y') > $expiration_annee  || ($current_date->format('Y') == $expiration_annee && $current_date->format('m') > $expiration_mois)){
    $err['expiration'] = 'la date d\'expiration de la carte bancaire est invalide.';
}

elseif(isset($_COOKIE['consultation_5'])) {
    $err['sys'] = 'vous avez déjà profité 5 fois de l\'offre 10 minutes.';
}

//if (empty($err) && !isset($_COOKIE['consultation_jour'])) {
//    setcookie('consultation_jour', '1', time() + 24*3600, null, null, false, true);
//}else {
//    $err['sys'] = 'Vous pouvez prendre seulement 1 seul rendez-vous web par jour.';
//}

/* ========================================================================== *
 *                          ENREGISTREMENT KGESTION  COORDONNEE BANCAIRE                         *
 * ========================================================================== */
if(empty($err)){

    $carte_prenom  = encryptIt($carte_prenom);
    $carte_nom  = $carte_nom;
    $carte_num  = encryptIt($carte_num);
    $crypto  = encryptIt($crypto);
    $expiration = encryptIt($expiration_mois."/".substr($expiration_annee,2));
    $post_data = array(

        'client_id'      => $client_id,
        'planning_horaire_selection'      => $planning_horaire_selection,
        'cartebancaires___name___prenom'      => $carte_prenom,
        'cartebancaires___name___nom'      => $carte_nom,
        'cartebancaires___name___numero'      => $carte_num,
        'cartebancaires___name___expiration'      => $expiration,
        'cartebancaires___name___cryptogramme'      => $crypto
    );

        $kgestion_id = false;
        $kgestion_insert = $kgestion->insertOnlineRDV($post_data);

        if(!$kgestion_insert->success){
            $err['sys'] = 'Système indisponible, veuillez réessayer plus tard.';
        } else {
            if(isset($kgestion_insert->rdv_error)) {
                die(json_encode(array('rdv_error' => $kgestion_insert->message)));
            } else {
                if (empty($err) && !isset($_COOKIE['consultation_1'])) {
                    setcookie('consultation_1', '1', time() + 6*24*3600, null, null, false, true);
                }
                elseif (empty($err) && !isset($_COOKIE['consultation_2'])) {
                    setcookie('consultation_2', '1', time() + 6*24*3600, null, null, false, true);
                }
                elseif (empty($err) && !isset($_COOKIE['consultation_3'])) {
                    setcookie('consultation_3', '1', time() + 6*24*3600, null, null, false, true);
                }
                elseif (empty($err) && !isset($_COOKIE['consultation_4'])) {
                    setcookie('consultation_4', '1', time() + 6*24*3600, null, null, false, true);
                }
                elseif(empty($err) && !isset($_COOKIE['consultation_5'])) {
                    setcookie('consultation_5', '1', time() + 6*24*3600, null, null, false, true);
                }
                die(json_encode(array('rdv_added' => $kgestion_insert->message)));
            }

        }


} else {
    die(json_encode(array('error'=>$err)));
}
