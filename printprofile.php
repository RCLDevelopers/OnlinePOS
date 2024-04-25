<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.left{
width:80%;
margin:0 auto;
}

#txt{
border-style:solid;
border-color:#000000;
border-width: 0px 0px 2px 0px;
}
</style>
</head>

<body>
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
						$result = mysql_query("SELECT * FROM customer WHERE id = $member_id");
						
						$row = mysql_fetch_array($result);
						$id=$row["id"];
						$name=$row["name"];
						$lname=$row["lname"];
						$mname=$row["mname"];
						$mname=$row["mname"];
						$occupation=$row["occupation"];
						$ddate=$row["ddate"];
						$bday=$row["bday"];
						$dayf = substr($bday, 0, -5);
						$address=$row["address"];
						$tel=$row["tel"];
						$mobile=$row["mobile"];
						$email=$row["email"];
						$ds=$row["ds"];
						$ns=$row["ns"];
						$cs=$row["cs"];
						$os=$row["os"];
						$a1=$row["aa"];
						$a2=$row["ab"];
						$pro=$row["pro"];
						$proo=$row["proo"];
						$m1=$row["ma"];
						$m2=$row["mb"];
						$m3=$row["mc"];
						$m4=$row["md"];
						$m5=$row["me"];
						$m6=$row["mf"];
						$b1=$row["ba"];
						$b2=$row["bb"];
						$b3=$row["bc"];
						$b4=$row["bd"];
						$b5=$row["be"];
						$b6=$row["bf"];
						$b7=$row["bg"];
						$b8=$row["bh"];
						$b9=$row["bi"];
						$b10=$row["bj"];
						$b11=$row["bk"];
						$b12=$row["bl"];
						$b13=$row["bm"];
						$b14=$row["bn"];
						$b15=$row["bo"];
						$b16=$row["bp"];
						$c1=$row["ca"];
						$c2=$row["cb"];
						$c3=$row["cc"];
						$c4=$row["cd"];
						$c5=$row["ce"];
						$mid=$row["member_id"];
						mysql_close($con);
						}
						
						?>
						
						
						
						
	<div  class="left">					
						<form action="editcustomerprof-exec.php" method="post"> 
 <fieldset style="border-width: 3px;">
 <legend><b>Personal Information</b></legend>
 FirstName: <u><?php echo $name; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Middle Name:<u><?php echo $mname; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Last name: <u><?php echo $lname; ?></u><br />
  Address: <u><?php echo $address; ?></u><br />
  Birthday:<u><?php echo $bday; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Occupation:<u><?php echo $occupation; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demo Date:<u><?php echo $ddate; ?></u><br />
  E-mail: <u><?php echo $email; ?></u><br />
  Phone No.:<u><?php echo $tel; ?></u>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mobile No.:<u><?php echo $mobile; ?></u>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Member ID.:<u>
 <?php echo $mid; ?></u>
 </fieldset>
  
  
  <fieldset style="border-width: 3px;">
 <legend><b>Personal Skin Profile</b></legend>
 1. <b>What is your skin type?</b><br />
  &nbsp;&nbsp;&nbsp;<input name="ds" type="checkbox" value="checked" <?php echo $ds; ?>/>Dry Skin - if you have small pores, dull looking skin<br />
  &nbsp;&nbsp;&nbsp;<input name="ns" type="checkbox" value="checked" <?php echo $ns; ?>/>Normal Skin - if you have healhty-looking skin with a smooth texture<br />
  &nbsp;&nbsp;&nbsp;<input name="cs" type="checkbox" value="checked" <?php echo $cs; ?>/>Combination Skin - if you have healhty-looking skin with a smooth texture and some oiliness in the T-zone areas<br />
  &nbsp;&nbsp;&nbsp;<input name="os" type="checkbox" value="checked" <?php echo $os; ?>/>Oily Skin - if you have large pores and a shiny appearance<br /><br />
  
  2. <b>What product are you using today?</b><br />
  &nbsp;&nbsp;&nbsp;a. Are you currently using Mary kay products? Yes<input name="a1" type="checkbox" value="checked" <?php echo $a1; ?>/>&nbsp;&nbsp;No<input name="a2" type="checkbox" value="checked" <?php echo $a2; ?>/><br />
   &nbsp;&nbsp;&nbsp;b. If Yes, what Mary Kay products are you using?<u>&nbsp;&nbsp;<?php echo $a3; ?>&nbsp;&nbsp;</u>
   <br />
    &nbsp;&nbsp;&nbsp;c. If No, what product brand are you using?<u>&nbsp;&nbsp;<?php echo $a4; ?>&nbsp;&nbsp;</u>
    <br /><br />
	
	
3. <b>What do you want your skin care product to do? Please rank from 1-3,1 being the highest.</b><br />
  &nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;<?php echo $m1; ?>&nbsp;&nbsp;</u> Maintain healthy skin<br />
  &nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;<?php echo $m2; ?>&nbsp;&nbsp;</u> Fight lines sand wrinkles<br />
  &nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;<?php echo $m3; ?>&nbsp;&nbsp;</u> Lighten and even skin tone<br />
  &nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;<?php echo $m4; ?>&nbsp;&nbsp;</u> Help keep skin clean, acne free, and control excess oiliness<br />
  &nbsp;&nbsp;&nbsp;<u>&nbsp;&nbsp;<?php echo $m5; ?>&nbsp;&nbsp;</u> Others, please specify<u>&nbsp;&nbsp;<?php echo $m6; ?>&nbsp;&nbsp;</u><br /><br />
   
   
 4. <b>I would like products that?</b><br />
  &nbsp;&nbsp;&nbsp;<input name="b1" type="checkbox" value="checked" <?php echo $b1; ?>/>Minimize the appearance of fine lines and wrinkles<br />
  &nbsp;&nbsp;&nbsp;<input name="b2" type="checkbox" value="checked" <?php echo $b2; ?>/>Maintain healthy balance skin<br />
  &nbsp;&nbsp;&nbsp;<input name="b3" type="checkbox" value="checked" <?php echo $b3; ?>/>Control oil throughout the day<br />
  &nbsp;&nbsp;&nbsp;<input name="b4" type="checkbox" value="checked" <?php echo $b4; ?>/>Help clear and prevent blemishes<br />
  &nbsp;&nbsp;&nbsp;<input name="b5" type="checkbox" value="checked" <?php echo $b5; ?>/>Even skin tone, reducevisible dark spots and skin discoloration<br />
  &nbsp;&nbsp;&nbsp;<input name="b6" type="checkbox" value="checked" <?php echo $b6; ?>/>Immediately improve the appearance and textture of any skin<br />
  &nbsp;&nbsp;&nbsp;<input name="b7" type="checkbox" value="checked" <?php echo $b7; ?>/>Refine pores and smothen skin<br />
  &nbsp;&nbsp;&nbsp;<input name="b8" type="checkbox" value="checked" <?php echo $b8; ?>/>Remove eye makeup gently<br />
  &nbsp;&nbsp;&nbsp;<input name="b9" type="checkbox" value="checked" <?php echo $b9; ?>/>Moistorize, firm, brighten and minimize fine lines and wrinkles<br />
  &nbsp;&nbsp;&nbsp;<input name="b10" type="checkbox" value="checked" <?php echo $b10; ?>/>Around the delicate skin of the eye area<br />
  &nbsp;&nbsp;&nbsp;<input name="b11" type="checkbox" value="checked" <?php echo $b11; ?>/>Smoothen dry lips<br /> 
  &nbsp;&nbsp;&nbsp;<input name="b12" type="checkbox" value="checked" <?php echo $b12; ?>/>Improve the appearance of fine lines and wrinkles on and around<br />
  &nbsp;&nbsp;&nbsp;<input name="b13" type="checkbox" value="checked" <?php echo $b13; ?>/>Lips area help extend lipstick wear<br />
  &nbsp;&nbsp;&nbsp;<input name="b14" type="checkbox" value="checked" <?php echo $b14; ?>/>Give my skin a more youthful look<br />
  &nbsp;&nbsp;&nbsp;<input name="b15" type="checkbox" value="checked" <?php echo $b15; ?>/>Lighten and brighten my skin<br />
  &nbsp;&nbsp;&nbsp;<input name="b16" type="checkbox" value="checked" <?php echo $b16; ?>/>boost age-fighting benefits while you sleep<br /><br />
  
   5. <b>a. My skin tone is?</b><br />
  &nbsp;&nbsp;&nbsp;<input name="c1" type="checkbox" value="checked" <?php echo $c1; ?>/>&nbsp;&nbsp;&nbsp; Fair &nbsp;&nbsp;&nbsp;<input name="c2" type="checkbox" value="checked" <?php echo $c2; ?>/>&nbsp;&nbsp;&nbsp; Brown<br />
  &nbsp;&nbsp;&nbsp;&nbsp;<b>b. For foundation finish, I prefer;</b><br />
  &nbsp;&nbsp;&nbsp;<input name="c3" type="checkbox" value="checked" <?php echo $c3; ?>/>&nbsp;&nbsp;&nbsp; Mathe &nbsp;&nbsp;&nbsp;<input name="c4" type="checkbox" value="checked" <?php echo $c4; ?>/>&nbsp;&nbsp;&nbsp; Luminous &nbsp;&nbsp;&nbsp;<input name="c5" type="checkbox" value="checked" <?php echo $c5; ?>/>&nbsp;&nbsp;&nbsp; Natural<br />
 </fieldset>
 
  </form>
  </div>
</body>
</html>
