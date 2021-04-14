<?php
      include "Controller/adminsearchmemberValidation.php";
      include "Controller/logoutValidation.php";
      session_start(); 
      if(!isset($_SESSION["user_type"])){
          header("Location:userError.php");
      }

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
<form action="" method="post">
        <input type="submit" class="right my-font btn-sup" name="logoutBtn" value="Log-out"> 
        </form> 
    <form action="homepageadmin.php">
    <input type="submit" class="backBtn" id="backBtn" name="backBtn" value="Go-Back">
    </form>
    <form action="adminaddbachelor.php">
    <input type="submit" class="addBtn" id="addBtn" name="addBtn" value="Add Member">
    </form>


    <div id="search_div">
        <fieldset style="width:600px">
            <h2 align="center">SEARCH MEMBER</h2>

            <form action="" method="post">
                <table align="center">

                    <tr>
                        <td><span>Username:</span></td>
                        <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="Username">
                        <span><?php echo $err_user_name; ?></span></br>
                    </td>
                        <td colspan="3" align="center"><span><button id="searchBtn" name="searchBtn"
                                    value="Search">Search</button></span></td>
                    </tr>
                    <?php
                        echo "<tr><td>
                        <table>
                                <th>name </th>
                                <th>username</th>
                                <th>password</th>
                                <th>gender</th>
                                <th>email</th>
                                <th>phone </th>";
                    if($result){
                     foreach($result as $row){
                        echo "<tr>";
                        echo    "<td>".$row["name"]."</td>";
                        echo    "<td>".$row["username"]."</td>";
                        echo    "<td>".$row["password"]."</td>";
                        echo    "<td>".$row["gender"]."</td>";
                        echo    "<td>".$row["email"]."</td>";
                        echo    "<td>".$row["phone"]."</td>";
                        // echo    '<td><button name="updateBtn" value="Update" class="updateBtn" onclick="hideDiv()" >Update</button></td>';
                        // echo    '<td><span><input type="submit" name="deleteBtn" value="Delete" ></span></td>';
                            echo "</tr>";
                        
                     }
                    }
                       
                     echo "</table></td></tr>";
                    ?>
                    <tr>
                    <td colspan="2"><input type="submit" class="deleteBtn" id="deleteBtn" name="deleteBtn" value="Delete"></td>
                    </tr>
                </table>


            </form>
            <button name="updateBtn" value="Update" class="updateBtn" id="updateBtn" onclick="hideDiv()" >Update</button>
        </fieldset>
    </div>



                    <!-- Edit Profile Section  -->



    <div id="signup-div" style=<?php if($hasError){echo "display:block";} 
        else{echo "display:none";}?>>
        <h1 align="center">Edit Profile</h1>

        <form action="" method="post">
            <table align="center">
                <tr>
                    <td><span>Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="name" value="<?php echo $name; ?>" placeholder="<?php echo $name; ?>">
                        <span><?php echo $err_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>User Name</span></td>
                </tr>
                <tr>

                    <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" placeholder="<?php echo $user_name; ?>">
                        <span><?php echo $err_user_name; ?></span></br>
                    </td>

                </tr>

                <tr>
                    <td><span>Password</span></td>
                </tr>
                <tr>
                    <td><input type="password" name="pass" value="<?php echo $pass; ?>" placeholder="<?php echo $pass; ?>">
                        <span><?php echo $err_pass; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender<span></td>
                </tr>
                <tr>
                    <td><input type="radio" name="gender" value="Male">Male
                        <input type="radio" name="gender" value="Female">Female
                        <span><?php echo $err_gender; ?></span>
                    </td>

                </tr>

                <tr>
                    <td><span>E-mail</span></td>
                </tr>
                <tr>
                    <td><input type="text" name="email" value="<?php echo $email; ?>" >
                        <span><?php echo $err_email; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Contact Number</span></td>
                </tr>
                <tr>
                    <td>
                        <input type="text" name="contact_number" value="<?php echo $contact_number; ?>"
                            placeholder="<?php echo $contact_number; ?>">
                        <span><?php echo $err_contact_number; ?></span>
                    </td>
                </tr>
             
                <tr>
                    <td colspan="2"><input type="submit" class="saveBtn" id="saveBtn" name="saveBtn" value="Save"></td>
                            
                </tr>
            </table>
        </form>
    </div>


    <script src="JS/App.js"></script>
</body>

</html>