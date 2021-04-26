<?php
       
       include "Model/db_config.php";

       session_start();
       $loggedInUser=$_SESSION["user_name"];
       
        $name="";
        $err_name="";

        // $lname="";
        // $err_lname="";

        $uname="";
        $err_uname="";

        // $pass="";
        // $err_pass="";

        // $err_upass="";
        // $err_lpass="";
        // $err_npass="";
        // $err_spass="";

        // $cpass="";
        // $err_cpass="";

        $gender="";
        $err_gender="";

        $mail="";
        $err_mail="";

        $phone="";
        $err_phone="";


       
        $hasError = false;
       

        $query = "Select * from tenant where username='$loggedInUser'";
        $result = get($query);
        foreach($result as $rows)
        {
          $name= $rows["name"];
        //   $lname= $rows["lastname"];
          $uname= $rows["username"];
          $mail= $rows["email"];
          //$pass= $rows["password"];
          $gender=$rows["gender"];
          $phone= $rows["phone"];
        }




        // if(isset($_POST["refreshBtn"])){
        // $result = get($query);
        // foreach($result as $rows){
        //           $fname= $rows["firstname"];
        //           $lname= $rows["lastname"];
        //           $uname= $rows["username"];
        //           $mail= $rows["email"];
        //           //$pass= $rows["password"];
        //           $gender=$rows["gender"];
        //           $phone= $rows["phone"];
        // }
    // }


if(isset($_POST["saveBtn"])){
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
//NAME VALIDATION
            if(empty($_POST["name"]))
            {
                $err_name="Name required";
                $hasError = true;
            }
            
            else
            {   
                $name=htmlspecialchars($_POST["name"]);
            }
           
            $fv=$_POST["name"];
            for($i=0;$i<strlen($fv);$i++)
            {
                if(is_numeric($fv[$i]))
                {
                  $fv=true;
                  $err_name="Name should not contain Numbers";
                  $hasError = true;
                  break;
                }
            }



//USERNAME VALIDATION
            if(empty($_POST["uname"]))
            {
                $err_uname="User Name required";
                $hasError = true;
            }
            else if(strlen($_POST["uname"]) < 6){
                $err_uname="Username must contain more than 6 characters";
                $hasError = true;
            }
            else if(strpos($_POST["uname"]," ")){
                $err_uname="Username should not contain WhiteSpace";
                $hasError = true;
            }

            else{   
                $uname=$_POST["uname"];

            }


//             }
//GENDER VALIDATION

            if(empty($_POST["gender"])){
                $err_gender="Gender must be selected";
                $hasError = true;
            }
            else{
                $gender=$_POST["gender"];
            }
//EMAIL VALIDATION
            if(empty($_POST["mail"]))
            {
                $err_mail="Email required";
                $hasError = true;
            }
            else if(!strpos($_POST["mail"],"@"))
            {
                $err_mail="Must contain @";
                $hasError = true;
            }
            else
            {   
                $mail=htmlspecialchars($_POST["mail"]);
            }



//PNONE NUMBER VALIDATION
            if(empty($_POST["phone"]))
            {
                $err_phone="Enter phone number";
                $hasError = true;
            }
            else if(strlen($_POST["phone"])<11)
            {
                $err_phone="Phone number must contain 11 digits ";
                $hasError = true;
            }
            else if(strlen($_POST["phone"])>11)
            {
                $err_phone="Phone number should not contain more than 11 digits ";
                $hasError = true;
            }
            else
            {
                $phone= $_POST["phone"];
            }

            $pv=$_POST["phone"];
            for($i=0;$i<strlen($pv);$i++)
            {
                if(!is_numeric($pv[$i]))
                {
                  $pv=true;
                  $err_phone="Phone number should not contain letters";
                  $hasError = true;
                  break;
                }
              
            }

            if(!$hasError)
            {
                
                $query="UPDATE tenant SET  name='$name',username='$uname',email='$mail',gender='$gender',phone='$phone' WHERE username='$uname'";
                execute($query);
                header("Location:homepagetenant.php");

                
            }
            
            
        }   
        
    }
       
 ?>
    


