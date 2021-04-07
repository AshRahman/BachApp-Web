<?php
    include "Controller/rentersignupController.php";
?>

<html>

<head></head>

<body>
    <div class="signup-div">
        <h1 align="center">Renter Sign Up</h1>
        <h4 align="center">Where Searching House Becomes Easier</h4>

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
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                        <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="confirm_pass">
                        <span><?php echo $err_confirm_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <span><?php echo $err_gender; ?></span></td>
                    
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
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>" placeholder="Phone / Mobile">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Date Of Birth</span></td>
                </tr>
                <tr>
                    <td>
                        <select name="day">
                            <option disabled selected>Day</option>
                            <?php
                            for ($i = 1; $i <= 31; $i++) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select>

                        <select name="month">
                            <option disabled selected>Month</option>
                            <?php
                            $months = array("Jan", "Feb", "Mar", "April", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                            for ($i = 0; $i < count($months); $i++) {
                                echo "<option>$months[$i]</option>";
                            }
                            ?>
                        </select>

                        <select name="year">
                            <option disabled selected>Year</option>
                            <?php
                            for ($i = 1970; $i <= 2000; $i++) {
                                echo "<option>$i</option>";
                            }
                            ?>
                        </select><?php echo $err_dob; ?><br>
                    </td>
                </tr>


                <tr>
                    <td colspan="2"><input type="submit" class="my-font btn-sup" name="signup" value="Create My Account"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>