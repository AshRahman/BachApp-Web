<?php 
    $selected_location="";
    $err_location="";

    $floor="";
    $err_floor="";

    $hmate="";
    $err_hmate="";

    $rent="";
    $err_rent="";

    $ad_rent="";
    $err_ad_rent="";

    if($_SERVER["REQUEST_METHOD"] == "POST"){

        

        if(!isset($_POST["selected_location"])){
            $err_location="Location is required";
            }
        else{
            $selected_location=$_POST["selected_location"];  
            }
        

            if(!isset($_POST["floor"])){
                $err_floor="floor is required";
                }
            else{
                $floor=$_POST["floor"];  
                }


        if(!isset($_POST["hmate"])){
                $err_hmate="This must be selected";
                }
            else{
                $hmate=$_POST["hmate"];  
                }

        if(!isset($_POST["rent"])){
                $err_rent="Rent must be selected";
                }
            else{
                $rent=$_POST["rent"];  
                }
        

        if(!isset($_POST["ad_rent"])){
                $err_ad_rent="Advance Payment must be selected";
                }
            else{
                $ad_rent=$_POST["ad_rent"];  
                }


        }


?>

<html>
<head>
    <style>
            body{
                background-color:rgb(240,240,240);
            }
            .search-div{
                border:1px solid rgb(245,245,245);
                margin:auto;
                width:30%;
                margin-top:5%;
                background-color:rgb(255,255,255);
                padding:20px;

            }
            .my-font{
                font-size:20px;
                font-family:consolas;
            }
            .btn-sup{
                background-color:rgb(112,191,65);
                border:none;
                color:white;
                width:100%;
                border-radius:3px;
                padding:5px;
            }
            .btn-sup:hover{
                background-color:rgb(100,170,40);
            }
            .btn-sup:active{
                background-color:green;
            }
            .err-msg{
                color:red;
                font-size:15px;
                font-family:consolas;

            }
        </style>
    <title>Search House</title>
</head>
    <body>
<div class="search-div">
    <h1 align="center" style="font-family:cambria">Search House</h1>
    <form action="" method="post">
        <table allign= "center"> 
            <tr>
            <td><span class="my-font">Location</span></td>

            <td>
            <select name="selected_location">
                                <option disabled selected>Location</option>
                                    <?php 
                                        $locations=array("Shobujhbag","Khilgaon","Ramna","Dhanmondi","Gulshan","Puran-Dhaka","Mirpur","Mohammadpur");
                                        for($i=0;$i<count($locations);$i++){
                                            echo '<option value="' . $locations[$i] . '">' . $locations[$i] . '</option>';
                                        }
                                    ?>
                            </select><?php echo $err_location;?><br>
            </td>

            </tr>

            <tr>
            <td><span class="my-font">Floor</span></td>

            <td>
            <select name="floor">
                                <option disabled selected>Floor</option>
                                    <?php 
                                        $floors=array("1st","2nd","3rd","4th","5th",">6th");
                                        for($i=0;$i<count($floors);$i++){
                                            echo"<option>$floors[$i]</option>";
                                        }
                                    ?>
                            </select><?php echo $err_floor;?><br>
            </td>
            </tr>
            <tr>
                        <td><span class="my-font"><span>Accept roomate</td>
            
                        <td><input type="radio" name="hmate" value="Yes">Yes
                        <input type="radio" name="hmate" value="No">No
                            <span class="err-msg"><?php echo $err_hmate; ?></span></td>
            </tr>
            
            <tr>
            <td><span class="my-font">Rent</span></td>

            <td>
            <select name="rent">
                                <option disabled selected>Rent</option>
                                    <?php 
                                        $rent=array("<6000","6000-8000",">8000");
                                        for($i=0;$i<count($rent);$i++){
                                            echo"<option>$rent[$i]</option>";
                                        }
                                    ?>
                            </select><?php echo $err_rent;?><br>
            </td>
            </tr>

            <tr>
            <td><span class="my-font">Advance Payment</span></td>

            <td>
            <select name="ad_rent">
                                <option disabled selected>Advance</option>
                                    <?php 
                                        $ad_rent=array("<12,000","12,000-16,000",">16000");
                                        for($i=0;$i<count($ad_rent);$i++){
                                            echo"<option>$ad_rent[$i]</option>";
                                        }
                                    ?>
                            </select><?php echo $err_ad_rent;?><br>
            </td>
            </tr>

            
            <tr>
                <td colspan="2"><input type="submit" class="my-font btn-sup" name="submit" value="Search"></td>
            </tr>
        </table>
    
    
    </form>


</div>


    
    </body>
</html>