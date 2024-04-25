<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inventory System</title>
<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
<script language="JavaScript" type="text/javascript" src="stockincodesearch.js"></script>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
<script type="text/javascript">
    function ShowTime()
    {
      var time=new Date()
      var h=time.getHours()
      var m=time.getMinutes()
      var s=time.getSeconds()
      // add a zero in front of numbers<10
      m=checkTime(m)
      s=checkTime(s)
      document.getElementById('txt').value=h+" : "+m+" : "+s
      t=setTimeout('ShowTime()',1000)

    }
    function checkTime(i)
    {
      if (i<10)
      {
        i="0" + i
      }
      return i
    }
    </script>
	
<script language="javascript" type="text/javascript">

function multiply(){

a=Number(document.abc.QTY.value);

b=Number(document.abc.PPRICE.value);


c=a*b;


document.abc.TOTAL.value=c;
}


function minus(){

a=Number(document.sumary.totala.value);

b=Number(document.sumary.aba.value);


c=a*b;
d=a-c;
e=d*0;
f=d-e;

document.sumary.less.value=c.toFixed(2);
document.sumary.vat.value=e.toFixed(2);
document.sumary.vatableless.value=f.toFixed(2);
document.sumary.totalamountdue.value=d.toFixed(2);
}

</script>


</script>


<SCRIPT LANGUAGE="JavaScript">
function checkIt(evt) {
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        status = "This field accepts numbers only."
        return false
    }
    status = ""
    return true
}
</SCRIPT>





<link rel="stylesheet" href="css.css" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {font-size: 36px}
-->
  </style>
</head>

<body onLoad="ShowTime()">
<div align="center" class="style1">Purchases</div>
<br />
<a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" /></a>
<?php

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
<form action="addstockinexec.php" method="post" name="abc"><div class="wraper">
<fieldset style="border-width: 3px;">

					<legend>Product Details</legend>

  <div class="top">
    <div class="topleft">
      Enter Product Code Here:<br />
      <input type="text" id="amots" name="amots" onKeyUp="bleble();" autocomplete="off"/>
<div id="layer2" style="margin-right:-30px;"></div>
	
	
	</div>
    <div class="topright">
						<?php
						/*$q=20;
						$s=86400;
						$r=$q*$s;*/
						$timestamp=time(); //current timestamp
						/*$tm=$timestamp+$r; // Will add 2 days to the $timestamp*/
						$da=date("m/d/Y", $timestamp);
						/*
						echo "Current time string: $da <br>";
						$da1=date("F j, Y", $tm);
						echo "Modified time: $da1 <br>";*/
						?>
						




						<?php
							if (isset($_GET['id']))
							{
						$con = mysql_connect('localhost','root',"");
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }
						
						mysql_select_db("inventory", $con);
						
						$member_id = $_GET['id'];
						$result = mysql_query("SELECT * FROM productlist WHERE id = $member_id");
						
						$row = mysql_fetch_array($result);
						$name=$row["pdesc"];
						$CODE=$row["pcode"];
						$qty_left=$row["pleft"];
						$price=$row["pprice"];
						$id=$row["id"];
						$pleft=$row["pleft"];
						mysql_close($con);
						}
						
						?>
						
						
						
						
						
						
						
						
						<table width="971" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="347"><div align="right">Pro.Name : </div></td>
    <td colspan="3"><input name="PNAME" type="text" value="<?php echo $name ?>" size="70" style="border:0px;" readonly/></td>
    <td width="107"><div align="right">Date : </div></td>
    <td width="284"><input name="date" type="text" value="<?php echo $da; ?>" size="10" style="border:0px;" /><input name="time" type="text" id="txt" size="7" style="border:0px; margin-left:-10px;" readonly/></td>
    <td width="124" rowspan="3"><input name="submit" type="submit" value="SAVE" style="height: 84px; width: 110px; cursor:pointer;" id="xx" /><input name="id" type="hidden" value="<?php echo $id ?>" readonly/><input name="PCODES" type="hidden" value="<?php echo $CODE ?>" readonly/></td>
  </tr>
  <tr>
    <td><div align="right">Pro. Price : </div></td>
    <td width="144"><span style="margin-left: 0px;">
      <input name="PPRICE" id="PPRICE" type="text" value="<?php echo $price ?>" style="border:0px;"/>
    </span></td>
    <td width="104"><div align="right">Quantity : </div></td>
    <td width="184">
      <input name="QTY" id="QTY" type="text" onkeyup="multiply()" onkeypress="return checkIt(event)" />
   </td>
    <td><div align="right">Qty left: </div></td>
    <td><span style="margin-left: 0px;">
      <input name="PPRICE3" id="PPRICE3" type="text" value="<?php echo $pleft; ?>" style="border:0px;"/>
    </span></td>
  </tr>
  <tr>
    <td><div align="right">Transaction Code : </div></td>
    <td><input name="CODE" type="text" id="CODE" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" style="border:0px;" readonly="readonly"/></td>
    <td><div align="right">Sub Total : </div></td>
    <td><input name="TOTAL" id="TOTAL" type="text" style="border:0px;" readonly="readonly"/></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
	
	
	
	
	
  
  </fieldset>
</form>
  
  
  
  
  
  
  
  
  
  <fieldset style="border-width: 3px;">

					<legend>List of Orders</legend>
  <div class="center">
    <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000; border-width:thin;">
      <tr>
        <td width="10%"><div align="center"><strong>CODE</strong></div></td>
        <td width="35%"><div align="center"><strong>DESCRIPTION</strong></div></td>
        <td width="10%"><div align="center"><strong>QUANTITY </strong></div></td>
        <td width="10%"><div align="center"><strong>UNIT PRICE</strong></div></td>
		<td width="10%"><div align="center"><strong>TOTAL</strong></div></td>
		<td width="5%">&nbsp;</td>
      </tr>
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM stockin where transactioncode = '$f'");

while($row = mysql_fetch_array($result))
  {
      echo '<tr>';
        echo '<td><div align="center">'.$row['CODE'].'</div></td>';
		echo '<td><div align="left">&nbsp;&nbsp;'.$row['name'].'</div></td>';
        echo '<td><div align="center">'.$row['qty'].'</div></td>';
        echo '<td><div align="right">';
		$we=$row['PRICE'];
		echo formatMoney($we, true);
		echo '&nbsp;&nbsp;</div></td>';
        echo '<td><div align="right">';
		$fg=$row['total'];
		echo formatMoney($fg, true);
		echo '&nbsp;&nbsp;</div></td>';
        echo '<td>';
		echo '<a href=deletestockin.php?id=' . $row["id"] .'>Remove</a>';
		echo '</td>';
      echo '</tr>';
	  
	  }

mysql_close($con);
?>
    </table>
	
    <br />
	
	<div align="right">
	
	
	


	


	


<form action="printstockin.php" name="sumary" method="post">
<table width="320" border="0">
<tr>
    <td><div align="right"><strong>Total Quantity:</strong></div></td>
    <td><?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT sum(qty) FROM stockin where transactioncode = '$f'");

while($row2 = mysql_fetch_array($result))
  {
      echo '<input name="totalq" type="text" style="text-align:right;" value="'.$row2['sum(qty)'].'" readonly />';
	  
	  }

mysql_close($con);
?></td>
  </tr>
  <tr>
    <td width="1116"><div align="right"><strong>Total:</strong></div></td>
    <td width="168"><?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT sum(total) FROM stockin where transactioncode = '$f'");

while($row2 = mysql_fetch_array($result))
  {
      echo '<input name="totala" type="text" style="text-align:right;" value="'.$row2['sum(total)'].'" readonly />';
	  $TOTAL=$row2['sum(total)'];
	  
	  }

mysql_close($con);
?></td>
  </tr>

<tr>
    <td><div align="right"><strong>Supplier:</strong></div></td>
    <td><?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$name= mysql_query("select * from supplier");
echo '<select name="supplierdata">';
echo '<option>Select Supplier</option>';
 while($res= mysql_fetch_assoc($name))
 
{
echo '<option>';
echo $res['company_name'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?></td>
</tr>
<tr>
    <td><div align="right"><strong>Discount:</strong></div></td>
    <td><select name="aba" onchange="minus()" style="text-align:right;">
      <option value="0">none</option>
	  <option value=".10">10%</option>
	  <option value=".20">20%</option>
      <option value=".25">25%</option>
      <option value=".35">35%</option>
      <option value=".45">45%</option>
    </select></td>
</tr>
<tr>
    <td><div align="right"><strong>Less discount:</strong></div></td>
    <td>
	<input name="less" type="text" style="text-align:right;" readonly />	</td>
</tr>

<tr>
    <td><div align="right"><strong>Vatable Sales:</strong></div></td>
    <td>
	<input name="vatableless" type="text" style="text-align:right;" readonly />	</td>
</tr>
 <tr>
    <td><div align="right"><strong>Value Added Tax(VAT):</strong></div></td>
    <td><input name="vat" type="text" style="text-align:right;" readonly /></td>
  </tr>
  
  <tr>
    <td><div align="right"><strong>Total Amount Due :</strong></div></td>
    <td>
	<input name="totalamountdue" type="text" id="totalamountdue" style="text-align:right;" readonly />	</td>
  </tr>
  <tr>
    <td><div align="right"><strong>&nbsp;</strong></div></td>
    <td><input name="CODE1" type="hidden" id="CODE1" style="text-align:right;" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" style="border:0px;" readonly="readonly"/>
	<input name="" type="submit" value="Print" />
	</td>
  </tr>
  
 
</table>
</form>
</div>
	
  </div>
  </fieldset>
 


</body>
</html>
