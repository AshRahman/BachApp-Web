<?php
	   include "Controller/searchflatvalidation.php";
       
?>
<html >

<head>
<link rel="stylesheet" href="homepage.css">
</head>
<body>
<form action="homepageadmin.php">
    <input type="submit" class="addBtn" id="addBtn" name="addBtn" value="Go-Back">
    </form>
<div class="topnav">
           <p style="text-align:center;"><input type="text" " value="<?php echo $search;?>" placeholder="Search"><input type="submit" class="search" name="searchbtn" value="Search"> </p>
    </div>
    

    <div class="roommate-search-div">
    
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
                            <td><span class="my-font">Size</span></td>

                            <td>
                            <select name="size">
                                                <option disabled selected>Size</option>
                                                    <?php 
                                                        $sizes=array("700sft","800sft","900sft","1000sft","1100sft","1200sft");
                                                        for($i=0;$i<count($sizes);$i++){
                                                            echo"<option>$sizes[$i]</option>";
                                                        }
                                                    ?>
                                            </select><?php echo $err_size;?><br>
                            </td>
                            </tr>
                            


                            <tr>
                            <td><span class="my-font">Price range</span></td>

                            <td>
                            <select name="price">
                                                <option disabled selected>Highest Price</option>
                                                    <?php 
                                                        $price=array("5000","6000","7000","8000","9000","10000","11000","12000","13000","15000","16000");
                                                        for($i=0;$i<count($price);$i++){
                                                            echo"<option>$price[$i]</option>";
                                                        }
                                                    ?>
                                            </select><?php echo $err_price;?><br>
                            </td>
                            </tr>

                       

                            
                            <tr>
                                <td colspan="2"><input type="submit" class="my-font btn-sup" name="filterbtn" value="Filter"></td>
                                
                            </tr>
            
        
        </table>
        </form>
    </div>
	<p>
	  <div class="tren">
	  <h1>Search results</h1> 
	   <?php
       echo "<tr><td>
       <table>
               <th>Owner </th>
               <th>Price</th>
               <th>Location</th>
               <th>Size</th>
               <th>Contact</th>
               ";
	 
				if($result){ 
                foreach($result as $row) {


                echo
                  '

                      <tbody>
                        <tr>
                          
                          <td>' . $row["Owner"] . '</td>
						  <td>' . $row["Price"] . '</td>
						  <td>' . $row["Location"] . '</td>
						  <td>' . $row["Size"] . '</td>
						  <td>' . $row["Contact"] . '</td>

                        </tr>
                      </tbody>';


              }	 
          echo '</table></td></tr>';
            }	  
	  ?>
	  <p style="text-align:center">
	  
	  </div>
     </p>
</body>
</html> 