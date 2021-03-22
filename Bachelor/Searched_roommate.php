<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

.search-roommate-div{
                border:1px solid rgb(245,245,245);
                margin:auto;
                width:30%;
                margin-top:5%;
                background-color:rgb(255,255,255);
                padding:20px;

            }

    table, th, td {
    border-collapse: collapse;
    border: 1px solid black;
    padding: 10px;
    text-align: left;
}
th {
  background-color: #4CAF50;
  color: white;

}

.right {
    display: flex;
  justify-content: flex-end;
}
.my-font{
                font-size:20px;
                font-family:consolas;
            }
            .btn-sup{
                background-color:rgb(112,191,65);
                border:none;
                color:white;
                width:5%;
                border-radius:3px;
                padding:5px;
            }
            .btn-sup:hover{
                background-color:rgb(100,170,40);
            }

            .btn-sup:active{
                background-color:green;
            }


</style>
<body>

    
<div class="right">
        <a href="../Signin/signin.php"  class="right my-font btn-sup"> Log out </a>
    </div>
    <div class="search-roommate-div">
        <h1 align="center" style="font-family:cambria">Found Roomate</h1>
        <table align="center">
            <tr>
                <th> </th>
                <th>Location</th>
                <th>Floor</th>
                <th>Gender</th>
                <th>Rent</th>
                <th>Advance Rent</th>
            </tr>
            <tr>
            <td><input type="radio" name="flat-choice-button" value="1">
                <td>Mirpur</td>
                 <td>2nd</td>
                <td>Male</td>
                <td>6000</td>
                <td>12000</td>
            </tr>
            <tr>
                <td><input type="radio" name="flat-choice-button" value="2">
                <td>Mogbazar</td>
                <td>3rd</td>
                <td>Female</td>
                <td>8000</td>
                <td>16000</td>
            </tr> 
              
        
        
        
        
        
        </table>
        
    
    </div>
    
</body>
</html>