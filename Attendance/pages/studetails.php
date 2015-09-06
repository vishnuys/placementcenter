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
	<title>Student Details</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<form action="studet.php" method="POST">
		<input type="text" class="login" id="username" name="name" placeholder="Name" required>
		<input type="text" class="login" id="password" name="id" placeholder="Student ID" onkeyup="capitalize()" required>
		<input type="text" class="login" id="password2" name="uname" placeholder="Username" required>
		<input type="submit" class="submit" id="submit" value="Add Details">
	</form>
	<script>
		function capitalize()
		{
			var x= document.getElementById('password');
			x=x.value.toUpperCase();
			document.getElementById('password').value=x;
		}
	</script>
</body>
</html>