<?php 

$db_host = "sql311.epizy.com";
// Place the username for the MySQL database here
$db_username = "epiz_33459705"; 
// Place the password for the MySQL database here
$db_pass = "hvZgW4p2guu7"; 
// Place the name for the MySQL database here
$db_name = "epiz_33459705_mytest_db";

// Run the connection here 
mysql_connect("$db_host","$db_username","$db_pass") or die (mysql_error());
mysql_select_db("$db_name") or die ("no database");

?>
