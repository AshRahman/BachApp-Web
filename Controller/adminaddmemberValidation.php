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

    $mail="";
    $err_mail="";

    $nid="";
    $err_nid="";

    $phone="";
    $err_phone="";
   
    $rassign="";
    $err_rassign="";



    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
//FIRST_NAME VALIDATION
        if(empty($_POST["fname"]))
        {
            $err_fname="First Name required";
        }
        
        else
        {   
            $name=htmlspecialchars($_POST["fname"]);
        }
       
        $fv=$_POST["fname"];
        for($i=0;$i<strlen($fv);$i++)
        {
            if(is_numeric($fv[$i]))
            {
              $fv=true;
              $err_fname="First Name should not contain Numbers";
              break;
            }
        }

//LAST_NAME VALIDATION
        if(empty($_POST["lname"]))
        {
            $err_lname="Last Name required";
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
              break;
            }
        }

//USERNAME VALIDATION
        if(empty($_POST["uname"]))
        {
            $err_uname="User Name required";
        }
        else if(strlen($_POST["uname"]) < 6){
            $err_uname="Username must contain more than 6 characters";
        }
        else if(strpos($_POST["uname"]," ")){
            $err_uname="Username should not contain WhiteSpace";
        }

        else{   
            $uname=$_POST["uname"];

        }

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

//PASSWORD VALIDATION
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
        }
        else if(strlen($_POST["pass"])<8)
        {
            $err_pass="Password must contain more than 6 characters";
        }
        else if(strpos($_POST["pass"]," "))
        {
            $err_pass="Password should not contain whitespace";
        }
        
        else if($upt==false)
        {
            $err_upass="Must contain Uppercase letter";
        }
        else if($lowt==false)
        {
            $err_lpass="Must contain Lowercase letter";
        }
        else if($numt==false)
        {
            $err_npass="Must contain Number";
        }
        else if($sp==false)
        {
            $err_spass="Must contain special character # or ?";
        }

        else
        {   
            $pass=htmlspecialchars($_POST["pass"]);
        }


//CONFIRM PASSWORD VALIDATION
        if(empty($_POST["pass"]))
        {
            $err_cpass="Enter Password again";
        }
        else if($_POST["cpass"]!=$pass)
        {
            $err_cpass="Password mismatch";
        }
        else
        {   
            $pass=htmlspecialchars($_POST["pass"]);
        }

//EMAIL VALIDATION
        if(empty($_POST["mail"]))
        {
            $err_mail="Email required";
        }
        else if(!strpos($_POST["mail"],"@"))
        {
            $err_mail="Must contain @";
        }
        else
        {   
            $name=htmlspecialchars($_POST["mail"]);
        }


//NID CARD VALIDATION
/*
        if(empty($_POST["nid"]))
        {
            $err_nid="Enter NID number";
        }
        else if(strlen($_POST["nid"])<10)
        {
            $err_nid="NID must contain 10 digits ";
        }
        else if(strlen($_POST["nid"])>10)
        {
            $err_nid="NID should not contain more than 10 digits ";
        }
        else if(strpos($_POST["nid"]," "))
        {
            $err_nid="NID should not contain whitespace";
        }

        else
        {
            $nid=$_POST["nid"];
        }

        $nv=$_POST["nid"];
        for($i=0;$i<strlen($nv);$i++)
        {
            if(!is_numeric($nv[$i]))
            {
              $nv=true;
              $err_nid="NID should not contain letters";
              break;
            }
        }
*/
//PNONE NUMBER VALIDATION
        if(empty($_POST["phone"]))
        {
            $err_phone="Enter phone number";
        }
        else if(strlen($_POST["phone"])<11)
        {
            $err_phone="Phone number must contain 11 digits ";
        }
        else if(strlen($_POST["phone"])>11)
        {
            $err_phone="Phone number should not contain more than 11 digits ";
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
              break;
            }
        }

//ROLE ASSIGN VALIDATION
        if(empty($_POST["rassign"]))
        {
            $err_rassign="Role must be selected";
        }
        else
        {
            $rassign=$_POST["rassign"];
        }

    
    }
?>