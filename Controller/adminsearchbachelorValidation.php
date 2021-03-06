<?php
include  "Model/db_config.php";

$name = "";
$err_name = "";

$user_name = "";
$err_user_name = "";


$pass = "";

$err_pass = "";


$gender = "";
$err_gender = "";

$email = "";
$err_email = "";

$contact_number = "";
$err_contact_number = "";


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



$result = [];
if (isset($_POST["saveBtn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $err_name = "Please enter your first name";
            $hasError = true;
        } elseif (strlen($_POST["name"]) < 4) {
            $err_name = "First Name must be more than 4 characters";
            $hasError = true;
        } elseif (strpos($_POST["name"], " ")) {
            $err_name = "Whitespace is not allowed";
            $hasError = true;
        } else {
            $name = htmlspecialchars($_POST["name"]);
        }

        if (empty($_POST["user_name"])) {
            $err_user_name = "Please enter your user name";
            $hasError = true;
        } elseif (strlen($_POST["user_name"]) < 4) {
            $err_user_name = "First Name must be more than 4 characters";
            $hasError = true;
        } elseif (strpos($_POST["user_name"], " ")) {
            $err_user_name = "Whitespace is not allowed";
            $hasError = true;
        } else {
            $user_name = htmlspecialchars($_POST["user_name"]);
        }

        if (empty($_POST["pass"])) {
            $err_pass = "Please enter your password";
            $hasError = true;
        } else {
            $pass = htmlspecialchars($_POST["pass"]);
        }





        if (!empty($_POST["pass"])) {
            if (!validatePassword($_POST["pass"])) {
                $err_pass = "Password must contain 1 upper and 1 lower case letter";
                $hasError = true;
            } elseif (strlen($_POST["pass"]) < 8) {
                $err_pass = "Password must be atleast 8 characters long";
                $hasError = true;
            } elseif (strpos($_POST["pass"], " ")) {
                $err_pass = "Whitespace is not allowed";
                $hasError = true;
            } else {
                $pass = $_POST["pass"];
            }
        }


        if (!isset($_POST["gender"])) {
            $err_gender = "Gender must be selected";
            $hasError = true;
        } else {
            $gender = $_POST["gender"];
        }

        if (empty($_POST["email"])) {
            $err_email = "Email Required";
            $hasError = true;
        } elseif (!strpos($_POST["email"], "@")) {
            $err_email = "Add @";
            $has_error = true;
        } elseif (!validateEmail($_POST["email"])) {
            $err_email = "Insert a valid email";
            $hasError = true;
        } else {
            $email = htmlspecialchars($_POST["email"]);
        }


        if (empty($_POST["contact_number"])) {
            $err_contact_number = "Please fill this field";
            $hasError = true;
        } elseif (!is_numeric($_POST["contact_number"])) {
            $err_contact_number = "This field requires only numeric values";
            $hasError = true;
        } else {
            $contact_number = htmlspecialchars($_POST["contact_number"]);
        }



        if (!$hasError) {
            $query = "UPDATE tenant SET username='$user_name', name='$name',password='$pass', gender='$gender',email='$email',phone='$contact_number' WHERE username='$user_name'";
            execute($query);
        }
    }
}
$hasErrorsearch = false;

if (isset($_POST["searchBtn"])) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["user_name"])) {
            $err_user_name = "Please enter your user name";
            $hasErrorsearch = true;
        } elseif (strlen($_POST["user_name"]) < 4) {
            $err_user_name = "First Name must be more than 4 characters";
            $hasErrorsearch = true;
        } elseif (strpos($_POST["user_name"], " ")) {
            $err_user_name = "Whitespace is not allowed";
            $hasErrorsearch = true;
        } else {
            $user_name = htmlspecialchars($_POST["user_name"]);
        }
        if (!$hasErrorsearch) {
            $query = "SELECT * from tenant where username='$user_name'";
            $result = get($query);
            foreach ($result as $rows) {

                $name = $rows["name"];
                $user_name = $rows["username"];
                $pass = $rows["password"];
                $gender = $rows["gender"];
                $email = $rows["email"];
                $contact_number = $rows["phone"];
            }
        }
    }
}

if (isset($_POST["deleteBtn"])) {
    if (empty($_POST["user_name"])) {
        $err_user_name = "Please enter your user name";
        $hasErrorsearch = true;
    } elseif (strlen($_POST["user_name"]) < 4) {
        $err_user_name = "First Name must be more than 4 characters";
        $hasErrorsearch = true;
    } elseif (strpos($_POST["user_name"], " ")) {
        $err_user_name = "Whitespace is not allowed";
        $hasErrorsearch = true;
    } else {
        $user_name = htmlspecialchars($_POST["user_name"]);
    }
    $del_query = "DELETE FROM tenant WHERE username='$user_name'";
    echo $user_name;
    execute($del_query);
    echo "deleted successfully";
}
