<?php
    include "Controller/loginValidation.php";




?>


<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="homepage.css">
    </head>
    <body>
        <div class="signup-div">
        
            <div class="topnav">
            <td><h1 align="center" style="font-family:cambria;color:orange">Sign in</h1></td>
          </div>
		  
            <form action="" method="post">
                <table align="center">
                    
                        
                        <tr>
                        <td><span class="my-font">User Name</span></td>
                    </tr>
                    <tr>

                    <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="User Name">
                        <span><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>   
                    </tr>
                    <tr>
                        <td><span class="my-font"> Password</span></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                        <span class="err-msg"><?php echo $err_pass; ?></span></td>
                    </tr>
                    


                    <tr>
                        <td colspan="2"><input type="submit" class="my-font btn-sup" name="signinBtn" value="Sign in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

</html>