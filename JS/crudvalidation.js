var owner = document.getElementById("owner");
var price = document.getElementById("price");
var locations = document.getElementById("location");
var size = document.getElementById("size");
var contact = document.getElementById("contact");

function validate() {
    refresh();
    var hasError = false;

    if (owner.value == "") {
        document.getElementById("err_owner").innerHTML = "*Owner Name Required";
        hasError = true;

    }

    if (price.value == "") {
        document.getElementById("err_price").innerHTML = "*price Required";
        hasError = true;

    }

    else if (isNaN(price.value)) {
        document.getElementById("err_price").innerHTML = "*price must be Number";
        hasError = true;
    }


    if (locations.value == "") {
        document.getElementById("err_location").innerHTML = "*location Required";
        hasError = true;

    }
    if (size.value == "") {
        document.getElementById("err_size").innerHTML = "*size required";
        hasError = true;

    }
    else if (isNaN(size.value)) {
        document.getElementById("err_size").innerHTML = "*size must be Number";
        hasError = true;
    }


    if (contact.value == "") {
        document.getElementById("err_contact").innerHTML = "*Phone Required";
        hasError = true;
    }
    else if (isNaN(contact.value)) {
        document.getElementById("err_contact").innerHTML = "*contact must be Number";
        hasError = true;
    }

    return !hasError;
}

function refresh() {
    document.getElementById("err_owner").innerHTML = "";
    document.getElementById("err_price").innerHTML = "";
    document.getElementById("err_location").innerHTML = "";
    document.getElementById("err_size").innerHTML = "";
    document.getElementById("err_contact").innerHTML = "";
}