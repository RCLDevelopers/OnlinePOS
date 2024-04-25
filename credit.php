<?php
	require_once('auth.php');
?>
<html>
<head>
<script>
//  Developed by Roshan Bhattarai 
//  Visit http://roshanbh.com.np for this script and more.
//  This notice MUST stay intact for legal use

//fuction to return the xml http object
function getXMLHTTP() { 
		var xmlhttp=false;	
		try{
			xmlhttp=new XMLHttpRequest();
		}
		catch(e)	{		
			try{			
				xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e){
				try{
				xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch(e1){
					xmlhttp=false;
				}
			}
		}
		 	
		return xmlhttp;
	}
	
	
	
function getCurrencyCode(strURL)
{		
	var req = getXMLHTTP();		
	if (req) 
	{
		//function to be called when state is changed
		req.onreadystatechange = function()
		{
			//when state is completed i.e 4
			if (req.readyState == 4) 
			{			
				// only if http status is "OK"
				if (req.status == 200)
				{						
					document.getElementById('cur_code').value=req.responseText;						
				} 
				else 
				{
					alert("There was a problem while using XMLHTTP:\n" + req.statusText);
				}
			}				
		 }			
		 req.open("GET", strURL, true);
		 req.send(null);
	}			
}
</script>  
  
  
  
  
  
  
  
 <script language="javascript" type="text/javascript">
 
function checkNumeric(objName)
  {
    var lstLetters = objName;

    var lstReplace = lstLetters.replace(/\,/g,'');
  }   
 </script>
  
</head>
<body>
<div style="width: 684px; height: 281px;">
<form id="suggestSearch" action="individualledger.php" method="get" style="width: 358px; margin-left: 171px; margin-top: 129px;">
<?php
	  $con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("inventory", $con);
$name= mysql_query("select * from supplier");
?>

<select name="PoNumber"  onChange="getCurrencyCode('find_ccode.php?country='+this.value)">
<?php
echo '<option>Select Supplier</option>';
 while($res= mysql_fetch_assoc($name))
 
{
echo '<option value="'.$res['company_name'].'">';
echo $res['company_name'];
echo'</option>';
}
$name= mysql_query("select * from customer");
while($res= mysql_fetch_assoc($name))
 
{
echo '<option value="'.$res['name'].'">';
echo $res['name'];
echo'</option>';
}
echo'</select>';

mysql_close($con)


?>
<input type="text" name="cur_code" id="cur_code" >
<br>
  <input name="" type="submit" value="Preview">
</p>
</form>
</div>
</body>
</html>
