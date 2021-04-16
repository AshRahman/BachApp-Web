var user_name=document.getElementById("user_name");
var pass=document.getElementById("pass");
function validate(){
    refresh();
    var hasError=false;
    
    if(user_name.value==""){
        document.getElementById("err_user_name").innerHTML="*Username Required";
        hasError=true;
        
    }
    if(pass.value==""){
        document.getElementById("err_pass").innerHTML="*Password Required";
        hasError=true;
    }
    return !hasError;
}

function refresh(){
    document.getElementById("err_user_name").innerHTML="";
    document.getElementById("err_pass").innerHTML="";
}