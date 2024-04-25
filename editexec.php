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
$m=$_POST['m'];

mysql_query("UPDATE productlist SET pcode = '$a', pdesc = '$c', pleft = '$d', pprice = '$e'
WHERE id = '$m'");

  header("location: products.php");
		


mysql_close($con)

	
?>