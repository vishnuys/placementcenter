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
	<title>Delete Teacher</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<form action="delteach.php" method="POST">
		<input type="text" class="login" id="username" name="uname" placeholder="Username of teacher" required>
		<input type="text" class="login" id="password" name="aname" placeholder="Admin Username" required>
		<input type="password" class="login" id="password2" name="pwd" placeholder="Admin Password" required>
		<input type="submit" class="submit" id="submit" value="Delete Teacher">
	</form>
</body>
</html>