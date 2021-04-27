<?php
include "Controller/adminaddbachelorValidation.php";
include "Controller/logoutValidation.php";
session_start();
if (!isset($_SESSION["user_type"])) {
    header("Location:userError.php");
}

?>




<html>
<link rel="stylesheet" href="homepage.css">
<head>
</head>

<body>
    <div class="right">
    <div class="topnav">
<a href=http://localhost/BachApp-Web/adminsearchbachelor.php>Back</a>
        <form action="" method="post">
        <p style="text-align:right;"><input type="submit" class="right my-font btn-sup" name="logoutBtn" value="Log-out"> </p>
        </form> 
        <!-- <form action="" method="post">
            <input type="submit" class="right my-font btn-sup" name="logoutBtn" value="Log-out">
        </form>

        <form action="homepageadmin.php">
            <input type="submit" class="backBtn" id="backBtn" name="backBtn" value="Go-Back">
        </form> -->
        <h1 style="text-align:center;color:orange">Edit Bachelor Profile</h1>
</div>

        <div id="add-div">
            <!-- <h1 align="center">Add Bachelor Profile</h1> -->

            <form action="" onsubmit="return validate()" method="post">
                <table align="center">
                    <tr>
                        <td><span>Name</span></td>
                    </tr>
                    <tr>

                        <td><input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                            <span id="err_name"><?php echo $err_name; ?></span></br>
                        </td>

                    </tr>

                    <tr>
                        <td><span>User Name</span></td>
                    </tr>
                    <tr>

                        <td><input type="text" id="user_name" name="user_name" onfocusout="checkUsername(this)" value="<?php echo $user_name; ?>" placeholder="<?php echo $user_name; ?>">
                            <span id="err_user_name"><?php echo $err_user_name; ?></span></br>
                        </td>

                    </tr>

                    <tr>
                        <td><span>Password</span></td>
                    </tr>
                    <tr>
                        <td><input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" placeholder="<?php echo $pass; ?>">
                            <span id="err_pass"><?php echo $err_pass; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Gender<span></td>
                    </tr>
                    <tr>
                        <td><input type="radio" id="gender1" name="gender" value="Male">Male
                            <input type="radio" id="gender2" name="gender" value="Female">Female
                            <span id="err_gender"><?php echo $err_gender; ?></span>
                        </td>

                    </tr>

                    <tr>
                        <td><span>E-mail</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" id="email" name="email" onfocusout="checkEmail(this)" value="<?php echo $email; ?>">
                            <span id="err_email"><?php echo $err_email; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><span>Contact Number</span></td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" id="contact_number" name="contact_number" value="<?php echo $contact_number; ?>" placeholder="<?php echo $contact_number; ?>">
                            <span id="err_contact_number"><?php echo $err_contact_number; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2"><input type="submit" class="add-Btn" id="add-Btn" name="add-Btn" value="Add"></td>

                    </tr>
                </table>
            </form>
        </div>
</body>
<script src="JS/adminValidation.js"> 
</script>

<script>
function checkUsername(user_name){
    //alert(user_name.value);
  var user_name=user_name.value;
  var xHttp= new XMLHttpRequest();
  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        if(rs==="true"){
            document.getElementById("err_user_name").innerHTML="";
        }
        else{
            document.getElementById("err_user_name").innerHTML="Not a valid user";
        }
      }
  };
  xHttp.open("GET","checkUsernameB.php?user_name="+user_name,true);
  xHttp.send();
}
function checkEmail(email){
    //alert(email.value);
    var email=email.value;
    var xHttp= new XMLHttpRequest();
    xHttp.onreadystatechange=function(){
        if(xHttp.readyState==4 && xHttp.status==200){
          var rs= xHttp.responseText;
      
          if(rs==="true"){
              document.getElementById("err_email").innerHTML="";
          }
          else{
              document.getElementById("err_email").innerHTML="Email already registered";
          }
        }
    };
    xHttp.open("GET","checkEmailB.php?email="+email,true);
    xHttp.send();
  }


  </script>

</html>