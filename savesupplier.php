<?php

	$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
$e=$_POST['e'];

	
	$sql="INSERT INTO supplier(company_name, contact_name, address, contactno, bday)
VALUES ('$a', '$b', '$c', '$d', '$e')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location: supplier.php");
			exit();


mysql_close($con)

	
?>