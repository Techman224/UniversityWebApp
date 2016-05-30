<HTML>
	<HEAD>
		<TITLE>Professor Result</TITLE>
	</HEAD>

	<BODY>

		<H2> Add Professor Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$profNum = $_POST['profNum'];
		$fName = $_POST['fName'];
		$lName = $_POST['lName'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "INSERT INTO PROFS (Prof_Num, FName, LName) VALUES ('" . $profNum . "' , '" . $fName . "' , '" . $lName . "');";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}


		if ($mysqli->query($query) === TRUE) {
    		echo "New professor created successfully";
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
