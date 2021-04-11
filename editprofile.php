<?php
include "Controller/editrenterprofileController.php";



?>

<html>
<body>
<div id="tview-div">
<fieldset  style="width:1316px;height:100x">
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
<form action="" method="post">
            <table align="center">
            <form action="" method="post">
             <table align="center">
             <tr>
                    <td><span>Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your Name">
                        <span><?php echo $err_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="Username">
                        <span><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <span><?php echo $err_gender; ?></span>
                    </td>

                </tr>

                <tr>
                    <td><span>E-mail</span></td>
                </tr>

                <tr>
                    <td><input type="text" name="email" value="<?php echo $email; ?>">
                        <span><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Contact Number</span></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="Phone / Mobile">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
                 
                 
                 <tr>
                    <td colspan="3" align="center"><br><span><input type="submit" name= "saveBtn" value="Save"  class="btn btn-success" ></span></td>
                 </tr> 

                 

             </table>

        </form>
</div>



</body>

</html>