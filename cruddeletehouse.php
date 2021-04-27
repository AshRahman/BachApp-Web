<?php

//session_start();
	//if(!isset($_SESSION["user"])){
		//header("Location: loginadmin.php");
	//}
	
include "Controller/cruddeletehousevalidation.php";

$id = $_GET["id"];
$query ="SELECT * FROM property WHERE id='$id'";
$result=get($query);
foreach($result as $rows){
	              $id= $rows["id"];
                  $user_name= $rows["username"];
                  $email= $rows["email"];
                  $contact_number= $rows["phone"];
                  $floor= $rows["floor"];
                  $flat_type=$rows["flat"];
                  $gender= $rows["gender"];
                  $rent= $rows["rent"];
                  $address= $rows["address"];
                  $img= $rows["image"];
}

?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="homepage.css">
<body>

<form action="" method="post">
<table>
<div class="search">
<div class="topnav">
      
	  <a href=http://localhost/BachApp-Web/crudaddhouse.php >Back</a>
      
	  <h1 style="text-align:center;color:orange">CRUD House</h1>
    </div>               
				   
                    
<form action="/" method="post">
					<tr>
					
					<p style="text-align:center;"><h1>are you sure?</h1></p>
					
					<p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="deleteBtn" value="Yes"></p>
					
					</tr>
					</div>
					
</table>

<p>
	  
     </p>
	 
</body>
</head>
</html>	


						