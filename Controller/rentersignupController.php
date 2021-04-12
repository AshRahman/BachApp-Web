<?php

require_once"Model/db_config.php";

$name = "";
$err_name = "";

$user_name="";
$err_user_name="";


$pass = "";
$confirm_pass = "";
$err_pass = "";
$err_confirm_pass = "";

$gender = "";
$err_gender = "";

$email = "";
$err_email = "";

$contact_number = "";
$err_contact_number = "";
//$err_contn = "";

// $dob = "";
// $err_dob = "";

$hasError = false;



function validatePassword($pass)
{
    $hasUpper = false;
    $hasLower = false;
    for ($i = 0; $i < strlen($pass); $i++) {
        if (ctype_upper($pass[$i])) {
            $hasUpper = true;
        } else {
            $hasUpper = $hasUpper;
        }
        if (ctype_lower($pass[$i])) {
            $hasLower = true;
        } else {
            $hasLower = $hasLower;
        }
    }
    if ($hasLower == false || $hasUpper == false) {
        return false;
    } else {
        return true;
    }
}


function validateEmail($email)
{
    $pos_at = strpos($email, "@");
    $pos_dot = strpos($email, ".", $pos_at + 1);
    if ($pos_at < $pos_dot) {
        return true;
    }
    return false;
}



if(isset($_POST["signup"])){

    $name = $_POST["name"];
    $user_name= $_POST["user_name"];
    $contact_number = $_POST["contact_number"];



    if(empty($_POST["name"])) {
        $err_name = "Please enter your first name";
        $hasError = true;
    }
    elseif (strlen($_POST["name"]) < 2) {
        $err_name = "Name must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["name"], " ")) {
        $err_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $name=htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["user_name"])) {
        $err_user_name = "Please enter your username";
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

    if (empty($_POST["confirm_pass"])) {
        $err_pass = "Please enter confirm password";
        $hasError = true;
    }
    else{
        $confirm_pass=htmlspecialchars($_POST["confirm_pass"]);
    }




    if (!empty($_POST["pass"]) && !empty($_POST["confirm_pass"])) {
        if (!validatePassword($_POST["pass"])) {
            $err_pass = "Password must contain 1 upper and 1 lower case letter";
            $hasError = true;
        } 
        elseif (strlen($_POST["pass"]) < 2) {
            $err_pass = "Password must be atleast 8 characters long";
            $hasError = true;
        } 
        elseif (strpos($_POST["pass"], " ")) {
            $err_pass = "Whitespace is not allowed";
            $hasError = true;
        } 
        elseif ($_POST["confirm_pass"] !== $_POST["pass"]) {
            $err_confirm_pass = "Password does not match";
            $hasError = true;
        } 
        else {
            $pass = $_POST["pass"];
        }
    }


    if (!isset($_POST["gender"])) {
        $err_gender = "Gender must be selected";
        $hasError = true;
    } 
    else {
        $gender = $_POST["gender"];
    }

    if (empty($_POST["email"])) {
        $err_email = "Email Required";
        $hasError = true;
    }
    elseif(!strpos($_POST["email"],"@")){
        $err_email="Add @";
        $has_error=true;

    }
    elseif (!validateEmail($_POST["email"])) {
        $err_email = "Insert a valid email";
        $hasError = true;
    }
    else {
        $email = htmlspecialchars($_POST["email"]);
    }


    if (empty($_POST["contact_number"])) {
        $err_contact_number = "Please fill this field";
        $hasError = true;
    } 
    elseif (!is_numeric($_POST["contact_number"])) {
        //$err_contn = "This field requires only numeric values";
        $err_contact_number = "This field requires only numeric values";
        $hasError = true;
    }
    else{
        $contact_number=htmlspecialchars($_POST["contact_number"]);
    }

    /*if (!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])) {
        $err_dob = "Date Of Birth Required";
        $hasError = true;
    } 
    else {
        $dob = $_POST["day"] . "-" . $_POST["month"] . "-" . $_POST["year"];
    }

    /*if ($hasError === false) {
        //header("Location:http://localhost/BachApp-Web/renteradvertisement.php");
        insertUser($user_name,$name,$pass,$gender,$email,$contact_number);
    }*/
    
    if($hasError === false)
            {
               
                $query="INSERT INTO `landlord`(`username`, `name`, `password`, `gender`, `email`, `phone`) VALUES ('$user_name','$name','$pass','$gender','$email','$contact_number')";
                //$query="insert into property (username,email,phone,floor,flat,gender,rent,address,image) values ('$user_name','$email','$contact_number','$floor','$flat_type','$gender','$rent','$address','$address','$img')";
                execute($query);
                
                
            }
            else{
                echo "WRONG";
            }
}

?>

