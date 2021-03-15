<?php

$unamef = "";
$unamel = "";
$err_unamef = "";
$err_unamel = "";

$pass = "";
$cpass = "";
$err_pass = "";
$err_cpass = "";

$gender = "";
$err_gender = "";

$saddress = "";
$err_saddress = "";

$city = "";
$err_city = "";

$state = "";
$err_state = "";

$postal = "";
$err_postal = "";
$err_postaln = "";

$country = "";
$err_country = "";

$email = "";
$err_email = "";

$cont = "";
$err_cont = "";
$err_contn = "";

$acode = "";
$err_acode = "";
$err_acoden = "";

$dob = "";
$err_dob = "";

$hasError = false;



function validatePassword($pass)
{
    $hasUpper = false;
    $hasLower = false;
    for ($i = 0; $i < strlen($pass); $i++) {
        if (ctype_upper($pass[$i])) {
            $hasUpper = true;
        } else {
            $hasUpper = $hasUpper;
        }
        if (ctype_lower($pass[$i])) {
            $hasLower = true;
        } else {
            $hasLower = $hasLower;
        }
    }
    if ($hasLower == false || $hasUpper == false) {
        return false;
    } else {
        return true;
    }
}


function validateEmail($email)
{
    $pos_at = strpos($email, "@");
    $pos_dot = strpos($email, ".", $pos_at + 1);
    if ($pos_at < $pos_dot) {
        return true;
    }
    return false;
}



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $unamef = $_POST["unamef"];
    $unamel = $_POST["unamel"];
    $saddress = $_POST["saddress"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $postal = $_POST["postal"];
    $acode = $_POST["acode"];
    $cont = $_POST["cont"];



    if (empty($unamef)) {
        $err_unamef = "Please enter your first name";
        $hasError = true;
    }
    elseif (strlen($_POST["unamef"]) < 4) {
        $err_unamef = "First Name must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["unamef"], " ")) {
        $err_unamef = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $unamef=htmlspecialchars($_POST["unamef"]);
    }


    if (empty($unamel)) {
        $err_unamel = "Please enter your last name";
        $hasError = true;
    }
    elseif (strlen($_POST["unamel"]) < 4) {
        $err_unamel = "Last Name must be more than 4 characters";
        $hasError = true;
    } 
    elseif (strpos($_POST["unamel"], " ")) {
        $err_unamel = "Whitespace is not allowed";
        $hasError = true;
    }
    else{
        $unamel=htmlspecialchars($_POST["unamel"]);
    }


    if (empty($_POST["pass"])) {
        $err_pass = "Please enter your password";
        $hasError = true;
    }
    else{
        $pass=htmlspecialchars($_POST["pass"]);
    }

    if (empty($_POST["cpass"])) {
        $err_pass = "Please enter confirm password";
        $hasError = true;
    }
    else{
        $cpass=htmlspecialchars($_POST["cpass"]);
    }




    if (!empty($_POST["pass"]) && !empty($_POST["cpass"])) {
        if (!validatePassword($_POST["pass"])) {
            $err_pass = "Password must contain 1 upper and 1 lower case letter";
            $hasError = true;
        } 
        elseif (strlen($_POST["pass"]) < 8) {
            $err_pass = "Password must be atleast 8 characters long";
            $hasError = true;
        } 
        elseif (strpos($_POST["pass"], " ")) {
            $err_pass = "Whitespace is not allowed";
            $hasError = true;
        } 
        elseif ($_POST["cpass"] !== $_POST["pass"]) {
            $err_cpass = "Password does not match";
            $hasError = true;
        } 
        else {
            $pass = $_POST["pass"];
        }
    }


    if (!isset($_POST["gender"])) {
        $err_gender = "Gender must be selected";
        $hasError = true;
    } 
    else {
        $gender = $_POST["gender"];
    }



    if (empty($_POST["saddress"])) {
        $err_saddress = "Please write your address";
        $hasError = true;
    }
    else{
        $saddress=htmlspecialchars($_POST["saddress"]);
    }
  


    if (empty($_POST["city"])) {
        $err_city = "Please enter your city name";
        $hasError = true;
    }
    else{
        $city=htmlspecialchars($_POST["city"]);
    }


    if (empty($_POST["state"])) {
        $err_state = "Please enter your state";
        $hasError = true;
    }
    else{
        $state=htmlspecialchars($_POST["state"]);
    }


    if (empty($_POST["postal"])) {
        $err_postal = "Please enter your postal";
        $hasError = true;
    } 
    elseif (!is_numeric($_POST["postal"])) {
        $err_postaln = "Postal code should contain only numeric values";
        $hasError = true;
    }
    else{
        $postal=htmlspecialchars($_POST["postal"]);
    }


    if (!isset($_POST["country"])) {
        $err_country = "Please select your country";
        $hasError = true;
    }


    if (empty($_POST["email"])) {
        $err_email = "Email Required";
        $hasError = true;
    }
    elseif(!strpos($_POST["email"],"@")){
        $err_email="Add @";
        $has_error=true;

    }
    elseif (!validateEmail($_POST["email"])) {
        $err_email = "Insert a valid email";
        $hasError = true;
    }
    else {
        $email = htmlspecialchars($_POST["email"]);
    }


    if (empty($_POST["cont"])) {
        $err_cont = "Please fill this field";
        $hasError = true;
    } 
    elseif (!is_numeric($_POST["cont"])) {
        $err_contn = "This field requires only numeric values";
        $hasError = true;
    }
    else{
        $cont=htmlspecialchars($_POST["cont"]);
    }


    if (empty($_POST["acode"])) {
        $err_acode = "Please fill this field";
        $hasError = true;
    } 
    elseif (!is_numeric($_POST["acode"])) {
        $err_acoden = "This field requires only numeric values";
        $hasError = true;
    }
    else{
        $acode=htmlspecialchars($_POST["acode"]);
    }

    if (!isset($_POST["day"]) || !isset($_POST["month"]) || !isset($_POST["year"])) {
        $err_dob = "Date Of Birth Required";
        $hasError = true;
    } 
    else {
        $dob = $_POST["day"] . "-" . $_POST["month"] . "-" . $_POST["year"];
    }

    if ($hasError === false) {
        header("Location:http://localhost/BachApp-Web/renteradvertisement.php");
    }
}

?>



<html>

<head>
    <style>
        body {
            background-color: rgb(240, 240, 240);
        }

        .signup-div {
            border: 1px solid rgb(245, 245, 245);
            margin: auto;
            width: 30%;
            margin-top: 5%;
            background-color: rgb(255, 255, 255);
            padding: 20px 0px 20px 0px;

        }

        .my-font {
            font-size: 22px;
            font-family: consolas;
        }

        .btn-sup {
            background-color: rgb(112, 191, 65);
            border: none;
            color: white;
            width: 100%;
            border-radius: 3px;
            padding: 5px;
        }

        .btn-sup:hover {
            background-color: rgb(100, 170, 40);
        }

        .btn-sup:active {
            background-color: green;
        }

        .err-msg {
            color: red;
            font-size: 20px;
            font-family: consolas;


        }
    </style>
</head>

<body>
    <div class="signup-div">
        <h1 align="center" style="font-family:cambria">Renter Signup</h1>
        <h4 align="center" style="font-family:cambria">Where Searching House Becomes Easier</h4>

        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><span class="my-font">FullName</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="unamef" value="<?php echo $unamef; ?>" placeholder="First Name">
                        <span class="err-msg"><?php echo $err_unamef; ?></span></br>

                        <input type="text" name="unamel" value="<?php echo $unamel; ?>" placeholder="Last Name">
                        <span class="err-msg"><?php echo $err_unamel; ?></span>

                    </td>

                </tr>
                <tr>
                    <td><span class="my-font">Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="Password">
                        <span class="err-msg"><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="my-font">Confirm Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="cpass">
                        <span class="err-msg"><?php echo $err_cpass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="my-font">Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <span class="err-msg"><?php echo $err_gender; ?></span></td>
                    
                </tr>
                <tr>
                    <td><span class="my-font">Address</span></td>
                </tr>
                <tr>
                    <td><input type="text" name="saddress" value="<?php echo $saddress; ?>" placeholder="Street Address">
                        <span class="err-msg"><?php echo $err_saddress; ?></span></br>

                        <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City">
                        <span class="err-msg"><?php echo $err_city ?></span>

                        <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State / Provience">
                        <span class="err-msg"><?php echo $err_state; ?></span></br>

                        <input type="text" size="4" name="postal" value="<?php echo $postal; ?>" placeholder="Zip">
                        <span class="err-msg"><?php echo $err_postal; ?></span>
                        <span class="err-msg"><?php echo $err_postaln; ?></span>

                        <select name="country">
                            <option disabled selected>Choose one</option>
                            <option>Afghanistan</option>
                            <option>Albania</option>
                            <option>Australia</option>
                            <option>Bahamas</option>
                            <option>Bangladesh</option>
                            <option>Belgium</option>
                            <option>Brazil</option>
                            <option>France</option>
                            <option>Canada</option>USA</option>
                        </select>
                        <span class="err-msg"><?php echo $err_country; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="my-font">E-mail</span></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" value="<?php echo $email; ?>">
                        <span class="err-msg"><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="my-font">Contact Number</span></td>
                </tr>
                <tr>
                    <td><input tpye="text" size="3" name="acode" value="<?php echo $acode; ?>" placeholder="Code">
                        <span class="err-msg"><?php echo $err_acode; ?></span>
                        <span class="err-msg"><?php echo $err_acoden; ?></span>


                        <input type="text" name="cont" value="<?php echo $cont; ?>" placeholder="Phone / Mobile">
                        <span class="err-msg"><?php echo $err_cont; ?></span>
                        <span class="err-msg"><?php echo $err_contn; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span class="my-font">Date Of Birth</span></td>
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
                    <td colspan="2"><input type="submit" class="my-font btn-sup" name="submit" value="Create My Account"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>