<?php
ob_start();
include('connect.php');
?>
<?php
session_start();
unset($_SESSION['emid']);
unset($_SESSION['pswd']);
session_destroy();
header('location:index.php');
?>

