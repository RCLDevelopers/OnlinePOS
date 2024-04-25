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
$f='0';	

	
	$sql="INSERT INTO productlist (pcode, pdesc, pleft, pprice, psold)
VALUES ('$a', '$c', '$d', '$e', '$f')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  header("location: products.php");
			exit();


mysql_close($con)

	
?>