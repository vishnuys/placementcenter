<?php  
require "connect.php";

$name=$_POST['name'];
$id=$_POST['id'];
$uname=$_POST['uname'];

if (is_null($name) or is_null($id) or is_null($uname)) 
{
	echo '<script type="text/javascript">
			window.alert("Please fill all the details.")
			window.location.href="studetails.php"
			</script>';
}

$ins=mysql_query("INSERT INTO student VALUES ('$name','$id','$uname')");
if ($ins) 
{
	echo '<script type="text/javascript">
			window.alert("Details Added.")
			window.location.href="student.php"
			</script>';
}

else
{
	echo '<script type="text/javascript">
			window.alert("Details could not be added. Try again.")
			window.location.href="studetails.php"
			</script>';
}

?>