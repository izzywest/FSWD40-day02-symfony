<?php
// database connection
error_reporting( ~E_DEPRECATED & ~E_NOTICE );
define('DBHOST', 'localhost');
define('DBUSER', 'schahnaz');
define('DBPASS', 'root');
define('DBNAME', 'symfonyDay2');
$conn = mysqli_connect(DBHOST,DBUSER,DBPASS,DBNAME);
if ( !$conn ) {
 die("Connection failed : " . mysqli_error());
} 
?>