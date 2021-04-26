<?php



include "Controller/crudaddhousevalidation.php";

?>


<!DOCTYPE html>
<html>

<head>
<link rel="stylesheet" href="homepage.css">
</head>


<body>

	
		<table>
			<div class="search">
				<div class="topnav">
					<a href=http://localhost/BachApp-Web/homepageadmin.php>Back</a>

					<h1 style="text-align:center;color:orange">CRUD house</h1>
				</div>


				<form action="" onsubmit="return validate()" method="post">
					<tr>

						<p style="text-align:center;">
							<label style="color:brown">owner:</label> <input type="text" name="owner" id="owner" value="<?php echo $owner; ?>" placeholder="owner name">
						<p style="text-align:center;"><span id="err_owner" class="err-msg"><?php echo $err_owner; ?></span>
						</p>
						<p style="text-align:center;">
							<label style="color:brown">Price:</label> <input type="text" name="price" id="price" value="<?php echo $price; ?>" placeholder="bdt/month">
						<p style="text-align:center;"><span id="err_price" class="err-msg"><?php echo $err_price; ?></span>
						</p>
					<tr>
						<p style="text-align:center;">
							<label style="color:brown">location:</label> <input type="text" name="location" id="location" placeholder="City" value="<?php echo $location; ?>">
						<p style="text-align:center;"><span id="err_location" class="err-msg"><?php echo $err_location; ?></span>
					</tr>
					</p>
					<tr>
						<p style="text-align:center;">
							<label style="color:brown">Size:</label> <input type="text" name="size" id="size" value="<?php echo $size; ?>" placeholder="Sft">
						<p style="text-align:center;"><span id="err_size" class="err-msg"><?php echo $err_size; ?></span>
						<p style="text-align:center;">
							<label style="color:brown">Contact:</label> <input type="text" name="contact" id="contact" value="<?php echo $contact; ?>" placeholder="Contact">
						<p style="text-align:center;"><span id="err_contact" class="err-msg"><?php echo $err_contact; ?></span>
						</p>

						<p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="addBtn" value="Add"></p>

					</tr>
			</div>

		</table>

		<p>
		<div class="tren">
			<h1>Available house</h1>
			<?php
			if ($result) {

				$rowCount = mysqli_num_rows($result);
			}
			if ($rowCount < 1) {
				echo '<div class="container container2 title-border">
                    <h4>No houses Yet!</h4>
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
                          <td>  <a href="http://localhost/BachApp-Web/crudupdatehouse.php?id=' . $row["ID"] . '"> EDIT</a></td>
						  <td> <a href="http://localhost/BachApp-Web/cruddeletehouse.php?id=' . $row["ID"] . '"> DELETE</a></td>
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
<script src="JS/crudvalidation.js"> </script>

</html>