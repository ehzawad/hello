<?php
// echo "here at login controller";

$action = "index"; //default action
if(count($parts) > 1 ){
    $action = $parts[1];  //if action exists
}
    
switch ($action) {
    case "register":
        register();
        break;

    case "try-register":
        tryRegister();
        break;
    case "attempt":
        loginAttempt();
        break;
    default:
        index();
}

function index(){
    require_once("views/login_index.php");
}

function register(){
    require_once("views/register_index.php");
}

function tryRegister(){
            //Create Example
        $user = new User();
        $user->data["email"] = $_POST["email"];
        $user->data["name"] = $_POST["name"];
        
        $user->setPassword($_POST["pass"]);
        $user->save();
        
        echo "Successfully registered";
}

function loginAttempt(){
    echo "Attempted";

    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $user = User::find($email,"email");

    $success = $user->verifyPassword($pass);

    if($success){
        echo "Logged in, Welcome";
    }
    else {
        echo "password wrng";
    }
    //Attempted
}









?>