<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<form action="newstu.php" method="POST">
		<input type="text" class="login" id="username" name="uname" placeholder="Username" required>
		<input type="password" class="login" id="password" name="pwd" placeholder="Password" required>
		<input type="password" class="login" id="password2" name="pwd2" placeholder="Confirm Password" required>
		<input type="submit" class="submit" id="submit" value="Sign Up">
		<a href="../1353/fbconfig.php"><img src="../images/fblogo.png" id="img2"></a>
		<a href="../1353/fbconfig.php" class="fblogin" id="fb">Login with Facebook</a>		
	</form>
</body>
</html>