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
		  
            <form action="" onsubmit="return validate()" method="post">
                <table align="center">
                    
                        
                        <tr>
                        <td><span class="my-font">User Name</span></td>
                    </tr>
                    <tr>

                    <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" placeholder="User Name">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>   
                    </tr>
                    <tr>
                        <td><span class="my-font"> Password</span></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="pass" id="pass" value="<?php echo $pass; ?>" placeholder="Password">
                        <span class="err-msg" id="err_pass"><?php echo $err_pass; ?></span></td>
                    </tr>
                    


                    <tr>
                        <td colspan="2"><input type="submit" class="my-font btn-sup" name="signinBtn" value="Sign in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    <script src="JS/validateLogin.js"></script>

</html>