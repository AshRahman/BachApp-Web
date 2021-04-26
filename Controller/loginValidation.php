<?php
include  "Model/db_config.php";
$user_name = "";
$err_user_name = "";
$pass = "";
$err_pass = "";
$is_Admin = "";
$uid = "";

$hasError = false;
if (isset($_POST["signinBtn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["pass"])) {
            $err_pass = "Please enter your password";
            $hasError = true;
        } else {
            $pass = htmlspecialchars($_POST["pass"]);
        }
        if (empty($_POST["user_name"])) {
            $err_user_name = "Please enter your user name";
            $hasError = true;
        } else {
            $user_name = htmlspecialchars($_POST["user_name"]);
        }


        if (!$hasError) {
            $query = "SELECT * FROM login WHERE username='$user_name' AND password='$pass'";
            $result = get($query);

            if (count($result) > 0) {
                foreach ($result as $row) {
                    $uid = $row["id"];
                    $is_Admin = $row["isAdmin"];
                    $is_Landlord= $row["isLandlord"];
                }
                if ($is_Admin == 1) {
                    session_start();
                    $_SESSION["id"] = $uid;
                    $_SESSION["user_type"] = "Admin";
                    $_SESSION["user_name"] = $user_name;
                    $user_name = "";
                    $err_user_name = "";
                    $pass = "";
                    $err_pass = "";
                    header("Location:homepageadmin.php");
                } else {
                    if($is_Landlord==1){
                    //here we will further down in line add isLandlord check
                                session_start();
                                $_SESSION["id"] = $uid;
                                $_SESSION["user_type"] = "Landlord";
                                $_SESSION["user_name"] = $user_name;
                                $user_name = "";
                                $err_user_name = "";
                                $pass = "";
                                $err_pass = "";
                                header("Location:homepagelandlord.php");
                    }
                    else{
                        session_start();
                        $_SESSION["id"] = $uid;
                        $_SESSION["user_type"] = "Bachelor";
                        $_SESSION["user_name"] = $user_name;
                        $user_name = "";
                        $err_user_name = "";
                        $pass = "";
                        $err_pass = "";
                        header("Location:homepagetenant.php");

                    }
                }
            } else {
                echo "enter valid user name/Password";
            }
        }
    }
}
