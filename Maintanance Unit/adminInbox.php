<?php

include_once("./connection.php");
$query="select * from form";
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<head>
<title>UOV Maintanance unit</title>
<link href="Image/logo.png" rel="icon">

<link href="userInbox.css" rel="stylesheet">
<link href="userhome.css" rel="stylesheet">
<style>
ul{
    position: relative;
    bottom:30px;
}
.nav-menu{
    position:relative;
    bottom:12%;
    right:3%;
    width:100%;
    height:15%;
    background-color:black;
}
.btn{
    width:60px;
    height:30px;
    background-color:#24CBE9;
    border-radius:50px;
}
button:hover{
    background-color:#6CBE7F;
}
</style>
</head>
<body class="div">

<body>
<center><table class="styled-table" class="center">
    <tr>
        <th>Request Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Faculty</th>
        <th>Work</th>
        <th>Request</th>
    </tr>




<?php

while($data=mysqli_fetch_array($result))
{
    ?>
    <tr>
    
    <td><?php echo $data['reqid']?></td>
    <td><?php echo $data['name']?></td>
    <td><?php echo $data['email']?></td>
    <td><?php echo $data['faculty']?></td>
    <td><?php echo $data['work']?></td>
    <td><?php echo $data['massege']?></td>
    <td><button onclick="window.location.href ='adminsend.html';" class="btn"> confirm </button></td>
    </tr>
    <?php
}

?>
</table>
</center>
</body>
</html>