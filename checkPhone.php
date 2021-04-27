<?php

    include "Controller/rentersignupController.php";
    $contact_number=$_GET["contact_number"];
    $checkP=checkPhone($contact_number);
    if($checkP){
        echo "true";
    }else {echo "false";}

?>