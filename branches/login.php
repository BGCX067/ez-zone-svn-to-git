<?php
ob_start();
session_start();
include('connect.php');

if($_POST['log']=="Login")
{
$email=$_POST['email'];
$psword=$_POST['password'];
}
else
{
echo("No data received");
}
$query="select email,pass  from ".T_REG." where email='$email' and pass='$psword'";
$result=mysql_query($query);
if(mysql_affected_rows()&& $email!='' && $psword!='')
{
$_SESSION['emid']=$email;
$_SESSION['pswd']=$psword;
header("Location:index.php");
}
else
{
header("Location: index.php");
}

?>