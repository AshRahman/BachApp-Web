//  var updateBtn=document.getElementById("updateBtn");
//  var searchDiv=document.getElementById("search_div");
 
 
 //var searchBtn=document.getElementById("searchBtn");
function hideDiv(){

    var x = document.getElementById("search_div");
    var y = document.getElementById("signup-div");
    
    if (x.style.display === "none") {
      x.style.display = "block";
      //y.style.display="none"
    } else {
      x.style.display = "none";
      y.style.display="block";
    }
}


