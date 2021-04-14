
<?php
       include "Controller/adminaddmemberValidation.php";
       include "Controller/logoutValidation.php";
	session_start(); 
	if(!isset($_SESSION["user_type"])){
		header("Location:userError.php");
	}
        
 ?>
    



<html>
<head>
</head>
<body>
<div class="right">
        <form action="" method="post">
        <input type="submit" class="right my-font btn-sup" name="logoutBtn" value="Log-out"> 
        </form> 
        <form action="homepageadmin.php">
    <input type="submit" class="backBtn" id="backBtn" name="backBtn" value="Go-Back">
    </form>  
        <div id="add-div" >
        <h1 align="center">Edit Profile</h1>

        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><span>Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                        <span><?php echo $err_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="<?php echo $user_name; ?>">
                        <span><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="<?php echo $pass; ?>">
                        <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <span><?php echo $err_gender; ?></span>
                    </td>

                </tr>

                <tr>
                    <td><span>E-mail</span></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" value="<?php echo $email; ?>" >
                        <span><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Contact Number</span></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="<?php echo $contact_number; ?>">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
             
                <tr>
                    <td colspan="2"><input type="submit" class="add-Btn" id="add-Btn" name="add-Btn" value="Add"></td>
                            
                </tr>
            </table>
        </form>
    </div>
</body>
</html>