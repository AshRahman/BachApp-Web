<?php
    $db_server="localhost";
    $db_user="root";
    $db_password="";
    $db_name="home";
    function execute($query){
        global $db_server,$db_user,$db_password,$db_name;
        $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
        mysqli_query($conn,$query);
    }

    function get($query){
        global $db_server,$db_user,$db_password,$db_name;
        $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
        $result=mysqli_query($conn,$query);
        $data=array();
            while($row=mysqli_fetch_assoc($result)){
                $data[] =$row;
            }
        
        return $data;
    }
    
    
?>