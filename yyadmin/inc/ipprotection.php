<?php

/* 
 * ---\ IP PROTECTION /---
 * 
 * Inclure ce fichier au début des pages
 * dont l'on souhaite limiter l'accès aux
 * adresses IP connues
 * 
 */

$IPs = array(
	'90.80.230.107', // Bureaux 14/12/2015
    '127.0.0.1',
    '::1'
);
$msg = '<body style="background-color:gainsboro; text-align:center; padding-top: 30px; font-family: Arial">
            <h2 style="color: firebrick;">Vous n&rsquo;&ecirc;tes pas autoris&eacute; &agrave; acc&eacute;der &agrave; ce fichier.</h2>
        </body>'
;
if (isset($_SERVER['HTTP_CLIENT_IP'])
    || isset($_SERVER['HTTP_X_FORWARDED_FOR'])
    || !in_array(@$_SERVER['REMOTE_ADDR'], $IPs)
) {
    header('HTTP/1.0 403 Forbidden');
    exit($msg);
}

