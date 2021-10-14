<?php
session_start();
include "db.php";
// echo $_POST['p_name']; 
// echo $_POST['name']; 
// echo $_POST['b_id']; 
// echo $_POST['r_id']; 
// echo $_POST['i_id'];  
if(isset($_POST['submit']))
{
   
 $p_name=$_POST['p_name']; 
 $name=$_POST['name']; 
 $b_id=$_POST['b_id']; 
 $r_id=$_POST['r_id']; 
 $i_id=$_POST['i_id'];   
 
$sql="INSERT INTO `app_add`(`package_name`, `name`, `banner_id`, `reward_id`, `interstitial_id`) VALUES ('".$p_name."','".$name."',".$b_id.",".$r_id.",".$i_id.")";
if(mysqli_query($conn,$sql)){
    $_SESSION['add']=1;
    header("location:add_data_form.php");
}else{
    return sql_error();
    $_SESSION['add']=0;
}
}
?>
