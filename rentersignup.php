<?php
    require_once "Controller/rentersignupController.php";
    
?>

<html>

<head></head>

<body>
    <div class="signup-div">
        <h1 align="center">Renter Sign Up</h1>
        <h4 align="center">Where Searching House Becomes Easier</h4>

        <form action="" onsubmit="return validate()" method="post">
            <table align="center">
                <tr>
                    <td><span>Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="your_name" id="your_name" value="<?php echo $your_name; ?>" placeholder="Your Name">
                        <span id="err_your_name"><?php echo $err_your_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="user_name" id="user_name" onfocusout="checkUsername(this)" value="<?php echo $user_name; ?>" placeholder="Username">
                        <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" id="pass"  min="4" max="5" value="<?php echo $pass; ?>" placeholder="Password">
                        <span id="err_pass"><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" id="confirm_pass" name="confirm_pass">
                        <span id="err_confirm_pass"><?php echo $err_confirm_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" id="gender" value="male">Male
                        <input type="radio" name="gender" id="gender" value="female">Female
                        <span id="err_gender"><?php echo $err_gender; ?></span>
                    </td>

                </tr>

                <tr>
                    <td><span>E-mail</span></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" id="email" value="<?php echo $email; ?>">
                        <span id="err_email"><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Contact Number</span></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact_number" id="contact_number" onfocusout="checkPhone(this)" value="<?php echo $contact_number; ?>"
                            placeholder="Phone / Mobile">
                        <span id="err_contact_number"><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
                <!-- <tr>
                    <td><span>Date Of Birth</span></td>
                </tr> -->
                <!-- <tr>
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
                </tr> -->


                <tr>
                    <td colspan="2"><input type="submit" name="signup" value="Create My Account"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
<script>
function checkUsername(user_name){
    //alert(user_name.value);
  var username=user_name.value;
  var xHttp= new XMLHttpRequest();
  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        if(rs==="true"){
            document.getElementById("err_user_name").innerHTML="";
        }
        else{
            document.getElementById("err_user_name").innerHTML="This username already exists!";
        }
      }
  };
  xHttp.open("GET","checkUsername.php?user_name="+username,true);
  xHttp.send();
}

function checkPhone(contact_number){
    //alert(user_name.value);
  var contactnumber=contact_number.value;
  var xHttp= new XMLHttpRequest();
  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        if(rs==="true"){
            document.getElementById("err_contact_number").innerHTML="";
        }
        else{
            document.getElementById("err_contact_number").innerHTML="This number is taken!";
        }
      }
  };
  xHttp.open("GET","checkPhone.php?contact_number="+contactnumber,true);
  xHttp.send();
}
  

</script> 
<script src="JS/signuprenterValidation.js"></script>
</html>