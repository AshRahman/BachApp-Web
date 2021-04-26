<?php
    require_once 'Controller/adminsearchmemberValidation.php';
    $key=$_GET["key"];
    $username=searchMemberUname($key);
    foreach($username as $usernames){
        echo $username["username"]."<br>";
    }
?>