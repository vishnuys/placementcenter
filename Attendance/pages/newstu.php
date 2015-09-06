<?php 
require "connect.php";
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
$pwd2=$_POST['pwd2'];

if (is_null($uname) or is_null($pwd) or is_null($pwd2)) 
{
	echo '<script type="text/javascript">
		window.alert("Please fill all the fields.")
		window.location.href="signup.php"
		</script>';
}
if ($pwd!=$pwd2) 
{
	echo '<script type="text/javascript">
		window.alert("Passwords do not match.")
		window.location.href="signup.php"
		</script>';
}
$sql=mysql_query("INSERT INTO user VALUES ('$uname','$pwd',2)");
if ($sql) 
{
	session_start();
	$_SESSION['login']=2;
	$_SESSION['username']=$uname;
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

?>