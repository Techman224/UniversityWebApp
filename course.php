<HTML>
	<HEAD>
		<TITLE>Course Result</TITLE>
	</HEAD>

	<BODY>

		<H2> Course Add Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$hours = $_POST['hours'];
		$cName = $_POST['cName'];
		$cNum = $_POST['cNum'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "INSERT INTO COURSES (Hours, C_Name, C_Num) VALUES ('" . $hours . "' , '" . $cName . "' , '" . $cNum . "');";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}


		if ($mysqli->query($query) === TRUE) {
    		echo "New course created successfully";
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
