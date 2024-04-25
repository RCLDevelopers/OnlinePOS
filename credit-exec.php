
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$creditcode=$_POST['code'];
$mn=$_POST['c'];
 
$result = mysql_query("SELECT * FROM credit where p_code = '$creditcode'");

while($row1 = mysql_fetch_array($result))
{
$cover=$row1['coverage'];
$nu=$row1['nu_payment'];
$cp=$row1['creditpayable'];
$paid=$row1['paid'];
$totalamount=$cp+$paid;
$creditpayable=$row1['creditpayable'];
}
$resulta = mysql_query("SELECT * FROM customer where code = '$creditcode'");

while($rows = mysql_fetch_array($resulta))
{
$cus=$rows['name'];
$cusl=$rows['lname'];
$cusm=$rows['mname'];

}

$ble=$mn+$paid;
$astig=$cp-$mn; 
$fop=date("m/d/Y");
mysql_query("UPDATE credit SET creditpayable = '$astig', paid='$ble'
WHERE p_code = '$creditcode'");
mysql_query("INSERT INTO creditdatails (amount, datepayment, creditcode, balance)
VALUES ('$mn', '$fop', '$creditcode', '$creditpayable')");

mysql_close($con);
?>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$creditcode=$_POST['code'];
 
$result = mysql_query("SELECT * FROM credit where p_code = '$creditcode'");

$row1 = mysql_fetch_array($result);

echo 'Name:'.$cus.' '.$cusm.' '.$cusl.'<br />';
echo 'Date Purchase:'.$row1['datepurchese'].'<br />';
echo 'Total Amount:'.$totalamount.'<br>';
echo 'Schedule of Payments:';
$coverage=$row1['coverage'];
$da1a=$row1['duedate'];
$date=date ($da1a, strtotime("+15 day", strtotime($da1a)));
$q1=($coverage*30);
$s1=86400;
$r1=$q1*$s1;
$timestamp1=time(); //current timestamp
$tm1=$timestamp1+$r1; // Will add 2 days to the $timestamp
$da2=date("m/d/Y", $timestamp1);
$da3=date("m/d/Y", $tm1);
$end_date = $da3;
while (strtotime($date) <= strtotime($end_date)) {
echo "$date".', ';
$date = date ("m/d/Y", strtotime("+15 day", strtotime($date)));
}




mysql_close($con);
?>
<table width="460" border="1">
  <tr>
    <td><div align="center">Date</div></td>
    <td><div align="center">Payment</div></td>
    <td><div align="center">Balance</div></td>
  </tr>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$creditcode=$_POST['code'];
 
$result = mysql_query("SELECT * FROM creditdatails where creditcode = '$creditcode'");

while($row1 = mysql_fetch_array($result))
{
  echo '<tr>';
    echo '<td>'.$row1['datepayment'].'</td>';
    echo '<td>'.$row1['amount'].'</td>';
    echo '<td>'.$row1['balance'].'</td>';
  echo '</tr>';
 }




mysql_close($con);
?>
</table>
