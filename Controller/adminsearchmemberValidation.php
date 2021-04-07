<?php
    include  "DB/db_config.php";
    $fname="";
    $err_fname="";

    $lname="";
    $err_lname="";

    $uname="";
    $err_uname="";

    $pass="";
    $err_pass="";

    $err_upass="";
    $err_lpass="";
    $err_npass="";
    $err_spass="";

    $cpass="";
    $err_cpass="";

    $mail="";
    $err_mail="";

    $nid="";
    $err_nid="";

    $phone="";
    $err_phone="";
   
    $rassign="";
    $err_rassign="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["uname"]))
        {
            $err_uname="User Name required";
        }
        else if(strpos($_POST["uname"]," ")){
            $err_uname="Username should not contain WhiteSpace";
        }

        else{   
            $uname=$_POST["uname"];

        }
        if(isset($_POST["updateBtn"])){
            // header("Location:admineditmember.php");
        }

        // if(isset($_POST["searchBtn"])){
        //     $query="SELECT * from users where username='$uname'";
        //     $result=get($query);}
    



       
    
}

?>