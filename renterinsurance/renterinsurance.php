<?php
        $fname="";
        $err_fname="";

        $lname="";
        $err_lname="";


        $mail="";
        $err_mail="";

        $phone="";
        $err_phone="";


        $city="";
        $err_city="";

        $state="";
        $err_state="";
        $zip="";
        $err_zip="";
        $address="";
        $err_address="";

        
        $nid="";
        $err_nid="";


        if($_SERVER["REQUEST_METHOD"]=="POST"){
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



//INSURANCE MAIL VALIDATION

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

//INSURANCE ADDRESS VALIDATION

            if(empty($_POST["city"])|| empty($_POST["state"])||empty($_POST["zip"] ))
            {
                $err_address="Address required";
            }
            
            else if(strpos($_POST["city"]," ")|| strpos($_POST["state"]," ")||strpos($_POST["zip"]," "))
            {
                $err_address="Address should not contain WhiteSpace";
            }

            else
            {   
                $address=htmlspecialchars($_POST["city"].",".$_POST["state"].",".$_POST["zip"]);
            }

//INSURANCE NID CARD VALIDATION
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

//INSURANCE PHONE NUMBER VALIDATION
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
        }
    ?>
    



<html>
<head>
</head>
<body>
        <fieldset style ="width:600px">
        <h2 align="center">RENTER INSURANCE</h2>
            <form action="" method="post">
                <table align="center">

                    <tr>
                        <td><span>First Name:</span></td>
                        <td><input type="text" name="fname" placeholder ="First Name">
                            <span><?php echo $err_fname;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Last Name:</span></td>
                        <td><input type="text" name="lname" placeholder ="Last Name">
                            <span><?php echo $err_lname;?></span></td>
                    </tr>


                    <tr>
                        <td><span>Address:</span></td>
                        <td><input type="text" name="city" placeholder ="city" size='6'> - <input type="text" name="state" placeholder ="State" size='7'> </br>
                         <input type="text" name="zip" placeholder ="Postal zip code">
                        <span><?php echo $err_address ;?></span>
                        <span><?php echo $err_city ;?></span></td>
                    </tr>
                   
                    <tr>
                        <td><span>Email:</span></td>
                        <td><input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>

                     <tr>
                        <td><span>National ID:</span></td>
                        <td><input type="text" name="nid" placeholder ="NID">
                        <span><?php echo $err_nid;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Phone:</span></td>
                        <td><input type="text" name="phone" placeholder ="Phone Number">
                        <span><?php echo $err_phone;?></span></td>
                    </tr>
                
                    
                    <tr>
                       <td colspan="3" align="center"><span><input type="submit" value="Register" ></span></td>
                    </tr>  


                </table>


            </form> 
    </fieldset>   
</body>
</html>