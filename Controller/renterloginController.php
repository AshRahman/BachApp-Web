<?php

require_once"Model/db_config.php";

$sign_in_user_name="";
$err_sign_in_user_name="";


$sign_in_pass = "";
$err_sign_in_pass = "";


$hasError = false;

if(isset($_POST["login"])){

    $sign_in_user_name= $_POST["log_in_user_name"];

    if (empty($_POST["log_in_user_name"])) {
        $err_sign_in_user_name = "Please enter your username";
        $hasError = true;
    }
    elseif (strlen($_POST["log_in_user_name"]) < 2) {
        $err_sign_in_user_name = "Username must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["log_in_user_name"], " ")) {
        $err_sign_in_user_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $sign_in_user_name=htmlspecialchars($_POST["log_in_user_name"]);
    }

    if (empty($_POST["log_in_pass"])) {
        $err_sign_in_pass = "Please enter your password";
        $hasError = true;
    }
    else{
        $sign_in_pass=htmlspecialchars($_POST["log_in_pass"]);
    }

    if(authenticateUser($_POST["log_in_user_name"],$_POST['log_in_pass'])){
        header("Location:homepagelandlord.php");
            session_start();
            $_SESSION["loggedInUser"]=$_POST["log_in_user_name"];
            header("Location:homelandlord.php");
        }
    else{
        echo "Invalid username or password";
    }
}
    function authenticateUser($sign_in_user_name,$sign_in_pass){
        $query="SELECT * from landlord WHERE username='$sign_in_user_name' and password='$sign_in_pass'";
        $result=get($query);
        if(count($result)>0){

            return true;
        }
        return false;
    }

?>

