<?php
	session_start();
 
	if (!isset($_SESSION['id']) ||(trim ($_SESSION['id']) == '')) {
		header('index.php');
		exit();
	}
	include('conn.php');
	$query=mysqli_query($conn,"select * from user where userid='".$_SESSION['id']."'");
	$row=mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Using Cookie with Logout</title>
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    Hi I am Best person in the world.<br>
    <a href="logout.php">Logout</a>
</body>
<html>