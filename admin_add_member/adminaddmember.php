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
    



<html>
<head>
</head>
<style>
            .right {
                display: flex;
            justify-content: flex-end;
            }
            .my-font{
                font-size:20px;
                font-family:consolas;
            }
            .btn-sup{
                background-color:rgb(112,191,65);
                border:none;
                color:white;
                width:5%;
                border-radius:3px;
                padding:5px;
            }
            .btn-sup:hover{
                background-color:rgb(100,170,40);
            }

            .btn-sup:active{
                background-color:green;
            }


</style>
<body>
<div class="right">
        <input type="submit" class="right my-font btn-sup" name="submit" value="Log-out">  
    </div>

        <fieldset style ="width:600px">
        <h2 align="center">ADD MEMBER</h2>
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
                        <td><span>Username:</span></td>
                        <td><input type="text" name="uname" placeholder ="User Name">
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
                        <td><input type="text" name="phone" placeholder ="Phone Number">
                        <span><?php echo $err_phone;?></span></td>
                    </tr>

                    <tr>
                        <td><span>Role:</span></td>
                        <td><select name ="rassign" style ="width:177px">
                        <option disabled selected>Choose one</option>
                        <option>Admin</option>
                        <option>Renter</option>
                        <option>Renty</option>
                        </select>
                        <span><?php echo $err_rassign;?></span>
                    </tr>
                    
                    <tr>
                       <td colspan="3" align="center"><span><input type="submit" value="SUBMIT" ></span></td>
                    </tr>
                    
                    


                </table>


            </form> 
    </fieldset>   
</body>
</html>