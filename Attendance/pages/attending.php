<?php
session_start();
if (!isset($_SESSION['login']) OR $_SESSION['login']!=1) 
{
	header('location:login.php');
}
require "connect.php";

$cname=$_POST['cname'];
if (is_null($cname)) 
{
	echo '<script type="text/javascript">
		window.alert("Please select the correct value.")
		window.location.href="viewstu.php"
		</script>';
}
$sql=mysql_query("SELECT id FROM class WHERE name='$cname'") or die(mysql_error());
if ($sql)
{
	$res=mysql_fetch_array($sql);
	$id=$res['id'];
	$att=mysql_query("SELECT a.cid,s.name FROM attending a,student s WHERE a.cid=$id AND a.sid=s.id");
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
	<table>
		<?php if (!mysql_num_rows($att)): 
		{
			echo "<center><h4>No students are attending.</h4></center>";
		} ?>
		<?php else: ?>
		<tr>
			<th>Student ID</th>
			<th>Student Name</th>
		</tr>
		<?php
			while ($res=mysql_fetch_array($att)) 
			{
				echo "<tr>
						<td>".$res[0]."</td>
						<td>".$res[1]."</td>
				     </tr>";
			}
			$total=mysql_num_rows($att);
			echo "<h4>Total No. of Students = ".$total."</h4>";	
		?>
		<?php endif ?>
	</table>
</body>
</html>