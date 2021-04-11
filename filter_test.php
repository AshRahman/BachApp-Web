<?php
function search_donar($_POST) {
    $location = $_POST['location'];
    $size = $_POST['size'];
    $price = $_POST['price'];
    

    //Do real escaping here

    $query = "SELECT * FROM flat";
    $conditions = array();

    if(! empty($location)) {
      $conditions[] = "name='$location'";
    }
    if(! empty($size)) {
      $conditions[] = "sex='$size'";
    }
    if(! empty($price)) {
        $conditions[] = "sex='$price'";
      }
      
    

    $sql = $query;
    if (count($conditions) > 0) {
      $sql .= " WHERE " . implode(' AND ', $conditions);
    }

    $result = mysql_query($sql);

    return $result;
}


?>