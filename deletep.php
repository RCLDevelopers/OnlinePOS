
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
						mysql_close($con);
						}
						
						?>

<form action="deleteproduct.php" method="post">
<input name="a" type="hidden" value="<?php echo $id; ?>" />
Are you sure you want to delete this product?<br />
<input name="" type="submit" value="Yes" />
