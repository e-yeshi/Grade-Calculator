<html>
	<head>
		<title>IT 207 Final Grade Determiner</title>
		<link rel="stylesheet" type="text/css" href="./styles.css">
	</head>
	
	<body>
	<?php include '../menu.php';?>
		<div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
				<form action="finalgrade.php" method="post">
						<h3 class="titles">Participation</h3>
						Earned: <input class="feild" type="text" name="earnedParticipation" />
						Max: <input class="feild" type="text" name="maxParticipation" />
						Weight (percentage): <input class="feild" type="text" name="weightParticipation" />
						<h3 class="titles">Quizzes</h3>
						Earned: <input class="feild" type="text" name="earnedQuiz" />
						Max: <input class="feild" type="text" name="maxQuiz" />
						Weight (percentage): <input class="feild" type="text" name="weightQuiz" />
						<h3 class="titles">Lab Assignments</h3>
						Earned: <input class="feild" type="text" name="earnedLab" />
						Max: <input class="feild" type="text" name="maxLab" />
						Weight (percentage): <input class="feild" type="text" name="weightLab" />
						<h3 class="titles">Practica</h3>
						Earned: <input class="feild" type="text" name="earnedPracticum" />
						Max: <input class="feild" type="text" name="maxPracticum" />
						Weight (percentage): <input class="feild" type="text" name="weightPracticum" />
						<br /><br />
						<!-- <input type="submit" /> -->
						<button type="submit" class="submit-button btn btn-primary">Submit</button>
						<button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
					</form>
		</div>
		<?php include '../footer.php';?>
	</body>
</html>
