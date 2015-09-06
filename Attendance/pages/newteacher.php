<?php 
require "connect.php";
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$pwd2=$_POST['pwd2'];

if (is_null($uname) or is_null($pwd) or is_null($pwd2)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="addteacher.php"
		</script>';
}
if ($pwd!=$pwd2) 
{
	echo '<script type="text/javascript">
		window.alert("Passwords do not match.")
		window.location.href="addteacher.php"
		</script>';
}
$sql=mysql_query("INSERT INTO user VALUES ('$uname','$pwd',1)");
if ($sql) 
{
	echo '<script type="text/javascript">
		window.alert("New teacher added successfully.")
		window.location.href="admin.php"
		</script>';
}
else
{
	echo '<script type="text/javascript">
		window.alert("New teacher could not be added. Please try again.")
		window.location.href="addteacher.php"
		</script>';
}

?>