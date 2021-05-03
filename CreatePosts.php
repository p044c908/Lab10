<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "priyalchauhan", "Muotiem7", "priyalchauhan");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "INSERT INTO Posts (content, author_id) VALUES ('" . $_POST["content"] . "', '" . $_POST["username"] . "')";

if ($result = $mysqli->query($query)) {
	echo "<p>Post added to the database</p>";
} else {
	echo "<p>User invalid. Post was not added</p>";
}

$result->free();
$mysqli->close();

?>
