<?
// Si create = 1 c'est qu'on a déjà essayé de créer le cookie
if($_GET["create"] == 1)
{
     // Si le cookie n'est pas crée, c'est que le navigateur client ne les accepte pas
     if(empty($_COOKIE["test"]))
     {
          echo "Vous n'acceptez pas les cookies";
          exit();
     }
     else
     {
          echo "Vous acceptez les cookies";
     }
}

// Si create != 1, on essai de créer le cookie
else
{
     setcookie("test","ok");
     // faire appel a la meme page
    // header("Location: cookie.php?create=1");
	echo "ok";
}



?>

<?php
if(function_exists('fsockopen')) {
echo "fsockopen existe";
}
else {
echo "fsockopen n'existe pas";
}
?>

<?php

// Show all information, defaults to INFO_ALL
phpinfo();

// Show just the module information.
// phpinfo(8) yields identical results.
phpinfo(INFO_MODULES);

?>



