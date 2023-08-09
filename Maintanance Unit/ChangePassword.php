<?php

include_once("./connection.php");
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$newPass=$_POST['newpassword'];
$query="select * from userlogin where user_name='$user_name' and password='$password'";
$query="update userlogin set password='$newPass' where user_name='$user_name' and password='$password'";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);

if($data!=null)
{ 
   $_SESSION['user_name']=$user_name;
   header("Location:userhome.html");
}
else
{
    header("Location:userlogin.html");
}
?>