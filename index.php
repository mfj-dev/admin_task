<?php
session_start();
if(!isset($_SESSION['name'])){
header("location:login.php");
}
//for self i write to check the pass
// $hashed_password = password_hash("zamstudios", PASSWORD_DEFAULT);
// var_dump($hashed_password);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body 
        {
        background-color: lightblue;
        }
    </style>
</head>
<body>
    <h1>ADMIN PANNEL</h1>
    <button style="background-color:lightgreen; width:20%;height:20%;text-align:center;font-size: 16px;"><a href="add_data_form.php" style="background-color:lightgreen">Insert data</a></button>
    <!-- <button><a href="update_form.php">update data</a></button> -->
    <br>
    <hr>
    <button style="background-color:lightgreen; width:20%;height:20%;text-align:center;font-size: 16px;"><a href="show_data.php" style="background-color:lightgreen">Get data</a></button>
    <br>
    <hr>
    <button style="background-color:lightgreen; width:20%;height:20%;text-align:center;font-size: 16px;"><a href="logout.php" style="background-color:lightgreen">logout</a></button>
</body>
</html>