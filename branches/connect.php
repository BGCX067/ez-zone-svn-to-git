
<?php
/*
	=====================================
	|									|
	|	Team : Gisterpages				|
	|	Web: gisterpages.com			|		
	=====================================
*/
	define("MYSQL_SERVER","localhost");
	define("MYSQL_USER","root");
	define("MYSQL_PASS","");
	
	define("MYSQL_DB","ezzone");
	
	define("T_REG","reg");
	define("T_CMT","comment123");
	define("T_MOV","movie");
	define("T_ADMIN","admin");

//database connection

$connection = mysql_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASS);
if (!$connection){
die ("Could not connect to the database: <br />". mysql_error());
}

$db_select = mysql_select_db(MYSQL_DB);
if (!$db_select){
die ("Could not select the database: <br />". mysql_error());
}
?>

