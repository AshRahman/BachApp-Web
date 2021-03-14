<?php

$user_name="logedin user name";
$err_user_name="";

$rating="";
$err_rating="";

$nid="";
$err_nid="";

$comment="";
$err_comment="";



if($_SERVER["REQUEST_METHOD"] == "POST"){

    $nid=$_POST["nid"];
    $comment=$_POST["comment"];


    if(empty($user_name)){
        $err_user_name="Please enter your username";
    }

    if(!isset($_POST["rating"])){
        $err_rating="Please give a rating";
    }
    else{
        $rating=$_POST["rating"];
    }

    if(empty($_POST["nid"])){
        $err_nid="Please fill this field";
    }
    elseif(!is_numeric($_POST["nid"])){
        $err_nid="Please insert only numeric value";
    }

    if(empty($_POST["comment"])){
        $err_comment="Please write your comment";
    }
    elseif(strlen($_POST["comment"]) > 50){
        $err_comment="Comment must not exceed 50 words";
    }
}

?>

<html>
    <head>
        <style>
            body{
                background-color:rgb(240,240,240);
            }
            .review-div{
                border:1px solid black;
                margin:auto;
                width:50%;
                margin-top:6%;
                background-color:rgb(255,255,255);
                padding:20px;
            }

            .my-font{
                font-size:22px;
                font-family:consolas;
            }

            .err-msg{
                color:red;
                font-size:14px;
                font-family:consolas;

            }

            .header{
            height:40px;
            background-color:rgb(40,174,252);
            position:fixed;
            top:0;
            left:0;
            width:100%; 
            color:white;
            text-align:center;
        }
        </style>
    </head>
    <body>
    <div class="header"><span style="text-align:center"></span>Advertisement Tab</div>
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
                            <input type="submit" name="submit" value="OK">
                        </td>
                    </tr>



                </table>
            </form>
        </div>
    </body>
</html>