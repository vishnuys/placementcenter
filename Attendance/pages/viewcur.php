<?php
require "connect.php";
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=2) 
{
	header('location:login.php');
}
// echo $_SERVER['REQUEST_TIME'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>View all classes</title>
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="shortcut icon" type="image/x-icon" href="../images/favicon.png" />
</head>
<body>
	<h1 id="header">Attendance Tracker</h1>
	<a href="logout.php"><button class="button" id="logout">Log out</button></a>
	<table>
	<?php
		$curtime= $_SERVER['REQUEST_TIME'];

		$querry=mysql_query("SELECT id,name,time FROM class WHERE id in (SELECT id FROM class WHERE abs($curtime-UNIX_TIMESTAMP(time))<=1800)") or die(mysql_error()); 
		if (mysql_num_rows($querry)) 
		{
			echo "<tr>
					<th>ID</th>
					<th>Name</th>
					<th>TIME</th>
				</tr>";
			while ($res=mysql_fetch_array($querry)) 
			{
				echo "<tr>
					
						<td>".$res[0]."</td>
						<td><a href='present.php?id=".$res[0]."'>".$res[1]."</a></td>
						<td>".$res[2]."</td>
					
					</tr>";
			}	
		}
		else
			echo "<h4>No Classes are scheduled at this time.</h4>";


		
	?>
	</table>
</body>
</html>