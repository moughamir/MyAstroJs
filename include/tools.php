<?php
/* INCLUDES REQUIRED FILES */
define('ROOT_PATH', dirname(dirname(__FILE__)));

require_once(ROOT_PATH.'/inc/config.php');
require_once(ROOT_PATH.'/inc/bdd.php');      // New mysql Class From Wordpress : Wpdb
require_once(ROOT_PATH.'/lib/Compteur/Compteur.class.php'); // Counter used for EMV groups
require_once(ROOT_PATH.'/lib/Tracker/Tracker.class.php'); // Tracking users for campains
//require_once(ROOT_PATH.'/lib/SmartFocus/SmartFocus.class.php'); // Tracking users for campains
require_once(ROOT_PATH.'/lib/APIKGestion/APIKGestion.class.php'); // API KGESTION
require_once(ROOT_PATH.'/lib/APIHamedia/APIHamedia.class.php'); // API HAMEDIA
//require_once(ROOT_PATH.'/sms/myastro-sms.php'); // sms campains

session_start();

//$smartFocus = new SmartFocus(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST), new Compteur());

if((!isset($_SESSION['tracker']) || empty($_SESSION['tracker']))){
  $tracker = new Tracker(new bdd(DBLOGIN,DBPASS,DBNAME,DBHOST));
  $tracker->saveInSession();
}

/**
 * function form_firstname
 * Validation du prénom
 *
 * @param array $err
 * @param array $param
 * @return string
 */

function encryptIt( $q ) {
    $qEncoded      = base64_encode(trim($q));
    return( $qEncoded );
}

function form_firstname(&$err, $param = array()){
    $prenom = isset($param['prenom']) ? $param['prenom'] : '';
    $test_prenom = trim($prenom, ' ');
    if(empty($test_prenom)){
        $err['prenom'] = 'Merci dʼindiquer votre prénom';
    } elseif(!preg_match("#^([a-zA-Z'àâéèêôùûçÀÂÉÈÔÙÛÇ[:blank:]-]{1,75})$#", $prenom)){
        $err['prenom'] = 'Les chiffres et caractères spéciaux ne sont pas autorisés pour le prénom.';
    }
    return $prenom;
}

/**
 * function form_phone
 * Validation du numéro de téléphone
 *
 * @param array $err
 * @param array $param
 * @return string
 */
function form_phone(&$err, $param = array()){
    $tel = isset($param['tel']) && !empty($param['tel']) ? $param['tel'] : false;
    $tel_needed = isset($param['tel_needed']) ? $param['tel_needed'] : false;
    $pays = isset($param['pays']) && !empty($param['pays']) ? $param['pays'] : false;

    if($tel_needed && !$tel){ // Téléphone requis mais non remplis
        $err['tel'] = 'Merci dʼindiquer votre numéro de téléphone.';
    } elseif($tel){ // Téléphone remplis
        if ($pays){
            // Vérification du format
            $test_baseformat = preg_match("#^[0-9]{5,}$#", $tel);
            $test_motif = preg_match("#(0{5,}|1{5,}|2{5,}|3{5,}|4{5,}|5{5,}|6{5,}|7{5,}|8{5,}|9{5,}|1234{1,}|(01){5,}|(02){5,}|(03){5,}|(04){5,}|(05){5,}|(06){5,}|(07){5,}|(08){5,}|(09){5,})#", $tel);
            if($test_baseformat && !$test_motif){
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
                $err['tel'] = 'Le numéro de téléphone est incorrect.';
            }
        } else {
            $err['pays'] = 'Merci dʼindiquer votre pays de résidence.';
        }
    }

    return [$tel, $pays];
}

function secure_formdata($n){
    return strip_tags($n);
}

function validate_mail($mail){
    return preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $mail);
}

function check_captcha($form){
    $secret_key = '6LezqysUAAAAAKeeCRVonxcTAmfZ-S9ke3_OpcLB';
    $captcha_form = $form['g-recaptcha-response'];
    $remote_ip = $_SERVER['REMOTE_ADDR'];
	
    $api_url = 'https://www.google.com/recaptcha/api/siteverify?secret='.$secret_key.'&response='.$captcha_form.'&remoteip='.$remote_ip;

    $decode = json_decode(file_get_contents($api_url), true);

    return $decode['success'] == true;
}

function mail_line_feed($mail_to){
    // On filtre les serveurs qui remplacent automatiquement le \n par \r\n
    if(!preg_match('#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#', $mail_to))
    { $line_feed = "\r\n"; }
    else
    { $line_feed = "\n";}
    return $line_feed;
}

function send_mail($to, $from, $respond, $subject, $content, $head_pict, $from_name = ''){
    // Définition du passage à la ligne
    $line_feed = mail_line_feed($to);

    //Déclaration des éléments du mail html
    $html_head = '<html><head></head><body style="border: 1px solid #E9E9E9; margin: auto; margin-top: 10px; max-width: 600px"><font face="sans-serif" color="#656363">';
    if($head_pict){
        $html_head .= '<div style="text-align: center; padding-top: 10px;"><img src="'.PROTOCOL.'://'.ROOT_URL.'/images/mail-logo.jpg" alt="logo MyAstro" /></div>';
    }
    $html_head .= '<div style="max-width: 440px; margin: auto; padding-top: 20px; padding-bottom: 20px;">';
    $html_foot = '</div></font><hr style="height: 40px; border: none; margin: 0; background-color: #22424D;" /></body></html>';

    // Création des messages au format texte et au format HTML.
    $content_txt = $content;
    $content_html = nl2br(htmlspecialchars($content, ENT_QUOTES,'UTF-8'));
    $content_html = preg_replace('#\-{10}(.+)\-{10}<br />(.+)\-{40}#sU', '<fieldset style="border: 1px solid #C1C1C1;"><legend><font color="#919191">$1</font></legend>$2</fieldset>', $content_html);
    $content_html = preg_replace('#<br />\-{5,}<br />#', '<hr style="border: 1px dotted #656363;" />', $content_html);
    $content_html = preg_replace('#http://[a-z0-9./-]+#', '<a href="$0">$0</a>', $content_html);
    $content_html = preg_replace('#Code : ([a-z0-9]+)<br />#', '<p style="text-align: center"><font size="5" color="#319F83"><b>$1</b></font></p>', $content_html);
    $content_html = $html_head.$content_html.$html_foot;

    // Création de la frontière (boundary)
    $boundary = '-----='.md5(rand());

    // Ecriture du header de l'e-mail.
    $header = 'From: "'.(isset($from_name) ? $from_name : $from).'" <'.$from.'>'.$line_feed;
    $header.= 'Reply-to: "'.$respond.'" <'.$respond.'>'.$line_feed;
    $header.= 'MIME-Version: 1.0'.$line_feed;
    $header.= 'Content-Type: multipart/alternative;'.$line_feed.' boundary="'.$boundary.'"'.$line_feed;

    // Création du message
    // Ouverture boundary
    $content = $line_feed.'--'.$boundary.$line_feed;
    // Ajout du message au format texte.
    $content.= 'Content-Type: text/plain; charset="utf-8"'.$line_feed;
    $content.= 'Content-Transfer-Encoding: 8bit'.$line_feed;
    $content.= $line_feed.$content_txt.$line_feed;
    // boundary
    $content.= $line_feed.'--'.$boundary.$line_feed;
    // Ajout du message au format HTML.
    $content.= 'Content-Type: text/html; charset="utf-8"'.$line_feed;
    $content.= 'Content-Transfer-Encoding: 8bit'.$line_feed;
    $content.= $line_feed.$content_html.$line_feed;
    // Fermeture boundary
    $content.= $line_feed.'--'.$boundary.'--'.$line_feed;
    $content.= $line_feed.'--'.$boundary.'--'.$line_feed;

    // Envoi de l'e-mail
    return mail($to, $subject, $content, $header);
}

/*
* function removeHTML
* Manipule la chaîne pour la renvoyer sans HTML.
*
* param string : texttovalid
*
* return string
*/
function removeHTML($texttovalid){
    $texttovalid = trim($texttovalid);
    if(strlen($texttovalid)>0){
        $texttovalid = htmlspecialchars(stripslashes($texttovalid));
    }
    return $texttovalid;
}

/**
 * function convertIdAstro
 * Convertis l'idastro dans sa version "code promo raccourci" *
 */
function convertIdAstro($idastro, $toCode = true)
{
    if($toCode){
        return base_convert($idastro, 10, 32);
    } else {
        return base_convert($idastro, 32, 10);
    }
}

/**
 * function getCardNames
 * donne le nom des cartes en fonction du jeu
 */
function getCardNames($jeu, $tirage)
{
    $correspondance = array();
    $description_jeu = $jeu.'jeu.php';
    if (!file_exists($description_jeu)){
        exit("Erreur : Description du jeu de cartes non trouv&eacute;e.");
    } else {
        require $description_jeu;
    }

    for($i=0; $i<count($tirage); $i++){
        $carte = $tirage[$i];
        $tirage[$i] = isset($correspondance[$carte])? $correspondance[$carte] : $carte;
    }

    return $tirage;
}

/**
 * function getCardNames
 * donne le nom des cartes en fonction du jeu
 */
function getPsychicCode($nom)
{
    $nom = strtolower($nom); // en minuscules
    $nom = preg_replace('#[ -]#u', '', $nom); // espaces et tirets
    $nom = preg_replace('#[éèê]#u', 'e', $nom); // accents du e

    return $nom;
}


/*
* function decoder
* Décode en le chaine en utf8 et remplace les retours chariots
*
* param string : texte
*
* return string
*/
function decoder($texte){
  $texte = utf8_decode($texte);
  $texte = str_replace("\r", "\n", $texte);
  $texte = str_replace("'", "\'", $texte);
  return $texte;
}

/*
* function uuid
* Génère un identifiant unique. Utilité ?
*
* return string
*/
function uuid(){

   // The field names refer to RFC 4122 section 4.1.2
   return sprintf('%04x%04x-%04x-%03x4-%04x-%04x%04x%04x',
       mt_rand(0, 65535), mt_rand(0, 65535), // 32 bits for "time_low"
       mt_rand(0, 65535), // 16 bits for "time_mid"
       mt_rand(0, 4095),  // 12 bits before the 0100 of (version) 4 for "time_hi_and_version"
       bindec(substr_replace(sprintf('%016b', mt_rand(0, 65535)), '01', 6, 2)),
           // 8 bits, the last two of which (positions 6 and 7) are 01, for "clk_seq_hi_res"
           // (hence, the 2nd hex digit after the 3rd hyphen can only be 1, 5, 9 or d)
           // 8 bits for "clk_seq_low"
       mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535) // 48 bits for "node"
   );
}

/**
 * function addFormLog
 * Ajoute une ligne de logdans la table
 */
function addFormLog($bdd, $page, $alert, $msg )
{
    $bdd->insert(
        'logs_formulaire',
        array(
            'lgf_page'  => $page,
            'lgf_alert' => $alert,
            'lgf_msg'   => $msg
        )
    );
}

/*
* function get_signe_astro
* Renvoie le signe astro en fonction du jour + mois de naissance
*
* @param string : day
* @param string : month
*
* return string
*/
function get_signe_astro($day, $month)
{
         if(($month ==  1 && $day >= 21) || ($month ==  2 && $day <= 18)){ $signe = "verseau";}
    else if(($month ==  2 && $day >= 19) || ($month ==  3 && $day <= 20)){ $signe = "poissons";}
    else if(($month ==  3 && $day >= 21) || ($month ==  4 && $day <= 20)){ $signe = "belier";}
    else if(($month ==  4 && $day >= 21) || ($month ==  5 && $day <= 21)){ $signe = "taureau";}
    else if(($month ==  5 && $day >= 22) || ($month ==  6 && $day <= 21)){ $signe = "gemeaux";}
    else if(($month ==  6 && $day >= 22) || ($month ==  7 && $day <= 22)){ $signe = "cancer";}
    else if(($month ==  7 && $day >= 23) || ($month ==  8 && $day <= 23)){ $signe = "lion";}
    else if(($month ==  8 && $day >= 24) || ($month ==  9 && $day <= 23)){ $signe = "vierge";}
    else if(($month ==  9 && $day >= 24) || ($month == 10 && $day <= 23)){ $signe = "balance";}
    else if(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)){ $signe = "scorpion";}
    else if(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)){ $signe = "sagittaire";}
    else if(($month == 12 && $day >= 22) || ($month ==  1 && $day <= 20)){ $signe = "capricorne";}

    return $signe;
}

/*
* function get_signe_astro_arabe
* Renvoie le signe astro arabe en fonction du jour + mois de naissance
*
* @param string : day
* @param string : month
*
* return string
*/
function get_signe_astro_arabe($day, $month)
{
    $signe = [];

        if(($month ==  1 && $day >= 21) || ($month ==  2 && $day <= 18)){ $signe = ['nom'=>'la fronde', 'code'=>'fronde'];}
    elseif(($month ==  2 && $day >= 19) || ($month ==  3 && $day <= 20)){ $signe = ['nom'=>'la hache', 'code'=>'hache'];}
    elseif(($month ==  3 && $day >= 21) || ($month ==  4 && $day <= 20)){ $signe = ['nom'=>'le poignard', 'code'=>'poignard'];}
    elseif(($month ==  4 && $day >= 21) || ($month ==  5 && $day <= 21)){ $signe = ['nom'=>'la massue paysanne', 'code'=>'massue'];}
    elseif(($month ==  5 && $day >= 22) || ($month ==  6 && $day <= 21)){ $signe = ['nom'=>'la masse de fer', 'code'=>'masse'];}
    elseif(($month ==  6 && $day >= 22) || ($month ==  7 && $day <= 22)){ $signe = ['nom'=>'le coutelas', 'code'=>'coutelas'];}
    elseif(($month ==  7 && $day >= 23) || ($month ==  8 && $day <= 23)){ $signe = ['nom'=>'lʼépée', 'code'=>'epee'];}
    elseif(($month ==  8 && $day >= 24) || ($month ==  9 && $day <= 23)){ $signe = ['nom'=>'le couteau', 'code'=>'couteau'];}
    elseif(($month ==  9 && $day >= 24) || ($month == 10 && $day <= 23)){ $signe = ['nom'=>'la chaine', 'code'=>'chaine'];}
    elseif(($month == 10 && $day >= 24) || ($month == 11 && $day <= 22)){ $signe = ['nom'=>'le poignard arabe', 'code'=>'poignardarabe'];}
    elseif(($month == 11 && $day >= 23) || ($month == 12 && $day <= 21)){ $signe = ['nom'=>'lʼarc', 'code'=>'arc'];}
    elseif(($month == 12 && $day >= 22) || ($month ==  1 && $day <= 20)){ $signe = ['nom'=>'la lance', 'code'=>'lance'];}

    return $signe;
}

/*
* function get_signe_astro_chinois
* Renvoie le signe astro chinois en fonction de la date de naissance
*
* @param string : day
* @param string : month
* @param string : year
*
* return string
*/
function get_signe_astro_chinois($day, $month, $year)
{
    if($month <= 2){ // Pour les mois de janvier et de février
        // On cherche la date du nouvel an chinois de cette année
        $wanted_year = $year;
        $ref_date = new DateTime('1923-02-15 19:07');
        $work_date = $ref_date;
        $moon_cycle = new DateInterval('P29DT12H44M3S');
        $solstice = ($wanted_year - 1).'1223';
        $c = 0;
        if($wanted_year != $ref_date->format('Y')){
            if($wanted_year < $ref_date->format('Y')){
                do { $work_date->sub($moon_cycle);}
                while($work_date->format('Ymd') >= $solstice);
            }
            do {
                $work_date->add($moon_cycle);
                $compare_to_solstice = $work_date->format('Ymd') < $solstice;
                if(!$compare_to_solstice){
                    $c++;
                }
            } while($compare_to_solstice || !$compare_to_solstice && $c < 2);
        }
        $nouvel_an = $work_date->format('md');
        // Si la date de naissance est antérieure au nouvel an chinois
        if($month.$day < $nouvel_an){
            // on se base sur l'année précédente pour le signe
            $year--;
        }
    }

    $signe = [];

        if($year % 12 ==  0){ $signe = ['nom'=>'le singe', 'code'=>'singe'];}
    elseif($year % 12 ==  1){ $signe = ['nom'=>'le coq', 'code'=>'coq'];}
    elseif($year % 12 ==  2){ $signe = ['nom'=>'le chien', 'code'=>'chien'];}
    elseif($year % 12 ==  3){ $signe = ['nom'=>'le cochon', 'code'=>'cochon'];}
    elseif($year % 12 ==  4){ $signe = ['nom'=>'le rat', 'code'=>'rat'];}
    elseif($year % 12 ==  5){ $signe = ['nom'=>'le boeuf', 'code'=>'boeuf'];}
    elseif($year % 12 ==  6){ $signe = ['nom'=>'le tigre', 'code'=>'tigre'];}
    elseif($year % 12 ==  7){ $signe = ['nom'=>'le lapin', 'code'=>'lapin'];}
    elseif($year % 12 ==  8){ $signe = ['nom'=>'le dragon', 'code'=>'dragon'];}
    elseif($year % 12 ==  9){ $signe = ['nom'=>'le serpent', 'code'=>'serpent'];}
    elseif($year % 12 == 10){ $signe = ['nom'=>'le cheval', 'code'=>'cheval'];}
    elseif($year % 12 == 11){ $signe = ['nom'=>'la chèvre', 'code'=>'chevre'];}

    return $signe;
}

/*
* function checkPhoneNumber
*	Vérifie la véracité d'un numéro de téléphone en fonction du pays d'entrée
*   Doc : http://fr.wikipedia.org/wiki/Num%C3%A9ro_de_t%C3%A9l%C3%A9phone
*
*	@param string : tel
*	@param string : pays ( default = '')
*
*	return array
*/
function checkPhoneNumber($tel, $pays = '')
{
    $formated_phone = '';
    $msg = NULL;
    // supression de tous les caractères non numériques
    $tel = preg_replace("#[^\d]#", "", $tel);
    // ####### SWITCH PAYS #####################################################
    switch ($pays){
        case "FR": // France
        case "MQ": // Martinique
        case "GP": // Guadeloupe
        case "GF": // Guyane Française
        case "RE": // Réunion
        case "YT": // Mayotte
        case "PM": // St Pierre et Miquelon
        case "BL": // Saint Barthelemy
        case "SM": // Saint Marin
        case "WF": // Wallis et Futuna
        case "PF": // Polynésie Française
        case "NC": // Nouvelle Calédonnie
            // ----- Numéro Français -------------------------------------------
            // on exclue les 08
            if(!preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)?0?[12345679]{1}[0-9]{8}$#', $tel)){
                $msg .= 'Numéro de téléphone (FR) incorrect<br />';
            } else {
                if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)0{1}[12345679]{1}[0-9]{8}$#', $tel)){
                    $msg = 'Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays. <small><i>ex : 336xxxxxxxxx </i></small>';
                }
            }
            // Enlève l'indicatif
            $formated_phone = preg_replace("#^(330|5900|5940|2620|5960|2690|6870|6890|5900|5080|6810)(\d{8})$#", "0$2", $tel);
            // Sans 0 ou indicatif avec 9 chiffres, rajouter un 0 au début
            $formated_phone = preg_replace("#^()(\d{9})$#","0$2",$tel);
            $formated_phone = preg_replace("#^(33|590|594|262|596|269|687|689|590|508|681)(\d{8,9})$#", "0$2", $formated_phone);
            break;
            // -----------------------------------------------------------------
        case "CH" : // Suisse
            // ----- Numéro Suisse ---------------------------------------------
            if(!preg_match('#(^0{1}[0-9]{9}$)#', $tel)){ // ex : 0794872254
                if(preg_match('#^(0041|41){1}0{1}[0-9]{9}$#',$tel)){ // ex 410794872254
                    $msg = '(ERR 1) : Numéro de téléphone (CH) incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 4179xxxxxxx</i></small>';
                } else {
                    if(preg_match('#^(0041|41){1}[0-9]{9}$#',$tel)){ // 41794872254
                        unset($msg);
                    } else {
                        $msg = '(ERR 2) : Numéro de téléphone (CH) incorrect<br />';
                    }
                }
            }
            $formated_phone = preg_replace("#^(0041){1}(\d+)#", "41$2", $tel);
            $formated_phone = preg_replace("#^(0){1}(\d+)#", "41$2", $formated_phone);
            break;
            // -----------------------------------------------------------------
        case "CA" : // Canada
            // ----- Numéro Canadien -------------------------------------------
            if(!preg_match('#(^1?[0-9]{10}$)#', $tel)){
                $msg = 'Numéro de téléphone (CA) incorrect<br />';
            }
            if(strlen($tel) == 10){
                $formated_phone = "1".$tel;
            } else {
                $formated_phone = $tel;
            }
            break;
            // -----------------------------------------------------------------
        case "BE": // Belgique
            // ----- Numéro Belge ----------------------------------------------
            switch(strlen($tel)){
                case 9 : // 0ZZCCCCCC
                    if(preg_match("#^0{1}(\d{8})$#",$tel)){
                        $formated_phone = "32".substr($tel,1);
                    } else {
                        $msg = '(ERR 9) Numéro de téléphone (BE) incorrect<br />';
                    }
                    break;
                case 10 :
                    if(preg_match("#^(32){1}(\d{8})$#",$tel)){ // OK : 32 75 84 67 59
                        $formated_phone = $tel;
                    } elseif(preg_match("#^(047|048|049){1}[0-9]{7}$#",$tel)){ // OK GSM : 0475 45 78 98
                        $formated_phone = "32".substr($tel,1);
                    } else {
                        $msg = "(ERR 10) : Numéro de téléphone (BE) incorrect.";
                    }
                    break;
                case 11 :
                    if(preg_match("#^(320){1}(\d{8})$#",$tel)){
                        $msg = "(ERR 11) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 3248xxxxxxx</i></small> ";
                    } elseif(preg_match("#^(32){1}(47|48|49){1}(\d){7}#",$tel)){
                        $formated_phone = $tel;
                    } else {
                        $msg = "(ERR 11) : Numéro de téléphone (BE) incorrect.";
                    }
                    break;
                case 12 :
                    if(preg_match("#^(32){1}(047|048|049){1}\d{7}$#",$tel)){
                        $msg = "(ERR 12) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 3248xxxxxxx</i></small> ";
                    } else {
                        $msg = "(ERR 12) : Numéro de téléphone (BE) incorrect.";
                    }
                    break;
                case 13 :
                case 14 :
                    if(preg_match("#^(00320){1}#",$tel)){
                        $msg = "(ERR 1314) : Numéro de téléphone incorrect. Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays.<small><i> ex : 003248xxxxxxx</i></small> ";
                    }
                    break;
                default :
                    $msg = "(ERR D) : Numéro de téléphone (BE) incorrect.";
                    break;
            }
            break;
            // -----------------------------------------------------------------
        case "LU" : // Luxembourg
            // ----- Numéro Luxembourgeois -------------------------------------
            if(!preg_match('#(^\d{5,6}$)|(^\d{8}$)|(^6\d{6}$)#', $tel)){
                $msg = 'Numéro de téléphone (LUX) incorrect (Merci de ne pas donner l\'indicatif.)<br />';
            }
            $formated_phone = "352".$tel;
            break;
            // -----------------------------------------------------------------
        default :
            // On regarde quand même s'il peut s'agir d'un numéro français
            if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)?0?[12345679]{1}[0-9]{8}$#', $tel)){
                $pays = 'FR';
                if(preg_match('#^(33|590|594|262|596|269|687|689|590|508|681)0{1}[12345679]{1}[0-9]{8}$#', $tel)){
                    $msg = 'Veuillez enlever le 1er zéro du numéro si vous donnez un indicatif pays. <small><i>ex : 336xxxxxxxxx </i></small>';
                } else {
                    // Pas d'indicatif pour les num français
                    $formated_phone = preg_replace("#^(330|5900|5940|2620|5960|2690|6870|6890|5900|5080|6810)(\d{8})$#","0$2",$tel);
                    $formated_phone = preg_replace("#^(33|590|594|262|596|269|687|689|590|508|681)(\d{8,9})$#","0$2",$formated_phone);
                }
            } else {
            // Sinon on traite pas, on save tel quel ( puisqu'on a enlevé les non-digits plus haut )
                $formated_phone = $tel;
            }
            break;
    }
    // ####### FIN SWITCH PAYS #################################################

    return array(
        "error" => $msg,
        "phone"	=> $formated_phone,
        "pays"  => $pays
    );
}

/* On ajouter les indicatifs pays aux numéros FR te DOM-TOM */
function format_number_FR_DOM($tel, $pays){
    if($pays=="FR"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","33$2",$tel);

      }else if($pays=="MQ"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","596$2",$tel);

      }else if($pays=="GP"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","590$2",$tel);

      }else if(($pays=="GF")){

        $tel = preg_replace("#^(0){1}(\d{8,9})#","594$2",$tel);

      }else if(($pays=="RE")||($pays=="YT")){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","262$2",$tel);

      }else if($pays=="PM"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","508$2",$tel);

      }else if(($pays=="BL")||($pays=="SM")){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","590$2",$tel);

      }else if($pays=="WF"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","681$2",$tel);

      }else if($pays=="PF"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","689$2",$tel);

      }else if($pays=="NC"){
        $tel = preg_replace("#^(0){1}(\d{8,9})#","687$2",$tel);
      }

      return $tel;
}
/*
* function getuser_by
* Récupère un ou plusieurs utilisateurs grâce au params en entrée.
* @todo : Rajouter la possibilité d'utiliser différent opérateur ( autre que AND )
*
* @param array  : selector
* @param array  : condition
* @param string : limit
*
* return array / boolean
*/
function getuser_by($selector=array(), $condition = array(),$limit=''){

  $return = array();
  $where = '';

  switch(count($selector)){
    case 0 :
      $select = '*';
    break;
    case 1 :
      $select = $selector['0'];
    break;
    default:
      $select = implode(',',$selector);
    break;
  }
  if(count($condition) > 0){
    foreach($condition as $champ => $value){
      $where .= ' AND '.$champ.' ="'.$value.'"';
    }
  }

  $request = 'SELECT '.$select.' FROM '. TABLE_USERS .' WHERE 1'.$where.' '.$limit;
  $res = mysql_query($request);
  if(!$res || mysql_num_rows($res) < 1){
    return false;
  }
  else{
    while($e = mysql_fetch_array($res)){
      $return[] = $e;
    }
    return $return;
  }
}

/*
* function return_date
* Renvoie le mois français d'une date au format YYYY/MM/JJ
*
* @param string  : date
*
* return string
*/
function return_date($date, $mode ='html')
  {
    $mois = substr($date, 5, 2);
    $jour = substr($date, 8, 2);
    switch($mois){
      case '1':
        $mois = 'janvier';
        break;
      case '2':
        $mois = ($mode == 'html') ? 'f&eacute;vrier' : 'février';
        break;
      case '3':
        $mois = 'mars';
        break;
      case '4':
        $mois = 'avril';
        break;
      case '5':
        $mois = 'mai';
        break;
      case '6':
        $mois = 'juin';
        break;
      case '7':
        $mois = 'juillet';
        break;
      case '8':
        $mois = ($mode == 'html') ? 'ao&ucirc;t' : 'août';
        break;
      case '9':
        $mois = 'septembre';
        break;
      case '10':
        $mois = 'octobre';
        break;
      case '11':
        $mois = 'novembre';
        break;
      case '12':
        $mois = ($mode == 'html') ? 'd&eacute;cembre' : 'décembre';
        break;
    }
    $date = $jour.' '.$mois;
    return $date;
  }

function return_mois_textuel($mois, $mode = "html"){
  switch($mois){
      case '1':
        $mois = 'janvier';
        break;
      case '2':
        $mois = ($mode == 'html') ? 'f&eacute;vrier' : 'février';
        break;
      case '3':
        $mois = 'mars';
        break;
      case '4':
        $mois = 'avril';
        break;
      case '5':
        $mois = 'mai';
        break;
      case '6':
        $mois = 'juin';
        break;
      case '7':
        $mois = 'juillet';
        break;
      case '8':
        $mois = ($mode == 'html') ? 'ao&ucirc;t' : 'août';
        break;
      case '9':
        $mois = 'septembre';
        break;
      case '10':
        $mois = 'octobre';
        break;
      case '11':
        $mois = 'novembre';
        break;
      case '12':
        $mois = ($mode == 'html') ? 'd&eacute;cembre' : 'décembre';
        break;
    }
    return $mois;
}
function prepare( $query, $args ){
  if ( is_null( $query ) )
    return;

  $args = func_get_args();
  array_shift( $args );
  // If args were passed as an array (as in vsprintf), move them up
  if ( isset( $args[0] ) && is_array($args[0]) )
    $args = $args[0];
    $query = str_replace( "'%s'", '%s', $query ); // in case someone mistakenly already singlequoted it
    $query = str_replace( '"%s"', '%s', $query ); // doublequote unquoting
    $query = preg_replace( '|(?<!%)%f|' , '%F', $query ); // Force floats to be locale unaware
    $query = preg_replace( '|(?<!%)%s|', "'%s'", $query ); // quote the strings, avoiding escaped strings like %%s
    array_walk( $args, array( $this, 'escape_by_ref' ) );
  return @vsprintf( $query, $args );
}

/**
 * Return a comma separated string of functions that have been called to get to the current point in code.
 *
 * @link http://core.trac.wordpress.org/ticket/19589
 * @since 3.4.0
 *
 * @param string $ignore_class A class to ignore all function calls within - useful when you want to just give info about the callee
 * @param int $skip_frames A number of stack frames to skip - useful for unwinding back to the source of the issue
 * @param bool $pretty Whether or not you want a comma separated string or raw array returned
 * @return string|array Either a string containing a reversed comma separated trace or an array of individual calls.
 */
function wp_debug_backtrace_summary( $ignore_class = null, $skip_frames = 0, $pretty = true ){
  if ( version_compare( PHP_VERSION, '5.2.5', '>=' ) )
    $trace = debug_backtrace( false );
  else
    $trace = debug_backtrace();

  $caller = array();
  $check_class = ! is_null( $ignore_class );
  $skip_frames++; // skip this function

  foreach ( $trace as $call ){
    if ( $skip_frames > 0 ){
      $skip_frames--;
    } elseif ( isset( $call['class'] ) ){
      if ( $check_class && $ignore_class == $call['class'] )
        continue; // Filter out calls

      $caller[] = "{$call['class']}{$call['type']}{$call['function']}";
    } else {
      if ( in_array( $call['function'], array( 'do_action', 'apply_filters' ) ) ){
        $caller[] = "{$call['function']}('{$call['args'][0]}')";
      } elseif ( in_array( $call['function'], array( 'include', 'include_once', 'require', 'require_once' ) ) ){
        $caller[] = $call['function'] . "('" . str_replace( array( WP_CONTENT_DIR, ABSPATH ) , '', $call['args'][0] ) . "')";
      } else {
        $caller[] = $call['function'];
      }
    }
  }
  if ( $pretty )
    return join( ', ', array_reverse( $caller ) );
  else
    return $caller;
}

function __( $text, $domain = 'default' ){
  return $text;
}

function getSquareAd($show = true)
{
    $support = array('voyance','tarot');
    $randomSupport = array_rand($support);

    switch ($support[$randomSupport]){
        case 'voyance':
            $imgPath = ROOT_PATH . '/images/bannieres/square/voyance/';
            $imgUrl  = '/images/bannieres/square/voyance/';
            $url = 'http://'.ROOT_URL.'/voyance-gratuite';
            break;
        case 'tarot':
            $imgPath = ROOT_PATH . '/images/bannieres/square/tarot/';
            $imgUrl  = '/images/bannieres/square/tarot/';
            $url = 'http://'.ROOT_URL.'/voyance-tarot';
            break;
        default:
            $imgPath = ROOT_PATH . '/images/bannieres/square/voyance/';
            $imgUrl  = '/images/bannieres/square/voyance/';
            $url = 'http://'.ROOT_URL.'/voyance-gratuite';
            break;
    }

    $files = array_diff(scandir($imgPath), array('.','..'));
    shuffle($files);

    if($show){
        echo '<a href="'.$url.'"><img src="'.$imgUrl.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" /></a>';
    } else {
        return array('img' => $files[0], 'url' => $url);
    }
}

function getConsultationPerMinutsAd($show = true){
    $path = ROOT_PATH . '/images/bannieres/consult10/';
    $url  = '/images/bannieres/consult10/';
    $files = array_diff(scandir($path), array('.','..'));
    shuffle($files);

    if($show){
        echo '<img src="'.$url.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" />';
    } else {
        return $files[0];
    }
}

/* Ajout le 20/08/2014 pour que le wigdet voyant de la page /voyance-par-telephone/ renvoi à la page du voyant correspondant*/
function getVoyantScryscraperVPT($show = true){
    $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '';
    if($referer != 'http://'.ROOT_URL.'/voyance-par-telephone-2'){
        $path = ROOT_PATH . '/images/bannieres/voyant-skyscraper/';
        $url  = '/images/bannieres/voyant-skyscraper/';
        $files = array_diff(scandir($path), array('.', '..'));
        shuffle($files);
        $arrayFile = explode("-", $files[0]);

        if($show){
            if($arrayFile[0] != "voyants"){
                echo '<a href="http://'.ROOT_URL.'/voyance-par-telephone-'.$arrayFile[0].'"><img src="'.$url.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" /></a>';
            } else {
                echo '<img src="'.$url.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" />';
            }
        } else {
            return $files[0];
        }
    } else {
        getVoyantScryscraperVTE2();
    }
}

function getVoyantScryscraper($show = true)
{
    if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] != 'http://'.ROOT_URL.'/voyance-par-telephone-2'){
        $path = ROOT_PATH.'/images/bannieres/voyant-skyscraper/';
        $url  = '/images/bannieres/voyant-skyscraper/';
        $files = array_diff(scandir($path), array('.','..'));
        shuffle($files);

        if($show){
            echo '<img src="'.$url.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" />';
        } else {
            return $files[0];
        }
    } else {
      getVoyantScryscraperVTE2();
    }
}

function getVoyantScryscraperVTE2($show = true)
{
    $path = ROOT_PATH . '/images/bannieres/VTE2/';
    $url  = '/images/bannieres/VTE2/';
    $files = array_diff(scandir($path), array('.','..'));
    shuffle($files);

    if($show){
        echo '<img src="'.$url.$files[0].'" alt="'.str_replace('-', ' ', $files[0]).'" />';
    } else {
        return $files[0];
    }
}

function getHoroscopeBlock($type = "jour"){

  switch ($type){
    case 'jour':
      $baseurl = 'http://'.ROOT_URL.'/horoscope-du-jour';
      break;
    case 'semaine':
      $baseurl = 'http://'.ROOT_URL.'/horoscope-de-la-semaine';
      break;
    case 'mois':
      $baseurl = 'http://'.ROOT_URL.'/horoscope-du-mois';
      break;
    case 'amour':
      $baseurl = 'http://'.ROOT_URL.'/horoscope-de-l-amour';
      break;
    case '2016':
      $baseurl = 'http://'.ROOT_URL.'/horoscope-2016';
      break;
    case 'compatibilite-homme' :
      $baseurl = 'http://'.ROOT_URL.'/compatibilite-amoureuse-masculine';
     break;
    case 'compatibilite-femme' :
      $baseurl = 'http://'.ROOT_URL.'/compatibilite-amoureuse-feminine';
     break;
    case 'portrait-homme' :
      $baseurl = 'http://'.ROOT_URL.'/portrait-astrologique-masculin';
     break;
    case 'portrait-femme' :
      $baseurl = 'http://'.ROOT_URL.'/portrait-astrologique-feminin';
     break;
    case 'votre-portrait' :
      $baseurl = 'http://'.ROOT_URL.'/votre-personnalite-astrologique';
     break;
    default:
      $baseurl = 'http://'.ROOT_URL.'/horoscope-du-jour';
      break;
  }

  $content =  '<ul class="posts-in-images clearfix">';
  $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Taureau" title="">
                <a href="'.$baseurl.'-taureau" class="signe-sprite signe-taureau">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="Capricorne" title="">
                <a href="'.$baseurl.'-capricorne" class="signe-sprite signe-capricorne">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="gemeaux" title="">
                <a href="'.$baseurl.'-gemeaux" class="signe-sprite signe-gemeaux">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="verseau" title="">
                <a href="'.$baseurl.'-verseau" class="signe-sprite signe-verseau">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="belier" title="">
                <a href="'.$baseurl.'-belier" class="signe-sprite signe-belier">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="poissons" title="">
                <a href="'.$baseurl.'-poissons" class="signe-sprite signe-poissons">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="scorpion" title="">
                <a href="'.$baseurl.'-scorpion" class="signe-sprite signe-scorpion">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="balance" title="">
                <a href="'.$baseurl.'-balance" class="signe-sprite signe-balance">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="sagittaire" title="">
                <a href="'.$baseurl.'-sagittaire" class="signe-sprite signe-sagittaire">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="lion" title="">
                <a href="'.$baseurl.'-lion" class="signe-sprite signe-lion">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="cancer" title="">
                <a href="'.$baseurl.'-cancer" class="signe-sprite signe-cancer">
                </a>
              </li>';
 $content .= '<li rel="tooltip" data-toggle="tooltip" data-placement="top" data-original-title="vierge" title="">
                <a href="'.$baseurl.'-vierge" class="signe-sprite signe-vierge">
                </a>
              </li>';
  $content .= '</ul>';

  return $content;
}

function getExpertEnLigne()
{
    $content = '<ul class="clearfix experts-handler">';

    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-caroline" class="experts experts-caroline "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-christophe" class="experts experts-christophe "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-cecile" class="experts experts-cecile "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-georges" class="experts experts-georges "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-kathy" class="experts experts-kathy "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-laurent" class="experts experts-laurent "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-linda" class="experts experts-linda "></a></li>';
    $content .= '<li><a href="http://'.ROOT_URL.'/voyance-par-telephone-viktor" class="experts experts-viktor "></a></li>';

    $content .= '</ul>';

    echo $content;
}