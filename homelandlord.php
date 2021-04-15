<?php
	include "Controller/logoutValidation.php";
   // session_start(); 
   //  if(!isset($_SESSION["loggedInUser"])){
   //      header("Location:userError.php");
   //  }
?>

<!DOCTYPE html>
<html>
<title>Home</title>
   <head>
   <link rel="stylesheet" href="styles/homepage.css">
 
<body>

<div class="topnav">
      <a href=http://localhost/homepage/search.php>Search</a>
      <a href=http://localhost/bachApp-Web/editprofile.php>Profile</a>
	  <a href=http://localhost/bachApp-Web/edithouseinformation.php>Edit House info</a>
      <a href=http://localhost/bachApp-Web/houselist.php>House List</a>
	  <a href=http://localhost/bachApp-Web/renteradvertisement.php>Post for rent</a>
	  <!-- <div style="text-align:right;"><input type="submit" class="my-font btn-sup" name="Logout" value="log out"></div> -->
      
  
  
</div>

<form method="post">
	<div style="text-align:right;"><input type="submit" class="my-font btn-sup" name="logoutBtn" value="log out"></div>
</form>

     </body>
   </head>
   
</html>
