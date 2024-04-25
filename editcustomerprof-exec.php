<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$id=$_POST['id'];
$name=$_POST['name'];
$mi=$_POST['mi'];
$idb=$_POST['id'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$bday=$_POST['bday'];
$dayf=$_POST['dayf'];
$occupation=$_POST['occupation'];
$ddate=$_POST['ddate'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$mno=$_POST['mno'];
$ds=$_POST['ds'];
$ns=$_POST['ns'];
$cs=$_POST['cs'];
$os=$_POST['os'];
$a1=$_POST['a1'];
$a2=$_POST['a2'];
$a3=$_POST['a3'];
$a4=$_POST['a4'];
$m1=$_POST['m1'];
$m2=$_POST['m2'];
$m3=$_POST['m3'];
$m4=$_POST['m4'];
$m5=$_POST['m5'];
$m6=$_POST['m6'];
$b1=$_POST['b1'];
$b2=$_POST['b2'];
$b3=$_POST['b3'];
$b4=$_POST['b4'];
$b5=$_POST['b5'];
$b6=$_POST['b6'];
$b7=$_POST['b7'];
$b8=$_POST['b8'];
$b9=$_POST['b9'];
$b10=$_POST['b10'];
$b11=$_POST['b11'];
$b12=$_POST['b12'];
$b13=$_POST['b13'];
$b14=$_POST['b14'];
$b15=$_POST['b15'];
$b16=$_POST['b16'];
$c1=$_POST['c1'];
$c2=$_POST['c2'];
$c3=$_POST['c3'];
$c4=$_POST['c4'];
$c5=$_POST['c5'];
$abc=$_POST['mid'];
$qw ="UPDATE customer SET name='$name', lname='$lname', mname='$mi', occupation='$occupation', ddate='$ddate', bday='$bday', address='$address', tel='$pno', mobile='$mno', email='$email', ds='$ds', ns='$ns', cs='$cs', os='$os', aa='$a1', ab='$a2', pro='$a3', proo='$a4', ma='$m1', mb='$m2', mc='$m3', md='$m4', me='$m5', mf='$m6', ca='$c1', cb='$c2', cc='$c3', cd='$c4', ce='$c5', ba='$b1', bb='$b2', bc='$b3', bd='$b4', be='$b5', bf='$b6', bg='$b7', bh='$b8', bi='$b9', bj='$b10', bk='$b11', bl='$b12', bm='$b13', bn='$b14', bo='$b15', bp='$b16', member_id='$abc', birthday='$dayf' WHERE id = '$idb'";
$result1=mysql_query($qw);
header("location: editcustomerprof.php");
mysql_close($con);
?> 