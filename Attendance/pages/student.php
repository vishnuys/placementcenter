<?php  
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=2) 
{
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Login</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<a href="viewclass.php"><button class="button" id="login">View All Classes</button></a>
	<a href="viewcur.php"><button class="button" id="signup2">View Current Classes</button></a>
</body>
</html>