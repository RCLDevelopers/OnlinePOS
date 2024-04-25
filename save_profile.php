
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
echo '<div style="display:none;">';
$cus_name=$_POST['cus_name'];
$address=$_POST['address'];
$textfield=$_POST['textfield'];
$tel=$_POST['tel'];
$off=$_POST['off'];
$code2=$_POST['code2'];
$mobile=$_POST['mobile'];
$hostess=$_POST['hostess'];
$email=$_POST['email'];
$down=$_POST['down'];
$payable=$_POST['payable'];
$pc=$_POST['pc'];
$np=$_POST['np'];
$BV=$payable/$np;

						$q=$pc/$np;
						$s=86400;
						$r=$q*$s;
						$timestamp=time(); //current timestamp
						$tm=$timestamp+$r; // Will add 2 days to the $timestamp
						$da=date("m/d/Y", $timestamp);
						$da1=date("m/d/Y", $tm);

echo '</div>';
if ($textfield=='credit')
{
mysql_query("INSERT INTO customer 
(name, address, tel, office, mobile, hostess, email, code) VALUES('$cus_name', '$address', '$tel', '$off', '$mobile', '$hostess', '$email', '$code2') ") 
or die(mysql_error());  

mysql_query("INSERT INTO credit 
(p_code, paid, creditpayable, duepayable, coverage, nu_payment, duedate) VALUES('$code2', '$down', '$payable', '$BV', '$pc', '$np', '$da1') ") 
or die(mysql_error());  
//mysql_query("INSERT INTO phonebook(phone, firstname, lastname, address) VALUES('+1 123 456 7890', 'John', 'Doe', 'North America')"); 
}
else
{
mysql_query("INSERT INTO customer (name, address, tel, office, mobile, hostess, email, code)
VALUES ('$cus_name', '$address', '$tel', '$off', '$mobile', '$hostess', '$email', '$code2')");
}
mysql_close($con);
?>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style3 {font-size: 12px}
-->
</style>
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$m=$_POST['code2'];
$result = mysql_query("SELECT * FROM customer where code = '$m'");
echo '<table width="700" border="1" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="3">Payment Summary </td>
  </tr>
  <tr>
    <td>Amount</td>
    <td>Date of Payment </td>
    <td>Credit Code </td>
  </tr>';
while($row1 = mysql_fetch_array($result))
{
 $name=$row1['name']; 
 $address=$row1['address'];
 $tel=$row1['tel'];
 $office=$row1['office'];
 $mobile=$row1['mobile'];
 $hostess=$row1['hostess'];
 $email=$row1['email'];
 $code=$row1['code'];	  
}

mysql_close($con);
?>
<div align="center"><span class="style1">MARY KAY PHILIPPINES</span><BR>
  OFFICIAL RECIEPT<br />
  INVOICE CODE: <?php echo $code2; ?></div>
<br>
  <br>
  <br>
  <br>
<label>Customer Name:<u><?php echo $name; ?></u></label>
<label style="margin-left: 69px;">Date and Time of sales:<u><?php echo $da; ?></u><?php echo $sdl; ?></label>
<br>
<label style="margin-left: 50px;">Address:<u><?php echo $address; ?></u></label>
<br>
<label style="margin-left: 51px;">Tel. No.:<u><?php echo $tel; ?></u></label>
<label style="margin-left: 160px;">Office:<u><?php echo $office; ?></u></label>
<label style="margin-left: 35px;">Mobile:<u><?php echo $mobile; ?></u></label>
<br>
<label style="margin-left: 10px;">Hostess Name:<u><?php echo $hostess; ?></u></label>
<label style="margin-left: 103px;">Email Address:<u><?php echo $email; ?></u></label>
<br><br>
<div>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
      <tr>
        <td width="56%"><div align="center"><strong>PRODUCT</strong></div></td>
        <td width="13%"><div align="center"><strong>QTY</strong></div></td>
        <td width="13%"><div align="center"><strong>UNIT PRICE </strong></div></td>
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
        echo '<td><div align="center">'.$row['name'].'</div></td>';
        echo '<td><div align="center">'.$row['qty'].'</div></td>';
        echo '<td><div align="center">'.$row['PRICE'].'</div></td>';
        echo '<td><div align="center">'.$row['total'].'</div></td>';
      echo '</tr>';
	  
	  }

mysql_close($con);
?>





	 
      </tr>
  </table>
  <div align="right">Received the above items in good order and condition
  </div>
  <div align="right">
<table width="569" border="0" cellpadding="0">
  <tr>
    <td width="395"><div align="right"><B>TOTAL QUANTITY:</B></div></td>
    <td width="168">&nbsp;
	
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

?>	</td>
  </tr>
  <tr>
    <td><div align="right"><B>TOTAL PAYABLE:</B></div></td>
    <td>&nbsp;
	
	<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_POST['code2'];
$result = mysql_query("SELECT sum(total) FROM sales where code = '$f'");

while($row2 = mysql_fetch_array($result))
  {
      echo $row2['sum(total)'];
	  
	  }

mysql_close($con);


?>

	</td>
  </tr>
  
  <?php
  if ($textfield=='cash')
  {
  echo '<tr>';
    echo '<td><div align="right"><strong>CASH:</strong></div></td>';
    echo '<td>&nbsp;&nbsp;'.$_POST['cash'].'</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td><div align="right"><strong>CHANGE:</strong></div></td>';
    echo '<td>&nbsp;&nbsp;'. $_POST['change'].'</td>';
  echo '</tr>';
  }
  if ($textfield=='credit')
  {
  echo '<tr>';
    echo '<td><div align="right"><strong>DOWNPAYMENT:</strong></div></td>';
    echo '<td>&nbsp;&nbsp;'.$down.'</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td><div align="right"><strong>TOTAL PAYABLE LESS BY DOWNPAYMENT:</strong></div></td>';
    echo '<td>&nbsp;&nbsp;'.$payable.'</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td><div align="right"><strong>AMOUNT TO PAY PER DUE:</strong></div></td>';
    echo '<td>&nbsp;&nbsp;'.$BV.'</td>';
  echo '</tr>';
  echo '<tr>';
    echo '<td><div align="right"><strong>NEXT DUE DATE:</strong></div></td>';
    echo '<td>&nbsp;'.$da1.'</td>';
  echo '</tr>';
  }
  ?>
</table>  
  

  
  
  
  
  
     
  </div>
<br><br> 
<u>Merry	Michelle D. Dato(+639177002379)</u>
&nbsp;&nbsp;&nbsp;____________<u>109867</u>____________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BY:_____________________________<BR>
<span class="style3"><label style="margin-left: 30px;">Independent Beauty Consultant Name</label>
<label style="margin-left: 85px;">Independent Beauty Consultant No.</label>
<label style="margin-left: 146px;">Customer Signature</label>
</span></div>
