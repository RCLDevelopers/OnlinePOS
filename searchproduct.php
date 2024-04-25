<?php
include('config.php');
if($_POST)
{

$q=$_POST['searchword'];

$sql_res=mysql_query("select * from productlist where pcode like '%$q%' or pcode like '%$q%'");
while($row=mysql_fetch_array($sql_res))
{
$fname=$row['pcode'];

$id=$row['id'];

$re_fname='<b>'.$q.'</b>';


$final_fname = str_ireplace($q, $re_fname, $fname);



?>
<div class="display_box" align="left">

<?php echo '<a href=stockin.php?id=' . $id . '>'.$final_fname; ?>



<?php
}

}
else
{

}


?>
