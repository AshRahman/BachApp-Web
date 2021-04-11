<?php

$email="";
$err_email="";
$pass="";
$err_pass="";
function validateEmail($email){
    $pos_at=strpos($email,"@");
    $pos_dot=strpos($email,".",$pos_at+1);
    if($pos_at<$pos_dot){
        return true;
    }
    return false;
}


    if(empty($_POST["pass"])){
        $err_pass="Please enter your password";
    }


if(empty($_POST["email"])){
        $err_email="Email Required";
    }
    elseif(!validateEmail($_POST["email"])){
        $err_email="Insert a valid email";
    }
    else{
        $email=htmlspecialchars($_POST["email"]);
    }


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
                        <td><span class="my-font"> E-mail</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" value="<?php echo $email;?>">
                        <span class="err-msg"><?php echo $err_email;?></span>
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
                        <td colspan="2"><input type="submit" class="my-font btn-sup" name="submit" value="Sign in"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>

</html>