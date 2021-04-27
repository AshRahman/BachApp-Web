<?php
    require_once "Controller/renterloginController.php";
    require_once "Controller/rentersignupController.php";
    
?>

<html>

<head></head>

<body>
    <div id="login-div">
        <h1 align="center">Login</h1>
        <h4 align="center">Where Searching House Becomes Easier</h4>

        <form action="" onsubmit="return validateLogin()" method="post">
            <table align="center">
    
                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="log_in_user_name" id="log_in_user_name" value="<?php echo $sign_in_user_name; ?>" placeholder="Username">
                        <span id="err_log_in_user_name"><?php echo $err_sign_in_user_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="log_in_pass" id="log_in_pass" value="<?php echo $sign_in_pass; ?>" placeholder="Password">
                        <span id="err_log_in_pass"><?php echo $err_sign_in_pass; ?></span>
                    </td>
                </tr>
               
                <tr>
                    <td colspan="2"><input type="submit" name="login" value="Login"></td>
                </tr>
                
            </table>
        </form>
        <tr>
                    <td>
                        <p>Don't have an account? <button onclick="showSignup()">Signup</button></p>
                    </td>
                </tr>
    </div>

<div id="signup-div" style="display:none;">
        <h1 align="center">Renter Sign Up</h1>
        <h4 align="center">Where Searching House Becomes Easier</h4>

        <form action="" onsubmit="return validateSignup()" method="post">
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
                    <td><input type="radio" name="gender" class="gender" value="male">Male
                        <input type="radio" name="gender" class="gender" value="female">Female
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


                <tr>
                    <td colspan="2"><input type="submit" name="signup" value="Create My Account"></td>
                </tr>
                
            </table>
        </form>
        
                <p align="center;">Already have an account? <button onclick="showLogin()">Login</button></p>
</div>
<script>
    function showLogin(){
        document.getElementById("login-div").style.display="block";
        document.getElementById("signup-div").style.display="none";
    }
    function showSignup(){
        document.getElementById("signup-div").style.display="block";
        document.getElementById("login-div").style.display="none";
    }
</script>

<script>
function checkUsername(user_name){
    // alert(user_name.value);
  var username=user_name.value;
  var xHttp= new XMLHttpRequest();
  xHttp.onreadystatechange=function(){
      if(xHttp.readyState==4 && xHttp.status==200){
        var rs= xHttp.responseText;
        // alert("eitar moddhe asche");
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






<script>
//LOGIN SIGNUP
var username = document.getElementById("log_in_user_name");
var password = document.getElementById("log_in_pass");


function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
}

function validatePass(s){
    hasUpper=false;
    hasLower=false;
  for(var i=0;i<s.length;i++){
      if(s[i]==s[i].toUpperCase()){
          hasUpper=true;
      }
      else{
          hasUpper=hasUpper;
      }
      if(s[i]==s[i].toLowerCase()){
          hasLower=true;
      }
      else{
          hasLower=hasLower;
      }
  }
  if(hasLower==false||hasUpper==false){
      return false;
  }
  else{
      return true;
  }
}


function validateLogin() {
    // alert("validateLoginiscalling");
    refresh();
    var hasError = false;

    if (username.value === "") {
        document.getElementById("err_log_in_user_name").innerHTML = "*Name Required";
        hasError = true;
    }
    else if(username.value.length<2){
        document.getElementById("err_log_in_user_name").innerHTML="*User name must be more than 2 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(username.value)){
        document.getElementById("err_log_in_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }

    if (password.value === "") {
        document.getElementById("err_log_in_pass").innerHTML = "*Password Required";
        hasError = true;

    }
    else if(password.value.length<2){
        document.getElementById("err_log_in_pass").innerHTML="*Password must be more than 2 characters";
        hasError=true;
    }
    else if(hasWhiteSpace(password.value)){
       document.getElementById("err_log_in_pass").innerHTML="*Password cant contain whitespace";
       hasError=true; 
    }
    else if(!validatePass(password.value)){
        document.getElementById("err_log_in_pass").innerHTML="*Password must contain upper and lower characters";
        hasError=true;
    }

    return !hasError;
}

function refresh() {
    document.getElementById("err_user_name").innerHTML = "";
    document.getElementById("err_log_in_pass").innerHTML = "";
}
    
</script>
<script>
//SIGNUP VALIDATION

    var your_name=document.getElementById("your_name");
var user_name=document.getElementById("user_name");
var pass=document.getElementById("pass");
var confirm_pass=document.getElementById("confirm_pass");
var gender=document.getElementsByClassName("gender");
var email=document.getElementById("email");
var contact_number=document.getElementById("contact_number");

function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
  }

  function hasAttherate(s) {
    return s.indexOf('@') >= 0;
  }


  function validateEmail(email){
    var pos_at=email.indexOf("@");
    var pos_dot=email.indexOf(".",pos_at+1);
    if(pos_at<pos_dot){
        return true;
    }
    return false;
  }

  function validatePass(s){
    hasUpper=false;
    hasLower=false;
  for(var i=0;i<s.length;i++){
      if(s[i]==s[i].toUpperCase()){
          hasUpper=true;
      }
      else{
          hasUpper=hasUpper;
      }
      if(s[i]==s[i].toLowerCase()){
          hasLower=true;
      }
      else{
          hasLower=hasLower;
      }
  }
  if(hasLower==false||hasUpper==false){
      return false;
  }
  else{
      return true;
  }
}


function validateSignup(){
    refresh();
    var hasError=false;
    
    if(your_name.value==""){
        document.getElementById("err_your_name").innerHTML="*Name Required";
        hasError=true;
        
    }
    else if(your_name.value.length<2){
        document.getElementById("err_your_name").innerHTML="*Name must be more than 2 letters";
       hasError=true; 
    }
    else if(hasWhiteSpace(your_name.value)){
        document.getElementById("err_your_name").innerHTML="*Name Must not have whitespace";
        hasError=true;
    }

    
    if(user_name.value==""){
        document.getElementById("err_user_name").innerHTML="*Username Required";
        hasError=true;
        
    }
    else if(user_name.value.length<2){
        document.getElementById("err_user_name").innerHTML="*User name must be more than 2 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(user_name.value)){
        document.getElementById("err_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }


    if(pass.value==""){
        document.getElementById("err_pass").innerHTML="*Password Required";
        hasError=true;
        
    }
    else if(pass.value.length<2){
        document.getElementById("err_pass").innerHTML="*Password must be more than 2 characters";
        hasError=true;
    }
    else if(hasWhiteSpace(pass.value)){
       document.getElementById("err_pass").innerHTML="*Password cant contain whitespace";
       hasError=true; 
    }
    else if(!validatePass(pass.value)){
        document.getElementById("err_pass").innerHTML="*Password must contain upper and lower characters";
        hasError=true;
    }


    if(confirm_pass.value==""){
        document.getElementById("err_confirm_pass").innerHTML="*Please confirm password";
        hasError=true;
        
    }
    else if(confirm_pass.value.length<2){
        document.getElementById("err_confirm_pass").innerHTML="*Password must be more than 2 characters";
        hasError=true;
    }
    else if(hasWhiteSpace(confirm_pass.value)){
       document.getElementById("err_confirm_pass").innerHTML="*Password cant contain whitespace";
       hasError=true; 
    }
    else if(!hasSpecialChar(confirm_pass.value)){
        document.getElementById("err_confirm_pass").innerHTML="*Password must contain # or @";
        hasError=true;
    }
    else if(!validatePass(confirm_pass.value)){
        document.getElementById("err_confirm_pass").innerHTML="*Password must contain upper and lower characters";
        hasError=true;
    }


    if(!gender.checked){
        document.getElementById("err_gender").innerHTML="*Gender is required";
        hasError=true; 
    }


    if(email.value==""){
        document.getElementById("err_email").innerHTML="*Email Required";
        hasError=true;   
    }
    else if(!hasAttherate(email.value)){
        document.getElementById("err_email").innerHTML="*Email must contain @";
        hasError=true;
    }
    else if(!validateEmail(email.value)){
        document.getElementById("err_email").innerHTML="*Email is invalid";
        hasError=true;
    }


    if(contact_number.value==""){
        document.getElementById("err_contact_number").innerHTML="*Phone Required";
        hasError=true;
    }
    else if(isNaN(contact_number.value)){
        document.getElementById("err_contact_number").innerHTML="*Contact should contain only number";
        hasError=true; 
    }
    else if(hasWhiteSpace(contact_number.value)){
        document.getElementById("err_contact_number").innerHTML="*Contact number cant contain whitespace";
        hasError=true; 
     }
    else if(contact_number.value.length<11){
        document.getElementById("err_contact_number").innerHTML="*Contact number must contain 11 digits";
        hasError=true;
    }

    return !hasError;
}

function refresh(){
    document.getElementById("err_your_name").innerHTML="";
    document.getElementById("err_user_name").innerHTML="";
    document.getElementById("err_pass").innerHTML="";
    document.getElementById("err_confirm_pass").innerHTML="";
    document.getElementById("err_gender").innerHTML="";
    document.getElementById("err_email").innerHTML="";
    document.getElementById("err_contact_number").innerHTML="";
}

</script>
<!-- <script src="JS/logInRenterValidation.js"></script>
<script src="JS/signuprenterValidation.js"></script> -->
</body>

</html>
