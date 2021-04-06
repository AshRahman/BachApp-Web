<?php
$name="";
$err_name="";
$email="";
$err_email="";
$cont="";
$err_cont="";
$err_contn="";
$acode="";
$err_acode="";
$err_acoden="";
$add="";
$err_add="";
$gender="";
$err_gender="";
$house="";
$err_house="";
$flat="";
$err_flat="";
$sadd="";
$err_sadd="";
$vac="";
$err_vac="";
$city="";
$err_city="";
$state="";
$err_state="";
$postal="";
$err_postal="";
$err_postaln="";


if(!isset($_POST["gender"])){
    $err_gender="[Preference must be selected]";
}
else{
    $gender=$_POST["gender"];
}
if(empty($_POST["cont"])){
    $err_cont="Please fill this field]";
    }    
    elseif(!is_numeric($_POST["cont"])){
        $err_contn="This field requires only numeric values";
    }


    if(empty($_POST["acode"])){
        $err_acode="Please fill this field";
        }    
        elseif(!is_numeric($_POST["acode"])){
            $err_acoden="This field requires only numeric values";
        }

if(empty($_POST["house"])){
    $err_house="[Please fill this field]";
}

if(empty($_POST["flat"])){
    $err_flat="[Please fill this field]";
}

if(empty($_POST["sadd"])){
    $err_sadd="[Please fill this field]";
}


if(empty($_POST["city"])){
    $err_city="Please enter your city name";
}


if(empty($_POST["state"])){
    $err_state="Please enter your state ]";
}


if(empty($_POST["postal"])){
    $err_postal="[Please enter your postal/ZIP code]";
}
elseif(!is_numeric($_POST["postal"])){
    $err_postaln="[Postal code should contain only numeric values]";
}
if(empty($_POST["vac"])){
    $err_vac="[Must select]";
}




if(empty($_POST["email"])){
        $err_email="[Email Required]";
    }
    elseif(!validateEmail($_POST["email"])){
        $err_email="[Insert a valid email]";
    }
    else{
        $email=htmlspecialchars($_POST["email"]);
    }


?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="/action_page.php">
  <fieldset style="width:800px"> 
  <legend><h1> Sub-Let request</h1></legend>
  
<body>
        <form action="" method="post">
            <table>
            <tr>
                    <td><span>Name</span></td>
                    <td>: <input type="text" name="name" placeholder ="Name">
                        <span><?php echo $err_name;?></span></td>
                </tr>
            <tr>
                    <td><span>Email</span></td>
                    <td>: <input type="text" name="email" placeholder ="Email">
                    <span><?php echo $err_email;?></span></td>
                </tr>
                <tr>
                        <td><span class="my-font">Phone</span></td>
                    
                    
                        <td>
                           : <input tpye="text" size="3" name="acode" value="<?php echo $acode;?>" placeholder="Code">
                           - <input type="text" name="cont" value="<?php echo $cont;?>" placeholder="Phone / Mobile"></br>
                           [ <span class="err-msg"><?php echo $err_acode;?></span>
                            <span class="err-msg"><?php echo $err_acoden;?></span>
                           - <span class="err-msg"><?php echo $err_cont;?></span>
                            <span class="err-msg"><?php echo $err_contn;?></span></br>
                        </td>
                        </tr>  
                    
                <tr>
                    <td><span>Address</span></td>
                    <td>
                     : <input type="text" name="House No." placeholder ="House No">
                       <span class="err-msg"><?php echo $err_house;?></span></br>
                     : <input type="text" name="Flat No." placeholder ="Flat No.">
                       <span class="err-msg"><?php echo $err_flat;?></span></br>
                     : <input type="text" name="StreetAddress" placeholder ="StreetAdress">
                       <span class="err-msg"><?php echo $err_sadd;?></span></br>
                     : <input type="text" name="City" placeholder ="City">
                     - <input type="text" name="State" placeholder ="State"></br>
                     [    <span class="err-msg"><?php echo $err_city?></span>
                     - <span class="err-msg"><?php echo $err_state;?></span></br>
                     : <input type="text" name="Postal/zip code" placeholder ="Postal/Zipcode">
                        <span class="err-msg"><?php echo $err_postal;?></span>
                            <span class="err-msg"><?php echo $err_postaln;?></span>

                    </td>
                    <span><?php echo $err_add;?></span></td>
                </tr>
                <tr>
                    <td><span>Prefered Gender</span></td>
                    <td>: <input type="radio" name="gender" value="male">Male
                          <input type="radio" name="gender" value="male">Female
                          <input type="radio" name="gender" value="male">Both
                          <span><?php echo $err_gender;?></span></td>
                </tr>
                <tr>
                    <td><span>Vacancy Type</span></td>
                    <td><select name ="Type">
                    <option disabled selected>Choose one</option>
                    <option>Single Room</option>
                    <option>Shared Room</option>
                    <span><?php echo $err_vac;?></span>
                    
                </tr>
                <tr>
                    <td><span>Description:</span></td>
                    <td><textarea name="tarea" rows="10" cols="70"></textarea><br>
                    

                    <tr>
                        <td colspan="2"><input type="submit" class="my-font btn-sup" name="Post" value="POST"></td>
                    </tr>
                    


            </table>


</body>
</html>