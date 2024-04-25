			<?php
			if (isset($_GET['id']))
			{
	
	
			$con = mysql_connect("localhost","root","");
			if (!$con)
			  {
			  die('Could not connect: ' . mysql_error());
			  }
			
			mysql_select_db("inventory", $con);
		
			$creditcode=$_GET['id'];
			$mn=$_POST['c'];
			
			$result = mysql_query("SELECT * FROM credit where p_code = '$creditcode'");
			while($row1 = mysql_fetch_array($result))
			{
			$cover=$row1['coverage'];
			$nu=$row1['nu_payment'];
			$cp=$row1['creditpayable'];
			$paid=$row1['paid'];
			$totalamount=$cp+$paid;
			$creditpayable=$row1['creditpayable'];
			}
			$ble=$mn+$paid;
			$astig=$cp-$mn; 
			$fop=date("m/d/Y");
			
			
			
			mysql_query("UPDATE credit SET creditpayable = '$astig', paid='$ble' WHERE p_code = '$creditcode'");
			mysql_query("INSERT INTO creditdatails (amount, datepayment, creditcode, balance) VALUES ('$mn', '$fop', '$creditcode', '$creditpayable')");
			header("location: credit-exec.php");
			exit();
			}
			?>