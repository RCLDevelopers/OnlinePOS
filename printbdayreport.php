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
$dayf = substr($a, 0, -5);
$dayt = substr($b, 0, -5);
 
$result = mysql_query("SELECT * FROM customer WHERE birthday BETWEEN '$dayf' AND '$dayt'");
echo 'list of birthday celebrant from <b>'.$a.'</b> to <b>'.$b.'</b><br><br>';
echo '<table width="400" border="1" cellpadding="0" cellspacing="0">
<tr>
<td>Name</td>
<td>Birthday</td>
<td>Contact Number</td>
</tr>';
while($row = mysql_fetch_array($result))
{
  echo '<tr>';
    echo '<td>'.$row['name'] . ' ' .$row['mname']. ' ' .$row['lname'].'</td>';
    echo '<td>'.$row['bday'].'</td>';
    echo '<td>('.$row['tel'].')or('.$row['mobile'].')</td>';
  echo '</tr>';
  }
echo "</table>";

mysql_close($con);
?>

</div>
