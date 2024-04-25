<?php
				  if (isset($_GET['id']))
	{
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$messages_id = $_GET['id'];
$result = mysql_query("SELECT * FROM sales where id='$messages_id'");
while($row = mysql_fetch_array($result))
  {
  $code=$row['name'];
  $f=$row['qty'];
  $falagpat=$row['pcode'];
  }
$result1 = mysql_query("SELECT * FROM productlist where pcode='$falagpat'");

while($row1 = mysql_fetch_array($result1))
  {
  $psold=$row1['psold'];
  $pleft=$row1['pleft'];
  }
  
$buwin=$psold-$f;
$dugang=$pleft+$f;

mysql_query("UPDATE productlist SET psold = '$buwin', pleft = '$dugang'
WHERE pcode = '$falagpat'");

mysql_query("DELETE FROM sales WHERE id='$messages_id'");
header("location: auto.php");
mysql_close($con);
}
?>