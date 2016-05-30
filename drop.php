<HTML>
	<HEAD>
		<TITLE>Drop Result</TITLE>
	</HEAD>

	<BODY>

		<H2> Drop Course Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$stNum = $_POST['stNum'];
		$cNum = $_POST['cNum'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "DELETE FROM REGISTERED_IN WHERE St_Num = '". $stNum . "' AND C_Num = '" . $cNum . "'";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}


		if ($mysqli->query($query) === TRUE) {
    		echo "Course dropped successfully";
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
