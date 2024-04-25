<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$podate=$_POST['textfield'];


$result = mysql_query("SELECT * FROM cuscode");
while($row = mysql_fetch_array($result))
  {
        $fefe=$row['code']; 
  }
  $sasa=$fefe+1;

$fgh='C000'.$sasa;	
mysql_query("UPDATE cuscode SET code = '$sasa'");

$sql="INSERT INTO customer (name, member_id)
VALUES
('$podate', '$fgh')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location: auto.php");

mysql_close($con)
?>