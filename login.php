<?php
include "Controller/loginValidation.php";
?>


<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="homepage.css">
</head>

<body background="Resources\login.jpg">

    <div class="signup-div">

        <div class="topnav">
            <td>
                <h1 align="center" style="font-family:cambria;color:orange">Sign in</h1>
            </td>
        </div>

        <form action="" onsubmit="return validate()" method="post">
            <table align="right">


                <tr>
                    <td><span  style="font-family:cambria;color:black" class="my-font">User Name</span></td>
                </tr>
                <tr>

                    <td><input style="font-size:10pt;height:30px;width:300px;" type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" placeholder="User Name">
                    <p style="text-align:center;"> <span id="err_user_name"><?php echo $err_user_name; ?></span></p>
                    </td>

                </tr>
                </tr>
                <tr>
                    <td><span  style="font-family:cambria;color:black" class="my-font"> Password</span></td>
                </tr>
                <tr>
                    <td><input style="font-size:10pt;height:30px;width:300px;" type="password" name="pass" id="pass" value="<?php echo $pass; ?>" placeholder="Password">
                    <p style="text-align:center;"> <span class="err-msg" id="err_pass"><?php echo $err_pass; ?></span></p>
                    </td>
                </tr>



                <tr>
                    <td colspan="2"><input type="submit" class="my-font btn-sup" name="signinBtn" value="Sign in"></td>
                </tr>
                <tr>
                <tr>
                    <p style="text-align:center;"><td><span class="my-font"> or</span></td></p>
                </tr>
                <tr>
                    <td><span class="my-font">Create an account as</span></td>
                </tr>
                <td>
                <a class="btn btn-success" href=http://localhost/BachApp-Web/bachelorsignup.php>BACHELOR</a>
                | <a class="btn btn-success" href=http://localhost/BachApp-Web/rentersignup.php>RENTER</a>
                </td>
                </tr>
            </table>
        </form>
        
    </div>

</body>
<script src="JS/validateLogin.js"></script>

</html>