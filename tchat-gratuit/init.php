<?php
/** 
 * ----------------------------
 * --   tchat-gratuit/init   --
 * ----------------------------
 * 
 * Created on : 31 mai 2016
 * Author     : Laurène Dourdin <2aurene@gmail.com>
 */

session_start();

$root = isset($root) && !empty($root) ? $root : '../';
$jeu = isset($cards_dir) && !empty($cards_dir) ? $cards_dir : 'tarot/cartes/original/';

// Chargement des librairies
include($root.'include/Lib_handler.php');

// Chargement des données
$draw = $_SESSION['cards'];
$include_form_dri = isset($include_form_dri)? $include_form_dri : true;
$user = array(
    'ID'               => $_SESSION['user_id'],
    'code'             => base_convert($_SESSION['user_id'], 10, 32),
    'firstname'        => $_SESSION['firstname'],
    'email'            => $_SESSION['email'],
    'phone'            => $_SESSION['phone'],
    'gender'           => ($_SESSION['sexe'] == 'homme') ? 'M' : 'F',
    'spouse_firstname' => $_SESSION['firstnameJoint'],
    'country'          => $_SESSION['pays'],
    'birthdate'        => $_SESSION['birthdate'],
    'spouse_birthdate' => $_SESSION['birthdateJoint']
);
$tracking = array(
    'question'      => $_SESSION['question'],
    'cards'         => getCardNames($jeu, $draw),
    'formurl'       => $_SESSION['source'],
    'source'        => $_SESSION['affiliation'],
    'theme'         => $_SESSION['support'],
    'page'          => $_SESSION['page'],
    'psychic'       => $_SESSION['voyant'],
    'psychic_group' => $_SESSION['groupe_voyants']
);

/* DONNÉES TEST *
$draw = ['1.png', '2.png', '3.png', '4.png', '5.png'];
$user = array(
    'ID'               => 410728,
    'code'             => convertIdAstro(410728),
    'firstname'        => 'Yolande',
    'email'            => '2aurene@gmail.com',
    'phone'            => '0102030405',
    'gender'           => 'F',
    'spouse_firstname' => 'Christian',
    'country'          => 'FR',
    'birthdate'        => '04/09/1978',
    'spouse_birthdate' => '28/11/1969'
);
$tracking = array(
    'question'      => 'question_2',
    'cards'         => getCardNames($jeu, $draw),
    'formurl'       => 'tarot-direct-rc-to',
    'source'        => 'reflex cache',
    'theme'         => 'tarot',
    'page'          => 'http://www.myasto.fr/tarot-direct-rc-to',
    'psychic'       => 'Sonia',
    'psychic_group' => ''
);
*/

// Création du Tchat
$testmode = ($_SERVER['REMOTE_ADDR'] == '90.80.230.107');

$tchat = new TchatGratuit\Tchat(new Bdd\Bdd(DBLOGIN, DBPASS, DBNAME, DBHOST), $user, $tracking, $testmode, $include_form_dri);
$tchat->process();