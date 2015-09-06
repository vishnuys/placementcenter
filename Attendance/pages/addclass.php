<?php  
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=1) 
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add Class</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<form action="newclass.php" method="POST">
		<input type="text" class="login" id="username" name="cname" placeholder="Class Name">
		<input type="text" class="login" id="password" name="time" placeholder="Class Time in HH:MM (24-hours)">
		<input type="submit" class="submit" value="Add Class">
	</form>
</body>
</html>