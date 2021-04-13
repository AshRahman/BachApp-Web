<?php
include "Controller/crudaddhousevalidation.php";
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="homepage.css">
<body>

<form action="" method="post">
<table>
<div class="search">
<div class="topnav">
      <a href=http://localhost/homepage/homepageadmin.php >Back</a>
	  <a href=http://localhost/homepage/crudaddhouse.php >Add</a>
      <a href=http://localhost/homepage/crudupdatehouse.php >Update</a>
	  <h1 style="text-align:center;color:orange">CRUD HOUSE</h1>
    </div>               
				   
                    

					<tr>
					
					<p style="text-align:center;">
					<label style="color:brown">owner:</label> <input type="text" name="owner" value="<?php echo $owner;?>" placeholder="owner name">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_owner; ?></span>
					</p>
					<p style="text-align:center;">
					<label style="color:brown">Price:</label> <input type="text" name="price" value="<?php echo $price;?>" placeholder="bdt/month"> 
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_price; ?></span>
                    </p>
					<tr>
					<p style="text-align:center;" >
				    <label style="color:brown">Location:</label> <input type="text" name="location" placeholder="City" value="<?php echo $location;?>">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_location; ?></span>
					</tr>
					</p>
					<tr>
					<p style="text-align:center;">
					 <label style="color:brown">Size:</label> <input type="text" name="size" value="<?php echo $size;?>" placeholder="Sft">
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_size; ?></span>
					<p style="text-align:center;">
					<label style="color:brown">Contact:</label> <input type="text" name="contact" value="<?php echo $contact;?>" placeholder="Contact"> 
					<p style="text-align:center;"><span class="err-msg"><?php echo $err_contact; ?></span>
					</p>
					
					<<p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="addBtn" value="Add"></p>
					</tr>
					</div>
					
</table>

<p>
	  <div class="tren">
	  <h1>Available House</h1> 
	  <?php
	  if ($result) {
              
              $rowCount = mysqli_num_rows($result);
            }
            if ($rowCount < 1) {
              echo '<div class="container container2 title-border">
                    <h4>No house Yet!</h4>
                  </div>';
            } else {
				
	  echo
                '
                  <table class="table table-hover theme-bg">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Owner</th>
						<th scope="col">price</th>
                        <th scope="col">Location</th>
						<th scope="col">Size</th>
                        <th scope="col">Contact</th>
                      </tr>
                    </thead>
                  ';
				  
       while ($row = mysqli_fetch_assoc($result)) {


                echo
                  '

                      <tbody>
                        <tr>
                          
                          <td>' . $row["ID"] . '</td>
                          <td>' . $row["Owner"] . '</td>
						  <td>' . $row["Price"] . '</td>
						  <td>' . $row["Location"] . '</td>
						  <td>' . $row["Size"] . '</td>
						  <td>' . $row["Contact"] . '</td>

                        </tr>
                      </tbody>';


              }	 
          echo '</table>';
			}		  
	  ?>
	  <p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="showBtn" value="Show"></p>
	  </div>
	  
     </p>
	 
</body>
</head>
</html>	


						