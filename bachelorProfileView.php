<?php
include "Controller/bachelorEditController.php";
include 'main_header.php';

if(!isset($_SESSION["loggedInUser"]))
{
    header("Location:userError.php");
}
 




?>

<html>
<body>

<div id="tedit-div"><br><br><br>
<h1 align="center"><br>Edit Profile</h1><br>
<form action="" method="post">
            <table align="center">
            <form action="" method="post">
             <table align="center">
             <tr>
                     <td><span>First Name:</span></td>
                     <td><input type="text" name="fname" value="<?php echo $fname; ?>" placeholder ="<?php echo $fname; ?>">
                         <span><?php echo $err_fname;?></span></td>
                 </tr>

                 <tr>
                     <td><br><span>Last Name:</span></td>
                     <td><br><input type="text" name="lname" value="<?php echo $lname; ?>" placeholder ="<?php echo $lname; ?>">
                         <span><?php echo $err_lname;?></span></td>
                 </tr>

                 <tr>
                     <td><br><span>Username:</span></td>
                     <td><br><input type="text" name="uname" value="<?php echo $uname; ?>" placeholder ="<?php echo $uname; ?>">
                         <span><?php echo $err_uname;?></span></td>
                 </tr>

                 <tr>
                     <td><br><span>Email:</span></td>
                     <td><br><input type="text" name="mail" value="<?php echo $mail; ?>" placeholder ="<?php echo $mail; ?>">
                     <span><?php echo $err_mail;?></span></td>
                 </tr>

               

                 <tr>
                 <td><br><span>Gender</span></td>
                 <td><br>: <input type="radio" name="gender" value="male">Male
                           <input type="radio" name="gender" value="male">Female
                       <span><?php echo $err_gender;?></span>
                 </td>
                 </tr>

               

                 <tr>
                     <td><br><span>Phone:</span></td>
                     <td><br><input type="text" name="phone" value="<?php echo $phone; ?>" placeholder ="<?php echo $phone; ?>">
                     <span><?php echo $err_phone;?></span></td>
                 </tr>
                 
                 
                 <tr>
                    <td colspan="3" align="center"><br><span><input type="submit" name= "saveBtn" value="Save"  class="btn btn-success" ></span></td>
                 </tr> 

                 

             </table>

        </form>
</div>



</body>

</html>