<?php
session_start();
include "db.php";
if(!isset($_SESSION['name'])){
    header('Location:login.php');
  }

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>SHOW DATA</title>
  </head>
  <body>
  <?php 
              if(isset($_SESSION['delete'])){
               if($_SESSION['delete']==1){
               echo '<div class="alert alert-success">
                <strong>Success!</strong> DATA DELETED.
              </div>';
              unset($_SESSION['delete']);
               }elseif($_SESSION['delete']==0){
                echo '<div class="alert alert-danger">
                <strong>Failes!</strong> DATA NOT DELETED.
              </div>'; 
              unset($_SESSION['delete']);
               }
            }
               ?> 
    <h1>DATA</h1>
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Package name</th>
      <th scope="col">Name</th>
      <th scope="col">Banner id</th>
      <th scope="col">Reward id</th>
      <th scope="col">interstitial_id</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php
               include "db.php";
                          //for contact info
              $sql1="SELECT * FROM `app_add` WHERE 1";
              $res=mysqli_query($conn,$sql1);
                    if(mysqli_num_rows($res)>0){
                        while($row = mysqli_fetch_assoc($res)){
                          echo"<tr>
                            <td >".$row['package_name']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['banner_id']."</td>
                            <td>".$row['reward_id']."</td>
                            <td>".$row['interstitial_id']."</td>
                            <td><button><a  style=\"color:green\" href=\"update_form.php?p_name=".$row['package_name']."\">edit</a></button></td>
                            <td><button ><a style=\"color:red\" href=\"delete.php?p_name=".$row['package_name']."\">delete</a></button></td>
                        </tr>";
                      }
                    }
     ?>
  </tbody>
</table>
<button style="background-color:rgb(0,123,255); width:20%;height:20%;text-align:center;font-size: 16px;"><a href="index.php" style="background-color:rgb(0,123,255); color:white">GO BACK</a></button> 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>