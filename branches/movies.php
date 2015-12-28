<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include('connect.php');?>
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
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<style>
li {
list-style-type: none;
color: #ffffff;
}
li a {
color: #ffffff;
}
</style>
</head>

<body id="top">
<div class="wrapper col1">
<?include("homemenu.php"); ?>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
<div id="header">
<div class="fl_left">
 <h1>&nbsp;</h1>
      <h1><a href="#">Ez Movies</a></h1>
      <p>&nbsp;</p>
</div>
    <div class="fl_right">
<p><a href="#"><img src="images/demo/ezzoneparty.jpg" alt="" width="469" height="119" /></a></p>
    </div>
</div>
</div>
<div id="body">
<!-- ####################################################################################################### -->
<div class="wrapper col3" style="height: 550px;">
  <div id="topnav">
<? include ("menu.php"); ?>
    <div id="featured_slide">
	<div id="featured_content">
	<ul>
                                                                                                                                                          <li><a href="#"><img src="images/demo/university_tution__fees_rise_to_6500[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/courses[2].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/nus_logo_full_colour[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/JCU_Logo_RGB[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/ntu_logo[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/JobWanted[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/2006_job_tuesday[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/courses[1].jpg" alt="" /></a></li>
                                                                                                                                                          <li><a href="#"><img src="images/demo/X932FCAF0YQOOCA3EZ7I1CAYBH6TXCAIAOLT4CASFB5IRCAU6EF2DCAIRUPEDCAY3Y6GRCAOF6W12CAUBF4SOCA04QOQRCA5LHOUSCAM1M567CASHL0MVCAGKENQOCAVO4254CAFHQN1ECAAGX3HRCAVY6674.jpg" alt="" /></a></li>
                                                                                                        </ul>
                                                      </div>
                                                      <a href="javascript:void(0);" id="featured-item-prev"><img src="images/prev.png" alt="" /></a> <a href="javascript:void(0);" id="featured-item-next"><img src="images/next.png" alt="" /></a></div>
  </div>
  <div>
<h3>  <font color="#000000">Enterntainment</font></h3>
<h2 style="color:red"><a href="entertainment.php">Ez Barbeques</a></h2>
<h2 style="color:red"><a href="movies.php">Ez Movies</a></h2>
<h2 style="color:red"><a href="sports.php">Ez Sports Events</a></h2>

 </div>
</div>
<!-- ####################################################################################################### -->

<div  class="wrapper col4">
Movie Showtimes<br/>
(Information is subject to change without prior notice)<br /><br /></div>
    <div style="background-color:#5C4617" >
<a class="wrapper col4" href="movies.php?movie=Cathay Amk Hub" >Cathay Amk Hub</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Cathay Causeway Point">Cathay Causeway Point</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Cathay Downtown East">Cathay Downtown East</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Cathay Orchard">Cathay Orchard</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Cathay The Cathay Cineplex">Cathay The Cathay Cineplex</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Cathay The Picturehouse">Cathay The Picturehouse</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Eng Wah Jubilee">Eng Wah Jubilee</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Eng Wah Suntec">Eng Wah Suntec</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Eng Wah Toa Payoh">Eng Wah Toa Payoh</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Eng Wah West Mall">Eng Wah West Mall</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Filmgarde Iluma, Bugis">Filmgarde Iluma, Bugis</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Filmgarde Leisure Park Kallang">Filmgarde Leisure Park Kallang</a><br/>
<a class="wrapper col4"  href="movies.php?movie=Jade Jade Theatre">Jade Jade Theatre</a><br/>
<div>
<table border="1px;">
<?php
@$hall=$_GET['movie'];
@$q="select * from " .T_MOV." where mhall='$hall'";
@$r=mysql_query($q) or die(mysql_error());

while(@$d=mysql_fetch_array($r))
{
?>
<tr><td><?php echo $d['mhall']; ?></td><td><?php echo $d['mname']; ?></td><td><?php echo $d['mshow']; ?></td></tr>
<?php
}
?>
</table>



<!-- ####################################################################################################### -->
<div class="wrapper col5" style="background-color: black;padding: 5px;width: 960px;">
In one place we need to write to buy tickets please contact <br/><br/>
Shalabh 98524599
Pragna 94845854
Marx 82394292

</div>
<!-- ####################################################################################################### -->
</div>

<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
<? include("homefooter.php"); ?>
</body>
</html>
