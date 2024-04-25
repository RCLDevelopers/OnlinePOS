<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$totalq=$_POST['totalq'];
$totala=$_POST['totala'];
$less=$_POST['less'];
$vatableless=$_POST['vatableless'];
$vat=$_POST['vat'];
$totalamountdue=$_POST['totalamountdue'];
$supplierdata=$_POST['supplierdata'];
$CODE1=$_POST['CODE1'];
$pitsa=date("m/d/Y");
mysql_query("INSERT INTO stockinsumarry (code, totalqty, total, less, vsales, vat, totalamountdue, pdate, supplier)
VALUES ('$CODE1', '$totalq', '$totala', '$less', '$vatableless', '$vat', '$totalamountdue', '$pitsa', '$supplierdata')");
mysql_query("UPDATE stockin SET supplier = '$supplierdata'
WHERE transactioncode = '$CODE1'");
mysql_close($con);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 14px;
	font-weight: bold;
}
.style2 {font-family: Arial, Helvetica, sans-serif}
.style64 {font-size: 9px}
.style65 {font-size: 10px}
.style67 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 14px; }
.style68 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 10px; }
.style69 {font-family: Arial, Helvetica, sans-serif; font-size: 9px; }
-->
</style>
</head>

<body>
<div class="style2" style="float:left;">
<span class="style1">Company Name</span><BR />
<span class="style64">Makati Beauty Center<br />
2nd Floor Allegro Center<br />
2284 Pasong Tamo Extension, Makati City<br />
Tel No.:(02) 859-6222 Fax.: (02) 859-6299<br />
VAT REG. TIN: 203-384-720-000</span><br />
<br />
</div>


<div style="float:right;">
<table width="474" border="0">
  <tr>
    <td width="204" align="right" valign="top"><span class="style67">Invoice Number: </span></td>
    <td width="260"><span class="style67"><?php echo $_POST['CODE1']; ?></span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style68">Suplier: </span></td>
    <td><span class="style69"> Name </span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style68">Address :</span></td>
    <td><span class="style69"> 3rd Flr. Ceneco Bldg., Corner Gonzaga, Mabini St., Brgy. 26, Bacolod City, Negros Occ. 6100 </span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style68">Contact Number : </span></td>
    <td><span class="style69">+639177002379</span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style68">TIN No. : </span></td>
    <td><span class="style69">934671094</span></td>
  </tr>
  <tr>
    <td align="right" valign="top"><span class="style68">Date :</span></td>
    <td><span class="style64"><?php echo date("m/d/Y"); ?></span></td>
  </tr>
</table>


</div>
<br /><br /><br />
<table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000; border-width:thin; font-size:12px">
  <tr>
    <td width="10%"><div align="center" class="style2"><strong>CODE</strong></div></td>
    <td width="35%"><div align="center" class="style2"><strong>DESCRIPTION</strong></div></td>
    <td width="10%"><div align="center" class="style2"><strong>QUANTITY </strong></div></td>
    <td width="10%"><div align="center" class="style2"><strong>UNIT PRICE</strong></div></td>
    <td width="10%"><div align="center" class="style2"><strong>TOTAL</strong></div></td>
  </tr>
  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

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



$f=$_POST['CODE1'];
$result = mysql_query("SELECT * FROM stockin where transactioncode = '$f'");

while($row = mysql_fetch_array($result))
  {
      echo '<tr>';
        echo '<td><div align="center">'.$row['CODE'].'</div></td>';
		echo '<td><div align="left">&nbsp;&nbsp;'.$row['name'].'</div></td>';
        echo '<td><div align="center">'.$row['qty'].'</div></td>';
        echo '<td><div align="right">';
		$rt=$row['PRICE'];
		echo formatMoney($rt, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
        echo '<td><div align="right">';
		$gt=$row['total'];
		echo formatMoney($gt, true);
		echo '&nbsp;&nbsp;&nbsp;</div></td>';
      echo '</tr>';
	  
	  }

mysql_close($con);
?>
</table>
<br />
<br />

<table width="347" border="0" cellspacing="5" style="font-size:10px;">
  <tr>
    <td width="196"><div align="right" class="style2"><strong>Total # Qty Ordered </strong></div></td>
	<td width="32"><span class="style2"></span></td>
    <td width="93"><div align="right"><span class="style2"><?php echo $_POST['totalq']; ?></span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><strong>Total</strong></div></td>
	<td><span class="style2"></span></td>
    <td><div align="right"><span class="style2">
      <?php
	$fr=$_POST['totala'];
	echo formatMoney($fr, true);
	?>
    </span></div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><strong>Less discount </strong></div></td>
	<td><span class="style2"></span></td>
    <td>
	  <div align="right"><span class="style2">
	    <?php
	$fs=$_POST['less'];
	echo formatMoney($fs, true);
	?>
    </span> </div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><strong>Vatable Sales </strong></div></td>
	<td><span class="style2"></span></td>
    <td>
	  <div align="right"><span class="style2">
	    <?php
	$fa=$_POST['vatableless'];
	echo formatMoney($fa, true);
	?>
    </span> </div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><strong>Value Added Tax(VAT) </strong></div></td>
	<td><span class="style2"></span></td>
    <td>
	  <div align="right"><span class="style2">
	    <?php
	$fc=$_POST['vat'];
	echo formatMoney($fc, true);
	?>
    </span> </div></td>
  </tr>
  <tr>
    <td><div align="right" class="style2"><strong>Total Amount Due </strong></div></td>
	<td><span class="style2"></span></td>
    <td>
	  <div align="right"><span class="style2">
	    <?php
	$fi=$_POST['totalamountdue'];
	echo formatMoney($fi, true);
	?>
    </span> </div></td>
  </tr>
</table>
<br />
<a href="home.php">back</a>
</body>
</html>
