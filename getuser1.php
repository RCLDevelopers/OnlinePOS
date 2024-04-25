<?php
 $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);

$sql="SELECT * FROM supplier WHERE company_name = '".$q."'";

$result = mysql_query($sql);

while($row = mysql_fetch_array($result))
{
   echo $row['contact_name'];

}


mysql_close($con);
?> 