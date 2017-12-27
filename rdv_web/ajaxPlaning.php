<?php



header('Content-type: text/html');

// Include Here to avoid path problems
include(realpath('../include/tools.php'));


if(isset($_POST) && $_POST['jour'] != null){

    require_once(realpath('planning.php'));

} else {
    die('No data transmitted');
}
