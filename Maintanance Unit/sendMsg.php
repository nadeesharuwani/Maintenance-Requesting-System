<?php
require 'connection.php';
$reqid=$_POST['reqid'];
$name=$_POST['name'];
$email=$_POST['email'];
$faculty=$_POST['faculty'];
$work=$_POST['work'];
$massege=$_POST['massege'];

$query="INSERT INTO form(reqid,name,email,faculty,work,massege) VALUES('$reqid','$name','$email','$faculty','$work','$massege')";
mysqli_query($con,$query);
header("Location: userhome.html");
?>