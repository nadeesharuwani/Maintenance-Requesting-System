<?php
include_once("./connection.php");

if(isset($_POST['submit'])){
	$user_name=$_POST['user_name'];
	$password=$_POST['password'];
	
	
	$query="insert into userlogin(user_name,password) values ('$user_name','$password')";
	
	mysqli_query($con,$query);
}

?>