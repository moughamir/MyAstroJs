<?php
/**
 * Created by PhpStorm.
 * User: sanadi
 * Date: 10/08/17
 * Time: 04:14 م
 */


$kgestion = new APIKGestion;

if (isset($_POST['jour']) && isset($_POST['periode'])) {

    $vue = $kgestion->getplanningSelection($_POST['jour'],$_POST['periode']);

    echo $vue;

} else {

    $vue = $kgestion->getplanningSelection();

}