<?php  

require "connect.php";

$uname=$_POST['uname'];
$aname=$_POST['aname'];
$pwd=$_POST['pwd'];

if (is_null($uname) or is_null($pwd) or is_null($aname)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="delteacher.php"
		</script>';
}
 
$sql=mysql_query("SELECT * FROM user WHERE username='$aname' AND password='$pwd' AND usertype=5");
if (mysql_num_rows($sql)) 
{
	$del=mysql_query("DELETE FROM user WHERE username='$uname'");
	if ($del) 
	{
		echo '<script type="text/javascript">
		window.alert("Delete Successful.")
		window.location.href="admin.php";
		</script>';
	}
	else
	{
		echo '<script type="text/javascript">
		window.alert("Delete Unsuccessful.")
		window.location.href="delteacher.php"
		</script>';
	}
}
else
{
	echo '<script type="text/javascript">
		window.alert("Invalid Credentials. Try again.")
		window.location.href="delteacher.php"
		</script>';
}


?>