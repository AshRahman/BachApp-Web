<?php

require_once"Model/db_config.php";

// session_start();
//     $_SESSION["loggedInUser"]="tk7";

$id="";
$loggedInUser=$_SESSION["user_name"];

$your_name = "";
$err_your_name = "";

$user_name="";
$err_user_name="";

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



function validateEmail($email)
{
    $pos_at = strpos($email, "@");
    $pos_dot = strpos($email, ".", $pos_at + 1);
    if ($pos_at < $pos_dot) {
        return true;
    }
    return false;
}
$query = "SELECT * from landlord where username='$loggedInUser'";
$result = get($query);
foreach($result as $rows){
          $id= $rows["id"];
          $user_name= $rows["username"];
          $your_name= $rows["name"];
          $gender= $rows["gender"];
          $email=$rows["email"];
          $contact_number= $rows["phone"];
}

if(isset($_POST["refreshBtn"])){
$result = get($query);
foreach($result as $rows){
        $id= $rows["id"];
        $user_name= $rows["username"];
        $your_name= $rows["name"];
        $gender= $rows["gender"];
        $email=$rows["email"];
        $contact_number= $rows["phone"];
}
}
if(isset($_POST["saveBtn"])){
if($_SERVER["REQUEST_METHOD"]=="POST")
{
// if(isset($_POST["signup"])){

    $your_name = $_POST["your_name"];
    $user_name= $_POST["user_name"];
    $contact_number = $_POST["contact_number"];



    if(empty($_POST["your_name"])) {
        $err_your_name = "Please enter your first name";
        $hasError = true;
    }
    elseif (strlen($_POST["your_name"]) < 2) {
        $err_your_name = "Name must be more than 2 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["your_name"], " ")) {
        $err_your_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $your_name=htmlspecialchars($_POST["your_name"]);
    }

    if (empty($_POST["user_name"])) {
        $err_user_name = "Please enter your first name";
        $hasError = true;
    }
    elseif (strlen($_POST["user_name"]) < 2) {
        $err_user_name = "Username must be more than 2 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["user_name"], " ")) {
        $err_user_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $user_name=htmlspecialchars($_POST["user_name"]);
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

    
    if(!$hasError)
            {
                echo "Data is updating";
                
                $updateQuery="UPDATE landlord SET username='$user_name',
                 name='$your_name',
                  gender='$gender',
                   email='$email',
                    phone='$contact_number'
                     WHERE id='$id'";

                execute($updateQuery);

                $your_name = "";
                $err_your_name = "";

                $user_name="";
                $err_user_name="";

                $gender = "";
                $err_gender = "";

                $email = "";
                $err_email = "";

                $contact_number = "";
                $err_contact_number = "";
                }
                else{
                    echo "something went wrong";
                }
            }   
                
              
            
        }
           
     ?>

