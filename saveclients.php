<?php

	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$a=$_POST['a'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];

	
	$sql="INSERT INTO customer(name, address, mobile, bday)
VALUES ('$a', '$c', '$e', '$d')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location: clients.php");
			exit();


mysql_close($con)

	
?>