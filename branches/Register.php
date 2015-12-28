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
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.pack.js"></script>
<script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="scripts/jquery.jcarousel.setup.js"></script>
<script>
function valid()
{
var name=/^[a-zA-Z\.\s]+$/
 if(document.getElementById('uname').value.length==0)
 {
 alert('please enter your name');
 document.getElementById('uname').focus();
 return false;
 }
 else if(!(name.test(document.getElementById('uname').value)))
 {
  alert('Name is Invalid-Use characters only');
  document.getElementById('uname').focus();
  document.getElementById('uname').value="";
 return false;
 }
 else if(document.getElementById('uname').value.charAt(0) == " ")
		{
			alert("Please Don't use space in user name");
			document.getElementById('uname').focus();
            document.getElementById('uname').value="";			
			return false;
          }

if(document.getElementById('pword1').value.length == 0)
	{
		alert("Please enter your password");
        document.getElementById('pword1').focus();
		return false;
	}
	
	else if(document.getElementById('pword1').value.length <6)
	{
		alert(" your password length must be six or above");
         document.getElementById('pword1').focus();
		 document.getElementById('pword1').value="";	
		return false;
	}
	
		
	 var Email=/[\w]+\@[\w]+\.([a-zA-Z]{2,4})/;
	if(document.getElementById('email').value.length ==0)
	{
		alert( "Please enter your email id.\n");
        document.getElementById('email').focus();
		return false;
	}
	else
	{
		if(!(Email.test(document.getElementById('email').value)))
		{
			alert("Please enter a valid email id.\n");
            document.getElementById('email').focus();
			document.getElementById('email').value="";
			return false;
		}
	}
	
if(document.getElementById('addr').value.length ==0)
	{
		alert("Please enter your comment area");
		document.getElementById('addr').focus();
		return false;
	}
	else
	{
	       if(doc.comment.value.charAt(0)==" ")
		  {
			alert("Please do not use space in comment area");
			doc.comment.focus();
			return false;		
		  }
	}	
	
	}
 
 
</script>
</head>
<body id="top">

<div class="wrapper col1">
<?include("homemenu.php"); ?>
</div>
<div class="wrapper col2">
<div id="header">
<div class="fl_left">
 <h1>&nbsp;</h1>
      <h1><a href="#">Ez Register</a></h1>
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
<div class="wrapper col4" style="height: 380px; padding: 10px;width: 950px;border-bottom: none;line-height: 180%">
  <div style="font-size:18px;padding-top:5px;"> REGISTRATION FORM</div>  
  <?php if($_GET['err'] ==1) echo "<font color=green><b>Fill all the details to register!</b></font>";?>
<div style="height:300px;"  class="wrapper col4">	
<form method="POST" action="regcheck.php" id="regform" name="regform" onsubmit="">
<table width="100%" border="0px" cellpadding="0px" cellspacing="0px"  class="wrapper col4">
<tr><td width="150px"><label>User name:</label></td><td><input type="text" name="uname" id="uname" value="" /></td></tr> 
<tr><td><label>Password:</label> </td><td><input type="password" name="pword" id="pword" maxlength="25" value="" /> </td></tr> 
<tr><td><label>Email-Id:</label></td><td><input type="text" name="email" id="email" value="" /></td></tr> 
<tr><td><label>Address:</label></td><td><input type="text" name="addr" id="addr" value="" /></td></tr> 
<tr><td><label>Phone-No:</label></td><td><input type="text" name="ph" id="ph" value="" /></td></tr> 
<tr><td colspan="1"><input type="submit" name="reg" value="Register" class="button" /><td></tr>
</table>
</form>                                           
                                                                                                      
                                                    
</div>
    <p>&nbsp;</p>
    <p><br class="clear" />
    </p>
	</div>
  </div>
</div>

</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5"></div>
<!-- ####################################################################################################### -->
</div>
<? include("homefooter.php"); ?>
</body>
</html>
