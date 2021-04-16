
<?php
     if(isset($_POST["logoutBtn"])){
        session_start();
        session_destroy();
        header("Location:login.php"); 
    }

?>