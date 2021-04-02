<?php

$nid="";
$err_nid="";

$email="";
$err_email="";

$fno="";
$err_fno="";

$floor="";
$err_floor="";

$ftype="";
$err_ftype="";

$gender="";
$err_gender="";

$rent="";
$err_rent="";

$saddress="";
$err_saddress="";

$city="";
$err_city="";

$city="";
$err_state="";

$state="";
$err_state="";

$postal="";
$err_postal="";
$err_postaln="";


function validateEmail($email){
    $pos_at=strpos($email,"@");
    $pos_dot=strpos($email,".",$pos_at+1);
    if($pos_at<$pos_dot){
        return true;
    }
    return false;
}




if($_SERVER["REQUEST_METHOD"] == "POST"){

    $saddress=$_POST["saddress"];
    $city=$_POST["city"];
    $state=$_POST["state"];
    $postal=$_POST["postal"];


    if(empty($_POST["nid"])){
        $err_nid="Please fill this field";
    }
    elseif(!is_numeric($_POST["nid"])){
        $err_nid="Please insert only numeric value";
    }

    if(empty($_POST["email"])){
        $err_email="Email Required";
    }
    elseif(!validateEmail($_POST["email"])){
        $err_email="Insert a valid email";
    }
    else{
        $email=htmlspecialchars($_POST["email"]);
    }

    if(empty($_POST["fno"])){
        $err_fno="Please fill this field";
    }
    elseif(!is_numeric($_POST["fno"])){
        $err_fno="Only Numeric values";
    }

    if(empty($_POST["floor"])){
        $err_floor="Please fill this field";
    }
    elseif(!is_numeric($_POST["floor"])){
        $err_floor="Only Numeric values";
    }

    if(!isset($_POST["ftype"])){
        $err_ftype= "Please answer this question";
    }
    else{
        $ftype=$_POST["ftype"];
    }

    if(!isset($_POST["gender"])){
        $err_gender="Gender must be selected";
    }
    else{
        $gender=$_POST["gender"];
    }

    if(empty($_POST["rent"])){
        $err_rent="Please fill this field";
    }
    elseif(!is_numeric($_POST["rent"])){
        $err_rent="Only Numeric values";
    }

    if(empty($_POST["saddress"])){
        $err_saddress="Please write your address";
    }
    
    
    if(empty($_POST["city"])){
        $err_city="Please enter your city name";
    }
    
    
    if(empty($_POST["state"])){
        $err_state="Please enter your state";
    }
    
    
    if(empty($_POST["postal"])){
        $err_postal="Please enter your postal";
    }
    elseif(!is_numeric($_POST["postal"])){
        $err_postaln="Postal code should contain only numeric values";
    }

   
}

?>

<html>
    <head>

    </head>
    <body>
    
        <div class="header"><span style="text-align:center my-font"></span>Appartment Finder</div>
        <div class="left-menu">
            <ul>
                <li class="plain-bullet my-font"><a href="">Home</a></li>
                <li class="plain-bullet my-font"><a href="">Dashboard</a></li>
                <li class="plain-bullet my-font"><a href="review.php">Review</a></li>
                <li class="plain-bullet my-font"><a href="">FAQ</a></li>
                <li class="plain-bullet my-font"><a href="">Logout</a></li>
            </ul>
        </div>
        <div class="add-div">
            <h1 align="center" style="font-family:cambria">Add Property</h1>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        <td><span class="my-font">NID</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nid" value="<?php echo $nid;?>">
                            <span class="err-msg"><?php echo $err_nid;?></span></br>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Email</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="email" value="<?php echo $email;?>" placeholder="Email">
                            <span class="err-msg"><?php echo $err_email;?></span></br>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Flat No.</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fno" value="<?php echo $fno;?>" placeholder="Flat">
                            <span class="err-msg"><?php echo $err_fno;?></span></br>
                    </tr>
                    <tr>
                        <td><span class="my-font">Floor</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="floor" value="<?php echo $floor;?>" placeholder="Floor">
                            <span class="err-msg"><?php echo $err_floor;?></span></br>
                    </tr>
                    <tr>
                        <td><span class="my-font">Flat Type</span></td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" name="ftype[]" value="Studio">Studio
                            <input type="checkbox" name="ftype[]" value="Single">Single
                            <input type="checkbox" name="ftype[]" value="Two Shared">Shared Two
                            <input type="checkbox" name="ftype[]" value="Three Shared">Shared three</br>
                            <span class="err-msg"><?php echo $err_ftype; ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Preferred Gender<span></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="gender" value="male">Male
                            <input type="radio" name="gender" value="female">Female
                            <input type="radio" name="gender" value="both">Both
                            <span class="err-msg"><?php echo $err_gender; ?></span></td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Rent</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="rent" value="<?php echo $rent;?>" placeholder="Rent">
                            <span class="err-msg"><?php echo $err_rent;?></span></br>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Address</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="saddress" value="<?php echo $saddress; ?>" placeholder="Street Address">
                            <span class="err-msg"><?php echo $err_saddress;?></span></br>

                            <input type="text" name="city" value="<?php echo $city; ?>" placeholder="City">
                            <span class="err-msg"><?php echo $err_city;?></span>
                            
                            <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State / Provience">
                            <span class="err-msg"><?php echo $err_state;?></span></br>

                            <input type="text" size="4" name="postal" value="<?php echo $postal; ?>" placeholder="Zip">
                            <span class="err-msg"><?php echo $err_postal;?></span>
                            <span class="err-msg"><?php echo $err_postaln;?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" class="my-font btn-sup" name="submit" value="Add Property">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>