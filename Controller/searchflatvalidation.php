<?php
include "DB/db_config.php";

$location="";
$err_location="";

$size="";
$err_size="";


$price="";
$err_price="";

$search="";
$err_search="";

$has_error=false;

$result=[];
if(isset($_POST["filterbtn"])){
if($_SERVER["REQUEST_METHOD"] == "POST"){

        

    if(!isset($_POST["selected_location"])){
        $err_location="Location is required";
        $has_error=true;
        }
    else{
        $selected_location=$_POST["selected_location"];
    
        }
    

        if(!isset($_POST["size"])){
            $err_size="Size is required";
            $has_error=true;
        }

            
        else{
            $size=$_POST["size"];  
            }

    if(!isset($_POST["price"])){
            $err_price="Price must be selected";
            $has_error=true;
            }
        else{
            $price=$_POST["price"];  
            }
    
      echo $selected_location;

    if(!$has_error){
    $query = "SELECT * FROM flat";
    $conditions = array();
    
    if(!empty($selected_location)) {
      $conditions[] = "Location='$selected_location'";
    }
    if(!empty($size)) {
      $conditions[] = "Size='$size'";
    }
    if(!empty($price)) {
        $conditions[] = "Price='$price'";
      }
      
    

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }
    

    $conn = mysqli_connect($server,$user,$pass,$db);
    $result=mysqli_query($conn,$sql);
    return $result;
    }
    


    }
  }




?>