<?php
	//Start session
	session_start();
	
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);






$result = mysql_query("SELECT * FROM code");
while($row = mysql_fetch_array($result))
  {
        $fefe=$row['code']; 
  }
  $sasa=$fefe+1;

	
mysql_query("UPDATE code SET code = '$sasa'");
$fgh='000'.$sasa;						
$finalcode=date("Y-m-$fgh").'-STI';						

			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $finalcode;
			session_write_close();
			header("location: stockin.php");
			exit();
		
		
		
mysql_close($con);		
		
	
?>