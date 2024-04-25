<?php
session_start();
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$pitsa=date("m/d/Y");
$amount=$_POST['amount'];
$code=$_POST['code'];
$name=$_POST['name'];

$result = mysql_query("SELECT * FROM paycode");
while($row = mysql_fetch_array($result))
  {
        $fefe=$row['code']; 
  }
  $sasa=$fefe+1;

$fgh='P-000'.$sasa;	


mysql_query("UPDATE paycode SET code = '$sasa'");
mysql_query("INSERT INTO creditdatails(amount, datepayment, memberid, ornumber)VALUES('$amount', '$pitsa', '$code', '$fgh')");
header("location: individualledger.php?PoNumber=$name&cur_code=$code");
mysql_close($con);
?>