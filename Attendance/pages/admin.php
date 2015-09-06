<?php  
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=5) 
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<a href="addteacher.php"><button class="button" id="login">Add Teacher</button></a>
	<a href="delteacher.php"><button class="button" id="signup">Delete Teacher</button></a>
</body>
</html>