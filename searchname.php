<?php
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from members where FirstName like '%$q%' or LastName like '%$q%' order by member_id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['FirstName'];
$lname=$row['LastName'];
$country=$row['curcity'];
$id=$row['member_id'];

$re_fname='<b>'.$q.'</b>';
$re_lname='<b>'.$q.'</b>';

$final_fname = str_ireplace($q, $re_fname, $fname);

$final_lname = str_ireplace($q, $re_lname, $lname);


?>
<div class="display_box" align="left">

<?php echo '<a href=pamentstatus.php?id=' . $id . '>'.$final_fname; ?>&nbsp;<?php echo $final_lname; ?>



<?php
}

}
else
{

}


?>
