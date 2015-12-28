<?php
if(isset($_POST['submit'])=='value')
{  
  $name=$_POST['txtFullName'];
  $eml=$_POST['txtEmail'];
  $subject=$_POST['txtSubject'];
  $msg = $_POST['txtMessage'];     
  echo $message = 'Name:'.$name."<br/>".'Message:'.$msg;
  $header='from:$eml';
  $email='ezone@gmail.com';
  mail( $email, $subject,$message,$header);
  echo "Thank you for using our mail form";
  }
else
  {
  echo "sending failed";
  }
?>