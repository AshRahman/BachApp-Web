

<?php
include 'main_header.php';
include 'Controller/bachelorsignupValidation.php';


?>

<html>
<head>
</head>
<body>

        <fieldset  style="width:1316px;height:615px">
        <h1 align="center">Sign Up</h1>
        <h4 align="center"><b>"Where Searching House Becomes Easier"</b></h4><br><br>
            <form action="" onsubmit="return validate()" method="post" >
                <table align="center">
                    

                    <tr>
                        <td><span>Name:</span></td>
                        <td><input type="text" id="name" name="name" value="<?php echo $name; ?>" placeholder ="Name">
                            <span id="err_name"><?php echo $err_name;?></span></td>
                    </tr>



                    <tr>
                        <td><br><span>Username:</span></td>
                        <td><br><input type="text" id="uname" name="uname" onfocusout="checkUsername(this)" value="<?php echo $uname; ?>" placeholder ="User Name">
                            <span id="err_uname"><?php echo $err_uname;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Email:</span></td>
                        <td><br><input type="text" id="email" name="mail" value="<?php echo $mail; ?>" placeholder ="E-mail">
                        <span id="err_email"><?php echo $err_mail;?></span></td>
                    </tr>

                    <tr>
                        <td><br><span>Password:</span></td>
                        <td><br><input type="password" id="pass" name="pass" value="<?php echo $pass; ?>" placeholder ="Password">
                        <span id="err_pass"><?php echo $err_pass;?></span>
                        <span><?php echo $err_lpass;?></span>
                        <span><?php echo $err_upass;?></span>
                        <span><?php echo $err_spass;?></span>
                        <span><?php echo $err_npass;?></span></td>
                    </tr>
                    <tr>
                        <td><br><span>Confirm Password:</span></td>
                        <td><br><input type="password" id="conpass" name="cpass" value="<?php echo $cpass; ?>" placeholder ="Confirm Password">
                        <span id="err_conpass"><?php echo $err_cpass;?></span></td>
                    </tr>

                    <tr>
                    <td><br><span>Gender</span></td>
                    <td><br>: <input type="radio" id="gender1" name="gender" value="male">Male
                              <input type="radio" id="gender2" name="gender" value="female">Female
                          <span id="err_gender"><?php echo $err_gender;?></span>
                    </td>
                    </tr>



                    <tr>
                        <td><br><span>Phone:</span></td>
                        <td><br><input type="text" id="contact_number" name="phone" value="<?php echo $phone; ?>" placeholder ="Phone Number">
                        <span id="err_contact_number"><?php echo $err_phone;?></span></td>
                    </tr>
                    
                    
                    <tr>
                       <td colspan="3" align="center"><br><span><input type="submit"  name= "signupBtn" value="Sign Up" class="btn btn-success" ></span></td>
                    </tr>

                </table>

                
            </form> 
    </fieldset>   
    


<script>
function checkUsername(user_name){
    // alert(user_name.value);
  var username=user_name.value;
  var xHttp= new XMLHttpRequest();

  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        console.log(rs);
        if(rs==="true"){
            document.getElementById("err_uname").innerHTML="";
        }
        else{
            document.getElementById("err_uname").innerHTML="This username already exists!";
        }
      }
  };
  xHttp.open("GET","checkAjax.php?user_name="+username,true);
  xHttp.send();
}



</script>


</body>
<script src="JS/validateSignup.js"></script>

</html>