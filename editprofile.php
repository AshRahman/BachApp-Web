<?php
session_start(); 
if(!isset($_SESSION["user_type"])){
    header("Location:userError.php");
}
include "Controller/editrenterprofileController.php";
include "homelandlord.php";

?>

<html>
<body>
<div id="tview-div">
<fieldset  style="width:1316px">
    <h1 align="center">Profile</h1><br>
    <form action="" method="post">
        <table align="center" border="4" >
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Name</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Phone</th>
            </tr>
                <?php
                    foreach($result as $row){
                        echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["name"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            echo "<td>".$row["gender"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                            echo "<td>".$row["phone"]."</td>";
                        echo "</tr>";
                    }
                ?>
                
 
        </table><br>

        <p align="center">
        <span><input type="submit" name= "refreshBtn" value="Refresh" class="btn btn-success" ></span>
        </p>                    


    </form>
</fieldset>
</div>


<div id="tedit-div">
<h1 align="center">Edit Profile</h1>
<form action="" onsubmit="return validate()" method="post">
            <table align="center">
            <form action="" method="post">
             <table align="center">
             <tr>
                    <td><span>Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="your_name" id="your_name" value="<?php echo $your_name; ?>" placeholder="Your Name">
                        <span id="err_your_name"><?php echo $err_your_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" placeholder="Username">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" id="gender1" value="male">Male
                        <input type="radio" name="gender" id="gender2" value="female">Female
                        <span id="err_gender"><?php echo $err_gender; ?></span>
                    </td>

                </tr>

                <tr>
                    <td><span>E-mail</span></td>
                </tr>

                <tr>
                    <td><input type="text" name="email" id="email" value="<?php echo $email; ?>">
                        <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Contact Number</span></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact_number" id="contact_number" value="<?php echo $contact_number; ?>" placeholder="Phone / Mobile">
                        <span id="err_contact_number"><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
                 
                 
                 <tr>
                    <td colspan="3" align="center"><br><span><input type="submit" name= "saveBtn" value="Save"  class="btn btn-success" ></span></td>
                 </tr> 

                 

             </table>

        </form>
</div>

</body>
<script src="JS/editRenterProfileValidation.js"></script>
</html>