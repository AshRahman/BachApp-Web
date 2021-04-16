
<?php

   /* if(isset($_POST["submit"])){
        echo $_POST["fname"]."<br>";
        echo $_POST["lname"]."<br>";
        echo $_POST["uname"]."<br>";
        echo $_POST["mail"]."<br>";
        echo $_POST["pass"]."<br>";
        echo $_POST["cpass"]."<br>";
        echo $_POST["gender"]."<br>";
        echo $_POST["nid"]."<br>";
        echo $_POST["phone"]."<br>";
    }
    */

?>

<?php
include 'main_header.php';
include 'Controller/bachelorsignupValidation.php';


?>

<html>
<head>
</head>
<body>

        <fieldset  style="width:1316px;height:615px">
        <h1 align="center">Sign Up</h1>
        <h4 align="center"><b>"Where Searching House Becomes Easier"</b></h4><br><br>
            <form action="" method="post">
                <table align="center">
                    

                    <tr>
                        <td><span>First Name:</span></td>
                        <td><input type="text" name="fname" value="<?php echo $fname; ?>" placeholder ="First Name">
                            <span><?php echo $err_fname;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Last Name:</span></td>
                        <td><br><input type="text" name="lname" value="<?php echo $lname; ?>" placeholder ="Last Name">
                            <span><?php echo $err_lname;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Username:</span></td>
                        <td><br><input type="text" name="uname" value="<?php echo $uname; ?>" placeholder ="User Name">
                            <span><?php echo $err_uname;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Email:</span></td>
                        <td><br><input type="text" name="mail" value="<?php echo $mail; ?>" placeholder ="E-mail">
                        <span><?php echo $err_mail;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Password:</span></td>
                        <td><br><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder ="Password">
                        <span><?php echo $err_pass;?></span>
                        <span><?php echo $err_lpass;?></span>
                        <span><?php echo $err_upass;?></span>
                        <span><?php echo $err_spass;?></span>
                        <span><?php echo $err_npass;?></span></td>
                    </tr>
                    <tr>
                        <td><br><span>Confirm Password:</span></td>
                        <td><br><input type="password" name="cpass" value="<?php echo $cpass; ?>" placeholder ="Confirm Password">
                        <span><?php echo $err_cpass;?></span></td>
                    </tr>

                    <tr>
                    <td><br><span>Gender</span></td>
                    <td><br>: <input type="radio" name="gender" value="male">Male
                              <input type="radio" name="gender" value="male">Female
                          <span><?php echo $err_gender;?></span>
                    </td>
                    </tr>

                    <!-- <tr>
                        <td><br><span>National ID:</span></td>
                        <td><br><input type="text" name="nid" value="<?php echo $nid; ?>" placeholder ="NID">
                        <span><?php echo $err_nid;?></span></td>
                    </tr> -->

                    <tr>
                        <td><br><span>Phone:</span></td>
                        <td><br><input type="text" name="phone" value="<?php echo $phone; ?>" placeholder ="Phone Number">
                        <span><?php echo $err_phone;?></span></td>
                    </tr>
                    
                    
                    <tr>
                       <td colspan="3" align="center"><br><span><input type="submit" name= "submit" value="Sign Up" class="btn btn-success" ></span></td>
                    </tr>

                </table>

                
            </form> 
    </fieldset>   
    
</body>

</html>