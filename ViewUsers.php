<?php

$mysqli = new mysqli("mysql.eecs.ku.edu", "priyalchauhan", "Muotiem7", "priyalchauhan");

if ($mysqli->connect_errno) {
	printf("Connect failed: %s\n", $mysqli->connect_error);
	exit();
}

echo "<table>";
echo "<tr><th>Users</th></tr>";

$query = "SELECT user_id FROM Users";
if ($result = $mysqli->query($query)) {
	while ($row = $result->fetch_assoc()) {
		echo "<tr><td>" . $row["user_id"] . "</td><tr>";
	}
}

echo "</table>";

$result->free();
$mysqli->close();

?>
