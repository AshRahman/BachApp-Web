<?php
        $card="";
        $err_card="";

        $name="";
        $err_name="";

        $cnum="";
        $err_cnum="";
        $err_nn="";

        $exmonth="";
        $err_exmonth="";

        $exyear="";
        $err_exyear="";

        $scode="";
        $err_scode="";
       
       

        if($_SERVER["REQUEST_METHOD"]=="POST"){
//NAME VALIDATION
            if(empty($_POST["name"])) 
            {
                $err_name="Name required";
            }
          
            else if(is_numeric($_POST["name"]))
            {
                $err_name="Name should not contain Numbers";
            }
            else
            {   
                $name=htmlspecialchars($_POST["name"]);
            }

            $nd=$_POST["name"];
            for($i=0;$i<strlen($nd);$i++)
            {
                if(is_numeric($nd[$i]))
                {
                    $nd=true;
                    $err_name="Name should not contain Numbers";
                    break;
                }
               
            }
           
           


//CARD NUMBER VALIDATION
            if(empty($_POST["cnum"]))
            {
                $err_cnum="Enter Card Number";
            }
            else if(strlen($_POST["cnum"])<16)
            {
                $err_cnum="Card number must contain 16 digits ";
            }
            else if(strpos($_POST["cnum"]," "))
            {
                $err_cnum="Card number should not contain whitespace";
            }
            
            else if(!is_numeric($_POST["cnum"]) )
            {
                $err_cnum="Card number should not contain letters";
            }
            else
            {   
                $pass=htmlspecialchars($_POST["pass"]);
            }


//CARD SELECTION VALIDATION
            if(empty($_POST["card"]))
            {
                $err_card="!Card must be selected";
            }
            else
            {
                $card=$_POST["card"];
            }

//CARD DATE SELECTION VALIDATION
 
            if(empty($_POST["exmonth"]))
            {
                $err_exmonth="Month must be selected   ";
            }
            else
            {
                $exmonth=$_POST["exmonth"];
            }


            if(empty($_POST["exyear"]))
            {
                $err_exyear="Year must be selected";
            }
            else
            {
                $exyear=$_POST["exyear"];
            }

//SECURITY CODE VALIDATION

            if(empty($_POST["scode"]))
            {
                $err_scode="Enter Security Code";
            }
            else if(strlen($_POST["scode"])<=6)
            {
                $err_scode="Security code must contain 4 to 6 digits ";
            }
            else if(strpos($_POST["scode"]," "))
            {
                $err_scode="Security Code should not contain whitespace";
            }
            
            else if(!is_numeric($_POST["scode"]) )
            {
                $err_scode="Security Code should not contain letters";
            }
            else
            {   
                $pass=htmlspecialchars($_POST["scode"]);
            }

           
        
        }
    ?>
    



<html>
<head></head>
<body>

        <fieldset style ="width:600px">
            <h2 align="center">PAYMENT INFORMATION</h2>
            <form  action="" method="post" >
                <table align="center">
                    <tr>
                        <td><span>Choose Card Type:</span></td>
                        <td><input type="radio" name="card" value="CreditCard">Credit Card </br>
                            <input type="radio" name="card" value="DebitCard">Debit Card
                            <span><?php echo $err_card;?></span></td>
                    </tr>
                    <tr>
                        <td><span>Name:</span></td>
                        <td><input type="text" name="name" placeholder ="NAME ON CARD">
                            <span><?php echo $err_name;?></span></td>
                    </tr>
                   
                    <tr>
                        <td><span>Card Number:</span></td>
                        <td><input type="text" name="cnum" placeholder ="CARD NUMBER">
                        <span><?php echo $err_cnum;?></span>
                    
                        
                    </tr>
                   

                    <tr>
                        <td><span>Expaire Date:</span></td>
                        <td><select name ="exmonth" style ="width:177px">
                        <option disabled selected>Month</option>
                        <?php         for($month = 1; $month <= 12; $month++)         echo"<option value = '".$month."'>".$month."</option>";     ?>
                        </select>
                        <span><?php echo $err_exmonth;?></span></br>

                        <select name ="exyear" style ="width:177px">
                        <option disabled selected>Year</option>
                        <?php         for($year = 2021; $year <= 2031; $year++)         echo"<option value = '".$year."'>".$year."</option>";     ?>
                        </select>

                      
                      
                        <span><?php echo $err_exyear;?></span></td>
                    </tr>
                
                    <tr>
                        <td><span>Security Code:</span></td>
                        <td><input type="text" name="scode" placeholder ="SECURITY CODE" size="20">
                        <span><?php echo $err_scode;?></span>
                    
                        
                    </tr>
                    
                    
                    <tr>
                       <td colspan="3" align="center"><span><input type="submit" value="SUBMIT" ></span></td>
                    </tr>

                </table>


            </form> 
    </fieldset>   
</body>
</html>
