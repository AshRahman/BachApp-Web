<?php
include "Model/db_config.php";

$query = "SELECT * FROM flat";
$result=get($query);

if(isset($_POST["showBtn"]))
{
    $result=get($query);
}


$id=$_GET["id"];
$err_id="";

$hasError=false;


    if(isset($_POST["deleteBtn"])){


    
        $delete_query="DELETE FROM flat WHERE ID='$id'";
        echo $id;
        execute($delete_query);
        echo "deleted successfully";
    }
    
    

?>