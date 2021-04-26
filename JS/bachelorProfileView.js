
    var names = document.getElementById("name");
    var email = document.getElementById("email");
    var gender1= document.getElementById("gender1");
    var gender2 = document.getElementById("gender2");
    var contact_number = document.getElementById("contact_number");

    //email @ checking function
        function hasAttherate(s){
        return s.indexOf("@") >= 0;
        }
    //whitespace Checking function
        function hasWhiteSpace(s){
        return s.indexOf(' ') >= 0;
        }


    //validate function
        function validate(){
            hasError = false;
            refresh();
    // name checking
            if(names.value ==""){
                document.getElementById("err_name").innerHTML= "*Name required";
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
    //gender checking
            if (gender1.checked ) {
                hasError = false;
            }
            else if (gender2.checked ) {
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

    function refresh(){
        // document.getElementById("err_firstname").innerHTML ="";
        document.getElementById("err_name").innerHTML ="";
        document.getElementById("err_email").innerHTML ="";
        document.getElementById("err_gender").innerHTML = "";
        document.getElementById("err_contact_number").innerHTML = "";
    }