<?php

spl_autoload_register(function ($class_name) {
    require_once "models/".$class_name . '.php';
});


$url =  $_GET["url"];

$parts = explode("/",$url);


require_once("helpers.php");

//ROUTING
    $page = $parts[0];
    
    switch ($page) {
        case "login":
            require_once("controllers/LoginController.php");
            break;
        case "register":
            require_once("controllers/RegisterController.php");
            break;
        default:
            echo "HOME";
    }

?>
