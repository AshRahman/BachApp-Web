<?php
include 'main_header.php';
include 'Controller/paymentValidation.php';
session_start();
if (!isset($_SESSION["user_type"])) {
    header("Location:login.php");
}

?>
<html>
<head></head>
<body>

    <fieldset  style="width:1316px;height:615px"> <br><br><br>  
        <h1 align="center">BachApp-Payment</h1>
        <h4 align="center"><b>"Where Searching House Becomes Easier"</b></h4><br><br>  
            <form  action="" onsubmit="return validatePayment()" method="post" >
                <table align="center">
                    <tr>
                        <td><span>Choose Card Type:</span></td>
                        <td><input type="radio" id="card1" name="card"  value="CreditCard"> Credit Card
                            <input type="radio" id="card2" name="card"  value="DebitCard"> Debit Card
                           
                            <span id="err_card"><?php echo $err_card;?></span></td>
                    </tr>
                    <tr>
                        <td><br><span>Name:</span></td>
                        <td><br><input type="text" id="names" name="name" value="<?php echo $name; ?>" placeholder ="NAME ON CARD">
                            <span id="err_names"><?php echo $err_name;?></span></td>
                    </tr>
                   
                    <tr>
                        <td><br><span>Card Number:</span></td>
                        <td><br><input type="text" id="cnum" name="cnum" value="<?php echo $cnum; ?>" placeholder ="CARD NUMBER">
                        <span id="err_cnum"><?php echo $err_cnum;?></span></td>
                    
                        
                    </tr>
                   

                    <tr>
                        <td><br><span>Expiry Date:</span></td>
                        <td>
                            <br>
                            <select name ="exmonth" id="month" style ="width:205px">
                            
                                <option disabled selected>Month</option>
                                    <?php         
                                    for($month = 1; $month <= 12; $month++)        
                                    echo"<option value = '".$month."'>".$month."</option>";     
                                    ?>
                            </select>
                            <span id="err_month"><?php echo $err_exmonth;?></span></br>

                            <select name ="exyear" id="year" style ="width:205px"><br>

                                <option disabled selected>Year</option>
                                    <?php         
                                    for($year = 2021; $year <= 2031; $year++)         
                                    echo"<option value = '".$year."'>".$year."</option>";   
                                    ?>
                            </select>
                            
                           <span id="err_year"><?php echo $err_exyear;?></span>

                        </td>
                    </tr>
                
                    <tr>
                        <td><br><span>Security Code:</span></td>
                        <td><br>
                            <input type="text" id="scode" name="scode" value="<?php echo $scode; ?>" placeholder ="SECURITY CODE" size="20">
                            <span id="err_scode"><?php echo $err_scode;?></span>
                        </td>
                        
                    </tr>

                    <tr>
                        <td><br><span>Amount:</span></td>
                        <td><br>
                            <input type="text" id="amount" name="amount" value="<?php echo $amount; ?>"placeholder ="Amount" size="20">
                            <span id="err_amount"><?php echo $err_amount;?></span>
                        </td>
                    
                    </tr>
                    
                    
                    <tr>
                       <td colspan="3" align="center"><br><br><span><input type="submit" name="submit" value="Confirm Payment" class="btn btn-success" ></span></td>
                    </tr>

                </table>


            </form> 
    </fieldset>   
</body>
<script src="JS/payment.js"></script>
</html>
