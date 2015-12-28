<div id="topbar">
<div style="width:600px;float:left;padding: 3px;text-align: left;font-size: 12px;padding-5px;">
<?php
if(!isset($_SESSION['emid']))
{?>
<form method="post" action="login.php" id="logform" onsubmit="return checkForm();" name="regform">
<label>User name(email-id):</label> <input type="text" name="email" id="email" value="" />
<label>Password:</label> <input type="password" name="password" id="password" maxlength="25" value="" /> 
<input type="submit" name="log" value="Login" class="button" />
</form> 
<?php 
}
else echo "Welcome: ".$_SESSION['emid']." [ <li><a href='logout.php'>Logout</a></li> ]";
?>
</div>
<div style="width:340px;float:right;margin-top:0px;padding: 5px;">
<?php
if(!isset($_SESSION['emid']))
{?>

<li><a href="Register.php">Register</a></li>
<li style="color: white"> | </li>
<? }
?>
<li><a href="index.php">Homepage</a></li>
<li style="color: white"> | </li>
<li class="last"><a href="contact.php">Contact Us</a></li>
<br class="clear" />
</div>
</div>