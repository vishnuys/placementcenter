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
	<title>View Attending Students</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<form action="attending.php" method="POST">
		<select class="drop" name="cname">
			<?php 
				require "connect.php";
				$sql=mysql_query("SELECT * FROM class");
				if (mysql_num_rows($sql)) 
				{
				  	while ($res=mysql_fetch_array($sql)) 
				  	{
				  		echo "<option value='".$res['name']."'>".$res['name']."</option>";
				  	}
				}  
			?>
		</select>
		<input type="submit" class="submit" value="View Attendance">
	</form>

</body>
</html>