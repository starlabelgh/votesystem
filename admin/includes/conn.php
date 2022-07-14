<?php
	$conn = new mysqli('localhost', 'votersystem', '1234567890', 'votersystem');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>