<?php
	session_start();
	include("dbConn.php");

	if(isset($_POST["submit"]))
	{
		$name = $_POST["name"];
		$_SESSION['name'] = $name;

		$result = mysqli_query($dbConn, "INSERT INTO users (name) VALUES ('$name')");

		if($result)
		{
			header("location: welcome.php?id=1");
		}
		else
		{
			header("location: welcome.php?id=2");
		}
	}

?>

<html>
<head>
	<title>HOME</title>
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

	p {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
	}

	footer {
		font-family: "Times New Roman", Times, serif;
		font-size: 16px;
		font-weight: bold;
		color: #4d91a8;

	}

	.wrapper {
  		text-align: center;
	}

	input[type=text], select, textarea {
	    padding: 12px;
	    border: 1px solid #ccc;
	    border-radius: 4px;
	    resize: vertical;
	}

	input[type=submit] {
	    background-color: #71bdd6;
	    color: white;
	    padding: 12px 20px;
	    border: none;
	    border-radius: 4px;
	    cursor: pointer;
	    float: center;
	}

	input[type=submit]:hover {
	    background-color: #4d91a8;
	}

	hr {
		border: 0;
  		width: 80%;
		color: #145666;
		background-color: #145666;
		height: 5px;
	}
</style>
<body bgcolor=" #80ccff">
<div class="wrapper" id="login">
	<br>
	<header><h1>Yoga Quiz</h1></header>
	<img src="imgs/yogapose.png" alt="Yoga Pose" style="width:100px;height:100px" align="middle">
	<br></br>
	<br></br>
		<form action="homepage.php" method="post">
			<p>Please enter your name below to begin:</p>
				<input type="text" name="name" id="name"/>
				<input type="submit" name="submit" value="Start"/>
		</form>
		<br></br>
	<footer>
		<div class = "hr"><hr/></div>
		<br>
		Credits: 
		<br>
		The yoga pose cards used in this web app belongs to <a href=http://www.yogacards.com/>http://www.yogacards.com/</a>
	</footer>
</div>
</body>
</html>