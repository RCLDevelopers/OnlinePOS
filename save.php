<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$podate=$_POST['date'];
$time=$_POST['time'];
$txtCombo=$_POST['txtCombo'];
$srp=$_POST['srp'];
$qty=$_POST['price'];
$cname=$_POST['cname'];
$total=$_POST['total'];
$mode=$_POST['mode'];
$paymentsched=$_POST['paymentsched'];
$downpayment=$_POST['downpayment'];
$kwarta=$_POST['cash'];
$sukli=$_POST['change'];

$sql="INSERT INTO sales (podate, time, code, qty, price, total, mode, kwarta, sukli, dayspay, downpayment, customer)
VALUES
('$podate','$time','$txtCombo','$qty','$srp','$total','$mode','$kwarta','$sukli','$paymentsched','$downpayment','$cname')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location: auto.php");

mysql_close($con)
?>