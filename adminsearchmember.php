
<?php
      include "Controller/adminsearchmemberValidation.php";
       session_start();
       $_SESSION["username"]="admin";
       $_SESSION["uname"]=$uname;

       if($_SESSION["username"]!=="admin"){
            header("Location:signin.php");
       }
       //include "Controller/adminaddmemberValidation.php";
       $row="";
 ?>
    


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Search</title>
       
</head>
<body>
<div class="right">
        <input type="submit" class="right my-font btn-sup" name="submit" value="Log-out">  
    </div>
<div class="search" id="search">
        <fieldset style ="width:600px" >
        <h2 align="center">SEARCH MEMBER</h2>

            <form action="" method="post">
                <table align="center">
                    
                <tr>
                        <td><span>Username:</span></td>
                        <td><input type="text" name="uname" placeholder ="User Name">
                            <span><?php echo $err_uname;?></span></td>
                            <td colspan="3" align="center"><span><button id="searchBtn" value="Search" >Search</button></span></td>
                    </tr>
                    <?php
                        echo "<tr><td>
                        <table>
                                <th>name </th>
                                <th>pass</th>
                                <th>type </th>";

                     foreach($result as $row){
                        echo "<tr>";
                        echo    "<td>".$row["username"]."</td>";
                        echo    "<td>".$row["password"]."</td>";
                        echo    "<td>".$row["type"]."</td>";
                        echo    '<td><span><button name="updateBtn" value="Update" class="updateBtn" onclick="hideDiv()" >Update</button></span></td>';
                        echo    '<td><span><input type="submit" name="deleteBtn" value="Delete" ></span></td>';
                            echo "</tr>";
                        
                     }
                       
                     echo "</table></td></tr>";
                    ?>
                    
             
                </table>


            </form> 
    </fieldset>
</div> 
<script src="JS/App.js"></script> 
</body>
</html>