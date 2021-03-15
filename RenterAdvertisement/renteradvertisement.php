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

$hasError=false;


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
        $hasError=true;
    }
    elseif(!is_numeric($_POST["nid"])){
        $err_nid="Please insert only numeric value";
        $hasError=true;
    }
    else{
        $nid=$_POST["nid"];
    }

    if(empty($_POST["email"])){
        $err_email="Email Required";
        $hasError=true;
    }
    elseif(!validateEmail($_POST["email"])){
        $err_email="Insert a valid email";
        $hasError=true;
    }
    else{
        $email=htmlspecialchars($_POST["email"]);
    }

    if(empty($_POST["fno"])){
        $err_fno="Please fill this field";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["fno"])){
        $err_fno="Only Numeric values";
        $hasError=true;
    }
    else{
        $fno=$_POST["fno"];
    }

    if(empty($_POST["floor"])){
        $err_floor="Please fill this field";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["floor"])){
        $err_floor="Only Numeric values";
        $hasError=true;
    }
    else{
        $floor=$_POST["floor"];
    }

    if(!isset($_POST["ftype"])){
        $err_ftype= "Please answer this question";
        $hasError=true;
    }
    else{
        $ftype=$_POST["ftype"];
    }

    if(!isset($_POST["gender"])){
        $err_gender="Gender must be selected";
        $hasError=true;
    }
    else{
        $gender=$_POST["gender"];
    }

    if(empty($_POST["rent"])){
        $err_rent="Please fill this field";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["rent"])){
        $err_rent="Only Numeric values";
        $hasError=true;
    }
    else{
        $rent=$_POST["rent"];
    }

    if(empty($_POST["saddress"])){
        $err_saddress="Please write your address";
        $hasError=true;
    }
    else{
        $saddress=$_POST["saddress"];
    }
    
    
    if(empty($_POST["city"])){
        $err_city="Please enter your city name";
        $hasError=true;
    }
    else{
        $city=$_POST["city"];
    }
    
    
    if(empty($_POST["state"])){
        $err_state="Please enter your state";
        $hasError=true;
    }
    else{
        $state=$_POST["state"];
    }
    
    
    if(empty($_POST["postal"])){
        $err_postal="Please enter your postal";
        $hasError=true;
    }
    elseif(!is_numeric($_POST["postal"])){
        $err_postaln="Postal code should contain only numeric values";
        $hasError=true;
    }
    else{
        $postal=$_POST["postal"];
    }

    if($hasError===false){
        header("Location:review.php");
       
        
    }

   
}

?>

<html>
    <head>
    <style>
        body{
            background-color:rgb(230,230,230);
        }

        .add-div{
            border:1px solid rgb(245,245,245);
            margin:auto;
            width:30%;
            margin-top:5%;
            background-color:rgb(255,255,255);
            padding:20px 0px 20px 0px;
            padding:20px;

        }

        .my-font{
                font-size:22px;
                font-family:consolas;
            }

        .btn-sup{
            background-color:rgb(112,191,65);
            border:none;
            color:white;
            width:100%;
            border-radius:3px;
            padding:5px;
            }
        .btn-sup:hover{
            background-color:rgb(100,170,40);
            }
        .btn-sup:active{
            background-color:green;
            }

        .left-menu{
            width:180px;
            
            border:1px solid rgb(40,174,252);
            /*background-color:rgb(255,255,255);*/
            height:100%;
            top:0;
            left:0;
            position:fixed;
            padding-top:30px;
            }

        .header{
            height:40px;
            background-color:rgb(40,174,252);
            position:fixed;
            top:0;
            left:0;
            width:100%; 
            color:white;
            text-align:center;
        }
        a{
            text-decoration:none;
            color:black;
            font-size:20px;
            font-family:consolas;
        }
        
        .plain-bullet{
            list-style-type:none;
        }

        .err-msg{
            color:red;
            font-size:14px;
            font-family:consolas;

        }
        

        
    </style>
    </head>
    <body>
        <div class="header"><span style="text-align:center my-font"></span>Apartment Finder</div>
        <div class="left-menu">
            <ul>
                <li class="plain-bullet my-font"><a href="">Home</a></li>
                <li class="plain-bullet my-font"><a href="card.php">Apartments</a></li>
                <li class="plain-bullet my-font"><a href="review.php">Review</a></li>
                <li class="plain-bullet my-font"><a href="signin.php">Logout</a></li>
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