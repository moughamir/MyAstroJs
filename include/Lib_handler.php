<?php 
// MyAstro Config + Autoloader
require_once('/var/www/myastro/www/include/tools.php');
require_once('/var/www/myastro/www/lib/Autoloader.php');
require_once('/var/www/myastro/www/inc/config.php');

Autoloader::register();

// SWIFT 
require ('/var/www/myastro/www/include/dependencies/cache_deps.php');
require ('/var/www/myastro/www/include/dependencies/mime_deps.php');
require ('/var/www/myastro/www/include/dependencies/message_deps.php');
require ('/var/www/myastro/www/include/dependencies/transport_deps.php');
