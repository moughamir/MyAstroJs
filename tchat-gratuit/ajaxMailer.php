<?php
include('../include/Lib_handler.php');

$phone  = $_POST['phone'];
$data   = $_POST['data'];
$objet  = $_POST['objet']; /*valeur qui va servir à différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat */
$data   = unserialize($data);
$gender = ($data['user']['sexe'] == 'M') ? 'male' : 'female' ;
$pays   = (in_array($data['user']['pays'],array("MQ","GP","GF","YT","PM","BL","SM","WF","PF","NC","RE"))) ? 'DOMTOM' : $data['user']['pays'] ;
$tarots = array(
    1 => 'Le bateleur',
    2 => 'Le charlot',
    3 => 'L\'empereur',
    4 => 'La force',
    5 => 'L\'imperatrice',
    6 => 'La roue de la fortune',
    7 => 'Le soleil',
    8 => 'La justice',
    9 => 'L\'Amoureux',
    10 => 'Le Monde',
    11 => 'Le Fou',
    12 => 'Tempérance'
);
$cartes = array();
foreach($data['cartes'] as $c){
    $cartes[] = $tarots[substr($c,0,-4)];
}

/****************************PAGE*********************************/
$page = $data['user']['page'];
/***************************SUPPORT*******************************/
$support = "TCHAT";
/*****PAGES:ADWORDS/FACEBOOK/ REF NAT/AFFIL1/AFFIL2/AFFILBASE******/
$adwords           = "adwords";
$facebook          = "facebook";
$facebook_com      = "facebook-com";
$instagram_com     = "instagram-com";
$affil1            = "affil1";
$affil2            = "affil2";
$affilbase         = "affilbase";
$affilvps          = "affilvps";
$taboola           = "taboola";
$weedoit           = "weedoit";
$voyants_affil1    = array("Jean","Marie");
$voyants_affil2    = array("Marc","Aline");
$voyants_affilbase = array("Pierre","Laura");
/****************AFFILIATION --> SOURCE*****************************/
$source_affil = "";
$voyant       = "";
$rand         = 0;
$affiliation  = $data['user']['affiliation'];
if($affiliation == $affil1){
    $source_affil = "AFFIL 1 SWARMIZ";
    $rand         = array_rand($voyants_affil1);
    $voyant       = $voyants_affil1[$rand];
} else if($affiliation == $affil2){
    $source_affil = "AFFIL 2 REGIE ASTRO";
    $rand         = array_rand($voyants_affil2);
    $voyant       = $voyants_affil2[$rand];
} else if($affiliation == $affilbase){
    $source_affil = "AFFIL BASE";
    $rand         = array_rand($voyants_affilbase);
    $voyant       = $voyants_affilbase[$rand];
} else if($affiliation == $affilvps){
    $source_affil = "AFFIL VPS";
} else if($affiliation == $adwords){
    $source_affil = "ADWORDS";
} else if($affiliation == $facebook){
    $source_affil = "FACEBOOK_ADDS";
} else if($affiliation == $facebook_com){
    $source_affil = "FACEBOOK";
} else if($affiliation == $instagram_com){
    $source_affil = "INSTAGRAM";
} else if($affiliation == $taboola){
    $source_affil = "TABOOLA";
} else if($affiliation == $weedoit){
$source_affil = "WEEDOIT";
} else {
    $source_affil = "Naturel";
}
/******************CONTENU DU MAIL  *************************************************/
$content = '
    <table>
        <tr>
            <td>ID Astro : </td>
            <td>'.base_convert($data['user']['ID'], 10,32).'</td>
        </tr>
        <tr>
            <td>Prénom : </td>
            <td>'.$data['user']['name'].'</td>
        </tr>
        <tr>
            <td>Téléphone : </td>
            <td>'.$phone.'</td>
        </tr>';

if(isset($pays) && !empty($pays)){
    $content .= '
        <tr>
            <td>Pays : </td>
            <td>'.$pays.'</td>
        </tr>';
}

$content .= '
        <tr>
            <td>Email : </td>
            <td>'.$data['user']['email'].'</td>
        </tr>
        <tr>
            <td>Site : </td>
            <td> MyAstro</td>
        </tr>
        <tr>
            <td>Source : </td>
            <td>'.$source_affil.'</td>
        </tr>
        <tr>
            <td>Page : </td>
            <td>'.$page.'</td>
        </tr>';

if(isset($_SESSION['gclid'])){
    $content .= '
        <tr>
            <td>Gclid : </td>
            <td>'.$_SESSION['gclid'].'</td>
        </tr>';
}

$content .= '
        <tr>
            <td>Support : </td>
            <td>'.$support.'</td>
        </tr>';

if($data['user']['support'] == "tarot"){
    $content  .= '
        <tr>
            <td>Tirage des cartes : </td>
            <td>'.implode(', ', $cartes).' </td>
        </tr>';
}

$content .= '
        <tr>
            <td colspan="2">
                A discuté sur le chat avec <b>'.$_POST['voyant'].'</b>.
            </td>
        </tr>
    </table>';

/***************************ENVOI DU MAIL**************************************/
$transport = Swift_SmtpTransport::newInstance('localhost', 25)
    ->setUsername('postmaster@myastro.fr')
    ->setPassword('fYJAWB2RqK9fJ');

$mailer = Swift_Mailer::newInstance($transport);

$message = Swift_Message::newInstance($transport);
// Pour différencier les demandes via le formulaire hors Tchat du formulaire à la fin tchat, on peut mettre $objet dans l'objet du mail
$message
    ->setSubject('[MYASTRO - '.$support.'] - '.$data['user']['name'].' - '.$data['user']['ID'])
    ->setFrom(array('contact@myastro.fr' => 'Myastro - Automatique'))
    ->setTo(array(
        'standard.kgcom@gmail.com' 	=> 'Standard KgCOM',
        'thierno.kgcom@gmail.com' 	=> 'Equipe développement KgCOM'
    ))
    ->setBody($content,'text/html');

try {
    $result = $mailer->send($message);
} catch(Exception $e){
    die(var_dump($e));
}

die('ok');
