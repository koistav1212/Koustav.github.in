<?php
define('DB_SERVER','fdb25.awardspace.net');
define('DB_USER','3461588_owndb');
define('DB_PASS' ,'Koustav@123');
define('DB_NAME', '3461588_owndb');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

