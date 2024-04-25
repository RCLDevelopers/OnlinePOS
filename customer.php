<?php
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from customer where name like '%$q%' order by id LIMIT 5");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['name'];

$id=$row['id'];

$re_fname='<b>'.$q.'</b>';


$final_fname = str_ireplace($q, $re_fname, $fname);



?>
<div class="display_box" align="left">

<?php echo '<a href=editcustomerprof.php?id=' . $id . '>'.$final_fname; ?>



<?php
}

}
else
{

}


?>
