var names = document.getElementById("name");
// var lname = document.getElementById("lname");
var uname = document.getElementById("uname");
var pass = document.getElementById("pass");
var conpass = document.getElementById("conpass");
var gender1= document.getElementById("gender1");
var gender2 = document.getElementById("gender2");
var email = document.getElementById("email");
var contact_number = document.getElementById("contact_number");

//email @ checking function
function hasAttherate(s) {
  return s.indexOf("@") >= 0;
}

function hasWhiteSpace(s) {
  return s.indexOf(' ') >= 0;
}
//special character checking function
function hasSpecialChar(s) {
  if (s.indexOf("?") >= 0 || s.indexOf("#") >= 0) {
    return true;
  } else {
    return false;
  }
}
// checking lower and upper characters
function validatePass(s){
  hasUpper = false;
  hasLower = false;
  for (var i = 0; i < s.length; i++) {
    if (s[i] == s[i].toUpperCase()) {
      hasUpper = true;
    } else {
      hasUpper = hasUpper;
    }
    if (s[i] == s[i].toLowerCase()) {
      hasLower = true;
    } else {
      hasLower = hasLower;
    }
  }
  if (hasLower == false || hasUpper == false) {
    return false;
  } else {
    return true;
  }
}

function hasNumber(s){
   hasNumbers=false;
  for (var i = 0; i < s.length; i++) {
    if (isNaN(s[i])) {
      hasNumbers = true;
    } else {
      hasNumbers = hasNumbers;
    }

  }
}

//validate function

function validate() {
  hasError = false;
  refresh();
    //user name checking
    if (uname.value == "") {
      document.getElementById("err_uname").innerHTML = "*Enter Username";
      hasError = true;
    } 
    else if (uname.value.length < 6) {
      document.getElementById("err_uname").innerHTML ="*Username must contain more than 6 characters";
      hasError = true;
    } 
    else if (hasWhiteSpace(uname.value)) {
      document.getElementById("err_uname").innerHTML ="*Username must not have whitespace";
      hasError = true;
    }
    //name  checking
    if (names.value == "") {
      document.getElementById("err_name").innerHTML = "*Name required";
      hasError = true;
    } 

    //email checking
    if (email.value == "") {
      document.getElementById("err_email").innerHTML = "*Email is required";
      hasError = true;
    } 
    else if (!hasAttherate(email.value)) {
      document.getElementById("err_email").innerHTML = "*Email must contain @";
      hasError = true;
    }

    //pass checking
    if (pass.value == "") {
      document.getElementById("err_pass").innerHTML = "*Password is required";
      hasError = true;
    } 
    else if (pass.value.length < 8) {
      document.getElementById("err_pass").innerHTML ="*Password must contain more than 8 characters";
      hasError = true;
    } 
    else if (hasWhiteSpace(pass.value)) {
      document.getElementById("err_pass").innerHTML ="*Password must not have whitespace";
      hasError = true;
    } 
    
    else if (!hasSpecialChar(pass.value)) {
      document.getElementById("err_pass").innerHTML ="*Password must contain # or ?";
      hasError = true;
    } 
    // else if (!validatePass(pass.value)) {
    //   document.getElementById("err_pass").innerHTML ="*Password must contain upper and lower characters";
    //   hasError = true;
    // } 
    else if (hasNumber(pass.value)) {
      document.getElementById("err_pass").innerHTML ="*Password should contain number";
      hasError = true;
    }
    else if (!validatePass(pass.value)) {
      document.getElementById("err_pass").innerHTML ="*Password must contain upper and lower characters";
      hasError = true;
    } 

    //confirm pass checking
    if (conpass.value == "") {
      document.getElementById("err_conpass").innerHTML ="*Confirm Password is required";
      hasError = true;
    } 
    else if (conpass.value !== pass.value) {
      document.getElementById("err_conpass").innerHTML = "*Password mismatched";
      hasError = true;
    }

    //gender checking
    if (gender1.checked ) {
     // document.getElementById("err_gender").innerHTML = "*Gender is required";
      hasError = false;
    }
    else if (gender2.checked ) {
      // document.getElementById("err_gender").innerHTML = "*Gender is required";
       hasError = false;
     }
     else{
      document.getElementById("err_gender").innerHTML = "*Gender is required";
      hasError = true;
     }
    

    //Phone number validation

    if (contact_number.value == "") {
      document.getElementById("err_contact_number").innerHTML ="*Contact number is required";
      hasError = true;
    } 
    else if (isNaN(contact_number.value)) {
      document.getElementById("err_contact_number").innerHTML ="*Phone number should not contain character";
      hasError = true;
    } 
    else if (contact_number.value.length < 11 || contact_number.value.length > 11) {
      document.getElementById("err_contact_number").innerHTML ="*Phone number should not contain more or less than 11 digits";
      hasError = true;
    }

  return !hasError;
}

function refresh() {
  document.getElementById("err_name").innerHTML = "";
  // document.getElementById("err_lname").innerHTML = "";
  document.getElementById("err_uname").innerHTML = "";
  document.getElementById("err_pass").innerHTML = "";
  document.getElementById("err_conpass").innerHTML = "";
  document.getElementById("err_gender").innerHTML = "";
  document.getElementById("err_email").innerHTML = "";
  document.getElementById("err_contact_number").innerHTML = "";
}
