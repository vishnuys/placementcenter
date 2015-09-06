<?php  
require "connect.php";
session_start();

$cid=$_GET['id'];
$uname=$_SESSION['username'];

if (is_null($cid) or is_null($uname)) 
{
	echo '<script type="text/javascript">
		window.alert("Invalid. Try Again.")
		window.location.href="viewcur.php"
		</script>';
}

$sql=mysql_query("SELECT id FROM student WHERE uname='$uname' ") or die(mysql_error());
if (mysql_num_rows($sql)) 
{
	$res=mysql_fetch_array($sql);
	$sid=$res[0];
	$sql2=mysql_query("SELECT * FROM class WHERE id=$cid");
	if (mysql_num_rows($sql2)) 
	{
		$ins=mysql_query("INSERT INTO attending VALUES ($cid,'$sid')");
		if ($ins) 
		{
			echo '<script type="text/javascript">
				window.alert("Attendance Added.")
				window.location.href="student.php"
				</script>';
		}
		else
			echo '<script type="text/javascript">
				window.alert("Attendance may already be added. If not, try again.")
				window.location.href="viewcur.php"
				</script>';
	}
	else
		echo '<script type="text/javascript">
			window.alert("Invalid Class ID. Try Again.")
			window.location.href="viewcur.php"
			</script>';
}
else
	echo '<script type="text/javascript">
		window.alert("Invalid Username. Try Again.")
		window.location.href="viewcur.php"
		</script>';

?>