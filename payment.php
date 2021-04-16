<?php
/*
    if(isset($_POST["submit"])){
        echo $_POST["card"]."<br>";
        echo $_POST["name"]."<br>";
        echo $_POST["cnum"]."<br>";
        echo $_POST["exmonth"]."<br>";
        echo $_POST["exyear"]."<br>";
        echo $_POST["scode"]."<br>";
        echo $_POST["amount"]."<br>";
    }
*/
?>





<?php

session_start(); 
if(!isset($_SESSION["loggedInUser"]))
{
    header("Location:userError.php");
}

include 'main_header.php';
include 'Controller/paymentValidation.php';

?>

<html>
<head></head>
<body>

    <fieldset  style="width:1316px;height:615px"> <br><br><br>  
        <h1 align="center">BachApp-Payment</h1>
        <h4 align="center"><b>"Where Searching House Becomes Easier"</b></h4><br><br>  
            <form  action="" method="post" >
                <table align="center">
                    <tr>
                        <td><span>Card Type:</span></td>
                        <td><input type="radio" name="card"  value="CreditCard"> Credit Card
                            <input type="radio" name="card"  value="DebitCard"> Debit Card
                           
                            <span><?php echo $err_card;?></span></td>
                    </tr>
                    <tr>
                        <td><br><span>Name:</span></td>
                        <td><br><input type="text" name="name" value="<?php echo $name; ?>" placeholder ="NAME ON CARD">
                            <span><?php echo $err_name;?></span></td>
                    </tr>
                   
                    <tr>
                        <td><br><span>Card Number:</span></td>
                        <td><br><input type="text" name="cnum" value="<?php echo $cnum; ?>" placeholder ="CARD NUMBER">
                        <span><?php echo $err_cnum;?></span></td>
                    
                        
                    </tr>
                   

                    <!-- <tr>
                        <td><br><span>Expiry Date:</span></td>
                        <td>
                            <br>
                            <select name ="exmonth" style ="width:205px">
                            
                                <option disabled selected>Month</option>
                                    <?php         
                                    for($month = 1; $month <= 12; $month++)        
                                    echo"<option value = '".$month."'>".$month."</option>";     
                                    ?>
                            </select>
                            <span><?php echo $err_exmonth;?></span></br>

                            <select name ="exyear" style ="width:205px"><br>

                                <option disabled selected>Year</option>
                                    <?php         
                                    for($year = 2021; $year <= 2031; $year++)         
                                    echo"<option value = '".$year."'>".$year."</option>";   
                                    ?>
                            </select>
                            
                           <span><?php echo $err_exyear;?></span>

                        </td>
                    </tr> -->
                
                    <tr>
                        <td><br><span>Security Code:</span></td>
                        <td><br>
                            <input type="text" name="scode" value="<?php echo $scode; ?>" placeholder ="SECURITY CODE" size="20">
                            <span><?php echo $err_scode;?></span>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><br><span>Amount:</span></td>
                        <td><br>
                            <input type="text" name="amount" value="<?php echo $amount; ?>"placeholder ="Amount" size="20">
                            <span><?php echo $err_amount;?></span>
                        </td>
                    
                    </tr>
                    
                    
                    <tr>
                       <td colspan="3" align="center"><br><br><span><input type="submit" name="submit" value="Confirm Payment" class="btn btn-success" ></span></td>
                    </tr>

                </table>


            </form> 
    </fieldset>   
</body>
</html>
