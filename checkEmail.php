<?php

    include "Controller/rentersignupController.php";
    $email=$_GET["email"];
    
    if($checkMail){
        echo "true";
    }else echo "false";

?>