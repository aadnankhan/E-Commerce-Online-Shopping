<?php

ob_start();
session_start();
if($_SESSION['email'] !='admin')
{
	header('location:singin.php');
}


?>


<html>
<head>
    <title></title>
</head>
<body>

<h2>ADMIN PANEL</h2>


<ul>
<li><a href="show.php">USER-INFORMATION</a></li>
</ul>

<a href="logout.php">logout</a>
</body>
</html>