<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Preview</title>
<style type="text/css">
<!--
a:link {
	color: #000000;
	text-decoration: none;
}
a:visited {
	text-decoration: none;
	color: #000000;
}
a:hover {
	text-decoration: none;
	color: #000000;
}
a:active {
	text-decoration: none;
	color: #000000;
}
.style3 {font-family: Arial, Helvetica, sans-serif}
.style4 {font-size: 12px}
-->
</style></head>
<body>
<div class="style3" style="display:none;">
<?php

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$code=$_POST['code'];
$result = mysql_query("SELECT * FROM customer where code = '$code'");
while($row1 = mysql_fetch_array($result))
{
$name=$row1['name'];
$name1=$row1['member_id'];
}


/*$PoNumber=$_POST['PoNumber'];
$memid=$_POST['memid'];
$textfield=$_POST['textfield'];
$cash=$_POST['cash'];
$change=$_POST['change'];
$bank=$_POST['bank'];
$check=$_POST['check'];
$amount=$_POST['amount'];
$down=$_POST['down'];
$payable=$_POST['payable'];
$pc=$_POST['pc'];
$np=$pc*2;
$q=$pc*30;
$interest=$_POST['interest'];
$code2=$_POST['code2'];
$pitsa=date("m/d/Y");
$rest = substr("$pitsa", 3, -5);
$rest1 = substr("$pitsa", 0, -8);
$rest2 = substr("$pitsa", -4);
$pitsa2=date("m/d/$rest");
$gtotal=$_POST['gtotal'];
$textfield=$_POST['textfield'];

$vvvv=$payable+($payable*$interest);
						$s=86400;
						$r=$q*$s;
						$timestamp=time(); //current timestamp
						$tm=$timestamp+$r; // Will add 2 days to the $timestamp
						$da=date("m/d/Y", $timestamp);
						$da1=date("m/d/Y", $tm);
						
$sssss=$vvvv/$np;					
$payableperdue=formatMoney($sssss, true);	
$tamountdue=formatMoney($vvvv, true);
$balance=formatMoney($payable, true);	
$downpayment=formatMoney($down, true);
$cash1=formatMoney($cash, true);
$change1=formatMoney($change, true);*/
			
					
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
					
						
?>
</div>
<div align="center" class="style3"><strong>Put Something Here </strong><span class="style4"><BR />
  Official Receipt<br />
Receipt code: <?php echo $_POST['code'];?></span></div>
<span class="style3"><BR />
<BR />

<div style="float:left">Customer Name : <?php echo $name;?>&nbsp;&nbsp;&nbsp;&nbsp;Customer ID : <?php echo $name1;?></div></div><div style="float:right">Date : <?php echo date("m/d/Y");?><?php echo $textfield;?></div><br />
<br />



<br />
</span>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
      <tr>
        <td width="35%"><div align="center"><strong>PRODUCT</strong></div></td>
        <td width="14%"><div align="center"><strong>QTY</strong></div></td>
        <td width="9%"><div align="center"><strong>RETAIL PRICE </strong></div></td>
        <td width="13%"><div align="center"><strong>AMOUNT</strong></div></td>
      </tr>
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_POST['code'];
$result6 = mysql_query("SELECT * FROM salessumarry where transactioncode = '$f'");
$row6 = mysql_fetch_array($result6);

$VBNM=$row6['mode'];
$a=$row6['a'];
if ($a=='.01')
{
$asdf='1%';
}
if ($a=='.02')
{
$asdf='2%';
}
if ($a=='.03')
{
$asdf='3%';
}
if ($a=='.04')
{
$asdf='4%';
}
if ($a=='.05')
{
$asdf='5%';
}
if ($a=='.06')
{
$asdf='6%';
}
if ($a=='.07')
{
$asdf='7%';
}
if ($a=='.08')
{
$asdf='8%';
}
if ($a=='.09')
{
$asdf='9%';
}
if ($a=='.10')
{
$asdf='10%';
}
if ($a=='.11')
{
$asdf='11%';
}if ($a=='.12')
{
$asdf='12%';
}
if ($a=='.13')
{
$asdf='13%';
}
if ($a=='.14')
{
$asdf='14%';
}
if ($a=='.15')
{
$asdf='15%';
}

$b=$row6['b'];
$cash=formatMoney($a, true);
$change=formatMoney($b, true);


$result = mysql_query("SELECT * FROM sales where code = '$f'");

while($row = mysql_fetch_array($result))
  {
      echo '<tr>';
        echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'.$row['name'].'</div></td>';
        echo '<td><div align="center">'.$row['qty'].'</div></td>';
        echo '<td><div align="right">';
		$ppp=$row['PRICE'];
		echo formatMoney($ppp, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
		
        echo '<td><div align="right">';
		$rr=$row['total'];
		echo formatMoney($rr, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
      echo '</tr>';
	  
	  }

mysql_close($con);
?></tr>
<tr>
        <td colspan="3" class="style3"><div align="right"><strong>Total Quantity Ordered:</strong>&nbsp;</div></td>
        <td width="13%" class="style3"><div align="right">
	<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code'];
			$result = mysql_query("SELECT sum(qty) FROM sales where code = '$f'");
			
			while($row2 = mysql_fetch_array($result))
			  {
				  echo $row2['sum(qty)'];  
			  }
			
			mysql_close($con);
			?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>
<tr>
        <td colspan="3" class="style3"><div align="right"><strong>Total Retail:</strong>&nbsp;</div></td>
        <td width="13%" class="style3"><div align="right">
	<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code'];
			$result = mysql_query("SELECT sum(total), sum(less) FROM sales where code = '$f'");
			
			while($row2 = mysql_fetch_array($result))
			  {
				  $fff=$row2['sum(total)'] + $row2['sum(less)'];  
				  echo formatMoney($fff, true);  
			  }
			
			mysql_close($con);
			?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>



<tr>
        <td colspan="3" class="style3"><div align="right"><strong>Less Discount:</strong>&nbsp;</div></td>
        <td width="13%" class="style3"><div align="right">
	<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$r=$_POST['code'];
			$results = mysql_query("SELECT sum(less) FROM sales where code = '$r'");
			
			while($rowz = mysql_fetch_array($results))
			  {
				  echo $rowz['sum(less)'];  
			  }
			
			mysql_close($con);
			?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>






<tr>
        <td colspan="3" class="style3"><div align="right"><strong>Total Payable:</strong>&nbsp;</div></td>
    <td width="13%" class="style3"><div align="right"><?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code'];
			$result = mysql_query("SELECT sum(total) FROM sales where code = '$f'");
			
			while($row2 = mysql_fetch_array($result))
			  {
				  $fff=$row2['sum(total)'];  
				  echo formatMoney($fff, true);
			  }
			
			mysql_close($con);
			
			?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>


<tr>
        <td colspan="3" class="style3"><div align="right"><strong>Mode of Payment:</strong>&nbsp;</div></td>
    <td width="13%" class="style3"><div align="right"><?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code'];
			$result = mysql_query("SELECT * FROM salessumarry where transactioncode = '$f'");
			
			$row2 = mysql_fetch_array($result);
			  
				  echo $row2['mode'];  
				 
			
			
			mysql_close($con);
			
			?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>



	


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
$df=$row1['creditpayable'];
$tamountdue=formatMoney($df, true);
$np=$row1['nu_payment'];
$pc=$row1['coverage'];
$sd=$row1['paid'];
$downpayment=formatMoney($sd, true);
$cv=$row1['duepayable'];
$duepayable=formatMoney($cv, true);
$wq=$fff-$sd;
$balance=formatMoney($wq, true);
 
									if ($VBNM=='cash')
									{
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Amount Received:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$cash.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Change:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$change.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									}
									
									
									else if ($VBNM=='check')
									{
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Bank & check No.:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$a.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Amount:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$change.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									}
									else if ($VBNM=='credit')
									{
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Down Payment:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$downpayment.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Balance:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$balance.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Interest:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$asdf.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Terms:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$pc.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>No. of Payment:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$np.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									echo '<tr>';
											echo '<td colspan="3"><div align="right"><strong>Total Amount Due:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$tamountdue.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									
									
									
									
									
									echo '<strong>Schedule Of Payment:</strong>';
									


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

echo '<br><b>Due payable:</b>'.$duepayable;											


									

											
									}

?>
</table>
<span class="style3"><br />
<br />
</span>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="34%" class="style3"><div align="center" class="style4">________<u>Merry	Michelle D. Dato</u>________</div></td>
        <td width="33%" class="style3"><div align="center" class="style4">____________<u>109867</u>_____________</div></td>
        <td width="33%" class="style3"><div align="center" class="style4">BY:_________________</div></td>
      </tr>
      <tr>
        <td class="style3"><div align="center" class="style4">Independent Beauty Consultant Name</div></td>
        <td class="style3"><div align="center" class="style4">Independent Beauty Consultant No.&nbsp;</div></td>
        <td class="style3"><div align="center" class="style4">Customer Signature</div></td>
      </tr>
</table>
	  <p><a href="home.php">back to main menu</a></p>
		<p><a href="cv.php?code=<?php echo $_POST['code']; ?>">back to sales </a></p>
	  
</body>
</html>
