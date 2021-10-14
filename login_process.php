<?php 
session_start();
include "db.php";
 echo $_POST['email'];
echo "hello";
if(isset($_POST['submit']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM `admin-login` WHERE email='".$email."'";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0)
    {
        while($row = mysqli_fetch_assoc($result))
        {
             if(password_verify($password,$row['password']))
            // if($password==$row['password'])
             {
                 echo "hello";
                $_SESSION['login']=1;
                $_SESSION['name']=$row['name'];
                echo"hello";
                header("Location:index.php");
            }
            else
            {
                echo "incorrect password";
                $_SESSION['login']=0;
            }
        }
        
     }
}

?>