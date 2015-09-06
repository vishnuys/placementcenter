<?php 
require "connect.php";
$cname=$_POST['cname'];
$time=$_POST['time'];

if (is_null($cname) or is_null($time)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="addclass.php"
		</script>';
}

$sql=mysql_query("INSERT INTO class (name,time) VALUES ('$cname','$time')") OR die(mysql_error());
if ($sql) 
{
	echo '<script type="text/javascript">
		window.alert("New class added successfully.")
		window.location.href="teacher.php"
		</script>';
}
else
{
	echo '<script type="text/javascript">
		window.alert("New class could not be added. Please try again.")
		window.location.href="addclass.php"
		</script>';
}

?>