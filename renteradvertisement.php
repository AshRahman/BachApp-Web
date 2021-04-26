<?php
session_start(); 
if(!isset($_SESSION["loggedInUser"])){
    header("Location:userError.php");
}
    require_once "Controller/houserentController.php";
    include "homelandlord.php";
?>

<html>

<head>

</head>

<body>

    <h1 align="center">Add Property</h1>
    <form action="" onsubmit="return validate()" method="post">
        <table align="center">

            <tr>
                <td><span>User Name</span></td>
            </tr>
            <tr>

                <td><input type="text" name="user_name" id="user_name" value="<?php echo $user_name; ?>" placeholder="Username">
                    <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                </td>

            </tr>
            <tr>
                <td><span>Email</span></td>
            </tr>
            <tr>
                <td><input type="text" name="email" id="email" value="<?php echo $email;?>" placeholder="Email">
                    <span id="err_email"><?php echo $err_email;?></span></br>
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
                <td><span>Floor</span></td>
            </tr>
            <tr>
                <td><input type="text" name="floor" id="floor" value="<?php echo $floor;?>" placeholder="Floor">
                    <span id="err_floor"><?php echo $err_floor;?></span></br>
            </tr>
            <tr>
                <td><span>Flat Type</span></td>
            </tr>
            <tr>
                <td><select name="flat_type" id="flat_type">
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
                <td><input type="text" name="rent" id="rent" value="<?php echo $rent;?>" placeholder="Rent">
                    <span id="err_rent"><?php echo $err_rent;?></span></br>
                </td>
            </tr>
            <tr>
                <td><span>Address</span></td>
            </tr>
            <tr>
                <td><input type="text" name="address" id="address" value="<?php echo $address; ?>" placeholder="Address">
                    <span id="err_address"><?php echo $err_address;?></span></br>
                </td>
            </tr>

            <tr>
                <td><span>Image</span></td>
            </tr>
            <tr>
                <td><input type="text" name="img" id="img" value="<?php echo $img; ?>" placeholder="img url">
                    <span id="err_img"><?php echo $err_img;?></span></br>
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="add_property" value="Add Property">
                </td>
            </tr>
        </table>
    </form>
    </div>
</body>
<script src="JS/renterAdvertisementValidation.js"></script>
</html>