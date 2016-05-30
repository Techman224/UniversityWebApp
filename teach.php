<HTML>
	<HEAD>
		<TITLE>Teach Result</TITLE>
	</HEAD>

	<BODY>

		<H2> Add Teacher Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$profNum = $_POST['profNum'];
		$cNum = $_POST['cNum'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "INSERT INTO TEACHES (Prof_Num, C_Num) VALUES ('" . $profNum . "' , '" . $cNum . "');";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}


		if ($mysqli->query($query) === TRUE) {
    		echo "Teacher added to course successfully";
		} else {
    		echo "Error: " . $query . "<br>" . $mysqli->error;
		
		}

		// Close the database connection
		$mysqli->close();

		?>

		</H2>

		<p><button type="button" onClick="location.href='app.html';">Back to Start</button></p>

	</BODY>
</HTML>
