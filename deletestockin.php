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
$result = mysql_query("SELECT * FROM stockin where id='$messages_id'");
while($row = mysql_fetch_array($result))
  {
  $code=$row['CODE'];
  $f=$row['qty'];
  }
$result1 = mysql_query("SELECT * FROM productlist where pcode='$code'");

while($row1 = mysql_fetch_array($result1))
  {
  $pleft=$row1['pleft'];
  }
  
$dugang=$pleft-$f;

mysql_query("UPDATE productlist SET pleft = '$dugang'
WHERE pcode = '$code'");

mysql_query("DELETE FROM stockin WHERE id='$messages_id'");
header("location: stockin.php");
mysql_close($con);
}
?>