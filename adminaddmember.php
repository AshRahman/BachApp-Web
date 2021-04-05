
<?php
    
       session_start();
       $_SESSION["username"]="admin";

       if($_SESSION["username"]!=="admin"){
            header("Location:signin.php");
       }
       include "Controller/adminaddmemberValidation.php";
        
 ?>
    



<html>
<head>
</head>
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