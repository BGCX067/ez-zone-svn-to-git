<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include('connect.php');

 include('chkindexlogin.php');

?>
<?php
$ct=$_POST['cmt'];
$eid=$_SESSION['emid'];
	if($_POST['comm']=="Comment")
	{
	$cq="insert into ".T_CMT." (comment,mail,date) values ('$ct','$eid',now())";
	$cr=mysql_query($cq) or die(mysql_error());
	}
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="EN" lang="EN" dir="ltr">
<head profile="http://gmpg.org/xfn/11">
<title>Modular Business</title>
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
  <div id="topbar">
                                                   <?include("homemenu.php"); ?>

     <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
 <div id="header">
 <div class="fl_left">
 <h1>&nbsp;</h1>
<h1><a href="#">EzZone</a></h1>
<p>&nbsp;</p>
  </div>
 <div class="fl_right">
                                                     <!-- <p><a href="#"><img src="images/demo/images[5].jpg" alt="" width="469" height="119" /></a></p>-->
    </div>
                                                  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="topnav">
    <ul>
      <li class="active"></li>
      <li></li>
      <li></li>
      <li>
                                                        <ul>
                                                                                                          <li><a href="#">Link 1</a></li>
                                                                                                          <li><a href="#">Link 2</a></li>
                                                                                                          <li>\</li>
                                                                                                          </ul>
      </li>
      </ul>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
  <!--  <table width="8" border="1">
                                                      <tr>
                                                                     <td width="11%"><a href="Homepage.html">Ez Homepage</td>
                                                                    <td width="12%"><a href="Universities.html">Ez Universities</a></td>
                                                                    <td width="12%"><a href="Party House.html">Ez Party House</a></td>
																	
                                                                    <td width="11%"><a href="">Ez Classifieds</a></td>
                                                                    <td width="12%"><a href="">Ez Food Houses</a></td>
                                                                    <td width="7%"><a href="">Ez Blog</a></td>
                                                                    <td width="13%"><a href="">Ez Entertainment</a></td>
                                                                     <td width="10%"><a href="">Ez Travels</a></td>
                                                      </tr>
    </table> -->
	
	
<div style="font-size:18px;padding-top:30px;">  FORUM</div>  
<?php
$sq1="select a.*, b.uname from ".T_CMT." a, ".T_REG." b where a.mail=b.email";
$sr1=mysql_query($sq1) or die(mysql_error());
while($sd1=mysql_fetch_array($sr1))
{
?>
<div><?php echo $sd1['uname'];?></div>
<div><?php echo $sd1['comment'];?></div>
<div  style="padding-left:50px;"><?php echo $sd1['date'];?></div>

<?php
}
?>
<?php
include('chkindexlogin.php'); 
$x=$_SESSION['emid'];
if(isset($x))
 {
 ?>
<form method="POST" action="Classifields.php"  style="padding-top:40px;">
<table width="300px" border="0px" cellpadding="0px" cellspacing="0px" >
<tr><td><textarea rows="10" cols="100px" name="cmt" id="cmt"></textarea>
<tr><td colspan="1"><input type="submit" name="comm" value="Comment" class="button" /><td></tr>
</table>
</form>                                           
 <?php } ?>                                                                                                     
                                                    

    <p>&nbsp;</p>
    <p><br class="clear" />
    </p>
	</div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col5"></div>
<!-- ####################################################################################################### -->
<div class="wrapper col6">
  <div id="footer">
    <div id="newsletter">
      <h2>Maps</h2>
      <p>Connect it with getthere.sg
    </p></div><div class="footbox">
      <h2>About us </h2>
      <ul>
                                                        About us.
                                                        <li><a href="#"></a></li>
        </ul>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div class="footbox">
      <h2>Ezlink/ Nets</h2>
      <ul>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li class="last">This is little dicey </li>
        </ul>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <div class="footbox">
      <h2>News</h2>
      <ul>
        <li></li>
        <li>Can be done using adobe flash player</li>
        <li></li>
        <li></li>
        </ul>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2010 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Open Source Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
