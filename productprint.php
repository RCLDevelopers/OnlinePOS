<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Inventory System</title>
    
    <link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
  </head>
  <body id="index">
  <a href="index.php"></a>
    <div id="pagewrap">
	 <div id="body">
<table cellpadding="1" cellspacing="1" id="resultTable">
          <thead>
            <tr bgcolor="#33FF00" style="margin-bottom:10px;">
              <th width="10%">Code</th>
              <th width="63%">Description</th>
              <th width="9%">Qty Sold</th>
			  <th width="9%">Qty Left</th>
              <th width="9%">Price</th>
              
            </tr>
          </thead>
          <tbody>
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
$result = mysql_query("SELECT * FROM productlist");

while($row = mysql_fetch_array($result))
  {
    echo '<tr>';
      echo '<td>'.$row['pcode'].'</td>';
      echo '<td>&nbsp;&nbsp;&nbsp;'.$row['pdesc'].'</td>';
      echo '<td><div align="center">'.$row['psold'].'</div></td>';
      echo '<td><div align="center">'.$row['pleft'].'</div></td>';
      echo '<td><div align="center">';
	  $we=$row['pprice'];
	  echo formatMoney($we, true);
	  echo'</div></td>';
    echo '</tr>';
  }

mysql_close($con);
?> 
          </tbody>
       </table>
      </div>
    </div>
  </body>
</html>



