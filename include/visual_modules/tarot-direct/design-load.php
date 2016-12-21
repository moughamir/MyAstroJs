<?php
// Paramètres design
$cards_dir = 'tarot/cartes/original-grand/';
$pict_path = 'images_landing/tarot-direct/';
$css = 'css/tarot-direct.css';

$j = date('j');
$m = date('n');
if($m == 12 && $j <= 25){ // Design Noël
    $pict_path = 'images_landing/tarot-direct-noel/';
    $css = 'css/tarot-direct-noel.css';
} elseif($m == 1 || $m == 12) { // Design Nouvel an
    $pict_path = 'images_landing/tarot-direct-nouvel-an/';
    $css = 'css/tarot-direct-nouvel-an.css';
}