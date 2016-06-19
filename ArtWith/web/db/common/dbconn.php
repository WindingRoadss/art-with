<?php

/* 에러 출력 부분 */
/*
error_reporting(E_ALL);
ini_set("display_errors", 1);
*/

/* DB 연결 */
$conn = mysqli_connect("localhost","ked9181","dbwhdwlal9181","u790621329_awith");

/* Check connection */
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else {
    //echo "Connection Success!";
}

?>