<?php

$root = isset($root) && !empty($root) ? $root : '../';

// MyAstro Config + Autoloader
require_once('tools.php');
require_once($root.'lib/Autoloader.php');
require_once($root.'inc/config.php');

Autoloader::register();

// SWIFT 
require ('dependencies/cache_deps.php');
require ('dependencies/mime_deps.php');
require ('dependencies/message_deps.php');
require ('dependencies/transport_deps.php');
