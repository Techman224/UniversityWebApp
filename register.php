<HTML>
	<HEAD>
		<TITLE>Register Result</TITLE>
	</HEAD>

	<BODY>

		<H2> Registration Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$stNum = $_POST['stNum'];
		$cNum = $_POST['cNum'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "INSERT INTO REGISTERED_IN (St_Num,C_Num) VALUES ('" . $stNum . "' , '" . $cNum . "');";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}


		if ($mysqli->query($query) === TRUE) {
    		echo "Student course registration successfull";
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
