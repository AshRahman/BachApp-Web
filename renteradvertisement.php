<?php
    require_once "Controller/houserentController.php";
?>

<html>

<head>

</head>

<body>

    <h1 align="center">Add Property</h1>
    <form action="" method="post">
        <table align="center">

            <tr>
                <td><span>User Name</span></td>
            </tr>
            <tr>

                <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="Username">
                    <span><?php echo $err_user_name; ?></span></br>
                </td>

            </tr>
            <tr>
                <td><span>Email</span></td>
            </tr>
            <tr>
                <td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email">
                    <span><?php echo $err_email;?></span></br>
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
                <td><span>Floor</span></td>
            </tr>
            <tr>
                <td><input type="text" name="floor" value="<?php echo $floor;?>" placeholder="Floor">
                    <span><?php echo $err_floor;?></span></br>
            </tr>
            <tr>
                <td><span>Flat Type</span></td>
            </tr>
            <tr>
                <td><select name="flat_type">
                        <option disabled selected>Choose one</option>
                        <option>Studio</option>
                        <option>Single</option>
                        <option>Shared Two</option>
                        <option>Shared Three</option>
                        <option>Full Flat</option>

                    </select>
                    <span><?php echo $err_flat_type;?></span>
                </td>
            </tr>
            <tr>
                <td><span>Preferred Gender<span></td>
            </tr>
            <tr>
                <td><input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="both">Both
                    <span><?php echo $err_gender; ?></span>
                </td>
            </tr>
            <tr>
                <td><span>Rent</span></td>
            </tr>
            <tr>
                <td><input type="text" name="rent" value="<?php echo $rent;?>" placeholder="Rent">
                    <span><?php echo $err_rent;?></span></br>
                </td>
            </tr>
            <tr>
                <td><span>Address</span></td>
            </tr>
            <tr>
                <td><input type="text" name="address" value="<?php echo $address; ?>" placeholder="Address">
                    <span><?php echo $err_address;?></span></br>
                </td>
            </tr>

            <tr>
                <td><span>Image</span></td>
            </tr>
            <tr>
                <td><input type="text" name="img" value="<?php echo $img; ?>" placeholder="img url">
                    <span><?php echo $err_img;?></span></br>
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

</html>