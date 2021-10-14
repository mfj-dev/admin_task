<?php
session_start();
include "db.php";
$_SESSION['p_name']=$_REQUEST['p_name'];


if(!isset($_POST['submit']))
{
    $sql="SELECT * FROM `app_add` WHERE `package_name`='".$_SESSION['p_name']."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
            $_SESSION['p_name']=$row['package_name'];
            $_SESSION['name']=$row['name'];
            $_SESSION['b_id']=$row['banner_id'];
            $_SESSION['r_id']=$row['reward_id'];
            $_SESSION['i_id']=$row['interstitial_id'];
        }
    }
}elseif(isset($_POST['submit']))
{
    $sql="UPDATE `app_add` SET `package_name`='".$_POST['p_name']."',`name`='".$_POST['name']."',`banner_id`='".$_POST['b_id']."',`reward_id`='".$_POST['r_id']."',`interstitial_id`='".$_POST['i_id']."' WHERE`package_name`='".$_SESSION['p_name']."' ";
    if(mysqli_query($conn,$sql))
    {
        $_SESSION['update']=1;  
        $_SESSION['name']=$_POST['name'];
        $_SESSION['b_id']=$_POST['b_id'];
        $_SESSION['r_id']=$_POST['r_id'];
        $_SESSION['i_id']=$_POST['i_id'];
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>UPDATE DATA </title>
  </head>
  <body>
  <div class="container">
            <form class="form-horizontal" role="form" action="" method="post">
            <?php 
              if(isset($_SESSION['update'])){
               if($_SESSION['update']==1){
               echo '<div class="alert alert-success">
                <strong>Success!</strong> DATA UPDATED.
              </div>';
              unset($_SESSION['update']);
               }elseif($_SESSION['update']==0){
                echo '<div class="alert alert-danger">
                <strong>Failes!</strong> DATA NOT UPDATED.
              </div>'; 
              unset($_SESSION['update']);
               }
            }
               ?> 
                <h2>Update Data</h2>
                <div class="form-group">
                    <label for="p_name" class="col-sm-3 control-label">Package Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="p_name" name="p_name" placeholder="package name" value=<?php echo $_SESSION['p_name']?> class="form-control" autofocus readonly required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="name" name="name" placeholder="name" value=<?php echo $_SESSION['name']?> class="form-control" autofocus requiredx>
                    </div>
                </div>
                <div class="form-group">
                    <label for="b_id" class="col-sm-3 control-label">Banner ID </label>
                    <div class="col-sm-9">
                        <input type="text" id="b_id" name="b_id" value=<?php echo $_SESSION['b_id']?> placeholder="1,2,3,4 etc" class="form-control" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="r_id" class="col-sm-3 control-label">Reward ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="r_id" name="r_id" value=<?php echo $_SESSION['r_id']?> placeholder="1,2,3,4 etc" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="i_id" class="col-sm-3 control-label">Interstitial ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="i_id" name="i_id" value=<?php echo $_SESSION['i_id']?> placeholder="1,2,3,4 etc" class="form-control">
                    </div>
                </div>
                
                <input type="submit" name="submit" class="btn btn-primary btn-block" value="Update Data">
            </form> <!-- /form -->
            <br>
            <button style="background-color:rgb(0,123,255); width:20%;height:20%;text-align:center;font-size: 16px;"><a href="show_data.php" style="background-color:rgb(0,123,255); color:white">GO BACK</a></button> 
        </div> <!-- ./container -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>