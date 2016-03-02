<?php

// Include config file
include('config.php');

// Include database functions
include('db.php');

// Include utility functions
include('utility.php');

// Define curernt page
define('CURRENT_PAGE', pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME));

// Define host url
$url  = empty($_SERVER["HTTPS"]) ? "http://" : "https://";
$url .= $_SERVER["HTTP_HOST"];
define('BASE_URL', $url);


// var_dump(
//     $_SERVER['REQUEST_URI'], 
//     basename(__FILE__), 
//     __FILE__, 
//     dirname(__FILE__)."/img/", 
//     realpath(__FILE__),
//     parse_url($_SERVER['REQUEST_URI']),
//     $url.$_SERVER["SCRIPT_NAME"],
//     createUri($url.$_SERVER["SCRIPT_NAME"], "../img/")
// );
//exit;
unset($url);