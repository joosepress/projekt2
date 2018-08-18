<?php
$host = "localhost";
$username = "joosepress";
$password = "na0r0b0t8";
$database = "mydb";

$connection = mysqli_connect($host, $username, $password, $database);


if(!$connection){
	die("connection failed: " . mysqli_connect_error());
}
?>
