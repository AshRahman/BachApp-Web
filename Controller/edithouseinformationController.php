<?php
       
       include "Model/db_config.php";
    //    session_start();
    //    $_SESSION["loggedInUser"]="Galactico";

        $id="";
        $loggedInUser=$_SESSION["user_name"];

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
       
        $hasError = false;

        function validateEmail($email){
            $pos_at=strpos($email,"@");
            $pos_dot=strpos($email,".",$pos_at+1);
            if($pos_at<$pos_dot){
                return true;
            }
            return false;
        }

        $query = "SELECT * from property where username='$loggedInUser'";
        $result = get($query);
        foreach($result as $rows){
                  $id= $rows["id"];
                  $user_name= $rows["username"];
                  $email= $rows["email"];
                  $contact_number= $rows["phone"];
                  $floor= $rows["floor"];
                  $flat_type=$rows["flat"];
                  $gender= $rows["gender"];
                  $rent= $rows["rent"];
                  $address= $rows["address"];
                  $img= $rows["image"];
        }

        if(isset($_POST["refreshBtn"])){
        $result = get($query);
        foreach($result as $rows){
            $id= $rows["id"];
            $user_name= $rows["username"];
            $email= $rows["email"];
            $contact_number= $rows["phone"];
            $floor= $rows["floor"];
            $flat_type=$rows["flat"];
            $gender= $rows["gender"];
            $rent= $rows["rent"];
            $address= $rows["address"];
            $img= $rows["image"];
        }
    }
if(isset($_POST["saveBtn"])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {

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

            if(!$hasError)
            {
                echo "Data is updating";
                
                $updateQuery="UPDATE property 
                SET username='$user_name',
                email='$email',
                phone='$contact_number',
                floor='$floor',
                flat='$flat_type',
                gender='$gender',
                rent='$rent',
                address='$address',
                image='$img'
                WHERE id='$id'";

                execute($updateQuery);
               
                

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
                
            }
            else{
                echo "something went wrong";
            }
        }   
            
          
        
    }
       
 ?>