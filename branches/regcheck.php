<?php ob_start();
include('connect.php');
$rname=$_POST['uname'];
$rpwd=$_POST['pword'];
$reid=$_POST['email'];
$radr=$_POST['addr'];
$rpno=$_POST['ph'];
$query="select * from ".T_REG." where email='$reid'";
$result=mysql_query($query);
if(!mysql_affected_rows() && $rname!='' && $rpwd !='' && $reid!='')
{

echo $q_insert="insert into ".T_REG."(uname,pass,email,address,phone) values ('$rname','$rpwd','$reid','$radr','$rpno')";
$re_insert=mysql_query($q_insert);
if(!$re_insert)
{
echo("could not query");
}
else
{
header("location:index.php"); 
}
}
else
{
header("Location: Register.php?err=1");
}


?>