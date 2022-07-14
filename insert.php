<?php
include 'includes/conn.php';
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$voters_id = mysqli_real_escape_string($link, $_REQUEST['voters_id']);
$candidate_id = mysqli_real_escape_string($link, $_REQUEST['candidate_id']);
$position_id = mysqli_real_escape_string($link, $_REQUEST['position_id']);
$candidate_votes = mysqli_real_escape_string($link, $_REQUEST['candidate_votes']);
 
// Attempt insert query execution
$sql = "INSERT INTO votes (voters_id, candidate_id, position_id, candidate_votes) VALUES (".$voters_id"', '$candidate', '$pos_id', '$candidate_votes')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>