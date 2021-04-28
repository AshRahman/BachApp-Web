<?php
    include "Controller/bookingValidation.php";
    session_start();
    $user_name=$_SESSION["user_name"];
    //echo $user_name;


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>
	<div class="tren">
		<h1>Available House</h1>
		<?php

		if ($result) {

			echo
			'
                  <table class="table table-hover theme-bg">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Owner</th>
                        <th scope="col">E-mail</th>
						<th scope="col">phone</th>
						<th scope="col">floor</th>
						<th scope="col">Type</th>
						<th scope="col">price</th>
                        <th scope="col">Location</th>
						
                        
                      </tr>
                    </thead>
                  ';

			foreach ($result as $row) {


				echo
				'

                      <tbody>
                        <tr>
                          
                          <td>' . $row["id"] . '</td>
                          <td>' . $row["username"] . '</td>
                          <td>' . $row["email"] . '</td>
						  <td>' . $row["phone"] . '</td>
						  <td>' . $row["floor"] . '</td>
						  <td>' . $row["flat"] . '</td>
						  <td>' . $row["rent"] . '</td>
						  <td>' . $row["address"] . '</td>
						  
						  
                          
						  <td> <a href="http://localhost/BachApp-Web/confirmBook.php?id=' . $row["id"] . '"> Book</a></td>
                        </tr>
                      </tbody>';
			}
			echo '</table>';
		}
		?>
		<form>
			<p style="text-align:center;"><input type="submit" class="my-font btn-sup" name="showBtn" value="Show"></p>
		</form>
	</div>
	</p>

    
</body>
</html>