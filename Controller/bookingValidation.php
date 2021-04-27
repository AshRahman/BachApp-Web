<?php
 include "Model/db_config.php";
 $query = "SELECT * FROM property WHERE booked='available'";
    $result=get($query);
 if(isset($_POST["searchBtn"])){
    $query = "SELECT * FROM property WHERE booked='available'";
    $result=get($query);
    
}

?>