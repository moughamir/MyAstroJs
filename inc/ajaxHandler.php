<?php
/**
 * Traitement des formulaires des landings :
 * point d'entrée des requêtes Ajax, redirige vers le script de traitement spécifique (champs method)
 * 
 * 23/02/2016
 */
header('Content-type: text/json');

// Include Here to avoid path problems
include(realpath('../geoiploc.php'));
include(realpath('../include/tools.php'));

$param = array();
// On récupère les compteurs et on le stock. On fera l'update après être certain d'avoir validé le formulaire.
$compteur = new compteur();
$param['compteur'] = $compteur->get();

if(isset($_POST) && $_POST['data'] != null){
    foreach(explode('&',urldecode($_POST['data'])) as $split) {
        $split_e = explode('=',$split);
        if (substr($split_e[0],-2) == '[]'){
            if (array_key_exists(substr($split_e[0],0,-2),$param) ) {
                $param[substr($split_e[0],0,-2)][] = $split_e[1];
            } else {
                $param[substr($split_e[0],0,-2)] = array($split_e[1]);
            }
        } else {
            $param[$split_e[0]] = $split_e[1];
        }
    }

    switch($param['method']){
        case 'tarot-landing' :
            require_once(realpath('../include/validation/tarot-landing.php'));
            break;
        case 'voyance-landing' :
            require_once(realpath('../include/validation/voyance-landing.php'));
            break;
        case 'voyance-gratuite-2' :
            require_once(realpath('../include/validation/voyance-gratuite-2.php'));
            break;
        case 'voyance-gratuite-6' :
            require_once(realpath('../include/validation/voyance-gratuite-6.php'));
            break;
        case 'voyance-tarot-gratuit' :
            require_once(realpath('../include/validation/voyance-tarot-gratuit.php'));
            break;
        case 'voyance-tarot-gratuit-2' :
            require_once(realpath('../include/validation/voyance-tarot-gratuit-2.php'));
            break;
        case 'form-widget' :
            require_once(realpath('../include/validation/form-widget.php'));
            break;
        case 'form-widget-2' :
            require_once(realpath('../include/validation/form-widget-2.php'));
            break;
        case 'affil-mini' :
            require_once(realpath('../include/validation/affil-mini.php'));
            break;
        case 'affil-maxi' :
            require_once(realpath('../include/validation/affil-maxi.php'));
            break;
        case 'telnum-save' :
            require_once(realpath('../include/validation/telnum-save.php'));
            break;
        case 'signe-astro-arabe' :
            require_once(realpath('../include/validation/signe-astro-arabe.php'));
            break;
        case 'signe-astro-chinois' :
            require_once(realpath('../include/validation/signe-astro-chinois.php'));
            break;
        case 'general-suscribe' :
            require_once(realpath('../include/validation/general-suscribe.php'));
            break;
        case 'client_web' :
            require_once(realpath('../rdv_web/client_web.php'));
            break;
        case 'consultation_web' :
            require_once(realpath('../rdv_web/consultation_web.php'));
            break;
        default :
            die(json_encode('No method transmitted'));
            break;
    }

/* ========================================================================== *
 *                                 REDIRECTION                                *
 * ========================================================================== */

    if(empty($err)){
        $dri = (isset($param['dri'])) ? $param['dri'] : false;
        $dri2 = (isset($param['dri2'])) ? $param['dri2'] : 'merci-voyance';

        if ($dri) {
            if($dri == "tchat"){
                if ( time() > strtotime(date('Y-m-d 09:00:00')) 
                    & time() < strtotime(date('Y-m-d 23:59:59'))
                    && !isset($_COOKIE['tchat'] ))
                {
                    $redirect_url = 'tchat';
                } else {
                    $redirect_url = $dri2;
                }
            } else {
                $redirect_url = $dri;
            }

        } else {
            $redirect_url = $dri2;
        }

        //$redirect_url = 'http://'.ROOT_URL.'/'.$redirect_url;
        $redirect_url = 'http://'.ROOT_URL.'/'.$redirect_url;

        die(json_encode(array('url' => $redirect_url)));

    } else { // Fin si ERREUR
        die(json_encode($err));
    }
} else {
    die('No data transmitted');
}
