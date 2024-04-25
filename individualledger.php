<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center" class="style1">Individual Ledger</div><br />
<div style="width:30%; margin:0 auto;">
<div style="float:left">
Member Name:<?php echo $_GET['PoNumber']; ?><br />
Member ID:<?php echo $_GET['cur_code']; ?></div>
<div style="float:right">
Date: <?php echo date("m/d/Y");?>
</div>
<br />
<br /><br />
Summary of Credit<br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%"><div align="center">Date</div></td>
    <td width="53%"><div align="center">OR Number </div></td>
    <td width="31%"><div align="center">Amount Purchased </div></td>
  </tr>
  <?php
  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$cvbcv=$_GET['cur_code'];
$result = mysql_query("SELECT * FROM credit where name = '$cvbcv'");



function formatMoney($number, $fractional=false) {
						if ($fractional) {
							$number = sprintf('%.2f', $number);
						}
						while (true) {
							$replaced = preg_replace('/(-?\d+)(\d\d\d)/', '$1,$2', $number);
							if ($replaced != $number) {
								$number = $replaced;
							} else {
								break;
							}
						}
						return $number;
					}	


while($row = mysql_fetch_array($result))
  {
  echo '<tr>';
    echo '<td><div align="center">'.$row['purdate'].'</div></td>';
    echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'.$row['p_code'].'</div></td>';
    echo '<td><div align="right">';
		$ppp=$row['creditpayable']+$row['paid'];
		echo formatMoney($ppp, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
  echo '</tr>';
  }
  ?>
  <tr>
    <td colspan="2"><div align="right">Total Purchase: </div></td>
    <td>
	  <div align="right">
	    <?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$cvbcv=$_GET['cur_code'];
$results = mysql_query("SELECT sum(creditpayable), sum(paid) FROM credit where name = '$cvbcv'");
			while($rowc = mysql_fetch_array($results))
			  {
				  $efgb=$rowc['sum(creditpayable)'];
				  $efgb1=$rowc['sum(paid)']; 
				  $ddd=$efgb+$efgb1; 
				  echo formatMoney($ddd, true);
			  }
	?>
    &nbsp;&nbsp;</div></td>
  </tr>
</table>  
<br />
Summary of Payment
<br />

<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="16%"><div align="center">Date</div></td>
    <td width="53%"><div align="center">OR Number Payment </div></td>
    <td width="31%"><div align="center">Amount Paid </div></td>
  </tr>
  <?php
  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$cv=$_GET['cur_code'];
$result = mysql_query("SELECT * FROM creditdatails where memberid = '$cv'");


while($row = mysql_fetch_array($result))
  {
  echo '<tr>';
    echo '<td><div align="center">'.$row['datepayment'].'</div></td>';
    echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'.$row['ornumber'].'</div></td>';
    echo '<td><div align="right">';
		$ppps=$row['amount'];
		echo formatMoney($ppps, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
  echo '</tr>';
  }
  ?>
  <tr>
    <td colspan="2"><div align="right">Total Payments: </div></td>
    <td>
	  <div align="right">
	    <?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$cvb=$_GET['cur_code'];
$results = mysql_query("SELECT sum(amount) FROM creditdatails where memberid = '$cvb'");
			while($rowc = mysql_fetch_array($results))
			  {
				  $efgb1=$rowc['sum(amount)']; 
				  echo formatMoney($efgb1, true);
			  }
	?>
      &nbsp;&nbsp;</div></td>
  </tr>
</table>
<br />
<table width="100%" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td width="69%"><div align="right">Accounts Receivable: </div></td>
    <td width="31%">
	  <div align="right">
	    <?php 
		$fgh=$ddd-$efgb1;
		if ($fgh>0)
		{
		echo formatMoney($fgh, true);
		}
		else
		{
		echo 'Paid';
		}
		?>
      &nbsp;&nbsp;</div></td>
  </tr>
</table>
 
<br />
<?php
if ($fgh>0)
		{
echo '<form action="payment.php" method="post">';
		echo '<input name="code" type="hidden" value="'.$_GET['cur_code'].'"><br />';
		echo '<input name="name" type="hidden" value="'. $_GET['PoNumber'].'"><br />';
		echo 'Enter Amount Here:<input name="amount" type="text" style="width: 100px;">';
  echo '</form>';
  }
  else
		{
		
		}
 ?>
  <br />
  <a href="home.php">Back to Main 
</a></div>
</body>
</html>
