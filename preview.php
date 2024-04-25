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
$PoNumber=$_POST['PoNumber'];
$memid=$_POST['memid'];
$textfield=$_POST['textfield'];
if($textfield=1)
{
$modeofp='cash';
}
if($textfield=2)
{
$modeofp='credit';
}
if($textfield=3)
{
$modeofp='check';
}
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
if ($interest=='.01')
{
$asdf='1%';
}
if ($interest=='.02')
{
$asdf='2%';
}
if ($interest=='.03')
{
$asdf='3%';
}
if ($interest=='.04')
{
$asdf='4%';
}
if ($interest=='.05')
{
$asdf='5%';
}
if ($interest=='.06')
{
$asdf='6%';
}
if ($interest=='.07')
{
$asdf='7%';
}
if ($interest=='.08')
{
$asdf='8%';
}
if ($interest=='.09')
{
$asdf='9%';
}
if ($interest=='.10')
{
$asdf='10%';
}
if ($interest=='.11')
{
$asdf='11%';
}if ($interest=='.12')
{
$asdf='12%';
}
if ($interest=='.13')
{
$asdf='13%';
}
if ($interest=='.14')
{
$asdf='14%';
}
if ($interest=='.15')
{
$asdf='15%';
}

$code2=$_POST['code2'];
$pitsa=date("m/d/Y");
$rest = substr("$pitsa", 3, -5);
$rest1 = substr("$pitsa", 0, -8);
$rest2 = substr("$pitsa", -4);
$pitsa2=date("m/d/$rest");
$gtotal=$_POST['gtotal'];
mysql_query("DELETE FROM salessumarry WHERE transactioncode='$code2'");
mysql_query("DELETE FROM credit WHERE p_code='$code2'");
mysql_query("DELETE FROM customer WHERE code='$code2'");

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
$change1=formatMoney($change, true);

$tretail=$_POST['tretail'];	
$tdiscount=$_POST['tdiscount'];	
$aba=$_POST['aba'];
if ($aba=='.00')
{
$discc='0%';
}
if ($aba=='.05')
{
$discc='5%';
}
if ($aba=='.10')
{
$discc='10%';
}
if ($aba=='.15')
{
$discc='15%';
}
if ($aba=='.20')
{
$discc='20%';
}
if ($aba=='.25')
{
$discc='25%';
}
if ($aba=='.30')
{
$discc='30%';
}
if ($aba=='.35')
{
$discc='35%';
}
if ($aba=='.40')
{
$discc='40%';
}
if ($aba=='.45')
{
$discc='45%';
}
if ($aba=='.50')
{
$discc='50%';
}
					
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
					
mysql_close($con);						
?>
</div>
<div align="center" class="style3"><strong>Put Something Here </strong><span class="style4"><BR />
  Official Receipt<br />
Receipt code: <?php echo $code2;?><?php echo $date3;?></span></div>
<span class="style3"><BR />
<BR />
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$pitsa=date("m/d/Y");
$code2=$_POST['code2'];
$gtotal=$_POST['gtotal'];
$textfield=$_POST['textfield'];
if ($textfield=='1')
{
$modeofp='cash';
$a=$_POST['cash'];
$b=$_POST['change'];
}
if ($textfield=='2')
{
$modeofp='credit';
$a=$_POST['interest'];
$b=0;
}
if ($textfield=='3')
{
$modeofp='check';
$a=$_POST['bank'].' '.$_POST['check'];
$b=$_POST['amount'];


}
$PoNumber=$_POST['PoNumber'];
$cname=$_POST['cname'];
$name=$cname.$PoNumber;
mysql_query("INSERT INTO salessumarry(date, transactioncode, total, mode, a, b, name) VALUES('$pitsa', '$code2', '$gtotal', '$modeofp', '$a', '$b', '$name') ");




						
										$result = mysql_query("SELECT * FROM customer where name = '$PoNumber'");
										while($row1 = mysql_fetch_array($result))
										{
										$cname=$row1['name'].' '.$row1['mname'].' '.$row1['lname'];
										}
								
mysql_close($con);
?>
<div style="float:left">Customer Name : <?php echo $name;?><br />Customer ID : <?php echo $_POST['cur_code'];?></div><div style="float:right">Date : <?php echo $pitsa;?></div>
<br />
<br />



<br />
</span>
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="font-family:Arial, Helvetica, sans-serif; font-size:12px;">
      <tr>
	  	<td width="9%"><div align="center"><strong>CODE</strong></div></td>
        <td width="55%"><div align="center"><strong>PRODUCT</strong></div></td>
        <td width="13%"><div align="center"><strong>QTY</strong></div></td>
        <td width="10%"><div align="center"><strong>RETAIL PRICE </strong></div></td>
        <td width="13%"><div align="center"><strong>AMOUNT</strong></div></td>
      </tr>
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_POST['code2'];
$result = mysql_query("SELECT * FROM sales where code = '$f'");

while($row = mysql_fetch_array($result))
  {
      echo '<tr>';
	  	echo '<td><div align="center">'.$row['pcode'].'</div></td>';
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
        <td colspan="4" class="style3"><div align="right"><strong>Total Quantity Ordered:</strong>&nbsp;</div></td>
        <td width="10%" class="style3"><div align="right">
	<?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code2'];
			$result = mysql_query("SELECT sum(qty) FROM sales where code = '$f'");
			
			while($row2 = mysql_fetch_array($result))
			  {
				  echo $row2['sum(qty)'];  
			  }
			
			mysql_close($con);
			?>&nbsp;&nbsp;&nbsp;</div>		</td>
</tr>
<tr>
        <td colspan="4" class="style3"><div align="right"><strong>Total Retail:</strong>&nbsp;</div></td>
        <td width="10%" class="style3"><div align="right">
	<?php $rt=$tretail;
	echo formatMoney($rt, true);
	
	 ?>&nbsp;&nbsp;&nbsp;</div>		</td>
</tr>

<tr>
        <td colspan="4" class="style3"><div align="right"><strong>Discount:</strong>&nbsp;</div></td>
        <td width="10%" class="style3"><div align="right">
	<?php echo $discc; ?>&nbsp;&nbsp;&nbsp;</div>		</td>
</tr>

<tr>
        <td colspan="4" class="style3"><div align="right"><strong>Less Discount:</strong>&nbsp;</div></td>
        <td width="10%" class="style3"><div align="right">
	<?php $rty=$tdiscount;
	echo formatMoney($rty, true);
	 ?>&nbsp;&nbsp;&nbsp;</div>		</td>
</tr>






<tr>
        <td colspan="4" class="style3"><div align="right"><strong>Total Payable:</strong>&nbsp;</div></td>
    <td width="10%" class="style3"><div align="right"><?php $qwsa=$gtotal;
	echo formatMoney($qwsa, true);
	 ?>&nbsp;&nbsp;&nbsp;</div></td>
</tr>	


<tr>
        <td colspan="4" class="style3"><div align="right"><strong>Mode of Payment:</strong>&nbsp;</div></td>
    <td width="10%" class="style3"><div align="right"><?php
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
			$f=$_POST['code2'];
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
									if ($textfield=='1')
									{
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Amount Received:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$cash1.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Change:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$change1.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									}
									
									
									else if ($textfield=='3')
									{
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Bank & check No.:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$bank.' '.$check.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Amount:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$amount.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									}
									else if ($textfield=='2')
									{
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Down Payment:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$downpayment.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Balance:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$balance.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Interest:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$asdf.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Terms:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$pc.'&nbsp;Month&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr> ';
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>No. of Payment:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$np.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>'; 
									echo '<tr>';
											echo '<td colspan="4"><div align="right"><strong>Payable Per Due:</strong>&nbsp;</div></td>';
											echo '<td width="13%"><div align="right">'.$payableperdue.'&nbsp;&nbsp;&nbsp;</div></td>';
									echo '</tr>';
									
									
									
									
									
									echo '<strong>Schedule Of Payment:</strong>';


if (($rest==1) or ($rest==2) or ($rest==3) or ($rest==4) or ($rest==5) or ($rest==6) or ($rest==7) or ($rest==8) or ($rest==9) or ($rest==10) or ($rest==26) or ($rest==27) or ($rest==28) or ($rest==29) or ($rest==30) or ($rest==31))
											{
															date_default_timezone_set('UTC');
				 
															// Start date
															$q1=($pc*30);
															$s1=86400;
															$r1=$q1*$s1;
															$timestamp1=time(); //current timestamp
															$tm1=$timestamp1+$r1; // Will add 2 days to the $timestamp
															$da2=date("m/d/Y", $timestamp1);
															$da3=date("m/d/Y", $tm1);
															$amsq=30;
															
															if ($rest1==12)
															{
															$year=$rest2;
															$month=12;
															$day=15;
															}
															else if($rest1<12)
															{
															$year=$rest2;
															$month=$rest1;
															$day=15;
															}
															
															
															
															
															$date =  date("$month/$day/$year");
															// End date
															$end_date = $da3;
															$datev = date ($date, strtotime("+15 day", strtotime($date)));
															while (strtotime($date) <= strtotime($end_date)) {
																echo "$date\n".', ';
																$date = date ("m/d/Y", strtotime("+15 day", strtotime($date)));
																	}
																	echo '   '.'Payable Per Due:'.$payableperdue;		
											}
											if (($rest==11) or ($rest==12) or ($rest==13) or ($rest==14) or ($rest==15) or ($rest==16) or ($rest==17) or ($rest==18) or ($rest==19) or ($rest==20) or ($rest==21) or ($rest==22) or ($rest==23) or ($rest==24) or ($rest==25))
											{
															date_default_timezone_set('UTC');
				 
															// Start date
															$q1=($pc*30);
															$s1=86400;
															$r1=$q1*$s1;
															$timestamp1=time(); //current timestamp
															$tm1=$timestamp1+$r1; // Will add 2 days to the $timestamp
															$da2=date("m/d/Y", $timestamp1);
															$da3=date("m/d/Y", $tm1);
															$amsq=30;
															
															if ($rest1==12)
															{
															$year=$rest2+1;
															$month=01;
															$day=30;
															}
															else if($rest1<12)
															{
															$year=$rest2;
															$month=$rest1;
															$day=30;
															}
															
															
															$date = date ("$month/$day/$year");
															// End date
															$end_date = $da3;
														
													$datev = date ($date, strtotime("+15 day", strtotime($date)));
															while (strtotime($date) <= strtotime($end_date)) {
																echo "$date\n".', ';
																$date = date ("m/d/Y", strtotime("+15 day", strtotime($date)));
																	}
																	
											}
											


$qwpoi=$_POST['cur_code'];									
mysql_query("INSERT INTO credit 
(duedate, p_code, paid, creditpayable, duepayable, coverage, nu_payment, name, purdate) VALUES('$datev', '$code2', '$down', '$vvvv', '$payableperdue', '$pc', '$np', '$qwpoi', '$pitsa')") 
or die(mysql_error()); 

											
									}
mysql_close($con);
?>
</table>
<span class="style3"><br />
<br />
</span>
<p><a href="home.php">back to main menu
	    </a></p>
		<p><a href="auto.php">back to sales </a></p>
	  
</body>
</html>
