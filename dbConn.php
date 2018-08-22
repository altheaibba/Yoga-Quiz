<?php
	$dbHost = 'localhost';
	$dbName = 'assignment4';
	$dbUsername = 'root';
	$dbPassword = '';

	$dbConn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

	$sql = 'SELECT * FROM users';
	$query = mysqli_query($dbConn,$sql);
?>