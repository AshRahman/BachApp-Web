<?php
       
       
        $fname="";
        $err_fname="";

        $lname="";
        $err_lname="";

        $uname="";
        $err_uname="";

        $pass="";
        $err_pass="";

        $err_upass="";
        $err_lpass="";
        $err_npass="";
        $err_spass="";

        $cpass="";
        $err_cpass="";

        $gender="";
        $err_gender="";

        $mail="";
        $err_mail="";

        $phone="";
        $err_phone="";

        // $nid="";
       // $err_nid="";
       
        $hasError = false;

        include "Model/db_config.php";


        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
//FIRST_NAME VALIDATION
            if(empty($_POST["fname"]))
            {
                $err_fname="First Name required";
                $hasError = true;
            }
            
            else
            {   
                $fname=htmlspecialchars($_POST["fname"]);
            }
           
            $fv=$_POST["fname"];
            for($i=0;$i<strlen($fv);$i++)
            {
                if(is_numeric($fv[$i]))
                {
                  $fv=true;
                  $err_fname="First Name should not contain Numbers";
                  $hasError = true;
                  break;
                }
            }

//LAST_NAME VALIDATION
            if(empty($_POST["lname"]))
            {
                $err_lname="Last Name required";
                $hasError = true;
            }
            
            else
            {   
                $lname=htmlspecialchars($_POST["lname"]);
            }
            
            $lv=$_POST["lname"];
            for($i=0;$i<strlen($lv);$i++)
            {
                if(is_numeric($lv[$i]))
                {
                  $lv=true;
                  $err_lname="Last Name should not contain Numbers";
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

//PASSWORD VALIDATION
            $up=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++)
            {
                if(ctype_upper($up[$i]))
                {
                    $upt=true;
                    break;
                }
                else
                {
                    $upt=false;
                }
            }
            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++)
            {
                if(ctype_lower($up[$i]))
                {
                    $lowt=true;
                    break;
                }
                else
                {
                    $lowt=false;
                }
            }


            $low=$_POST["pass"];
            for($i=0;$i<strlen($up);$i++)
            {
                if(is_numeric($up[$i]))
                {
                    $numt=true;
                    break;
                }
                else
                {
                    $numt=false;
                }
            }
        
            if(strpos($_POST["pass"],"?")||strpos($_POST["pass"],"#"))
            {
                    $sp=true;
            }
            else
            {
                $sp=false;
            }


            if(empty($_POST["pass"]))
            {
                $err_pass="Enter Password";
                $hasError = true;
            }
            else if(strlen($_POST["pass"])<8)
            {
                $err_pass="Password must contain more than 6 characters";
                $hasError = true;
            }
            else if(strpos($_POST["pass"]," "))
            {
                $err_pass="Password should not contain whitespace";
                $hasError = true;
            }
            
            else if($upt==false)
            {
                $err_upass="Must contain Uppercase letter";
                $hasError = true;
            }
            else if($lowt==false)
            {
                $err_lpass="Must contain Lowercase letter";
                $hasError = true;
            }
            else if($numt==false)
            {
                $err_npass="Must contain Number";
                $hasError = true;
            }
            else if($sp==false)
            {
                $err_spass="Must contain special character # or ?";
                $hasError = true;
            }

            else
            {   
                $pass=htmlspecialchars($_POST["pass"]);
            }


//CONFIRM PASSWORD VALIDATION
            if(empty($_POST["cpass"]))
            {
                $err_cpass="Enter Password again";
                $hasError = true;
            }
            else if($_POST["cpass"]!=$pass)
            {
                $err_cpass="Password mismatch";
                $hasError = true;
            }
            else
            {   
                $cpass=htmlspecialchars($_POST["cpass"]);
            }
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


// //NID CARD VALIDATION


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

       

            if($hasError == false && isset($_POST["submit"]))
            {
                
                $query="insert into bachelorsignup (firstname,lastname,username,email,password,gender,phone) values ('$fname','$lname','$uname','$mail','$pass','$gender','$phone')";
                $result = execute($query);


                $fname="";
                $err_fname="";
        
                $lname="";
                $err_lname="";
        
                $uname="";
                $err_uname="";
        
                $pass="";
                $err_pass="";
        
                $err_upass="";
                $err_lpass="";
                $err_npass="";
                $err_spass="";
        
                $cpass="";
                $err_cpass="";
        
                $gender="";
                $err_gender="";
        
                $mail="";
                $err_mail="";
        
                $phone="";
                $err_phone="";
                
            }
        }   
        

       
 ?>
    


