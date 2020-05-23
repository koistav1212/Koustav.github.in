<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'sql9.freemysqlhosting.net ');
define('DB_USERNAME', 'sql9342795');
define('DB_PASSWORD', 'RrcdYEhH51');
define('DB_NAME', 'sql9342795');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
