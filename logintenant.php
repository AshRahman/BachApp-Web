<?php
    require_once "Controller/tenantloginController.php";
    
?>

<html>

<head></head>

<body>
    <div class="signup-div">
        <h1 align="center">Login</h1>
        <h4 align="center">"Where Searching House Becomes Easier"</h4>

        <form action="" method="post">
            <table align="center">
    
                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="uname" value="<?php echo $uname; ?>" placeholder="Username">
                        <span><?php echo $err_uname; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                        <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2" align='center'><input type="submit" name="login" value="Login"></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>