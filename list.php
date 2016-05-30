<HTML>
	<HEAD>
		<TITLE>List Result</TITLE>
	</HEAD>

	<BODY>

		<H2> List Courses Result:

		<?php

		require ('.credentials.php');

		// Pull out parameters from the form into local vbles
		$stNum = $_POST['stNum'];

		//echo $fnam." - ";

		// Build the DB query
		$query = "select * from REGISTERED_IN WHERE St_Num = '" . $stNum . "';";
		//$query = "SELECT lname FROM Names WHERE fname = '" .  $fnam . "'";

		$mysqli = new mysqli();

		// Connect to database
		$mysqli->connect("localhost",$MYSQL_USER,$MYSQL_PW,$MYSQL_DB);
		if ($mysqli->errno) {
		        printf("Error connecting to database: %s <br />",$mysqli->error);
		        exit();
		}

		$results = $mysqli->query($query);

		if ($results !== FALSE) {
    		echo $stNum . " is registered in:";

    		if ($results->num_rows > 0) {
    			// output data of each row
   				while($row = $results->fetch_assoc()) {
   					echo "<br><br> Course: " . $row["C_Num"];
   				}
			} else {
   				echo "<br>0 courses";
			}

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
