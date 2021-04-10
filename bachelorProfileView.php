<?php

    include 'main_header.php';
    require_once"Models/db_config.php";

    $query = "Select * from bachelorsignup where username='labib3435'";
    $result = get($query);
?>

<html>
<body>
<div id="tview-div">
<fieldset  style="width:1316px;height:615px">
    <h1 align="center">Profile</h1><br><br><br>
    <form action="" method="post">
        <table align="center" border="4" >
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Phone</th>
            </tr>
                <?php
                    foreach($result as $row){
                        echo "<tr>";
                            echo "<td>".$row["firstname"]."</td>";
                            echo "<td>".$row["lastname"]."</td>";
                            echo "<td>".$row["username"]."</td>";
                            echo "<td>".$row["email"]."</td>";
                            echo "<td>".$row["password"]."</td>";
                            echo "<td>".$row["gender"]."</td>";
                            echo "<td>".$row["phone"]."</td>";
                        echo "</tr>";
                    }
                ?>
 
        </table><br>

        <p align="center">
        <span><input type="submit" name= "submit" value="Edit Profile" class="btn btn-success" ></span>
        </p>                    


    </form>
</fieldset>
</div>

<div id="tedit-div">

</div>

</body>
</html>