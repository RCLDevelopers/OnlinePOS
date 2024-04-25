<div align="center">Sales Report From:<strong> <?php echo $_POST['dayfrom']; ?></strong>&nbsp;&nbsp;To:<strong> <?php echo $_POST['dayto']; ?>
<br />
    </strong></div>
<table width="900" align="center" cellpadding="0" cellspacing="0" style="font-size:12px; border-color:#000000; border-style:solid; border-width:1px;">
  <tr>
    <td width="85" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>Date</strong></div></td>
    <td width="174" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>Transaction No. </strong></div></td>
    <td width="294" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>Customer Name </strong></div></td>
    <td width="77" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>ID</strong></div></td>
	<td width="129" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>Mode of Payment </strong></div></td>
    <td width="127" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center"><strong>Total</strong></div></td>
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
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT * FROM salessumarry WHERE date BETWEEN '$a' AND '$b'");

while($row = mysql_fetch_array($result1))
{
  echo '<tr>';
    echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">'.$row['date'].'</div></td>';
    echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">'.$row['transactioncode'].'</div></td>';
 $fgh=$row['transactioncode'];   
$result4 = mysql_query("SELECT * FROM customer WHERE code='$fgh'");

$row4 = mysql_fetch_array($result4);	
	
	echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">';
	echo $row4['name'].' '.$row4['lname'];
	echo '</div></td>';
	
    echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">';
	echo $row4['member_id'];
	echo '</div></td>';

	echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">'.$row['mode'].'</div></td>';
    echo '<td style="border-color:#000000; border-style:solid; border-width:1px;"><div align="center">';
	$eee=$row['total'];
	echo formatMoney($eee, true);
	
	echo '</div></td>';
    
  echo '</tr>';
 }

mysql_close($con);
?>  
<tr>
    <td colspan="5" style="border-color:#000000; border-style:solid; border-width:1px;"><div align="right"><strong>Grand Total</strong></div></td>
    <td width="127" style="border-color:#000000; border-style:solid; border-width:1px;">
	
	  <div align="center">
	    <?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);		
$a=$_POST['dayfrom'];
$b=$_POST['dayto'];
 
$result1 = mysql_query("SELECT sum(total) FROM salessumarry WHERE date BETWEEN '$a' AND '$b'");
while($row = mysql_fetch_array($result1))
{
    $rrr=$row['sum(total)'];
	echo formatMoney($rrr, true);
 }

mysql_close($con);
?> 
      </div></td>
  </tr>
</table>
<p><br />
  <br />
  <a href="home.php">back to main menu </a></p>
<p><a href="sales.php">back to sales </a></p>
