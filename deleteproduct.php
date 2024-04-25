<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$a=$_POST['a'];
mysql_query("DELETE FROM productlist WHERE id='$a'");
header ("location: products.php");
mysql_close($con);
?>