<?php
require 'connection.php';

$reqid=$_POST['reqid'];
$user_name=$_POST['user_name'];
$requestedWork=$_POST['requestedWork'];
$Confirmation=$_POST['Confirmation'];

$query="INSERT INTO adminsend(reqid,user_name,requestedWork,Confirmation) VALUES('$reqid','$user_name','$requestedWork','$Confirmation')";
mysqli_query($con,$query);

?>