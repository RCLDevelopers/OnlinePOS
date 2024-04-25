<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" type="text/css" href="tcal.css" />
<script type="text/javascript" src="tcal.js"></script> 

  <style type="text/css">
<!--
.style1 {font-size: 36px}
-->
  </style>
</head>

<body>
<div align="center" class="style1">Birthday Report Pages</div>
<br />
<a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" /></a>
<form action="printbdayreport.php" method="post">
From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>

</body>
</html>
