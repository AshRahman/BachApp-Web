var names=document.getElementById("name");
var user_name=document.getElementById("user_name");
var pass=document.getElementById("pass");
var gender=document.getElementById("gender");
var email=document.getElementById("email");
var contact_number=document.getElementById("contact_number");

function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
  }

  function hasSpecialChar(s) {
    if(s.indexOf('@') >= 0 ||s.indexOf("#") >=0){
        return true;
    }
    else{
        return false;
    }
  }

  //validate email check
  function validateEmail(email){
    var pos_at=email.indexOf("@");
    var pos_dot=email.indexOf(".",pos_at+1);
    if(pos_at<pos_dot){
        return true;
    }
    return false;
  }

 // checking lower and upper characters
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


function validate(){
    refresh();
    hasError= false;
    // Name Validation
    if(names.value==""){
       document.getElementById("err_name").innerHTML="*Name required";
       hasError=true; 
    }
     else if(names.value.length<4){
        document.getElementById("err_name").innerHTML="*Name must be more than 4 letters";
       hasError=true; 
    }
    else if(hasWhiteSpace(names.value)){
        document.getElementById("err_name").innerHTML="*Name Must not have whitespace";
        hasError=true;
    }

    // User name validation
    if(user_name.value==""){
        document.getElementById("err_user_name").innerHTML="*User name is required";
        hasError=true; 
    }
    else if(user_name.value.length<4){
        document.getElementById("err_user_name").innerHTML="*User name must be more than 4 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(user_name.value)){
        document.getElementById("err_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }


    //pass validation
    if(pass.value==""){
        document.getElementById("err_pass").innerHTML="*Password is required";
        hasError=true; 
    }
    else if(pass.value.length<8){
        document.getElementById("err_pass").innerHTML="*Password must be more than 8 characters";
        hasError=true;
    }
    else if(hasWhiteSpace(pass.value)){
       document.getElementById("err_pass").innerHTML="*Password cant contain whitespace";
       hasError=true; 
    }
    else if(!hasSpecialChar(pass.value)){
        document.getElementById("err_pass").innerHTML="*Password must contain # or @";
        hasError=true;
    }
    else if(!validatePass(pass.value)){
        document.getElementById("err_pass").innerHTML="*Password must contain upper and lower characters";
        hasError=true;
    }

    //gender checking
    if(!gender.checked){
        document.getElementById("err_gender").innerHTML="*Gender is required";
        hasError=true; 
    }

    //email checking
    if(email.value==""){
        document.getElementById("err_email").innerHTML="*Email is required";
        hasError=true; 
    }
    else if(!validateEmail(email.value)){
        document.getElementById("err_email").innerHTML="*Email is invalid";
        hasError=true;
    }
    
    //Phone number validation
    if(contact_number.value==""){
        document.getElementById("err_contact_number").innerHTML="*Contact number is required";
        hasError=true; 
    }
    else if(isNaN(contact_number.value)){
        document.getElementById("err_contact_number").innerHTML="*Contact should contain only number";
        asError=true; 
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
    document.getElementById("err_name").innerHTML="";
    document.getElementById("err_user_name").innerHTML="";
    document.getElementById("err_pass").innerHTML="";
    document.getElementById("err_gender").innerHTML="";
    document.getElementById("err_email").innerHTML="";
    document.getElementById("err_contact_number").innerHTML="";
}

function validateSearch(){
    refresh();
    hasError=false;
    if(user_name.value==""){
        document.getElementById("err_user_name").innerHTML="*User name is required";
        hasError=true; 
    }
    else if(user_name.value.length<4){
        document.getElementById("err_user_name").innerHTML="*User name must be more than 4 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(user_name.value)){
        document.getElementById("err_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }  
    
    return !hasError;
}

