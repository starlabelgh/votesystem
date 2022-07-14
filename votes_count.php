

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>
<form action="insert.php" method="post">
    <p>
        <label for="voters_id">Voters ID:</label>
        <input type="text" name="voters_id" id="voters_id">
    </p>
    <p>
        <label for="candidate_id">Candidate ID:</label>
        <input type="text" name="candidate_id" id="candidate_id">
    </p>
    <p>
        <label for="position_id">Position ID:</label>
        <input type="text" name="position_id" id="position_id">
    </p>
    <p>
        <label for="candidate_votes">Candidate Votes:</label>
        <input type="number" name="candidate_votes" id="candidate_votes">
    </p>
    <input type="submit" value="Submit">
</form>
</body>
</html>