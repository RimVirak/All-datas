<?php
	// This is a webservice
	// Don't use any HTML tags inside a webservice
    header('Content-Type:application/json');
    header('Access-Control-Allow-Origin: *');

	sleep(1);

	// Create connection by providing server address, login, password and database name
	$con=mysqli_connect("localhost","root","","webservice");

	// Check connection
	if (mysqli_connect_errno()) {
	 	die("Failed to connect to MySQL: " . mysqli_connect_error());
	}

	// If one of the two values is set, we have to perform an action and return a message
	if((isset($_POST['name']))or(isset($_POST['id']))){
		// If name is set then a new student will be created
		if(isset($_POST['name'])){
			$name = $_POST['name'];

			// Execute the insert query
			$result = mysqli_query($con,"INSERT INTO students (name) VALUES ('$name')");

			// if the result is 0, display error message
			if ($result == FALSE) {
				echo json_encode(array('message' => "error: " . mysqli_error($con)));
			}	
			else {
				echo json_encode(array('message' => 'ok'));
			}
		}

		// If id is set then a student will be deleted
		if(isset($_POST['id'])){
			$id = $_POST['id'];

			// Execute a query
			$result = mysqli_query($con,"DELETE FROM students WHERE id=$id");

			// if the result is false, display error message
			if ($result == FALSE) {
				echo json_encode(array('message' => "error: " . mysqli_error($con)));
			}	
			else {
				echo json_encode(array('message' => 'ok'));
			}
		}
	}
	// Else, we just return the list of students
	else {
		// Execute a query
		$result = mysqli_query($con,"SELECT id,name FROM students");

		// Loop over the results to convert in array
		$rows = array();
		while($row = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}

		// convert array to json and display
		echo(json_encode($rows));
	}

	
?>