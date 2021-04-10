<?php
include 'main_header.php';
include 'Controller/house_searchValidation.php';

?>

<html>
<head></head>
<body>

<fieldset  style="width:1316px;height:615px"> <br><br><br>  
        <h1 align="center">Search House</h1>
        <h4 align="center"><b>"Where Searching House Becomes Easier"</b></h4><br><br>  
    <form action="" method="post">
        <table align= "center"> 
            <tr>
            <td><span class="my-font">Location:</span></td>

            <td>
                <select name="selected_location" style ="width:205px">
                <option disabled selected>Select Location</option>
                    <?php 
                        $locations=array("Shobujhbag","Khilgaon","Ramna","Dhanmondi","Gulshan","Puran-Dhaka","Mirpur","Mohammadpur");
                        for($i=0;$i<count($locations);$i++)
                        {
                        echo '<option value="' . $locations[$i] . '">' . $locations[$i] . '</option>';
                        }
                    ?>
                </select><?php echo $err_location;?><br>
            </td>

            </tr>

            <tr>
                <td><br><span class="my-font">Floor:</span></td>
                <td><br>
                <select name="floor" style ="width:205px">
                    <option disabled selected>Select Floor</option>
                    <?php 
                        $floors=array("1st","2nd","3rd","4th","5th",">6th");
                        for($i=0;$i<count($floors);$i++)
                        {
                        echo"<option>$floors[$i]</option>";
                        }
                    ?>
                    </select><?php echo $err_floor;?><br>
                </td>

            </tr>

            <tr>
                <td><br><span class="my-font">Flat size:</span></td>

                <td><br>
                <select name="fsize" style ="width:205px">
                    <option disabled selected>Size:</option>
                        <?php 
                            $fsize=array("<1100 sqf","13,00-17,00 sqf",">1700sqf");
                            for($i=0;$i<count($fsize);$i++){
                            echo"<option>$fsize[$i]</option>";
                            }
                        ?>
                </select><?php echo $err_fsize;?><br>
                </td>
            </tr>
            
            <tr>
            <td><br><span class="my-font">Rent:</span></td>
            <td><br>
                <select name="rent" style ="width:205px">
                    <option disabled selected>Rent Range</option>
                        <?php 
                            $rent=array("<6000","6000-8000",">8000");
                            for($i=0;$i<count($rent);$i++)
                            {
                            echo"<option>$rent[$i]</option>";
                            }
                        ?>
                </select><?php echo $err_rent;?><br>
            </td>
            </tr>
<!-- 
            <tr>
                <td><br><span class="my-font">Advance Payment:</span></td>

                <td><br>
                <select name="ad_rent" style ="width:205px">
                    <option disabled selected>Advance Payment</option>
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
                <td><br><span class="my-font"><span>Accept roomate:</td>
                <td><br><input type="radio" name="hmate" value="Yes">Yes
                <input type="radio" name="hmate" value="No">No
                <span class="err-msg"><?php echo $err_hmate; ?></span></td>
            </tr> -->

            
            <tr>
            <td colspan="3" align="center"><br><span><input type="submit" class="btn btn-success" name="submit" value="Search"></td>
            </tr>

        </table>
    </form>
</fieldset>

</body>
</html>