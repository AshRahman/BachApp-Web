var your_name = document.getElementById("your_name");
var user_name = document.getElementById("user_name");
var pass = document.getElementById("pass");
var confirm_pass = document.getElementById("confirm_pass");
var gender1 = document.getElementById("gender1");
var gender2 = document.getElementById("gender2");
var email = document.getElementById("email");
var contact_number = document.getElementById("contact_number");

function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
}

function hasAttherate(s) {
    return s.indexOf('@') >= 0;
}

//   function hasSpecialChar(s) {
//     if(s.indexOf('@') >= 0 ||s.indexOf("#") >=0){
//         return true;
//     }
//     else{
//         return false;
//     }
//   }

function validateEmail(email) {
    var pos_at = email.indexOf("@");
    var pos_dot = email.indexOf(".", pos_at + 1);
    if (pos_at < pos_dot) {
        return true;
    }
    return false;
}

function validatePass(s) {
    hasUpper = false;
    hasLower = false;
    for (var i = 0; i < s.length; i++) {
        if (s[i] == s[i].toUpperCase()) {
            hasUpper = true;
        }
        else {
            hasUpper = hasUpper;
        }
        if (s[i] == s[i].toLowerCase()) {
            hasLower = true;
        }
        else {
            hasLower = hasLower;
        }
    }
    if (hasLower == false || hasUpper == false) {
        return false;
    }
    else {
        return true;
    }
}


function validateSignup() {
    refresh();
    var hasError = false;

    if (your_name.value == "") {
        document.getElementById("err_your_name").innerHTML = "*Name Required";
        hasError = true;

    }
    else if (your_name.value.length < 2) {
        document.getElementById("err_your_name").innerHTML = "*Name must be more than 2 letters";
        hasError = true;
    }
    else if (hasWhiteSpace(your_name.value)) {
        document.getElementById("err_your_name").innerHTML = "*Name Must not have whitespace";
        hasError = true;
    }


    if (user_name.value == "") {
        document.getElementById("err_user_name").innerHTML = "*Username Required";
        hasError = true;

    }
    else if (user_name.value.length < 2) {
        document.getElementById("err_user_name").innerHTML = "*User name must be more than 2 letters";
        hasError = true;
    }
    else if (hasWhiteSpace(user_name.value)) {
        document.getElementById("err_user_name").innerHTML = "*User must not have whitespace";
        hasError = true;
    }


    if (pass.value == "") {
        document.getElementById("err_pass").innerHTML = "*Password Required";
        hasError = true;

    }
    else if (pass.value.length < 2) {
        document.getElementById("err_pass").innerHTML = "*Password must be more than 2 characters";
        hasError = true;
    }
    else if (hasWhiteSpace(pass.value)) {
        document.getElementById("err_pass").innerHTML = "*Password cant contain whitespace";
        hasError = true;
    }
    else if (!validatePass(pass.value)) {
        document.getElementById("err_pass").innerHTML = "*Password must contain upper and lower characters";
        hasError = true;
    }


    if (confirm_pass.value == "") {
        document.getElementById("err_confirm_pass").innerHTML = "*Please confirm password";
        hasError = true;

    }
    else if (confirm_pass.value.length < 2) {
        document.getElementById("err_confirm_pass").innerHTML = "*Password must be more than 2 characters";
        hasError = true;
    }
    else if (hasWhiteSpace(confirm_pass.value)) {
        document.getElementById("err_confirm_pass").innerHTML = "*Password cant contain whitespace";
        hasError = true;
    }

    else if (!validatePass(confirm_pass.value)) {
        document.getElementById("err_confirm_pass").innerHTML = "*Password must contain upper and lower characters";
        hasError = true;
    }


    if (!gender1.checked && !gender2.checked) {
        document.getElementById("err_gender").innerHTML = "*Gender is required";
        hasError = true;
    }


    if (email.value == "") {
        document.getElementById("err_email").innerHTML = "*Email Required";
        hasError = true;
    }
    else if (!hasAttherate(email.value)) {
        document.getElementById("err_email").innerHTML = "*Email must contain @";
        hasError = true;
    }
    else if (!validateEmail(email.value)) {
        document.getElementById("err_email").innerHTML = "*Email is invalid";
        hasError = true;
    }


    if (contact_number.value == "") {
        document.getElementById("err_contact_number").innerHTML = "*Phone Required";
        hasError = true;
    }
    else if (isNaN(contact_number.value)) {
        document.getElementById("err_contact_number").innerHTML = "*Contact should contain only number";
        hasError = true;
    }
    else if (hasWhiteSpace(contact_number.value)) {
        document.getElementById("err_contact_number").innerHTML = "*Contact number cant contain whitespace";
        hasError = true;
    }
    else if (contact_number.value.length < 11) {
        document.getElementById("err_contact_number").innerHTML = "*Contact number must contain 11 digits";
        hasError = true;
    }

    return !hasError;
}

function refresh() {
    document.getElementById("err_your_name").innerHTML = "";
    document.getElementById("err_user_name").innerHTML = "";
    document.getElementById("err_pass").innerHTML = "";
    document.getElementById("err_confirm_pass").innerHTML = "";
    document.getElementById("err_gender").innerHTML = "";
    document.getElementById("err_email").innerHTML = "";
    document.getElementById("err_contact_number").innerHTML = "";
}
