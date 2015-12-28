<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php 
ob_start();
include ('connect.php');
include('chkindexlogin.php');
?>

<?php
@$ct=@$_POST['cmt'];
@$eid=$_SESSION['emid'];
	if(@$_POST['comm']=="Comment")
	{
	$cq="insert into ".T_CMT." (comment,mail,date) values ('$ct','$eid',now())";
	$cr=mysql_query($cq) or die(mysql_error());
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>EzZone</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
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
      <h1><a href="#">Ez Classifield</a></h1>
      <p>&nbsp;</p>
</div>
    <div class="fl_right">
<p><a href="#"><img src="images/demo/classifieds.jpg" alt="" width="469" height="119" /></a></p>
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
<div class="wrapper col4" style=" padding: 10px;width: 950px;border-bottom: none;line-height: 180%;overflow:auto;">
<div style="width:680px;margin-left:100px;">
<div style="font-size:18px;background-color:#4C4C4E;height:30px;"> <span style="padding-left:20px;">CLASSIFIEDS</span></div>

<?php
$sq1="select a.*, b.uname from ".T_CMT." a, ".T_REG." b where a.mail=b.email";
$sr1=mysql_query($sq1) or die(mysql_error());
while($sd1=mysql_fetch_array($sr1))
{
?>
<div>

<div style="width:450px;float:left;"> <?php echo $sd1['uname'];?></div>
<div style="width:200ox;float:right"><?php echo $sd1['date'];?></div>
</div>
<div style="width:600 px;float:left;padding-top:10px;color:red;"><?php echo $sd1['comment'];?>
<hr size="1px;" width="680px;" color="#4C4C4E;"></hr>
</div>
<?php
}
?>

<?php
//include('chkindexlogin.php'); 
 $x=$_SESSION['emid'];
if(isset($x))
 {
 ?>
<form method="POST" action="Classifields.php"  style="padding-top:40px;">
<table width="300px" border="0px" cellpadding="0px" cellspacing="0px" style="background-color: #5C4617;">
<tr><td><textarea rows="10" cols="80px" name="cmt" id="cmt"></textarea></td></tr>
<tr><td colspan="1"><input type="submit" name="comm" value="Comment" class="button" /><td></tr>
</table>
</form>                                           
 <?php } ?> 
 <br style="clear: both;">
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5"></div>
<!-- ####################################################################################################### -->
</div>
<? include("homefooter.php"); ?>
</body>
</html>
<?php ob_flush() ?>