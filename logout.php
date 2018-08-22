<?php
	session_start();
	session_destroy();
?>

<html>
<head>
	<title>LOG OUT</title>
</head>
<style>
	p {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
	}

	.btn {
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  border-radius: 0px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 14px;
	  background: #517a96;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	}

	.btn:hover {
	  background: #10344a;
	  text-decoration: none;
	}

	.wrapper {
  		text-align: center;
	}
</style>
<body bgcolor=" #80ccff">
	<br></br>
	<div class="wrapper">
	<p> Successfully logged out of your session.</p>
	<br>
	<a href="homepage.php" class="btn">Click here to log in again</a>
	</div>
</body>
</html>