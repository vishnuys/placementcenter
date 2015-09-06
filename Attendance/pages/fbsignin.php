<?php  
require "connect.php";
session_start();

$uname=$_SESSION['FBID'];
$pwd=$_SESSION['FULLNAME'];

if (is_null($uname)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="login.php"
		</script>';
}
$sql=mysql_query("SELECT * FROM user WHERE username='$uname'");
if (mysql_num_rows($sql)) 
{
	$res=mysql_fetch_array($sql);
	$_SESSION['login']=$res['usertype'];
	$_SESSION['username']=$res['username'];
	if ($res['usertype']==2) 
	{
		header('location:student.php');
	}
	elseif ($res['usertype']==1) 
	{
		header('location:teacher.php');
	}
}
else
{
	$ins=mysql_query("INSERT INTO user values ('$uname','$pwd',2)");
	if ($ins) 
	{
		echo '<script type="text/javascript">
			window.alert("Sign Up Successful.")
			window.location.href="studetails.php"
			</script>';
	}
	else
	{
		echo '<script type="text/javascript">
			window.alert("Sign Up Unsuccessful.")
			window.location.href="signup.php"
			</script>';
	}
}
?>