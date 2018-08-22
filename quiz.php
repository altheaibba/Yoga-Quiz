<?php
	session_start();
	include('dbConn.php');

	$id = $_GET['id'];
?>

<html>
<head>
	<title>QUIZ</title>
</head>
<style>
	header {
		font-family: Verdana, Geneva, sans-serif;
	    color: #145666;
	    clear: left;
	}

	p {
		font-family: Verdana, Geneva, sans-serif;
		color: #000066;
		font-style: italic;
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
	<div class="wrapper"><a href="welcome.php?id=2" class="btn">Back</a></div>
	<br>
	<?php
		if ($id == 1)
		{
			echo " <form id='1' method='post' action='results.php'>
				<header><h2>ENGLISH to SANSKRIT</h2></header>
				<p>What are the Sanskrit names of the following poses?</p>
				<div class = 'hr'><hr/></div>
				<br>
				<img src='imgs/card1.jpg' alt='Tree Pose'>
				<br>
					<input type='radio' name='q1' value='wrong'/>Sirsasana<br>
					<input type='radio' name='q1' value='right'/>Vrksasana<br>
					<input type='radio' name='q1' value='wrong'/>Anjaneyasana<br>
					<input type='radio' name='q1' value='wrong'/>Tadasana<br>
				<br>
				<img src='imgs/card2.jpg' alt='Upward Warrior 2'>
				<br>
					<input type='radio' name='q2' value='wrong'/>Parivrtta Ustrasana<br>
					<input type='radio' name='q2' value='wrong'/>Kapotasana<br>
					<input type='radio' name='q2' value='wrong'/>Parsvakonasana<br>
					<input type='radio' name='q2' value='right'/>Urdhva Virabhadrasana<br>
				<br>
				<img src='imgs/card3.jpg' alt='Spread Foot Pose'>
				<br>
					<input type='radio' name='q3' value='wrong'/>Halasana<br>
					<input type='radio' name='q3' value='wrong'/>Supta Konasana<br>
					<input type='radio' name='q3' value='right'/>Prasarita Padottanasana<br>
					<input type='radio' name='q3' value='wrong'/>Parsvottanasana<br>
				<br>
				<img src='imgs/card4.jpg' alt='Corpse Pose'>
				<br>
					<input type='radio' name='q4' value='wrong'/>Tadakasana<br>
					<input type='radio' name='q4' value='wrong'/>Navasana<br>
					<input type='radio' name='q4' value='right'/>Savasana<br>
					<input type='radio' name='q4' value='wrong'/>Sirsasana<br>
				<br>
				<img src='imgs/card5.jpg' alt='Revolving Half Lotus'>
				<br>
					<input type='radio' name='q5' value='wrong'/>Eka Pada Parivrtta Upavisthasana<br>
					<input type='radio' name='q5' value='right'/>Parivrtta Ardha Padmasana<br>
					<input type='radio' name='q5' value='wrong'/>Parivrtta Upavistha Konasana<br>
					<input type='radio' name='q5' value='wrong'/>Virasana<br>
				<br>
				<img src='imgs/card6.jpg' alt='Side Staff Pose'>
				<br>
					<input type='radio' name='q6' value='right'/>Parsva Dandasana<br>
					<input type='radio' name='q6' value='wrong'/>Vrksasana<br>
					<input type='radio' name='q6' value='wrong'/>Anjaneyasana<br>
					<input type='radio' name='q6' value='wrong'/>Tadasana<br>
				<br>
				<img src='imgs/card7.jpg' alt='Downward Facing Tree'>
				<br>
					<input type='radio' name='q7' value='wrong'/>Sirsasana<br>
					<input type='radio' name='q7' value='wrong'/>Vrksasana<br>
					<input type='radio' name='q7' value='wrong'/>Anjaneyasana<br>
					<input type='radio' name='q7' value='right'/>Adho Mukha Vrksasana<br>
				<br>
				<img src='imgs/card8.jpg' alt='Mountain Pose'>
				<br>
					<input type='radio' name='q8' value='right'/>Tadasana<br>
					<input type='radio' name='q8' value='wrong'/>Vrksasana<br>
					<input type='radio' name='q8' value='wrong'/>Anjaneyasana<br>
					<input type='radio' name='q8' value='wrong'/>Tadasana<br>

				<img src='imgs/card9.jpg' alt='Serpent Vishnu Slept On'>
				<br>
					<input type='radio' name='q9' value='wrong'/>Astangasana<br>
					<input type='radio' name='q9' value='right'/>Ardha Padma Anantasana<br>
					<input type='radio' name='q9' value='wrong'/>Ardha Chandrasana<br>
					<input type='radio' name='q9' value='wrong'/>Adho Muka Kapotasana<br>
				<br>
				<img src='imgs/card10.jpg' alt='Eight Limb Pose'>
				<br>
					<input type='radio' name='q10' value='wrong'/>Uktasana<br>
					<input type='radio' name='q10' value='right'/>Astangasana<br>
					<input type='radio' name='q10' value='wrong'/>Ustrasana<br>
					<input type='radio' name='q10' value='wrong'/>Ardha Padmasana<br>
				<br>
				<input type='submit' name='submit1' value='Submit'/>
			</form>";
		}

		if ($id == 2)
		{
			echo " <form id='2' method='post' action='results.php'>
				<header><h2>SANSKRIT to ENGLISH</h2></header>
				<p>What are the English names of the following poses?</p>
				<div class = 'hr'><hr/></div>
				<br>
				<img src='imgs/card11.jpg' alt='Yoganidrasana'>
				<br>
					<input type='radio' name='q11' value='wrong'/>Downward Facing Pigeon Pose<br>
					<input type='radio' name='q11' value='right'/>Yogic Sleep Pose<br>
					<input type='radio' name='q11' value='wrong'/>Half Frog Side Shoulderstand Pose<br>
					<input type='radio' name='q11' value='wrong'/>Bow Pose<br>
				<br>
				<img src='imgs/card12.jpg' alt='Parivrtta Ustrasana'>
				<br>
					<input type='radio' name='q12' value='wrong'/>Chair Pose<br>
					<input type='radio' name='q12' value='right'/>Revolved Camel Pose<br>
					<input type='radio' name='q12' value='wrong'/>Lunge Pose<br>
					<input type='radio' name='q12' value='wrong'/>Revolved Extended Side Angle<br>
				<br>
				<img src='imgs/card13.jpg' alt='Eka Pada Jathara Parivarttanasana'>
				<br>
					<input type='radio' name='q13' value='right'/>One Leg Revolved Belly Pose<br>
					<input type='radio' name='q13' value='wrong'/>Half Revolved Belly Pose<br>
					<input type='radio' name='q13' value='wrong'/>Downward Facing Pigeon Pose<br>
					<input type='radio' name='q13' value='wrong'/>Arm Balance Scorpion<br>
				<br>
				<img src='imgs/card14.jpg' alt='Astavakrasana'>
				<br>
					<input type='radio' name='q14' value='right'/>Ancient Sage Cursed With Crooked Limbs<br>
					<input type='radio' name='q14' value='wrong'/>Monkey King Pose<br>
					<input type='radio' name='q14' value='wrong'/>Revolving Beam Pose<br>
					<input type='radio' name='q14' value='wrong'/>Named After A Sage<br>
				<br>
				<img src='imgs/card15.jpg' alt='Sirsa Setu Bandhasanasana'>
				<br>
					<input type='radio' name='q15' value='wrong'/>Fish Pose<br>
					<input type='radio' name='q15' value='wrong'/>Upward Bow<br>
					<input type='radio' name='q15' value='right'/>Bridge On The Head<br>
					<input type='radio' name='q15' value='wrong'/>Knee To The Head<br>
				<br>
				<img src='imgs/card16.jpg' alt='Tadakasana'>
				<br>
					<input type='radio' name='q16' value='right'/>Large Pit or Hollow<br>
					<input type='radio' name='q16' value='wrong'/>Reclining Hero Pose<br>
					<input type='radio' name='q16' value='wrong'/>Corpse Pose<br>
					<input type='radio' name='q16' value='wrong'/>Lying Down Westward Pose<br>
				<br>
				<img src='imgs/card17.jpg' alt='Krounchasana'>
				<br>
					<input type='radio' name='q17' value='wrong'/>One Leg Bridge Pose<br>
					<input type='radio' name='q17' value='wrong'/>One Leg Revolved Belly Pose<br>
					<input type='radio' name='q17' value='wrong'/>One Leg Side Crane Pose<br>
					<input type='radio' name='q17' value='right'/>Heron Pose<br>
				<br>
				<img src='imgs/card18.jpg' alt='Ardha Chandrasana'>
				<br>
					<input type='radio' name='q18' value='wrong'/>Warrior 3<br>
					<input type='radio' name='q18' value='wrong'/>Triangle Pose<br>
					<input type='radio' name='q18' value='wrong'/>Revoled Triangle Pose<br>
					<input type='radio' name='q18' value='right'/>Half Moon Pose<br>
				<br>
				<img src='imgs/card19.jpg' alt='Baddha Konasana'>
				<br>
					<input type='radio' name='q19' value='wrong'/>One Leg Revolving Seated Pose<br>
					<input type='radio' name='q19' value='wrong'/>Hero Pose<br>
					<input type='radio' name='q19' value='wrong'/>Half Lotus Pose<br>
					<input type='radio' name='q19' value='right'/>Bound Angle Pose<br>
				<br>
				<img src='imgs/card20.jpg' alt='Uttanasana'>
				<br>
					<input type='radio' name='q20' value='wrong'/>Downward Facing Dog<br>
					<input type='radio' name='q20' value='right'/>Standing Forward Bend<br>
					<input type='radio' name='q20' value='wrong'/>Downward Facing Staff<br>
					<input type='radio' name='q20' value='wrong'/>Scorpion<br>
				<br>
				<input type='submit' name='submit2' value='Submit'/>
			</form>";
		}
	?>
</body>
</html>