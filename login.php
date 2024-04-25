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
</head>

<body>
<form id="form1" name="form1" method="post" action="login-exec.php">
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
    <input type="submit" name="Submit" value="LOGIN" />
    </label>
  </p>
</form>
</body>
</html>
