<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 08/12/2017
 * Time: 13:34
 */
if(!isset($_COOKIE["PHPSESSID"]))
{
    session_start();
}
//session_unset();
$_SESSION['affiliate_id'] = isset($_GET['tid']) ? $_GET['tid'] : '';
$_SESSION['affiliate_tracker'] = isset($_GET['trk']) ? $_GET['trk'] : '';