<?php 
    $selected_location="";
    $err_location="";

    $floor="";
    $err_floor="";

    $fsize="";
    $err_fsize="";

    $hmate="";
    $err_hmate="";

    $rent="";
    $err_rent="";

    $ad_rent="";
    $err_ad_rent="";
    $has_error=false;

    

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        

        if(!isset($_POST["selected_location"])){
            $err_location="Location is required";
            $has_error=true;
            }
        else{
            $selected_location=$_POST["selected_location"];  
            }
        

            if(!isset($_POST["floor"])){
                $err_floor="floor is required";
                $has_error=true;
                }
            else{
                $floor=$_POST["floor"];  
                }


        // if(!isset($_POST["hmate"])){
        //         $err_hmate="This must be selected";
        //         $has_error=true;
        //         }
        //     else{
        //         $hmate=$_POST["hmate"];  
        //         }

        if(!isset($_POST["rent"])){
                $err_rent="Rent must be selected";
                $has_error=true;
                }
            else{
                $rent=$_POST["rent"];  
                }
        
        if(!isset($_POST["fsize"])){
                    $err_fsize="Size must be selected";
                    $has_error=true;
                    }
                else{
                    $fsize=$_POST["fsize"];  
                    }
        

        // if(!isset($_POST["ad_rent"])){
        //         $err_ad_rent="Advance Payment must be selected";
        //         $has_error=true;
        //         }
        //     else{
        //         $ad_rent=$_POST["ad_rent"];  
        //         }
                if($has_error === false && isset($_POST["submit"])){
                    header("Location:http://localhost/BachApp-Web/Bachelor/Searched_house.php");
                }


        }

        


?>