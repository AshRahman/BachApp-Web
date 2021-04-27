
<?php
	include "Controller/logoutValidation.php";
	//session_start(); 
	//if(!isset($_SESSION["user_type"])){
		//header("Location:userError.php");
	//}
?>
<!DOCTYPE html>
<html>
<title>Admin Panel</title>
   <head>
<link rel="stylesheet" href="homepage.css">
</head>
	<body>
		<form action="" method="post">
			<div class="topnav">
				<a href=http://localhost/BachApp-Web/searchflat.php>Search</a>
				<a href=http://localhost/BachApp-Web/adminsearchmember.php>CRUD landlord</a>
				<a href=http://localhost/BachApp-Web/adminsearchbachelor.php>CRUD Tanent</a>
				<a href=http://localhost/BachApp-Web/crudaddflat.php>CRUD Flat</a>
				<a href=http://localhost/BachApp-Web/crudaddhouse.php>CRUD House</a>
			
			<div style="text-align:right;"> 
				<input type="submit" class="logoutBtn" id="logoutBtn" name="logoutBtn" value="log out">
	


	  	</form>
    </body>
</html>

