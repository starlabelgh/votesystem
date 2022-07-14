<?php
	// Attempt insert query execution
    $candidate = $_POST[$position];
	$sql_array[] = "INSERT INTO votes (voters_id, candidate_id, position_id, candidate_votes) VALUES (".$voter['id']."', '$candidate', '$pos_id', '$candidate_votes')";
	if(mysqli_query($link, $sql)){
		echo "Records added successfully.";
	} else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
	} 
?>