<?php
/*
 * DB info
 * */
$host = "localhost";
$user = "root";
$pass = "";
$name = "myastro";
//
$db = new mysqli($host, $user, $pass, $name);
if ($db->connect_error) {
    echo("<script>console.log('PHP: Connect failed " . $db->connect_error . "');</script>");
}
//
$cards = [];

$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$pays = mysqli_real_escape_string($db, $_POST['pays']);
$cards = mysqli_real_escape_string($db, $_POST['cards']);

$query = "INSERT INTO landing (prenom, email, pays, cards) VALUES ('$name', '$email', '$pays', '$cards')";
//
if (!mysqli_query($db, $query)) {
    die('Error: ' . mysqli_error($db));
}

/**
 * Created by Mohamed Moughamir.
 *
 * Date: 24/11/2016
 * Time: 10:13
 * Just a Demo for test porpuse
 */
