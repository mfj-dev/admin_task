<?php
session_start();
include "db.php";
if($_REQUEST['p_name']){
    $sql="DELETE FROM `app_add` WHERE `package_name`='".$_REQUEST['p_name']."'";
    if(mysqli_query($conn,$sql)){
        $_SESSION['delete']=1;
        header("location:show_data.php");
    }
}else
{
    echo "something went wrong";
}
?>