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
       
        

        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if(empty($_POST["name"]))
            {
                $err_name="Name required";
            }
            
            else
            {   
                $name=htmlspecialchars($_POST["name"]);
            }

            if(empty($_POST["uname"]))
            {
                $err_uname="Username required";
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
                $err_pass="Enter password";
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


            if(empty($_POST["pass"]))
            {
                $err_cpass="Enter password again";
            }
            else if($_POST["cpass"]!=$pass)
            {
                $err_cpass="Password mismatch";
            }


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

            if(empty($_POST["phone"]))
            {
                $err_phone="Enter phone number";
            }
            else if(!is_numeric($_POST["code"])||!is_numeric($_POST["phone"]) )
            {
                $err_phone="Phone number should not contain letters";
            }
            else
            {
                $phone= $_POST["code"].$_POST["phone"];
            }


            if(empty($_POST["gender"]))
            {
                $err_gender="Gender must be selected";
            }
            else
            {
                $gender=$_POST["gender"];
            }


            if(empty($_POST["bdate"]))
            {
               $err_bdate="!Date must be selected,   ";
            }
            else
            {
                $bdate=$_POST["bdate"];
            }


            if(empty($_POST["bmonth"]))
            {
                $err_bmonth="Month must be selected,   ";
            }
            else
            {
                $bmonth=$_POST["bmonth"];
            }


            if(empty($_POST["byear"]))
            {
                $err_byear="Year must be selected";
            }
            else
            {
                $byear=$_POST["byear"];
            }


            

            if(!isset($_POST["hear"]))
            {
                $err_hear="This must be selected";
            }
            else
            {
                $hear=$_POST["hear"];
            }


            if(empty($_POST["tarea"]))
            {
                $err_bio="Bio should not be empty";
            }
            else
            {
                $bio=htmlspecialchars($_POST["tarea"]);
            }
           
           
        
        }
    ?>
    



<html>
<head>
</head>
<body>

        <fieldset style ="width:600px">
        <h2 align="center">ADD MEMBER</h2>
            <form action="" method="post">
                <table>
                    

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
                        <td><span>Username:</span></td>
                        <td><input type="text" name="uname" placeholder ="Username">
                            <span><?php echo $err_uname;?></span></td>
                    </tr>
                    
                    <tr>
                        <td><span>Email:</span></td>
                        <td><input type="text" name="mail" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Password:</span></td>
                        <td><input type="password" name="pass" placeholder ="Password">
                        <span><?php echo $err_pass;?></span>
                        <span><?php echo $err_lpass;?></span>
                        <span><?php echo $err_upass;?></span>
                        <span><?php echo $err_spass;?></span>
                        <span><?php echo $err_npass;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Confirm Password:</span></td>
                        <td><input type="password" name="cpass" placeholder ="Confirm Password">
                        <span><?php echo $err_cpass;?></span></td>
                    </tr>
                    
                    <tr>
                        <td><span>National ID:</span></td>
                        <td><input type="text" name="nid" placeholder ="NID">
                        <span><?php echo $err_nid;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Phone:</span></td>
                        <input type="text" name="phone" placeholder ="Number" size='9'>
                        <span><?php echo $err_phone;?></span></td>
                    </tr>
                
                    
                    
                    
                    


                </table>


            </form> 
    </fieldset>   
</body>
</html>