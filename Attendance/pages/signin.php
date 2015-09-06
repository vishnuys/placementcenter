<?php  
require "connect.php";

$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

if (is_null($uname) or is_null($pwd)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="login.php"
		</script>';
}
$sql=mysql_query("SELECT * FROM user WHERE username='$uname' AND password='$pwd'");
if (mysql_num_rows($sql)) 
{
	$res=mysql_fetch_array($sql);
	session_start();
	$_SESSION['login']=$res['usertype'];
	$_SESSION['username']=$res['username'];
	if ($res['usertype']==1) 
	{
		header('location:teacher.php');
	}
	elseif ($res['usertype']==2) 
	{
		header('location:student.php');
	}
	elseif ($res['usertype']==5) 
	{
		header('location:admin.php');
	}
}
else
{
	echo '<script type="text/javascript">
		window.alert("Invalid credentials. Please try again.")
		window.location.href="login.php"
		</script>';
}
?>