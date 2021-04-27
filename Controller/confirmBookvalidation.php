<?php
include "Model/db_config.php";

$query = "SELECT * FROM property";
$result=get($query);
session_start();
$uname=$_SESSION["user_name"];

$id=$_GET["id"];
$err_id="";

$hasError=false;


    if(isset($_POST["bookBtn"])){


    
        $book_query="UPDATE property SET booked_by='$uname',booked='unavailable'  WHERE id='$id'";
        echo $id;
        execute($book_query);
        echo "Booked successfully";
    }
    
   

?>