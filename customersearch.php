<?php
	require_once('auth.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" href="./css/style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.watermarkinput.js"></script>
<script type="text/javascript">
$(document).ready(function(){

$(".search").keyup(function() 
{
var searchbox = $(this).val();
var dataString = 'searchword='+ searchbox;

if(searchbox=='')
{
}
else
{

$.ajax({
type: "POST",
url: "customersearch2.php",
data: dataString,
cache: false,
success: function(html)
{

$("#display").html(html).show();
	
	
	}




});
}return false;    


});
});

jQuery(function($){
   $("#searchbox").Watermark("Enter Customer Name Here");
   });
</script>
<style type="text/css">

#searchbox
{
width:250px;
border:solid 1px #000;
padding:3px;
margin-right: 437px;
background-image:url(images/search.jpg);
	background-position:right;
	background-repeat:no-repeat;
}
#display
{
display:none;
float:left;
border-left:solid 1px #dedede;
border-right:solid 1px #dedede;
border-bottom:solid 1px #dedede;
overflow:visible;
display: block;
width: 256px; margin-top: -21px;
}
.display_box
{
font-size:14px; height:25px; height:auto; padding-bottom:1px; padding-top:1px; font-family:Geneva, Arial, Helvetica, sans-serif; background-color:#CCCCCC; display:block;
}

.display_box:hover
{
color:#FFFFFF;

}
#shade
{
background-color:#00CCFF;

}


a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.mainwraper{
width:80%;
height:auto;
background-color:#00CCFF;
margin:0 auto;

}
.left{
width:80%;
float:left;
}
.right{
width:20%;
float:right;
}
#txt{
border-style:solid;
border-color:#000000;
border-width: 0px 0px 2px 0px;
}
</style>
</head>

<body>
<a href="home.php"><img src="img/64x64/back.png" alt="back" border="0" style="float:right;" /></a>
<input type="text" class="search" id="searchbox" />
  <br />
  <div id="display">  </div>
</body>
</html>
