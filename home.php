<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> Inventory System </title>
<meta name="Author" content="Stu Nicholls" />
<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
<link rel="stylesheet" type="text/css" href="pro_dropdown_2/pro_dropdown_2.css" />

<script src="pro_dropdown_2/stuHover.js" type="text/javascript"></script>
<style type="text/css">
<!--
.indexwraper{
width:70%;
height:500px;
border-style:solid;
border-width:thin;
margin:0 auto;
border-width: 3px;
}
-->
</style>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
  <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>
</head>

<body>

<span class="preload1"></span>
<span class="preload2"></span>
<div style="width:70%; margin: 50px auto -1px;"><img src="img/Untitled-1.png" alt="logo" /></div>
<div style="width:70%; margin:0 auto; height:185px; border-style:solid; border-color:#FFFFFF;">

<ul id="nav">
	<li class="top"><a href="index.php" class="top_link"><span style="font-size:24px; font-weight:bold;">Logout</span></a></li>
	<li class="top"><a href="#nogo2" id="products" class="top_link"><span class="down" style="font-size:24px; font-weight:bold;">Transaction</span></a>
		<ul class="sub">
			<li><a href="login-exec.php"><span style="font-size:18px; font-weight:bold;">Sales</span></a></li>
			<li><a href="stockinloginexec.php"><span style="font-size:18px; font-weight:bold;">Purchases</span></a></li>
			<li><a rel="facebox" href="credit.php"><span style="font-size:18px; font-weight:bold;">Payments</span></a></li>
			<li><a rel="facebox" href="receipt.php"><span style="font-size:18px; font-weight:bold;">Retrieve OR</span></a></li>
		</ul>
	</li>
	<li class="top"><a href="#nogo22" id="services" class="top_link"><span class="down" style="font-size:24px; font-weight:bold;">Master Files</span></a>

		<ul class="sub">
			<li><a href="products.php"><span style="font-size:18px; font-weight:bold;">Product</span></a></li>
			<li><a href="supplier.php"><span style="font-size:18px; font-weight:bold;">Team Members</span></a></li>
			<li><a href="clients.php"><span style="font-size:18px; font-weight:bold;">Clients</span></a></li>
		</ul>
	</li>

	<li class="top"><a href="editcustomerprof.php" class="top_link"><span style="font-size:24px; font-weight:bold;">Customer Profile</span></a></li>

	<li class="top"><a href="#" id="shop" class="top_link"><span class="down" style="font-size:24px; font-weight:bold;">Reports</span></a>
		<ul class="sub">
			<li><a href="sales.php"><span style="font-size:18px; font-weight:bold;">Sales</span></a></li>
			<li><a href="purchases.php"><span style="font-size:18px; font-weight:bold;">Purchases</span></a></li>
			<li><a href="bdayreport.php"><span style="font-size:18px; font-weight:bold;">Birth Day</span></a></li>
			<li><a href="productprint.php"><span style="font-size:18px; font-weight:bold;">Product</span></a></li>
			<li><a href="SEARCHDUE.php"><span style="font-size:18px; font-weight:bold;">Collection</span></a></li>
			<li><a href="customersearch.php"><span style="font-size:18px; font-weight:bold;">Member</span></a></li>
		</ul>
	</li>
</ul>


<div style="margin: 64px auto 0; font-size: 100px; font-family: fantasy; color:#ff00ea;">
INVENTORY SYSTEM
</div>
</div>
</body>
</html>
