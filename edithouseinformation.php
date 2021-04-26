<?php
session_start(); 
if(!isset($_SESSION["user_type"])){
    header("Location:userError.php");
}
include "Controller/edithouseinformationController.php";
include "homelandlord.php";



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
                <th>Email</th>
                <th>Phone</th>
                <th>Floor</th>
                <th>Flat</th>
                <th>Gender</th>
                <th>Rent</th>
                <th>Address</th>
                <th>Image</th>
            </tr>
                <?php
                    foreach($result as $row){
                        echo "<tr>";
                            echo "<td>".$row["id"]."</td>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                            echo "<td>".$row["phone"]."</td>";
                            echo "<td>".$row["floor"]."</td>";
                            echo "<td>".$row["flat"]."</td>";
                            echo "<td>".$row["gender"]."</td>";
                            echo "<td>".$row["rent"]."</td>";
                            echo "<td>".$row["address"]."</td>";
                            echo "<td>".$row["image"]."</td>";
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
<h1 align="center">Edit House Information</h1>
<form action="" onsubmit="return validate()" method="post">
            <table align="center">
            <form action="" method="post">
             <table align="center">
             <tr>
                <td><span>User Name</span></td>
            </tr>
            <tr>

                <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" placeholder ="<?php echo $user_name; ?>">
                    <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                </td>

            </tr>
            <tr>
                <td><span>Email</span></td>
            </tr>
            <tr>
                <td><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder ="<?php echo $email; ?>">
                    <span id="err_email"><?php echo $err_email;?></span></br>
                </td>
            </tr>
            <tr>
                <td><span>Contact Number</span></td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="contact_number" id="contact_number" value="<?php echo $contact_number; ?>" placeholder ="<?php echo $contact_number; ?>">
                    <span id="err_contact_number"><?php echo $err_contact_number; ?></span>
                </td>
            </tr>
            <tr>
                <td><span>Floor</span></td>
            </tr>
            <tr>
                <td><input type="text" name="floor" id="floor" value="<?php echo $floor;?>" placeholder ="<?php echo $floor; ?>">
                    <span id="err_floor"><?php echo $err_floor;?></span></br>
            </tr>
            <tr>
                <td><span>Flat Type</span></td>
            </tr>
            <tr>
                <td><select name="flat_type" id="flat_type" >
                        <option disabled selected>Choose one</option>
                        <option>Studio</option>
                        <option>Single</option>
                        <option>Shared Two</option>
                        <option>Shared Three</option>
                        <option>Full Flat</option>

                    </select>
                    <span id="err_flat_type"><?php echo $err_flat_type;?></span>
                </td>
            </tr>
            <tr>
                <td><span>Preferred Gender<span></td>
            </tr>
            <tr>
                <td><input type="radio" name="gender" id="gender1" value="male">Male
                    <input type="radio" name="gender" id="gender2" value="female">Female
                    <input type="radio" name="gender" id="gender3" value="both">Both
                    <span id="err_gender"><?php echo $err_gender; ?></span>
                </td>
            </tr>
            <tr>
                <td><span>Rent</span></td>
            </tr>
            <tr>
                <td><input type="text" name="rent" id="rent" value="<?php echo $rent;?>" placeholder ="<?php echo $rent; ?>">
                    <span id="err_rent"><?php echo $err_rent;?></span></br>
                </td>
            </tr>
            <tr>
                <td><span>Address</span></td>
            </tr>
            <tr>
                <td><input type="text" name="address" id="address" value="<?php echo $address; ?>" placeholder ="<?php echo $address; ?>">
                    <span id="err_address"><?php echo $err_address;?></span></br>
                </td>
            </tr>

            <tr>
                <td><span>Image</span></td>
            </tr>
            <tr>
                <td><input type="text" name="img" id="img" value="<?php echo $img; ?>" placeholder ="<?php echo $img; ?>">
                    <span id="err_img"><?php echo $err_img;?></span></br>
                </td>
            </tr>
                 
                 
                 <tr>
                    <td colspan="3" align="center"><br><span><input type="submit" name= "saveBtn" value="Save"  class="btn btn-success" ></span></td>
                 </tr> 

                 

             </table>

        </form>
</div>



</body>
<script src="JS/editHouseInformationValidation.js"></script>
</html>