<?php
	//Start session
	session_start();
	
			$rt=$_GET['code'];	

			session_regenerate_id();
			$_SESSION['SESS_MEMBER_ID'] = $rt;
			session_write_close();
			header("location: auto.php");
			exit();

	
?>