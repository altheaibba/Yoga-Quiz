<?php 
	session_start();
	include("dbConn.php");

	$_SESSION["score"] = 0;

	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST["submit1"]))
		{
			for($i=1; $i<=10; $i++)
			{
				if($_POST["q".$i] == "right")
				{
					$_SESSION["score"]++;
				}
			}

			if(isset($_SESSION["total1"]) && isset($_SESSION["overall1"]))
			{
				$_SESSION["total1"] = $_SESSION["total1"] + $_SESSION["score"];
				$_SESSION["overall1"] = $_SESSION["overall1"] + 10;
			}
		}

		if(isset($_POST["submit2"]))
		{
			for($i=11; $i<=20; $i++)
			{
				if($_POST["q".$i] == "right")
				{
					$_SESSION["score"]++;
				}
			}

			if(isset($_SESSION["total2"]) && isset($_SESSION["overall2"]))
			{
				$_SESSION["total2"] = $_SESSION["total2"] + $_SESSION["score"];
				$_SESSION["overall2"] = $_SESSION["overall2"] + 10;
			}
		}
	}
	
?>

<html>
<head>
	<title>RESULTS</title>
</head>
<style>
	header {
		font-family: Verdana, Geneva, sans-serif;
		font-size: 24px;
	    color: #145666;
	    text-shadow: 0 0 3px #683949;
	    clear: left;
	    text-align: center;
	}

	div {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
		font-size: 23px;
		font-weight: bold;
		text-align: center;
	}

	.btn {
	  -webkit-border-radius: 0;
	  -moz-border-radius: 0;
	  border-radius: 0px;
	  font-family: Arial;
	  color: #ffffff;
	  font-size: 12px;
	  background: #517a96;
	  padding: 5px 10px 5px 10px;
	  text-decoration: none;
	}

	.btn:hover {
	  background: #10344a;
	  text-decoration: none;

	.wrapper {
  		text-align: center;
	}
</style>
<body bgcolor=" #80ccff">
	<br></br>
	<header><h2>Result</h2></header>
	<?php
		echo "<div>Your score for this quiz is: " .$_SESSION["score"]. " / 10</div>" ;
	?>
	<br></br>
	<div class="wrapper"><a href="welcome.php?id=2" class="btn">OK</a></div>
</body>
</html>
