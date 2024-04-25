<?php
	//Start session
	session_start();
	
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);






$result = mysql_query("SELECT * FROM socode");
while($row = mysql_fetch_array($result))
  {
        $fefe=$row['code']; 
  }
  $sasa=$fefe+1;

	
mysql_query("UPDATE socode SET code = '$sasa'");
$fgh='000'.$sasa;						
$finalcode=date("Y-m-$fgh").'-STO';						

			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $finalcode;
			session_write_close();
			header("location: auto.php");
			exit();
		
		
		
mysql_close($con);		
		
	
?>