<?php

        include "Model/db_config.php";

        $card="";
        $err_card="";

        $name="";
        $err_name="";

        $cnum="";
        $err_cnum="";
        

        $exmonth="";
        $err_exmonth="";

        $exyear="";
        $err_exyear="";

        $scode="";
        $err_scode="";
        
        $amount="";
        $err_amount="";

        $hasError = false;

        if($_SERVER["REQUEST_METHOD"]=="POST"){
//NAME VALIDATION
            if(empty($_POST["name"])) 
            {
                $err_name="Name required";
                $hasError = true;
            }
          
            else if(is_numeric($_POST["name"]))
            {
                $err_name="Name should not contain Numbers";
                $hasError = true;
            }
            else
            {   
                $name=htmlspecialchars($_POST["name"]);
            }

            $nd=$_POST["name"];
            for($i=0;$i<strlen($nd);$i++)
            {
                if(is_numeric($nd[$i]))
                {
                    $nd=true;
                    $err_name="Name should not contain Numbers";
                    $hasError = true;
                    break;
                }
               
            }
           
           


//CARD NUMBER VALIDATION
            if(empty($_POST["cnum"]))
            {
                $err_cnum="Enter Card Number";
                $hasError = true;
            }
            else if(strlen($_POST["cnum"])<16)
            {
                $err_cnum="Card number must contain 16 digits ";
                $hasError = true;
            }
            else if(strlen($_POST["cnum"])>16)
            {
                $err_cnum="Card number should not contain more than 16 digits ";
                $hasError = true;
            }
            else if(strpos($_POST["cnum"]," "))
            {
                $err_cnum="Card number should not contain whitespace";
                $hasError = true;
            }
            
            else
            {
                $cnum=$_POST["cnum"];
            }

            $cn=$_POST["cnum"];
            for($i=0;$i<strlen($cn);$i++)
            {
                if(!is_numeric($cn[$i]))
                {
                    $cn=true;
                    $err_cnum="Card Number should not contain letters";
                    $hasError = true;
                    break;
                }
               
            }


//CARD SELECTION VALIDATION
            if(empty($_POST["card"]))
            {
                $err_card="Card must be selected";
                $hasError = true;
            }
            else
            {
                $card=$_POST["card"];
            }

//CARD DATE SELECTION VALIDATION
 
            if(empty($_POST["exmonth"]))
            {
                $err_exmonth="Month must be selected   ";
                $hasError = true;
            }
            else
            {
                $exmonth=$_POST["exmonth"];
            }


            if(empty($_POST["exyear"]))
            {
                $err_exyear="Year must be selected";
                $hasError = true;
            }
            else
            {
                $exyear=$_POST["exyear"];
            }

//SECURITY CODE VALIDATION

            if(empty($_POST["scode"]))
            {
                $err_scode="Enter Security Code";
                $hasError = true;
            }
            else if(strlen($_POST["scode"])<6)
            {
                $err_scode="Security code should contain 6 digits ";
                $hasError = true;
            }
            else if(strpos($_POST["scode"]," "))
            {
                $err_scode="Security Code should not contain whitespace";
                $hasError = true;
            }
            
            else if(!is_numeric($_POST["scode"]) )
            {
                $err_scode="Security Code should not contain letters";
                $hasError = true;
            }
            else
            {   
                $scode=htmlspecialchars($_POST["scode"]);
            }

//AMOUNT VALIDATION
            if(empty($_POST["amount"]))
            {
                $err_amount="Enter amount number";
                $hasError = true;
            }
            else
            {
                $amount= $_POST["amount"];
            }

            $av=$_POST["amount"];
            for($i=0;$i<strlen($av);$i++)
            {
                if(!is_numeric($av[$i]))
                {
                  $av=true;
                  $err_amount="Amount should not contain letters";
                  $hasError = true;
                  break;
                }
            }
           if($hasError==false){
        
            $query="INSERT INTO payment_detail (cardtype, name, cardnumber, scode, amount) VALUES ('$card','$name','$cnum','$scode','$amount')";
            execute($query);
        }

        
        }
    ?>
    


