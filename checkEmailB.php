<?php
    include "Controller/adminaddbachelorValidation.php";
    $email=$_GET["email"];
    $checkMail=checkEmail($email);
    if($checkMail){
        echo "true";
    }else echo "false";

?>