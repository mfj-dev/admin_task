<?php
include "db.php";
if(isset($_REQUEST["package_name"]))
{
$product=array();
 $p_name=$_REQUEST["package_name"];    
$sql="SELECT * FROM `app_add` WHERE `package_name`='".$p_name."'";
$ress=mysqli_query($conn,$sql);
if(mysqli_num_rows($ress)>0){
    $temp=array();
    while($row = mysqli_fetch_assoc($ress)){
        $temp['package_name']=$row['package_name'];
        $temp['name']=$row['name'];
        $temp['banner_id']=$row['banner_id'];
        $temp['reward_id']=$row['reward_id'];
        $temp['interstitial_id']=$row['interstitial_id'];
    }
    array_push($product,$temp);
   }   
   echo json_encode($product);
}else{
    echo "something went wrong with request";
}
?>
