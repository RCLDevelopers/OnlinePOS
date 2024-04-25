<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	//unset($_SESSION['SESS_LAST_NAME']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-image: url(img/loginbg.png);
	background-repeat:no-repeat;
	background-position:top;
	background-color:#000000;
	
}
-->
</style></head>

<body>
<div style="width:300px; margin-left:40%; margin-top:15%;">
<form id="form1" name="form1" method="post" action="mainloginexec.php">
  <label>USERNAME :
  <input type="text" name="username" />
  </label>
  <p>
    <label>PASSWORD :
    <input type="password" name="password" />
    </label>
  </p>
  <p>
    <label>
    <input type="submit" name="Submit" value="LOGIN" style="margin-left:32%;" />
    </label>
  </p>
</form>
</div>
</body>
</html>
