<?php
							if (isset($_GET['id']))
							{
						$con = mysql_connect('localhost','root',"");
						if (!$con)
						  {
						  die('Could not connect: ' . mysql_error());
						  }
						
						mysql_select_db("inventory", $con);
						
						$member_id = $_GET['id'];
						$result = mysql_query("SELECT * FROM productlist WHERE id = $member_id");
						
						$row = mysql_fetch_array($result);
						$id=$row["id"];
						$pcode=$row["pcode"];
						$pname=$row["pname"];
						$pdesc=$row["pdesc"];
						$pleft=$row["pleft"];
						$pprice=$row["pprice"];
						mysql_close($con);
						}
						
						?>




<form action="editexec.php" method="post">
code:<br />
<input name="a" type="text" value="<?php echo $pcode; ?>" /><input name="m" type="hidden" value="<?php echo $id; ?>" /><br />
description:<br />
<input name="c" type="text" value="<?php echo $pdesc; ?>" size="70" />
<br />
quantity:<br />
<input name="d" type="text" value="<?php echo $pleft; ?>" /><br />
price:<br />
<input name="e" type="text" value="<?php echo $pprice; ?>" /><br />
<input name="submit" type="submit" value="save">
</form>
