<?php

$servername = "localhost";
$username = "root";
$password = "";

$con=mysql_connect($servername,$username,$password) or die("Error Conncting");
$sel=mysql_select_db("attendance") or die("Database does not exist");
?>