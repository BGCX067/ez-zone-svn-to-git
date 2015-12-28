<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();
 include ('connect.php');?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>EzZone</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<style>
li
{
list-style-type:none;
color:white;
}
</style>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
</head>
<body id="top">

<div class="wrapper col1">
<?include("homemenu.php"); ?>
</div>
<div class="wrapper col2">
<div id="header">
<div class="fl_left">
 <h1>&nbsp;</h1>
      <h1><a href="#">EzZone</a></h1>
      <p>&nbsp;</p>
</div>
    <div class="fl_right">
<p><a href="#"><img src="images/demo/image.jpg" alt="" width="469" height="119" /></a></p>
    </div>
</div>
</div>
<div id="body">
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col3">
<div id="topnav">
<? include ("menu.php"); ?>
<div id="featured_slide">
<div id="featured_content">
<ul>
<li><a href="#"><img src="images/demo/MarketplaceDSC01396[1].jpg" alt="" /></a></li>
<li><a href="#"><img src="images/demo/marketplace[1].gif" alt="" /></a></li>
 <li><a href="#"><img src="images/demo/rave_party[1].jpg" alt="" /></a></li>
<li><a href="#"><img id="imgb" src="http://www.lux-limo.co.uk/limo-articles/ptb-partybus.jpg" width="350" height="349" /></a></li>
<li><a href="#"><img src="images/demo/BusinessCardExpertsClassifiedAdCircled2[2].jpg" alt="" /></a></li>
<li><a href="#"><img src="images/demo/scott-westmoreland-tropic-travels[1].jpg" alt="" /></a></li>
<li><a href="#"><img src="images/demo/88237520_43eb43f831[1].jpg" alt="" /></a></li>
<li><a href="#"><img src="images/demo/1194984513646717809chat_icon_01.svg.med[1].png" alt="" /></a></li>
<li><a href="#"><img src="images/demo/chat-symbols[1].png" alt="" /></a></li>
</ul>
</div>
<a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a></div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4" style="height: 500px; padding: 10px;width: 950px;border-bottom: none;line-height: 180%">
<center>
	
	<table border="0" height="390" cellpadding="0" cellspacing="0" width="798" >
	<tr >
	<td width="190" valign="top" class="wrapper col4">

	<div style="margin-left:10px;">
	<div class="headleft">CONTACT</div><br/>
		<div class="head1">E-mail Us</div>
		<p class="leftcont">
		<ul class="serv"><li>
				<img src="images/ar.jpg" width="6" height="6">&nbsp;ezzone@gmail.com</li>

				
		</ul>
		</P><br/>	
		
		<div class="head1">Call Us</div>
		<p class="leftcont">
		<ul class="serv">
				<li><img src="images/ar.jpg" width="6" height="6">&nbsp; Marx - 82394292</li>


				
		        <li><img src="images/ar.jpg" alt="" width="6" height="6" /> &nbsp;Shalab - 98524599</li>
		        <li><img src="images/ar.jpg" alt="" width="6" height="6" />&nbsp;&nbsp;Pragna - 94845854</li>
		        <li></li>
		</ul>
		</P>
	</div>	
	</td>
	<td style="background-image:url('images/dot.jpg');background-repeat:repeat-y;" width="1" height=""  class="wrapper col4">
	
	</td>
	<td width="379" valign="top"  class="wrapper col4">
	<div class="headright" >CONTACT FORM</div>
	<div style="margin-left: 60px; width: 300px;" class="wrapper col4" >

	
	
	
	
<form name="frmListing" onSubmit="return validation();" method="post" action="contact.php">
<table width="380" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td style="text-align: left; margin-left: 5px;">Name<br/>	  
	  <input type="text" name="txtFullName" style="width: 245px"></td>
    </tr>
    <tr>
      <td style="text-align: left;">Email:<br/><input name='txtEmail' type='text' style="width: 245px" /></td>
    </tr>

    <tr>
      <td style="text-align: left;">Subject:<br/><input name='txtSubject' type='text' style="width: 245px" /></td>
    </tr>
    <tr>
      <td style="text-align: left;">Message:<br/><textarea name='txtMessage' rows='5' cols='28'></textarea></td>
    </tr>
    <tr>

      <td><div align="left">
	 
        <input style="cursor: pointer; margin-left: 55px;" name="submit" type="submit" value="Send Mail" />
      <input style="cursor: pointer; margin-left: 30px;" type="reset" name="Reset"/>
     </div></td>
    </tr>
  </table>
 </form></div>
	</td>
	</tr>
</table>
</center>

</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5"></div>
<!-- ####################################################################################################### -->
</div>
<? include("homefooter.php"); ?>
</body>
</html>
<?
if(isset($_POST['submit'])=='Send Mail')
{
$name=$_POST['txtFullName'];
$mail=$_POST['txtEmail'];
$subj=$_POST['txtSubject'];
$message=$_POST['txtMessage'];

$to = "ezone@gmail.com";

$subject ="Subject: Registration : $subj | From: $mail";
$message ="You have a message";
$from_header = "From: Gisterpages";
mail ($to, $subject, $message, $from_header);
header("Location: contact.php?info=1");
}
?>