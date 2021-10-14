<?php
session_start();
include "db.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ADD DATA </title>
  </head>
  <body>
  <div class="container">
            <form class="form-horizontal" role="form" action="add_data.php" method="post">
            <?php 
              if(isset($_SESSION['add'])){
               if($_SESSION['add']==1){
               echo '<div class="alert alert-success">
                <strong>Success!</strong> DATA INSERTED.
              </div>';
              unset($_SESSION['add']);
               }elseif($_SESSION['add']==0){
                echo '<div class="alert alert-danger">
                <strong>Failes!</strong> DATA NOT INSERTED.
              </div>'; 
              unset($_SESSION['add']);
               }
            }
               ?> 
                <h2>Add Data</h2>
                <div class="form-group">
                    <label for="p_name" class="col-sm-3 control-label">Package Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="p_name" name="p_name" placeholder="package name" class="form-control" autofocus required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" placeholder="name" class="form-control" autofocus requiredx>
                    </div>
                </div>
                <div class="form-group">
                    <label for="b_id" class="col-sm-3 control-label">Banner ID </label>
                    <div class="col-sm-9">
                        <input type="text" id="b_id" name="b_id" placeholder="1,2,3,4 etc" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="r_id" class="col-sm-3 control-label">Reward ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="r_id" name="r_id" placeholder="1,2,3,4 etc" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i_id" class="col-sm-3 control-label">Interstitial ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="i_id" name="i_id" placeholder="1,2,3,4 etc" class="form-control">
                    </div>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary btn-block">Insert Data</button>
                <hr>
                <button style="background-color:rgb(0,123,255); width:20%;height:20%;text-align:center;font-size: 16px;"><a href="index.php" style="background-color:rgb(0,123,255); color:white">GO BACK</a></button>   
            </form> <!-- /form -->
        </div> <!-- ./container -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>