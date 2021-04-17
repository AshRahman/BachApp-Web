<?php

require_once"Model/db_config.php";

$uname="";
$err_uname="";


$pass = "";
$err_pass = "";


$hasError = false;

if(isset($_POST["login"])){

    $user_name= $_POST["uname"];

    if (empty($_POST["user_name"])) {
        $err_uname = "Please enter your username";
        $hasError = true;
    }
    elseif (strlen($_POST["user_name"]) < 2) {
        $err_user_name = "Username must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["user_name"], " ")) {
        $err_user_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $user_name=htmlspecialchars($_POST["user_name"]);
    }

    if (empty($_POST["pass"])) {
        $err_pass = "Please enter your password";
        $hasError = true;
    }
    else{
        $pass=htmlspecialchars($_POST["pass"]);
    }

    if(authenticateUser($_POST["uname"],$_POST['pass'])){
        
            session_start();
            $_SESSION["loggedInUser"]=$_POST["uname"];
            header("Location:homepagetenant.php");
        }
    else{
        echo "Invalid username or password";
    }
}
    function authenticateUser($uname,$pass){
        $query="SELECT * from bachelorsignup WHERE username='$uname' and password='$pass'";
        $result=get($query);
        if(count($result)>0){
            
            return true;
        }
        return false;
    }

?>

