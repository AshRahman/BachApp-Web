<?php
/*session_start();
if(!isset($_SESSION["logedin"])){
    header("Location:rentersignup.php");
}*/
require_once"Model/db_config.php";

$user_name="";
$err_user_name="";

$email="";
$err_email="";

$contact_number = "";
$err_contact_number = "";

$floor="";
$err_floor="";

$flat_type="";
$err_flat_type="";

$gender="";
$err_gender="";

$rent="";
$err_rent="";

$address="";
$err_address="";

$img="";
$err_img="";

$hasError=false;


function validateEmail($email){
    $pos_at=strpos($email,"@");
    $pos_dot=strpos($email,".",$pos_at+1);
    if($pos_at<$pos_dot){
        return true;
    }
    return false;
}
//echo $_SESSION["loggedinuser"]."<br>"; 



if(isset($_POST["add_property"])){

    $user_name= $_POST["user_name"];
    $contact_number = $_POST["contact_number"];
    $address=$_POST["address"];

    
    if (empty($user_name)) {
        $err_user_name = "Please enter your first name";
        $hasError = true;
    }
    elseif (strlen($_POST["user_name"]) < 4) {
        $err_user_name = "First Name must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["user_name"], " ")) {
        $err_user_name = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $user_name=htmlspecialchars($_POST["user_name"]);
    }

    if(empty($_POST["email"])){
        $err_email="Email Required";
        $hasError=true;
    }
    elseif(!validateEmail($_POST["email"])){
        $err_email="Insert a valid email";
        $hasError=true;
    }
    else{
        $email=htmlspecialchars($_POST["email"]);
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

    if(empty($_POST["floor"])){
        $err_floor="Please fill this field";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["floor"])){
        $err_floor="Only Numeric values";
        $hasError=true;
    }
    else{
        $floor=$_POST["floor"];
    }

    if(!isset($_POST["flat_type"])){
        $err_flat_type="Please select a flat type";
        $hasError=true;
    }
    else{
        $flat_type=$_POST["flat_type"];
    }

    if(!isset($_POST["gender"])){
        $err_gender="Gender must be selected";
        $hasError=true;
    }
    else{
        $gender=$_POST["gender"];
    }

    if(empty($_POST["rent"])){
        $err_rent="Please fill this field";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["rent"])){
        $err_rent="Only Numeric values";
        $hasError=true;
    }
    else{
        $rent=$_POST["rent"];
    }

    if(empty($_POST["address"])){
        $err_address="Please write your address";
        $hasError=true;
    }
    else{
        $address=$_POST["address"];
    }

    if(empty($_POST["img"])){
        $err_img="Please write your address";
        $hasError=true;
    }
    else{
        $img=$_POST["img"];
    }

    //if($hasError===false){
    //    header("Location:review.php");}
    
    if($hasError === false)
            {
                echo "'$user_name','$email','$contact_number','$floor','$flat_type','$gender','$rent','$address','$address','$img'";
                $query="INSERT INTO `property`(`username`, `email`, `phone`, `floor`, `flat`, `gender`, `rent`, `address`, `image`) VALUES ('$user_name','$email','$contact_number','$floor','$flat_type','$gender','$rent','$address','$img')";
                //$query="insert into property (username,email,phone,floor,flat,gender,rent,address,image) values ('$user_name','$email','$contact_number','$floor','$flat_type','$gender','$rent','$address','$address','$img')";
                execute($query);
                
            }
            else{
                echo "WRONG";
            }

   
}
//<div class="header"><span style="text-align:center my-font"></span>Apartment Finder</div>
 //       <div class="left-menu">
//<div class="add-div">
//<ul>
//<li class="plain-bullet my-font"><a href="">Home</a></li>
//<li class="plain-bullet my-font"><a href="card.php">Apartments</a></li>
//<li class="plain-bullet my-font"><a href="review.php">Review</a></li>
//<li class="plain-bullet my-font"><a href="signin.php">Logout</a></li>
//</ul>
//</div>

?>