<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$pname=$_POST['PNAME'];
$date=$_POST['date'];
$QTY=$_POST['QTY'];
$time=$_POST['time'];
$TOTAL=$_POST['TOTAL'];
$CODE=$_POST['CODE'];
$PCODES=$_POST['PCODES'];
$PPRICE=$_POST['PPRICE'];
$id=$_POST['id'];
$datetime=$date.' '.$time;
$vatable=$TOTAL*.12;
$net=$TOTAL-$vatable;


$result = mysql_query("SELECT * FROM productlist where id='$id'");

while($row = mysql_fetch_array($result))
  {
  $m=$row['pleft'];
  }
  $ab=$m+$QTY;

mysql_query("INSERT INTO stockin (name, CODE, qty, total, transactioncode, datepurchase, PRICE)
VALUES ('$pname', '$PCODES', '$QTY', '$TOTAL', '$CODE', '$datetime', '$PPRICE')");


mysql_query("UPDATE productlist SET pleft = '$ab'
WHERE id = '$id'");
header("location: stockin.php");
mysql_close($con);
?>