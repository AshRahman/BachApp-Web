<?php
include "Model/db_config.php";
$conn = mysqli_connect($server,$user,$pass,$db);


$query = "SELECT * FROM house";
$result=mysqli_query($conn,$query);
if(isset($_POST["showBtn"]))
{
    $result=mysqli_query($conn,$query);
}


$id="";
$err_id="";
$owner="";
$err_owner="";
$location="";
$err_location="";
$contact="";
$err_contact="";
$price="";
$size="";
$err_price="";
$err_size="";
$hasError=false;

if(isset($_POST["addBtn"]))
{

if($_SERVER["REQUEST_METHOD"] == "POST"){
	
	if(empty($_POST["owner"])){
    $err_owner="[insert owner name]";
    $hasError=true;
}

if(empty($_POST["location"])){
    $err_location="[insert location]";
    $hasError=true;
}
	
	
	if (!is_numeric($_POST["price"])) {
        
        $err_price = "[This field is empty or requires only numeric values]";
        $hasError = true;
    }
	
    else{
        $price=htmlspecialchars($_POST["price"]);
    }
	if (!is_numeric($_POST["size"])) {
        
        $err_size = "[This field is empty or requires only numeric values]";
        $hasError = true;
    }
    else{
        $size=htmlspecialchars($_POST["size"]);
    }
	if (!is_numeric($_POST["contact"])) {
        
        $err_contact = "[This field is empty or requires only numeric values]";
        $hasError = true;
    }
    else{
        $contact=htmlspecialchars($_POST["contact"]);
    }
	
	$owner = $_POST['owner'];
	$price = $_POST['price'];
	$location = $_POST['location'];
	$size = $_POST['size'];
	$contact = $_POST['contact'];
	
  if($hasError === false){
    $insert_query = "insert into house values ('$id','$owner','$price','$location','$size','$contact')";
    if(mysqli_query($conn,$insert_query)){
        echo "values inserted";
		
$id="";
$err_id="";
$owner="";
$err_owner="";
$location="";
$err_location="";
$contact="";
$err_contact="";
$price="";
$size="";
$err_price="";
$err_size="";


    }
    else{
        echo "problem not inserted";
    }
  }
}
}

?>