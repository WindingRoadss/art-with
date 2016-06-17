<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$con = mysqli_connect("localhost","ked9181","dbwhdwlal9181","u790621329_awith");

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
    echo "Connection Success!"
/*define ('HOST','mysql.hostinger.kr');
define ('USER','u790621329_ujjm');
define ('PASS','dbwhdwlal9181');
define ('DB','u790621329_awith');

$con = new mysqli(HOST,USER,PASS,DB);
if ($con->errno) { exit('No connection'.$con->error);}

mysqli_query($con,"select * from CATEGORY");*/
/*$link = mysqli_connect("mysql.hostinger.kr", "u790621329_ujjm", "dbwhdwlal9181", "u790621329_awith");

if (!$link) {
	echo "Error: Unable to connect to MySQL." . PHP_EOL;
	echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
	echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
	exit;
}

echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
echo "Host information: " . mysqli_get_host_info($link) . PHP_EOL;

mysqli_close($link);*/
?>