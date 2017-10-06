<?php
// Paramètres design
$cards_dir = 'tarot/cartes/original-grand/';

$styles = array(
    'default' => [
        'css' => 'css/tarot-direct.css',
        'dir' => 'images_landing/tarot-direct/'
    ],
    'noel' => [
        'css' => 'css/tarot-direct-noel.css',
        'dir' => 'images_landing/tarot-direct-noel/'
    ],
    'nouvel-an' => [
        'css' => 'css/tarot-direct-nouvel-an.css',
        'dir' => 'images_landing/tarot-direct-nouvel-an/'
    ],
    'amour' => [
        'css' => 'css/tarot-direct-amour.css',
        'dir' => 'images_landing/tarot-direct-amour/'
    ],
    'rentree-17' => [
        'css' => 'css/tarot-direct-rentree.css',
        'dir' => 'images_landing/tarot-direct-rentree/'
    ],
);

$j = date('j');
$m = date('n');

$force_design = isset($_GET['css']);
if($force_design && isset($styles[$_GET['css']])){
    $select_style = $_GET['css'];
} else {
    if($m == 12 && $j <= 25){ // Du 1er au 25 décembre inclus
        $select_style = 'noel';
    } elseif($m == 1 || $m == 12) { // Le reste du mois de décembre et le mois de janvier
        $select_style = 'nouvel-an';
    } elseif($m == 2 && $j >= 6 && $j <= 19 ){ // Du 6 au 19 février inclus
        $select_style = 'amour';
    } else { // Par défaut
        $select_style = 'default';
    }
}
//if(($_SERVER['REQUEST_URI'] == '/tarot-direct-rentree.php' || $_SERVER['REQUEST_URI'] == '/tarot-direct-rentree') || ($_SERVER['REQUEST_URI'] == '/tarot-direct-rentree-merci.php' || $_SERVER['REQUEST_URI'] == '/tarot-direct-rentree-merci')){
if(strpos($_SERVER['REQUEST_URI'],'/tarot-direct-rentree') !== false){

    $select_style = 'rentree-17';

}


$pict_path = $styles[$select_style]['dir'];
$css = $styles[$select_style]['css'];