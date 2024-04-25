<?php 

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);


$country=$_REQUEST['country'];

$result3 = mysql_query("SELECT * FROM supplier where company_name='$country'");
while($row3 = mysql_fetch_array($result3))
{
echo $row3['contact_name'];	
}

$result4 = mysql_query("SELECT * FROM customer where name='$country'");
while($row4 = mysql_fetch_array($result4))
{
echo $row4['member_id'];	
}

?>
