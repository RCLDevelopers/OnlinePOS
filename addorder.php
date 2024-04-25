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
$PPRICE=$_POST['PPRICE'];
$id=$_POST['id'];
$procode=$_POST['procode'];
/*$aba=$_POST['aba'];
$less=$_POST['less'];
if($aba=='.00'){
$dicount='0%';
}
if($aba=='.05'){
$dicount='5%';
}
if($aba=='.10'){
$dicount='10%';
}
if($aba=='.15'){
$dicount='15%';
}
if($aba=='.20'){
$dicount='20%';
}
if($aba=='.25'){
$dicount='25%';
}
if($aba=='.30'){
$dicount='30%';
}
if($aba=='.35'){
$dicount='35%';
}
if($aba=='.40'){
$dicount='40%';
}
if($aba=='.45'){
$dicount='45%';
}
if($aba=='.50'){
$dicount='50%';
}*/

$result = mysql_query("SELECT * FROM productlist where id='$id'");

while($row = mysql_fetch_array($result))
  {
  $f=$row['psold'];
  $m=$row['pleft'];

  }
  $ab=$f+$QTY;
	$ac=$m-$QTY;

mysql_query("INSERT INTO sales (name, qty, total, code, date, time, PRICE, pcode)
VALUES ('$pname', '$QTY', '$TOTAL', '$CODE', '$date', '$time', '$PPRICE', '$procode')");


mysql_query("UPDATE productlist SET psold = '$ab', pleft = '$ac'
WHERE id = '$id'");
header("location: auto.php");
mysql_close($con);
?>