<?php
include "db.php";
if(isset($_REQUEST["submit"]))
{
 $p_name=$_REQUEST["package_name"]; 
 $name=$_REQUEST["name"]; 
 $b_id=$_REQUEST["banner_id"]; 
 $r_id=$_REQUEST["reward_id"]; 
 $i_id=$_REQUEST["interstitial_id"];   
 
$sql="UPDATE `app_add` SET `name`='".$name."',`banner_id`=".$b_id.",`reward_id`=".$r_id.",`interstitial_id`=".$i_id." WHERE `package_name`='".$p_name."'";
if(mysqli_query($conn,$sql)){
    return 1;
}else{
    return sql_error();
}
}
?>
