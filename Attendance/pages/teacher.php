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
	<title>Teacher Login</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<a href="addclass.php"><button class="button" id="login">Add Class</button></a>
	<a href="viewstu.php"><button class="button" id="signup2">View Attending Students</button></a>
</body>
</html>