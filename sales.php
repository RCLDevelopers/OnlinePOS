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



<script type="text/javascript">
function showDiv(prefix,chooser) 
{
        for(var i=0;i<chooser.options.length;i++) 
		{
        	var div = document.getElementById(prefix+chooser.options[i].value);
            div.style.display = 'none';
        }
 
		var selectedOption = (chooser.options[chooser.selectedIndex].value);
		
 
		if(selectedOption == "1")
		{
			displayDiv(prefix,"1");
		}
		if(selectedOption == "2")
		{
			displayDiv(prefix,"2");
		}
		
		
		
 
}
 
function displayDiv(prefix,suffix) 
{
        var div = document.getElementById(prefix+suffix);
        div.style.display = 'block';
}

</script>


  <style type="text/css">
<!--
.style1 {font-size: 36px}
-->
  </style>
</head>

<body>
<div align="center" class="style1">Sales</div>
<br />
<a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" /></a>
<br /><BR />
Select Here:
<select name="portal" id="cboOptions" onchange="showDiv('div',this)">
  <option value="1">Over All</option>
  <option value="2">By Customer/Team Member</option>
</select>

<div id="div1" style="display:none; color:#000000">
<form action="salesreport.php" method="post" style="color:#FF00FF;">

From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>
</div>

<div id="div2" style="display:none; color:#000000">
<form action="salesreportindi.php" method="post" style="color:#FF00FF;">
Customer/Team Member: <input name="daycusname" type="text" />
<br />
From: <input name="dayfrom" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
To: <input name="dayto" type="text" class="tcal" />&nbsp;&nbsp;&nbsp;
<input name="" type="submit" value="Search" /></form>
</div>


</body>
</html>
