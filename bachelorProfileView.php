<?php
include "Controller/bachelorEditController.php";
include 'main_header.php';

if (!isset($_SESSION["loggedInUser"])) {
    header("Location:userError.php");
}

?>

<html>

<body>

    <div id="tedit-div"><br><br><br>
        <h1 align="center"><br>Edit Profile</h1><br>


        <form action="" onsubmit="return validate()" method="post">
            <table align="center">
                <tr>
                    <td><span>Name:</span></td>
                    <td><input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                        <span id="err_name"><?php echo $err_name; ?></span>
                    </td>
                </tr>



                <tr>
                    <td><br><span>Username:</span></td>
                    <td><br><input type="text" id="uname" name="uname" value="<?php echo $uname; ?>" placeholder="<?php echo $uname; ?>" readonly>
                        <span id="err_uname"><?php echo $err_uname; ?></span>
                    </td>
                </tr>

                <tr>
                    <td><br><span>Email:</span></td>
                    <td><br><input type="text" id="email" name="mail" value="<?php echo $mail; ?>" placeholder="<?php echo $mail; ?>">
                        <span id="err_email"><?php echo $err_mail; ?></span>
                    </td>
                </tr>



                <tr>
                    <td><br><span>Gender</span></td>
                    <td><br>: <input type="radio" id="gender1" name="gender" value="male">Male
                        <input type="radio" id="gender2" name="gender" value="female">Female
                        <span id="err_gender"><?php echo $err_gender; ?></span>
                    </td>
                </tr>



                <tr>
                    <td><br><span>Phone:</span></td>
                    <td><br><input type="text" id="contact_number" name="phone" value="<?php echo $phone; ?>" placeholder="<?php echo $phone; ?>">
                        <span id="err_contact_number"><?php echo $err_phone; ?></span>
                    </td>
                </tr>


                <tr>
                    <td colspan="3" align="center"><br><span><input type="submit" name="saveBtn" value="Save" class="btn btn-success"></span></td>
                </tr>



            </table>

        </form>
    </div>



</body>

<script src="JS/bachelorProfileView.js"></script>

</html>