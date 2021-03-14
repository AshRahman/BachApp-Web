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
        <style>
            body{
                background-color:rgb(240,240,240);
            }
            .signup-div{
                border:1px solid rgb(245,245,245);
                margin:auto;
                width:30%;
                margin-top:5%;
                background-color:rgb(255,255,255);
                padding:20px 0px 20px 0px;

            }
            .my-font{
                font-size:20px;
                font-family:consolas;
            }
            .btn-sup{
                background-color:rgb(112,191,65);
                border:none;
                color:white;
                width:100%;
                border-radius:3px;
                padding:5px;
            }
            .btn-sup:hover{
                background-color:rgb(100,170,40);
            }
            .btn-sup:active{
                background-color:green;
            }
            .err-msg{
                color:red;
                font-size:15px;
                font-family:consolas;

            }
        </style>
    </head>
    <body>
        <div class="signup-div">
        
            <td><img align="center" src="resources\h.png" alt="error image"></td>
            <td><h1 align="center" style="font-family:cambria">Sign in</h1></td>
          
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