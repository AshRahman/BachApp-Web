<?php
include "Controller/logoutValidation.php";
session_start(); 
if(!isset($_SESSION["user_type"]))
{
    header("Location:login.php");
}

?>
<!DOCTYPE html>
<html>
<title>Home</title>
   <head>
   <link rel="stylesheet" href="homepage.css">

<body>

  <div class="topnav">
  <a href=http://localhost/BachApp-Web/searchflat.php>Search</a>
  <a href=http://localhost/BachApp-Web/bachelorProfileView.php>Profile</a>
  <a href=http://localhost/BachApp-Web/payment.php>Payment</a>
  <a href=http://localhost/BachApp-Web/tenanthouselist.php>House List</a>
  
  
  
</div>

<form method="post">
<div style="text-align:right;"> <input type="submit" class="my-font btn-sup" name="logoutBtn" value="log out"></div>
</form> 

<div style="display:flex;">
<div class="tren">

<br><div style="border: 1px solid #2994F2; width: 18rem; border-radius: 5px;" class="card" >
        <img width="100%" src="Resources/h1.jpg" class="" alt="...">
        <div style="padding: 5px; " class="">
        <h5 class="">Your Title</h5>
        <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="Resources/house1.php" class="">View</a>
        </div>
    </div><br>

    <div style="border: 1px solid #2994F2; width: 18rem; border-radius: 5px;" class="card" >
        <img width="100%" src="Resources/h4.jpg" class="" alt="...">
        <div style="padding: 5px; " class="">
        <h5 class="">Your Title</h5>
        <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="Resources/house2.php" class="">View</a>
        </div>
    </div><br>

    <div style="border: 1px solid #2994F2; width: 18rem; border-radius: 5px;" class="card" >
        <img width="100%" src="Resources/h3.jpg" class="" alt="...">
        <div style="padding: 5px; " class="">
        <h5 class="">Your Title</h5>
        <p class="">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="Resources/house3.php" class="">View</a>
        </div>
        </div>
    </div>
</div>
	
	
	 </body>
   </head>
   
</html>
