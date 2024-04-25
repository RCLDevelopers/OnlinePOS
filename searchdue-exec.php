<div align="center">
<br /><strong>List of Customer who should pay today</strong><br /><br />
<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$due=$_POST['due'];
$result = mysql_query("SELECT * FROM credit where duedate like '%$due%'");
echo '<table width="800" border="1" cellpadding="0" cellspacing="0">
  <tr bgcolor="#66FF00">
    <td width="302"><strong><div align="center">Product Code</div></strong></td>
    <td width="93"><strong><div align="center">Total Paid</div></strong></td>
    <td width="93"><strong><div align="center">Payable</div></strong></td>
    <td width="110"><strong><div align="center">Due Payable</div></strong></td>
    <td width="81"><strong><div align="center">Coverage</div></strong></td>
    <td width="107"><strong><div align="center">Number of Payment</div></strong></td>
  </tr>';
while($row = mysql_fetch_array($result))
  {
   echo  '<tr>';
     echo  '<td><div align="center">';
	 $ble=$row['p_code'];
	 $results = mysql_query("SELECT * FROM customer where code='$ble'");
	 while($rows = mysql_fetch_array($results))
  		{
		echo $rows['name'].' '.$rows['mname'].' '.$rows['lname'];
		}
	 
	 
	 
	 echo '</div></td>';
     echo  '<td><div align="center">'.$row['paid'].'</div></td>';
     echo  '<td><div align="center">'.$row['creditpayable'].'</div></td>';
     echo  '<td><div align="center">'.$row['duepayable'].'</div></td>';
     echo  '<td><div align="center">'.$row['coverage'].'</div></td>';
     echo  '<td><div align="center">'.$row['nu_payment'].'</div></td>';
   echo  '</tr>';
 
  }
echo '</table>';
mysql_close($con);
?> 
</div>
