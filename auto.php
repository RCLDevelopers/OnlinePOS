
<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Inventory System</title>
<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
<script language="JavaScript" type="text/javascript" src="suggest.js"></script>
<script language="JavaScript" type="text/javascript" src="productsearch.js"></script>
<script language="JavaScript" type="text/javascript" src="productnamesearch.js"></script>




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
	  
	  a=Number(document.abc.QTY.value);

if (a!=0) // some logic to determine if it is ok to go
    {document.getElementById("xx").disabled = false;}
  else // in case it was enabled and the user changed their mind
    {document.getElementById("xx").disabled = true;}
	
	
i=Number(document.mn.cash.value);
p=Number(document.mn.amount.value);
l=Number(document.ble.gtotal.value);
k=Number(document.mn.payable.value);

if (l<=i) // some logic to determine if it is ok to go
    {document.getElementById("ble").disabled = false;}
	else if (l<=p) // some logic to determine if it is ok to go
    {document.getElementById("ble").disabled = false;}
	
	else if (k>0) // some logic to determine if it is ok to go
    {document.getElementById("ble").disabled = false;}
  else // in case it was enabled and the user changed their mind
    {document.getElementById("ble").disabled = true;}	
	
	
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
	
<!--=========================================================================================================================-->
<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		else if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		else if(selectedOption == "3")
		{
			displayDiv(prefix,"3");
		}
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>









<script type="text/javascript">
function showDiv2(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "5")
		{
			displayDiv(prefix,"5");
		}
		else if(selectedOption == "4")
		{
			displayDiv(prefix,"4");
		}
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>









<!--===========================================================================================================================-->
<script language="javascript" type="text/javascript">

function multiply(){

a=Number(document.abc.QTY.value);

b=Number(document.abc.PPRICE.value);


c=a*b;


document.abc.TOTAL.value=c;

if (a!=0) // some logic to determine if it is ok to go
    {document.getElementById("xx").disabled = false;}
  else // in case it was enabled and the user changed their mind
    {document.getElementById("xx").disabled = true;}
	
	


}




function addCommas(nStr){
 nStr += '';
 x = nStr.split('.');
 x1 = x[0];
 x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}





function mul(){


b=Number(document.mn.tretail.value);
d=Number(document.mn.aba.value);


c=b*d;
o=b-c;
D=o.toFixed(2)

document.mn.tdiscount.value=addCommas(c);
document.mn.gtotal.value=D;
document.mn.gtotal1.value=addCommas(D);
}

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

<script language="javascript" type="text/javascript">

function minus(){

a=Number(document.mn.cash.value);

b=Number(document.mn.gtotal.value);

c=a-b;

document.mn.change.value=c;

}


</script>


<script language="javascript" type="text/javascript">

function DOWN(){

a=Number(document.mn.down.value);

b=Number(document.mn.gtotal.value);

c=b-a;

document.mn.payable.value=c;
}
function cash(){
document.mn.textfield.value='cash';
 } 
 
function credit(){
document.mn.textfield.value='credit';
 } 
 function check(){
document.mn.textfield.value='check';
 }  
 
</script>








<link rel="stylesheet" href="css.css" type="text/css" media="screen" />



<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>  <style type="text/css">
<!--
.style1 {font-size: 36px}
-->
  </style>
  
  
  
  
  
  
  
  
<script>
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

//fuction to return the xml http object
function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
function getCurrencyCode(strURL)
{		
	var req = getXMLHTTP();		
	if (req) 
	{
		//function to be called when state is changed
		req.onreadystatechange = function()
		{
			//when state is completed i.e 4
			if (req.readyState == 4) 
			{			
				// only if http status is "OK"
				if (req.status == 200)
				{						
					document.getElementById('cur_code').value=req.responseText;						
				} 
				else 
				{
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		 }			
		 req.open("GET", strURL, true);
		 req.send(null);
	}			
}
</script>  
  
  
  
  
  
  
  
 <script language="javascript" type="text/javascript">
 
function checkNumeric(objName)
  {
    var lstLetters = objName;

    var lstReplace = lstLetters.replace(/\,/g,'');
  }   
 </script>
  
  
  
  
  
</head>








<body onLoad="ShowTime()">
<div align="center" class="style1">Sales</div>
<br />
<a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" /></a>
<form action="addorder.php" method="post" name="abc"><div class="wraper">
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
						$qty_left=$row["pleft"];
						$price=$row["pprice"];
						$id=$row["id"];
						$prcoede=$row["pcode"];
						mysql_close($con);
						}
						
						?>
						
						
						
						
						
						
						<?php
							if (isset($_GET['id2']))
							{
						$con = mysql_connect('localhost','root',"");
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }
						
						mysql_select_db("inventory", $con);
						
						$member_id = $_GET['id2'];
						$result = mysql_query("SELECT * FROM customer WHERE id = $member_id");
						
						$row = mysql_fetch_array($result);
						$name3=$row["member_id"];
						$name4=$row["name"] .' '. $row["mname"] .' '. $row["lname"];
						mysql_close($con);
						}
						
						?>
						
						
						
						
						
						
						<table width="971" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="120"><div align="right">Product Name : </div></td>
    <td colspan="3"><input name="PNAME" type="text" value="<?php echo $name ?>" size="70" style="border:0px;" readonly/>
      <input name="id" type="hidden" value="<?php echo $id; ?>" readonly/>
      <input name="procode" type="hidden" value="<?php echo $prcoede; ?>" readonly/>
      <input name="less" type="hidden"/>	  </td>
    <td width="104"><div align="right">Date : </div></td>
    <td width="169"><input name="date" type="text" value="<?php echo $da; ?>" size="10" style="border:0px;" />
    <input name="time" type="text" id="txt" size="7" style="border:0px; margin-left:-10px;" readonly/></td>
    <td width="110" rowspan="3"><input name="submit" type="submit" value="ADD TO CART" style="height: 84px; width: 110px; cursor:pointer;" id="xx" /></td>
  </tr>
  <tr>
    <td><div align="right">Product Price : </div></td>
    <td width="165"><span style="margin-left: 0px;">
      <input name="PPRICE" id="PPRICE" type="text" value="<?php echo $price ?>" style="border:0px;"/>
    </span></td>
    <td width="119"><div align="right">Quantity : </div></td>
    <td width="184">
      <input name="QTY" id="QTY" type="text" onkeyup="multiply()" onkeypress="return checkIt(event)" />   </td>
    <td><div align="right">Available Qty: </div></td>
    <td>
      <input name="AQTY" type="text" value="<?php echo $qty_left ?>" size="10" style="border:0px;" readonly="readonly"/>    </td>
  </tr>
  <tr>
    <td><div align="right">Reciept Code : </div></td>
    <td><input name="CODE" type="text" id="CODE" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" style="border:0px;" readonly="readonly"/></td>
    <td><div align="right">Sub Total : </div></td>
    <td><input name="TOTAL" id="TOTAL" type="text" style="border:0px;" readonly="readonly"/></td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
</table>
	
	
	
	
	
  
  </fieldset>
</form>
  <fieldset style="border-width: 3px;">
<legend>List of Orders</legend>
    <table width="100%" border="1" cellspacing="0" cellpadding="0" style="border-color:#000000; border-width:thin; font-size:12px;">
      <tr>
	  	<td width="9%"><div align="center"><strong>CODE</strong></div></td>
        <td width="63%"><div align="center"><strong>PRODUCT</strong></div></td>
        <td width="8%"><div align="center"><strong>QTY</strong></div></td>
        <td width="8%"><div align="center"><strong>RETAIL PRICE </strong></div></td>
        <td width="8%"><div align="center"><strong>AMOUNT</strong></div></td>
        <td width="4%">&nbsp;</td>
      </tr>
	  <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT * FROM sales where code = '$f'");



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
	  	echo '<td><div align="center">'.$row['pcode'].'</div></td>';
        echo '<td><div align="left">&nbsp;&nbsp;&nbsp;'.$row['name'].'</div></td>';
        echo '<td><div align="center">'.$row['qty'].'</div></td>';
        echo '<td><div align="center">';
		$ppp=$row['PRICE'];
		echo formatMoney($ppp, true);
		echo '</div></td>';
        echo '<td><div align="center">';
		$rr=$row['total'];
		echo formatMoney($rr, true);
		echo '</div></td>';
        echo '<td>';
		echo '<a href=delete.php?id=' . $row["id"] .'>Remove</a>';
		echo '</td>';
      echo '</tr>';
	  
	  }

mysql_close($con);
?>
    </table>

  </fieldset>
	
	<form action="preview.php" method="post" name="mn" id="suggestSearch">
	
	<div align="right" style="margin-top:10px;">
	  Total Retail :
	    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$f=$_SESSION['SESS_MEMBER_ID'];
$result = mysql_query("SELECT sum(total) FROM sales where code = '$f'");

while($row2 = mysql_fetch_array($result))
  {
      $yy=$row2['sum(total)'];
	  
	  }

mysql_close($con);
?>
	
	    <input name="tretail" type="hidden" id="tretail" size="17" value="<?php echo $yy;?>" readonly/>
		<input name="tretail1" type="text" id="tretail1" size="17" style="text-align:right;" value="<?php $dfg=$yy;
		echo formatMoney($dfg, true);
		?>" readonly/>
	    <br />
	
Discount  :
<select name="aba" onchange="mul()" style=" margin-right:76px;">
  <option value=".00">none</option>
  <option value=".05">5%</option>
  <option value=".10">10%</option>
  <option value=".15">15%</option>
  <option value=".20">20%</option>
  <option value=".25">25%</option>
  <option value=".30">30%</option>
  <option value=".35">35%</option>
  <option value=".40">40%</option>
  <option value=".45">45%</option>
  <option value=".50">50%</option>
</select>      
<br />
	    Total  Discount :
	    <input name="tdiscount" type="text" id="tdiscount" size="17" style="text-align:right;" readonly/>	
<br />  Amount Due :
<input name="gtotal" type="hidden" id="gtotal" size="17" readonly style="margin-right:7px; text-align:right;" value="<?php echo $yy;?>"/>
<input name="gtotal1" type="text" id="gtotal1" size="17" onblur="checkNumeric(this);" readonly style="margin-right:7px; text-align:right;" value="<?php $ytr=$yy;
echo formatMoney($ytr, true);
?>"/>
</div>
	
	
	
	  <fieldset style="border-width: 3px;">
<legend>Payment and Customer Information</legend>

Select Here:
<select name="portal" id="cboOptions" onChange="showDiv2('div',this)">
            <option value="5">Team Members</option>
            <option value="4">Regular client</option>
      </select>






<div id="div5" style="display:none; color:#000000">
<table width="100%" border="0">
  <tr>
    <td>Customer Name:
	
<?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$name= mysql_query("select * from supplier");
?>

<select name="PoNumber"  onChange="getCurrencyCode('find_ccode.php?country='+this.value)">
<?php
echo '<option>Select Supplier</option>';
 while($res= mysql_fetch_assoc($name))
 
{
echo '<option value="'.$res['company_name'].'">';
echo $res['company_name'];
echo'</option>';
}
$name= mysql_query("select * from customer");
while($res= mysql_fetch_assoc($name))
 
{
echo '<option value="'.$res['name'].'">';
echo $res['name'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>	
ID Number :   <input type="text" name="cur_code" id="cur_code" >
<a rel="facebox" href="addteam.php">add member</a></td>
    <td>
      <input name="code2" type="hidden" id="code2" value="<?php echo $_SESSION['SESS_MEMBER_ID']; ?>" /></td> 
  </tr>
</table>
</div>

<div id="div4" style="display:none; color:#000000">
<table width="100%" border="0">
  <tr>
    <td>Customer Name:<input name="cname" type="text" /></td>
  </tr>
</table>
</div>













<br>

  MODE OF PAYMENT:&nbsp;&nbsp;
	<select name="textfield" id="cboOptions" onChange="showDiv('div',this)">	
	<option value="1">cash</option>
	<option value="2">credit</option>
	<option value="3">check</option>
	</select>
  <input name="submit" id="ble" type="submit" value="PRINT RECIEPT" style="cursor:pointer;" />
  
  	<div id="div1" class="text" style="display:none;">
	<label style="margin-left: 80px;">Cash:<input name="cash" id="cash" type="text" onkeyup="minus()" /></label>
	<label style="margin-left: 63px;">Change:<input name="change" id="change" type="text" readonly/></label>
	</div>
	
	<div id="div3" class="text" style="display:none;">
	<label style="margin-left: 80px;">Bank:<input name="bank" id="bank" type="text"/></label>
	<label style="margin-left: 63px;">Check No.:<input name="check" id="check" type="text" /></label>
	<label style="margin-left: 63px;">Amount:<input name="amount" id="amount" type="text" onkeyup="minus1()" /></label>
	</div>
	
	<div id="div2" class="text" style="display:none;">
	<label style="margin-left: 20px;">Downpayment:<input name="down" id="down" type="text" size="10" onkeyup="DOWN()" /></label>
	<label style="margin-left: 20px;">Payable:<input name="payable" id="payable" type="text" size="10" readonly/></label>
	<label style="margin-left: 20px;">Terms:
	<select name="pc">
	<option value="0">SELECT</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	</select>
	</label>
	<label style="margin-left: 20px;">Interest:
	<select name="interest">
	<option value="0">SELECT</option>
	<option value=".01">1</option>
	<option value=".02">2</option>
	<option value=".03">3</option>
	<option value=".04">4</option>
	<option value=".05">5</option>
	<option value=".06">6</option>
	<option value=".07">7</option>
	<option value=".08">8</option>
	<option value=".09">9</option>
	<option value=".10">10</option>
	<option value=".11">11</option>
	<option value=".12">12</option>
	<option value=".13">13</option>
	<option value=".14">14</option>
	<option value=".15">15</option>
	</select>
	</label>
	</div>
  </form>
  </fieldset>
</body>
</html>
