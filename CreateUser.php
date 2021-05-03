<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "priyalchauhan", "Muotiem7", "priyalchauhan");


if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

$query = "INSERT INTO Users VALUES ('" . $_POST["username"] . "')";

if ($result = $mysqli->query($query)) {
	echo "<p>User was added to SQL database</p>";
} else {
	echo "<p>User not added to SQL database as the username already exists.</p>";
}

$result->free();
$mysqli->close();

?>
