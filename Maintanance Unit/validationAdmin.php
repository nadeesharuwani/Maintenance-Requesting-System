<?php

include_once("./connection.php");
$user_name=$_POST['user_name'];
$password=$_POST['password'];
$query="select * from adminlogin where user_name='$user_name' and password='$password'";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_assoc($result);

if($data!=null)
{ 
   $_SESSION['user_name']=$user_name;
   header("Location:Dashboard.html");
}
else
{
    header("Location:adminLogin.html");
}
?>