<?php
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=2) 
{
	header('location:login.php');
}
require "connect.php";
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
		$att=mysql_query("SELECT id,name,time FROM class");
		if (!mysql_num_rows($att)): 
		{
			echo "<h4>No classes are scheduled.</h4>";
		} ?>
		<?php else: ?>
		<tr>
			<th>Class ID</th>
			<th>Class Name</th>
			<th>Class Time</th>
		</tr>
		<?php
			while ($res=mysql_fetch_array($att)) 
			{
				echo "<tr>
						<td>".$res[0]."</td>
						<td>".$res[1]."</td>
						<td>".$res[2]."</td>
				     </tr>";
			}
			$total=mysql_num_rows($att);
			echo "<h4>Total No. of Classes = ".$total."</h4>";	
		?>
		<?php endif ?>
	</table>
</body>
</html>