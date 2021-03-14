<?php

$first_name="";
$err_first_name="";

$last_name="";
$err_last_name="";

$rating="";
$err_rating="";

$nid="";
$err_nid="";

?>

<html>
    <head></head>
    <body>
        <div>
        <h1 align="center" style="font-family:cambria">Review</h1>
            <form>
                <table>
                    <tr>
                        <td><input type="text" name="first_name" value="<?php echo $first_name; ?>" selected disabled placeholder="Meraj">
                            <span><?php echo $err_first_name; ?></span></br>
                            
                            <input type="text" name="last_name" value="<?php echo $last_name; ?>" selected disabled placeholder="Rudba">
                            <span><?php echo $err_last_name; ?></span>
                        </td>     
                    </tr>

                    <tr>
                        <td><span><b>Rating<span></td>
                    </tr>
                    <tr>
                        <td><input type="radio" name="rating" value="one">1</br>
                            <input type="radio" name="rating" value="two">2</br>
                            <input type="radio" name="rating" value="three">3</br>
                            <input type="radio" name="rating" value="four">4</br>
                            <input type="radio" name="rating" value="five">5</br>
                            <span><?php echo $err_rating; ?></span>
                        </td>
                    </tr>

                    <tr>
                        <td><span><b>NID</span></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="nid" value="<?php echo $nid;?>">
                            <span><?php echo $err_nid;?></span></br>
                        </td>
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