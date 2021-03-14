<?php

$selected_location="";
    $err_location="";

    $floor="";
    $err_floor="";

$gender="";
$err_gender="";
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


    if(!isset($_POST["gender"])){
            $err_gender="This must be selected";
            }
        else{
            $gender=$_POST["gender"];  
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

<html >
<style>
            body{
                background-color:rgb(240,240,240);
            }
            .roommate-search-div{
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
            .right {
    display: flex;
  justify-content: flex-end;
}
        </style>
<head>
    <title>Search Roommate</title>
</head>
<body>
<div class="right">
        <input type="submit" class="right my-font btn-sup" name="submit" value="Log-out">  
    </div>

    <div class="roommate-search-div">
    <h1 align="center" style="font-family:cambria">Search roomate/Post Wanting roomate</h1>
    <form action="" method="post">
        <table align= "center">
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
                                <td><span class="my-font">Gender<span></td>
                            </tr>

                            <tr>
                        <td><input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                            <span class="err-msg"><?php echo $err_gender; ?></span></td>
                    </tr>



                            <tr>
                            <td><span class="my-font">Rent</span></td>

                            <td>
                            <select name="rent">
                                                <option disabled selected>Rent</option>
                                                    <?php 
                                                        $rent=array("<3000","3000-4000",">4000");
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
                                                        $ad_rent=array("<6,000","6,000-8,000",">8000");
                                                        for($i=0;$i<count($ad_rent);$i++){
                                                            echo"<option>$ad_rent[$i]</option>";
                                                        }
                                                    ?>
                                            </select><?php echo $err_ad_rent;?><br>
                            </td>
                            </tr>

                            
                            <tr>
                                <td colspan="2"><input type="submit" class="my-font btn-sup" name="search-roommate-btn" value="Search"></td>
                                <td colspan="2"><input type="submit" class="my-font btn-sup" name="post-ad-btn" value="Post"></td>
                            </tr>
            
        
        </table>
        </form>
    </div>
</body>
</html> 