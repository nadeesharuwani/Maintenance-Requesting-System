<?php

include_once("./connection.php");
$query="select * from adminsend ";
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
    bottom:15px;
}
.nav-menu{
    position:relative;
    bottom:12%;
    right:3%;
    width:100%;
    height:15%;
    background-color:black;
}
</style>
</head>

<body class="div">
<div class="nav-menu">
            <div class="menu" id="id1">
                <ul>
                    <li><a href="userhome.html" >Homepage</a></li>
                    <li><a href="Request.html">Request</a></li>
                    <li><a href="userInbox.php">Inbox</a></li>
                    <li><a href="home.html">Log out</a></li>
                    
                </ul>
            </div>
		</div>   
<center><table class="styled-table" class="center">
    <tr>
        <th>Request Id</th>
        <th>user name</id>
        <th>requestedWork</th>
        <th>Confirmation</th>
        
    </tr>




<?php

while($data=mysqli_fetch_array($result))
{
    ?>
    <tr>
    <td><?php echo $data['reqid']?></td>
    <td><?php echo $data['user_name']?></td>
    <td><?php echo $data['requestedWork'] ?></td>
    <td><?php 
    if($data['Confirmation']==1)
    {
        echo "Accept";
    }
    else
    {
        echo "Not Accept";
    }
    ?></td>
    </tr>
    <?php
}

?>
</center>
</table>
</div>
</body>
</html>