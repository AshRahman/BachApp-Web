<?php
    session_start(); 
    if(!isset($_SESSION["user_type"])){
        header("Location:userError.php");
    }
    require_once"Model/db_config.php";
    include "homelandlord.php";

    $query = "Select * from property";
    $result = get($query);
    ?>
    <table border="1" style="border-collapse:collapse">
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Floor</th>
            <th>Flat</th>
            <th>Gender</th>
            <th>Rent</th>
            <th>Address</th>
        </tr>
<?php
    foreach($result as $row){
        echo "<tr>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["email"]."</td>";
            echo "<td>".$row["phone"]."</td>";
            echo "<td>".$row["floor"]."</td>";
            echo "<td>".$row["flat"]."</td>";
            echo "<td>".$row["gender"]."</td>";
            echo "<td>".$row["rent"]."</td>";
            echo "<td>".$row["address"]."</td>";
        echo "</tr>";
    }
?>
    <table>