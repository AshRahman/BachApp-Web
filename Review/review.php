<?php

$user_name="Logged In User Name";
$err_user_name="";

$rating="";
$err_rating="";

$nid="";
$err_nid="";

$comment="";
$err_comment="";

$hasError=false;





if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nid=$_POST["nid"];
    $comment=$_POST["comment"];


    

    if(!isset($_POST["rating"])){
        $err_rating="Please give a rating";
        $hasError=true;
        
    }
    else{
        $rating=$_POST["rating"];
    }

    if(empty($_POST["nid"])){
        $err_nid="Please fill this field";
        $hasError=true;
        
    }
    elseif(!is_numeric($_POST["nid"])){
        $err_nid="Please insert only numeric value";
        $hasError=true;
        
    }
    else{
        $nid=$_POST["nid"];
    }

    if(empty($_POST["comment"])){
        $err_comment="Please write your comment";
        $hasError=true;
        
    }
    elseif(strlen($_POST["comment"]) > 50){
        $err_comment="Comment must not exceed 50 words";
        $hasError=true;
      
    }
    else{
        $comment=$_POST["comment"];
    }

    if($hasError===false){
        header("Location:http://localhost/BachApp-Web/renteradvertisement.php");
       
        
    }


    
}

?>

<html>
    <head>
        
    </head>
    <body>
    <div class="header"><span style="text-align:center"></span>Apartment Finder</div>
        <div class="review-div">
        <h1 align="center" style="font-family:cambria">Review</h1>
            <form action="" method="post">
                <table align="center">
                    <tr>
                        
                        <td><input type="text" name="user_name" value="<?php echo $user_name; ?>" disabled>
                            <span style="err-msg"><?php echo $err_user_name; ?></span></br>
                               
                        </td>
                            
                    </tr>

                    <tr>
                        <td><span class="my-font"><b>Rating Scale<span></td>
                    </tr>
                    <tr>
                        <td><select name="rating">
                                <option disabled selected>Choose one</option>
                                <option>5 Star</option>
                                <option>4 Star</option>
                                <option>3 Star</option> 
                                <option>2 Star</option>
                                <option>1 Star</option>
                                
                            </select>
                            <span class="err-msg"><?php echo $err_rating;?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><span class="my-font"><b>NID</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nid" value="<?php echo $nid;?>">
                            <span class="err-msg"><?php echo $err_nid;?></span></br>
                        </td>
                    </tr>
                    <tr>
                        <td><span class="my-font">Comment</span></td>
                    </tr>
                    <tr>
                        <td><textarea name="comment" rows="10" cols="50"><?php echo $comment; ?></textarea></br>
                            <span class="err-msg"><?php echo $err_comment; ?></span></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                        <input type="submit" class="my-font btn-mine" name="submit" value="Submit"></br></br></br>
                    </tr>  
                </table>
            </form>
        </div>
    </body>
</html>