<?php
	session_start();
	include("dbConn.php");

	if(isset($_POST["name"]))
	{
		$name = $_POST["name"];
		$_SESSION["name"] = $name;
		$_SESSION["total1"] = 0;
		$_SESSION["overall1"] = 0;
		$_SESSION["total2"] = 0;
		$_SESSION["overall2"] = 0;
	}

	$_SESSION["score"] = 0;
	
	$id = $_GET['id'];

?>

<html>
<head>
	<title>WELCOME</title>
</head>
<style>
.btn {
	  background: #2db3ac;
	  background-image: -webkit-linear-gradient(top, #2db3ac, #09314a);
	  background-image: -moz-linear-gradient(top, #2db3ac, #09314a);
	  background-image: -ms-linear-gradient(top, #2db3ac, #09314a);
	  background-image: -o-linear-gradient(top, #2db3ac, #09314a);
	  background-image: linear-gradient(to bottom, #2db3ac, #09314a);
	  -webkit-border-radius: 28;
	  -moz-border-radius: 28;
	  border-radius: 28px;
	  box-shadow: 0 0 3px black;
	  font-family: Verdana, Geneva, sans-serif;
	  color: #ffffff;
	  font-size: 20px;
	  padding: 10px 20px 10px 20px;
	  text-decoration: none;
	}

	.btn:hover {
	  background: #35807c;
	  text-decoration: none;
	}

	.logout {
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  border-radius: 0px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 16px;
	  background: #517a96;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	  position: absolute;
	  top: 8px;
	  right: 16px;
	}

	.logout:hover {
	  background: #10344a;
	  text-decoration: none;
	}

	.wrapper {
  		text-align: center;
	}

	hr {
		border: 0;
  		width: 80%;
		color: #145666;
		background-color: #145666;
		height: 5px;
	}

	div#header {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 30px;
	    color: #145666;
	    text-shadow: 0 0 3px #683949;
	    clear: left;
	    text-align: center;
	}

	div#score {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
		text-align: center;
		font-weight: bold;
	}

	p {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
		text-align: center;
		font-weight: bold;
	}
</style>
<body bgcolor=" #80ccff">
	<a href="logout.php" class="logout">End Session</a>
	<br></br>
	<br></br>
	<?php
		if($id==1)
		{
			echo "<div id='header'>Welcome, " .$_SESSION["name"]. "! </div>";
		}
		else if($id==2)
		{
			echo "<div id='header'>Welcome Back, " .$_SESSION["name"]. "! </div>";
		}
	?>
	<br>
	<div class = "hr"><hr/></div>
	<br>
	<?php
		echo "<div id='score'>Your overall score for this session is: " .$_SESSION["total1"] + $_SESSION["total2"]. "/" .$_SESSION["overall1"] + $_SESSION["overall2"]. "</div>";
	?>
	<br>
	<p>Which quiz would you like to take?</p>
	<br>
	<div class="wrapper"><a href="quiz.php?id=1" class="btn">English to Sanskrit</a></div>
	<br></br>
	<div class="wrapper"><a href="quiz.php?id=2" class="btn">Sanskrit to English</a></div>
</body>
</html>