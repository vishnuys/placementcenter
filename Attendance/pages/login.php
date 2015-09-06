<?php  
	session_start();
	if (isset($_SESSION['login'])) 
	{
		if ($_SESSION['login']==1) 
		{
			header('location:teacher.php');
		}
		elseif ($_SESSION['login']==2) 
		{
			header('location:student.php');
		}
		elseif ($_SESSION['login']==5) {
			header('location:admin.php');
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<form action="signin.php" method="POST">
		<input type="text" class="login" id="username" name="uname" placeholder="Username" required>
		<input type="password" class="login" id="password" name="pwd" placeholder="Password" required>
		<input type="submit" class="submit" value="Login">
		<a href="../1353/fbconfig.php"><img src="../images/fblogo.png" id="img"></a>	
		<a href="../1353/fbconfig.php" class="fblogin">Login with Facebook</a>	
	</form>
</body>
</html>