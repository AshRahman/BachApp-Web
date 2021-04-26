var card1 = document.getElementById("card1");
var card2 = document.getElementById("card2");
var names = document.getElementById("names");
var cnum = document.getElementById("cnum");
var month = document.getElementById("month");
var year = document.getElementById("year");
var scodes = document.getElementById("scode");
var amount = document.getElementById("amount");

function hasWhiteSpace(s) {
    return s.indexOf(' ') >= 0;
  }

function validatePayment(){
    hasError= false;
    refresh();
    if (card1.checked ) {
         hasError = false;
       }
       else if (card2.checked ) {
          hasError = false;
        }
        else{
         document.getElementById("err_card").innerHTML = "*Card must be selected";
         hasError = true;
        }
    //name checking
    if(names.value==""){
        document.getElementById("err_names").innerHTML="*Name required";
        hasError=true;
    } 
    //cardnumber
    if(cnum.value==""){
        document.getElementById("err_cnum").innerHTML="*Card Number required";
        hasError=true;
    } 
    else if (isNaN(cnum.value)) {
        document.getElementById("err_cnum").innerHTML ="*Card Number should not contain character";
        hasError = true;
      } 
    else if (cnum.value.length < 16) {
        document.getElementById("err_cnum").innerHTML ="*Card Number should  contain  16 digits";
        hasError = true;
      } 
    //month year
      if(month.selectedIndex== 0){
        document.getElementById("err_month").innerHTML="*Month must be selected";
        hasError=true;
    } 
    if(year.selectedIndex== 0){
        document.getElementById("err_year").innerHTML="*Year must be selected";
        hasError=true;
    }


    //amount
    if(amount.value==""){
        document.getElementById("err_amount").innerHTML="*Amount required";
        hasError=true;
    } 
    else if (isNaN(amount.value)) {
            document.getElementById("err_amount").innerHTML ="*Amount should not contain character";
            hasError = true;
        } 

    //security code
        if(scodes.value==""){
            document.getElementById("err_scode").innerHTML="*Security code required";
            hasError=true;
        } 
        else if (scodes.value.length < 6 ) {
            document.getElementById("err_scode").innerHTML ="*Security code must contain 6 characters";
            hasError = true;
          }
        else if (hasWhiteSpace(scodes.value)) {
            document.getElementById("err_scode").innerHTML ="*Security code must not have whitespace";
            hasError = true;
          }
        else if (isNaN(scodes.value)) {
            document.getElementById("err_scode").innerHTML ="*Security code should not contain character";
            hasError = true;
        } 
         
 

 return !hasError;
}

function refresh() {
    document.getElementById("err_card").innerHTML = "";
    document.getElementById("err_names").innerHTML = "";
    document.getElementById("err_cnum").innerHTML = "";
    document.getElementById("err_month").innerHTML = "";
    document.getElementById("err_year").innerHTML = "";
    document.getElementById("err_scode").innerHTML = "";
    document.getElementById("err_amount").innerHTML = "";
   
  }
  