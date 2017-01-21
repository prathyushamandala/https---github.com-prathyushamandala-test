<?php require_once("config.php");
global $config, $con;

// remove all session variables
session_unset(); 

// destroy the session 
session_destroy(); 
header("Location: ".$config['LIVE_URL']);
?>