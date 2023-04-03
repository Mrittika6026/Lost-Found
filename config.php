<?php

session_start();//this willstart all the sessions 

//creating constants to store the localhost, roor, password and database.
define('LOCALHOST','localhost');
define('ROOT','root');
define('PASSWORD','');
define('DATABASE','lost_found_db');
define('SITEURL','http://localhost/project/');

//connecting to the database...

$conn = mysqli_connect(LOCALHOST,ROOT,PASSWORD,DATABASE) or die(mysqli_error('Failed to connect!'));
$db_select = mysqli_select_db($conn,DATABASE) or die(mysqli_error('Failed to select Database')); 

?>