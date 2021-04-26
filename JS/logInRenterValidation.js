var user_name = document.getElementById("log_in_user_name");
var pass = document.getElementById("log_in_pass");


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
    alert("validateLoginiscalling");
    refresh();
    var hasError = false;

    if (user_name.value == "") {
        document.getElementById("err_user_name").innerHTML = "*Name Required";
        hasError = true;
    }
    else if(user_name.value.length<2){
        document.getElementById("err_user_name").innerHTML="*User name must be more than 2 letters";
        hasError=true;
    }
    else if(hasWhiteSpace(user_name.value)){
        document.getElementById("err_user_name").innerHTML="*User must not have whitespace";
        hasError=true;
    }

    if (pass.value == "") {
        document.getElementById("err_pass").innerHTML = "*Password Required";
        hasError = true;

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

    return !hasError;
}

function refresh() {
    document.getElementById("err_user_name").innerHTML = "";
    document.getElementById("err_pass").innerHTML = "";
}
